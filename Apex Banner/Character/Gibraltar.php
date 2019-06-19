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

                             <img class="character" src="../images/character/tall/Gibraltar-tall.png"/>
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
                              <li class="fst active"><a href="#;" onclick="tab_menu(0);"><img src="../images/Skill/Gibraltar/Gibraltar_skill01.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(1);"><img src="../images/Skill/Gibraltar/Gibraltar_skill02.png" width="200"height="100"></a></li>
                              <li><a href="#;" onclick="tab_menu(2);"><img src="../images/Skill/Gibraltar/Gibraltar_skill03.png" width="200"height="100"></a></li>
                                                 </ul>
                           </div>

                           <div class="menu_tab00 mTs" id="panels" >
                           <br/>
                              <div style='text-weight:900;'>
                              건 실드 (Gun Shield)
                              </div>
                           <br/>
                              "조준으로 적의 사격을 막는 실드를 전개합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
조준하면 지브롤터의 팔에서 실드가 생긴다. 실드는 몸은 가려주지만 다리나 머리는 가려주지 않으며[3], 일정 이상 피해를 받을 경우 파괴되고 재충전까지 쿨타임이 돈다. 앉은 상태에서는 다리도 가려주며 조준 상태에서 H키를 눌러 키거나 끌 수 있다. 타이탄폴2의 리전의 건실드 스킬이 사람 사이즈로 줄어들었다고 이해하면 쉽다. 하지만 암실드가 켜져있는 채로 조준을 하고있는 지브롤터는 멀리에서도 주황색으로 암실드가 켜진게 보이니 교전중이 아니라면 끄고 있는게 조금이나마 도움이 된다. 쉴드량은 대략 50정도로 추정이였으나 1.1.1 패치로 75로 상향되었다.
</div>
                            </div>
                            <div class="menu_tab01 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              보호의 돔 (Dome of Protection)
                              </div>
                           <br/>
                              "돔 실드를 투하하여 15초 동안 공격을 차단합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
공격을 완벽히 차단하는 돔형 방벽을 설치한다. 피아와 방향을 구분하지 않고 모든 총격을 차단하기 때문에 방벽 안과 밖을 15초동안 완전히 분리하는 스킬이라고 생각하고 활용해야 한다. 총격은 물론이고 같은 지브롤터의 방어 포격까지 완벽하게 차단한다. 심지어 수류탄도 부딪쳐서 굴러 떨어지는 등 벽에 가까운 판정. 하지만 방벽이 유달리 튀는 편이라서 이쪽에 관심없던 다른 분대의 어그로를 끄는 편인데다가 이미 근접전 상황에 처했다면 역으로 적이 방벽을 오가며 농락할 수도 있다는 문제점이 있다.
</div>
                            </div>
                            <div class="menu_tab02 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              방어 포격 (Defensive Bombardment)
                              </div>
                           <br/>
                              "연막 표시 위치에 집중 박격포 포격을 요청합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
지정한 위치에 포격을 실행한다. 개개 포탄이 떨어질 위치가 미리 표시되기는 하지만 폭발까지의 딜레이가 매우 짧고 밀집도도 높으며 대미지도 강하기 때문에 범위 내에 있으면 거의 확실히 죽는다. 다만 적이 건물 안에 있다면 대미지를 전혀 받지 않으며 범위가 비교적 좁은 편이기 때문에 적이 피할 곳이 있는 상황이라면 큰 효과를 발휘하기 어렵다.
</div>
                            </div>


                       </div>
                       <hr />
                       <iframe width="100%" height="600px" src="https://www.youtube.com/embed/ccDyztf9FjU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <hr />
                          <div class="story" >
                          <div class="story_image">
                          <img  src="../images/Story/Story_Gibraltar.jpg"/>
                       </div>
                       <br/>
                       Gibraltar is a gentle giant with a wild side. The son of two SARAS (Search and Rescue Association of Solace) volunteers, he has always been skilled at getting others out of dangerous situations that are common in the Outlands. However, he only began to understand the value of protecting others when he and his boyfriend stole his father’s motorcycle, took it on a joyride, and got trapped by a deadly mudslide. His parents saved them, and his father lost an arm in the process. Gibraltar has never forgotten that sacrifice and has devoted his life to helping those in need.
<br/>
<br/>

"지브롤터"는 거친 면을 가진 온화한 거구이다. 두 SARAS(솔라스 탐색 및 구조 협회) 자원봉사자 사이에서 태어난 그는, 아웃랜드에서는 일상적이지만 위험한 상황으로부터 다른 사람들을 구해내는 데에 능숙했다. 하지만, 지브롤터가 남자친구[2]와 함께 아버지의 오토바이를 훔치고 폭주에 나섰다가 치명적인 산사태에 갇혔을 때, 그는 다른 사람들을 지킨다는 것의 가치에 대해서 이제 막 이해하기 시작했을 뿐이었다. 지브롤터의 부모는 그들을 구해냈고, 그 과정에서 아버지는 한 쪽 팔을 잃었다. 지브롤터는 그 희생을 한 시도 잊은 적이 없으며, 그는 그의 삶을 도움이 필요한 사람들을 도와주는 데에 헌신해왔다.
<br/>
<br/>

The Apex Games didn’t change that, but they changed what it meant. Many of Gibraltar’s friends and colleagues have competed in the Games for extra money, fame, and glory over the years, and some never came home. Gibraltar joined to keep them safe and, for the first time, his skills as a rescuer and his rebellious nature worked together. He’s now become an icon in the Apex Games, putting himself in the line of fire to protect his squad and send his opponents running for cover.
<br/>
<br/>
에이팩스 게임이 그걸 바꾸진 않았지만, 그 의미를 바꾸긴 했다. 많은 지브롤터의 친구와 동료들은 돈, 인기, 명예를 위해 에이팩스 게임에서 경쟁했고, 몇몇은 결코 집에 돌아올 수 없게 되었다. 지브롤터는 그들을 안전하게 지키기 위해 참여했으며, 또한 태어나 처음으로, 구조사로서 그의 실력과 그의 반항적인 본성이 잘 맞물리고 있다. 그는 이제 에이펙스 게임의 아이콘이 되었으며, 그의 부대를 보호하고, 그의 적들이 엄폐물을 찾아 도망가게 만들기 위해 자신을 사선으로 내몰고 있다.

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
