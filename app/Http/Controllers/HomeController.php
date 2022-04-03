<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public  function index()
    {
        echo "index function";
    }
    public  function test()
    {
        echo view('home.test');

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
        echo view('home.test2',
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
        echo view('home.test3',
            [
                'fname' =>$_REQUEST["fname"],
                'lname'=> $_REQUEST["lname"]


            ]);

        }

}
