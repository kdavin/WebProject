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
          include 'menu.php' 
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
                          
                             <img class="character" src="../images/character/tall/Pathfinder-tall.png"/>
                           
                       </div>
                       <hr />
  <!--스킬메뉴탭-->                     
                       <div class="skill">
                        <div class="menu_tab">
                           <ul>
                              <li class="fst active"><a href="#;" onclick="tab_menu(0);"><img src="../images/Skill/Pathfinder/Pathfinder_skill01.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(1);"><img src="../images/Skill/Pathfinder/Pathfinder_skill02.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(2);"><img src="../images/Skill/Pathfinder/Pathfinder_skill03.png" width="200"height="100"></a></li>
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
                          <div class="story_image">
                          <img  src="../images/Story/Story_Pathfinder.jpg"/>
                       </div>
                       <br/>
                       Pathfinder is the picture of optimism, despite his circumstances. A MRVN (Mobile Robotic Versatile eNtity) modified to specialize in location scouting and surveying, he booted up decades ago in an abandoned laboratory with no idea who created him or why. With only his MRVN designation to hint at his identity, Pathfinder set off in search of his creator.
<br/>
<br/>

패스파인더는 긍정을 그림으로 그린듯한 인물입니다. 아무리 상황이 좋지 않아도 말이죠. 지역 정찰과 측량에 특화되도록 개조된 MRVN(독립·다목적 기동 로봇)인 패스파인더는, 지금으로부터 수십 년 전 버려진 공장에서 돌연 부팅되었습니다. 누가 그를 만들었는지, 왜 만들었는지도 모른 채 말이죠. MRVN이라는 유일한 힌트만 가지고 그의 창조주를 찾는 여정을 떠납니다.

<br/>
<br/>

Pathfinder has learned much in his travels since then (like how to make a mean Eastern Leviathan Stew) but hasn’t come any closer to finding his creator. Still, he’s never given up hope, and has joined the Apex Games to gain a following--and hopefully draw the attention of his maker. In the meantime, he remains enthusiastic and helpful, always ready to make new friends (then shoot them).
<br/>
<br/>
패스파인더는 여행 중에 많은 것들(동부식 리바이어던 스튜를 만드는 것 등등)을 배웠지만, 창조주를 찾는 데에는 전혀 진전이 없었습니다. 하지만 희망을 잃지 않고, 새로운 단서를 찾기 위해 Apex 대회에 참가하였습니다. 그를 발명한 사람도 봐 주길 바라며 말이죠. 그는 대회에 참가하는 동안, 협조적이고 열정적인 자세로 새 친구를 사귀(고 쏴 죽이)기 위한 준비가 되어 있습니다.

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