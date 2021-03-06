<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>APEX BANNER</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="css/CharacterStyle.css" rel="stylesheet" type="text/css">

		<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

@font-face{
	font-family: 'SLANT';
	src:url("assets/fonts/SLANT.ttf")
}
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

.vertical-menu {
  width: 200px;
  height: 150px;
  overflow-y: auto;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: orangered;
  color: white;
}


 /* Style the tab */
 .tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 25%;
    height: 500px;
    overflow-y: auto;
  }

  /* Style the buttons inside the tab */
  .tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 10px 10px;
    width: 100%;
		height: auto;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    font-size: 17px;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
    background-color: #ddd;
  }

  /* Create an active/current "tab button" class */
  .tab button.active {
    background-color: #ccc;
  }


	/* tap안의 text */
	.tab p {
		padding: 0px 0px;
		margin: 0px 0px;
	}


  /* Style the tab content */
  .tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 500px;
    display: none;
		overflow-y: auto;
  }

	.tapcontent img {
		width: 20%;
		height: 20%;
	}

  /* Clear floats after the tab */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }


	/* 무기 상세페이지 CSS */
	#customers {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 80%;
	}

	#customers td, #customers th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #4CAF50;
	  color: white;
	}


/* tapcontent안의 img */
.tapImg {
	width: 60%;
	height: 50%;
	margin: auto;
}

/* tap버튼안의 img */
.tapbuttonImg {
	width: 80%;
	height: 70%;
	margin: auto;
}


</style>

	</head>
	<body class="is-preload">

		<!-- Header -->
		<?php
          require 'menu.php' 
         ?>

		<!-- Heading -->
			<div id="heading" >
				<h1 style="font-family:SLANT;">Weapon Page</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
						<!--	<h2>무기 설명 페이지 입니다.</h2> -->
						</header>
						<div style="padding-left:30px; padding-Top:20px">
								<div class="tab">
									<br>
									<br>
									<center>어설트 라이플</center>
									<br>
									<br>
										<button class="tablinks" onmouseover="openTab(event, 'item1')"><img class="tapbuttonImg" src="images/Guns/Carbin.png" alt="weaponSample1"> <p>R-301 카빈</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item2')"><img class="tapbuttonImg" src="images/Guns/Hamlock.png" alt="weaponSample2" > <p>헴록 버스트 AR</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item3')"><img class="tapbuttonImg" src="images/Guns/Platline.png" alt="weaponSample3" > <p>VK-47 플랫라인</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item4')"><img class="tapbuttonImg" src="images/Guns/Havok.png" alt="weaponSample4" > <p>HAVOC 라이플</p></button>

										<br>
									<br>
										<center>경기관총</center>
										<br>
									<br>
										<button class="tablinks" onmouseover="openTab(event, 'item5')"><img class="tapbuttonImg" src="images/Guns/Spitfire.png" alt="weaponSample5" > <p>M600 스핏파이어</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item6')"><img class="tapbuttonImg" src="images/Guns/Devotion.png" alt="weaponSample6" > <p>디보션 LMG</p></button>
										<br>
										<br>
										<center>피스톨</center>
										<br>
									    <br>
										<button class="tablinks" onmouseover="openTab(event, 'item7')"><img class="tapbuttonImg" src="images/Guns/RE-45.png" alt="weaponSample7" > <p>RE-45 자동</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item8')"><img class="tapbuttonImg" src="images/Guns/P2020.png" alt="weaponSample8" > <p>P2020</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item9')"><img class="tapbuttonImg" src="images/Guns/Wingman.png" alt="weaponSample9" > <p>윙맨</p></button>

										<br>
									    <br>
										<center>샷건</center>
										<br>
										<br>
										<button class="tablinks" onmouseover="openTab(event, 'item10')"><img class="tapbuttonImg" src="images/Guns/Mozambique.png" alt="weaponSample10" > <p>모잠비크 샷건</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item11')"><img class="tapbuttonImg" src="images/Guns/Piecekeeper.png" alt="weaponSample11" > <p>피스키퍼</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item12')"><img class="tapbuttonImg" src="images/Guns/Eva-8.png" alt="weaponSample12" > <p>EVA-8 자동</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item13')"><img class="tapbuttonImg" src="images/Guns/Mastiff.png" alt="weaponSample12" > <p>마스티프 샷건</p></button>

										<br>
									<br>
										<center>스나이퍼 라이플</center>
										<br>
									<br>
										<button class="tablinks" onmouseover="openTab(event, 'item14')"><img class="tapbuttonImg" src="images/Guns/G7scout.png" alt="weaponSample12" > <p>G7 스카우트</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item15')"><img class="tapbuttonImg" src="images/Guns/Longbow.png" alt="weaponSample12" > <p>롱보우 DMR</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item16')"><img class="tapbuttonImg" src="images/Guns/Tripletake.png" alt="weaponSample12" > <p>트리플 테이크</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item17')"><img class="tapbuttonImg" src="images/Guns/Craver.png" alt="weaponSample12" > <p>크레이버 .50구경 저격총</p></button>

										<br>
									<br>
										<center>기간단총</center>
										<br>
									<br>
										<button class="tablinks" onmouseover="openTab(event, 'item18')"><img class="tapbuttonImg" src="images/Guns/R-99.png" alt="weaponSample12" > <p>R-99 SMG</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item19')"><img class="tapbuttonImg" src="images/Guns/Ulternator.png" alt="weaponSample12" > <p>얼터네이터 SMG</p></button>
										<button class="tablinks" onmouseover="openTab(event, 'item20')"><img class="tapbuttonImg" src="images/Guns/Prawler.png" alt="weaponSample12" > <p>프라울러 점사 PDW</p></button>

									  </div>
									  <div id="item1" class="tabcontent">
										<h3>R-301 카빈</h3>
										<p>
											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img class="tapImg" src="images/Guns/Carbin.png" ></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
									                    R-301 카빈
									                </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

									                </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

									                </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">기본적인 돌격소총. 경량 탄약을 써서 발당 대미지가 조금 낮으나 연사력이 높다. 반동이 낮고 탄착점이 균일하며 무난한 화력을 가져 사용 난이도가 낮기에 초보자에게 추천된다.

