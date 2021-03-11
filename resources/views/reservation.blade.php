<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&family=Potta+One&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <title>心温</title>
  </head>

  <body class="flex">
    <div class="bodyImgs">
      <img class="bodyImg" src="img/green.jpeg" alt="">
      <!-- <img class="bodyImg"  src="https://cdn.pixabay.com/photo/2016/06/09/03/03/sky-1445077_1280.jpg" alt=""> -->
    </div>
   <div class="top_section" id="app">
    <div class="container fadein">
      <div class="top_wrapper flex">
      <img class="titleImg text-focus-in" src="img/massageTitle.jpg" alt="">
        <!-- <h1 class="text-focus-in">心温</h1> -->
        <h2 class="fade-in-top">パートナーマッサージ専門</h2>
      </div>
      <!-- <div class="internetBtns button fade-in-left  flex">
        <p class="internetBtn" type="button" @click="show=!show">ネット予約画面へ</p>
      </div>     -->
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
              <!-- <p class="choiceResult" v-if="times === 'choiceMorning'">選択した時間帯<br>
                <span class="timeResult" style="background-color:#3232b3">午前の部(10:00~12:00)</span></p>
              <p class="choiceResult" v-else-if="times === 'choiceAfternoon'">選択した時間帯 <br>
                <span class="timeResult" style="background-color:#1c751c">午後の部(14:00~16:00)</span></p>
              <p class="choiceResult" v-else-if="times === 'choiceNight'">選択した時間帯<br>
                <span class="timeResult" style="background-color:#524646">夜の部(18:00~20:00)</span></p> -->
          </div>
          <div class="confirmBtn">
            <button class="button">送信</button>
            <!-- <a class="button" href="/confirm">登録内容確認画面へ</a> -->
          </div>
        </form>
      </div>
      @if ($errors->any())
					<div class="alert edit-new alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
      </div>
      <footer>
        <div class="phoneResevation fadein">
          <p>電話予約はこちら</p>
          <a href="tel:03-3209-1111">03-3209-1111</a>
        </div>
      </footer>
   </div>
<!-- -------------------------------確認画面------------------------------------------ -->
<!-- <div class="confirm_wrapper flex">
        <div class="confirm_container flex">
        <h3>以下の内容で送信してよろしいですか？</h3>
            <form action="" class="confirmBox flex">
                <table>
                    <tr>
                        <td width="200">名前</td>
                         <td width="1000" ></td>
                    </tr>
                    <tr>
                        <td width="200">電話番号</td>
                        <td width="1000">Doe</td>
                    </tr>
                    <tr>
                        <td width="200">メール <br> アドレス</td>
                        <td width="1000">Doe</td>
                    </tr>
                    <tr>
                        <td width="200">日にち</td>
                        <td width="1000">Doe</td>
                    </tr>
                    <tr>
                        <td width="200">時間帯</td>
                        <td width="1000">Doerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr</td>
                    </tr>
                </table>
                <div class="comfirm_btns flex">
                    <div class="comfirm_btn button">
                        <a class="backBtn button" href="/reservation">戻る</a>
                    </div>
                    <div class="sendBtns">
                        <button class="sendBtn button">送信</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div> -->


  </div>

    <script>
      var app = new Vue({
        el: "#app",
        data: {
          // show: false,
          times: '',	
        },
        methods: {
          choiceMorning: function(time){
            this.times = 'choiceMorning'
          },
          choiceAfternoon: function(time){
            this.times = 'choiceAfternoon'
          },
          choiceNight: function(time){
            this.times = 'choiceNight'
          },
          // confirm: function(){
          //   console.log(confirm('登録内容を確認しますか？'));
          // }
        }
      });
    </script>
  </body>
</html>
