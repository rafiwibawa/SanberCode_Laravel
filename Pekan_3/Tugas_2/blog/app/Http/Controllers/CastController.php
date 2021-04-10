<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cast = DB::table('cast')->get();
        return view('cast.index',compact('cast'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:45',
            'umur' => 'required',
            'bio' => 'required',
        ]);
        DB::table('cast')->insert([
            "name" => $request["name"],
            "umur" => $request["umur"],
            "bio" => $request["bio"]
        ]);
        return redirect('/cast')->with('success','Tambah Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $castid = DB::table('cast')->where('id',$id)->first();
        return view('cast.show',compact('castid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('cast.edit', compact('cast'));
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
        $request->validate([
            'name' => 'required|max:45',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $query = DB::table('cast')
            ->where('id', $id)
            ->update([
                "name" => $request["name"],
                "umur" => $request["umur"],
                "bio" => $request["bio"]
            ]);
        return redirect('/cast')->with('edit','Edit Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast')->with('hapus','Delete Data Berhasil');
    }
}