단점은 낮은 발당 대미지와, 빠른 연사속도에 비해 낮은 탄창 용량 및 빠른 탄 소모 속도.</pre></td></tr></table>


									    <table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
									                        기본 데미지
									                    </td> <td data-v-6c2cbffb="">
									                        14
									                    </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
									                        헤드샷 데미지
									                    </td> <td data-v-6c2cbffb="">
									                        28
									                    </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
									                        다리 데미지
									                    </td> <td data-v-6c2cbffb="">
									                        10.5
									                    </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
									                        RPM
									                    </td> <td data-v-6c2cbffb="">
									                        720
									                    </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
									                        탄창용량
									                    </td> <td data-v-6c2cbffb="">
									                        18
									                    </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
									                        재장전 속도(부착물 장착)
									                    </td> <td data-v-6c2cbffb="">
									                        2.4초
									                    </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
									                        재장전 속도(일반)
									                    </td> <td data-v-6c2cbffb="">
									                        3.2초
									                    </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
									                        탄종
									                    </td> <td data-v-6c2cbffb="">
									                        경량
									                    </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
									                        투사체속도
									                    </td> <td data-v-6c2cbffb="">
									                        29000
									                    </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
									                        무기꺼내기 속도
									                    </td> <td data-v-6c2cbffb="">
									                        0.6초
									                    </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
									                        무기넣기 속도
									                    </td> <td data-v-6c2cbffb="">
									                        0.55초
									                    </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
									                        총기부착물
									                    </td> <td data-v-6c2cbffb="">
									                        조준경/배럴/스톡/탄창
									                    </td></tr></table>
										</p>
									  </div>

									  <div id="item2" class="tabcontent">
										<h3>헴록 버스트 AR</h3>
										<p>
											<table ><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Hamlock.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                헴록 버스트 AR
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">돌격소총 중 단발 피해랑이 가장 강하지만 발사 모드가 3점사와 단발밖에 없고 점사 간 딜레이가 조금 있는 편이라 광클 연사는 어렵다. 익숙하지 않다면 근거리에서 다른 자동화기나 산탄총을 이기기 어렵겠지만 단발 피해량이 강하고 점사의 버스트딜이 상당하기 때문에 연타를 맞춘다면 다른 총기에 뒤지지 않는 화력을 뿜어낸다. </pre></td></tr></table>

																	<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    기본 데미지
                </td> <td data-v-6c2cbffb="">
                    18
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    헤드샷 데미지
                </td> <td data-v-6c2cbffb="">
                    36
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    다리 데미지
                </td> <td data-v-6c2cbffb="">
                    13.5
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    RPM
                </td> <td data-v-6c2cbffb="">
                    490
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄창용량
                </td> <td data-v-6c2cbffb="">
                    18
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(부착물 장착)
                </td> <td data-v-6c2cbffb="">
                    2.4초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(일반)
                </td> <td data-v-6c2cbffb="">
                    2.85초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄종
                </td> <td data-v-6c2cbffb="">
                    중량
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    투사체속도
                </td> <td data-v-6c2cbffb="">
                    27500
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기꺼내기 속도
                </td> <td data-v-6c2cbffb="">
                    0.6초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기넣기 속도
                </td> <td data-v-6c2cbffb="">
                    0.55초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    총기부착물
                </td> <td data-v-6c2cbffb="">
                    조준경/배럴/스톡/탄창
                </td></tr></table>
										</p>
									  </div>

									  <div id="item3" class="tabcontent">
										<h3>VK-47 플랫라인</h3>
										<p>
											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Platline.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                VK-47 플랫라인
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">이름처럼 타 게임의 AK-47과 비슷한 느낌의 총. 발당 데미지가 우수하고 연사력도 괜찮아 이름 그대로의 돌격소총을 쓰고 싶다면 이 총기가 추천된다. 특이하게도 조준점이 &lt; o &gt; 모양이며, 수직 반동은 거의 없지만 사격 시 저 조준점 안에서 수평으로 탄이 마구 튀기 때문에 중거리 이상 교전은 어렵고 반동에 익숙해질 필요가 있다.</pre></td></tr></table>

																	<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    기본 데미지
																	                </td> <td data-v-6c2cbffb="">
																	                    16
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    헤드샷 데미지
																	                </td> <td data-v-6c2cbffb="">
																	                    32
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    다리 데미지
																	                </td> <td data-v-6c2cbffb="">
																	                    12
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    RPM
																	                </td> <td data-v-6c2cbffb="">
																	                    600
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    탄창용량
																	                </td> <td data-v-6c2cbffb="">
																	                    20
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    재장전 속도(부착물 장착)
																	                </td> <td data-v-6c2cbffb="">
																	                    2.4초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    재장전 속도(일반)
																	                </td> <td data-v-6c2cbffb="">
																	                    3.1초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    탄종
																	                </td> <td data-v-6c2cbffb="">
																	                    중량
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    투사체속도
																	                </td> <td data-v-6c2cbffb="">
																	                    26000
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    무기꺼내기 속도
																	                </td> <td data-v-6c2cbffb="">
																	                    0.6초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    무기넣기 속도
																	                </td> <td data-v-6c2cbffb="">
																	                    0.55초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    총기부착물
																	                </td> <td data-v-6c2cbffb="">
																	                    조준경/스톡/탄창
																	                </td></tr></table>

										</p>
									  </div>

									  <div id="item4" class="tabcontent">
										<h3>HAVOC 라이플</h3>
										<p>
											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Havok.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                HAVOC 라이플
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">에너지 탄약을 사용하며, 높은 대미지에 어설트 라이플 중 유일하게 탄속이 30000 이상으로 빠른 탄속과 적은 탄 낙차가 특징이다. 또한 핫 존 전설 총기가 존재하며, 사격 방식 선택기와 2X4배율 가변 조준기가 부착되어 핫존에 드랍된다.

											터보차져와 사격 방식 선택기 부착물을 착용할 수 있으며, 전자는 사격 전 충전 딜레이를 없애며 후자는 기존의 자동사격 이외에 히트스캔 단발 차지 모드로 발사가 가능하게 해준다. 연사 모드는 1초 가량의 충전 후 발사가 시작되며, 몸샷 18, 헤드샷 36의 대미지로 준수한 피해를 주며, 좌우 반동이 매우 적고 반동이 거의 수직으로만 작용한다. 다만 반동이 거의 수직으로만 작용한다지만 꽤 강하고 총신 안정기를 부착할 수 없다는 점이 있어 안정성이 조금 떨어진다. 연사속도는 플랫라인보다 살짝 빠른 수준이다.</pre></td></tr></table>

											<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    기본 데미지
											                </td> <td data-v-6c2cbffb="">
											                    45
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    헤드샷 데미지
											                </td> <td data-v-6c2cbffb="">
											                    90
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    다리 데미지
											                </td> <td data-v-6c2cbffb="">
											                    40.5
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    RPM
											                </td> <td data-v-6c2cbffb="">
											                    205
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    탄창용량
											                </td> <td data-v-6c2cbffb="">
											                    6
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    재장전 속도(부착물 장착)
											                </td> <td data-v-6c2cbffb="">
											                    -
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    재장전 속도(일반)
											                </td> <td data-v-6c2cbffb="">
											                    3.2초
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    탄종
											                </td> <td data-v-6c2cbffb="">
											                    에너지
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    투사체속도
											                </td> <td data-v-6c2cbffb="">
											                    30500
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    무기꺼내기 속도
											                </td> <td data-v-6c2cbffb="">
											                    0.6초
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    무기넣기 속도
											                </td> <td data-v-6c2cbffb="">
											                    0.55초
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    총기부착물
											                </td> <td data-v-6c2cbffb="">
											                    조준경/스톡/사거리연장
											                </td></tr></table>

										</p>
									  </div>

									  <div id="item5" class="tabcontent">
											<h3>M600 스핏파이어</h3>
											<p>
												<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Spitfire.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
												                M600 스핏파이어
												            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

												            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

												            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">느린 연사속도로 근접전에서는 불리하지만, 높은 데미지와 압도적인 탄창 크기로 근접전을 제외하고는 상당히 위력적인 편이다. 뛰어난 전투지속력, 그리고 안정적인 반동을 바탕으로 한 중거리 교전 능력을 갖추고 있어 정석적인 경기관총에 가까운 무기이다. 탄띠식이 아닌 일반적인 탄창식으로 장전하기 때문에 장전속도가 그리 느리지 않다는것도 장점.</pre></td></tr></table>
																		<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    기본 데미지
																		                </td> <td data-v-6c2cbffb="">
																		                    20
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    헤드샷 데미지
																		                </td> <td data-v-6c2cbffb="">
																		                    40
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    다리 데미지
																		                </td> <td data-v-6c2cbffb="">
																		                    15
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    RPM
																		                </td> <td data-v-6c2cbffb="">
																		                    512
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    탄창용량
																		                </td> <td data-v-6c2cbffb="">
																		                    35
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    재장전 속도(부착물 장착)
																		                </td> <td data-v-6c2cbffb="">
																		                    2.8초
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    재장전 속도(일반)
																		                </td> <td data-v-6c2cbffb="">
																		                    3.33초
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    탄종
																		                </td> <td data-v-6c2cbffb="">
																		                    중량
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    투사체속도
																		                </td> <td data-v-6c2cbffb="">
																		                    27500
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    무기꺼내기 속도
																		                </td> <td data-v-6c2cbffb="">
																		                    0.7초
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    무기넣기 속도
																		                </td> <td data-v-6c2cbffb="">
																		                    0.65초
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    총기부착물
																		                </td> <td data-v-6c2cbffb="">
																		                    조준경/탄창/배럴/스톡
																		                </td></tr></table>

											</p>
										  </div>

										  <div id="item6" class="tabcontent">
											<h3>디보션 LMG</h3>
											<p>
												<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Devotion.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
												                디보션 LMG
												            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

												            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

												            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">발사를 유지할수록 연사속도가 빨라지고 반동이 낮아지는 독특한 특징을 지닌 경기관총이다. 특유의 퉁..퉁..투퉁-투투투투투 하는 느낌에 익숙해진다면 압도적인 연사력으로 상대를 찢을 수 있다. 하지만 사격 초기의 낮은 연사력와 강한 반동으로 갑작스러운 근거리 교전에서 상당히 불리하며 장거리 단발 속사도 어렵다. 사격 초기의 낮은 연사력 구간은 반동이 상당히 심하지만 높은 연사력 구간으로 진입하면 반동이 거의 없어지다시피 하기 때문에 중~장거리에서도 무반동으로 총알이 다 박힌다.

												최대 연사력이 어마어마해서 잘 나오는 편도 아닌 에너지 탄을 말 그대로 들이마셔버린다는 것과, 최대 연사력이 더 빠르게 나오게 해 주는 전용 부착물 터보차져의 드랍률이 극악하게 낮다는 점까지 겹쳐져서 보통 그렇게 효율이 좋지 못하다. 탄 드랍운이 그리 좋지 못했다면 교전 한두번을 거친 다음에는 탄 부족에 허덕이게 되는게 보통이고, 터보차져를 달아야 제 전투력을 발휘하지만 문제는 전설 등급 아이템이라 철저히 파밍한 뒤 몇 스쿼드를 잡고 다녀도 구경도 못 하는 수준으로 나오지가 않는다.

												큰 약점을 가지고 있는 총기지만 그만큼 잘 쓰면 적을 순식간에 갈아버리는 손맛에 반하게 되는, 하이리스크 하이리턴형 총기라고 할 수 있겠다.</pre></td></tr></table>

												<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
												                    기본 데미지
												                </td> <td data-v-6c2cbffb="">
												                    17
												                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
												                    헤드샷 데미지
												                </td> <td data-v-6c2cbffb="">
												                    34
												                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
												                    다리 데미지
												                </td> <td data-v-6c2cbffb="">
												                    12.75
												                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
												                    RPM
												                </td> <td data-v-6c2cbffb="">
												                    900
												                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
												                    탄창용량
												                </td> <td data-v-6c2cbffb="">
												                    44
												                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
												                    재장전 속도(부착물 장착)
												                </td> <td data-v-6c2cbffb="">
												                    2.8초
												                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
												                    재장전 속도(일반)
												                </td> <td data-v-6c2cbffb="">
												                    3.63초
												                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
												                    탄종
												                </td> <td data-v-6c2cbffb="">
												                    에너지
												                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
												                    투사체속도
												                </td> <td data-v-6c2cbffb="">
												                    33500
												                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
												                    무기꺼내기 속도
												                </td> <td data-v-6c2cbffb="">
												                    0.7초
												                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
												                    무기넣기 속도
												                </td> <td data-v-6c2cbffb="">
												                    0.65초
												                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
												                    총기부착물
												                </td> <td data-v-6c2cbffb="">
												                    조준경/배럴/스톡/사거리연장
												                </td></tr></table>


											</p>
										  </div>

										  <div id="item7" class="tabcontent">
											<h3>RE-45 자동</h3>
											<p>
												<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/RE-45.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
												                RE-45 자동
												            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

												            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

												            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">연사가 되기 때문에 초반 난전때 꽤나 도움이되는 총. 스펙만보면 얼터네이터보단 RPM이 높기 때문에 얼터네이터보단 근접전에 도움이 되지만 권총이라는 한계상 초반 난전이 끝나고는 버려진다.</pre></td></tr></table>

																		<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    기본 데미지
																		                </td> <td data-v-6c2cbffb="">
																		                    11
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    헤드샷 데미지
																		                </td> <td data-v-6c2cbffb="">
																		                    16.5
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    다리 데미지
																		                </td> <td data-v-6c2cbffb="">
																		                    9.9
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    RPM
																		                </td> <td data-v-6c2cbffb="">
																		                    750
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    탄창용량
																		                </td> <td data-v-6c2cbffb="">
																		                    15
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    재장전 속도(부착물 장착)
																		                </td> <td data-v-6c2cbffb="">
																		                    1.74초
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    재장전 속도(일반)
																		                </td> <td data-v-6c2cbffb="">
																		                    2.12초
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    탄종
																		                </td> <td data-v-6c2cbffb="">
																		                    경량
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    투사체속도
																		                </td> <td data-v-6c2cbffb="">
																		                    19500
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    무기꺼내기 속도
																		                </td> <td data-v-6c2cbffb="">
																		                    0.35초
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    무기넣기 속도
																		                </td> <td data-v-6c2cbffb="">
																		                    0.3초
																		                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																		                    총기부착물
																		                </td> <td data-v-6c2cbffb="">
																		                    조준경/탄창/배럴
																		                </td></tr></table>

											</p>
										  </div>

										  <div id="item8" class="tabcontent">
											<h3>weapon8</h3>
											<p>
												<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/P2020.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
												                P2020
												            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

												            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

												            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">사실상 게임 내 최악의 총기이다. 피해량까지 물총 수준이라 차라리 주먹으로 싸우는게 더 나을 수도 있다. 경량 탄약 수급용. 물론 초반 난전에는 이거라도 있으면 좋다.</pre></td></tr></table>



																		<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    기본 데미지
                </td> <td data-v-6c2cbffb="">
                    12
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    헤드샷 데미지
                </td> <td data-v-6c2cbffb="">
                    18
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    다리 데미지
                </td> <td data-v-6c2cbffb="">
                    10.8
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    RPM
                </td> <td data-v-6c2cbffb="">
                    430
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄창용량
                </td> <td data-v-6c2cbffb="">
                    10
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(부착물 장착)
                </td> <td data-v-6c2cbffb="">
                    1.25초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(일반)
                </td> <td data-v-6c2cbffb="">
                    1.25초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄종
                </td> <td data-v-6c2cbffb="">
                    경량
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    투사체속도
                </td> <td data-v-6c2cbffb="">
                    18500
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기꺼내기 속도
                </td> <td data-v-6c2cbffb="">
                    0.25초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기넣기 속도
                </td> <td data-v-6c2cbffb="">
                    0.2초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    총기부착물
                </td> <td data-v-6c2cbffb="">
                    조준경/탄창
                </td></tr></table>
											</p>
										  </div>

									  <div id="item9" class="tabcontent">
										<h3>윙맨</h3>
										<p>

											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Wingman.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                윙맨
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">리볼버 스타일의 권총으로, 권총임에도 사용하기에 따라 주무장으로 활용할 수 있는 성능의 권총이다. 몸샷 한방에 45라는 상당한 피해량은 자랑하고, 연사속도도 나쁘지 않은데 권총인지라 조준 속도가 빠르고 지향사격 명중률도 그럭저럭 괜찮아, 빠르게 뽑아 적들을 교란시킬 때 유용하게 쓸 수도 있다. 권총류라 조준 시에도 이동속도가 크게 감소하지 않는 것도 장점. 근거리라면 최대한 머리를 맞춰 3-4방에 눕히는 강력한 위력에, 장거리에서도 몇방 맞춰주면 저격소총급 피해량은 자랑하는 터라 전방위적으로 활약할 수 있는 범용성 높은 권총이다.</pre></td></tr></table>

																	<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    기본 데미지
																	                </td> <td data-v-6c2cbffb="">
																	                    45
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    헤드샷 데미지
																	                </td> <td data-v-6c2cbffb="">
																	                    90
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    다리 데미지
																	                </td> <td data-v-6c2cbffb="">
																	                    40.5
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    RPM
																	                </td> <td data-v-6c2cbffb="">
																	                    205
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    탄창용량
																	                </td> <td data-v-6c2cbffb="">
																	                    6
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    재장전 속도(부착물 장착)
																	                </td> <td data-v-6c2cbffb="">
																	                    2.1초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    재장전 속도(일반)
																	                </td> <td data-v-6c2cbffb="">
																	                    2.1초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    탄종
																	                </td> <td data-v-6c2cbffb="">
																	                    중량
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    투사체속도
																	                </td> <td data-v-6c2cbffb="">
																	                    18000
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    무기꺼내기 속도
																	                </td> <td data-v-6c2cbffb="">
																	                    0.45초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    무기넣기 속도
																	                </td> <td data-v-6c2cbffb="">
																	                    0.4초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    총기부착물
																	                </td> <td data-v-6c2cbffb="">
																	                    조준경/탄창/사거리연장
																	                </td></tr></table>

										</p>
									  </div>

									  <div id="item10" class="tabcontent">
										<h3>모잠비크 샷건</h3>
										<p>

											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Mozambique.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                모잠비크 샷건
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">소드오프 샷건과 비슷한 총기로, 장탄수가 3발밖에 되지 않고 샷건인 주제에 3발 다 근접해서 맞춰야 45대미지인 모잠비크와 그냥 멀리서도 한대 툭 맞추면 45 대미지인 윙맨과 비교하면 초반 말고는 안쓰게 되는 총기다. 그래도 초반에 주웠다면 조준 시 산탄의 밀집도가 높고 화력도 나쁘지 않아 그럭저럭 무난하게 사용할 수 있으며 산탄 수급용으로 자주 보게 될 것이다.</pre></td></tr></table>

																	<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    기본 데미지
                </td> <td data-v-6c2cbffb="">
                    15
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    헤드샷 데미지
                </td> <td data-v-6c2cbffb="">
                    22.5
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    다리 데미지
                </td> <td data-v-6c2cbffb="">
                    12
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    RPM
                </td> <td data-v-6c2cbffb="">
                    180
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄창용량
                </td> <td data-v-6c2cbffb="">
                    4
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(부착물 장착)
                </td> <td data-v-6c2cbffb="">
                    2.1초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(일반)
                </td> <td data-v-6c2cbffb="">
                    2.6초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄종
                </td> <td data-v-6c2cbffb="">
                    샷건 쉘
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    투사체속도
                </td> <td data-v-6c2cbffb="">
                    10000
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기꺼내기 속도
                </td> <td data-v-6c2cbffb="">
                    0.45초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기넣기 속도
                </td> <td data-v-6c2cbffb="">
                    0.4초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    총기부착물
                </td> <td data-v-6c2cbffb="">
                    조준경/탄창
                </td></tr></table>
										</p>
									  </div>

									  <div id="item11" class="tabcontent">
										<h3>피스키퍼</h3>
										<p>

											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Piecekeeper.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
                피스키퍼
            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">근접전 최강자중 하나다. 레버액션 샷건이기 때문에 사격하면 특유의 레버를 밀었다 당기는 모션으로 연사력이 낮지만, 압도적인 데미지로 단점을 커버해 버리는 샷건이다.

