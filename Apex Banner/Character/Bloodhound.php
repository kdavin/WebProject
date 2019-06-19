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

                             <img class="character" src="../images/character/tall/Bloodhound-tall.png"/>
                             <div class="regend">
                                                        <h2> 방갈로르 Bangalore </h2>
                             <div>
                               <p class="regendBold">
                             칭호 : 프로페셔널 병사(Professional Soldier)<br />
                             본명 : 아니타 윌리엄스 (Anita Williams)<br />
                             나이 : 35세<br /><br />
                             </p>
                             "방갈로르는 IMC의 무기 전문가였습니다. 그녀는 이제 Apex 게임에서 집으로 돌아가는 방법을 찾기 위해 싸웁니다.d"<br /><br />
                             "Name the weapon--I'll still beat you. (아무 무기나 가져와 봐. 그래도 내가 널 이길테니.)"<br />
                             </div>
                             </div>

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
                           <br/>
                              <div style='text-weight:900;'>
                              추적기 (Tracker)
                              </div>
                           <br/>
                              "적의 단서를 찾아냅니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
1분 이내의 적들의 흔적을 초단위로 시야에 띄워주는 형태의 패시브이다. 레인보우 식스 시즈의 자칼의 특수능력의 상위호환급 능력이라고 보면 될듯. 다만 그 간격이 궁극기 만큼 촘촘하지는 않고, 1분이 지나면 흔적이 사라지기 때문에 전투중에 도주한 적을 쫓아갈 때를 제외하고는 적을 "추적"하기는 힘들다. 물론 새로운 지역에 진입할 때 이곳에 누군가가 있었는지 정도를 유추하기에는 충분하다. 흔적에도 핑을 찍어 아군에게 알릴 수 있기 때문에 핑 기능을 활용하면 좋다. 캐릭터 자체가 정찰에 특화된만큼 이런 흔적들을 볼때마다 아군에게 핑을 찍어주거나 음성 대화로 말해주면 아군도 이에 맞춰 대응할 수 있기 때문에 아주 좋다.
</div>
                            </div>
                            <div class="menu_tab01 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              신의 눈 (Eye of the Allfather)
                              </div>
                           <br/>
                              "앞쪽에 있는 모든 구조물에서 잠시 동안 적, 트랩, 단서를 드러냅니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
대신 범위가 전방만 보여줄만큼 좁은 편이라 딱 집 하나 정도의 거리밖에 커버하지 못하고, 스캔할 때 주황색 이펙트가 적에게도 보이니 괜히 적을 탐색할 목적으로 썼다가 적에게도 나의 존재를 광고하는 셈이 된다. 아닌 게 아니라 내가 스캔하는 범위는 코딱지만한 것에 반해, 주황색 구가 퍼져나가는 이펙트는 멀리서도 잘 보이니 오히려 어그로를 거하게 끌게 된다.
</div>
                            </div>
                            <div class="menu_tab02 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              사냥의 야수 (Beast of the Hunt)
                              </div>
                           <br/>
                              "궁극의 사냥꾼으로 변신합니다.식은 흔적을 확인하고 빠르게 움직입니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
사용 시 약간의 스킬 사용시간 이후 화면이 흑백으로 변하고 이동 속도가 빨라지며 시야에 보이는 적들을 빨간 색으로 표시해준다. 적의 이동경로 또한 빨간 발자국으로 표시해주며 모든 흔적을 확인할 수 있게 된다. 코스틱의 가스나 방갈로르의 연막 안에서도 궁을 켜면 시야 방해 없이 볼 수 있어서 아군으로 조합하면 궁합이 좋고, 적으로 만나더라도 상대하기 편하다. 그다지 의미는 없지만 지속 시간 중에도 얼티밋 스킬 충전기를 사용할 수 있다. 주의해야 할 점은 시전 시 약간의 딜레이가 존재하는데, 이 동안 아무 행동도 불가능한 무방비 상태라는 것. 거기다 궁극기를 사용할 시 우렁찬 포효를 내지르기에 적들에게 들키기에도 딱 좋다. </div>
                            </div>


                       </div>
                       <hr />
                       <iframe width="100%" height="600px" src="https://www.youtube.com/embed/euWTbVdRGv0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
         <script src="../js/regends.js"></script>



   </body>
</html>
