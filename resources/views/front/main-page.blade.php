@extends('front.layout')

@section('seo_title', 'test seo')

@section('meta_description', 'test meta')

@section('content')
<section class="why uk-section section-light uk-padding-large section-dark uk-position-relative" id="why">
    <div class="overlay uk-position-absolute"></div>
    <div class="uk-container">
        <h2 class="uk-heading-medium uk-text-center uk-margin-large-bottom color-white uk-position-relative uk-position-z-index">6 причин заказать у нас</h2>
        <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-child-width-1-1 uk-text-left uk-position-relative uk-text-center uk-position-z-index" uk-grid>
            <!--<div>-->
            <!--<div class="step-1 step">-->
            <!--<span>-->
            <!--<i class="fas fa-credit-card"></i>-->
            <!--</span>-->
            <!--<h3 class="color-white uk-position-relative">Оплата по факту</h3>-->
            <!--<div class="small-info">-->
            <!--Collaboratively administrate turnkey channels whereas virtual e-tailers proactive e-services.-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <div>
                <div class="step-2 step">
                    <span>
                        <i class="fas fa-piggy-bank"></i>
                    </span>
                    <h3 class="color-white uk-position-relative">Рассрочка</h3>
                    <div class="small-info">
                        У нас действует гибкая система рассрочки без процентов, позвоните и убедитесь в этом
                    </div>
                </div>
            </div>
            <div>
                <div class="step-3 step">
                    <span>
                        <i class="far fa-clock"></i>
                    </span>
                    <h3 class="color-white uk-position-relative">Экономим ваше время</h3>
                    <div class="small-info">
                        Вам необходимо оставить только заявку, приедет наш замерщик, подскажет как правильно и рационально подобрать мебель
                    </div>
                </div>
            </div>
            <div>
                <div class="step-3 step">
                    <span>
                        <i class="fas fa-ruble-sign"></i>
                    </span>
                    <h3 class="color-white uk-position-relative">Экономим ваши деньги</h3>
                    <div class="small-info">
                        Мы предоставляем низкие цены по Гомелю и Гомельской области
                    </div>
                </div>
            </div>
            <div>
                <div class="step-1 step">
                    <span>
                        <i class="fas fa-cookie"></i>
                    </span>
                    <h3 class="color-white uk-position-relative">Индивидуальный подход</h3>
                    <div class="small-info">
                        <!--Эксклюзивная мебель любой сложности под ключ. Мы не просто создаем мебель, мы создаем уют вашего дома-->
                        Мы ценим сотрудничество с каждым клиентом, предоставляем повышенные сроки гарантии, работаем по Гомелю и Гомельской области
                    </div>
                </div>
            </div>
            <div>
                <div class="step-2 step">
                    <span>
                        <i class="fas fa-truck"></i>
                    </span>
                    <h3 class="color-white uk-position-relative">Высококачественный сервис</h3>
                    <div class="small-info">
                        Мы изготавливаем корпусную мебель любой сложности от комодов до кухонь, шкафов. Опыт работы более 10 лет
                    </div>
                </div>
            </div>
            <div>
                <div class="step-3 step">
                    <span>
                        <i class="fas fa-award"></i>
                    </span>
                    <h3 class="color-white uk-position-relative">Приятный бонус каждому клиенту</h3>
                    <div class="small-info">
                        Довольный клиент - самое важное в нашей компании делаем огромные скидки
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="advantages uk-padding uk-section section-dark" id="works">
    <div class="uk-container">
        <h2 class="uk-heading-medium uk-text-center uk-margin-large-bottom color-white uk-position-relative">Наши работы</h2>
        <h3 class="h3" id="kitchen">Кухни от 800 руб.</h3>
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
        </div>
        <ul uk-accordion>
            <li>
                <div class="uk-accordion-content uk-child-width-1-3@s uk-text-center" uk-grid uk-lightbox="animation: slide">
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
                <span class="uk-accordion-title uk-button uk-button-default button-more-inverse">Посмотреть еще</span>
            </li>
        </ul>
        <h3 class="h3" id="shkaf">Шкаф-купе от 450 руб.</h3>
        <div class="uk-child-width-1-3@s uk-text-center" uk-grid uk-lightbox="animation: slide">
            <div>
                <div class="uk-text-center work">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <!--<span class="additional-price">от 450 руб.</span>-->
                        <a class="uk-inline" href="images/IMG_20180619_160655_HDR.jpg" data-caption="Шкаф-купе">
                            <img src="images/IMG_20180619_160655_HDR.jpg" alt="Шкаф-купе">
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
                        <!--<span class="additional-price">от 450 руб.</span>-->
                        <a class="uk-inline" href="images/IMG_20181210_184541.jpg" data-caption="Шкаф-купе">
                            <img src="images/IMG_20181210_184541.jpg" alt="Шкаф-купе">
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
                        <!--<span class="additional-price">от 450 руб.</span>-->
                        <a class="uk-inline" href="images/IMG_20190416_161539.jpg" data-caption="Шкаф-купе">
                            <img src="images/IMG_20190416_161539.jpg" alt="Шкаф-купе">
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
        <ul uk-accordion>
            <li>
                <div class="uk-accordion-content uk-child-width-1-3@s uk-text-center" uk-grid uk-lightbox="animation: slide">
                    <div>
                        <div class="uk-text-center work">
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <a class="uk-inline" href="images/IMG_20190405_184004.jpg" data-caption="Шкаф-купе">
                                    <img src="images/IMG_20190405_184004.jpg" alt="Шкаф-купе">
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
                                    <img src="images/IMG_20190417_165450.jpg" alt="Шкаф-купе">
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
                                    <img src="images/IMG_20190417_165253.jpg" alt="Шкаф-купе">
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
                                    <img src="images/IMG_20190713_172906.jpg" alt="Шкаф-купе">
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
                <span class="uk-accordion-title uk-button uk-button-default button-more-inverse">Посмотреть еще</span>
            </li>
        </ul>

        <h3 class="h3" id="prih">Прихожие от 100 руб.</h3>
        <div class="uk-child-width-1-3@s uk-text-center" uk-grid uk-lightbox="animation: slide">
            <div>
                <div class="uk-text-center work">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <!--<span class="additional-price">от 100 руб.</span>-->
                        <a class="uk-inline" href="images/IMG_20180705_204053.jpg" data-caption="Прихожие">
                            <img src="images/IMG_20180705_204053.jpg" alt="">
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
                        <!--<span class="additional-price">от 100 руб.</span>-->
                        <a class="uk-inline" href="images/IMG_20190417_165357.jpg" data-caption="Прихожие">
                            <img src="images/IMG_20190417_165357.jpg" alt="">
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
                        <!--<span class="additional-price">от 100 руб.</span>-->
                        <a class="uk-inline" href="images/photo-6.jpg" data-caption="Прихожая">
                            <img src="images/photo-6.jpg" alt="">
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

        <h3 class="h3" id="sleep">Мебель в гостинную от 500 руб.</h3>
        <div class="uk-child-width-1-3@s uk-text-center" uk-grid uk-lightbox="animation: slide">
            <div>
                <div class="uk-text-center work">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <!--<span class="additional-price">от 500 руб.</span>-->
                        <a class="uk-inline" href="images/photo-2.jpg" data-caption="Мебель в гостинную">
                            <img src="images/photo-2.jpg" alt="">
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
                        <!--<span class="additional-price">от 500 руб.</span>-->
                        <a class="uk-inline" href="images/IMG_20190831_174852.jpg" data-caption="Мебель в гостинную">
                            <img src="images/IMG_20190831_174852.jpg" alt="">
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
                        <!--<span class="additional-price">от 500 руб.</span>-->
                        <a class="uk-inline" href="images/IMG_20190731_141756.jpg" data-caption="Мебель в гостинную">
                            <img src="images/IMG_20190731_141756.jpg" alt="">
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
        <ul uk-accordion>
            <li>
                <div class="uk-accordion-content uk-child-width-1-3@s uk-text-center" uk-grid uk-lightbox="animation: slide">
                    <div>
                        <div class="uk-text-center work">
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <a class="uk-inline" href="images/IMG_20180804_154048_HDR.jpg" data-caption="Мебель в гостинную">
                                    <img src="images/IMG_20180804_154048_HDR.jpg" alt="">
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
                                <a class="uk-inline" href="images/IMG_20180804_154207_HDR.jpg" data-caption="Мебель в гостинную">
                                    <img src="images/IMG_20180804_154207_HDR.jpg" alt="">
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
                                <a class="uk-inline" href="images/IMG_20180804_154237_HDR.jpg" data-caption="Мебель в гостинную">
                                    <img src="images/IMG_20180804_154237_HDR.jpg" alt="">
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
                <span class="uk-accordion-title uk-button uk-button-default button-more-inverse">Посмотреть еще</span>
            </li>
        </ul>
        <h3 class="h3" id="bath">Мебель для ванной комнаты от 150 руб.</h3>
        <div class="uk-child-width-1-3@s uk-text-center" uk-grid uk-lightbox="animation: slide">
            <div>
                <div class="uk-text-center work">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <!--<span class="additional-price">от 150 руб.</span>-->
                        <a class="uk-inline" href="images/photo-4.jpg" data-caption="Мебель в ванну">
                            <img src="images/photo-4.jpg" alt="">
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
                        <!--<span class="additional-price">от 150 руб.</span>-->
                        <a class="uk-inline" href="images/photo-7.jpg" data-caption="Мебель для ванной комнаты">
                            <img src="images/photo-7.jpg" alt="Мебель для ванной комнаты">
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
        <div class="uk-child-width-1-3@s uk-text-center" uk-grid uk-lightbox="animation: slide">
            <!--<div>-->
            <!--<div class="uk-text-center work">-->
            <!--<div class="uk-inline-clip uk-transition-toggle" tabindex="0">-->
            <!--<a class="uk-inline" href="images/photo-3.jpg" data-caption="Кухня">-->
            <!--<img src="images/photo-3.jpg" alt="">-->
            <!--</a>-->
            <!--<div class="uk-position-center">-->
            <!--<span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>-->
            <!--</div>-->
            <!--<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">-->
            <!--<p class="uk-h4 uk-margin-remove">-->
            <!--<button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div>-->
            <!--<div class="uk-text-center work">-->
            <!--<div class="uk-inline-clip uk-transition-toggle" tabindex="0">-->
            <!--<a class="uk-inline" href="images/photo-5.jpg" data-caption="Кухня">-->
            <!--<img src="images/photo-5.jpg" alt="">-->
            <!--</a>-->
            <!--<div class="uk-position-center">-->
            <!--<span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>-->
            <!--</div>-->
            <!--<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">-->
            <!--<p class="uk-h4 uk-margin-remove">-->
            <!--<button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div>-->
            <!--<div class="uk-text-center work">-->
            <!--<div class="uk-inline-clip uk-transition-toggle" tabindex="0">-->
            <!--<a class="uk-inline" href="images/IMG_20180619_160933_HDR.jpg" data-caption="Кухня">-->
            <!--<img src="images/IMG_20180619_160933_HDR.jpg" alt="">-->
            <!--</a>-->
            <!--<div class="uk-position-center">-->
            <!--<span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>-->
            <!--</div>-->
            <!--<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">-->
            <!--<p class="uk-h4 uk-margin-remove">-->
            <!--<button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div>-->
            <!--<div class="uk-text-center work">-->
            <!--<div class="uk-inline-clip uk-transition-toggle" tabindex="0">-->
            <!--<a class="uk-inline" href="images/IMG_20181108_211256.jpg" data-caption="Кухня">-->
            <!--<img src="images/IMG_20181108_211256.jpg" alt="">-->
            <!--</a>-->
            <!--<div class="uk-position-center">-->
            <!--<span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>-->
            <!--</div>-->
            <!--<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">-->
            <!--<p class="uk-h4 uk-margin-remove">-->
            <!--<button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div>-->
            <!--<div class="uk-text-center work">-->
            <!--<div class="uk-inline-clip uk-transition-toggle" tabindex="0">-->
            <!--<a class="uk-inline" href="images/IMG_20181206_170343.jpg" data-caption="Кухня">-->
            <!--<img src="images/IMG_20181206_170343.jpg" alt="">-->
            <!--</a>-->
            <!--<div class="uk-position-center">-->
            <!--<span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>-->
            <!--</div>-->
            <!--<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">-->
            <!--<p class="uk-h4 uk-margin-remove">-->
            <!--<button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div>-->
            <!--<div class="uk-text-center work">-->
            <!--<div class="uk-inline-clip uk-transition-toggle" tabindex="0">-->
            <!--<a class="uk-inline" href="images/IMG_20181206_170351.jpg" data-caption="Кухня">-->
            <!--<img src="images/IMG_20181206_170351.jpg" alt="">-->
            <!--</a>-->
            <!--<div class="uk-position-center">-->
            <!--<span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>-->
            <!--</div>-->
            <!--<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">-->
            <!--<p class="uk-h4 uk-margin-remove">-->
            <!--<button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div>-->
            <!--<div class="uk-text-center work">-->
            <!--<div class="uk-inline-clip uk-transition-toggle" tabindex="0">-->
            <!--<a class="uk-inline" href="images/IMG_20190319_175802.jpg" data-caption="Кухня">-->
            <!--<img src="images/IMG_20190319_175802.jpg" alt="">-->
            <!--</a>-->
            <!--<div class="uk-position-center">-->
            <!--<span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>-->
            <!--</div>-->
            <!--<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">-->
            <!--<p class="uk-h4 uk-margin-remove">-->
            <!--<button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->

            <!--<div>-->
            <!--<div class="uk-text-center work">-->
            <!--<div class="uk-inline-clip uk-transition-toggle" tabindex="0">-->
            <!--<a class="uk-inline" href="images/IMG_20190408_210023.jpg" data-caption="Кухня">-->
            <!--<img src="images/IMG_20190408_210023.jpg" alt="">-->
            <!--</a>-->
            <!--<div class="uk-position-center">-->
            <!--<span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>-->
            <!--</div>-->
            <!--<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">-->
            <!--<p class="uk-h4 uk-margin-remove">-->
            <!--<button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div>-->
            <!--<div class="uk-text-center work">-->
            <!--<div class="uk-inline-clip uk-transition-toggle" tabindex="0">-->
            <!--<a class="uk-inline" href="images/IMG_20190624_154225.jpg" data-caption="Кухня">-->
            <!--<img src="images/IMG_20190624_154225.jpg" alt="">-->
            <!--</a>-->
            <!--<div class="uk-position-center">-->
            <!--<span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>-->
            <!--</div>-->
            <!--<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">-->
            <!--<p class="uk-h4 uk-margin-remove">-->
            <!--<button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div>-->
            <!--<div class="uk-text-center work">-->
            <!--<div class="uk-inline-clip uk-transition-toggle" tabindex="0">-->
            <!--<a class="uk-inline" href="images/IMG_20190713_172937.jpg" data-caption="Кухня">-->
            <!--<img src="images/IMG_20190713_172937.jpg" alt="">-->
            <!--</a>-->
            <!--<div class="uk-position-center">-->
            <!--<span class="uk-transition-fade color-white" uk-icon="icon: search; ratio: 2"></span>-->
            <!--</div>-->
            <!--<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary uk-visible@m">-->
            <!--<p class="uk-h4 uk-margin-remove">-->
            <!--<button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Заказать звонок</button>-->
            <!--</p>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
        </div>
    </div>
    </div>
