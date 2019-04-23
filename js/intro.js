$(function(){
	var welcomSection = $('.welcome-section'),
  		enterButton = welcomSection.find('.enter-button');
      
      setTimeout(function(){
          welcomSection.removeClass('content-hidden');
          console.log("aa");
      },800);
      
      enterButton.on('click',function(e){
      	e.preventDefault();
        welcomSection.addClass('content-hidden').fadeOut();
      })
})