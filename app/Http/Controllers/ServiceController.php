<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        return view('dashboard/index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $filename=null;
        if($request->hasfile('img'))
        { 
            $filename = $request->file('img')->store('imgs');
        }

       $service= new Service;
       $service->name=$request->get('name');
       $service->details=$request->get('details');
       $service->category=$request->get('category');
       $service->lat=$request->get('lat');
       $service->lng=$request->get('lng');
       $service->filename=$filename;
       $service->save();
       return redirect('services')->with('success', 'تمت الأضافه بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('dashboard/edit',compact('service','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filename=null;
        if($request->hasfile('img'))
        { 
            $filename = $request->file('img')->store('imgs');
        }
       $service= Service::find($id);
       $service->name=$request->get('name');
       $service->details=$request->get('details');
       $service->category=$request->get('category');
       $service->lat=$request->get('lat');
       $service->lng=$request->get('lng'); 
       $service->filename=$filename;
       $service->save();
       return redirect('services')->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('services')->with('success','تم الحذف بنجاح');
    }
}
