@extends('frontend::layouts.master')
@section('content')
    @php
        $testimonials = getTestimonial();
        $settings = getSetting();
        $page ="testimonial";
    @endphp
    <div class="top_panel_title_wrap">
        <div class="content_wrap">
            <div class="top_panel_title">
                <div class="page_title">
                    <h3 class="page_caption">Testimonials</h3>
                </div>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="{{ url('/') }}">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">Testimonials</span>
                </div>
            </div>
        </div>
    </div>
    <div class="page_content_wrap scheme_default" style="margin-top: 70px">
    <div class="content_wrap">
        <div class="content">
            <div class="columns_wrap posts_container">
                @foreach($testimonials as $testimonial)
                    <div class="column-1_2">
                        <article class="post_item post_layout_classic post_layout_classic_2 post has-post-thumbnail hentry">
                            <div class="post_featured with_thumb hover_dots">
                                <img width="1170" height="731" src="{{ asset(!empty($testimonial->Image)?$testimonial->Image->image:'') }}" class="attachment-hr_advisor-thumb-huge size-hr_advisor-thumb-huge" alt="" />
                                <div class="mask"></div>
                                <a href="{{ url('testimonial/'.$testimonial->id) }}" aria-hidden="true" class="icons">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                            <div class="post_header entry-header">
                                <div class="post_meta">
                                    <span class="post_meta_item post_date">
                                        <a href="{{ url('testimonial/'.$testimonial->id) }}">{{ $testimonial->created_at->diffForHumans() }}</a>
                                    </span>
                                </div>
                                <h3 class="post_title entry-title">
                                    <a href="{{ url('testimonial/'.$testimonial->id) }}" rel="bookmark">{{ $testimonial->title }}</a>
                                </h3>

                            </div>
                            <div class="post_content entry-content">
                                <div class="post_content_inner">
                                    <p>
                                        {{ $testimonial->description }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@stop
