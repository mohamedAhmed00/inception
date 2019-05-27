<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">

<head>
    <title>{{ (!empty($settings['title']))? $settings['title']->value : '' }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="description" content="{{ (!empty($settings['meta description']))? $settings['meta description']->value : '' }}">
    <meta name="keywords" content="{{ (!empty($settings['meta keywords']))? $settings['meta keywords']->value : '' }}">
    <meta name="author" content="{{ (!empty($settings['meta auther']))? $settings['meta auther']->value : '' }}">
    <meta property="og:image" content="{{ (!empty($settings['logo']))? $settings['logo']->value : '' }}" data-dynamic="true">
    <meta property="og:image:width" content="300" data-dynamic="true">
    <meta property="og:image:height" content="366" data-dynamic="true">
    <style>
        .page_speed_2025287113 {
            height: auto !important;
        }

        .page_speed_1863966742 {
            height: 550px !important;
        }

        .page_speed_50499111 {
            background-image: url('http://blog.online.sa/uploads/3/header-min.png');
        }

        .page_speed_328646854 {
            direction: rtl;
        }

        .page_speed_1272336624 {
            background-image: url('images/world-map-dark.png');
            background-position: 50% 20px;
            background-repeat: no-repeat
        }

        .page_speed_981427158 {
            color: #000000;
            line-height: 2;
        }

        .page_speed_671771492 {
            color: #000
        }</style>
    <style id="fit-vids-style">
        .fluid-width-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }

        .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }</style>


    <link rel='stylesheet' href='{{ asset('inception/js/vendor/revslider/settings.css') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/js/vendor/magnific/magnific-popup.min.css') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/js/custom/trx/trx_addons_icons-embedded.css') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/js/custom/trx/trx_addons.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/js/vendor/js_comp/js_comp_custom.css') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/fonts/Carnas/stylesheet.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet'
          href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C800italic%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800&#038;subset=latin%2Clatin-ext&#038;ver=4.7.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/css/fontello/css/fontello.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/css/owl.carousel.min.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/css/style.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/css/animation.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/css/colors.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/css/styles.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/css/responsive.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/css/custom.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('inception/js/vendor/js_comp/font-awesome.min.css') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' href='{{ asset('resources/icons/font-awesome/css/font-awesome.min.css') }}' type='text/css'
          media='all'/>
    <link rel="icon" href="{{  asset((!empty($settings['favicon']))? $settings['favicon']->value : '') }}"
          sizes="32x32"/>
    <link rel="icon" href="{{  asset((!empty($settings['favicon']))? $settings['favicon']->value : '') }}"
          sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed"
          href="{{  asset((!empty($settings['favicon']))? $settings['favicon']->value : '') }}"/>
    <meta name="msapplication-TileImage"
          content="{{  asset((!empty($settings['favicon']))? $settings['favicon']->value : '') }}"/>




</head>

<body
    class="page body_style_wide scheme_default blog_mode_page sidebar_hide expand_content remove_margins header_title_off no_layout vc_responsive">

