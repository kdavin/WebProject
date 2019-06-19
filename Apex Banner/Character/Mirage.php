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
          require 'Regends.php'
         ?>
         <section id="main" class="wrapper">

            <div class="inner">
               <div class="content">

    <!--캐릭터 설명-->
                       <div>

                             <img class="character" src="../images/character/tall/mirage-tall.png" />
                             <div class="regend">
                                                        <br /><h2> 미라지 Mirage </h2><br /><br /><br />
                             <div>
                               <p class="regendBold">
                             칭호 : 홀로그래픽 트릭스터 (Holographic Trickster)<br />
                             본명 : 엘리엇 위트 (Elliott Witt)<br />
                             나이 : 30세<br /><br />
                             </p>
                             미라지는 홀로그램 장치 개발에 삶을 바쳤습니다. 이제 그는 Apex 게임의 생명이 되어, 적들을 농락하고 관중들을 즐겁게 합니다.<br /><br />
                             “I don't take myself too seriously. I don't take myself anywhere. I need to get out more.”<br />
                             "난 스스로를 진지하게 여기지 않아. 난 어디에도 가지 않지. 나는 좀 더 나아가야 해."<br />
                             "Now you see me? Now you dont. Now you see me? Boom. You're dead."<br />
                             "내가 보여? 아닐걸. 보인다고? 빵. 너 죽었어."<br />
                             </div>
                             </div>


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
                           <br/>
                              <div style='text-weight:900;'>
                              앙코르! (Encore!)
                              </div>
                           <br/>
                              "쓰러지면 자동으로 미끼를 던지고 5초 동안 은폐합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
원거리 교전에서는 생존에 도움이 되지만 근접 교전에서는 특유의 쓰러지는 포즈가 너무 다르기에 그냥 클록 풀릴때까지만 신경 끄는 정도의 시간만을 못번다.
1.2 패치 후로 은폐 시 완벽하게 시야에서 사라질 수 있기 때문에 일부러 녹다운 실드를 전개하지 않는 이상 상대방에게 짜증을 유발할 수 있을 정도.</div>
                            </div>
                            <div class="menu_tab01 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              사이크 아웃 (Psyche Out)
                              </div>
                           <br/>
                              "홀로그램 미끼를 보내 적을 혼란시킵니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
단순히 적을 낚는 용도 외에 적의 위치를 알아내는 용도로 사용할 수 있다. 적이 미끼를 쏠 경우 적의 위치가 표시되는데(달리는 사람 모양의 흰색 아이콘이 거리와 함께 표시된다) 총알 뿐만 아니라 방갈로르, 지브롤터의 궁, 코스틱의 독가스에도 반응하여 적의 위치를 알려주기 때문에 독가스는 보이는데 코스틱은 안 보일 경우 일부러 독가스에 미끼를 보내어 코스틱의 위치를 알아낼 수 있다.</div>
                            </div>
                            <div class="menu_tab02 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              소멸 (Vanishing Act)
                              </div>
                           <br/>
                              "미라지가 미끼들을 뿌려 적의 눈을 속이고 자신은 은폐합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
매우 많은 수의 미끼를 뿌리고 미라지는 은폐한다. 보통은 미끼는 그 자리에 서 있으나, 발판이 없는 공중에서 생성할시 미끼가 땅에 도달하게 되면 달린다. 은폐 중에는 무기나 아이템 사용, 아니, 사실상 뛰고 점프하는 짓 말고는 아무 것도 할 수 없는데, 그 대신 발소리가 들리지 않으며 은폐 상태에서는 코스틱의 함정 옆을 지나더라도 함정이 발동하지 않고, 눈먼 총알에 대미지를 입는다고 해도 은폐가 풀리지는 않는다.</div>
                            </div>


                       </div>
                       <hr />
<<<<<<< Updated upstream
                       <iframe width="100%" height="600px" src="https://www.youtube.com/embed/gPHlrmyM8v4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <hr />
=======
                       <iframe width="100%" height="600" src="https://www.youtube.com/embed/gPHlrmyM8v4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                        <hr />
>>>>>>> Stashed changes
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
         <script src="../js/regends.js"></script>

   </body>
</html>
