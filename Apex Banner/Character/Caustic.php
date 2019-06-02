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
      <link rel="stylesheet" href="../assets/css/main.css" />
      <link href="../css/CharacterStyle.css" rel="stylesheet" type="text/css">
      
   </head>
   
   <body class="is-preload">
      <!--top메뉴 포함-->
      <div>
         <?php
          include '../menu.php' 
         ?>
      </div>

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
          include '../Regends.php' 
         ?>
         <section id="main" class="wrapper">
               
            <div class="inner">
               <div class="content">
                  
    <!--캐릭터 설명-->              
                       <div>
                          
                             <img class="character" src="../images/character/tall/Caustic-tall.png"/>
                           
                       </div>
                       <hr />
  <!--스킬메뉴탭-->                     
                       <div class="skill">
                        <div class="menu_tab">
                           <ul>
                              <li class="fst active"><a href="#;" onclick="tab_menu(0);"><img src="../images/Wraith_skill01.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(1);"><img src="../images/Wraith_skill02.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(2);"><img src="../images/Wraith_skill03.png" width="200"height="100"></a></li>
                                                 </ul>
                           </div>
                           
                           <div class="menu_tab00 mTs" id="panels" >
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
                       <iframe width="100%" height="600px" src="https://www.youtube.com/embed/bglAJajZFx4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <hr />
                          <div class="story" >
                           스토리 설명
                          </div><hr />
               </div>
            </div>
         </section>

      <!-- Footer -->
      <?php
          require '../footer.php' 
         ?>

      <!-- Scripts -->
         <script src="../assets/js/jquery.min.js"></script>
         <script src="../assets/js/browser.min.js"></script>
         <script src="../assets/js/breakpoints.min.js"></script>
         <script src="../assets/js/util.js"></script>
         <script src="../assets/js/main.js"></script>
         <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
         <script src="../js/js.js"></script>

  
   </body>
</html>