샷건 주제에 거리 비례 데미지 감소가 없기 때문에, 파츠 없이도 어느 정도의 거리까지는 유의미한 교전이 가능하지만, 이 무기의 진가는 에픽 등급의 부착물인 정밀 초크를 장착하면 드러난다. 초크 장착 후 조준을 유지할 시 집탄률이 말도 안되게 올라가서 중/장거리의 적에게도 상당한 수준의 유효타를 날릴 수 있다. 초크를 달면 타 산탄총과는 확실히 차별화된 사거리로 운용할 수 있으며, 샷건 특성상 헤드샷을 노리기가 쉽지 않지만 묵직한 몸샷 대미지를 중/장거리에서 지속해서 투사할 수 있다.

그렇다고 무조건 초크를 달고 중/장거리용으로 운용하라는 말은 절대 아니고, 초크 없이도 샷건 본연의 근거리 교전능력도 게임 내 최강에 속한다.

초크를 끼면 근접, 중/장거리 를 이 무기 하나로 동시에 준수하게 커버할 수 있게 된다는 점이 피스키퍼의 매력이다.

다만 산탄총답게 탄속이 16000으로 게임 내에서 가장 느린 편에 속하고, 어찌되었든 풀 차지를 해도 약간의 탄퍼짐이 존재하며, 고배율 조준경을 부착할 수 없기에 장거리 교전에서는 저격소총에 비해서는 불리하다. 산탄총이기에 있는 어쩔 수 없는 한계.

