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
          include 'Regends.php'
         ?>
         <section id="main" class="wrapper">

            <div class="inner">
               <div class="content">

    <!--캐릭터 설명-->
                       <div>

                             <img class="character" src="../images/character/tall/Lifeline-tall.png"/>
                             <div class="regend">
                                                        <br /><h2> 라이프라인 Lifeline </h2><br /><br /><br />
                             <div>
                               <p class="regendBold">
                             칭호 : 전투 의무병 (Combat Medic)<br />
                             본명 : 에이제이 체 (Ajay Che)<br />
                             나이 : 24세<br /><br />
                             </p>
                             라이프라인은 어려움에 빠진 이들을 돕는 데 삶을 바쳤습니다. 그녀는 상금을 프론티어 군단에 보태기 위해 Apex 게임에 참가했습니다.<br /><br />
                             “Never quit. That's how you win.” <br />
                             "포기하지 마. 그래야 이겨."<br />
                             </div>
                             </div>

                       </div>
                       <hr />
  <!--스킬메뉴탭-->
                       <div class="skill">
                        <div class="menu_tab">
                           <ul>
                              <li class="fst active"><a href="#;" onclick="tab_menu(0);"><img src="../images/Skill/Lifeline/Lifeline_skill01.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(1);"><img src="../images/Skill/Lifeline/Lifeline_skill02.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(2);"><img src="../images/Skill/Lifeline/Lifeline_skill03.png" width="200"height="100"></a></li>
                                                 </ul>
                           </div>

                           <div class="menu_tab00 mTs" id="panels" >
                           <br/>
                              <div style='text-weight:900;'>
                              전투 의무병 (Combat Medic)
                              </div>
                           <br/>
                              "실드 방벽의 보호를 받으며 빨리 팀원을 회생시킵니다.<br>
치유 아이템을 25% 빨리 사용합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
아군 회생시 라이프라인이 바라보고있는 방향으로 90°를 보호하는 실드를 전개한다. 이 실드는 데미지를 받아도 파괴되지 않기 때문에 다른 레전드에 비해 더욱 빠르고 안전하게 아군을 되살릴 수 있다. 방갈로르의 연막이나 코스틱의 가스 사이에서 실드를 전개하는 경우 제법 잘 보이기 때문에 적과 교전중에는 주의해서 소생할 필요가 있다.
</div>
                            </div>
                            <div class="menu_tab01 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              D.O.C 치유 드론 (D.O.C. Heal Drone)
                              </div>
                           <br/>
                              "드론이 자동으로 주위의 대상을 치료합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
드론을 내보내 근처의 대상을 치료한다. 3명까지 치료 가능하며 치유량은 높지만 치유 속도가 느리기 때문에 하나 깔고 계속 버티는 건 불가능에 가깝다. 하지만 라이프라인의 특성상 다 죽어가는 아군을 살릴 일도 많고. 애초에 들고다니는 회복 아이템에 한계가 있는 게임 특성상 쿨타임마다 사용가능한 공짜 힐의 가치는 매우 높다. 특히 이 게임은 가방이 꽤나 중요한 요소중에 하나이기 때문에 이 스킬로 인해 구급품을 다른 레전드들보다 덜 챙겨 공간을 만들 수 있다.
</div>
</div>
                            <div class="menu_tab02 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              케어 패키지 (Care Package)
                              </div>
                           <br/>
                              "고성능 장비로 가득 찬 드롭 포드를 소환합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
하늘에서 케어 패키지를 불러온다. 일반 케어 패키지와 비교하면 낙하 속도가 훨씬 빠르고 미니맵에 표시되지도 않으며 라이프라인의 것은 하늘색 컬러링에 적십자 표시가 붙어있다. 3개의 아이템이 들어 있으며 모든 플레이어가 사용할 수 있다. 3개의 슬롯에 각각 나오는 아이템은 1슬롯 레벨 3 (에픽장비류, 2슬롯 회복 아이템, 3슬롯 무기 부착물로 고정되어 있고 무기는 나오지 않는다. 한때 간간히 레벨4 (전설) 장비류가 나오기도 했지만 패치 이후로 나오지 않게 되었다. 케어 패키지의 크기도 크고, 미니맵에 보이지 않을 뿐이지 일반적인 케어 패키지처럼 푸른 기둥이 발생하며 착륙할 때 검은 연기로 된 궤적을 남김과 동시에 화면이 크게 떨리기 때문에 적들의 어그로를 끌기 좋으므로 주의해서 사용하여야 한다.</div>
                            </div>


                       </div>
                       <hr />
                       <iframe width="100%" height="600px" src="https://www.youtube.com/embed/nxXFfe5X5qo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
