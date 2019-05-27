<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Users\Http\Requests\UpdateUserRequest;
use Modules\Users\Http\Requests\UserRequest;
use Modules\Users\Repository\Interfaces\UserInterface;

class UsersController extends Controller
{

    /**
     * @var
     */
    protected $userRepository;

    /**
     * ServicesController constructor.
     * @param UserInterface $userRepository
     * @author Nader Ahmed
     */
    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $users = $this->userRepository->getUsers();
        return view('users::index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('users::form');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(UserRequest $request)
    {
        $user = $this->userRepository->store($request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->userRepository->saveImage($image,'user',$user->id);
        }
        return redirect()->back()->with('successful',' adding user successfully');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        $user = $this->userRepository->getById(auth()->user()->id);
        return view('users::profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit(int $id)
    {
        $user = $this->userRepository->getById($id);
        return view('users::form',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * @param  UserRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(int $id , UpdateUserRequest $request)
    {
        $user = $this->userRepository->update($id,$request->all());
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $this->userRepository->saveImage($image,'user',$id);
        }
        return redirect()->back()->with('successful',' updating user successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy(int $id)
    {
        $this->userRepository->delete($id);
        return redirect()->back()->with('successful',' Deleting User successfully');

    }
}
