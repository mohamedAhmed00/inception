@extends('frontend::layouts.master')
@section('content')

    @php
        $sliders = getSliderItem();
        $teamPage = getPage('team');
        $teams = getTeam();
        $coreServicePage = getPage('core_service');
        $services = getServices();
        $settings = getSetting();
        $page ="home";
        $testimonials = getTestimonial();
        $clients = getClients(12);
    @endphp
    <style>
        .vc_custom_1474881086363, .vc_custom_1474882301931 {
            background: url("{{asset(!empty($missionPage->Image)?$missionPage->Image->image:'') }}") !important;
        }

        .sc_services_item .sc_services_item_icon a {
            color: #5c6164 !important;
        }

        .sc_services_item:hover .sc_services_item_icon a {
            color: #FFF !important;
        }

        @foreach($sliders as $slider)
            #slide-{{ $slider->id }}-layer-1 {
            z-index: 6;
            white-space: nowrap;
            font-size: 18px;
            line-height: 18px;
            font-weight: 400;
            color: rgba(28, 153, 189, 1.00);
            font-family: 'Carnas Light';
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        #slide-{{ $slider->id }}-layer-2 {
            z-index: 7;
            white-space: nowrap;
            font-size: 55px;
            line-height: 55px;
            font-weight: 400;
            color: rgba(32, 32, 32, 1.00);
            font-family: 'Carnas Light';
        }

        #slide-{{ $slider->id }}-layer-3 {
            z-index: 8;
            white-space: nowrap;
            font-size: 13px;
            line-height: 62px;
            font-weight: 400;
            color: rgba(255, 255, 255, 1.00);
            font-family: 'Carnas Light';
            text-transform: uppercase;
            background: linear-gradient(to right, #5C6164 0%, #5c6164 100%);
            letter-spacing: 3px;
            cursor: pointer;
        }

        #slide-{{ $slider->id }}-layer-4 {
            z-index: 5;
            background-color: rgba(255, 255, 255, 0.50);
        }

        @endforeach

        .sc_services_item:hover .image-container {
            background-image: none !important;
        }

        .sc_services_item:hover .image-container a {
            color: #000 !important;
        }

        .sc_services_item:hover .image-container a {
            color: #FFF !important;
        }
        .owl-carousel .item
        {
            height: 500px;
            width: 100%;

        }
        #testimonials_item
        {
            background: rgba(0,0,0,.8);
            width: 100%;
            height: 100%;
        }
        .testimonials_info
        {
            position: absolute;
            bottom: 10px;
        }
        .testimonials_info h1, .testimonials_info h2, .testimonials_info h3
        {
            text-transform: capitalize;
            color: #ff652f;
            font-weight: bold;
        }
        .testimonials_info h1
        {
            font-size: 30px;
        }
        .testimonials_info h2
        {
            font-size: 26px;
        }
        .testimonials_info h3
        {
            font-size: 22px;
        }

        @media (min-width: 320px) and (max-width: 767px) {
            .owl-carousel .item
            {
                height: 450px;
                width: 100%;

            }
            .our_client
            {
                display: none;
            }
            #testimonials_item
            {
            }
            #testimonials_item > div
            {
                padding: 20px !important;
                height: fit-content !important;
            }
            #testimonials_item > div p
            {
                font-size:24px !important;
                margin-top: 20px !important;
            }
            .testimonials_info_container
            {
                height: inherit !important;
            }
            .testimonials_info
            {
                position: static;
            }
        }
        /*.scheme_default .sc_services_default .sc_services_item:hover {*/
        /*    background-image: none !important;*/
        /*    background: linear-gradient(to right, #5C6164 0%, #5c6164 50%, #f1f6fb 0%, #f1f6fb 100%) no-repeat scroll right bottom/ 210% 100% rgba(0, 0, 0, 0) !important;*/
        /*}*/
    </style>
    <div class="page_content_wrap scheme_default">
        <div class="content_wrap">
            <div class="content">
                <article id="post-5" class="post_item_single post-5 page hentry">
                    <div class="post_content entry-content">
                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                             class="vc_row wpb_row vc_row-fluid bg_gradient vc_custom_1468158242558 vc_row-has-fill fullwidth_1">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div id="rev_slider_4_1_wrapper"
                                             class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery">

                                            <div id="rev_slider_4_1" class="rev_slider fullwidthabanner"
                                                 data-version="5.3.1.5">
                                                <ul>
                                                    @foreach ($sliders as $slider)
                                                        <li data-index="rs-{{ $slider->id }}" data-transition="fade"
                                                            data-slotamount="default" data-hideafterloop="0"
                                                            data-hideslideonmobile="off" data-easein="default"
                                                            data-easeout="default" data-masterspeed="300"
                                                            data-thumb="{{ asset(!empty($slider->Image)?$slider->Image->image:'') }}"
                                                            data-rotate="0"
                                                            data-saveperformance="off" data-title="Slide" data-param1=""
                                                            data-param2="" data-param3="" data-param4="" data-param5=""
                                                            data-param6="" data-param7="" data-param8="" data-param9=""
                                                            data-param10="" data-description="">
                                                            <img
                                                                src="{{ asset(!empty($slider->Image)?$slider->Image->image:'') }}"
                                                                alt="" title="2" width="1170"
                                                                height="593" data-bgposition="center center"
                                                                data-bgfit="cover" data-bgrepeat="no-repeat"
                                                                class="rev-slidebg" data-no-retina>
                                                            <div class="tp-caption tp-resizeme"
                                                                 id="slide-{{$slider->id}}-layer-1"
                                                                 data-x="['left','left','left','left']"
                                                                 data-hoffset="['120','120','60','30']"
                                                                 data-y="['top','top','top','top']"
                                                                 data-voffset="['150','150','150','150']"
                                                                 data-width="none"
                                                                 data-height="none" data-whitespace="nowrap"
                                                                 data-type="text" data-responsive_offset="on"
                                                                 data-frames='[{"from":"y:top;","speed":700,"to":"o:1;","delay":1200,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                                                 data-textAlign="['left','left','left','left']"
                                                                 data-paddingtop="[0,0,0,0]"
                                                                 data-paddingright="[0,0,0,0]"
                                                                 data-paddingbottom="[0,0,0,0]"
                                                                 data-paddingleft="[0,0,0,0]">{{ $slider->subtitle }}
                                                            </div>
                                                            <div class="tp-caption tp-resizeme"
                                                                 id="slide-{{$slider->id}}-layer-2"
                                                                 data-x="['left','left','left','left']"
                                                                 data-hoffset="['120','120','60','30']"
                                                                 data-y="['top','top','top','top']"
                                                                 data-voffset="['180','180','180','180']"
                                                                 data-width="none" data-height="none"
                                                                 data-whitespace="nowrap" data-type="text"
                                                                 data-responsive_offset="on"
                                                                 data-frames='[{"from":"x:50px;opacity:0;","speed":700,"to":"o:1;","delay":700,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                                                 data-textAlign="['left','left','left','left']"
                                                                 data-paddingtop="[0,0,0,0]"
                                                                 data-paddingright="[0,0,0,0]"
                                                                 data-paddingbottom="[0,0,0,0]"
                                                                 data-paddingleft="[0,0,0,0]"
                                                                 style="width: 50%;">{{ $slider->title }}
                                                                <br> {{ $slider->second_title }}
                                                            </div>
                                                            <div class="tp-caption tp-resizeme"
                                                                 id="slide-{{$slider->id}}-layer-3"
                                                                 data-x="['left','left','left','left']"
                                                                 data-hoffset="['120','120','60','30']"
                                                                 data-y="['top','top','top','top']"
                                                                 data-voffset="['357','357','357','357']"
                                                                 data-width="none"
                                                                 data-height="none" data-whitespace="nowrap"
                                                                 data-type="text"
                                                                 data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"{{ $slider->link }}","delay":""}]'
                                                                 data-responsive_offset="on"
                                                                 data-frames='[{"from":"y:50px;opacity:0;","speed":700,"to":"o:1;","delay":1700,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;background:linear-gradient(to right,#FF652F 0%,#FF652F 100%);"}]'
                                                                 data-textAlign="['left','left','left','left']"
                                                                 data-paddingtop="[0,0,0,0]"
                                                                 data-paddingright="[50,50,50,50]"
                                                                 data-paddingbottom="[0,0,0,0]"
                                                                 data-paddingleft="[50,50,50,50]">More info
                                                            </div>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid fullwidth_1">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space empty_6-8">
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
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper" style="text-align: center">
                                                @if(!(empty($coreServicePage->Image->image)))
                                                    <img src="{{ $coreServicePage->Image->image }}" style="width: 50%"
                                                         alt="">
                                                @else
                                                    {!! $coreServicePage->content !!}
                                                @endif
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
                                            <div
                                                class="sc_services_columns sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                                @foreach($services as $service)
                                                    <div class="trx_addons_column-1_4">
                                                        <div class="sc_services_item">
                                                            <div class="image-container"
                                                                 @if(!empty($service->Image->image))
                                                                 style="background-image: url('{{ $service->Image->image  }}')"
                                                                @endif
                                                            >
                                                                <div class="sc_services_item_info">
                                                                    <div class="sc_services_item_header">
                                                                        <div class="sc_services_item_icon ">
                                                                            <a href="{{ url('service/'.$service->id) }}">
                                                                                <i class="{{ $service->logo }}"></i>
                                                                            </a>
                                                                        </div>
                                                                        <h5 class="sc_services_item_title"
                                                                            style="height: 50px">
                                                                            <a href="{{ url('service/'.$service->id) }}">{{ $service->title }}</a>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_row-has-fill" >
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <h1 style="margin: 40px auto;text-align: center;text-transform: capitalize">Our Statistics</h1>
                                        <div id="sc_skills_807" class="sc_skills sc_skills_counter" data-type="counter">
                                            <div class="sc_skills_columns sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                                <div class="sc_skills_column trx_addons_column-1_4">
                                                    <div class="sc_skills_item_wrap">
                                                        <div class="sc_skills_item inited">
                                                            <div class="sc_skills_icon icon-target"></div>
                                                            <div class="sc_skills_total" data-start="0" data-stop="1273" data-step="5" data-max="536" data-speed="37" data-duration="9420" data-ed="">1273</div>
                                                        </div>
                                                        <div class="sc_skills_item_title">Company We Help</div>
                                                    </div>
                                                </div>
                                                <div class="sc_skills_column trx_addons_column-1_4">
                                                    <div class="sc_skills_item_wrap">
                                                        <div class="sc_skills_item inited">
                                                            <div class="sc_skills_icon icon-briefcase"></div>
                                                            <div class="sc_skills_total" data-start="0" data-stop="103" data-step="5" data-max="536" data-speed="20" data-duration="412" data-ed="">103</div>
                                                        </div>
                                                        <div class="sc_skills_item_title">Corporate Programs</div>
                                                    </div>
                                                </div>
                                                <div class="sc_skills_column trx_addons_column-1_4">
                                                    <div class="sc_skills_item_wrap">
                                                        <div class="sc_skills_item inited">
                                                            <div class="sc_skills_icon icon-tactics-1"></div>
                                                            <div class="sc_skills_total" data-start="0" data-stop="663" data-step="5" data-max="536" data-speed="22" data-duration="2917" data-ed="">663</div>
                                                        </div>
                                                        <div class="sc_skills_item_title">Trainings Cources</div>
                                                    </div>
                                                </div>
                                                <div class="sc_skills_column trx_addons_column-1_4">
                                                    <div class="sc_skills_item_wrap">
                                                        <div class="sc_skills_item inited">
                                                            <div class="sc_skills_icon icon-avatar"></div>
                                                            <div class="sc_skills_total" data-start="0" data-stop="245" data-step="5" data-max="536" data-speed="19" data-duration="931" data-ed="">245</div>
                                                        </div>
                                                        <div class="sc_skills_item_title">Strategic Partners</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_empty_space empty_6">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_row wpb_row vc_row-fluid bg_position_center vc_row-has-fill fullwidth_1">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper" >
                                        <div class="wpb_column vc_column_container vc_col-sm-4 scheme_dark our_client" style="position: absolute; bottom:0;left:8em; z-index: 9999;padding: 3em 3em 2em 3em ;text-align: center;margin-top: 13em;">
                                            <div class="sc_content_container">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <h1 style="margin-bottom: 0">Our Clients</h1>
                                                    </div>
                                                </div>
                                                <div class="sc_icons sc_icons_default sc_icons_size_small sc_align_left">
                                                    <div class="sc_icons_item">
                                                        <div class="sc_icons_icon sc_icons_icon_type_fontawesome icon-line" style="margin-left: 3em;">
                                                            <span class="sc_icons_icon_type_fontawesome icon-line" ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4 ">
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-8">
                                            <div id="sc_skills_807" class="sc_skills sc_skills_counter" data-type="counter">
                                                <div class="sc_skills_columns sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                                    @foreach($clients as $client)
                                                    <div class="sc_skills_column trx_addons_column-1_4">
                                                        <div class="sc_skills_item_wrap">
                                                            <img src="{{ !empty($service->Image) ? $service->Image->image : '' }}" alt="">
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="vc_empty_space empty_6">
                                                <span class="vc_empty_space_inner"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_row-has-fill" >
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space empty_6">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <h1 style="margin: 40px auto;text-align: center;text-transform: capitalize">Testimonials</h1>
                                        <div id="sc_skills_807" class="sc_skills sc_skills_counter" data-type="counter">
                                            <div class="sc_skills_columns sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                                <div class="owl-carousel owl-theme">
                                                    @foreach ($testimonials as $testimonial)
                                                        <div class="item" style="background:url({{ asset(!empty($testimonial->Image)?$testimonial->Image->image:'') }}) rgba(255,255,255,.5) ;background-size: 100% 100%; ">
                                                            <div id="testimonials_item">
                                                                <div class="wpb_column vc_column_container vc_col-sm-5" style="padding: 50px;">
                                                                    <p style="margin-top: 50px;color: #ff652f;font-weight: bold;font-size: 35px;letter-spacing: 2px;text-align: center;line-height: 45px"> {{ $testimonial->title }}</p>
                                                                </div>
                                                                <div class="wpb_column vc_column_container vc_col-sm-7 testimonials_info_container" style="height: 100%">
                                                                    <div class="testimonials_info">
                                                                            <h1>{{ $testimonial->person }}</h1>
                                                                            <h2>{{ $testimonial->person_title }}</h2>
                                                                            <h3>{{ $testimonial->company }}</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid fullwidth_1">
                            <div class="vc_empty_space empty_6">
                                <span class="vc_empty_space_inner"></span>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <h5 class="cblue"> {{ $teamPage->title }}</h5>
                                                <h2> {{ $teamPage->description }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space empty_3 hide_on_mobile">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                {!! $teamPage->content !!}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="vc_row wpb_row vc_row-fluid fullwidth_1">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="sc_courses sc_courses_default" data-slides-per-view="3" data-slides-min-width="150">
                                            <div class="sc_courses_columns sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                                @foreach($teams as $team)
                                                    <div class="trx_addons_column-1_3">
                                                        <div
                                                            class="sc_courses_item trx_addons_hover trx_addons_hover_style_links">
                                                            <div class="sc_courses_item_thumb">
                                                                <img src="{{ !empty($team->Image)?$team->Image->image:'' }}" alt=""/>
                                                                <span class="sc_courses_item_categories">
                                                                    <a href="{{ url('team/'.$team->id) }}">{{ $team->name }}</a>
                                                                </span>
                                                            </div>
                                                            <div class="sc_courses_item_info">
                                                                <div class="sc_courses_item_header">
                                                                    <h4 class="sc_courses_item_title"><a href="{{ url('team/'.$team->id) }}">{{ $team->name }}</a></h4>
                                                                    <br>
                                                                    <h4 class="sc_courses_item_title">{{ $team->job }}</h4>
                                                                </div>
                                                            </div>
                                                            <div class="trx_addons_hover_mask"></div>
                                                            <div class="trx_addons_hover_content">
                                                                <h3 class="trx_addons_hover_title">{{ $team->name }}</h3>
                                                                <br>
                                                                <h4 class="trx_addons_hover_title">{{ $team->job }}</h4>
                                                                <div class="trx_addons_hover_text">
                                                                    {!! $team->description !!}
                                                                </div>
                                                                <div class="trx_addons_hover_links">
                                                                    <a href="{{ url('team/'.$team->id) }}" class="trx_addons_hover_link sc_button_hover_slide_left">More Info</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
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
@section('script')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>
@stop
