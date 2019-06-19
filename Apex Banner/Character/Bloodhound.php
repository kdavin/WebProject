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
                          
                             <img class="character" src="../images/character/tall/Bloodhound-tall.png"/>
                           
                       </div>
                       <hr />
  <!--스킬메뉴탭-->                     
                       <div class="skill">
                        <div class="menu_tab">
                           <ul>
                              <li class="fst active"><a href="#;" onclick="tab_menu(0);"><img src="../images/Skill/Bloodhound/Bloodhound_skill01.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(1);"><img src="../images/Skill/Bloodhound/Bloodhound_skill02.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(2);"><img src="../images/Skill/Bloodhound/Bloodhound_skill03.png" width="200"height="100"></a></li>
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
                          <img  src="../images/Story/Story_Bloodhound.jpg"/>
                       </div>
                       <br/>
                       Bloodhound is known across the Outlands as one of the greatest game hunters the Frontier has ever seen – and that’s about all anyone knows. Their identity is a mystery wrapped in layers of rumors: they are fabulously wealthy, a bloodthirsty murderer, a Goliath whisperer, a former slave, half bat, and a dozen other things depending on who’s doing the whispering.
<br/>
<br/>

"블러드하운드"는 아웃랜드를 통틀어 프론티어 사상 최고의 사냥꾼 중 하나로 알려져 있으며, 모두가 그 사실을 알고 있다. 이 사냥꾼의 정체는 엄청난 대부호, 피에 굶주린 살인자, 골리앗과 통하는 자, 전직 노예, 박쥐 혼혈, 외에도 이 속삭임의 주체만 다를 뿐인 수십 개의 소문들의 장막으로 가려진 수수께끼이다.
<br/>
<br/>

All anyone truly knows is that Bloodhound is a force to be reckoned with in the Apex Games. Bloodhound’s unparalleled tracking skills are a boon to any team they join, helping them root out hidden opponents and tracking the enemy’s movements. Calling on Earth’s Old Norse Gods to guide them, Bloodhound believes that destiny is a path that has already been laid out, eventually carrying all to their death. But with that knowledge comes strength, because until that day comes, Bloodhound knows they can’t be stopped.
<br/>
<br/>
모두가 제대로 알고 있는 것은, 블러드하운드는 에이펙스 게임에서 무시할 수 없는 존재라는 것이다. 블러드하운드의 각기 다른 추적 기술들은 그가 참여하는 어떤 팀에도 유용하며, 팀이 숨은 적들을 찾아내고 적들의 움직임을 추적하는 걸 도와준다. 지구의 옛 북유럽 신들이 그를 이끌어주길 바라며, 블러드하운드는 운명이란 이미 정해져있는 것이고, 결국에는 운명이 그들을 죽음으로 인도하리라고 믿는다. 하지만 블러드하운드는 그 사실을 앎으로서 오히려 강해진다. 왜냐하면 그 날이 오기 전까지는, 무엇도 그를 막을 수 없단 걸 알기 때문이다.

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