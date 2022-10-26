<!DOCTYPE html>
<html>
<head>
    <title>서빙로봇 상담자 리스트</title>
	<link rel="shortcut icon" type="image/x-icon" href="image/logo.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> 
 
</head>
<body>
<div class="container" style="text-align: center">
            <table>
                <thead class="fw-bold">
                    <td class="no">No</td>
                    <td class="name">이름</td>
                    <td class="phone">연락처</td>
                    <td class="time">상담시간</td>
                    <td class="create_time">접수날짜</td>
                </thead>
                <tbody>
                    @if(!empty($board) && $board->count())
                        @foreach($board as $key => $value)
                            <tr>
                                <td class="fw-bold"><a href="{{route('boards.show', $value -> id)}}">{{$key+1}}</a></td>
                                <td class="fw-bold"><a href="{{route('boards.show', $value -> id)}}">{{$value -> name}}</a></td>
                                <td class="fw-normal">{{$value ->phone}}</td>
                                @if(empty($value ->time))
                                    <td class="fw-normal">상관없음</td>
                                @else
                                    <td class="fw-normal">{{$value ->time}}</td>
                                @endif
                                <td class="fw-normal">{{$value -> created_at -> format('Y-m-d')}}</td>
                                
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">상담 예약 고객이 없습니다.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-2">
                    {!! $board->links() !!}
                </div>
                <div class="col-5"></div>
            </div>
        </div>
     
</body>
</html>