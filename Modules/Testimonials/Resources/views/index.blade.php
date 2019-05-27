@extends('base::layouts.master')
@section('content')
    <section class="content-title">
        <h1>
            All Testimonials
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('_admin_/base') }}"><i class="fa fa-home"></i>Dashboard</a></li>
            <li class="active">Testimonials</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title col-xs-6">Testimonials</h3>
                        <h3 class="col-xs-6 text-right"><a href="{{ url('_admin_/testimonial/add') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus text-capitalize"> Create New </i></a></h3>

                    </div>
                    <div class="box-body">
                        <table id="payments" class="table responsive">
                            <thead>
                            <tr>
                                <th class="text-center"># Testimonial</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Company</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($testimonials as $testimonial)
                                <tr>
                                    <td class="text-center"><a href="{{ route('testimonial.edit',$testimonial->id) }}">{{ $loop->iteration }}</a></td>
                                    <td class="text-center">{{ $testimonial->title }}</td>
                                    <td class="text-center">{{ $testimonial->person }}</td>
                                    <td class="text-center">{{ $testimonial->person_title }}</td>
                                    <td class="text-center">{{ $testimonial->company }}</td>
                                    <td class="text-center"><img src="{{ asset(!empty($testimonial->Image->image)?$testimonial->Image->image:'') }}" class="member-online img-rounded" style="width: 50px;height: 50px;" alt=""></td>
                                    <td class="text-center">{{ $testimonial->created_at->diffForHumans() }}</td>
                                    <td class="text-center"><a href="{{ route('testimonial.edit',$testimonial->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit text-capitalize"> Edit </i></a></td>
                                    <td class="text-center">
                                        <div class="slab">
                                            <div class="controls">
                                                <button class="btn btn-danger btn-sm remove"><i class="fa fa-times"></i></button>
                                                <div class="confirm">
                                                    <p>
                                                        Are you sure?
                                                    </p>
                                                    <button class="btn btn-primary btn-sm keep-button">No</button>
                                                    <a href="{{ route('testimonial.delete',$testimonial->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-remove text-capitalize"> Yes </i></a>
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
