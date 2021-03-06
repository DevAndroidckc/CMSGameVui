<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cauhinhapp;
class CauHinhAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsCauHinhApp=cauhinhapp::all();
        return view('cau-hinh-app.danh-sach',compact('dsCauHinhApp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cau-hinh-app.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cauHinhApp=new cauhinhapp;
        $cauHinhApp->co_hoi_sai=$request->co_hoi_sai;
        $cauHinhApp->thoi_gian_tra_loi=$request->thoi_gian_tra_loi;

        $cauHinhApp->save();
        return redirect()->route('cau-hinh-app.danh-sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cauHinhApp=cauhinhapp::find($id);
        return view('cau-hinh-app.form',compact('cauHinhApp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cauHinhApp=cauhinhapp::find($id);
        $cauHinhApp->co_hoi_sai=$request->co_hoi_sai;
        $cauHinhApp->thoi_gian_tra_loi=$request->thoi_gian_tra_loi;
        $cauHinhApp->save();
        return redirect()->route('cau-hinh-app.danh-sach');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cauHinhApp=cauhinhapp::find($id);
         $cauHinhApp->delete();
         return redirect()->route('cau-hinh-app.danh-sach');
    }
}
