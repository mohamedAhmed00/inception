<?php

namespace Modules\FrontEnd\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Contact\Repository\Interfaces\ContactInterface;
use Modules\FrontEnd\Http\Requests\ContactRequest;
use Modules\Services\Repository\Interfaces\ServiceInterface;
use Modules\Team\Repository\Interfaces\TeamInterface;
use Modules\Testimonials\Entities\Testimonial;
use Modules\Testimonials\Repository\Interfaces\TestimonialInterface;

class FrontEndController extends Controller
{

    /**
     * @var
     */
    protected $contactRepository;

    /**
     * @var
     */
    protected $teamRepository;

    /**
     * @var
     */
    protected $serviceRepository;

    /**
     * @var
     */
    protected $testimonialRepository;

    /**
     * ServicesController constructor.
     * @param ContactInterface $contactRepository
     * @param TeamInterface $teamRepository
     * @param ServiceInterface $serviceRepository
     * @param TestimonialInterface $testimonialRepository
     * @author Nader Ahmed
     */
    public function __construct(ContactInterface $contactRepository,TeamInterface $teamRepository,ServiceInterface $serviceRepository,TestimonialInterface $testimonialRepository)
    {
        $this->contactRepository = $contactRepository;
        $this->teamRepository = $teamRepository;
        $this->serviceRepository = $serviceRepository;
        $this->testimonialRepository = $testimonialRepository;
    }
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index()
    {
        return view('frontend::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function about()
    {
        return view('frontend::about');
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function contact()
    {
        return view('frontend::contact');
    }

    /**
     * Show the form for creating a new resource.
     * @param ContactRequest $request
     * @return View
     */
    public function sendMessage(ContactRequest $request)
    {
        $this->contactRepository->store($request->all());
        return redirect()->back()->with('successful','Your message was sent successfully');
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function services()
    {
        return view('frontend::services');
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function testimonial()
    {
        return view('frontend::testimonial');
    }

    /**
     * Show the form for creating a new resource.
     * @param int $id
     * @return View
     */
    public function team(int $id)
    {
        $team = $this->teamRepository->getById($id);
        if(null === $team)
        {
            return view('frontend::index');
        }
        return view('frontend::team',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     * @param int $id
     * @return View
     */
    public function service(int $id)
    {
        $service = $this->serviceRepository->getById($id);
        if(null === $service)
        {
            return view('frontend::index');
        }
        return view('frontend::service',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     * @param int $id
     * @return View
     */
    public function singleTestimonial(int $id)
    {
        $testimonial = $this->testimonialRepository->getById($id);
        if(null === $testimonial)
        {
            return view('frontend::index');
        }
        return view('frontend::single-testimonial',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function aboutReadMore()
    {
        return view('frontend::about-readmore');
    }
}
