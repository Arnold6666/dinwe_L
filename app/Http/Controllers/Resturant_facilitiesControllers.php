<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Resturant_facilities;
use Illuminate\Http\Request;

class Resturant_facilitiesControllers extends Controller
{
    protected $resturant_facilities;

    public function __construct()
    {
        $this->resturant_facilities = new Resturant_facilities;
    }
    /**
     * Display a listing of the resource.
     */
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

        echo $request->cash;
        // $result = $this->resturant_facilities->store($request);

        // if($result === "success"){
        //     Session::flash('message', '建立成功');
        //     return redirect('http://127.0.0.1:8000/uploadRes');
        // }else{
        //     Session::flash('message', '建立失敗');
        //     return redirect('http://127.0.0.1:8000/uploadRes');
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $id = $request->id;
        // echo $id;
        $this->resturant_facilities->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resturant_facilities $resturant_facilities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resturant_facilities $resturant_facilities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resturant_facilities $resturant_facilities)
    {
        //
    }
}
