<?php

namespace Modules\Slider\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Slider\Http\Requests\SliderRequest;
use Modules\Slider\Repository\Interfaces\SliderInterface;

class SliderController extends Controller
{

    /**
     * @var
     */
    protected $sliderRepository;

    /**
     * ServicesController constructor.
     * @param SliderInterface $sliderInterface
     * @author Nader Ahmed
     */
    public function __construct(SliderInterface $sliderInterface)
    {
        $this->sliderRepository = $sliderInterface;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $sliders = $this->sliderRepository->getAll();
        return view('slider::index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('slider::form');
    }

    /**
     * Store a newly created resource in storage.
     * @param  SliderRequest $request
     * @return Response
     */
    public function store(SliderRequest $request)
    {
        $slider = $this->sliderRepository->store($request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->sliderRepository->saveImage($image,'slider',$slider->id);
        }
        return redirect()->back()->with('successful',' adding slider successfully');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('slider::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(int $id)
    {
        $slider = $this->sliderRepository->getById($id);
        return view('slider::form',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     * @param  SliderRequest $request
     * @param int $id
     * @return Response
     */
    public function update(int $id,SliderRequest $request)
    {
        $this->sliderRepository->update($id,$request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->sliderRepository->saveImage($image,'slider',$id);
        }
        return redirect()->back()->with('successful',' editing slider successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(int $id)
    {
        $this->sliderRepository->delete($id);
        return redirect()->back()->with('successful',' Deleting Slider successfully');
    }
}
