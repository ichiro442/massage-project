
<!-- -------------------------------------- -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
    <title>顧客ページ</title>
</head>
<body class="confirmBody flex">
    <!-- <div class="confirm_wrapper flex"> -->
        <div class="confirm_container flex">
           <h2>顧客予約内容</h2>
            <div class="confirmBox">
                    <table class="confirmTable">
                        <tr>
                            <td class="confirmItem" width="200">名前</td>
                            <td width="1000" >{{ $customerDetail->name }}</td>
                        </tr>
                        <tr>
                            <td class="confirmItem" width="200">電話番号</td>
                            <td width="1000">{{ $customerDetail->phoneNumber }}</td>
                        </tr>
                        <tr>
                            <td class="confirmItem" width="200">メール <br> アドレス</td>
                            <td class="confirmMail" width="1000"><div class="">{{ $customerDetail->mail }}</div></td>
                        </tr>
                        <tr>
                            <td class="confirmItem" width="200">日にち</td>
                            <td width="1000">{{ $customerDetail->calendar }}</td>
                        </tr>
                        <tr>
                            <td class="confirmItem" width="200">時間帯</td>
                            <td width="1000">{{ $customerDetail->times }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- <div class="comfirm_btns flex"> -->
                <div  class="customerBtns flex">
                    <a class="customerBtn" href="/dayDetail/{{ $customerDetail->calendar }}">戻る</a>
                    <a class="customerBtn" href="/customer/destroy/{{ $customerDetail->id }}">削除</a>
                </div>

                <!-- <div class="comfirm_btn button">
                    <a class="backBtn button" href="{{ route('create') }}">TOP</a>
                </div> -->
            <!-- </div> -->

    <!-- </div> -->
</body>
</html>