탄착점이 마치 별모양과 흡사하다.</pre></td></tr></table>


<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    기본 데미지
                </td> <td data-v-6c2cbffb="">
                    10
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    헤드샷 데미지
                </td> <td data-v-6c2cbffb="">
                    15
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    다리 데미지
                </td> <td data-v-6c2cbffb="">
                    8
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    RPM
                </td> <td data-v-6c2cbffb="">
                    58
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄창용량
                </td> <td data-v-6c2cbffb="">
                    6
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(부착물 장착)
                </td> <td data-v-6c2cbffb="">
                    2.5초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(일반)
                </td> <td data-v-6c2cbffb="">
                    3.5초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄종
                </td> <td data-v-6c2cbffb="">
                    샷건 쉘
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    투사체속도
                </td> <td data-v-6c2cbffb="">
                    16000
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기꺼내기 속도
                </td> <td data-v-6c2cbffb="">
                    0.45초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기넣기 속도
                </td> <td data-v-6c2cbffb="">
                    0.4초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    총기부착물
                </td> <td data-v-6c2cbffb="">
                    조준경/탄창/사거리연장
                </td></tr></table>

										</p>
									  </div>

									  <div id="item12" class="tabcontent">
										<h3>EVA-8 자동</h3>
										<p>

											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Eva-8.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                EVA-8 자동
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">발당 위력이 안좋아 피스키퍼에 비해 상당히 밀린다는 인식이 있으나, 반자동 사격이 가능하고 연사력이 꽤나 높기에 샷건 볼트를 장착해주면 상당한 수준의 근거리 화력을 지니게 된다. 또한 피스키퍼에 비해 탄이 빗나갔을 시에 리스크가 적기에 초보자에게 추천되는 샷건이다.

											탄착점이 일종의 다이아몬드 모양에 가깝다.

											여담으로 타이탄폴2에서도 등장한 샷건인데, 이 때는 플레이어의 피통이 적었고 연사속도가 괴랄하게 빨라서 초보고 고인물이고 각만 잡히면 학살극이 가능할 정도의 고성능 샷건이였다.</pre></td></tr></table>

											<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    기본 데미지
											                </td> <td data-v-6c2cbffb="">
											                    7
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    헤드샷 데미지
											                </td> <td data-v-6c2cbffb="">
											                    10.5
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    다리 데미지
											                </td> <td data-v-6c2cbffb="">
											                    5.6
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    RPM
											                </td> <td data-v-6c2cbffb="">
											                    128
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    탄창용량
											                </td> <td data-v-6c2cbffb="">
											                    8
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    재장전 속도(부착물 장착)
											                </td> <td data-v-6c2cbffb="">
											                    2.75초
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    재장전 속도(일반)
											                </td> <td data-v-6c2cbffb="">
											                    3.0초
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    탄종
											                </td> <td data-v-6c2cbffb="">
											                    샷건 쉘
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    투사체속도
											                </td> <td data-v-6c2cbffb="">
											                    16000
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    무기꺼내기 속도
											                </td> <td data-v-6c2cbffb="">
											                    0.45초
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    무기넣기 속도
											                </td> <td data-v-6c2cbffb="">
											                    0.4초
											                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
											                    총기부착물
											                </td> <td data-v-6c2cbffb="">
											                    조준경/탄창
											                </td></tr></table>

										</p>
									  </div>


										<div id="item13" class="tabcontent">
										<h3>마스티프 샷건</h3>
										<p>
											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Mastiff.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                마스티프 샷건
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">보급 전용 무기이며 샷건 최강자로 말도 안되는 데미지를 가졌다. 보급 무기이지만 획득하게 된다면 게임의 판도를 바꿀만한 사기 샷건. 다만 전용 탄약을 쓰며 얼마 안 주기 때문에 총알 낭비하지 말자.</pre></td></tr></table>

																	<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    기본 데미지
																	                </td> <td data-v-6c2cbffb="">
																	                    18
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    헤드샷 데미지
																	                </td> <td data-v-6c2cbffb="">
																	                    36
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    다리 데미지
																	                </td> <td data-v-6c2cbffb="">
																	                    18
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    RPM
																	                </td> <td data-v-6c2cbffb="">
																	                    96
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    탄창용량
																	                </td> <td data-v-6c2cbffb="">
																	                    4
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    재장전 속도(부착물 장착)
																	                </td> <td data-v-6c2cbffb="">
																	                    쉘당 1.03
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    재장전 속도(일반)
																	                </td> <td data-v-6c2cbffb="">
																	                    없음
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    탄종
																	                </td> <td data-v-6c2cbffb="">
																	                    전설
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    투사체속도
																	                </td> <td data-v-6c2cbffb="">
																	                    12000
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    무기꺼내기 속도
																	                </td> <td data-v-6c2cbffb="">
																	                    0.8초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    무기넣기 속도
																	                </td> <td data-v-6c2cbffb="">
																	                    0.4초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    총기부착물
																	                </td> <td data-v-6c2cbffb="">
																	                    없음
																	                </td></tr></table>

										</p>
									  </div>

										<div id="item14" class="tabcontent">
										<h3>G7 스카우트</h3>
										<p>

											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/G7scout.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                G7 스카우트
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">저격소총 치고는 데미지가 많이 낮지만 연사력이 가장 높고 반동이 안정적이기에 타 게임의 DMR이나 반자동 소총과 비슷한 운용을 하기에 가장 적합하다. 경량 탄을 써서 탄 수급이 원활한 것도 장점.</pre></td></tr></table>


																	<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    기본 데미지
                </td> <td data-v-6c2cbffb="">
                    30
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    헤드샷 데미지
                </td> <td data-v-6c2cbffb="">
                    60
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    다리 데미지
                </td> <td data-v-6c2cbffb="">
                    21.75
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    RPM
                </td> <td data-v-6c2cbffb="">
                    88
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄창용량
                </td> <td data-v-6c2cbffb="">
                    10
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(부착물 장착)
                </td> <td data-v-6c2cbffb="">
                    2.4초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(일반)
                </td> <td data-v-6c2cbffb="">
                    3.0초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄종
                </td> <td data-v-6c2cbffb="">
                    경량
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    투사체속도
                </td> <td data-v-6c2cbffb="">
                    31500
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기꺼내기 속도
                </td> <td data-v-6c2cbffb="">
                    0.9초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기넣기 속도
                </td> <td data-v-6c2cbffb="">
                    0.6초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    총기부착물
                </td> <td data-v-6c2cbffb="">
                    배럴/탄창/조준경/스톡
                </td></tr></table>
										</p>
									  </div>

										<div id="item15" class="tabcontent">
										<h3>롱보우 DMR</h3>
										<p>

											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Longbow.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
                롱보우 DMR
            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">연사력은 낮지만 몸샷 55, 헤드샷 110이라는 상당한 데미지로 장거리용 DMR 역할을 충실히 하는 총기이다. 헤드샷 한두발이면 적을 빈사상태로 만들 수 있다.</pre></td></tr></table>

																	<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    기본 데미지
                </td> <td data-v-6c2cbffb="">
                    55
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    헤드샷 데미지
                </td> <td data-v-6c2cbffb="">
                    110
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    다리 데미지
                </td> <td data-v-6c2cbffb="">
                    39.88
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    RPM
                </td> <td data-v-6c2cbffb="">
                    88
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄창용량
                </td> <td data-v-6c2cbffb="">
                    5
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(부착물 장착)
                </td> <td data-v-6c2cbffb="">
                    2.66초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(일반)
                </td> <td data-v-6c2cbffb="">
                    3.66초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄종
                </td> <td data-v-6c2cbffb="">
                    Heavy
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    투사체속도
                </td> <td data-v-6c2cbffb="">
                    30500
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기꺼내기 속도
                </td> <td data-v-6c2cbffb="">
                    0.9초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기넣기 속도
                </td> <td data-v-6c2cbffb="">
                    0.6초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    총기부착물
                </td> <td data-v-6c2cbffb="">
                    배럴/탄창/조준경/스톡/사거리연장
                </td></tr></table>
										</p>
									  </div>

										<div id="item16" class="tabcontent">
										<h3>트리플 테이크</h3>
										<p>
											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Tripletake.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                트리플 테이크
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">상당히 특이한 저격소총으로, 정밀 초크를 달지 않으면 총알 3개가 가로로 퍼져서 동시에 나간다. 퍼지는 각도가 상당히 좁아서 50여 미터까지는 머리는 몰라도 몸에는 3발 다 꽂을 순 있다. 장거리용 샷건 느낌.

