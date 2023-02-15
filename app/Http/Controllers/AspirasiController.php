<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Http\Requests\StoreAspirasiRequest;
use App\Http\Requests\UpdateAspirasiRequest;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAspirasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAspirasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function show(Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAspirasiRequest  $request
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAspirasiRequest $request, Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aspirasi $aspirasi)
    {
        //
    }
}
