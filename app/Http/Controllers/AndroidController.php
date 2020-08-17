<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Android;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AndroidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $android = Android::latest()->paginate(5);
        return view('android.index',compact('android'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('android.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $produc = new Android();
        $produc->title   =   $request->title;
        $produc->about   =   $request->about;
        $produc->link    =   $request->link;
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = ((int) (microtime(true))).$image->getClientOriginalName();
            $image->move(base_path('public\images'), $image_name);
        }
        $produc->image = $image_name;
        $produc->save();
        return redirect()->route('android.index')->with('success','Yangi ilova qushildi.');
    }








    /**
     * Display the specified resource.
     *
     * @param  \App\Android  $android
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $android = Android::find($id);
        return view('android.show',compact('android'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Android  $android
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $android = Android::find($id);
        return view('android.edit',compact('android','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Android  $android
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $products = Android::find($id);
        $products->title = request('title');
        $products->about = request('about');
        $products->link = request('link');
        $products->save();
        return redirect()->route('android.index')->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Android  $android
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Android::find($id)->delete();

        return redirect()->route('android.index')
            ->with('success','User deleted successfully');
    }
}
