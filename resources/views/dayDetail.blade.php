<!DOCTYPE html>
<html lang="ja">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
        <title>予約状況</title>
</head>
<body class="dayDetailBody">
        <header class="flex">
                <span></span>
                <h2>{{$today}} 予約状況</h2>
                <a class="backBtn" href="/calendar">戻る</a>
        </header>
        <div class="dayDetailcontainer flex">
                <section class="dayDetail">
                        <div class="dayDetailMorning">
                                <h3>＜午前の部＞</h3>
                                <div class="dayDetail-inner">
                                        @foreach($todayReservations as $todayReservation1)
                                                @if($todayReservation1->times == "午前の部(10:00~12:00)")
                                                        <p class="dayDetailName"><a href="/customer/{{$todayReservation1->id}}">{{ $todayReservation1->name }}</a></p>
                                                @endif
                                        @endforeach
                                </div>
                        </div>
                </section>
                <section class="dayDetail">
                        <div class="dayDetailAfternoon">
                                <h3>＜午後の部＞</h3>
                                <div class="dayDetail-inner">
                                        @foreach($todayReservations as $todayReservation2)
                                                @if($todayReservation2->times == "午後の部(14:00~16:00)")
                                                <p class="dayDetailName"><a href="/customer/{{$todayReservation2->id}}">{{ $todayReservation2->name }}</a></p>
                                                @endif
                                        @endforeach
                                </div>
                        </div>
                </section>
                <section class="dayDetail">
                        <div class="dayDetailNight">
                                <h3>＜夜の部＞</h3>
                                <div class="dayDetail-inner">
                                        @foreach($todayReservations as $todayReservation3)
                                                @if($todayReservation3->times == "夜の部(18:00~20:00)" )
                                                <p class="dayDetailName"><a href="/customer/{{$todayReservation3->id}}">{{ $todayReservation3->name }}</a></p>
                                                @endif
                                        @endforeach
                                </div>
                        </div>
                </section>
        </div>
</body>
</html>