하지만 정밀 초크를 달고 풀차징 조준사격을 하게 되면 3발이 동시에 에임에 박히기 때문에 셋 중 가장 강한 한방 데미지를 줄 수 있어 비로소 쓸만한 저격소총이 된다. 차징을 해야 하긴 하지만 연사간 텀이 긴 저격소총 특성상 큰 패널티는 아니고 다만 에픽급 부착물인 초크를 먹어야 한다는 것과 제일 안 나오는 탄인 에너지 탄환을 쓴다는 게 단점.</pre></td></tr></table>


<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    기본 데미지
                </td> <td data-v-6c2cbffb="">
                    30
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    헤드샷 데미지
                </td> <td data-v-6c2cbffb="">
                    60
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    다리 데미지
                </td> <td data-v-6c2cbffb="">
                    21.75
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    RPM
                </td> <td data-v-6c2cbffb="">
                    86
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄창용량
                </td> <td data-v-6c2cbffb="">
                    5
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(부착물 장착)
                </td> <td data-v-6c2cbffb="">
                    2.6초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(일반)
                </td> <td data-v-6c2cbffb="">
                    3.4초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄종
                </td> <td data-v-6c2cbffb="">
                    에너지
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    투사체속도
                </td> <td data-v-6c2cbffb="">
                    32000
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기꺼내기 속도
                </td> <td data-v-6c2cbffb="">
                    0.9초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기넣기 속도
                </td> <td data-v-6c2cbffb="">
                    0.6초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    총기부착물
                </td> <td data-v-6c2cbffb="">
                    사거리연장/조준경/스톡
                </td></tr></table>


										</p>
									  </div>

										<div id="item17" class="tabcontent">
										<h3>크레이버 .50구경 저격총</h3>
										<p>
											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Craver.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                크레이버 .50구경 저격총
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">보급 전용 무기로 이 게임에 유일한 전형적인 볼트액션 저격소총이다. 125라는 게임 내 최강의 단발 화력을 가지며, 6~10배율 가변 스코프가 내장되어 있다. 탄약은 전용 탄약을 쓰며 4+8 총 12발이 총기 습득시 주어지고 다른 방법으로 얻을수 없다. 헤드샷 데미지는 250이지만 어지간한 상대는 헬멧을 가지고 있으므로 데미지가 그대로 박히긴 힘들다. 최대 헬멧 방어율인 50%면 몸샷이랑 헤드샷이랑 같으므로 반드시 머리를 노릴 필요까지는 없다.</pre></td></tr></table>

																	<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    기본 데미지
																	                </td> <td data-v-6c2cbffb="">
																	                    125
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    헤드샷 데미지
																	                </td> <td data-v-6c2cbffb="">
																	                    250
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    다리 데미지
																	                </td> <td data-v-6c2cbffb="">
																	                    95
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    RPM
																	                </td> <td data-v-6c2cbffb="">
																	                    36
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    탄창용량
																	                </td> <td data-v-6c2cbffb="">
																	                    4
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    재장전 속도(부착물 장착)
																	                </td> <td data-v-6c2cbffb="">
																	                    3.2초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    재장전 속도(일반)
																	                </td> <td data-v-6c2cbffb="">
																	                    4.3초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    탄종
																	                </td> <td data-v-6c2cbffb="">
																	                    전설
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    투사체속도
																	                </td> <td data-v-6c2cbffb="">
																	                    29500
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    무기꺼내기 속도
																	                </td> <td data-v-6c2cbffb="">
																	                    1.2초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    무기넣기 속도
																	                </td> <td data-v-6c2cbffb="">
																	                    0.7초
																	                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
																	                    총기부착물
																	                </td> <td data-v-6c2cbffb="">
																	                    없음
																	                </td></tr></table>


										</p>
									  </div>

										<div id="item18" class="tabcontent">
										<h3>R-99 SMG</h3>
										<p>

											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/R-99.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                R-99 SMG
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">근접전 최강자 중 하나로, 연사력과 탄속이 좋아 에임만 따라준다면 적을 말 그대로 갈아버릴 수 있다. 문제는 그만큼 순식간에 탄이 줄어들고 탄창 용량이 적기 때문에 확장탄창이 필수적이다. 기본 상태인 18발짜리 탄창으로는 한 탄창에 든 총알을 싸그리 적에게 박아넣는 묘기를 보여주지 않는 이상 실드가 있는 적이 안 죽는다.

