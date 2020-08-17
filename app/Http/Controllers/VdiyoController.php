<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\VdiyoRequest;
use Illuminate\Http\Request;
use App\Models\Vdiyo;

class VdiyoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vdiyo = Vdiyo::latest()->paginate(5);
        return view('vdiyo.index',compact('vdiyo'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vdiyo.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VdiyoRequest $request)
    {
        $produc = new Vdiyo();
        $produc->title   =   $request->title;
        $produc->about   =   $request->about;
        $produc->link    =   $request->link;
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = ((int) (microtime(true))).$image->getClientOriginalName();
            $image->move(base_path('public/images/'), $image_name);
        }
        $produc->image = $image_name;
        $produc->save();
        return redirect()->route('vdiyo.index')->with('success','Yangi ilova qushildi.');
    }








    /**
     * Display the specified resource.
     *
     * @param  \App\Android  $android
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vdiyo = Vdiyo::find($id);
        return view('vdiyo.show',compact('vdiyo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Android  $android
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vdiyo = Vdiyo::find($id);
        return view('vdiyo.edit',compact('vdiyo','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Android  $android
     * @return \Illuminate\Http\Response
     */
    public function update($request)
    {
        $id = request('id');
        $products = Vdiyo::find($id);
        $products->title = request('title');
        $products->about = request('about');
        $products->link = request('link');
        $products->save();
        return redirect()->route('vdiyo.index')->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Android  $android
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vdiyo::find($id)->delete();

        return redirect()->route('vdiyo.index')
            ->with('success','User deleted successfully');
    }
}
