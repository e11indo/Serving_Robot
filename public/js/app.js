//화면 내리면 가리기



$(window).on("scroll", function () {
    var scroll = $(window).scrollTop();
    var offset1 = $("#robot_information_1").offset();
    var offset2 = $("#contact_info").offset();

    if(scroll < offset1.top -50){
        $(".nav-item .link1").addClass("active");
        $(".nav-item .link2").removeClass("active");
        $("#navbar").removeClass("active");
    }
    if (scroll >= offset1.top -50) {
        $("#navbar").addClass("active");
        $(".nav-item .link2").addClass("active");
        $(".nav-item .link1").removeClass("active");
    }
    if (scroll >= offset2.top -50){
        $(".nav-item .link2").removeClass("active");
        $(".nav-item .link3").addClass("active");
    }
    else {
        $(".nav-item .link3").removeClass("active");
    }
    });	

    
    //화면 내릴수록 FadeOut
    /* $(window).scroll(function() {
        if($(document).scrollTop() > 80) {
            $('#navbar').fadeOut();
        } else {
            $('#navbar').fadeIn();
        };
    });
    */
    
    // 클래스가 scroll_move인 a 태그를 눌렀을때 발생되게 하는 이벤트
    // $(this.hash) a태그에 있는 해쉬 값으로 스크롤링 되며 이동
    // 500 은 스크롤 속도
    $(document).ready(function($) {
        $(".menu-item").click(function(event){         
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
        });
    });
    
    
    //배너 캐러셀 슬라이드(bxSlider 불러오기)
    $(document).ready(function(){
      $('.bxslider').bxSlider();
    });
    
    $(document).ready(function(){
      $('.object-carousel').bxSlider();
    });

    
    
    function checkName(){
        let check = document.board
        if(check.name.value==""){
            alert("이름을 입력해주세요.")
            return false
        }
        if(check.email.value==""){
            alert("이메일을 입력해주세요.")
            return false
        }
        if(check.company.value==""){
            alert("회사명을 입력해주세요.")
            return false
        }
        if(check.phone.value==""){
            alert("전화번호를 입력해주세요(숫자만 입력)")
            return false
        }
        if(check.phone.value.length <11 || check.phone.value.length >11 ){
            alert("전화번호를 올바르게 11자리 입력해주세요")
            return false           
        }
        if(check.content.value==""){
            check.content.value = "X"
            return true
        }
        return true
    }

