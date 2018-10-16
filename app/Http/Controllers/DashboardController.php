<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services=Service::all();
        return view('dashboard/index',compact('services'));
    }

  
    public function create()
    {
        return view('dashboard/create');
    }

    public function store(Request $request)
    {  
        $service= new Service;

        if($request->hasfile('img'))
        { 
            $image = Image::make($request->file('img'))
            ->resize(400, 300, function ($constraint) { $constraint->aspectRatio(); } )
            ->encode('jpg');
            $imageName= md5($image->__toString());
            $path = "public/imgs/{$imageName}.jpg";
            Storage::put($path,$image);
           $service->filename=$imageName.'.jpg';
        }

        $service->name_ar=$request->get('name_ar');
        $service->name_en=$request->get('name_en');
        $service->name_fa=$request->get('name_fa');
        $service->details_ar=$request->get('details_ar');
        $service->details_en=$request->get('details_en');
        $service->details_fa=$request->get('details_fa');
       $service->category=$request->get('category');
       $service->lat=$request->get('lat');
       $service->lng=$request->get('lng');
       $service->phone=$request->get('phone');  
       $service->save();
       return redirect('dashboard')->with('success', 'تمت الأضافه بنجاح');
    }


 
    public function edit($id)
    {
        $service = Service::find($id);
        return view('dashboard/edit',compact('service','id'));
    }

  
    public function update(Request $request, $id)
    {
        $service= Service::find($id);

        if($request->hasfile('img'))
        {  Storage::delete('public/imgs/'.$service->filename);
            $image = Image::make($request->file('img'))
            ->resize(400, 300, function ($constraint) { $constraint->aspectRatio(); } )
            ->encode('jpg');
            $imageName= md5($image->__toString());
            $path = "public/imgs/{$imageName}.jpg";
            Storage::put($path,$image);
           $service->filename=$imageName.'.jpg';
        }
      
       $service->name_ar=$request->get('name_ar');
       $service->name_en=$request->get('name_en');
       $service->name_fa=$request->get('name_fa');
       $service->details_ar=$request->get('details_ar');
       $service->details_en=$request->get('details_en');
       $service->details_fa=$request->get('details_fa');
       $service->category=$request->get('category');
       $service->lat=$request->get('lat');
       $service->lng=$request->get('lng');
       $service->phone=$request->get('phone');  
       $service->save();
       return redirect('dashboard')->with('success', 'تم التعديل بنجاح');
    }


    public function destroy($id)
    {
        $service = Service::find($id);
        if($service->filename!=null)
        {  Storage::delete('public/imgs/'.$service->filename);
        }
        $service->delete();
        return redirect('dashboard')->with('success','تم الحذف بنجاح');
    }
}
