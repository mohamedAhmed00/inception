<?php

namespace Modules\Pages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Pages\Repository\Interfaces\PageInterface;

class PagesController extends Controller
{

    /**
     * @var
     */
    protected $pageRepository;

    /**
     * PageController constructor.
     * @param PageInterface $pageRepository
     * @author Nader Ahmed
     */
    public function __construct(PageInterface $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($pageName)
    {
        $page = $this->pageRepository->getWhere(['key'=>$pageName])->first();
        return view('pages::'.$pageName,compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('pages::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(string $str,Request $request)
    {
        $id = $this->pageRepository->UpdatePage($str,array_merge($request->all(),['key' => $str]));
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->pageRepository->saveImage($image,'page',$id);
        }
        return redirect()->back()->with('successful',' editing page successfully');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('pages::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('pages::edit');
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
     * @return Response
     */
    public function destroy()
    {
    }
}
