<?php

namespace Modules\Client\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Client\Http\Requests\ClientRequest;
use Modules\Client\Repository\Interfaces\ClientInterface;

class ClientController extends Controller
{

    /**
     * @var
     */
    protected $clientRepository;

    /**
     * ServicesController constructor.
     * @param ClientInterface $clientInterface
     * @author Nader Ahmed
     */
    public function __construct(ClientInterface $clientInterface)
    {
        $this->clientRepository = $clientInterface;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $clients = $this->clientRepository->getAll();
        return view('client::index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('client::form');
    }

    /**
     * Store a newly created resource in storage.
     * @param  ClientRequest $request
     * @return Response
     */
    public function store(ClientRequest $request)
    {
        $client = $this->clientRepository->store($request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->clientRepository->saveImage($image,'client',$client->id);
        }
        return redirect()->back()->with('successful',' adding client successfully');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('client::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(int $id)
    {
        $client = $this->clientRepository->getById($id);
        return view('client::form',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     * @param  ClientRequest $request
     * @param int $id
     * @return Response
     */
    public function update(int $id,ClientRequest $request)
    {
        $this->clientRepository->update($id,$request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->clientRepository->saveImage($image,'client',$id);
        }
        return redirect()->back()->with('successful',' editing client successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(int $id)
    {
        $this->clientRepository->delete($id);
        return redirect()->back()->with('successful',' Deleting Client successfully');
    }
}
