<?php

namespace App\Http\Controllers;

use App\Models\Resturant_activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Resturant_activitiesController extends Controller
{
    protected $resturant_activities;

    public function __construct()
    {
        $this->resturant_activities = new Resturant_activities;
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
        $result = $this->resturant_activities->store($request);
        if($result === "success"){
            Session::flash('message', '建立成功');
            return redirect('http://localhost:8000/uploadactivity/' . $request->resturant_id);
        }else{
            Session::flash('message', '建立失敗');
            return redirect('http://localhost:8000/uploadactivity' . $request->resturant_id);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $result = $this->resturant_activities->show($id);
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resturant_activities $resturant_activities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resturant_activities $resturant_activities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resturant_activities $resturant_activities)
    {
        //
    }
}
