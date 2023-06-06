@extends('adminLteViews.layouts.main')
@section('content')
{{-- @include ('admin.templates.zvn_notify')
@include ('admin.templates.page_header', ['pageIndex' => true]) --}}

@php
    // echo '<pre style="color:red";>$responseDataNew === '; print_r($responseDataNew);echo '</pre>';
    // echo '<h3>Die is Called dsa - view</h3>';die;    
@endphp

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">{{$titleView}}
            <div class="x_panel">
                {{-- @include('admin.templates.x_title', ['title' => 'Bộ lọc']) --}}
                <div class="x_content">
                    <div class="row">
                        {{-- <div class="col-md-7">{!! $xhtmlButtonFilter !!}</div> --}}
                        {{-- <div class="col-md-5">{!! $xhtmlAreaSeach !!}</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">ABC
                {{-- @include('admin.templates.x_title', ['title' => 'Danh sách']) --}}
                @include('adminLteViews.pages.caches.list')
            </div>
        </div>
    </div>

    @if (count($items) > 0)
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    @include('adminLteViews.templates.x_title', ['title' => 'Phân trang'])
                    @include('adminLteViews.templates.pagination')
                </div>
            </div>
        </div>
    @endif

@endsection