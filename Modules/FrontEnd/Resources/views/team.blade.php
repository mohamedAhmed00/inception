@extends('frontend::layouts.master')
@section('content')
    @php
        $settings = getSetting();
        $page ="about";
    @endphp
    <div class="top_panel_title_wrap">
        <div class="content_wrap">
            <div class="top_panel_title">
                <div class="page_title">
                    <h3 class="page_caption">{{ $team->name }}</h3>
                </div>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="{{ url('/') }}">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">{{ $team->name }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="page_content_wrap scheme_default" style="margin-top: 50px;">
        <div class="content_wrap">
            <div class="content">
                <article class="team_member_page cpt_team type-cpt_team has-post-thumbnail hentry">
                    <div class="team_member_content entry-content">
                        <div class="vc_row wpb_row vc_row-fluid fullwidth_1">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                                    <img src="{{ (!empty($team->Image))?$team->Image->image :'' }}" class="vc_single_image-img attachment-full" alt="" />
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="vc_empty_space empty_3">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-8">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper uni1">
                                                <h5>{{ $team->job }}</h5>
                                                <h2>{{ $team->name }}</h2>
                                                {!! $team->description !!}

                                            </div>
                                        </div>
                                        <div class="vc_empty_space empty_3">
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
