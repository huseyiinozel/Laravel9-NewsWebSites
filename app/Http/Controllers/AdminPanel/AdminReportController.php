<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminReportController extends Controller
{




    /**
     * Display a listing of the resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
       $data = Report::all();
       return view('admin.report.index',[
           'data'=> $data

       ]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data =Category::all();
        return view('admin.report.create',[
            'data'=>$data

        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=new Report();
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->status= $request->status;
        if ($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/report');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report,$id)
    {
        //
        $data =Report::find($id);
        return view('admin.report.show',[
            'data' =>$data

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report,$id)
    {
        $data =Report::find($id);
        $datalist =Category::all();
        return view('admin.report.edit',[
            'data' =>$data,
            'datalist' => $datalist

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report,$id)
    {
        //
        $data =Report::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->status= $request->status;
        if ($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/report');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report,$id)
    {
        //
        $data =Report::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }


        $data->delete();
        return redirect('admin/report');
    }
}
