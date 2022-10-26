<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>서빙로봇 상담자</title>
	<link rel="shortcut icon" type="image/x-icon" href="image/logo.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> 
</head>
<body>

    <div class="table_board_view">
        <div class="table_row">
            <div class="show th">
                이름
            </div>
            <div class="show td">
                {{$board -> name}}
            </div>
        </div>
        <div class="table_row">
            <div class="show th">
                회사명
            </div>
            <div class="show td">
                {{$board -> company}}
            </div>
        </div>
        <div class="table_row">
            <div class="show th">
                전화번호
            </div>
            <div class="show td">
                {{$board -> phone}}
            </div>
        </div>
        <div class="table_row">
            <div class="show th">
                상담시간
            </div>
            <div class="show td">
                {{$board -> time}}
            </div>
        </div>
        <div class="table_row">
            <div class="show th ">
                <p style="line-height: 250px">궁금한 사항</p>
            </div>
            <div class="show td" style="height: 300px;word-break:break-all;overflow-y:scroll">
                {{$board -> content}}
            </div>
        </div>
        <div class="table_row">
            <div class="show th">
                E-Mail
            </div>
            <div class="show td">
                {{$board -> email}}
            </div>
        </div>
        <div class="table_row">
            <div class="show th">
                작성날짜
            </div>
            <div class="show td">
                {{$board -> created_at}}
            </div>
        </div>
        <div class="delete mt-5 float-end">
            <form action="/boards/{{$board -> id}}" method="post" class="inline-block">
                @csrf
                @method('delete')
                <button class="btn btn-danger" onclick="alert('삭제되었습니다.')">삭제</button>
            </form>      
        </div>  
    </div>

</body>
</html>