반동이 꽤나 강하고 탄퍼짐이 크기에 중-장거리 교전은 피하는 것이 좋다.

가장 정석적인 기관단총이라고 할 수 있다.</pre></td></tr></table>
										</p>

										<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
										                    기본 데미지
										                </td> <td data-v-6c2cbffb="">
										                    12
										                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
										                    헤드샷 데미지
										                </td> <td data-v-6c2cbffb="">
										                    18
										                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
										                    다리 데미지
										                </td> <td data-v-6c2cbffb="">
										                    9.6
										                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
										                    RPM
										                </td> <td data-v-6c2cbffb="">
										                    1060
										                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
										                    탄창용량
										                </td> <td data-v-6c2cbffb="">
										                    18
										                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
										                    재장전 속도(부착물 장착)
										                </td> <td data-v-6c2cbffb="">
										                    1.8
										                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
										                    재장전 속도(일반)
										                </td> <td data-v-6c2cbffb="">
										                    2.45초
										                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
										                    탄종
										                </td> <td data-v-6c2cbffb="">
										                    경량
										                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
										                    투사체속도
										                </td> <td data-v-6c2cbffb="">
										                    21000
										                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
										                    무기꺼내기 속도
										                </td> <td data-v-6c2cbffb="">
										                    0.35초
										                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
										                    무기넣기 속도
										                </td> <td data-v-6c2cbffb="">
										                    0.3
										                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
										                    총기부착물
										                </td> <td data-v-6c2cbffb="">
										                    배럴/탄창/조준경/스톡
										                </td></tr></table>


									  </div>

										<div id="item19" class="tabcontent">
										<h3>얼터네이터 SMG</h3>
										<p>
											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Ulternator.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                얼터네이터 SMG
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">화력만 보면 기관단총 중 가장 약하지만, 지향사격 명중률이 우수하며 반동 및 탄착점이 안정적인 편이라 다른 기관단총보다 사용 난이도가 낮으며, 탄 소모 속도가 타 기관단총에 비해 낮아 전투 지속력이 우수하다.

