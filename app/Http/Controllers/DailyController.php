<?php

namespace App\Http\Controllers;

use App\Models\Daily;
use Illuminate\Http\Request;

class DailyController extends Controller
{
    public function index(){
        $data = Daily::all();
        return view('datadaily', compact('data'));
    }
    public function tambahdaily(){
        return view('tambahdata');
    }

    public function insertdata(Request $request) {
        // dd($request->all());
        $data = Daily::create($request->all());
        if($request->hasFile('foto')) {
            $request->file('foto')->move('fotoactivity/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('daily')->with('success', 'Data Berhasil Di tambahkan');
    }

    public function tampilkandata($id) {
        $data = Daily::find($id);    
        // dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Daily::find($id);
        $data->update($request->all());
        return redirect()->route('daily')->with('success', 'Data Berhasil Di Update');
    }

    public function delete($id){
        $data = Daily::find($id);
        $data->delete();
        return redirect()->route('daily')->with('success', 'Data Berhasil Di Hapus');
    }

}
