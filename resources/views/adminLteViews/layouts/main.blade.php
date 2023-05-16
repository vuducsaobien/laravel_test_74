<!DOCTYPE html>
<html lang="en">
<head>
    @include('adminLteViews.elements.head', ['titleView' => $titleView ?? 'acb'])
    @yield('css')
</head>

{{-- <body class="nav-sm">  --}}
<body class="nav-md"> 

<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                {{-- @include('adminLteViews.elements.sidebar_title') --}}

                @include('adminLteViews.elements.sidebar_menu')
                
            </div>
        </div>
        <div class="top_nav">
            {{-- @include('adminLteViews.elements.top_nav') --}}
        </div>
        <div class="right_col" role="main">
            @yield('content')
        </div>
        {{-- @include('adminLteViews.elements.footer') --}}
    </div>
</div>
@php
    // echo '<pre style="color:red";>$responseDataNew === '; print_r($responseDataNew);echo '</pre>';
    // echo '<pre style="color:red";>$item->ID === '; print_r($item->id);echo '</pre>';
    // $product_id = $item->id ?? '';
    // echo '<h3>Die is Called </h3>';die;
@endphp

{{-- @include('adminLteViews.elements.script_define') --}}
@include('adminLteViews.elements.script')
@yield('script')
</body>
</html>