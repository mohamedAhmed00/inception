@extends('frontend::layouts.master')
@section('content')
    @php
        $aboutPage = getPage('about');
        $settings = getSetting();
        $page = "about";
    @endphp
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
            <div class="page_content_wrap scheme_default" style="margin-top: 70px">
                <div class="content_wrap">
                    <div class="content">
                        <article class="post_item_single page hentry">
                            <div class="post_content entry-content">
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey">
                                                            <img src="{{ asset($aboutPage->Image->image) }}" class="vc_single_image-img attachment-full" alt="" />
                                                        </div>
                                                    </figure>
                                                </div>
                                                <div class="vc_empty_space empty_6-4">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <h5 class="cblue">{{ $aboutPage->subtitle }}</h5>
                                                        <h1>{{ $aboutPage->title }}</h1>
                                                        <p>
                                                            {{ $aboutPage->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="vc_empty_space empty_6-4">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid fullwidth_1">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space empty_4-1">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page_content_wrap scheme_default" style="margin-top: 50px">
                                    <div class="content_wrap">
                                        <div class="content">
                                            <article class="services_item_page cpt_services type-cpt_services hentry">
                                                <div class="services_item_content entry-content">
                                                    {!! $aboutPage->content !!}
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
@stop
