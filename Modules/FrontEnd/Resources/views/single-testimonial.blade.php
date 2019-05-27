@extends('frontend::layouts.master')
@section('content')
    @php
        $settings = getSetting();
        $page ="testimonial";
    @endphp
    <div class="top_panel_title_wrap">
        <div class="content_wrap">
            <div class="top_panel_title">
                <div class="page_title">
                    <h3 class="page_caption">{{ $testimonial->title }}</h3>
                </div>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="{{ url('/') }}">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <a class="breadcrumbs_item home" href="{{ url('/testimonial') }}">Testimonials</a>
                </div>
            </div>
        </div>
    </div>
    <div class="top_panel">
        <div class="post_featured post_featured_fullwide" style="background-image: url({{ asset(!empty($testimonial->Image)?$testimonial->Image->image:'') }});"></div>
    </div>
    <div class="page_content_wrap scheme_default"  style="margin-top: 70px; margin-bottom: 30px">
        <div class="content_wrap">
            <div class="content">
                <article class="post_item_single post_type_post post has-post-thumbnail hentry">
                    <div class="post_content entry-content">
                        {!! $testimonial->content !!}
                    </div>
                </article>
            </div>
        </div>
    </div>

@stop
