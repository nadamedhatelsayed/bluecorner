@extends('layouts.dashboard.home')

@section('content')

    <div class="row">

        <div class="col-md-6 col-lg-3">
            <div class="widget-small   info coloured-icon"><i class="icon fa fa-sliders"></i>
                <div class="info">
                    <a href="{{ url('/' . $page='admin/slider') }}">
                        <h5>slider</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">

            <div class="widget-small primary coloured-icon"><i class="icon fa fa-user-circle fa-3x"></i>

                <div class="info">
                    <a href=" {{ url('/' . $page='admin/about') }}">
                        <h5>About</h5>
                    </a>
                </div>

            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-cog fa-3x"></i>
                <div class="info">
                    <a href="{{ url('/' . $page='admin/services') }}">
                        <h5>Services</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                <div class="info">
                    <a href="{{ url('/' . $page='admin/category') }}">
                        <h5>category</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                <div class="info">
                    <a href="{{ url('/' . $page='admin/products') }}">
                        <h5>products</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class=" icon fa fa-file-image-o"></i>
                <div class="info">
                    <a href="{{ url('/' . $page='admin/img') }}">
                        <h5>images</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-users"></i>
                <div class="info">
                    <a href="{{ url('/' . $page='admin/team') }}">
                        <h5>team</h5>
                    </a>
                </div>
            </div>
        </div>

{{--        <div class="col-md-6 col-lg-3">--}}
{{--            <div class="widget-small danger coloured-icon"><i class="icon fa fa-arrow-circle-left"></i>--}}
{{--                <div class="info">--}}
{{--                    <a href="{{ url('/' . $page='admin/packages') }}">--}}
{{--                        <h5>packages</h5>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-6 col-lg-3">--}}
{{--            <div class="widget-small warning coloured-icon"><i class="icon fa fa-star fa-3x"></i>--}}
{{--                <div class="info">--}}
{{--                    <a href="{{ url('/' . $page='admin/features') }}">--}}
{{--                        <h5>features</h5>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-3">--}}
{{--            <div class="widget-small danger coloured-icon"><i class="icon fa fa-commenting"></i>--}}
{{--                <div class="info">--}}
{{--                    <a href="{{ url('/' . $page='admin/testimonials') }}">--}}
{{--                        <h5>testimonial</h5>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-database"></i>
                <div class="info">
                    <a href="{{ url('/' . $page='admin/blogs') }}">
                        <h5>blogs</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small   info coloured-icon"><i class="icon fa fa-telegram"></i>
                <div class="info">
                    <a href="{{ url('/' . $page='admin/requests') }}">
                        <h5>requests</h5>
                    </a>
                </div>
            </div>
        </div>
{{--        <div class="col-md-6 col-lg-3">--}}
{{--            <div class="widget-small danger coloured-icon"><i class="icon fa fa-plus-square"></i>--}}
{{--                <div class="info">--}}
{{--                    <a href="{{ url('/' . $page='admin/counter') }}">--}}
{{--                        <h5>counter</h5>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-3">--}}
{{--            <div class="widget-small warning coloured-icon"><i class="icon fa fa-play"></i>--}}
{{--                <div class="info">--}}
{{--                    <a href="{{ url('/' . $page='admin/video') }}">--}}
{{--                        <h5>video</h5>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
