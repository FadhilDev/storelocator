<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Service As ServiceResource;
use App\Service;
class ServiceController extends Controller
{
   
    public function index(Request $request)
    {
        if ($request->category == '') {
            $services = Service::where('category',1)->get();
            return response($services, 200);
        }
        else {
            $services = Service::where('category', $request->category)->get();
            return response($services, 200);
        }
    }

    public function map(Request $request)
    {
        if ($request->category == '') {
            $services = Service::where('category',1)->get();
            return ServiceResource::collection($services);
        }
        else {
            $services = Service::where('category', $request->category)->get();
            return ServiceResource::collection($services);
        }
    }
}
