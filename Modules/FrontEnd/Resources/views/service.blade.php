@extends('frontend::layouts.master')
@section('content')
    @php
        $settings = getSetting();
        $page ="service";
    @endphp
    <div class="top_panel_title_wrap">
        <div class="content_wrap">
            <div class="top_panel_title">
                <div class="page_title">
                    <h3 class="page_caption">{{ $service->title }}</h3>
                </div>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="{{ url('/') }}">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">{{ $service->title }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="page_content_wrap scheme_default" style="margin-top: 50px">
        <div class="content_wrap">
            <div class="content">
                <article class="services_item_page cpt_services type-cpt_services hentry">
                    <h3>{{ $service->description }}</h3>
                    <div class="services_item_content entry-content">
                        {!! $service->content !!}
                    </div>
                </article>
            </div>
        </div>
    </div>
@stop
