@extends('front.layout')

@section('seo_title', $page->seo_title)

@section('meta_description', $page->meta_description)

@section('content')
    <div class="uk-section">
        <div class="uk-container">
            <h1 class="uk-heading-medium uk-text-center uk-margin-large-bottom color-white uk-position-relative">{{ $page->name }}</h1>
            <div class="main-content">
                {!! $page->description !!}
            </div>
        </div>
    </div>
    @if($page->url == 'kuhni')
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-3@s uk-text-center" uk-grid uk-lightbox="animation: slide">
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <!--<span class="additional-price">от 800 руб.</span>-->
                            <a class="uk-inline" href="images/photo-1.jpg" data-caption="Кухня">
                                <img src="images/photo-1.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <!--<span class="additional-price">от 800 руб.</span>-->
                            <a class="uk-inline" href="images/photo-3.jpg" data-caption="Кухня">
                                <img src="images/photo-3.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <!--<span class="additional-price">от 800 руб.</span>-->
                            <a class="uk-inline" href="images/photo-5.jpg" data-caption="Кухня">
                                <img src="images/photo-5.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190529_143341.jpg" data-caption="Кухня">
                                <img src="images/IMG_20190529_143341.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20180619_090719_HDR.jpg" data-caption="Кухня">
                                <img src="images/IMG_20180619_090719_HDR.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/photo-8.jpg" data-caption="Кухня">
                                <img src="images/photo-8.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190625_232108.jpg" data-caption="Кухня">
                                <img src="images/IMG_20190625_232108.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190418_102308.jpg" data-caption="Кухня">
                                <img src="images/IMG_20190418_102308.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190628_130754.jpg" data-caption="Кухня">
                                <img src="images/IMG_20190628_130754.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190516_134025.jpg" data-caption="Кухня">
                                <img src="images/IMG_20190516_134025.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190529_143326.jpg" data-caption="Кухня">
                                <img src="images/IMG_20190529_143326.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @elseif($page->url == 'shkaf-kupe')
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-3@s uk-text-center" uk-grid uk-lightbox="animation: slide">
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <!--<span class="additional-price">от 800 руб.</span>-->
                            <a class="uk-inline" href="images/IMG_20180619_160655_HDR.jpg" data-caption="Шкаф-купе">
                                <img src="images/IMG_20180619_160655_HDR.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <!--<span class="additional-price">от 800 руб.</span>-->
                            <a class="uk-inline" href="images/IMG_20181210_184541.jpg" data-caption="Шкаф-купе">
                                <img src="images/IMG_20181210_184541.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <!--<span class="additional-price">от 800 руб.</span>-->
                            <a class="uk-inline" href="images/IMG_20190416_161539.jpg" data-caption="Шкаф-купе">
                                <img src="images/IMG_20190416_161539.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190405_184004.jpg" data-caption="Шкаф-купе">
                                <img src="images/IMG_20190405_184004.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190417_165450.jpg" data-caption="Шкаф-купе">
                                <img src="images/IMG_20190417_165450.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190417_165253.jpg" data-caption="Шкаф-купе">
                                <img src="images/IMG_20190417_165253.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190713_172906.jpg" data-caption="Шкаф-купе">
                                <img src="images/IMG_20190713_172906.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190418_102308.jpg" data-caption="Шкаф-купе">
                                <img src="images/IMG_20190418_102308.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190628_130754.jpg" data-caption="Шкаф-купе">
                                <img src="images/IMG_20190628_130754.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190516_134025.jpg" data-caption="Шкаф-купе">
                                <img src="images/IMG_20190516_134025.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div>
                    <div class="uk-text-center work">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <a class="uk-inline" href="images/IMG_20190529_143326.jpg" data-caption="Шкаф-купе">
                                <img src="images/IMG_20190529_143326.jpg" alt="">
                            </a>
                            <div class="uk-position-center">
                                <span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>
                            </div>
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">
                                <p class="uk-h4 uk-margin-remove">
                                    <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    @else 

    @endif
@endsection
