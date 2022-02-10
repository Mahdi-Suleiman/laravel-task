<?php

namespace App\Http\Controllers;

use App\Models\arrayTask;
use App\Http\Requests\StorearrayTaskRequest;
use App\Http\Requests\UpdatearrayTaskRequest;

class ArrayTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        #mahdi
        $array = array('key1' => 'value1', 'key2' => 'value2', 'key3' => 'value3');
        $array2 = [1, 2, 3];
        $array3 = arrayTask::all(); #execute and return fucntion without creating an instance
        // dd($array3); # var_dumb and die
        return view('arrayTask', compact('array3'));
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
     * @param  \App\Http\Requests\StorearrayTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorearrayTaskRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\arrayTask  $arrayTask
     * @return \Illuminate\Http\Response
     */
    public function show(arrayTask $arrayTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\arrayTask  $arrayTask
     * @return \Illuminate\Http\Response
     */
    public function edit(arrayTask $arrayTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatearrayTaskRequest  $request
     * @param  \App\Models\arrayTask  $arrayTask
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatearrayTaskRequest $request, arrayTask $arrayTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\arrayTask  $arrayTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(arrayTask $arrayTask)
    {
        //
    }
}