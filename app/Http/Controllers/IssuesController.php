<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIssuesRequest;
use App\Http\Requests\UpdateIssuesRequest;
use App\Models\Issues;

class IssuesController extends Controller
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
     * @param  \App\Http\Requests\StoreIssuesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIssuesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Issues  $issues
     * @return \Illuminate\Http\Response
     */
    public function show(Issues $issues)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Issues  $issues
     * @return \Illuminate\Http\Response
     */
    public function edit(Issues $issues)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIssuesRequest  $request
     * @param  \App\Models\Issues  $issues
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIssuesRequest $request, Issues $issues)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Issues  $issues
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issues $issues)
    {
        //
    }
}
