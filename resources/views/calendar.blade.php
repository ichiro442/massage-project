<!DOCTYPE html>
<html lang="la">
<head>
    <meta charset="UTF-8">
    <title>PHPカレンダー</title>
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
</head>
<body>

<div class="container">
    <!-- <a class="dropdown-item" href=""
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form> -->
<a href="{{ route('loginPage') }}">logout</a>
        <div class="thisMonth flex">
            <h3><a class="beforeMonth" href="?ym={{ $prev }}">&lt;</a> {{ $title }}<a class="afterMonth" href="?ym={{ $next }}">&gt;</a></h3>
        </div>
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