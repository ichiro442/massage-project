<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    <title>顧客ページ</title>
</head>
<body>
    <div class="customerContainer flex">
        <div class="customerTitle flex">
            <h2>顧客予約内容</h2>
        </div>
        <table class="customerList">
            <tr>
                <td>名前</td>
                <td>{{ $customerDetail->name }}</td>
            </tr>
            <tr>
                <td>電話番号</td>
                <td>{{ $customerDetail->phoneNumber }}</td>
            </tr>
            <tr>
                <td>メール</td>
                <td>{{ $customerDetail->mail }}</td>
            </tr>
            <tr>
                <td>予約日</td>
                <td>{{ $customerDetail->calendar }}</td>
            </tr>
            <tr>
                <td>予約時間帯</td>
                <td>{{ $customerDetail->times }}</td>
            </tr>
        </table>
    </div>
</body>
</html>

