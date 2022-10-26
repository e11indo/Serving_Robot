@extends('layouts.app')

@section('section')
    <section>
        <div id="menu-item1"></div>
	  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
		  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
		  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
		  <div class="carousel-item active" data-bs-interval="10000">
			<img src="image/banner.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
			  <h5 class="text-light">첫번째 이미지</h5>
			  <p class="text-light">Some representative placeholder content for the first slide.</p>
			</div>
		  </div>
		  <div class="carousel-item" data-bs-interval="2000">
			<img src="image/banner.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
			  <h5 class="text-light">두번째 이미지</h5>
			  <p class="text-light">Some representative placeholder content for the second slide.</p>
			</div>
		  </div>
          <div class="carousel-item" data-bs-interval="2000">
			<img src="image/banner.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
			  <h5 class="text-light">세번째 이미지</h5>
			  <p class="text-light">Some representative placeholder content for the second slide.</p>
			</div>
		  </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Next</span>
		</button>
	  </div>



	  <!-- 로봇 설명  -->
	  
		<div class="container" style="margin-top:40px">
			<div class="row" id="robot_information_1">
				<div id="menu-item2"></div>	
				<div class="col-6">
					<img src="image/클로이 서빙로봇.png" class="img-fluid rounded-start" alt="...">
				
				</div>
				<div class="col-6 d-flex align-items-center d-flex justify-content-center">
					<div style="width: 450px">
						<h4 class="fw-semibold">LG 클로이 서빙 로봇</h4>
						<p>LG 클로이 서빙 로봇은 공기정화/플라즈마 살균/UVC 살균 기능을 동시 탑재한 로봇으로, 인체 무해한 소독방식으로 깨끗하고 안전한 환경을 제공합니다. 인체에 해롭지 않은 방식으로 우리가 생활하는 공간의 공기와 바닥을 살균, 호흡하는 사람들 곁에서 가까이 이동하며 세균과 바이러스를 박멸하고, 미세먼지와 유해가스까지 깨끗이 제거합니다.</p>
						<div class="row">
							<div class="col-6">
								<button type="button" class="btn btn-outline-danger rounded-0" style="width: 100%">자세히 보기</button>
							</div>
							<div class="col-6">
								<a href="{{asset('AI-방역로봇_베어로보틱스-표준제안서.pdf')}}">
									<button type="button" class="btn btn-outline-dark rounded-0" style="width: 100%">PDF 보기</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="margin-top:40px">
			<div class="row" id="robot_information_2">
				<div class="col-6 d-flex align-items-center d-flex justify-content-center">
					<div style="width: 450px">
						<h4 class="fw-semibold">LG 클로이 서브로봇</h4>
						<p>LG 클로이 서브 로봇에 내장된 센서를 통해 스스로 경로를 탐색하고,고객의 소리를 인식하고 행동하는 스마트한 서비스 로봇입니다. 별도의 설치물이 필요없는 완전한 자율주행 기술과 다양한 형태의 트레이를 제공하여 어떠한 매장 환경에서도 안정적인 서비스 운영이 가능합니다.</p>
						<div class="row">
							<div class="col-6">
								<button type="button" class="btn btn-outline-danger rounded-0" style="width: 100%">자세히 보기</button>
							</div>
							<div class="col-6">
								<a href="{{asset('AI-방역로봇_베어로보틱스-표준제안서.pdf')}}">
									<button type="button" class="btn btn-outline-dark rounded-0" style="width: 100%">PDF 보기</button>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<img src="image/클로이 서브로봇.png" class="img-fluid rounded-start" alt="...">
				</div>
			</div>
		</div>



		<!-- 동영상 -->
		<div class="container mt-5"  >
			<div class="row"> 
				<p class="text-center fw-bold fs-3">매장적용 사례</p>
			</div>
			<div class="row" id="robot_video">
				<div class="col-6" style="padding: 0px 20px 0px 20px;">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/hurN4yZ-0ts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-6" style="padding: 0px 20px 0px 20px;">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/vfFnYsac91A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<!-- 구매문의 -->
		<div>
			<div class="container mt-5" >
				<div class="row">
					<p class="text-center fw-bold fs-3 contact-info">무료체험신청 및 구매문의</p>
					<p class="text-center fw-semibold">상담을 위한 개인정보를 남겨주세요</p>
				</div>
				<div class="row" id="contact" >
					<div class="col-6 border" id="contact_information" style="padding:30px 20px 30px 20px">
						<div style="margin-bottom:20px">
							<span class="fw-bolder text-danger" >(주)스피드통신<br></span>
						</div>
						<p class="fw-bold" style="font-size: 14px">대표전화 : 070-4917-4433<br>
							운영시간 : AM 09:30~PM 18:30 / (점심) 12:00 ~ 13:00<br>
							이메일 : o2platform@otoplatform.co.kr<br>
							주소 : 부산 해운대구 센텀1로9 롯데갤러리움 S동 221호(롯데갤러리움센텀)</p>
						<hr>
						
						<div style="margin-bottom:20px">
							<span class="fw-bolder text-danger">개인정보 수집 및 이용<br></span>
						</div>
						<p class="fw-bold" style="font-size: 14px">
							※Ai 서빙로봇 문의상담을 위해 아래와 같이 개인정보를 수집 및 이용합니다.<br>
							1. 개인정보수집 이용목적 : 서비스 제공에 관해 문의 및 답변 제3자 제공<br>
							2. 제공받는자 : ㈜KT<br>
							3. 제공목적 : 서비스가입 서비스제공 고객문의처리<br>
							4. 개인정보수집 이용범위 : 회사명 또는 상호명, 연락처, 문의사항<br>
							5. 개인정보의 보유 및 이용기간 : 개인정보수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 단, 관계법령의 규정에 의하여 보존을 필요할 경우 회사는 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다.<br>
							6. 개인정보수집 동의거부 : 개인정보 수집이용에 거부할 수 있으나 동의하지 않는 경우 상담/문의에 제한이 될 수 있습니다.</p>
					</div>
					<div class="col-6 border" id="contact_info" style="padding:30px 20px 30px 20px">
						<div id="menu-item3"></div>	
						<form action="/boards" method="post" class="contact" name="board"  onsubmit="return checkName()">
							@csrf
							<div class="row">
								<div class="col-7">
									<p>
										<label for="name" class="contact-sub">이름</label>
										<input type="text" id="name" name="name" class="contact-content">
									</p>
								</div>
								<div class="col-5">
									<p>
										<label for="name" class="contact-sub">E-Mail</label>
										<input type="email" id="email" name="email" class="contact-content">
									</p>
								</div>
							</div>
							<p>
								<label for="company" class="contact-sub">회사명</label>
								<input type="text" id="company" name="company" class="contact-content">
							</p>
							<div class="row">
								<div class="col-7">
									<p>
										<label for="name" class="contact-sub">전화번호</label>
										<input type="tel" id="phone" name="phone" class="contact-content" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="숫자만 입력하세요">
									</p>
								</div>
								<div class="col-5">
									<label for="name" class="contact-sub ">상담시간</label>
									<p>
										<select name="time" class="select_time">
											@for($i=9; $i <=18; $i++)
												<option>{{$i}} 시</option>
											@endfor
											<option>상관없음</option>
										</select>
									</p>
								</div>
							</div>
							<p>
								<label for="company" class="contact-sub">문의내용 </label>
								<input type="text" id="content" name="content" class="contact-content" style="height: 200px">
							</p>
				
							<div style="text-align: center">
								<input type="submit" value="보내기" class="btn btn-primary fw-semibold" style="height: 40px">
								{{-- <input type="button" value="취소" onclick="history.back()"> --}}
							</div>
						</form>
				
					</div>
				</div>
			</div>
		</div>
    </section>
@stop