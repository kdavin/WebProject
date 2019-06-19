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

                             <img class="character" src="../images/character/tall/octane-tall.png"/>
                             <div class="regend">
                                                        <br /><h2> 옥테인 Octane </h2><br /><br /><br />
                             <div>
                               <p class="regendBold">
                             칭호 : 발 빠른 돌격가 (High-Speed Daredevil) / 아드레날린 중독자 (The Adrenaline Junkie)<br />
                             본명 : 옥타비오 실바 (Octavio Silva)<br />
                             나이 : 24세<br /><br />
                             </p>
                             신기록을 세운 스피드런 건틀렛을 가지고, 옥테인은 훨씬 더 큰 야망을 품고 Apex 게임에 뛰어들었습니다.<br /><br />
                             “Whoa . . . what a rush!”<br />
                             "우와... 장난 아니야!"<br />
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
                              빠른 치료 (Swift Mend)
                              </div>
                           <br/>
                              "대미지를 받지 않을 때 2초당 1의 체력을 회복합니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
자극제로 소모된 피를 조금이나마 채워주기 위한 패시브. 다만 회복량이 아주 적은데다, 데미지를 입는 중에는 발동하지 않기 때문에 전투 전후의 정비시간에는 유용하나 전투 중에는 효과를 보기 힘들다. 자극제 효과 지속시간 내에서는 피해를 받지 않더라도 발동되지 않는다.</div>
                            </div>
                            <div class="menu_tab01 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              자극제 (Stim)
                              </div>
                           <br/>
                              "사용 시, 생명력이 소모되며 6초 동안 이동 속도가 30% 증가합니다.
<br>
활성화 중에는 감속 효과를 더 적게 받습니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
사용하면 주사기를 자신에게 꽂아 이동속도를 향상시킨다. 다른 발동형 능력들과 마찬가지로 주사기 사용 모션 중에도 사격을 할 수 있으나, 벽오르기 등의 행동은 불가능하다. 체력을 소모한다는 단점은 있으나, 6초라는 꽤 긴 지속시간 동안 지속되서 파밍 중이나 전투 중이나 유용하다. 방갈로르의 더블 타임과 비교해 자기 판단에 따라 마음대로 사용할 수 있다는 점이 메리트. 이동속도 증가량은 30%로 시즌1 출시와 동시에 너프받은 더블 타임과 동급이다. 쿨타임이 1초 남짓으로 짧은 편이라 감당할 자신만 있다면 계속적으로 효과를 받을 수도 있다. 피가 아주 적은 상태에서도 사용할 수 있으며, 이때는 최소한의 피만 남게 된다. </div>
                            </div>
                            <div class="menu_tab02 mTs" id="panels" style="display: none;">
                            <br/>
                              <div style='text-weight:900;'>
                              런치 패드 (Launch Pad)
                              </div>
                           <br/>
                              "사용자를 공중으로 쏘아 올리는 설치형 점프 패드입니다."

                           <br>
                           <div style='font-weight: normal; color:black;'>

<br>
문자 그대로 점프 패드. 위에 올라서면 기본 점프보다 훨씬 높이 올라갈 수 있다. 설치된 패드는 적이든 아군이든 아무나 활용할 수 있다. 수류탄이나 방갈로르의 연막탄 등 투척장비가 패드에 닿으면 그것 역시 튀어오른다. 기본적으로 패스파인더의 그래플링 훅처럼 높은 지형을 선점하는데 활용하기 좋다. 패드로 점프 중에는 행동에 어떤 제약도 없고 이동속도도 그래플링 훅보다 빠르기 때문에 더 안전한 편.[4]또한 설치 역시 거의 딜레이가 없기 때문에 전투 중에 사용해서 갑작스레 상대의 위를 점하거나 상대를 튕겨내는 등 의외의 상황을 만들어 볼 수도 있다.</div>
                            </div>


                       </div>
                       <hr />
                       <iframe width="100%" height="600px" src="https://www.youtube.com/embed/aOdTqvcEaZ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
