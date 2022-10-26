<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="image/logo.jpg">
    <title>스피드통신 | 서빙 로봇 판매</title>
	
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> 
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/47b4af5cf9.js" crossorigin="anonymous"></script>
	
  <script  src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>

	
  {{-- js는 꼭 순서 지켜서 --}}
</head>
<body>
	<!-- 상단 메뉴 -->
  {{-- 
  <div id="menu-item1"></div>
  <nav class="navbar navbar-expand-lg  fixed-top" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">로고</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex justify-content-end">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item" >
          <a class="nav-link link1 active fw-bold" id="menu-item" aria-current="page" href="#menu-item1">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link link2 fw-bold" id="menu-item" href="#menu-item2">서빙로봇 소개</a>
          </li>
          <li class="nav-item">
          <a class="nav-link link3 fw-bold" id="menu-item" href="#menu-item3">구매문의</a>
          </li>
        </div>
      </div>
    </div> --}}

    <div id="menu-item1"></div>
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('boards.index')}}">로고</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active link1 fw-bolder" aria-current="page" href="#menu-item1">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link2 fw-bolder" href="#menu-item2">서빙로봇</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link3 fw-bolder" href="#menu-item3">구매문의</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </nav>


@section('section')
@show
	


<div class= "btn_top" onclick="window.scrollTo(0,0);">맨위로</div>
<ul class="side_tab">
  <li>
      <a href="#menu-item3">
        <span class="img">
          <img src="image/talk.png" alt="없음">
        </span>
        <span>문의하기</span>
      </a>
  </li>
    <li>
      <a href="#">
        <span class="img">
          <img src="image/kakao.png" alt="없음">
        </span>
        <span>카톡상담</span>
      </a>
  </li>
</ul>


<!-- 푸터 -->
<div style="height: 200px"></div>
<div class="card text-center mt-5" style="background-color: #2a2a2a">
  <div class="card-body">
    <p class="card-text footer-text">스피드통신 | 이용준 | 사업자: 02-XX-XXXXX | 주소: 전라북도 익산시</p>
    <p class="card-text footer-text" style="margin-top:-10px">Tel.010-XXXX-XXXX | E-mail: http1234@naver.com</p>
    <p class="card-text footer-text" style="font-size: 15px">COPYRIGHT 2022 스피드통신 | ALL RIGHTS RESERVED.</p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


</body>
</html>