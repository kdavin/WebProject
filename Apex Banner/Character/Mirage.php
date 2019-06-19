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
          require 'menu.php' 
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
          require '../Regends.php' 
         ?>
         <section id="main" class="wrapper">
               
            <div class="inner">
               <div class="content">
                  
    <!--캐릭터 설명-->              
                       <div>
                          
                             <img class="character" src="../images/character/tall/mirage-tall.png" />
                           
                           
                       </div>
                       <hr />
  <!--스킬메뉴탭-->                     
                       <div class="skill">
                        <div class="menu_tab">
                           <ul>
                              <li class="fst active"><a href="#;" onclick="tab_menu(0);"><img src="../images/Skill/Mirage/Mirage_skill01.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(1);"><img src="../images/Skill/Mirage/Mirage_skill02.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(2);"><img src="../images/Skill/Mirage/Mirage_skill03.png" width="200"height="100"></a></li>
                                                 </ul>
                           </div>
                           
                           <div class="menu_tab00 mTs" id="panels" >
                              <iframe width="560" height="315" src="https://youtu.be/embed/gPHlrmyM8v4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                          <div class="story_image">
                          <img  src="../images/Story/Story_Mirage.jpg"/>
                       </div>
                       <br/>
                       Mirage is the kind of guy who likes to stand out. The youngest of four brothers, he perfected the art of fooling around to get attention. The one thing he took seriously was Holo-Pilot technology: introduced to the illusion-creating tech by his engineer mother, he poured over the mechanisms and learned all he could about them. Even when his brothers went MIA during the Frontier War, Mirage and his mother continued to develop holo devices, and the work brought them closer.
<br/>
<br/>

미라지는 자신을 뽐내길 좋아하는 부류의 사람입니다. 네 명의 형제 중 가장 막내로 태어나, 관심을 끌기 위해 남을 골통 먹이는 것을 완벽하게 터득했습니다. 그가 유일하게 진지하게 여긴 것은 홀로-파일럿 기술 뿐이었습니다. 미라지의 어머니가 엔지니어로서 제창한 환영 제작 기술에 자신이 가진 기술들을 쏟아붓고, 또 최대한 배우기 위해 애썼습니다. 나머지 형제들이 프론티어 전쟁 도중 실종되는 와중에도, 미라지와 그의 어머니는 홀로 디바이스를 발명하는 데 열중했고, 모자간의 유대는 더욱더 끈끈해졌습니다.
<br/>
<br/>

While working as a bartender to make ends meet, Mirage heard amazing stories from his patrons about the Apex Games and the wealth and glory that came with victory. As good as both of those sounded, he knew he couldn’t risk leaving his mother childless – until she gave him a set of customized holo devices and told him to follow his dream. Mirage is now the life of the Apex Games, outwitting opponents and charming audiences across the Outlands.
<br/>
<br/>
바텐더로 일하며 겨우 먹고사는 와중에 미라지는 후원자에게서 Apex 대회에 대한 놀라운 이야기를 들었고, 승자에게는 부와 명예가 주어진다는 것을 알게 되었습니다. 구미가 당기는 얘기였지만, 그가 죽기라도 한다면 어머니는 정말로 혼자가 되어버리기에 주저하였습니다. 하지만 그의 어머니는 커스텀 홀로 디바이스를 쥐여주며 꿈을 쫓아가라고 등을 밀어주었고, 이제 미라지는 Apex 대회에서 상대의 허점을 찌르며 아웃랜드의 관객을 매료시키는 레전드입니다.

                          <br/>
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