@extends('base::layouts.master')
@section('content')
    <section class="content-title">
        <h1>
            All Services
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('_admin_/base') }}"><i class="fa fa-home"></i>Dashboard</a></li>
            <li class="active">Services</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title col-xs-6">Services</h3>
                        <h3 class="col-xs-6 text-right"><a href="{{ url('_admin_/services/add') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus text-capitalize"> Create New </i></a></h3>

                    </div>
                    <div class="box-body">
                        <table id="payments" class="table responsive">
                            <thead>
                            <tr>
                                <th class="text-center"># Service</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Icon</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td class="text-center"><a href="{{ route('service.edit',$service->id) }}">{{ $loop->iteration }}</a></td>
                                        <td class="text-center">{{ $service->title }}</td>
                                        <td class="text-center">{{ $service->description }}</td>
                                        <td class="text-center">
                                            <i class="{{ $service->logo }}"></i>
                                        </td>
                                        <td class="text-center">{{ $service->created_at->diffForHumans() }}</td>
                                        <td class="text-center"><a href="{{ route('service.edit',$service->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit text-capitalize"> Edit </i></a></td>
                                        <td class="text-center">
                                            <div class="slab">
                                                <div class="controls">
                                                    <button class="btn btn-danger btn-sm remove"><i class="fa fa-times"></i></button>
                                                    <div class="confirm">
                                                        <p>
                                                            Are you sure?
                                                        </p>
                                                        <button class="btn btn-primary btn-sm keep-button">No</button>
                                                        <a href="{{ route('service.delete',$service->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-remove text-capitalize"> Yes </i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <span class="return-up"><i class="fa fa-chevron-up"></i></span>
@stop
