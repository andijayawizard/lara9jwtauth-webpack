<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSiteSurveyRequest;
use App\Http\Requests\UpdateSiteSurveyRequest;
use App\Http\Resources\SiteSurveyResource;
use App\Models\SiteSurvey;

class SiteSurveyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SiteSurvey::latest()->paginate(10);
        return new SiteSurveyResource($data);
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
     * @param  \App\Http\Requests\StoreSiteSurveyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiteSurveyRequest $request)
    {
        // $attr = $request->toArray();
        // SiteSurvey::create($attr);
        $request = SiteSurvey::create([
            'name' => $request->name,
            'customer_id' => $request->customer_id,
            'user_id' => $request->user_id
        ]);
        return new SiteSurveyResource(['message' => 'insert success', 'data' => $request]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteSurvey  $siteSurvey
     * @return \Illuminate\Http\Response
     */
    public function show(SiteSurvey $siteSurvey)
    {
        return new SiteSurveyResource($siteSurvey);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteSurvey  $siteSurvey
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSurvey $siteSurvey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiteSurveyRequest  $request
     * @param  \App\Models\SiteSurvey  $siteSurvey
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiteSurveyRequest $request, SiteSurvey $siteSurvey)
    {
        $attr = $request->toArray();
        $siteSurvey->update($attr);
        return new SiteSurveyResource(['message' => 'update success', 'data' => $siteSurvey]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteSurvey  $siteSurvey
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSurvey $siteSurvey)
    {
        $siteSurvey->delete();
        return new SiteSurveyResource(['message' => 'delete success', 'data' => $siteSurvey]);
    }
}