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

                             <img class="character" src="../images/character/tall/Caustic-tall.png"/>
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
                              <li class="fst active"><a href="#;" onclick="tab_menu(0);"><img src="../images/Skill/Caustic/Caustic_skill01.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(1);"><img src="../images/Skill/Caustic/Caustic_skill02.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(2);"><img src="../images/Skill/Caustic/Caustic_skill03.png" width="200"height="100"></a></li>
                                                 </ul>
                           </div>

                           <div class="menu_tab00 mTs" id="panels" >
                           <br/>
                              <div style='text-weight:900;'>
                              녹스 비전 (Nox Vision)
                              </div>
                           <br/>
                              "가스 속을 이동하는 적들을 강조 표시합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
녹스 가스 안에 적들이 초록색 실루엣으로 표시된다. 상대편 코스틱의 가스여도 표시가 된다. 다만 적이 가스로 대미지를 입어도 벽 너머에 있다면 실루엣이 표시되진 않는다. 가스에서 나와도 잠시동안은 표시가 되기 때문에 조건부지만 성능은 괜찮은 편.</div>
                            </div>
                            <div class="menu_tab01 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              녹스 가스 트랩 (Nox Gas Trap)
                              </div>
                           <br/>
                              "총에 맞거나 적이 건드리면 치명적인 녹스 가스를 방출하는 용기를 최대 6개 설치합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
지뢰를 배치할 때에는 되도록 문 바로 옆이나 엄폐물 뒤, 혹은 정말 예상치 못한 곳 등 적의 사격이 닿지 않거나 쉽게 발견하기 어려운 위치에 설치해야 한다. 대놓고 마당이나 복도 한복판에 박아두면 특유의 생김새 때문에 멀리서도 잘 보인다. 그냥 몸체를 쏘면 터지지만 지뢰 아래쪽 검은 링 부분을 사격하여 안전하게 제거할수 있기 때문에 적에게 바로 보이는 자리가 아니면서도 적의 진입을 차단하거나 알려줄 수 있는 자리를 잘 선정해서 배치해야 한다. 또한 본인이 쏴서 터트릴 수 있는 점을 이용해 적이 트랩을 처리하지 못하게 미리미리 터트리거나 아군을 구할 때 연막처럼 이용할 수도 있다.</div>
                            </div>
                            <div class="menu_tab02 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              녹스 가스 수류탄 (Nox Gas Grenade)
                              </div>
                           <br/>
                              "넓은 지역을 녹스 가스로 뒤덮습니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
사용하면 녹스 가스 수류탄을 장착한다. 녹스 가스 수류탄을 장착하게 되면 궤적이 표시가 되고 마우스 왼쪽 버튼을 누르면 던질 수 있다. 엄청나게 넓은 범위는 아니지만 벙커 버스터 큰 방 하나 정도는 전부 뒤엎을 수 있을 정도에 범위를 가지고 있다.
<br>
피해량과 슬로우는 녹스 가스 트랩과 똑같다. 하지만 트랩이라는 수동성 때문에 능동적인 활용이 불가능했던 전술 스킬에 비해 범위도 넓고 수류탄이라 유동적으로 사용이 가능한 것이 장점이다. 넓은 범위를 녹스 가스로 덮기 때문에 연막이나 접근 방지용으로도 사용 가능하고, 대놓고 적에게 던져 압도적인 우위를 가져가는 것도 가능하다.</div>
                            </div>


                       </div>
                       <hr />
                       <iframe width="100%" height="600px" src="https://www.youtube.com/embed/dSz8Dnj1pdI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <hr />
                          <div class="story" >
                          <div class="story_image">
                          <img  src="../images/Story/Story_Caustic.jpg"/>
                       </div>
                       <br/>
                       Before there was Caustic, a scientist named Alexander Nox worked at Humbert Labs, the Frontier’s leading manufacturer of pesticide gases. With a glut of pesticides needed to protect the growing Frontier colonies’ crops, Humbert Labs was constantly on the hunt for better and stronger formulas. Nox was one of their brightest scientists and worked day and night developing new gases. But to make sure they worked, he needed to test them on more than just inert tissue: he needed something living.
<br/>
<br/>

코스틱이 있기 전에, 알렉산더 녹스라는 과학자가 프런티어의 농약 가스의 선두 제조업체인 험버트 연구소에서 일했습니다. 프런티어 식민지의 증가하는 농작물을 보호하기 위해 필요한 엄청난 양의 살충제와 더불어, 험버트 연구소는 더 좋고 더 강한 화학식을 계속 찾고 있었습니다. 녹스는 그들의 가장 똑똑한 과학자 중 한 명이었고 새로운 가스를 개발하기 위해 밤낮으로 일했습니다. 하지만 살충제가 확실히 작용하는지 확인하기 위해, 그는 단지 불활성 조직 이상의 것을 실험할 필요가 있었습니다. 그는 살아있는 것이 필요했습니다.
<br/>
<br/>

As he toiled in secret, Nox began to see the beauty in his creations and their ability to destroy anything they touched. But the head of Humbert Labs soon discovered his gruesome experiments, and their confrontation ended with the lab in flames and its chief dead. Today, Nox is missing and presumed deceased. Caustic, meanwhile, now finds new test subjects in the Apex Games, where he puts his gaseous creations to work and observes their effects with great interest.
<br/>
<br/>
그가 비밀리에 노력했을 때, 녹스는 그의 창조물에서 아름다움과 그들이 만지는 모든 것을 파괴하는 그들의 능력을 보기 시작했습니다. 하지만 험버트 연구소 의장은 곧 그의 소름끼치는 실험들을 발견했고, 그들의 대결은 화염에 휩싸인 실험실과 수석의 죽음으로 끝이 났습니다. 오늘, 녹스는 실종되었고 사망한 것으로 추정됩니다. 한편, 코스틱은 이제 에이펙스 게임에서 새로운 실험 대상들을 찾습니다. 여기서 그는 가스 창조물을 작동시키고 그들의 효과를 매우 흥미롭게 관찰합니다.

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
