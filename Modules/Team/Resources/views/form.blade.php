@extends('base::layouts.master')
@section('content')
    <section class="content-title">
        <h1>
            {{ isset($team)? 'Edit Team : ' . $team->title : 'Add New Team' }}
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href={{ url('_admin_/base') }}><i class="fa fa-home"></i>Dashboard</a></li>
            <li class="active">{{ isset($team)? 'Edit Team '  : 'Add New Team' }} </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-form">
            <div class="box-header">
                <h3 class="box-title col-xs-6">{{ isset($team)? 'Edit Team : ' . $team->title : 'Add New Team' }} </h3>
                @if(isset($team))
                    <h3 class="col-xs-6 text-right"><a href="{{ url('_admin_/teams/add') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus text-capitalize"> Create New </i></a></h3>
                @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-12">
                    <form enctype="multipart/form-data" action="{{ isset($team)? route('team.update',$team->id) : route('team.store') }}" method="post">
                        @csrf
                        {{ isset($team)? method_field('patch') :'' }}
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Name</label>
                                    <input class="form-control" placeholder="Type Team Title" value="{{ empty(old('name'))? isset($team)?$team->name:''  : old('name') }}" id="name" name="name" type="text" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Job</label>
                                    <input class="form-control" placeholder="Type Job" value="{{ empty(old('job'))? isset($team)?$team->job:''  : old('job') }}" id="job" name="job" type="text" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Description</label>
                                    <textarea name="description" id="" placeholder="type All Description here . . . ." cols="30" rows="10">{!! empty(old('description'))? isset($team)?$team->description:'' :  old('description') !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option value="1" {{ (isset($team) AND $team->status == '1')?'selected':'' }} >Activate</option>
                                    <option value="0" {{ (isset($team) AND $team->status == '0')?'selected':'' }}>Deactivate</option>
                                </select>

                            </div>
                            <div class='form-group'>
                                <div class="col-xs-6">
                                    <label>Upload image</label>
                                    <input type="file" name="image"  >
                                </div>
                                <div class="col-xs-6">

                                    <img class="member-online img-rounded" style="width: 100px;height: 100px;" src="{{ asset(!empty($team->Image->image)?$team->Image->image:'') }}" alt="Team Image">
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
        CKEDITOR.replace('description');
    </script>
@stop