파츠 없이도 무난한 성능으로 내리자 마자 주우면 초반 개싸움을 쉽게 가져갈 수 있다.</pre></td></tr></table>

<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    기본 데미지
                </td> <td data-v-6c2cbffb="">
                    13
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    헤드샷 데미지
                </td> <td data-v-6c2cbffb="">
                    19.5
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    다리 데미지
                </td> <td data-v-6c2cbffb="">
                    10.4
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    RPM
                </td> <td data-v-6c2cbffb="">
                    640
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄창용량
                </td> <td data-v-6c2cbffb="">
                    16
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(부착물 장착)
                </td> <td data-v-6c2cbffb="">
                    19.2
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(일반)
                </td> <td data-v-6c2cbffb="">
                    2.23초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄종
                </td> <td data-v-6c2cbffb="">
                    Light
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    투사체속도
                </td> <td data-v-6c2cbffb="">
                    19500
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기꺼내기 속도
                </td> <td data-v-6c2cbffb="">
                    0.35초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기넣기 속도
                </td> <td data-v-6c2cbffb="">
                    0.3초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    총기부착물
                </td> <td data-v-6c2cbffb="">
                    배럴/탄창/조준경/스톡
                </td></tr></table>



										</p>
									  </div>

										<div id="item20" class="tabcontent">
										<h3>프라울러 점사 PDW</h3>
										<p>
											<table data-v-6c2cbffb="" class="tb-desc"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb=""><img data-v-6c2cbffb="" class="tapImg" src="images/Guns/Prawler.png"></td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charName">
											                프라울러 점사 PDW
											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charNameSub">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="charQutoe">

											            </td></tr> <tr data-v-6c2cbffb=""><td data-v-6c2cbffb="" class="Desc"><pre data-v-6c2cbffb="" style="white-space: pre-wrap;">데미지와 연사력 모두 R-99보다 우수하지만, 전용 부착물을 달지 않으면 5점사라는 기묘한 발사모드로 고정되기 때문에 애매하다. 재장전 시간도 기관단총 치고는 느린 편.

