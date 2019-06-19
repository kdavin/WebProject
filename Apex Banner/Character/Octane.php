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
                          
                             <img class="character" src="../images/character/tall/octane-tall.png"/>
                           
                       </div>
                       <hr />
  <!--스킬메뉴탭-->                     
                       <div class="skill">
                        <div class="menu_tab">
                           <ul>
                              <li class="fst active"><a href="#;" onclick="tab_menu(0);"><img src="../images/Skill/Octane/Octane_skill01.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(1);"><img src="../images/Skill/Octane/Octane_skill02.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(2);"><img src="../images/Skill/Octane/Octane_skill03.png" width="200"height="100"></a></li>
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
                          <img  src="../images/Story/Story_Octane.jpg"/>
                       </div>
                       <br/>
                       One day, Octavio Silva was bored. In fact, he was bored most days. Heir to the preoccupied CEOs of Silva Pharmaceuticals and wanting for nothing in life, he entertained himself by performing death-defying stunts and posting holovids of them for his fans to gawk over. So, this day, he decided to set the course record for a nearby Gauntlet by launching himself across the finish line – using a grenade.
<br/>
<br/>

어느 날, 옥타비오 실바는 싫증을 느꼈습니다. 사실 이 싫증은 갑작스러운 것이 아니었습니다. 실바 제약회사 CEO의 후계자로 부족함 없이 자란 그는, 위험천만한 스턴트에 몸을 던지고 홀로그램 영상을 제작해 팬들에게 인기를 끌었습니다. 그리고 이날 그는 결승선을 뛰어넘기 위해 새로운 방법을 생각해 냈으니, 그것은 바로 수류탄을 사용하는 것이었습니다.

<br/>
<br/>

As he lay in triage hours later, the doctors informed him that the damage done to his legs meant his daredevil days were over. That didn’t sit well with Octavio, who turned to an old friend for help: Ajay Che, who he guilted into forging an order to replace his legs with bionic ones. Suddenly able to repair his limbs at a moment’s notice, Octavio decided petty online stunts weren’t enough: the ultimate adrenaline rush, the Apex Games, was calling. Now, he’s going to become an Apex Champion doing the most incredible, death-defying moves anyone’s ever seen. Maybe in the arena, he won’t be so bored.
<br/>
<br/>
병상에 누워 있던 그에게, 의사들은 다리가 너무 심하게 망가져 더 이상 뛸 수 없을 것이라고 선고를 내렸습니다. 그 말을 받아들일 수 없었던 옥타비오는 오랜 친구인 에이제이 체에게 도움을 청해, 자신의 다리를 대신할 새로운 다리를 만들어달라고 부탁했습니다. 곧바로 다리를 고치게 된 옥타비오는 이제 온라인 스턴트가 시시하게 느껴졌습니다. 극한의 아드레날린을 치솟게 해준 Apex 게임이 그를 부르고 있었기 때문입니다. 이제 그는 누구도 보지 못한 현란한 움직임으로, Apex의 챔피언 자리를 노리고 있습니다. 어쩌면 아레나는 그를 즐겁게 만들어 줄지도 모릅니다.

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