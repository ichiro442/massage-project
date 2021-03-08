
<section>
<p>午前の部</p>

        @foreach($reservation as $reservation1)
            @if($reservation1->times == "午前の部(10:00~12:00)" )
                    <p> <a href="">{{ $reservation1->name }}</a></p>
            @endif
        @endforeach
        <br>
</section>
<section>
<p>午後の部</p>
        @foreach($reservation as $reservation2)
            @if($reservation2->times == "午後の部(14:00~16:00)")
            <p> <a href="">{{ $reservation2->name }}</a></p>
            @endif
        @endforeach
        <br>
</section>
<section>
<p>夜の部</p>
        @foreach($reservation as $reservation3)
            @if($reservation3->times == "夜の部(18:00~20:00)" )
            <p> <a href="">{{ $reservation3->name }}</a></p>
            @endif
        @endforeach
</section>