그러나 에픽 등급의 전용 부착물인 사격 방식 선택기를 얻을 수만 있다면 연사모드 프라울러의 근거리 화력은 거의 따라올 무기가 없기에 전용 부착물을 얻게 되거나 5점사에 익숙하다면 써볼 만한 무기이다.

다만 중량 탄약을 써서인지 반동이 상당히 심한 편인 점은 감안해야 한다.</pre></td></tr></table>


<table id="customers"><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    기본 데미지
                </td> <td data-v-6c2cbffb="">
                    14
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    헤드샷 데미지
                </td> <td data-v-6c2cbffb="">
                    21
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    다리 데미지
                </td> <td data-v-6c2cbffb="">
                    11.2
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    RPM
                </td> <td data-v-6c2cbffb="">
                    800
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄창용량
                </td> <td data-v-6c2cbffb="">
                    20
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(부착물 장착)
                </td> <td data-v-6c2cbffb="">
                    2.0초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    재장전 속도(일반)
                </td> <td data-v-6c2cbffb="">
                    2.6초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    탄종
                </td> <td data-v-6c2cbffb="">
                    중량
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    투사체속도
                </td> <td data-v-6c2cbffb="">
                    18000
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기꺼내기 속도
                </td> <td data-v-6c2cbffb="">
                    0.35초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    무기넣기 속도
                </td> <td data-v-6c2cbffb="">
                    0.3초
                </td></tr><tr data-v-6c2cbffb=""><td data-v-6c2cbffb="">
                    총기부착물
                </td> <td data-v-6c2cbffb="">
                    사거리연장/탄창/조준경/스톡
                </td></tr></table>

										</p>
									  </div>

										<div id="item21" class="tabcontent">
										<h3>weapon12</h3>
										<p>weapon12 설명</p>
									  </div>


							<div class="clearfix"></div>

							<script>
							function openTab(evt, tabName) {
							  var i, tabcontent, tablinks;
							  tabcontent = document.getElementsByClassName("tabcontent");
							  for (i = 0; i < tabcontent.length; i++) {
								tabcontent[i].style.display = "none";
							  }
							  tablinks = document.getElementsByClassName("tablinks");
							  for (i = 0; i < tablinks.length; i++) {
								tablinks[i].className = tablinks[i].className.replace(" active", "");
							  }
							  document.getElementById(tabName).style.display = "block";
							  evt.currentTarget.className += " active";
							}
							</script>
					</div>
				</div>
			</section>

		<!-- Footer -->
			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="js/js.js"></script>


	</body>
</html>
