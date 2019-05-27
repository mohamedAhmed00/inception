<?php

namespace Modules\Testimonials\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Testimonials\Http\Requests\TestimonialRequest;
use Modules\Testimonials\Repository\Interfaces\TestimonialInterface;

class TestimonialsController extends Controller
{

    /**
     * @var
     */
    protected $testimonialRepository;

    /**
     * TeamController constructor.
     * @param TestimonialInterface $testimonialRepository
     * @author Nader Ahmed
     */
    public function __construct(TestimonialInterface $testimonialRepository)
    {
        $this->testimonialRepository = $testimonialRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $testimonials = $this->testimonialRepository->getAll();
        return view('testimonials::index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('testimonials::form');
    }

    /**
     * Store a newly created resource in storage.
     * @param  TestimonialRequest $request
     * @return Response
     */
    public function store(TestimonialRequest $request)
    {
        $testimonial = $this->testimonialRepository->store($request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->testimonialRepository->saveImage($image,'testimonial',$testimonial->id);
        }
        return redirect()->back()->with('successful',' adding testimonial successfully');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('testimonials::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(int $id)
    {
        $testimonial = $this->testimonialRepository->getById($id);
        return view('testimonials::form',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     * @param  TestimonialRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(int $id,TestimonialRequest $request)
    {
        $this->testimonialRepository->update($id,$request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->testimonialRepository->saveImage($image,'testimonial',$id);
        }
        return redirect()->back()->with('successful',' editing testimonial successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(int $id)
    {
        $this->testimonialRepository->delete($id);
        return redirect()->back()->with('successful',' Deleting testimonial successfully');
    }
}
