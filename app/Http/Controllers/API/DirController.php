<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // An array of directories to list
    protected $directories = [

        'D:/tut/',
        'D:/torrent/',
        'D:/media/'
    ];

    // List the directories
    public function index()
    {
        return response()->json($this->directories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "dir create";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
