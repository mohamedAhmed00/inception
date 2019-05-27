<?php

namespace Modules\Team\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Team\Http\Requests\TeamRequest;
use Modules\Team\Repository\Interfaces\TeamInterface;

class TeamController extends Controller
{

    /**
     * @var
     */
    protected $teamRepository;

    /**
     * TeamController constructor.
     * @param TeamInterface $teamRepository
     * @author Nader Ahmed
     */
    public function __construct(TeamInterface $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $teams = $this->teamRepository->getAll();
        return view('team::index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('team::form');
    }

    /**
     * Store a newly created resource in storage.
     * @param  TeamRequest $request
     * @return Response
     */
    public function store(TeamRequest $request)
    {
        $team = $this->teamRepository->store($request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->teamRepository->saveImage($image,'team',$team->id);
        }
        return redirect()->back()->with('successful',' adding team successfully');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('team::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(int $id)
    {
        $team = $this->teamRepository->getById($id);
        return view('team::form',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     * @param  TeamRequest $request
     * @param int $id
     * @return Response
     */
    public function update(int $id,TeamRequest $request)
    {
        $this->teamRepository->update($id,$request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->teamRepository->saveImage($image,'team',$id);
        }
        return redirect()->back()->with('successful',' editing team successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(int $id)
    {
        $this->teamRepository->delete($id);
        return redirect()->back()->with('successful',' Deleting team successfully');
    }
}
