$(function(){
	$(function() {
		// SLIDER GALLERY //
		// when the next link is clicked
		// show the card with the class of .card-shown
		$('.next-button').on('click', function(e){
			// current card has a class of .card-shown
			var currentActiveCard = $('.card-shown');
			// moves to the next element
			var nextActiveCard = currentActiveCard.next();
				// when the carousel ends, we want to go back to the first card
				//0 means when there is nothing left, then go back to the first one
				if(nextActiveCard.length === 0) {
					nextActiveCard = $('.carousel-card').first();
				}
				console.log(nextActiveCard.length);
			// then, remove class of .card-shown
			// and add class of .card-hidden
			// adding z-index to make sure the the card will be the last in the stack of cards
			currentActiveCard.removeClass('card-shown').addClass('card-hidden').css('z-index', -10);
			// the next active card gets a class of .card-shown and remove the class of .card-hidden
			// z-index we want to be at top of stack of images
			nextActiveCard.addClass('card-shown').removeClass('card-hidden').css('z-index', 20);
			//set all the cards to a z-index of 1
			// EXCEPT for the current active and next active cards
			// $('.carousel-inner').not([currentActiveCard, nextActiveCard]).css('z-index', 1);
			// preventing the default action of an anchor
			e.preventDefault();
		}); // end of previous button function
		$('.previous-button').on('click', function(e) {
			var currentActiveCard = $('.card-shown');
			console.log(currentActiveCard);
			var nextActiveCard = currentActiveCard.prev();
				//0 means when there is nothing left, then go back to the last one
				if(nextActiveCard.length === 0) {
					nextActiveCard = $('.carousel-card').last();
				}
			currentActiveCard.removeClass('card-shown').addClass('card-hidden').css('z-index', -10);
			nextActiveCard.addClass('card-shown').removeClass('card-hidden').css('z-index', 20);
			// $(".carousel-inner").not([currentActiveCard, nextActiveCard]).css('z-index', 1);
			// preventing the default action of an anchor
			e.preventDefault();
		}); //end of next button function
		var questionsArray = ['What is your name?', 'How old are you?', 'Where do you live?', 'What is the name of your mother?', 'What is the name of your dog?', 'What is the name of your dad?', 'Who is your best friend?', 'What is your favourite colour?', 'This is question 9', 'This is question 10']
		questionsArray.forEach(function(question, index){
			var showOrHide = '';
			if(index === 0) {
				showOrHide = 'card-shown';
			} else {
				showOrHide='card-hidden';
			}
			var card = `<div class="carousel-card ${showOrHide}" id="${index + 1}">${question}</div>`;
			if($('div.carousel-card').hasClass('card-hidden')){
				setTimeout(1000);
			}
			$('.carousel-inner').append(card);
		});
	}); //end of document ready
});