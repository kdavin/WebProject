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

                             <img class="character" src="../images/character/tall/wraith-tall.png"/>
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
                              <li class="fst active"><a href="#;" onclick="tab_menu(0);"><img src="../images/Wraith_skill01.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(1);"><img src="../images/Wraith_skill02.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(2);"><img src="../images/Wraith_skill03.png" width="200"height="100"></a></li>
                                                 </ul>
                           </div>

                           <div class="menu_tab00 mTs" id="panels"  >
                              <br/>
                              <div style='text-weight:900;'>
                              공허의 목소리(Voices from the Void)
                              </div>
                           <br/>
                              "위험이 다가올 때 목소리가 들립니다.
                           <br/>
                           (아무래도 이 목소리는 당신 편인 것 같습니다.)"

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
적이 레이스를 조준할 때, 근처에 데드 박스가 있을 때, 근처에 함정(지금은 코스틱의 독가스 함정 뿐)이 설치되어 있을 때 등 위협적인 것을 공허의 목소리가 경고해 준다. 이 패시브가 발동됐을 때, H키를 눌러 팀원에게 그 사실을 경고해 줄 수 있다. 참고로 공허의 목소리가 조준을 경고해 줄 때에, 조준한 무기가 저격총이라면 저격수라고 알려 준다.
<br/>
</div>
</div>
                            <div class="menu_tab01 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              공허 속으로 (Into the Void)
                              </div>
                           <br/>
                           "안전한 '공허'에 들어가 모든 대미지를 피하고 빠르게 이동합니다."


                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
능력 사용전 선딜이 존재하니 위험하다 싶으면 빠르게 사용하자. 능력 사용 후에도 무기를 꺼내기까지 다소 후딜이 존재한다. 전체적으로 전투용 능력이라기보단 생존용 능력. 궁극기 도중에도 쓸 수 있기 때문에, 궁극기와의 연계가 매우 좋다.
<br/>
적군 레이스가 공허로 들어갈 때 자신 또한 이 기술을 사용하면 공허 속에서 상대 레이스를 볼 수 있다. 물론 공격은 할 수 없고 상대나 자신중에 한명이라도 공허에서 나오면 공허에서 보이지 않게된다.
<br/>
</div>
                            </div>
                            <div class="menu_tab02 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              차원 균열 (Dimensional Rift)
                              </div>
                           <br/>
                              "60초 동안 2개의 지점을 포탈로 연결합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
활용시 중요한 점으로는, 궁극기를 켠 상태에서는 전술 스킬을 사용할 수 있지만, 전술 스킬을 사용하는 도중에는 포털을 탈 수 없다는 것이다. 특히 궁극기 사용 도중 전술 스킬을 활용하면 이동속도가 더 빨라진다.
적도 포탈을 사용할 수 있긴 하지만 적이 포탈을 탔을 때 선공권은 레이스 쪽에 있으므로 쉽게 접근하지 못한다.<br/>
</div>
                            </div>


                       </div>
                       <hr />
                       <iframe width="100%" height="600px" src="https://www.youtube.com/embed/bglAJajZFx4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <hr />
                          <div class="story" >
                          <div class="story_image">
                          <img  src="../images/Story/wraith_story.jpg"/>
                       </div>
<br/>
Wraith is a whirlwind fighter, able to execute swift and deadly attacks and manipulate spacetime by opening rifts in the fabric of reality — but she has no idea how she got that way. Years ago, she woke up in an IMC Detention Facility for the Mentally Ill with no memory of her life before. She also began hearing a distant voice whispering in her mind that would keep her awake for days on end. Despite nearly driving her insane, once she started to listen and trust it, the voice helped her harness her newfound power of void manipulation and escape the facility.
<br/>
<br/>

레이스는 신속하고 치명적인 공격으로 적들을 처형하고 현실 구조의 균열을 열어서 시공간을 조작하는 난투가다. 그녀가 어떻게 그런 능력을 얻었는지는 몰라도 말이다. 몇 년 전에, 그녀는 IMC 정신계 III 구금시설에서 깨어났다. 그녀는 동시에 멀리서 들리는 속삭이는 목소리를 듣기 시작했고, 이 목소리는 그녀를 며칠이나 잠 못 이루게 했다. 목소리는 그녀를 거의 미치게 만들 뻔한 대신에, 일단 그녀가 목소리를 듣고, 믿기 시작하자 그녀가 이 새로 알게 된 공허를 조작하는 힘을 이용하고, 시설에서 탈출하는 것을 도와줬다.
<br/>
<br/>

Determined to uncover her true identity, Wraith began a quest to find out more about the experiments. Many of the old research facilities, however, are buried beneath heavily guarded arenas used for the Apex Games. Now Wraith has joined the competition, and with every match she gets closer to the truth.
<br/>
<br/>
그녀의 진짜 자아를 찾기 위해서, 레이스는 실험에 대해 더 알아내기 위한 여정을 시작했다. 하지만 많은 폐연구 시설들이 에이펙스 게임을 위해 엄격히 지켜지고 있는 경기장들 밑에 묻혀있었다. 이제, 레이스는 에이팩스 경기에 참여했고, 매 경기마다 진실에 가까워지고 있다.

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
