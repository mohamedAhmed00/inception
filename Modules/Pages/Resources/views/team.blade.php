@extends('base::layouts.master')
@section('content')
    <section class="content-title">
        <h1>
            Edit Team Page
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href={{ url('_admin_/base') }}><i class="fa fa-home"></i>Dashboard</a></li>
            <li class="active">Edit Team</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-form">
            <div class="box-header">
                <h3 class="box-title">Team Page</h3>
            </div>
            <!-- /.box-header -->
            <form action="{{ url('_admin_/page/team') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='form-group'>
                                <label>Page Title</label>
                                <input class="form-control" placeholder="Type Page Title" id="title" name="title"
                                       value="{{ empty(old('title'))? isset($page)?$page->title:''  : old('title') }}"   type="text"/>
                            </div>
                        </div>
                        <div class='col-md-12'>
                            <div class='form-group'>
                                <label>Page SubTitle</label>
                                <input class="form-control" placeholder="Type Page SubTitle" id="subtitle"
                                       value="{{ empty(old('subtitle'))? isset($page)?$page->subtitle:''  : old('subtitle') }}"   name="subtitle" type="text"/>
                            </div>
                        </div>
                        <div class='col-md-12'>
                            <div class='form-group'>
                                <label>Description</label>
                                <input class="form-control" id="description" name="description" type="text"
                                       value="{{ empty(old('description'))? isset($page)?$page->description:''  : old('description') }}"   placeholder="Type Short Description Team This Page"/>
                            </div>
                        </div>
                        <div class='col-md-12'>
                            <div class='form-group'>
                                <label>Content</label>
                                <textarea name="content" id="" placeholder="type All Content here . . . ." cols="30"
                                          rows="10">{{ empty(old('content'))? isset($page)?$page->content:''  : old('content') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class='form-group'>
                                <div class="col-xs-6">
                                    <label>Upload image</label>
                                    <input type="file" name="image"  >
                                </div>
                                <div class="col-xs-6">

                                    <img class="member-online img-rounded" style="width: 100px;height: 100px;" src="{{ asset(!empty($page->Image->image)?$page->Image->image:'') }}" alt="Team Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top: 20px;">
                            <div class='form-group'>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
