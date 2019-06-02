<!DOCTYPE HTML>
<!--
   Industrious by TEMPLATED
   templated.co @templatedco
   Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
   <head>
      <title>Generic Page - Industrious by TEMPLATED</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <link href="css/CharacterStyle.css" rel="stylesheet" type="text/css">
      
   </head>
   
   <body class="is-preload">
      <!--홈버튼 메뉴 호버-->
      <div>
         <?php
          require 'menu.php' 
         ?>
      </div>
      <!-- Header -->
         <header id="header">
            <a id="p1" class="logo" href="index.html" style="font-family:SLANT; color: rgb(224, 45, 0); margin: auto;">APEX BANNER</a>
            <!--<nav>
               <a href="#menu">Menu</a>
            </nav>-->
         </header>

      <!-- Nav -->
         <!--<nav id="menu">
            <ul class="links">
               <li><a href="index.html">Main</a></li>
               <li><a href="character.html">Character</a></li>
               <li><a href="itemPage.html">Item</a></li>
               <li><a href="weaponPage.html">Weapon</a></li>
            </ul>
         </nav>-->

      <!-- Heading -->
         

      <!-- Main -->
      <?php
          require 'Regends.php' 
         ?>
      <!--<div class="regends">
        <a href="character.html"><img src="images/Test1.png" width="100" height="100" onmouseover="this.style.opacity='0.7'"onmouseout="this.style.opacity='1'"/></a>
        <a href="Bangalore.html"><img src="images/Test2.png" width="100" height="100" onmouseover="this.style.opacity='0.7'"onmouseout="this.style.opacity='1'"/></a>
-->
            </div>
         <section id="main" class="wrapper">
               
            <div class="inner">
               <div class="content">
                  
    <!--캐릭터 설명-->              
                       <div class="character" >
                          
                             <img src="images/charater/Bangalore.png" width="400" height="700"  />
                           
                           
                       </div>
                       <hr />
  <!--스킬메뉴탭-->                     
                       <div class="skill">
                        <div class="menu_tab">
                           <ul>
                              <li class="fst active"><a href="#;" onclick="tab_menu(0);"><img src="images/Wraith_skill01.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(1);"><img src="images/Wraith_skill02.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(2);"><img src="images/Wraith_skill03.png" width="200"height="100"></a></li>
                                                 </ul>
                           </div>
                           
                           <div class="menu_tab00 mTs" id="panels" >
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/bglAJajZFx4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="menu_tab01 mTs" id="panels" style="display: none;">
                            1
                            </div>
                            <div class="menu_tab02 mTs" id="panels" style="display: none;">
                            2
                            </div>
                            <div class="menu_tab03 mTs" id="panels" style="display: none;">
                            3
                            </div>
                                                 
                       </div>
                       <hr />
                          <div class="story" >
                           스토리 설명
                          </div><hr />
               </div>
            </div>
         </section>

      <!-- Footer -->
         <footer id="footer">
            <div class="inner">
               <div class="content">
                  <section>
                     <h3>Accumsan montes viverra</h3>
                     <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
                  </section>
                  <section>
                     <h4>Sem turpis amet semper</h4>
                     <ul class="alt">
                        <li><a href="#">Dolor pulvinar sed etiam.</a></li>
                        <li><a href="#">Etiam vel lorem sed amet.</a></li>
                        <li><a href="#">Felis enim feugiat viverra.</a></li>
                        <li><a href="#">Dolor pulvinar magna etiam.</a></li>
                     </ul>
                  </section>
                  <section>
                     <h4>Magna sed ipsum</h4>
                     <ul class="plain">
                        <li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
                        <li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
                        <li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
                        <li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
                     </ul>
                  </section>
               </div>
               <div class="copyright">
                  &copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
               </div>
            </div>
         </footer>

      <!-- Scripts -->
         <script src="assets/js/jquery.min.js"></script>
         <script src="assets/js/browser.min.js"></script>
         <script src="assets/js/breakpoints.min.js"></script>
         <script src="assets/js/util.js"></script>
         <script src="assets/js/main.js"></script>
         <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
  
  <script type="text/javascript">
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
        var jbOffset = $( '.regends' ).offset();
        $( window ).scroll( function() {
          if ( $( document ).scrollTop() > jbOffset.top ) {
            $( '.regends' ).addClass( 'jbFixed' );
            
          }
          else {
            $( '.regends' ).removeClass( 'jbFixed' );
          }
        });
        $("#p1").mouseenter(function(){
        document.getElementById("myNav").style.height = "196px";
      }); 
      $("#myNav").mouseleave(function(){
    document.getElementById("myNav").style.height = "0%";
  });
      } );

  </script>
   </body>
</html>