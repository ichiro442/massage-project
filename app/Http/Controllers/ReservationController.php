<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    function create(){

      // $reservation = \App\Models\Reservation::find(1);
      // $reservation = \App\Models\Reservation::where("id")->get();
      // echo $reservation;

        return view('reservation');
    }
   
    function send(Request $req){
        $req->validate([
            // バリデーション
            'name' => 'required',
            'phoneNumber' => 'required',
            'mail' => 'required',
            'calendar' => 'required',
            'times' => 'required'
          ],
          [
            "name" => "名前は必須です",
            "phoneNumber" => '電話番号は必須です',
            "mail" => "メールアドレスは必須です",
            "calendar" => "日にちは必須です",
            "times" => "時間帯は必須です"
          ]
        );
        $name = $req->input("name");
        $phoneNumber = $req->input("phoneNumber");
        $mail = $req->input("mail");
        $calendar = $req->input("calendar");
        $times = $req->input("times");

         // 受け取った情報を保存する
    \App\Models\Reservation::create([
      "name" => $name,
      "phoneNumber" => $phoneNumber,
      "mail" => $mail,
      "calendar" => $calendar,
      "times" => $times
    ]); 

      $reservation = \App\Models\Reservation::find(1);

      // 'name','phoneNumber','mail','calender','times'
        return view('confirm',compact('name','phoneNumber','mail','calendar','times','reservation'));
    }
  //   function register(Request $req){

  //   // 受け取った情報を保存する
  //   \App\Models\Reservation::create([
  //     "name" => $name,
  //     "phoneNumber" => $phoneNumber,
  //     "mail" => $mail,
  //     "calendar" => $calendar,
  //     "times" => $times
  //   ]); 
  //   return redirect("/reservation"); // 一覧にリダイレクトさせる
  // }
   
}
