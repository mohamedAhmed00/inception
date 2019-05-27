<?php

namespace Modules\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Contact\Repository\Interfaces\ContactInterface;

class ContactController extends Controller
{

    /**
     * @var
     */
    protected $contactRepository;

    /**
     * ServicesController constructor.
     * @param ContactInterface $contactRepository
     * @author Nader Ahmed
     */
    public function __construct(ContactInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $contacts = $this->contactRepository->getAll();
        return view('contact::index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('contact::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show(int $id)
    {
        $data = ['seen'=>'1'];
        $this->contactRepository->update($id,$data);
        $contact = $this->contactRepository->getById($id);
        return view('contact::show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('contact::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(int $id)
    {
        $this->contactRepository->delete($id);
        return redirect('contact')->with('successful',' Deleting Contact successfully');
    }
}
