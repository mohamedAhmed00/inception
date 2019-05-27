@extends('base::layouts.master')
@section('content')
    <section class="content-title">
        <h1>
            {{ isset($testimonial)? 'Edit Testimonial : ' . $testimonial->title : 'Add New Testimonial' }}
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href={{ url('_admin_/base') }}><i class="fa fa-home"></i>Dashboard</a></li>
            <li class="active">{{ isset($testimonial)? 'Edit Testimonial '  : 'Add New Testimonial' }} </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-form">
            <div class="box-header">
                <h3 class="box-title col-xs-6">{{ isset($testimonial)? 'Edit Testimonial : ' . $testimonial->title : 'Add New Testimonial' }} </h3>
                @if(isset($testimonial))
                    <h3 class="col-xs-6 text-right"><a href="{{ url('_admin_/testimonials/add') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus text-capitalize"> Create New </i></a></h3>
                @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-12">
                    <form enctype="multipart/form-data" action="{{ isset($testimonial)? route('testimonial.update',$testimonial->id) : route('testimonial.store') }}" method="post">
                        @csrf
                        {{ isset($testimonial)? method_field('patch') :'' }}
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Title</label>
                                    <input class="form-control" placeholder="Type Testimonial Title" value="{{ empty(old('title'))? isset($testimonial)?$testimonial->title:''  : old('title') }}" id="title" name="title" type="text" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Person</label>
                                    <input class="form-control" placeholder="Type Testimonial Person" value="{{ empty(old('person'))? isset($testimonial)?$testimonial->person:''  : old('person') }}" id="person" name="person" type="text" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Person Title</label>
                                    <input class="form-control" placeholder="Type Testimonial Person Title" value="{{ empty(old('person_title'))? isset($testimonial)?$testimonial->person_title:''  : old('person_title') }}" id="person_title" name="person_title" type="text" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Company</label>
                                    <input class="form-control" placeholder="Type Testimonial Company" value="{{ empty(old('company'))? isset($testimonial)?$testimonial->company:''  : old('company') }}" id="company" name="company" type="text" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Description</label>
                                    <input class="form-control" placeholder="Type Description" value="{{ empty(old('description'))? isset($testimonial)?$testimonial->description:''  : old('description') }}" id="description" name="description" type="text" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Content</label>
                                    <textarea name="content" id="" placeholder="type All Content here . . . ." cols="30" rows="10">{!! empty(old('content'))? isset($testimonial)?$testimonial->content:'' :  old('content') !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option value="1" {{ (isset($testimonial) AND $testimonial->status == '1')?'selected':'' }} >Activate</option>
                                    <option value="0" {{ (isset($testimonial) AND $testimonial->status == '0')?'selected':'' }}>Deactivate</option>
                                </select>

                            </div>
                            <div class='form-group'>
                                <div class="col-xs-6">
                                    <label>Upload image</label>
                                    <input type="file" name="image"  >
                                </div>
                                <div class="col-xs-6">

                                    <img class="member-online img-rounded" style="width: 100px;height: 100px;" src="{{ asset(!empty($testimonial->Image->image)?$testimonial->Image->image:'') }}" alt="Testimonial Image">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
    <!-- /. main content -->
    <span class="return-up"><i class="fa fa-chevron-up"></i></span>
    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
@stop
