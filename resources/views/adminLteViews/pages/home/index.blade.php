<!DOCTYPE html>
<html lang="en">
<head>
    {{-- @include('admin.elements.head') --}}
    {{-- @yield('css') --}}
</head>

{{-- <body class="nav-sm">  --}}
<body class="nav-md"> 

<div class="container body">
    <div class="main_container">

        {{-- <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('admin.elements.sidebar_title')

                @if ( config('zvn.checkPermission') )
                    @include('admin.elements.sidebar_menu_permission')
                @else
                    @include('admin.elements.sidebar_menu_default')
                @endif
                
            </div>
        </div> --}}

        {{-- <div class="top_nav">
            @include('admin.elements.top_nav')
        </div>
        <div class="right_col" role="main">
            @yield('content')
        </div>
        @include('admin.elements.footer') --}}

    </div>
</div>
@php
    echo '<h3>Die is Called - views home index</h3>';die;
@endphp

{{-- @include('admin.elements.script_define') --}}
{{-- @include('admin.elements.script') --}}
{{-- @yield('script') --}}
</body>
</html>