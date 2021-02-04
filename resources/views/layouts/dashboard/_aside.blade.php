<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        {{--        <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">--}}
        <div>
{{--            <p class="app-sidebar__user-name">{{ Auth::user()->name}}</p>--}}
            <br>
            <a style="color: #14a799; " href="{{ url('/' . $page='index ') }}"><i class="fa fa-share" aria-hidden="true"></i>
                <span class="app-menu__label"><strong>Home</strong></span></a>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ url('/' . $page='admin ') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Home</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('/' . $page='admin/slider') }}"  readonly><i class="icon fa fa-circle-o"></i> slider</a></li>

            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">About Us</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                 <li><a class="treeview-item" href="{{ url('/' . $page='admin/about') }}"><i class="icon fa fa-circle-o"></i> About</a></li>
                <li><a class="treeview-item" href="{{ url('/' . $page='admin/services') }}"><i class="icon fa fa-circle-o"></i>Services</a></li>
                <li><a class="treeview-item" href="{{ url('/' . $page='admin/team') }}"><i class="icon fa fa-circle-o"></i>Services</a></li>
             </ul>
         </li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Products</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">

                <li><a class="treeview-item" href="{{ url('/' . $page='admin/category') }}"><i class="icon fa fa-circle-o"></i> Categories</a></li>
                <li><a class="treeview-item" href="{{ url('/' . $page='admin/products') }}"><i class="icon fa fa-circle-o"></i> Products</a></li>
                <li><a class="treeview-item" href="{{ url('/' . $page='admin/img') }}"><i class="icon fa fa-circle-o"></i> Images</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Blog</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('/' . $page='admin/blogs') }}"  readonly><i class="icon fa fa-circle-o"></i> Blogs</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label"> Contact Us</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                 <li><a class="treeview-item" href="{{ url('/' . $page='admin/about') }}"><i class="icon fa fa-circle-o"></i> About</a></li>
                 <li><a class="treeview-item" href="{{ url('/' . $page='admin/requests') }}"><i class="icon fa fa-circle-o"></i> Requests</a></li>

            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">   Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ url('/' . $page='admin/register') }}"><i class="icon fa fa-circle-o"></i> add_user</a></li>
             </ul>
        </li>


{{--        <li><a class="app-menu__item " href="{{ url('/' . $page='admin/slider') }}"><i--}}
{{--                    class=" app-menu__icon fa fa-sliders"></i><span class="app-menu__label">Slider</span></a></li>--}}

{{--        <li><a class="app-menu__item " href="{{ url('/' . $page='admin/about') }}"><i--}}
{{--                    class="app-menu__icon fa fa-user-circle"></i><span class="app-menu__label">About</span></a></li>--}}
{{--        <li><a class="app-menu__item " href="{{ url('/' . $page='admin/services') }}"><i--}}
{{--                    class=" app-menu__icon fa fa-cog "></i><span class="app-menu__label">Services</span></a></li>--}}
{{--        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/category') }}"><i--}}
{{--                    class="app-menu__icon fa fa-files-o "></i><span class="app-menu__label">Category</span></a></li>--}}
{{--        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/products') }}"><i--}}
{{--                    class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Products</span></a></li>--}}
{{--        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/img') }}"><i--}}
{{--                    class="app-menu__icon fa fa-file-image-o"></i><span class="app-menu__label">Images</span></a></li>--}}

{{--        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/team') }}"><i--}}
{{--                    class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Team</span></a></li>--}}

{{--        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/blogs') }}"><i--}}
{{--                    class="app-menu__icon fa fa-database"></i><span class="app-menu__label">Blogs</span></a></li>--}}
{{--        <li><a class="app-menu__item" href="{{ url('/' . $page='admin/requests') }}"><i--}}
{{--                    class="app-menu__icon fa fa-telegram"></i><span class="app-menu__label">Requests</span></a></li>--}}
    </ul>

</aside>
