<div class="bravo-list-news">
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
            <div class="swiper-wrapper">
                @foreach($rows as $row)
                    <div class="col-lg-4 col-md-6 swiper-slide">
                        @include('News::frontend.blocks.list-news.loop')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>