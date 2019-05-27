@extends('base::layouts.master')
@section('content')
    <section class="content-title">
        <h1>
            {{ isset($slider)? 'Edit Slider : ' . $slider->title : 'Add New Slider' }}
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href={{ url('_admin_/base') }}><i class="fa fa-home"></i>Dashboard</a></li>
            <li class="active">{{ isset($slider)? 'Edit Slider '  : 'Add New Slider' }} </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-form">
            <div class="box-header">
                <h3 class="box-title col-xs-6">{{ isset($slider)? 'Edit Slider : ' . $slider->title : 'Add New Slider' }} </h3>
                @if(isset($slider))
                    <h3 class="col-xs-6 text-right"><a href="{{ url('_admin_/sliders/add') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus text-capitalize"> Create New </i></a></h3>
                @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-12">
                    <form enctype="multipart/form-data" action="{{ isset($slider)? route('slider.update',$slider->id) : route('slider.store') }}" method="post">
                        @csrf
                        {{ isset($slider)? method_field('patch') :'' }}
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Title</label>
                                    <input class="form-control" placeholder="Type Slider Title" value="{{ empty(old('title'))? isset($slider)?$slider->title:''  : old('title') }}" id="title" name="title" type="text" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Title 2</label>
                                    <input class="form-control" placeholder="Type Slider Second Title" value="{{ empty(old('second_title'))? isset($slider)?$slider->second_title:''  : old('second_title') }}" id="second_title" name="second_title" type="text" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>SubTitle</label>
                                    <input class="form-control" placeholder="Type Slider SubTitle" value="{{ empty(old('subtitle'))? isset($slider)?$slider->subtitle:''  : old('subtitle') }}" id="subtitle" name="subtitle" type="text" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>link</label>
                                    <input class="form-control" placeholder="Type link Title" value="{{ empty(old('link'))? isset($slider)?$slider->link:''  : old('link') }}" id="link" name="link" type="text" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option value="1" {{ (isset($slider) AND $slider->status == '1')?'selected':'' }} >Activate</option>
                                    <option value="0" {{ (isset($slider) AND $slider->status == '0')?'selected':'' }}>Deactivate</option>
                                </select>

                            </div>
                            <div class='form-group'>
                                <div class="col-xs-6">
                                    <label>Upload image</label>
                                    <input type="file" name="image"  >
                                </div>
                                <div class="col-xs-6">

                                    <img class="member-online img-rounded" style="width: 100px;height: 100px;" src="{{ asset(!empty($slider->Image->image)?$slider->Image->image:'') }}" alt="Slider Image">
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
