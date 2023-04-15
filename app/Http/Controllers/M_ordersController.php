<?php

namespace App\Http\Controllers;

use App\Models\M_orders;
use Illuminate\Http\Request;

class M_ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $m_orders;

    public function __construct(){
        $this->m_orders = new M_orders;
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
        $result = $this->m_orders->store($request);
        if($result === "success"){
            return redirect('http://localhost:3000/storeinfomation/1');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(M_orders $m_orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(M_orders $m_orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, M_orders $m_orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(M_orders $m_orders)
    {
        //
    }
}
