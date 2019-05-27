@extends('base::layouts.master')
@section('content')
    <section class="content-title">
        <h1>
            All Contacts
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('_admin_/base') }}"><i class="fa fa-home"></i>Dashboard</a></li>
            <li class="active">Contacts</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title col-xs-6">Contact</h3>
                    </div>
                    <div class="box-body">
                        <table id="payments" class="table responsive">
                            <thead>
                            <tr>
                                <th># Contact</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Seen</th>
                                <th>View</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td class="text-center"><a href="{{ route('contact.show',$contact->id) }}">{{ $loop->iteration }}</a></td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{!! substr($contact->message,0,50) !!}</td>
                                    <td>{{ ($contact->seen == 0)? 'unread' : 'read' }}</td>
                                    <td><a href="{{ route('contact.show',$contact->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye text-capitalize"> View </i></a></td>
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
