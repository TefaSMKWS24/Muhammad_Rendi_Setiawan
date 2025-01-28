<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\facedas\DB;
use Illuminate\Support\facedas\Redirect;
use Illuminate\Support\facedas\Validator;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view =('kasir.index')
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view =('kasir.create')
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        $kasir = DB::table('kasir')->where('kode_kasir', $id)->first();
        return view('kasir.edit', compact('kasir'));
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
        //
    }
}