<div class="body_wrap">
    <div class="page_wrap">
        <header class="top_panel top_panel_style_2 scheme_default">
            <div class="top_panel_fixed_wrap" style="height: 144px;"></div>
            <div class="top_panel_navi scheme_dark" style="margin-top: 0px;">
                <div class="menu_main_wrap clearfix">
                    <div class="content_wrap">
                        <a class="logo scheme_dark" href="{{ url('/') }}">
                            <img src="{{  asset((!empty($settings['logo']))? $settings['logo']->value : '') }}"
                                 class="logo_main"
                                 alt="{{ (!empty($settings['title']))? $settings['title']->value : '' }}">
                        </a>
                        <nav class="menu_main_nav_area menu_hover_fade">
                            <div class="menu_main_inner">
                                <div class="contact_wrap scheme_dark ">
                                    <div
                                        class="phone_wrap icon-mobile">{{ (!empty($settings['phone number']))? $settings['phone number']->value : '' }}</div>

                                    <div class="socials_wrap">
                                            <span class="social_item">
                                                <a href="{{ (!empty($settings['twitter']))? $settings['twitter']->value : '' }}"
                                                   target="_blank" class="social_icons social_twitter">
                                                    <span class="trx_addons_icon-twitter"></span>
                                                </a>
                                            </span>
                                        <span class="social_item">
                                                <a href="{{ (!empty($settings['facebook']))? $settings['facebook']->value : '' }}"
                                                   target="_blank" class="social_icons social_facebook">
                                                    <span class="trx_addons_icon-facebook"></span>
                                                </a>
                                            </span>
                                        <span class="social_item">
                                                <a href="{{ (!empty($settings['google plus']))? $settings['google plus']->value : '' }}"
                                                   target="_blank" class="social_icons social_gplus">
                                                    <span class="trx_addons_icon-gplus"></span>
                                                </a>
                                            </span>
                                    </div>
                                    {{--<div class="search_wrap search_style_fullscreen">--}}
                                    {{--<div class="search_form_wrap">--}}
                                    {{--<form role="search" method="get" class="search_form" action="#">--}}
                                    {{--<input type="text" class="search_field" placeholder="Search" value="" name="s">--}}
                                    {{--<button type="submit" class="search_submit icon-search"></button>--}}
                                    {{--<a class="search_close icon-cancel"></a>--}}
                                    {{--</form>--}}
                                    {{--</div>--}}
                                    {{--<div class="search_results widget_area">--}}
                                    {{--<a href="#" class="search_results_close icon-cancel"></a>--}}
                                    {{--<div class="search_results_content"></div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                                <ul id="menu_main" class="sc_layouts_menu_nav menu_main_nav">
                                    <li class="{{ ($page == 'home')?'menu-item current-menu-ancestor current-menu-parent':'menu-item' }}"><a href="{{ url('/') }}"><span>Home</span></a></li>
                                    <li class="{{ ($page == 'about')?'menu-item current-menu-ancestor current-menu-parent':'menu-item' }}"><a href="{{ url('about') }}"><span>About Us</span></a></li>
                                    <li class="{{ ($page == 'service')?'menu-item current-menu-ancestor current-menu-parent':'menu-item' }}"><a href="{{ url('services') }}"><span>Services</span></a></li>
                                    <li class="{{ ($page == 'testimonial')?'menu-item current-menu-ancestor current-menu-parent':'menu-item' }}"><a
                                            href="{{ url('testimonial') }}"><span>Testimonial</span></a></li>
                                    <li class="{{ ($page == 'contact')?'menu-item current-menu-ancestor current-menu-parent':'menu-item' }}"><a href="{{ asset('contact') }}"><span>Contacts</span></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <a class="menu_mobile_button"></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="menu_mobile_overlay"></div>
        <div class="menu_mobile scheme_">
            <div class="menu_mobile_inner">
                <a class="menu_mobile_close icon-cancel"></a>
                <nav class="menu_mobile_nav_area">
                    <ul id="menu_mobile" class="sc_layouts_menu_nav menu_main_nav">
                        <li class="menu-item"><a href="{{ url('/') }}"><span>Home</span></a></li>
                        <li class="{{ ($page == 'about')?'menu-item current-menu-ancestor current-menu-parent':'menu-item' }}"><a href="{{ url('about') }}"><span>About Us</span></a></li>
                        <li class="menu-item"><a href="{{ url('services') }}"><span>Services</span></a></li>
                        <li class="menu-item"><a href="{{ url('testimonial') }}"><span>Testimonial</span></a></li>
                        <li class="menu-item"><a href="{{ asset('contact') }}"><span>Contacts</span></a></li>
                    </ul>
                </nav>
                {{--<div class="search_mobile">--}}
                {{--<div class="search_form_wrap">--}}
                {{--<form role="search" method="get" class="search_form" action="#">--}}
                {{--<input type="text" class="search_field" placeholder="Search ..." value="" name="s">--}}
                {{--<button type="submit" class="search_submit icon-search" title="Start search"></button>--}}
                {{--</form>--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="socials_mobile">
                        <span class="social_item">
                            <a href="{{ (!empty($settings['twitter']))? $settings['twitter']->value : '' }}"
                               target="_blank" class="social_icons social_twitter">
                                <span class="trx_addons_icon-twitter"></span>
                            </a>
                        </span>
                    <span class="social_item">
                            <a href="{{ (!empty($settings['facebook']))? $settings['facebook']->value : '' }}"
                               target="_blank" class="social_icons social_facebook">
                                <span class="trx_addons_icon-facebook"></span>
                            </a>
                        </span>
                    <span class="social_item">
                            <a href="{{ (!empty($settings['google plus']))? $settings['google plus']->value : '' }}"
                               target="_blank" class="social_icons social_gplus">
                                <span class="trx_addons_icon-gplus"></span>
                            </a>
                        </span>
                </div>
            </div>
        </div>
        @yield('content')

        <footer class="site_footer_wrap">
            <div class="footer_wrap widget_area scheme_dark">
                <div class="footer_wrap_inner widget_area_inner">
                    <div class="content_wrap">
                        <div class="columns_wrap">
                            <aside class="column-1_2 widget widget_text">
                                <div class="textwidget">
                                    <img src="{{  asset((!empty($settings['logo']))? $settings['logo']->value : '') }}"
                                         alt="{{ (!empty($settings['title']))? $settings['title']->value : '' }}">
                                    <ul class="trx_addons_list  icons">
                                        @if(!empty($settings['address']))
                                            <li class="icon-home-alt">{{  $settings['address']->value }}</li>
                                        @endif
                                        @if(!empty($settings['email']))
                                            <li class="icon-white">{{  $settings['email']->value  }}</li>
                                        @endif
                                        @if(!empty($settings['phone number']))
                                            <li class="icon-tablet">{{ $settings['phone number']->value }}</li>
                                        @endif
                                    </ul>
                                </div>
                            </aside>
                            <aside class="column-1_4 widget widget_nav_menu">
                                <h5 class="widget_title">Important Links</h5>
                                <div class="menu-footer-links-container">
                                    <ul id="menu-footer-links" class="menu">
                                        <li class="menu-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="menu-item"><a href="{{ url('about') }}">About Us</a></li>
                                        <li class="menu-item"><a href="{{ url('services') }}">Services</a></li>
                                        <li class="menu-item"><a href="{{url('testimonial')}}">Testimonial</a></li>
                                        <li class="menu-item"><a href="{{ url('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="column-1_4 widget widget_text">
                                <h5 class="widget_title">Our Social</h5>
                                <div class="textwidget">
                                    <ul class="trx_addons_list  icons">
                                        @if(!empty($settings['phone number']))
                                            <li class="icon-facebook"><a
                                                    href="{{ (!empty($settings['facebook']))? $settings['facebook']->value : '' }}">Facebook</a>
                                            </li>
                                        @endif
                                        @if(!empty($settings['twitter']))
                                            <li class="icon-twitter"><a
                                                    href="{{ (!empty($settings['twitter']))? $settings['twitter']->value : '' }}">Twitter</a>
                                            </li>
                                        @endif
                                        @if(!empty($settings['linkedin']))
                                            <li class="icon-linkedin"><a
                                                    href="{{ (!empty($settings['linkedin']))? $settings['linkedin']->value : '' }}">Linkedin</a>
                                            </li>
                                        @endif @if(!empty($settings['google plus']))
                                            <li class="icon-gplus"><a
                                                    href="{{ (!empty($settings['google plus']))? $settings['google plus']->value : '' }}">Google
                                                    Plus</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright_wrap scheme_dark">
                <div class="copyright_wrap_inner">
                    <div class="content_wrap">
                        <div class="copyright_text">
                            <div class="columns_wrap">
                                <div
                                    class="column-1_2">{{ (!empty($settings['copy right']))? $settings['copy right']->value : '' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script><script type='text/javascript' src='{{ asset('inception/js/vendor/jQuery/jquery-migrate.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/custom/custom.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/vendor/revslider/jquery.themepunch.tools.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/vendor/revslider/jquery.themepunch.revolution.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/vendor/revslider/extensions/revolution.extension.slideanims.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/vendor/revslider/extensions/revolution.extension.actions.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/vendor/revslider/extensions/revolution.extension.layeranimation.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/vendor/revslider/extensions/revolution.extension.navigation.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/vendor/magnific/jquery.magnific-popup.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/custom/trx/trx_addons.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/custom/scripts.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/custom/embed.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/vendor/js_comp/js_comp.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/vendor/js_comp/waypoints.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('inception/js/owl.carousel.min.js') }}'></script>
@yield('script')


<a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
</body>

</html>

