<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResourceResource;
use App\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ResourceResource::collection(Resource::all());
    }
}
