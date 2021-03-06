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
    width: 20%;
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
      height: 20% ;
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

  /* Clear floats after the tab */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }


	/* 아이템 상세페이지 CSS */
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

	/* tap안의 img */
	.tapImg {
		width: 60%;
		height: 50%;
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
				<h1 style="font-family:SLANT;">Item Page</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

						<div style="padding-left:30px; padding-Top:20px">
								<div class="tab">

										<button class="tablinks" onmouseover="openTab(event, 'item1')"> <center><p>수류탄 계열</p></center></button>
										<button class="tablinks" onmouseover="openTab(event, 'item2')"><center> <p>회복계열</p></center></button>
										<button class="tablinks" onmouseover="openTab(event, 'item3')"> <center> <p>방어계열</p></center></button>
										<button class="tablinks" onmouseover="openTab(event, 'item4')"><center> <p>부착물</p></center></button>

							</div>
							<div id="item1" class="tabcontent">
							  <h3>수류탄 계열</h3>
							  <p>
									<table id="customers"><tr data-v-6cb3a0c2=""><th width="120dp">아이템명</th> <th data-v-6cb3a0c2="">설명</th></tr> <tr data-v-6cb3a0c2="" id="seq23"><td data-v-6cb3a0c2="" class="name"><img data-v-6cb3a0c2="" src="">
									                    아크 스타

									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    목표 지점에 부착되고 잠시 후에 폭발합니다. 대미지를 주고 시야를 방해합니다.
									                </td></tr><tr data-v-6cb3a0c2="" id="seq24"><td data-v-6cb3a0c2="" class="name"><img data-v-6cb3a0c2="" src="">
									                    세열 수류탄

									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    폭발물입니다. 던지면 신관이 작동합니다.
									                </td></tr><tr data-v-6cb3a0c2="" id="seq25"><td data-v-6cb3a0c2="" class="name"><img data-v-6cb3a0c2="" src="">
									                    테르밋 수류탄

									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    좌우로 번지는 불의 장벽을 생성합니다.
									                </td></tr></table>
								</p>
							</div>

							<div id="item2" class="tabcontent">
							  <h3>회복 계열</h3>
							  <p>
									<table id="customers"><tr data-v-6cb3a0c2=""><th width="120dp">아이템명</th> <th width = "80dp">등급</th> <th data-v-6cb3a0c2="">설명</th></tr> <tr data-v-6cb3a0c2="" id="seq1"><td data-v-6cb3a0c2="" class="name">
									                    주사기
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-6cb3a0c2="" src="">
									                    일반
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    체력 25 사용시간 5초
									                </td></tr><tr data-v-6cb3a0c2="" id="seq2"><td data-v-6cb3a0c2="" class="name">
									                    메디킷
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-6cb3a0c2="" src="">
									                    레어
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    체력 100 사용시간 8초
									                </td></tr><tr data-v-6cb3a0c2="" id="seq3"><td data-v-6cb3a0c2="" class="name">
									                    피닉스 킷
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-6cb3a0c2="" src="">
									                    에픽
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    체력/쉴드 100 사용시간 10초
									                </td></tr><tr data-v-6cb3a0c2="" id="seq4"><td data-v-6cb3a0c2="" class="name">
									                    쉴드 셀
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-6cb3a0c2="" src="">
									                    일반
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    쉴드 25 사용시간 3초
									                </td></tr><tr data-v-6cb3a0c2="" id="seq5"><td data-v-6cb3a0c2="" class="name">
									                    쉴드배터리
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-6cb3a0c2="" src="">
									                    레어
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    쉴드 100 사용시간 5초
									                </td></tr><tr data-v-6cb3a0c2="" id="seq6"><td data-v-6cb3a0c2="" class="name">
									                    궁극기 가속기
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-6cb3a0c2="" src="">
									                    레어
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    궁극기 게이지 20% 사용시간 7초
									                </td></tr></table>
								</p>
							</div>

							<div id="item3" class="tabcontent">
							  <h3>방어계열</h3>
							  <p>
									<table id="customers"><tr data-v-6cb3a0c2=""><th width="120dp">아이템명</th> <th width="80dp">등급</th> <th data-v-6cb3a0c2="">설명</th></tr> <tr data-v-6cb3a0c2="" id="seq7"><td data-v-6cb3a0c2="" class="name">
									                    바디 쉴드
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-6cb3a0c2="" src="">
									                    일반
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    데미지 흡수 50
									                </td></tr><tr data-v-6cb3a0c2="" id="seq8"><td data-v-6cb3a0c2="" class="name">
									                    바디 쉴드
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-6cb3a0c2="" src="">
									                    레어
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    데미지 흡수 75
									                </td></tr><tr data-v-6cb3a0c2="" id="seq9"><td data-v-6cb3a0c2="" class="name">
									                    바디 쉴드
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-6cb3a0c2="" src="">
									                    에픽
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    데미지 흡수 100
									                </td></tr><tr data-v-6cb3a0c2="" id="seq10"><td data-v-6cb3a0c2="" class="name">
									                    바디 쉴드
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(255, 212, 0);"><img data-v-6cb3a0c2="" src="">
									                    전설
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    데미지 흡수 100 처형자(피니시 시, 전체 쉴드 회복)
									                </td></tr><tr data-v-6cb3a0c2="" id="seq11"><td data-v-6cb3a0c2="" class="name">
									                    헬멧
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-6cb3a0c2="" src="">
									                    일반
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    헤드샷 데미지 흡수 30%
									                </td></tr><tr data-v-6cb3a0c2="" id="seq12"><td data-v-6cb3a0c2="" class="name">
									                    헬멧
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-6cb3a0c2="" src="">
									                    레어
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    헤드샷 데미지 흡수 40%
									                </td></tr><tr data-v-6cb3a0c2="" id="seq13"><td data-v-6cb3a0c2="" class="name">
									                    헬멧
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-6cb3a0c2="" src="">
									                    에픽
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    헤드샷 데미지 흡수 50%
									                </td></tr><tr data-v-6cb3a0c2="" id="seq14"><td data-v-6cb3a0c2="" class="name">
									                    헬멧
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(255, 212, 0);"><img data-v-6cb3a0c2="" src="">
									                    전설
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    헤드샷 데미지 흡수 50% 패스트 차지(전술 기술과 얼티밋 스킬 게이지 충전 시간 감소)
									                </td></tr><tr data-v-6cb3a0c2="" id="seq15"><td data-v-6cb3a0c2="" class="name">
									                    넉다운 쉴드
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-6cb3a0c2="" src="">
									                    일반
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    데미지 흡수 100
									                </td></tr><tr data-v-6cb3a0c2="" id="seq16"><td data-v-6cb3a0c2="" class="name">
									                    넉다운 쉴드
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-6cb3a0c2="" src="">
									                    레어
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    데미지 흡수 250
									                </td></tr><tr data-v-6cb3a0c2="" id="seq17"><td data-v-6cb3a0c2="" class="name">
									                    넉다운 쉴드
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-6cb3a0c2="" src="">
									                    에픽
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    데미지 흡수 750
									                </td></tr><tr data-v-6cb3a0c2="" id="seq18"><td data-v-6cb3a0c2="" class="name">
									                    넉다운 쉴드
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(255, 212, 0);"><img data-v-6cb3a0c2="" src="">
									                    전설
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    데미지 흡수 750 레저렉션(자가 부활 1회 사용 가능, 재사용 불가)
									                </td></tr><tr data-v-6cb3a0c2="" id="seq19"><td data-v-6cb3a0c2="" class="name">
									                    배낭
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-6cb3a0c2="" src="">
									                    일반
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    용량 +2
									                </td></tr><tr data-v-6cb3a0c2="" id="seq20"><td data-v-6cb3a0c2="" class="name">
									                    배낭
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-6cb3a0c2="" src="">
									                    레어
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    용량 +4
									                </td></tr><tr data-v-6cb3a0c2="" id="seq21"><td data-v-6cb3a0c2="" class="name">
									                    배낭
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-6cb3a0c2="" src="">
									                    에픽
									                </td> <td data-v-6cb3a0c2="" class="desc">
									                    용량 +6
									                </td></tr><tr data-v-6cb3a0c2="" id="seq22"><td data-v-6cb3a0c2="" class="name">
									                    배낭
									                </td> <td data-v-6cb3a0c2="" class="type" style="background-color: rgb(255, 212, 0);"><img data-v-6cb3a0c2="" src="">
									                    전설
									                </td> <td data-v-6cb3a0c2="" class="desc">
용량 +6 빠른 치유(회복 아이템 사용시간 50% 감소)
									                </td></tr></table>
								</p>
							</div>

							<div id="item4" class="tabcontent">
							  <h3>부착물</h3>
							  <p>
									<table id="customers"><tr data-v-5c76ec00=""><th width="120dp">아이템명</th> <th width="80dp">등급</th> <th data-v-5c76ec00="">설명</th></tr> <tr data-v-5c76ec00="" id="seq1"><td data-v-5c76ec00="" class="name">탄창(경량)</td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-5c76ec00="" src="">일반
									                </td> <td data-v-5c76ec00="" class="desc">탄창 크기 소량 증가</td></tr><tr data-v-5c76ec00="" id="seq2"><td data-v-5c76ec00="" class="name">탄창(경량)</td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-5c76ec00="" src="">
레어
									                </td> <td data-v-5c76ec00="" class="desc">탄창 크기 증가
									재장전 시간 5% 감소</td></tr><tr data-v-5c76ec00="" id="seq3"><td data-v-5c76ec00="" class="name">탄창(경량)</td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">탄창 크기 다량 증가
									재장전 시간 10% 감소</td></tr><tr data-v-5c76ec00="" id="seq4"><td data-v-5c76ec00="" class="name">탄창(중량)</td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-5c76ec00="" src="" style="display: none;">

									                    일반
									                </td> <td data-v-5c76ec00="" class="desc">탄창 크기 소량 증가</td></tr><tr data-v-5c76ec00="" id="seq5"><td data-v-5c76ec00="" class="name">탄창(중량)</td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-5c76ec00="" src="" style="display: none;">

									                    레어
									                </td> <td data-v-5c76ec00="" class="desc">탄창 크기 증가
									재장전 시간 8% 감소</td></tr><tr data-v-5c76ec00="" id="seq6"><td data-v-5c76ec00="" class="name">탄창(중량) </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="" style="display: none;">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">탄창 크기 다량 증가
									재장전 시간 13% 감소</td></tr><tr data-v-5c76ec00="" id="seq7"><td data-v-5c76ec00="" class="name">탄창(샷건 볼트)</td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-5c76ec00="" src="">

									                    일반
									                </td> <td data-v-5c76ec00="" class="desc">연사속도 15% 증가 </td></tr><tr data-v-5c76ec00="" id="seq8"><td data-v-5c76ec00="" class="name">탄창(샷건 볼트) </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-5c76ec00="" src="">

									                    레어
									                </td> <td data-v-5c76ec00="" class="desc">연사속도 25% 증가 </td></tr><tr data-v-5c76ec00="" id="seq9"><td data-v-5c76ec00="" class="name">탄창(샷건 볼트) </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">연사속도 35% 증가 </td></tr><tr data-v-5c76ec00="" id="seq10"><td data-v-5c76ec00="" class="name">총구 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-5c76ec00="" src="">

									                    일반
									                </td> <td data-v-5c76ec00="" class="desc">반동 패턴 / 수평 반동: -5%
									수직 반동: -20% </td></tr><tr data-v-5c76ec00="" id="seq11"><td data-v-5c76ec00="" class="name">총구 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-5c76ec00="" src="">

									                    레어
									                </td> <td data-v-5c76ec00="" class="desc">반동 패턴 / 수평 반동: -10%
									수직 반동: -25% </td></tr><tr data-v-5c76ec00="" id="seq12"><td data-v-5c76ec00="" class="name">총구 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">반동 패턴 / 수평 반동: -15%
									수직 반동: -30% </td></tr><tr data-v-5c76ec00="" id="seq13"><td data-v-5c76ec00="" class="name">총구 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(255, 212, 0);"><img data-v-5c76ec00="" src="">

									                    전설
									                </td> <td data-v-5c76ec00="" class="desc">반동 패턴 / 수평 반동: -15%
									수직 반동: -30%
									총구 섬광을 완전히 숨김 </td></tr><tr data-v-5c76ec00="" id="seq14"><td data-v-5c76ec00="" class="name">스톡 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-5c76ec00="" src="">

									                    일반
									                </td> <td data-v-5c76ec00="" class="desc">무기교체 / 조준 시간: -15%
									조준 흔들림 범위: -15% </td></tr><tr data-v-5c76ec00="" id="seq15"><td data-v-5c76ec00="" class="name">스톡 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-5c76ec00="" src="">

									                    레어
									                </td> <td data-v-5c76ec00="" class="desc">무기교체 / 조준 시간: -20%
									조준 흔들림 범위: -25% </td></tr><tr data-v-5c76ec00="" id="seq16"><td data-v-5c76ec00="" class="name">스톡 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">무기교체 / 조준 시간: -25%
									조준 흔들림 범위: -45% </td></tr><tr data-v-5c76ec00="" id="seq17"><td data-v-5c76ec00="" class="name">스톡(스나이퍼) </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-5c76ec00="" src="">

									                    일반
									                </td> <td data-v-5c76ec00="" class="desc">무기교체 시간: -15%
									조준 흔들림 범위: -30%
									조준 시간 / 흔들림 속도: -10% </td></tr><tr data-v-5c76ec00="" id="seq18"><td data-v-5c76ec00="" class="name">스톡(스나이퍼) </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-5c76ec00="" src="">

									                    레어
									                </td> <td data-v-5c76ec00="" class="desc">무기교체 시간: -20%
									조준 흔들림 범위: -50%
									조준 시간 / 흔들림 속도: -15% </td></tr><tr data-v-5c76ec00="" id="seq19"><td data-v-5c76ec00="" class="name">스톡(스나이퍼) </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">무기교체 시간: -25%
									조준 흔들림 범위: -80%
									조준 시간 / 흔들림 속도: -20% </td></tr><tr data-v-5c76ec00="" id="seq20"><td data-v-5c76ec00="" class="name">사거리연장
									관통형 강선 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">호환 가능한 무기(롱보우, 윙맨)의 헤드샷 대미지 증가 </td></tr><tr data-v-5c76ec00="" id="seq21"><td data-v-5c76ec00="" class="name">사거리연장
									사격방식 선택기 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">호환 가능한 무기(프라울러, HAVOC 라이플)의 연발 사격 사용 가능 </td></tr><tr data-v-5c76ec00="" id="seq22"><td data-v-5c76ec00="" class="name">사거리연장
									정밀 초크 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">호환 가능한 무기(피스키퍼, 트리플 테이크)의 투사체 퍼짐 감소 </td></tr><tr data-v-5c76ec00="" id="seq23"><td data-v-5c76ec00="" class="name">사거리연장
									터보 차저 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(255, 212, 0);"><img data-v-5c76ec00="" src="">

									                    전설
									                </td> <td data-v-5c76ec00="" class="desc">호환 가능한 무기(디보션)의 선회 시간 감소
									호환 가능한 무기(HAVOC 라이플)의 선회시간 삭제 </td></tr><tr data-v-5c76ec00="" id="seq24"><td data-v-5c76ec00="" class="name">조준경 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-5c76ec00="" src="">

									                    일반
									                </td> <td data-v-5c76ec00="" class="desc">1배율 홀로그램
									1배율 조준 </td></tr><tr data-v-5c76ec00="" id="seq25"><td data-v-5c76ec00="" class="name">조준경 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-5c76ec00="" src="">

									                    레어
									                </td> <td data-v-5c76ec00="" class="desc"1-2배 가변형 홀로그램
									1-2배율 조준 전환 </td></tr><tr data-v-5c76ec00="" id="seq26"><td data-v-5c76ec00="" class="name">조준경 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(140, 140, 140);"><img data-v-5c76ec00="" src="">

									                    일반
									                </td> <td data-v-5c76ec00="" class="desc">1배율 HCOG 클래식
									1배율 조준 </td></tr><tr data-v-5c76ec00="" id="seq27"><td data-v-5c76ec00="" class="name">조준경 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(72, 156, 255);"><img data-v-5c76ec00="" src="">

									                    레어
									                </td> <td data-v-5c76ec00="" class="desc">2배율 HCOG 브루저
									2배율 조준 </td></tr><tr data-v-5c76ec00="" id="seq28"><td data-v-5c76ec00="" class="name">조준경 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">3배율 HCOG 레인저
									3배율 조준 </td></tr><tr data-v-5c76ec00="" id="seq29"><td data-v-5c76ec00="" class="name">조준경 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">2-4배 가변형 AOG
									2-4배율 전환 </td></tr><tr data-v-5c76ec00="" id="seq30"><td data-v-5c76ec00="" class="name">조준경 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(255, 212, 0);"><img data-v-5c76ec00="" src="">

									                    전설
									                </td> <td data-v-5c76ec00="" class="desc">디지털 스레트
									(SMG, 샷건, 권총 전용)
									무배율 적 감지 조준기(스코프 영역 내, 적 위치 시 빨갛게 하이라이트 됨) </td></tr><tr data-v-5c76ec00="" id="seq31"><td data-v-5c76ec00="" class="name">조준경 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">6배율 저격용
									(스나이퍼 라이플 전용)
									6배율 조준 </td></tr><tr data-v-5c76ec00="" id="seq32"><td data-v-5c76ec00="" class="name">조준경 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(167, 72, 255);"><img data-v-5c76ec00="" src="">

									                    에픽
									                </td> <td data-v-5c76ec00="" class="desc">4-8배 가변형 저격용
									(스나이퍼 라이플 전용)
									4-8배율 조준 전환 </td></tr><tr data-v-5c76ec00="" id="seq33"><td data-v-5c76ec00="" class="name">조준경 </td> <td data-v-5c76ec00="" class="type" style="background-color: rgb(255, 212, 0);"><img data-v-5c76ec00="" src="">

									                    전설
									                </td> <td data-v-5c76ec00="" class="desc">4-10배 가변형 디지털 스나이퍼 스레트
									(스나이퍼 라이플 전용)
									4-10배율 전환, 적 감지 조준기(스코프 영역 내, 적 위치 시 빨갛게 하이라이트 됨) </td></tr></table>
								</p>
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

<br >

</div>

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
