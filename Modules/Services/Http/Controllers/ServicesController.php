<?php

namespace Modules\Services\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Services\Http\Requests\ServiceRequest;
use Modules\Services\Repository\Interfaces\ServiceInterface;

class ServicesController extends Controller
{
    /**
    * @var
    */
    protected $serviceRepository;

    /**
     * ServicesController constructor.
     * @param ServiceInterface $serviceRepository
     * @author Nader Ahmed
     */
    public function __construct(ServiceInterface $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $services = $this->serviceRepository->getAll();
        return view('services::index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('services::form');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(ServiceRequest $request)
    {
        $services = $this->serviceRepository->store($request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->serviceRepository->saveImage($image,'service',$services->id);
        }
        return redirect()->back()->with('successful',' adding service successfully');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('services::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(int $id)
    {
        $service = $this->serviceRepository->getById($id);
        return view('services::form',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(int $id,ServiceRequest $request)
    {
        $services = $this->serviceRepository->update($id,$request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->serviceRepository->saveImage($image,'service',$id);
        }
        return redirect()->back()->with('successful',' editing service successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(int $id)
    {
        $this->serviceRepository->delete($id);
        return redirect()->back()->with('successful',' Deleting service successfully');
    }
}
