<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequestSurveyRequest;
use App\Http\Requests\UpdateRequestSurveyRequest;
use App\Http\Resources\RequestSurveyResource;
use App\Models\RequestSurvey;

class RequestSurveyController extends Controller
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
        $data = RequestSurvey::latest()->paginate(10);
        return new RequestSurveyResource($data);
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
     * @param  \App\Http\Requests\StoreRequestSurveyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequestSurveyRequest $request)
    {
        $data = RequestSurvey::create([
            'name' => $request->name,
            'note' => $request->note,
            'date' => $request->date,
            'customer_id' => $request->customer_id
        ]);
        return new RequestSurveyResource($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestSurvey  $requestSurvey
     * @return \Illuminate\Http\Response
     */
    public function show(RequestSurvey $requestSurvey)
    {
        return new RequestSurveyResource($requestSurvey);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestSurvey  $requestSurvey
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestSurvey $requestSurvey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequestSurveyRequest  $request
     * @param  \App\Models\RequestSurvey  $requestSurvey
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequestSurveyRequest $request, RequestSurvey $requestSurvey)
    {
        $data = RequestSurvey::find($requestSurvey->id);
        $data->name = $request->name;
        $data->note = $request->note;
        $data->date = $request->date;
        $data->customer_id = $request->customer_id;
        $data->update();
        // $data = RequestSurvey::update([
        //     'name' => $request->name,
        //     'note' => $request->note,
        //     'date' => $request->date,
        //     'customer_id' => $request->customer_id
        // ]);
        return new RequestSurveyResource($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestSurvey  $requestSurvey
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestSurvey $requestSurvey)
    {
        $data = $requestSurvey->delete('id');
        return new RequestSurveyResource(['message' => 'delete success', 'data' => $data]);
    }
}