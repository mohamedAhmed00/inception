@extends('frontend::layouts.master')
@section('content')
    @php
        $aboutPage = getPage('about');
        $settings = getSetting();
        $page = "about";
    @endphp
    <style>
        .vc_custom_1474881086363, .vc_custom_1474882301931
        {
            background: url("{{asset(!empty($missionPage->Image)?$missionPage->Image->image:'') }}") !important;
        }
        .sc_services_item .sc_services_item_icon  a
        {
            color: #5c6164 !important;
        }
        .sc_services_item:hover .sc_services_item_icon  a
        {
            color: #FFF !important;
        }
    </style>
    <div class="top_panel_title_wrap">
        <div class="content_wrap">
            <div class="top_panel_title">
                <div class="page_title">
                    <h3 class="page_caption">{{ $aboutPage->title }}</h3>
                </div>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="{{ url('/') }}">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">{{ $aboutPage->title }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="page_content_wrap scheme_default" style="margin-top: 50px">
        <div class="content_wrap">
            <div class="content">
                <article class="services_item_page cpt_services type-cpt_services hentry">
                    <h3>{{ $aboutPage->description }}</h3>
                    <div class="services_item_content entry-content">
                        {!! $aboutPage->content !!}
                    </div>
                </article>
            </div>
        </div>
    </div>
@stop
