@extends('frontend::layouts.master')
@section('content')
    @php
        $coreServicePage = getPage('core_service');
        $services = getServices();
        $settings = getSetting();
        $page ="service";
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
                    <h3 class="page_caption">{{ $coreServicePage->subtitle }}</h3>
                </div>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="{{ url('/') }}">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">{{ $coreServicePage->subtitle }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="page_content_wrap scheme_default" style="margin-top: 70px">
                <div class="content_wrap">
                    <div class="content">
                        <article class="post_item_single page hentry">
                            <div class="post_content entry-content">
                                <div class="vc_row wpb_row vc_row-fluid fullwidth_1">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space empty_7-3" style="height: 1.3em;">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid fullwidth_1">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <h5 class="cblue">{{ $coreServicePage->title }}</h5>
                                                        <h2>{{ $coreServicePage->description }}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space empty_3">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        {!! $coreServicePage->content !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid fullwidth_1">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space empty_3">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                                <div class="sc_services sc_services_default" data-slides-per-view="4"
                                                     data-slides-min-width="150">
                                                    <div class="sc_services_columns sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                                        @foreach($services as $service)
                                                            <div class="trx_addons_column-1_4">
                                                                <div class="sc_services_item">
                                                                    <div class="sc_services_item_info">
                                                                        <div class="sc_services_item_header">
                                                                            <div class="sc_services_item_icon ">
                                                                                <a href="{{ url('service/'.$service->id) }}">
                                                                                    <i class="{{ $service->logo }}"></i>
                                                                                </a>
                                                                            </div>
                                                                            <h5 class="sc_services_item_title">
                                                                                <a href="{{ url('service/'.$service->id) }}">{{ $service->title }}</a>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="vc_empty_space empty_7">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
@stop
