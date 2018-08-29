<?php

namespace App\Http\Controllers;

use App\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelFoundException;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $santris = Santri::paginate(2);

        // $santris = Santri::where('id', 1)
        //        ->orderBy('nama', 'desc')
        //        ->take(10)
        //        ->get();

        $santris = DB::table('santri')
                ->orderBy('id', 'desc')
                ->paginate(5);

        return view('santri.index', ['santris' => $santris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('santri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('santri')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'status' => $request->status,
        ]);

        return redirect('/santri');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function show(Santri $santri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function edit(Santri $santri)
    {
        // dd('kesii');
        return view('santri.edit', ['santri' => $santri]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Santri $santri)
    {
        // dd($santri->id);        

        $santri->update([
            'name' => $request->name,
            'address' => $request->address,
            'status' => $request->status
        ]);

        return redirect('/santri');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Santri $santri)
    {
        $santri->delete();

        return redirect('/santri');
    }
}
