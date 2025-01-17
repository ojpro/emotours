@extends('layouts.app')
@section('head')
    <link
            href="{{ asset('dist/frontend/module/tour/css/tour.css?_ver='.config('app.version')) }}"
            rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}"/>

@endsection
@section('content')
    <div class="sticky px-4 py-2  bg-secondary">
        @include('Tour::frontend.layouts.search.form-search')
    </div>

    <div class="bravo_search_tour">
        <div class="bravo_banner" @if($bg=setting_item("tour_page_search_banner"))
        style="background-image: url({{ get_file_url($bg,'full') }})" @endif>
            <div class="container">
                <h1>
                    {{ setting_item_with_lang("tour_page_search_title") }}
                </h1>
            </div>
        </div>
        <div class="container mt-5">
            @include('Tour::frontend.layouts.search.list-item')
        </div>
    </div>
@endsection

@section('footer')
    <script type="text/javascript"
            src="{{ asset("libs/ion_rangeslider/js/ion.rangeSlider.min.js") }}"></script>
    <script type="text/javascript"
            src="{{ asset('module/tour/js/tour.js?_ver='.config('app.version')) }}">
    </script>

@endsection
