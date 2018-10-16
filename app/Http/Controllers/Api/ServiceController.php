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
        if($request->lang=='ar'){
            $services = Service::select('id','name_ar AS name','details_ar AS details','lat','lng','phone','category','filename')->where('category', $request->category)->get();
            return response($services, 200);
        }
        elseif($request->lang=='en'){
            $services = Service::select('id','name_en AS name','details_en AS details','lat','lng','phone','category','filename')->where('category', $request->category)->get();
            return response($services, 200);
        }
        else{
            $services = Service::select('id','name_fa AS name','details_fa AS details','lat','lng','phone','category','filename')->where('category', $request->category)->get();
            return response($services, 200);
        }
    }

    public function map(Request $request)
    {
           if($request->lang=='ar'){
            $services = Service::select('id','name_ar AS name','details_ar AS details','lat','lng')->get();
            return ServiceResource::collection($services);
        }
        elseif($request->lang=='en'){
            $services = Service::select('id','name_en AS name','details_en AS details','lat','lng')->get();
            return ServiceResource::collection($services);
        }
        else{
            $services = Service::select('id','name_fa AS name','details_fa AS details','lat','lng')->get();
            return ServiceResource::collection($services);
        }
    }
}
