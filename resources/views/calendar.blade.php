<!DOCTYPE html>
<html lang="la">
<head>
    <meta charset="UTF-8">
    <title>PHPカレンダー</title>
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
</head>
<body>

<div class="container">
    <header class="calendarHeader">
        <div class="thisMonth flex">
            <span></span>
            <h3><a class="beforeMonth" href="?ym={{ $prev }}">&lt;</a> {{ $title }}<a class="afterMonth" href="?ym={{ $next }}">&gt;</a></h3>
            <a class="backBtn" href="{{ route('loginPage') }}">Logout</a>
        </div>
    </header>
        <table border="1" class="calendarTable">
            <tr class="dayOfWeek">
                <th class="sunday">日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th class="saturday">土</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
        </table>
    </div>
</body>
</html>