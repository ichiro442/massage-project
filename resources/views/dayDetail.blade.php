<?php

// echo '<pre>';
// echo $names;
// echo '</pre>';

// echo '<pre>';
// echo $today;
// echo '</pre>';

// echo '<pre>';
// echo $calendar;
// echo '</pre>';
// echo $todayReservations;



// if($today == $calendar->pluck($today)){
// echo $today."です";
// }else{
// echo $today."は受け取れていません";
// }


?>
<section>
 <p>午前の部</p>
        @foreach($todayReservations as $todayReservation1)
                @if($todayReservation1->times == "午前の部(10:00~12:00)")
                        <p><a href="">{{ $todayReservation1->name }}</a></p>
                        <!-- <p>{{ $names }}</p> -->
                @endif
        @endforeach
        <br>
</section>
<section>
<p>午後の部</p>
        @foreach($todayReservations as $todayReservation2)
                @if($todayReservation2->times == "午後の部(14:00~16:00)")
                <p> <a href="">{{ $todayReservation2->name }}</a></p>
                @endif
        @endforeach
        <br>
</section>
<section>
<p>夜の部</p>
        @foreach($todayReservations as $todayReservation3)
                @if($todayReservation3->times == "夜の部(18:00~20:00)" )
                <p> <a href="">{{ $todayReservation3->name }}</a></p>
                @endif
        @endforeach
</section>






