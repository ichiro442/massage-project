<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&family=Potta+One&display=swap" rel="stylesheet">
    <title>心温</title>
  </head>

  <body class="flex">
    <div class="bodyImgs">
      <img class="bodyImg" src="img/green.jpeg" alt="">
    </div>
   <div class="top_section" id="app">
    <div class="container fadein">
        <div class="top_wrapper flex">
            <img class="titleImg text-focus-in" src="img/ssinon.green.jpeg" alt="">
            <h2 class="fade-in-left">パートナーマッサージ専門</h2>
        </div>
      <!------------------------------ 入力フォーム --------------------------------------->
      <div class="reservationBox flex fadein_left">
      <div class="form_wrapper">
        <form action="{{ url('/confirm/2')}}" method="POST"> 
        {{ csrf_field() }}
          <div class="reservation flex">
            <p>お客様情報</p>
            <input type="text" placeholder="お名前" name="name" value="" />
            <input type="text" placeholder="お電話番号" name="phoneNumber" value="" />
            <input type="text" placeholder="メールアドレス" name="mail" value="" />
            <p>日にち選択</p>
            <input type="date" name="calendar"/>
            <p>時間帯選択</p>
            <div class="timeChoices flex">
              <label for="">
                <input 
                  type="radio"
                  name="times" 
                  value="午前の部(10:00~12:00)" 
                  class="timeChoice morning" 
                  @click="choiceMorning('午前の部(10:00~12:00)')">午前の部(10:00~12:00)
                </label>
              <label for="">
                  <input 
                  type="radio" 
                  name="times" 
                  value="午後の部(14:00~16:00)" 
                  class="timeChoice afternoon" 
                  @click="choiceAfternoon('午後の部(14:00~16:00)')">午後の部(14:00~16:00)
                </label>
                <label for="">
                  <input 
                    type="radio" 
                    name="times" 
                    value="夜の部(18:00~20:00)" 
                    class="timeChoice night" 
                    @click="choiceNight('夜の部(18:00~20:00)')">夜の部(18:00~20:00)
                </label>
                </div>
          </div>
          <div class="confirmBtn">
            <button class="button">送信</button>
          </div>
        </form>
      </div>
      <!-- @if ($errors->any())
					<div class="alert edit-new alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif -->
      </div>
      <footer>
        <div class="phoneResevation fadein">
          <p>電話予約はこちら</p>
          <a href="tel:03-3209-1111">03-3209-1111</a>
        </div>
      </footer>
   </div>
  </div>
  </body>
</html>
