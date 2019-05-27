@extends('base::layouts.master')
@section('content')
    <section class="content-title">
        <h1>
            {{ isset($client)? 'Edit Client : ' . $client->title : 'Add New Client' }}
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href={{ url('_admin_/base') }}><i class="fa fa-home"></i>Dashboard</a></li>
            <li class="active">{{ isset($client)? 'Edit Client '  : 'Add New Client' }} </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-form">
            <div class="box-header">
                <h3 class="box-title col-xs-6">{{ isset($client)? 'Edit Client : ' . $client->title : 'Add New Client' }} </h3>
                @if(isset($client))
                    <h3 class="col-xs-6 text-right"><a href="{{ url('_admin_/client/add') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus text-capitalize"> Create New </i></a></h3>
                @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-12">
                    <form enctype="multipart/form-data" action="{{ isset($client)? route('client.update',$client->id) : route('client.store') }}" method="post">
                        @csrf
                        {{ isset($client)? method_field('patch') :'' }}
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Title</label>
                                    <input class="form-control" placeholder="Type Client Title" value="{{ empty(old('title'))? isset($client)?$client->title:''  : old('title') }}" id="title" name="title" type="text" />
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class='form-group'>
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" id="" placeholder="type description here . . . ." cols="30" rows="10">{!! empty(old('description'))? isset($client)?$client->description:'' :  old('description') !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option value="1" {{ (!empty($client) AND $client->status == 1)?  'selected' : '' }}>Activate</option>
                                    <option value="0" {{ (!empty($client) AND $client->status == 0)?  'selected' : '' }}>Deactivate</option>
                                </select>

                            </div>
                            <div class='form-group'>
                                <div class="col-xs-6">
                                    <label>Upload image</label>
                                    <input type="file" name="image"  >
                                </div>
                                <div class="col-xs-6">

                                    <img class="member-online img-rounded" style="width: 100px;height: 100px;" src="{{ asset(!empty($client->Image->image)?$client->Image->image:'') }}" alt="Client Image">
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
@stop