</section>
<section class="stages uk-section section-light" id="stage">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-text-center" uk-grid>
            <div>
                <div class="">
                    <h2 class="color-white uk-text-left uk-heading-medium uk-position-relative">Этапы работы</h2>
                    <p class="color-white uk-text-left uk-margin-medium-top w-400">
                        Компания "КликМебель" позволяет выразить ваши самые смелые фантазии и реализовать именно тот дизайн мебели, о которым вы мечтаете
                    </p>
                </div>
            </div>
            <div>
                <div class="uk-child-width-1-4@m uk-child-width-1-6@s uk-text-left@s uk-text-center uk-position-relative" uk-grid>
                    <div>
                        <div class="step-1 step">
                            <span uk-icon="icon: settings; ratio: 2"></span>
                            <h3 class="color-white uk-position-relative">Шаг 1</h3>
                            <div class="small-info">
                                Оставте вашу заявку или позвоните для вызова дизайнера
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="step-2 step">
                            <span uk-icon="icon: receiver; ratio: 2"></span>
                            <h3 class="color-white uk-position-relative">Шаг 2</h3>
                            <div class="small-info">
                                Заключение договора с гарантией на мебель до 2 лет
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="step-3 step">
                            <span uk-icon="icon:  image; ratio: 2"></span>
                            <h3 class="color-white uk-position-relative">Шаг 3</h3>
                            <div class="small-info">
                                Разработка вашего дизайна мебели в 3d проекте
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="step-4 step">
                            <span uk-icon="icon:  clock; ratio: 2"></span>
                            <h3 class="color-white uk-position-relative">Шаг 4</h3>
                            <div class="small-info">
                                Исполнение заказа в короткие сроки с полной уборкой за собой
                            </div>
                        </div>
                    </div>
                    <div>
                        <div uk-scrollspy="delay: 100; repeat: true" uk-scrollspy-class="uk-animation-slide-left" class="uk-position-absolute bottom-arrow uk-visible@m">
                            <img src="http://addison.bold-themes.com/main-demo/wp-content/uploads/sites/3/2017/05/arrow-01.png" alt="">
                        </div>
                        <div uk-scrollspy="delay: 1000; repeat: true"  uk-scrollspy-class="uk-animation-slide-left" class="uk-position-absolute top-arrow uk-visible@m">
                            <img src="http://addison.bold-themes.com/main-demo/wp-content/uploads/sites/3/2017/05/arrow-02.png" alt="">
                        </div>
                        <div uk-scrollspy="delay: 1500; repeat: true"  uk-scrollspy-class="uk-animation-slide-left" class="uk-position-absolute top-arrow-1 uk-visible@m">
                            <img src="http://addison.bold-themes.com/main-demo/wp-content/uploads/sites/3/2017/05/arrow-01.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="partners uk-section section-light uk-padding-large section-dark uk-position-relative" id="partners">
    <div class="uk-container">
        <h2 class="uk-heading-medium uk-text-center uk-margin-large-bottom uk-position-relative uk-position-z-index">Наши партнеры</h2>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true;">

            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-large">
                <li>
                    <img src="images/partners1.jpg" alt="">
                </li>
                <li>
                    <img src="images/partners2.jpg" alt="">
                </li>
                <li>
                    <img src="images/partners3.jpg" alt="">
                </li>
                <li>
                    <img src="images/partners4.jpg" alt="">
                </li>
                <li>
                    <img src="images/partners5.jpg" alt="">
                </li>
                <li>
                    <img src="images/partners6.jpg" alt="">
                </li>
                <li>
                    <img src="images/partners7.jpg" alt="">
                </li>
                <li>
                    <img src="images/partners1.jpg" alt="">
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="question uk-section section-light uk-padding-large section-dark uk-position-relative" id="question">
    <div class="overlay uk-position-absolute"></div>
    <div class="uk-container uk-container-small">
        <h2 class="uk-heading-medium uk-text-center uk-margin-medium-bottom color-white uk-position-relative uk-position-z-index">Рассчитать рассрочку</h2>
        <div class="uk-text-left uk-position-relative uk-position-z-index">
            <p class="color-white uk-text-center uk-margin-large-bottom" style="padding-top:20px; font-size: 20px;">
                Хотите стать обладателем стильной, функциональной и эргономичной мебели?
                <br><span style="margin-top: 15px; display: block; font-size: 24px;">Мы можем подобрать любую удобную для вас рассрочку, <br>сроком до 3-х лет, без процентов и переплат</span>
            </p>
            <form action="request.php" method="POST">
                <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-text-center" uk-grid>
                    <div>
                        <div class="uk-margin">
                            <input class="uk-input" type="text" name="userName" id="userName2" placeholder="Ваше имя" required="">
                            <div id="userName-info2"></div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-margin uk-margin-medium-bottom">
                            <input class="uk-input" type="text" name="userPhone" id="userPhone2" placeholder="+375 (11) 111-11-11" required="">
                            <div id="userPhone-info2"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-margin uk-width-1-1 uk-width-1-2@s uk-margin-auto">
                        <input class="uk-button button-send uk-width-1-1 uk-margin-small-bottom color-white" type="button" id="send2" value="Рассчитать">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
