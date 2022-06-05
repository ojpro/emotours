@section('head')
    <link
            rel="stylesheet"
            href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
@endsection
<div class="container">
    @if($title)
        <div class="title">
            {{$title}}
            @if(!empty($desc))
                <div class="sub-title">
                    {{$desc}}
                </div>
            @endif
        </div>
    @endif
    <div class="list-item swiper-featured p-4">
        @if($style_list === "normal")
            <div class="row">
                @foreach($rows as $row)
                    <div class="col-lg-{{$col ?? 3}} col-md-6">
                        @include('Tour::frontend.layouts.search.loop-gird')
                    </div>
                @endforeach
            </div>
        @endif
        @if($style_list === "carousel")
            <div class="swiper-wrapper">
                @foreach($rows as $row)
                    @include('Tour::frontend.layouts.search.loop-gird')
                @endforeach
            </div>
            <!-- navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        @endif
        @if($style_list === "box_shadow")
            <div class="row row-eq-height">
                @foreach($rows as $row)
                    <div class="col-lg-{{$col ?? 4}} col-md-6 col-item">
                        @include('Tour::frontend.blocks.list-tour.loop-box-shadow')
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>