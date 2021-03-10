<section>
 <p>午前の部</p>
        @foreach($todayReservations as $todayReservation1)
                @if($todayReservation1->times == "午前の部(10:00~12:00)")
                        <p><a href="/customer/{{$todayReservation1->id}}">{{ $todayReservation1->name }}</a></p>
                @endif
        @endforeach
        <br>
</section>
<section>
<p>午後の部</p>
        @foreach($todayReservations as $todayReservation2)
                @if($todayReservation2->times == "午後の部(14:00~16:00)")
                <p> <a href="/customer/{{$todayReservation2->id}}">{{ $todayReservation2->name }}</a></p>
                @endif
        @endforeach
        <br>
</section>
<section>
<p>夜の部</p>
        @foreach($todayReservations as $todayReservation3)
                @if($todayReservation3->times == "夜の部(18:00~20:00)" )
                <p> <a href="/customer/{{$todayReservation3->id}}">{{ $todayReservation3->name }}</a></p>
                @endif
        @endforeach
</section>






