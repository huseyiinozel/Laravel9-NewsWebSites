<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\News;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $sliderdata=News::where('status','True')->limit(4)->get();
        $newslist1=News::where('status','True')->get();
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
    public  function faq()
    {
        $setting=Setting::first();
        $datalist=Faq::all();
        return view('home.faq',[

            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }
    public  function storemessage(Request $request)
    {
        //dd($request);
        $data =new Message;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('contact')->with('info','Your message has been sent, Thank you');



    }
    public  function storecomment(Request $request)
    {
        // dd($request); //check
        $data =new Comment();
        $data->slug = $request->input('slug');
        $data->user_id = Auth::id();
        $data->news_id = $request->input('news_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('news',['id'=>$request->input('news_id'),'slug'=>$data->slug])->with('success','Your comment has been sent, Thank you');



    }
    public  function news($id)
    {
        $data=News::find($id);
        $images = DB::table('images')->where('news_id',$id)->get();
        $reviews = Comment::where('news_id',$id)->where('status','True')->get();
        return view('home.news',[
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews

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
        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');



        }
    public function loginadmincheck(Request $request)
    {



        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');


    }


}
