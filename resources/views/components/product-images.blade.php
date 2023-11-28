<!-- resources/views/components/ImageSlider.blade.php -->

<div class="media">
    <div class="media_slider media_slider--single">
        <div class="swiper-wrapper">
            @foreach($images as $image)
                <div class="swiper-slide">
                    <picture>
                        <source
                            data-srcset="{{ asset('storage/'.$image) }}"
                            srcset="{{ asset('storage/'.$image) }}"
                            type="image/webp"
                        />
                        <img
                            class="lazy"
                            data-src="{{ asset('storage/'.$image) }}"
                            src="{{ asset('storage/'.$image) }}"
                            alt="Image"
                        />
                    </picture>
                </div>
            @endforeach
        </div>
        <div class="media_slider-nav d-flex justify-content-between align-items-center">
            <a class="link swiper-button-prev" href="#"><i class="icon-angle-left"></i></a>
            <a class="link swiper-button-next" href="#"><i class="icon-angle-right"></i></a>
        </div>
    </div>
    <div class="media_slider media_slider--thumbs">
        <div class="swiper-wrapper">
            @foreach($images as $image)
                <div class="swiper-slide">
                    <a href="#">
                        <picture>
                            <source
                                data-srcset="{{ asset('storage/'.$image) }}"
                                srcset="{{ asset('storage/'.$image) }}"
                                type="image/webp"
                            />
                            <img
                                class="lazy"
                                data-src="{{ asset('storage/'.$image) }}"
                                src="{{ asset('storage/'.$image) }}"
                                alt="Image"
                            />
                        </picture>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
