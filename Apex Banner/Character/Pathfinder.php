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

                             <img class="character" src="../images/character/tall/Pathfinder-tall.png"/>
                             <div class="regend">
                                                      <br /><h2> 방갈로르 Bangalore </h2><br /><br /><br />
                             <div>
                               <p class="regendBold">
                             칭호 : 전방 정찰 요원 (Forward Scout)<br />
                             본명 : 마빈 (MRVN)<br />
                             나이 : 불명 (Unknown)<br /><br />
                             </p>
                             패스파인더는 버려진 실험실에서 30년 전에 부팅되었습니다. 누가, 왜 자신을 만들었는지는 알지 못합니다. 그는 Apex 게임에 참가함으로써 자신을 만든 사람을 찾고자 합니다.<br /><br />
                             “Losing isn't fun. That's why I don't do it.” <br />
                             "지는 건 재미없어. 그래서 내가 안 지는 거야."<br />
                             </div>
                             </div>

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
                           <br/>
                              <div style='text-weight:900;'>
                              내부 정보 (Insider Knowledge)
                              </div>
                           <br/>
                              "조사 비컨을 스캔해 링의 다음 위치를 보여줍니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
맵 곳곳에 있는 조사 비컨이 맵에 표시된다. 조사 비컨은 패스파인더만 활성화할 수 있으며, 대부분의 비컨은 지붕 위나 옥상 등 다른 캐릭터들이 올라가기 매우 어렵거나 불가능한 곳에 위치해 있다. 비컨에 다가가 사용 키를 누르고 있으면 약 4초동안 무방비 상태로 작동을 하며, 작동 성공시 “핑” 하는 소리와 함께 자신과 자신 팀에게 다음 링의 위치를 녹색으로 보여준다. “핑” 소리는 생각보다 넓은 반경에서 상대 팀을 포함한 모두에게 들리므로 스캔이 끝나면 빠르게 이탈하는 것이 좋다. 다음 링의 정보를 알고 있으면 그곳까지 실제 링이 움직이기 전까지는 비컨 스캔을 할 수 없지만, 같은 비컨은 몇 번이고 쓸 수 있다.
</div>
</div>
                            <div class="menu_tab01 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              그래플링 훅 (Grappling Hook)
                              </div>
                           <br/>
                              "접근하기 힘든 곳을 그래플로 빠르게 이동합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
타이탄폴 2와 마찬가지로 적을 그래플로 잡으면 그대로 끌려가거나 끌어온다. 하지만 타 게임의 그랩류 스킬처럼 활용하기 어려운 게, 그래풀의 판정이 작아 맞추기 어려울 뿐더러 적에게 그래풀로 접근하는 동안에도 패스파인더 본인은 도착하기 전까지 다른 동작이 불가능하다. 때문에 만약 적이 반응한다면 선공권을 넘겨주는 셈. 게다가 빗나가면 리스크가 따로 없는 그랩류 스킬과 달리 패스파인더의 그래플은 엄연한 이동기니 적한테 노리고 쓴 게 빗나가서 근처 땅에 박힌다면 그대로 적 근처로 돌격한다. 적진 한가운데에 혼자 돌격해서 전사하는 꼴이 될 수 있으니 적을 조준하고 쓰는 것이라면 신중하게 사용하자.
</div>
</div>
                            <div class="menu_tab02 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              집라인 건 (Zipline Gun)
                              </div>
                           <br/>
                              "모두가 사용할 수 있는 집라인을 만듭니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
플레이어 모두 사용 가능한 영구적인 집라인을 건설한다. 거리가 꽤나 길어 높은 절벽, 혹은 집과 집 사이를 연결하거나 심지어 공중에 고정된 데스 박스에까지 아무런 문제 없이 집라인을 건설해 돌아다닐 수 있다. 또한 팀플레이시 라인을 사용해 팀 전체를 고지로 이동시켜 좋은 자리를 만들어 내는 것이 패스파인더의 주목적이라고 할 정도로 집라인은 엄청난 유틸성을 지니고 있다.
                            </div>


                       </div>
                       </div>
                       <hr />
                       <iframe width="100%" height="600px" src="https://www.youtube.com/embed/kBpc2EaKBcA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
