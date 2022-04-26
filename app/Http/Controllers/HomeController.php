<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public  function index()
    {
        $sliderdata=News::limit(4)->get();
        $newslist1=News::limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
             'newslist1'=>$newslist1
        ]);
    }
    public  function test()
    {
        return view('home.test');

    }
    public  function param($id,$number)
    {
        /*echo "first : ".$id;
        echo "<br>";
        echo "second:".$number;
        echo "<br>";
        echo "multiplication : ", $number*$id;
        */
        // kolay yol
        return view('home.test2',
            [
                'id' => $id,
                'number'=> $number

            ]);

    }

    public  function save ()
    {
        /*echo "save working <br>";
        echo "first name : ",$_REQUEST["fname"];
        echo "<br> last name : ",$_REQUEST["lname"];
        */
        return view('home.test3',
            [
                'fname' =>$_REQUEST["fname"],
                'lname'=> $_REQUEST["lname"]


            ]);

        }

}
