<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InforController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infor = DB::table('infors')->get();
        return view('index', compact('infor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return "hello";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
        DB::table('infors')->insert([
            'name' => $request->name,
            'class' => $request->class,
            'email' => $request->email
        ]);
        return redirect('/infor');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
        DB::table('infors')->where('id', $request->id)->update([
            'name' => $request->name,
            'class' => $request->class,
            'email' => $request->email
        ]);
        return redirect('/infor'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('infors')->where('id', $id)->delete();
        return redirect('/infor');
    }
}
