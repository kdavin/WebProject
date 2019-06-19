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
                          
                             <img class="character" src="../images/character/tall/Lifeline-tall.png"/>
                           
                       </div>
                       <hr />
  <!--스킬메뉴탭-->                     
                       <div class="skill">
                        <div class="menu_tab">
                           <ul>
                              <li class="fst active"><a href="#;" onclick="tab_menu(0);"><img src="../images/Lifeline_skill01.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(1);"><img src="../images/Lifeline_skill02.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(2);"><img src="../images/Lifeline_skill03.png" width="200"height="100"></a></li>
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
                          <img  src="../images/Story/Story_Lifeline.jpg"/>
                       </div>
                       <br/>
                       Ajay Che, aka Lifeline, isn’t someone you would expect to find in the Apex Games. Once the child of wealthy war profiteers, she left home when she learned of the damage her family had caused and enlisted in the Frontier Corps, a humanitarian organization that aids Frontier communities in need. She’s since devoted her life to helping others and joined the Apex Games to fund the Frontier Corps with her winnings.
<br/>
<br/>

"라이프라인"으로도 알려진 에이제이 체는 에이펙스에 어울리는 사람은 아니다. 한때 부유한 전쟁 수혜자 가문[2]의 아이로 태어난 그녀는, 가족이 끼친 피해를 알게되자 가문을 떠났고 도움이 필요한 프론티어 사회를 원조하는 인도주의 기구인 "프론티어 코퍼레이션"에 지원했다. 이 이후로 그녀는 다른 사람들을 돕고, 에이펙스 게임에 참여해 그녀의 상금으로 프론티어 코퍼레이션에 기금을 마련하는 데에 그녀의 인생을 바치고 있다.
<br/>
<br/>

Since no one in the Games is innocent — they all know what they signed up for — and every one of her victories means help for those in need, Lifeline has no problem engaging in the popular bloodsport. Or so she tells herself. She may seem sarcastic and callous, but deep down she wants to help people and make the world a better place. If that means taking a few people down in the process, so be it.
<br/>
<br/>
에이펙스 참가자들은 본인들이 뭐에 서명했는지 알고 있고, 그들 중 그 누구도 깨끗하지 않기 때문에, 그리고 그녀의 승리 하나하나가 모두 도움이 필요한 이들의 구원을 의미하기 때문에, 그녀는 이 잔인한 피의 경기에 참여하는 데에 거리낌이 없다. 혹은 그녀 스스로 그렇게 믿고 있거나. 그녀가 냉담하고 매사에 빈정대는 것처럼 보일 수는 있지만, 그녀의 내면 깊숙한 곳에는 사람들을 돕고 세상을 더 나은 곳으로 만들고자 하는 소망이 있다. 그게 만약 그 과정에서 몇 명 쯤 죽이는 걸 의미한다면, 그렇다면 그러라지 하고 말이다.

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