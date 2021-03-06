<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    function create(){
        return view('reservation');
    }
   
    function send(Request $req){
      
      $req->validate([
            // バリデーション
            'name' => 'required',
            'phoneNumber' => 'required | max:11',
            'mail' => 'required',
            'calendar' => 'required',
            'times' => 'required'
          ],
        );
        $name = $req->input("name");
        $phoneNumber = $req->input("phoneNumber");
        $mail = $req->input("mail");
        $calendar = $req->input("calendar");
        $times = $req->input("times");
        
        //  受け取った情報を保存する
        \App\Models\Reservation::create([
          "name" => $name,
          "phoneNumber" => $phoneNumber,
          "mail" => $mail,
          "calendar" => $calendar,
          "times" => $times
          ]); 
          
          // 二重送信対策
          $req->session()->regenerateToken();

        return view('confirm',compact('name','phoneNumber','mail','calendar','times'));
    }   
}
