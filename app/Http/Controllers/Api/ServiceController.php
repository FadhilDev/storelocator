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
<<<<<<< HEAD
        if ($request->category == '') {
            $services = Service::where('category',1)->get();
            return response($services, 200);
        }
        else {
            $services = Service::where('category', $request->category)->get();
            return response($services, 200);
        }
=======
            $services = Service::where('category', $request->category)->get();
            return response($services, 200);
>>>>>>> 253de8f02fa3cecbb64cbf7f021258e6a92a946b
    }

    public function map(Request $request)
    {
<<<<<<< HEAD
        if ($request->category == '') {
            $services = Service::where('category',1)->get();
            return ServiceResource::collection($services);
        }
        else {
            $services = Service::where('category', $request->category)->get();
            return ServiceResource::collection($services);
        }
=======
        /*if ($request->category == '') {
            $services = Service::where('category',1)->get();
            return ServiceResource::collection($services);
        }
        else {*/
            $services = Service::all();
            return ServiceResource::collection($services);
        //}
>>>>>>> 253de8f02fa3cecbb64cbf7f021258e6a92a946b
    }
}
