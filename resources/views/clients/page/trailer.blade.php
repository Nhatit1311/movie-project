@extends('clients.share.master')
@section('content')
<section class="container">
    <div class="container__title">
        <span style="color: #7aa6ce;">Phim Hay</span> <span style="color: gray;">>></span>
        <span style="color: #7aa6ce;">Hàn Quốc</span> <span style="color: gray;">>></span>
        <span style="color: gray;">CỬA HÀNG TIỆN LỢI SAET BUYL</span>
    </div>
    <div class="container__watch">
        <iframe width="100%" height="700" src="https://www.facebook.com/watch/?v=1280460772804886"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
    <div class="container__watch-title">
        <h3 style="font-weight: 600; ">
            <a style="color: #a5a5a5;" href="/phim">{{ isset($detail_phim) ? $detail_phim->ten_phim : '' }} Trailer</a>
        </h3>
    </div>
</section>
<section class="container__movie">
    <div class="container__movie-item">
        <h2 class="container__movie-phim-noi-bat" style="font-weight: 600;">Có Thể Bạn Muốn Xem</h2>
        <div class="swiper mySlideMovie">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="/chi-tiet-phim">
                        <div class="scale">
                            <img src="/assets/img/movie/1.jpg" alt=""
                                srcset="/assets/img/movie/1.jpg">
                        </div>
                        <div class="movie-title">
                            <p>Cửa hàng tiện lợi Saet Buyl</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>
@endsection
@section('js')

@endsection
