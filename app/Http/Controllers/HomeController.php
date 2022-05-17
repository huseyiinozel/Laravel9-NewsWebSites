<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=' ,0)->with('children')->get();
    }


    //
    public  function index()
    {
        $page='home';
        $sliderdata=News::limit(4)->get();
        $newslist1=News::limit(8)->get();
        $setting=Setting::first();
        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
             'newslist1'=>$newslist1
        ]);
    }
    public  function about()
    {


        $setting=Setting::first();
        return view('home.about',[

            'setting'=>$setting
        ]);
    }
    public  function references()
    {

        $setting=Setting::first();
        return view('home.references',[

            'setting'=>$setting
        ]);
    }
    public  function contact()
    {

        $setting=Setting::first();
        return view('home.contact',[

            'setting'=>$setting
        ]);
    }
    public  function news($id)
    {
        $data=News::find($id);
        $images = DB::table('images')->where('news_id',$id)->get();

        return view('home.news',[
            'data'=>$data,
            'images'=>$images

    ]);
    }
    public  function categorynews($id)
    {

        $category=Category::find($id);
        $news = DB::table('news')->where('category_id',$id)->get();

        return view('home.categorynews',[
            'category'=>$category,
            'news'=>$news

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
