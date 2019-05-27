@extends('frontend::layouts.master')
@section('content')
    @php
        $settings = getSetting();
        $page ="contact";
    @endphp
    <style>
        iframe {
            width: 100% !important;
        }
    </style>
    <div class="top_panel_title_wrap">
        <div class="content_wrap">
            <div class="top_panel_title">
                <div class="page_title">
                    <h3 class="page_caption">Contact</h3>
                </div>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="{{ url('/') }}">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">Contact</span>
                </div>
            </div>
        </div>
    </div>
    <div class="page_content_wrap scheme_default">
        <div class="content_wrap">
            <div class="content">
                <article class="post_item_single page hentry">
                    <div class="post_content entry-content">
                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                             class="vc_row wpb_row vc_row-fluid vc_row-no-padding fullwidth_1">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        {!! (!empty($settings['map']))? $settings['map']->value : '' !!}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        @if ($errors->any())
                        <div style="background: #ff2c01;margin-top: 50px;" class="sc_content sc_content_default sc_float_left sc_align_left bg_gradient sc_content_width_1_1 sc_padding_small">
                            <div class="sc_content_container">
                                <div class="vc_empty_space empty_3">
                                    <span class="vc_empty_space_inner"></span>
                                </div>
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                        <h4 style="color: #FFF;">{{ $error }}</h4>
                                        @endforeach
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(session()->has('successful'))
                            <div style="background: #5C6164;margin-top: 50px" class="bg-success sc_content sc_content_default sc_float_left sc_align_left bg_gradient sc_content_width_1_1 sc_padding_small">
                                <div class="sc_content_container">
                                    <div class="vc_empty_space empty_3">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                          <h4 style="color: #FFF;">{{ session()->get('successful') }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid fullwidth_1">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space empty_5-7">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <div class="sc_form sc_form_modern">
                                            <form class="" method="post" action="{{ url('contact') }}">
                                                @csrf
                                                <div class="sc_form_info">
                                                    <div class="trx_addons_columns_wrap columns_padding_bottom">
                                                        <div class="trx_addons_column-1_3">
                                                            <div class="sc_form_info_item sc_form_info_item_address">
                                                                <span class="sc_form_info_icon"></span>
                                                                <span class="sc_form_info_data">
                                                                    <span>{{ (!empty($settings['address']))? $settings['address']->value : '' }}</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="trx_addons_column-1_3">
                                                            <div class="sc_form_info_item sc_form_info_item_email">
                                                                <span class="sc_form_info_icon"></span>
                                                                <span class="sc_form_info_data">
                                                                            <a href="mailto:{{ (!empty($settings['email']))? $settings['email']->value : '' }}">
                                                                                {{ (!empty($settings['email']))? $settings['email']->value : '' }}
                                                                                <br>{{ (!empty($settings['website']))? $settings['website']->value : '' }}
                                                                            </a>
                                                                        </span>
                                                            </div>
                                                        </div>
                                                        <div class="trx_addons_column-1_3">
                                                            <div class="sc_form_info_item sc_form_info_item_phone">
                                                                <span class="sc_form_info_icon"></span>
                                                                <span class="sc_form_info_data">
                                                                            <span>{{ (!empty($settings['phone number']))? $settings['phone number']->value : '' }}</span>
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sc_form_fields">
                                                    <div class="trx_addons_columns_wrap">
                                                        <div class="sc_form_details trx_addons_column-1_2">
                                                            <label class="sc_form_field sc_form_field_name required">
                                                                    <span class="sc_form_field_wrap">
                                                                        <input type="text" name="name"
                                                                               aria-required="true" value="{{ old('name') }}"
                                                                               placeholder="Your name">
                                                                    </span>
                                                            </label>
                                                            <label class="sc_form_field sc_form_field_email required">
                                                                        <span class="sc_form_field_wrap">
                                                                            <input type="email" name="email" value="{{ old('email') }}"
                                                                                   aria-required="true" style="width: 100%;"
                                                                                   placeholder="Your e-mail">
                                                                        </span>
                                                            </label>
                                                            <label class="sc_form_field sc_form_field_name required">
                                                                    <span class="sc_form_field_wrap">
                                                                        <input type="text" name="subject"
                                                                               aria-required="true" value="{{ old('subject') }}"
                                                                               placeholder="Your name">
                                                                    </span>
                                                            </label>
                                                        </div>
                                                        <div class="sc_form_message trx_addons_column-1_2">
                                                            <label class="sc_form_field sc_form_field_message required">
                                                                        <span class="sc_form_field_wrap">
                                                                            <textarea name="message"
                                                                                      aria-required="true"
                                                                                      placeholder="Your message">{{ old('message') }}</textarea>
                                                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="sc_form_field sc_form_field_button">
                                                        <button type="submit">Send Message</button>
                                                    </div>
                                                    <div class="trx_addons_message_box sc_form_result"></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="vc_empty_space empty_6">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@stop
