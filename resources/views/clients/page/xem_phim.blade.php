@extends('clients.share.master')
@section('content')
<section class="container">
    <div class="container__title">
        <span style="color: #7aa6ce;">Phim Hay</span> <span style="color: gray;">>></span>
        <span style="color: #7aa6ce;">{{ $xem_phim->quoc_gia }}</span> <span style="color: gray;">>></span>
        <span style="color: gray;">{{ $xem_phim->ten_phim }}</span>
    </div>
    <div class="container__watch">
        <iframe width="100%" height="700" src="{{$xem_phim->link_phim}}"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
    <div class="container__watch-title">
        <h2 style="font-weight: 600; ">
            <a style="color: #a5a5a5;" href="/phim">Cửa Hàng Tiện Lợi Saet Byul Tập 1</a>
        </h2>
    </div>
    <div class="container__row">
        <div class="container__watch-tap-phim">
            <div class="viet-sub">
                <span>VietSub</span>
            </div>
        </div>
    </div>
    <div class="container__watch_list-tap-phim">
        <div class="container__watch-item">
            <span>1</span>
        </div>
        <div class="container__watch-item">
            <span>2</span>
        </div>
        <div class="container__watch-item">
            <span>3</span>
        </div>
        <div class="container__watch-item">
            <span>4</span>
        </div>
        <div class="container__watch-item">
            <span>5</span>
        </div>
        <div class="container__watch-item">
            <span>6</span>
        </div>
        <div class="container__watch-item">
            <span>7</span>
        </div>
        <div class="container__watch-item">
            <span>8</span>
        </div>
        <div class="container__watch-item">
            <span>9</span>
        </div>
        <div class="container__watch-item">
            <span>10</span>
        </div>
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
                <div class="swiper-slide">
                    <a href="/chi-tiet-phim">
                        <div class="scale">
                            <img src="/assets/img/banner/poster-phim-hanh-dong.jpg" alt=""
                                srcset="/assets/img/banner/poster-phim-hanh-dong.jpg">
                            </div>
                        <div class="movie-title">
                            <p>Cửa hàng tiện lợi Saet Buyl</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/chi-tiet-phim">
                        <div class="scale">
                            <img src="/assets/img/banner/poster-phim-hanh-dong.jpg" alt=""
                                srcset="/assets/img/banner/poster-phim-hanh-dong.jpg">
                            </div>
                        <div class="movie-title">
                            <p>Cửa hàng tiện lợi Saet Buyl</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/chi-tiet-phim">
                        <div class="scale">
                            <img src="/assets/img/banner/poster-phim-hanh-dong.jpg" alt=""
                                srcset="/assets/img/banner/poster-phim-hanh-dong.jpg">
                            </div>
                        <div class="movie-title">
                            <p>Cửa hàng tiện lợi Saet Buyl</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/chi-tiet-phim">
                        <div class="scale">
                            <img src="/assets/img/banner/poster-phim-hanh-dong.jpg" alt=""
                                srcset="/assets/img/banner/poster-phim-hanh-dong.jpg">
                            </div>
                        <div class="movie-title">
                            <p>Cửa hàng tiện lợi Saet Buyl</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="/chi-tiet-phim">
                        <div class="scale">
                            <img src="/assets/img/banner/poster-phim-hanh-dong.jpg" alt=""
                                srcset="/assets/img/banner/poster-phim-hanh-dong.jpg">
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
