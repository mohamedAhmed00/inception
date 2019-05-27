@extends('base::layouts.master')
@section('content')
<section class="content-title">
    <h1>
        Contact
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('_admin_/base') }}"><i class="fa fa-home"></i>Dashboard</a></li>
        <li class="active">Contact</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Contact</h3>
                </div>
                <div class="box-body no-padding">
                    <div class="mailbox-read-info">
                        <h3>Sender Name : {{ $contact->name }} </h3>
                        <br>
                        <h3>Message Subject : {{ $contact->subject }}</h3>
                        <br>
                        <h5>From: {{ $contact->email }}
                            <span class="mailbox-read-time pull-right">{{ $contact->created_at->diffForHumans() }}</span></h5>
                    </div>
                    <div class="mailbox-controls with-border text-center"><h2>Message Body</h2></div>
                    <div class="mailbox-read-message">
                        {!! $contact->message !!}
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{ route('contact.delete',$contact->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                </div>
            </div>
        </div>
    </div>
</section>
<span class="return-up"><i class="fa fa-chevron-up"></i></span>
@endsection
