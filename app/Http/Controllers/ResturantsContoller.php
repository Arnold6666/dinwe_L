<?php

namespace App\Http\Controllers;

use App\Models\Resturants;
use Illuminate\Http\Request;

class ResturantsContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $resturants;

    public function __construct()
    {
        $this->resturants = new Resturants;
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Resturants $resturants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resturants $resturants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resturants $resturants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resturants $resturants)
    {
        //
    }
}
