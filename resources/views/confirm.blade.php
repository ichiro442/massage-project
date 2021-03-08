<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
    <title>確認画面</title>
</head>
<body class="app flex">
    <div class="bodyImgs">
      <img class="bodyImg" src="img/green.jpeg" alt="森林の画像">
    </div>
    <div class="confirm_wrapper flex">
        <div class="confirm_container flex">
        <h3>以下の内容で送信してよろしいですか？</h3>
        <div class="confirmBox flex">
                <table>
                    <tr>
                        <td width="200">名前</td>
                         <td width="1000" >{{ $name }}</td>
                    </tr>
                    <tr>
                        <td width="200">電話番号</td>
                        <td width="1000">{{ $phoneNumber }}</td>
                    </tr>
                    <tr>
                        <td width="200">メール <br> アドレス</td>
                        <td width="1000">{{ $mail }}</td>
                    </tr>
                    <tr>
                        <td width="200">日にち</td>
                        <td width="1000">{{ $calendar }}</td>
                    </tr>
                    <tr>
                        <td width="200">時間帯</td>
                        <td width="1000">{{ $times }}</td>
                    </tr>
                </table>
                <div class="comfirm_btns flex">
                    <div class="comfirm_btn button">
                        <a class="backBtn button" href="/reservation">戻る</a>
                    </div>
                    <div class="sendBtns">
                        <button class="sendBtn button">予約確定</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>