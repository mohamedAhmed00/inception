@extends('base::layouts.master')
@section('content')
    <section class="content-title">
        <h1>
            {{ isset($service)? 'Edit Service : ' . $service->title : 'Add New Service' }}
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href={{ url('_admin_/base') }}><i class="fa fa-home"></i>Dashboard</a></li>
            <li class="active">{{ isset($service)? 'Edit Service '  : 'Add New Service' }} </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-form">
            <div class="box-header">
                <h3 class="box-title col-xs-6">{{ isset($service)? 'Edit Service : ' . $service->title : 'Add New Service' }} </h3>
                @if(isset($service))
                    <h3 class="col-xs-6 text-right"><a href="{{ url('_admin_/services/add') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus text-capitalize"> Create New </i></a></h3>
                @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-12">
                    <form enctype="multipart/form-data" action="{{ isset($service)? route('service.update',$service->id) : route('service.store') }}" method="post">
                        @csrf
                        {{ isset($service)? method_field('patch') :'' }}
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Service Title</label>
                                    <input class="form-control" placeholder="Type Service Title" value="{{ empty(old('title'))? isset($service)?$service->title:''  : old('title') }}" id="title" name="title" type="text" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Description</label>
                                    <input class="form-control" id="description" name="description" value="{{ empty(old('description'))? isset($service)?$service->description:'' :  old('description') }}" type="text" placeholder="Type Short Description About This Page" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Content</label>
                                    <textarea name="content" id="" placeholder="type All Content here . . . ." cols="30" rows="10">{!! empty(old('content'))? isset($service)?$service->content:'' :  old('content') !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option value="1" selected>Activate</option>
                                    <option value="0">Deactivate</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <button class="btn btn-success" type="button" id="icon_btn">Press Here To Select the logo</button>

                                <input class="form-control is-valid" placeholder="select the logo"  name="logo" type="text" value="{{ empty(old('logo'))? isset($service)?$service->logo:''  : old('logo') }}" id="icon" aria-invalid="false" aria-describedby="icon-error"><span id="icon-error" class="invalid-feedback" style="display: inline;"></span>

                            </div>

                            <div class='form-group'>
                                <div class="col-xs-6">
                                    <label>Upload image</label>
                                    <input type="file" name="image"  >
                                </div>
                                <div class="col-xs-6">
                                    <img class="member-online img-rounded" style="width: 100px;height: 100px;" src="{{ asset(!empty($service->Image->image)?$service->Image->image:'') }}" alt="Servcie Image">
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
