<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ReservationController;

class CalendarController extends Controller
{
//カレンダーの日付をクリックしてその日の予約状況を表示するメソッド
    public function detailshow($today){
        $reservation = \App\Models\Reservation::all();
        $calendar = $reservation->pluck('calendar');
        $todayReservations = \App\Models\Reservation::where("calendar",$today)->get();
        return view('dayDetail',compact('reservation','today','calendar','todayReservations'));
        }

//予約状況の名前をクリックしてそのユーザーの予約内容を表示する
    public function showCustomer($id){
        $customerDetail = \App\Models\Reservation::find($id);//ここでidを受け取って個人個人に振り分けてる
        // dd($customerDetail->name);
        return view('customer',compact('customerDetail'));
    }

//カレンダーを表示されるメソッド
    public function dayShow(Request $req){
        //タイムゾーンの設定
        date_default_timezone_set('Asia/Tokyo');

        //前月・翌月ボタンが押された場合、GETパラメータから年月を取得
        if(isset($_GET['ym'])){
            $ym = $_GET['ym'];
        } else {
        //押されてなかったら今の年月を取得 (2019-07)
            $ym = date('Y-m');
        }
        // dd($ym);→2021-03
        //タイムスタンプを作成する
        $timestamp = strtotime($ym . '-01'); //2019-07に"-01"を足している
        if($timestamp == false){
            $ym = date('Y-m');
            $timestamp = strtotime($ym . '-01');
        }
        //↑これで$timestampは2019-07-01となる
        // dd($timestamp);→1614524400

        //今日の日付をセット (2019-07-13)
        $today = date('Y-m-j');
        // dd($today);→2021-03-8

        //カレンダーのタイトルを設定 (2019年7月)
        $title = date('Y年m月' , $timestamp);
        // dd($title);→2021年03月

        //前月・次月の年月を取得する
        $prev = date('Y-m',strtotime('-1 month',$timestamp)); //2019-06
        $next = date('Y-m',strtotime('+1 month',$timestamp)); //2019-08
        // dd($prev);→2021-02


        //該当の月の日数を取得 (31を取得)
        $day_count = date('t',$timestamp);
        // dd($day_count);→31

        //曜日を取得 (１:月曜日を取得)
        $youbi = date('w',$timestamp);
        // dd($youbi);→1

        //カレンダー作成の準備
        $week = '';
        $weeks = [];

        //月初の曜日より前の曜日を空セルにする
        $week .= str_repeat('<td></td>' , $youbi);
        // dd($week);→<td></td>

        for($day = 1; $day <= $day_count; $day++,$youbi++){
            $date = $ym . '-' . $day; //日にちを1日ずつ足していく
            // dd($day);→１
            // dd($date);→2021-03-1

            //もし今日の日付だったらクラスをつける
            if($today == $date){
                $ym1 = "{{ $ym}} ";
                if($day < 10){
                    $week .= '<td class="today">'.'<a href="dayDetail/' .$ym. '-0'. $day.'">' . $day.'</a>';
                }else{
                    $week .= '<td class="today">'.'<a href="dayDetail/' .$ym. '-'. $day.'">' . $day.'</a>';
                }
           
            // print '<a href="download.php?aaa=' . $file . '">'.$title.'</a><br />';
            } else{
            //今日以外の日付は普通に出力する
            if($day < 10){
                $week .= '<td class="dayNumber">'. '<a href="dayDetail/' .$ym.'-0'. $day.'">'. $day.'</a>';
            }else{
                $week .= '<td class="dayNumber">'. '<a href="dayDetail/' .$ym.'-'. $day.'">'. $day.'</a>';
            }
        }
        $week .= '</td>';
        
        //週終わり・月終わりの処理(もし今日の日付が月の日数の最後の日付だったら)
        if ($youbi % 7 == 6 || $day == $day_count) {
            if ($day == $day_count) {
                $week .= str_repeat('<td></td>', 6 - ($youbi % 7));
            }
            
            //$weeks(配列)の中に一週間分格納する
            $weeks[]='<tr>' . $week . '</tr>';
            $week = '';
        }
    }

        return view('calendar',compact('prev','title','next','weeks','day'));
    }
}