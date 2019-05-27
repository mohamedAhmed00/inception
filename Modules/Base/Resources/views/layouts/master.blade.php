@php
    $contacts = getAllUnReadContacts();
    $allContacts = getAllContacts();
    $admin = getAdmin();
@endphp
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inception Admin</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="{{ asset('resources/img/favicon.ico') }}" />
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
        <link href="{{ asset('resources/icons/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('resources/icons/themify-icons/themify-icons.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('vendor/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('resources/css/main-style.min.css') }}">
        <link rel="stylesheet" href="{{ asset('resources/css/skins/all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('resources/css/demo.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.css') }}">


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="page-loader-wrapper" >
            <div class="loader">
                <div class="preloader">
                    <svg class='part' x="0px" y="0px" viewBox="0 0 256 256" style="enable-background:new 0 0 256 256;" xml:space="preserve">
                    <path class="svgpath" id="playload" d="M189.5,140.5c-6.6,29.1-32.6,50.9-63.7,50.9c-36.1,0-65.3-29.3-65.3-65.3
                          c0,0,17,0,23.5,0c10.4,0,6.6-45.9,11-46c5.2-0.1,3.6,94.8,7.4,94.8c4.1,0,4.1-92.9,8.2-92.9c4.1,0,4.1,83,8.1,83
                          c4.1,0,4.1-73.6,8.1-73.6c4.1,0,4.1,63.9,8.1,63.9c4.1,0,4.1-53.9,8.1-53.9c4.1,0,4.1,44.1,8.2,44.1c4.1,0,3.1-34.5,7.2-34.5
                          c4.1,0,3.1,24.6,7.2,24.6c4.1,0,2.5-14.5,5.2-14.5c2.2,0,0.8,5.1,4.2,4.9c0.4,0,13.1,0,13.1,0c0-34.4-27.9-62.3-62.3-62.3
                          c-27.4,0-50.7,17.7-59,42.3" />
                    <path class="svgbg" d="M61,126c0,0,16.4,0,23,0c10.4,0,6.6-45.9,11-46c5.2-0.1,3.6,94.8,7.4,94.8c4.1,0,4.1-92.9,8.2-92.9
                          c4.1,0,4.1,83,8.1,83c4.1,0,4.1-73.6,8.1-73.6c4.1,0,4.1,63.9,8.1,63.9c4.1,0,4.1-53.9,8.1-53.9c4.1,0,4.1,44.1,8.2,44.1
                          c4.1,0,3.1-34.5,7.2-34.5c4.1,0,3.1,24.6,7.2,24.6c4.1,0,2.5-14.5,5.2-14.5c2.2,0,0.8,5.1,4.2,4.9c0.4,0,22.5,0,23,0" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <header class="top-menu-header">
                <a href="{{ url('_admin_/base') }}" class="logo">
                    <span class="logo-mini"><b>I</b>NC</span>
                    <span class="logo-lg"><b>INCEPTION </b>ADMIN</span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a class="sidebar-toggle fa-icon" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-top-menu">
                        <ul class="nav navbar-nav">
                            {{--<li>--}}
                                {{--<a data-toggle="collapse" data-target="#top-menu-navbar-search" aria-expanded="false">--}}
                                    {{--<i class="fa fa-search"></i>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            <li>
                                <a id="fullscreen-page" role="button"><i class="fa fa-arrows-alt"></i></a>
                            </li>
                            <li class="dropdown messages-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">{{ count($contacts) }}</span>
                                </a>
                                <ul class="dropdown-menu animated flipInX">
                                    <li class="header">{{ count($contacts) }} message pending</li>
                                    <li>
                                        <ul class="menu">
                                            @foreach($contacts as $contact)
                                                <li>
                                                    <a href="{{ route('contact.show',$contact->id) }}">
                                                        <h4 style="margin: 0;">
                                                            {{ $contact->name }}
                                                            <small><i class="fa fa-clock-o"></i> {{ $contact->created_at->diffForHumans() }}</small>
                                                        </h4>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="{{ url('contact') }}">See All Messages</a></li>
                                </ul>
                            </li>
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" data-toggle="dropdown" aria-expanded="false">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">{{ $admin->name }}<i class="fa fa-angle-down pull-right"></i></span>
                                    <!-- The user image in the navbar-->
                                    <img src="{{ asset('resources/img/icons/icon-user.png') }}" class="user-image" alt="User Image">
                                </a>
                                <ul class="dropdown-menu user-menu animated flipInY">
                                    <li><a href="{{ route('user.show') }}"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="{{ url('_admin_/setting') }}"><i class="ti-settings"></i> Setting</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button style="background: none;border: none"><i class="ti-power-off"></i> Log Out</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Form Navbar Search -->
                        <div class="collapse top-menu-navbar-search" id="top-menu-navbar-search">
                            <form>
                                <div class="form-group">
                                    <div class="input-search">
                                        <div class="input-group">
                                            <input type="text" id="navbar-search" name="search" class="form-control" placeholder="Search">
                                            <span class="input-group-addon">
                                                <a data-target="#top-menu-navbar-search" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="fa fa-times"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /. Form Navar Search -->
                    </div>
                </nav>
            </header>
            <aside class="sidebar-left">
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ asset((!empty($admin->Image)?$admin->Image->image:'resources/img/icons/icon-user.png')) }}" class="img-circle" alt="User Image">
                        </div>
                        <div class="info">
                            <p>{{ $admin->name }}</p>
                            <p><small>Admin</small>
                            </p>
                            <a href="{{ url('_admin_//base') }}"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                        <div class="report-today">
                            <h5>All Actions</h5>
                            <ul>
                                <li><span>{{ count(getServiceCount()) }}<i>Services</i></span></li>
                                <li><span>{{ count(getPageCount()) }}<i>Pages</i></span></li>
                                <li><span>{{ count($allContacts) }}<i>Contact</i></span></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="header">MAIN MENU</li>
                        <li class="treeview active"><a href="{{ url('_admin_/base') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                        <li class="treeview active"><a href="{{ url('_admin_/services') }}"><i class="fa fa-bookmark"></i> <span>Services</span></a></li>
                        <li class="treeview"><a href="{{ url('_admin_/contact') }}"><i class="fa fa-envelope"></i> <span>Contacts</span></a></li>
                        <li class="treeview"><a href="{{ url('_admin_/client') }}"><i class="fa fa-user-o"></i> <span>Clients</span></a></li>
                        <li class="treeview"><a href="{{ url('_admin_/slider') }}"><i class="fa fa-image"></i> <span>Slider</span></a></li>
                        <li class="treeview"><a href="{{ url('_admin_/team') }}"><i class="fa fa-group"></i> <span>Team</span></a></li>
                        <li class="treeview"><a href="{{ url('_admin_/testimonial') }}"><i class="fa fa-support"></i> <span>Testimonial</span></a></li>

                        <li class="treeview">
                            <a href="#"><i class="fa fa-files-o"></i> <span> Our Pages</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ url('_admin_/page/about') }}">About</a></li>
                                <li><a href="{{ url('_admin_/page/mission') }}">Mission</a></li>
                                <li><a href="{{ url('_admin_/page/core_service') }}">Core Service</a></li>
                                <li><a href="{{ url('_admin_/page/team') }}">team</a></li>
                            </ul>
                        </li>
                        <li class="treeview"><a href="{{ url('_admin_/setting') }}"><i class="fa fa-wrench"></i> <span>Website Setting</span></a></li>
                        <li class="treeview"><a href="{{ url('_admin_/users') }}"><i class="fa fa-user"></i> <span>Website Admins</span></a></li>
                    </ul>
                </section>
            </aside>
            <div class="content-wrapper">
                @yield('content')
            </div>
            <footer class="main-footer">
                <strong>Copyright &copy; reserved at {{ date('Y',time()) }} to <a href="http://www.nevdia.com">nevdia.com</a>.</strong>
                <div class="pull-right hidden-xs"></div>
            </footer>
        </div>
        <div class="modal modal-success fade" id="modal-success">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Action done successfully</h4>
                    </div>
                    <div class="modal-body">
                        <p>{{ session()->get('successful') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal modal-danger fade" id="modal-danger">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Error in Action ( Action Not Completed )</h4>
                    </div>
                    <div class="modal-body">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <script src="{{ asset('vendor/jQuery/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery-fullscreen/jquery.fullscreen-min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('vendor/fastclick/fastclick.min.js') }}"></script>
        <script src="{{ asset('vendor/chartjs/Chart.min.js') }}"></script>
        <script src="{{ asset('vendor/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('resources/js/app.min.js') }}"></script>
        <script src="{{ asset('resources/js/demo.js') }}"></script>
        <script src="{{ asset('resources/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('vendor/dropzone/dropzone.js') }}"></script>

        <script>
            @if ($errors->any())
                $("#modal-danger").modal('show');
            @endif
            @if(session()->has('successful'))
                $("#modal-success").modal('show');
            @endif

            $('.confirm').hide();

            $('.remove').click(function() {
                $(this).next('.confirm').show();
            });

            $('.keep-button').click(function() {
                $(this).parents('.confirm').hide();
            })

            $('.kill-button').click(function() {
                $(this).parents('.slab').addClass('deleted').slideUp();
            });

            $('.select_type').on('change', function(e) {
                $('.select_type_item').addClass('hidden');
                let selector = $(this).val();
                $('.'+selector).removeClass('hidden');
                $("#setting_type").val(selector);
            });
        </script>
        <style>
            #icon_btn{
                margin-bottom: 20px;
            }
        </style>
        <div class="modal fade bd-example-modal-lg model-take-icon" style="direction: ltr" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-success page_speed_72009264">
                        <h4 class="modal-title"><i class="til_img"></i><strong>select the logo</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="clearfix"></div>


                    <div class="modal-body with-padding page_speed_376774819">

                        <section id="new">
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-500px"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-amazon"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-balance-scale"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-battery-0"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-battery-1"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-battery-2"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-battery-3"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-battery-4"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-battery-empty"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-battery-full"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-battery-half"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-battery-quarter"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-battery-three-quarters"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-black-tie"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-calendar-check-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-calendar-minus-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-calendar-plus-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-calendar-times-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-diners-club"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-cc-jcb"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-chrome"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-clone"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-commenting"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-commenting-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-contao"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-creative-commons"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-expeditedssl"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-firefox"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-fonticons"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-genderless"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-get-pocket"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-gg"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-gg-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-hand-grab-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-lizard-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-paper-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-peace-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-pointer-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-rock-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-scissors-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-spock-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-stop-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-1"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-2"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-3"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-end"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-half"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-start"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-houzz"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-i-cursor"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-industry"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-internet-explorer"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-map"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-map-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-map-pin"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-map-signs"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mouse-pointer"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-object-group"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-object-ungroup"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-odnoklassniki"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-odnoklassniki-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-opencart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-opera"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-optin-monster"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-registered"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-safari"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sticky-note"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-sticky-note-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-television"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-trademark"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tripadvisor"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-tv"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-vimeo"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-wikipedia-w"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-y-combinator"></i></div>
                                <div class="fa-item col-md-3 col-sm-4"><i class="fa fa-yc"></i></div>
                            </div>
                        </section>
                        <section id="web-application">
                            <h2 class="page-header page_speed_448677160">Web Application Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-adjust"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-anchor"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-archive"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-area-chart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrows"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrows-h"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrows-v"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-asterisk"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-at"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-automobile"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-balance-scale"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ban"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bank"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bar-chart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bar-chart-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-barcode"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bars"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-battery-0"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-battery-1"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-battery-2"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-battery-3"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-battery-4"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-battery-empty"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-battery-full"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-battery-half"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-battery-quarter"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-battery-three-quarters"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bed"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-beer"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bell"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bell-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bell-slash"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bell-slash-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bicycle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-binoculars"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-birthday-cake"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bolt"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bomb"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-book"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bookmark"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bookmark-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-briefcase"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bug"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-building"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-building-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bullhorn"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bullseye"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bus"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cab"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-calculator"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-calendar"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-calendar-check-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-calendar-minus-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-calendar-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-calendar-plus-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-calendar-times-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-camera"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-camera-retro"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-car"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-caret-square-o-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-caret-square-o-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-caret-square-o-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-caret-square-o-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cart-arrow-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cart-plus"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-certificate"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-check"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-check-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-check-circle-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-check-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-check-square-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-child"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-circle-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-circle-o-notch"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-circle-thin"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-clock-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-clone"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-close"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cloud"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cloud-download"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cloud-upload"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-code"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-code-fork"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-coffee"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cog"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cogs"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-comment"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-comment-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-commenting"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-commenting-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-comments"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-comments-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-compass"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-copyright"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-creative-commons"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-credit-card"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-crop"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-crosshairs"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cube"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cubes"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cutlery"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-dashboard"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-database"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-desktop"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-diamond"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-dot-circle-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-download"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-edit"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ellipsis-h"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ellipsis-v"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-envelope"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-envelope-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-envelope-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-eraser"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-exchange"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-exclamation"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-exclamation-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-exclamation-triangle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-external-link"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-external-link-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-eye"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-eye-slash"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-eyedropper"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-fax"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-feed"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-female"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-fighter-jet"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-archive-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-audio-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-code-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-excel-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-image-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-movie-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-pdf-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-photo-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-picture-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-powerpoint-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-sound-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-video-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-word-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-zip-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-film"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-filter"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-fire"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-fire-extinguisher"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-flag"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-flag-checkered"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-flag-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-flash"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-flask"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-folder"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-folder-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-folder-open"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-folder-open-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-frown-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-futbol-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gamepad"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gavel"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gear"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gears"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gift"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-glass"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-globe"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-graduation-cap"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-group"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-grab-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-lizard-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-paper-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-peace-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-pointer-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-rock-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-scissors-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-spock-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-stop-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hdd-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-headphones"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-heart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-heart-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-heartbeat"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-history"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-home"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hotel"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-1"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-2"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-3"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-end"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-half"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hourglass-start"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-i-cursor"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-image"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-inbox"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-industry"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-info"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-info-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-institution"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-key"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-keyboard-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-language"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-laptop"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-leaf"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-legal"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-lemon-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-level-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-level-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-life-bouy"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-life-buoy"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-life-ring"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-life-saver"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-lightbulb-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-line-chart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-location-arrow"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-lock"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-magic"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-magnet"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mail-forward"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mail-reply"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mail-reply-all"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-male"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-map"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-map-marker"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-map-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-map-pin"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-map-signs"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-meh-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-microphone"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-microphone-slash"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-minus"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-minus-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-minus-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-minus-square-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mobile"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mobile-phone"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-money"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-moon-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mortar-board"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-motorcycle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mouse-pointer"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-music"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-navicon"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-newspaper-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-object-group"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-object-ungroup"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-paint-brush"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-paper-plane"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-paper-plane-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-paw"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-pencil"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-pencil-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-pencil-square-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-phone"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-phone-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-photo"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-picture-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-pie-chart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-plane"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-plug"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-plus"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-plus-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-plus-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-plus-square-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-power-off"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-print"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-puzzle-piece"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-qrcode"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-question"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-question-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-quote-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-quote-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-random"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-recycle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-refresh"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-registered"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-remove"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-reorder"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-reply"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-reply-all"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-retweet"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-road"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-rocket"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-rss"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-rss-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-search"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-search-minus"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-search-plus"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-send"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-send-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-server"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-share"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-share-alt"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-share-alt-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-share-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-share-square-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-shield"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ship"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-shopping-cart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sign-in"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sign-out"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-signal"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sitemap"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sliders"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-smile-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-soccer-ball-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sort"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sort-alpha-asc"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sort-alpha-desc"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sort-amount-asc"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sort-amount-desc"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sort-asc"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sort-desc"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sort-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sort-numeric-asc"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sort-numeric-desc"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sort-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-space-shuttle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-spinner"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-spoon"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-square-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-star"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-star-half"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-star-half-empty"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-star-half-full"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-star-half-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-star-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sticky-note"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sticky-note-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-street-view"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-suitcase"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sun-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-support"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tablet"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tachometer"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tag"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tags"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tasks"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-taxi"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-television"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-terminal"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-thumb-tack"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-thumbs-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-thumbs-o-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-thumbs-o-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-thumbs-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ticket"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-times"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-times-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-times-circle-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tint"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-toggle-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-toggle-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-toggle-off"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-toggle-on"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-toggle-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-toggle-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-trademark"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-trash"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-trash-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tree"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-trophy"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-truck"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tty"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tv"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-umbrella"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-university"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-unlock"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-unlock-alt"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-unsorted"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-upload"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-user"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-user-plus"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-user-secret"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-user-times"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-users"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-video-camera"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-volume-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-volume-off"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-volume-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-warning"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-wheelchair"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-wifi"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-wrench"></i></div>
                            </div>
                        </section>
                        <section id="hand">
                            <h2 class="page-header page_speed_448677160">Hand Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-grab-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-lizard-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-o-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-o-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-o-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-o-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-paper-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-peace-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-pointer-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-rock-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-scissors-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-spock-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-stop-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-thumbs-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-thumbs-o-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-thumbs-o-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-thumbs-up"></i></div>
                            </div>
                        </section>
                        <section id="transportation">
                            <h2 class="page-header page_speed_448677160">Transportation Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ambulance"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-automobile"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bicycle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bus"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cab"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-car"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-fighter-jet"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-motorcycle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-plane"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-rocket"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ship"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-space-shuttle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-subway"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-taxi"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-train"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-truck"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-wheelchair"></i></div>
                            </div>
                        </section>
                        <section id="gender">
                            <h2 class="page-header page_speed_448677160">Gender Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-genderless"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-intersex"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mars"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mars-double"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mars-stroke"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mars-stroke-h"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mars-stroke-v"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-mercury"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-neuter"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-transgender"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-transgender-alt"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-venus"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-venus-double"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-venus-mars"></i></div>
                            </div>
                        </section>
                        <section id="file-type">
                            <h2 class="page-header page_speed_448677160">File Type Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-archive-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-audio-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-code-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-excel-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-image-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-movie-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-pdf-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-photo-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-picture-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-powerpoint-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-sound-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-text"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-text-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-video-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-word-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-zip-o"></i></div>
                            </div>
                        </section>
                        <section id="spinner">
                            <h2 class="page-header page_speed_448677160">Spinner Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-circle-o-notch"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cog"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gear"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-refresh"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-spinner"></i></div>
                            </div>
                        </section>
                        <section id="form-control">
                            <h2 class="page-header page_speed_448677160">Form Control Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-check-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-check-square-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-circle-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-dot-circle-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-minus-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-minus-square-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-plus-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-plus-square-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-square-o"></i></div>
                            </div>
                        </section>
                        <section id="payment">
                            <h2 class="page-header page_speed_448677160">Payment Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-amex"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-diners-club"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-discover"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-jcb"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-mastercard"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-paypal"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-stripe"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-visa"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-credit-card"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-google-wallet"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-paypal"></i></div>
                            </div>
                        </section>
                        <section id="chart">
                            <h2 class="page-header page_speed_448677160">Chart Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-area-chart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bar-chart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bar-chart-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-line-chart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-pie-chart"></i></div>
                            </div>
                        </section>
                        <section id="currency">
                            <h2 class="page-header page_speed_448677160">Currency Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bitcoin"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-btc"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cny"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-dollar"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-eur"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-euro"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gbp"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gg"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gg-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ils"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-inr"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-jpy"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-krw"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-money"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-rmb"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-rouble"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-rub"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ruble"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-rupee"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-shekel"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sheqel"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-try"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-turkish-lira"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-usd"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-won"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-yen"></i></div>

                            </div>
                        </section>
                        <section id="text-editor">
                            <h2 class="page-header page_speed_448677160">Text Editor Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-align-center"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-align-justify"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-align-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-align-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bold"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-chain"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-chain-broken"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-clipboard"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-columns"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-copy"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cut"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-dedent"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-eraser"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-text"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-file-text-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-files-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-floppy-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-font"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-header"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-indent"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-italic"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-link"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-list"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-list-alt"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-list-ol"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-list-ul"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-outdent"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-paperclip"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-paragraph"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-paste"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-repeat"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-rotate-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-rotate-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-save"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-scissors"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-strikethrough"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-subscript"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-superscript"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-table"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-text-height"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-text-width"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-th"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-th-large"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-th-list"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-underline"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-undo"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-unlink"></i></div>
                            </div>
                        </section>
                        <section id="directional">
                            <h2 class="page-header page_speed_448677160">Directional Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-angle-double-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-angle-double-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-angle-double-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-angle-double-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-angle-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-angle-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-angle-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-angle-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrow-circle-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrow-circle-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrow-circle-o-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrow-circle-o-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrow-circle-o-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrow-circle-o-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrow-circle-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrow-circle-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrow-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrow-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrow-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrow-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrows"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrows-alt"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrows-h"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrows-v"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-caret-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-caret-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-caret-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-caret-square-o-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-caret-square-o-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-caret-square-o-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-caret-square-o-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-caret-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-chevron-circle-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-chevron-circle-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-chevron-circle-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-chevron-circle-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-chevron-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-chevron-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-chevron-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-chevron-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-exchange"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-o-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-o-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-o-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hand-o-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-long-arrow-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-long-arrow-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-long-arrow-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-long-arrow-up"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-toggle-down"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-toggle-left"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-toggle-right"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-toggle-up"></i></div>
                            </div>
                        </section>
                        <section id="video-player">
                            <h2 class="page-header page_speed_448677160">Video Player Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-arrows-alt"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-backward"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-compress"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-eject"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-expand"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-fast-backward"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-fast-forward"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-forward"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-pause"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-play"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-play-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-play-circle-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-random"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-step-backward"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-step-forward"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-stop"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-youtube-play"></i></div>
                            </div>
                        </section>
                        <section id="brand">
                            <h2 class="page-header page_speed_448677160">Brand Icons</h2>
                            <div class="row fontawesome-icon-list margin-bottom-lg">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-500px"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-adn"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-amazon"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-android"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-angellist"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-apple"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-behance"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-behance-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bitbucket"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bitbucket-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-bitcoin"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-black-tie"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-btc"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-buysellads"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-amex"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-diners-club"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-discover"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-jcb"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-mastercard"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-paypal"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-stripe"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-cc-visa"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-chrome"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-codepen"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-connectdevelop"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-contao"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-css3"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-dashcube"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-delicious"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-deviantart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-digg"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-dribbble"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-dropbox"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-drupal"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-empire"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-expeditedssl"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-facebook"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-facebook-f"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-facebook-official"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-facebook-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-firefox"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-flickr"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-fonticons"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-forumbee"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-foursquare"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ge"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-get-pocket"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gg"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gg-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-git"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-git-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-github"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-github-alt"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-github-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gittip"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-google"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-google-plus"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-google-plus-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-google-wallet"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-gratipay"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hacker-news"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-houzz"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-html5"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-instagram"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-internet-explorer"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ioxhost"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-joomla"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-jsfiddle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-lastfm"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-lastfm-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-leanpub"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-linkedin"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-linkedin-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-linux"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-maxcdn"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-meanpath"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-medium"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-odnoklassniki"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-odnoklassniki-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-opencart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-openid"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-opera"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-optin-monster"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-pagelines"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-paypal"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-pied-piper"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-pied-piper-alt"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-pinterest"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-pinterest-p"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-pinterest-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-qq"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ra"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-rebel"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-reddit"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-reddit-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-renren"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-safari"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-sellsy"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-share-alt"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-share-alt-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-shirtsinbulk"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-simplybuilt"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-skyatlas"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-skype"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-slack"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-slideshare"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-soundcloud"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-spotify"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-stack-exchange"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-stack-overflow"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-steam"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-steam-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-stumbleupon"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-stumbleupon-circle"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tencent-weibo"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-trello"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tripadvisor"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tumblr"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-tumblr-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-twitch"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-twitter"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-twitter-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-viacoin"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-vimeo"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-vimeo-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-vine"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-vk"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-wechat"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-weibo"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-weixin"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-whatsapp"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-wikipedia-w"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-windows"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-wordpress"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-xing"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-xing-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-y-combinator"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-y-combinator-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-yahoo"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-yc"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-yc-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-yelp"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-youtube"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-youtube-play"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-youtube-square"></i></div>
                            </div>
                        </section>
                        <section id="medical">
                            <h2 class="page-header page_speed_448677160">Medical Icons</h2>
                            <div class="row fontawesome-icon-list">
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-ambulance"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-h-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-heart"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-heart-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-heartbeat"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-hospital-o"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-medkit"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-plus-square"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-stethoscope"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-user-md"></i></div>
                                <div class="fa-item col-md-3 col-sm-4">
                                    <i class="fa fa-wheelchair"></i></div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $("#icon_btn").click(function(){
                $('.model-take-icon').modal('show');
                $('.fa-item').click(function()
                {
                    var myclass = $(this).find("i").attr("class");
                    $("#icon").val(myclass);
                    $('.model-take-icon').modal('hide');
                });

            });

        </script>
    </body>
</html>
