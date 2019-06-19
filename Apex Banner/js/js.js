function tab_menu(num){
   var f = $('.menu_tab').find('li');
   for ( var i = 0; i < f.length; i++ ) { 
    if ( i == num) { 
     f.eq(i).addClass('active');
     $('.menu_tab0' + i ).show();
    } else {
     f.eq(i).removeClass('active');   
     $('.menu_tab0' + i ).hide();
    }
   }
  }

  $( document ).ready( function() {
       
        $("#p1").mouseenter(function(){
        document.getElementById("myNav").style.height = "255px";
      }); 
      $("#myNav").mouseleave(function(){
    document.getElementById("myNav").style.height = "0%";
  });
      } );