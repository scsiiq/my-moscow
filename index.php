
<?php 
    $title = 'My Moscow';
    include('modules/head.php');
?>
<body>
    <div class="wrapper">
        <header>
            <a href="index.html" class="logo">
                <img src="images/icons/spasskaya-tower.png" alt="logo" class="logo__icon">
                <span href="index.html" class="logo__text">MyMoscow</span>
            </a>
            <nav>
                <a href="index.html">Главная</a>
                <a href="">Наши услуги</a>
                <a href="">О компании</a>
                <a href="contacts.html">Контакты</a>
                <a href="">Отзывы</a>
            </nav>
            <div class="menu-btn">
                <div class="menu-btn__stick"></div>
                <div class="menu-btn__stick"></div>
                <div class="menu-btn__stick"></div>
            </div>
        </header>
    </div>
    <main>
        <div class="pic-top img-top">
        <div class="pic-top__layer">
            <div class="pic-top__center">
                <h1>Необычная Москва</h1>
                <p>MyMoscow - агенство интересных маршрутов</p>
            </div>
            <button class="btn-blue">Подробнее о нас</button>
        </div>
        </div>
        <div class="wrapper">
            <section>
                <div class="section__title">   
                    <h2>Что мы предлагаем?</h2>
                    <p>Наша главная цель - рассказать о Москве так, чтобы это было интересно всем!</p>
                </div>
                <div class="offers">
                    <div class="offers__item">
                        <div class="offers__icon map"></div>
                        <div>
                            <h3 class="offers__title">Необычные маршруты</h3>
                            <p class="offers__text">
                                Мы обязательно порадуем необычными маршрутами Москвы,
                                которые прокладывают наши опытные гиды. Ты увидишь и узнаешь о Москве то,
                                что никогда не знал! 
                            </p>
                        </div>
                    </div>
                    <div class="offers__item">
                        <div class="offers__icon souvenir"></div>
                        <div>
                            <h3 class="offers__title">Классные сувениры</h3>
                            <p class="offers__text">
                                Отличная новость! У нас появился магазин сувениров! И самое примечательное,
                                что все эти сувениры мы делаем сами! Заходи к нам в гости!
                            </p>
                        </div>
                    </div>
                    <div class="offers__item">
                        <div class="offers__icon compass"></div>
                        <div>
                            <h3 class="offers__title">Интересные экскурсии</h3>
                            <p class="offers__text">
                                За время экскурский, которых у нас больше 20, ты узнаешь и увидишь все основные
                                достопримечательности: Кремль, Храм Христа Спасителя, так и пройдешься по пешеходным
                                улицам Москвы, узнаешь их историю и сделаешь самые классные фотографии.
                            </p>
                        </div>
                    </div>
                    <div class="offers__item">
                        <div class="offers__icon picture"></div>
                        <div>
                            <h3 class="offers__title">Фотосессии в Москве</h3>
                            <p class="offers__text">
                                Команда MyMoscow рада провести креативные фотосессии в любом уголке Москвы.
                                Не важно, свадьба у Вас или просто захотелось добавить в альбом или инстаграм красивых фоток.
                            </p>
                        </div>
                    </div>
                    <div class="offers__item">
                        <div class="offers__icon discussion"></div>
                        <div>
                            <h3 class="offers__title">Новые знакомства</h3>
                            <p class="offers__text">
                                MyMoscow - это целый клуб, где после московских прогулок ты можешь продолжить общение
                                с теми, кому интересна Москва, знакомиться с новыми людьми и делиться впечатлениями.
                            </p>
                        </div>
                    </div>
                    <div class="offers__item">
                        <div class="offers__icon sun"></div>
                        <div>
                            <h3 class="offers__title">Яркие впечатления</h3>
                            <p class="offers__text">
                                Самое важное - это яркие эмоции, которые останутся с тобой на долгое время!
                                Поэтому в нашей команде мы ждем именно тебя!
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="about">
            <div class="about__photo"></div>
            <div class="about__item">
                <h2 class="about__title">Кто мы такие</h2>
                <p class="about__text">Мы - команда тех, кто любит Москву.</p>
                <p class="about__text">
                    Москва - это не только место по "заколачиванию денег" и "взращиванию карьеры",
                    а еще и бесконечно красивые памятники природы, заказники, парки, заповедники.
                    Активный отдых в Москве и Подмосковье - это отличная возможность вырваться из душного
                    мегаполиса куда-нибудь в "дебри", навстречу приключениям. К счастью, не все Подмосковье
                    еще "облагорожено" асфальтными дорожками и высоченными коттеджными заборами. Еще встречаются
                    места, настолько глухие и далекие, что, очутившись там, кажется, что ты - первый человек,
                    ступивший на эту землю. 
                </p>
                <p class="about__text">
                    Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя
                    все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.
                </p>
                <button class="btn-yellow">Подробнее о нас</button>
            </div>
        </section>
        <section>
            <div class="section__title wrapper">
                <h2 class="line">Москва в фотографиях</h2>
                <p>
                    Проще всего рассказать обо всем в фотографиях. Смотрите наши фотоотчеты и 
                    присылайте нам свои фотографии.
                </p>
            </div>
            <div class="gallery">
                <a href="" class="gallery__item photo1"></a>
                <a href="" class="gallery__item photo2"></a>
                <a href="" class="gallery__item photo3"></a>
                <a href="" class="gallery__item photo4"></a>
                <a href="" class="gallery__item photo5"></a>
                <a href="" class="gallery__item photo6"></a>
                <a href="" class="gallery__item photo7"></a>
                <a href="" class="gallery__item photo8"></a>
            </div>
        </section>
        <section class="wrapper">
            <div class="section__title">
                <h2 class="line">Отзывы</h2>
            </div>
            <div class="review">
                <div class="review__item">
                    <blockquote class="review__text">
                        Были с дочкой и подругой на ночной экскурсии. Все-таки как много зависит от экскурсовода!
                        Мы все четыре часа ходили за Станиславом Симоновым, как кролики. Боялись пропустить хоть
                        одно слово. При этом моей дочке - которая побывала во многих местах и с детства искушенная
                        на интересные события - была сильно увлечена.
                    </blockquote>
                    <div class="flex">
                        <div class="review__icon ava2"></div>
                        <span class="review__title">Екатерина Васильева</span>
                    </div>
                </div>
                <div class="review__item">
                    <blockquote class="review__text">
                        Ездили на экскурсию с семиклассниками и родителями. Всем очень понравилось!
                        Экскурсовод Михаил Борисович очень интересно, необычно и с юмором рассказывал о Москве 16 века.
                        Гибко подстраивал экскурсию под интересы и потребности слушателей, ловко управлял "подачей"
                        автобуса, не давая нам замёрзнуть.) Огромное спасибо!
                    </blockquote>
                    <div class="flex">
                        <div class="review__icon ava1"></div>
                        <span class="review__title">Анна Крушевская</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="write-us">
            <div>
                <h2 class="line">Напишите нам</h2>
            </div>
            <div class="wrapper">
                <form method="GET" action="">
                    <div>
                        <input type="text" name="fio" class="write-us__input" placeholder="ФИО">
                        <input type="text" name="email" class="write-us__input" placeholder="Email">
                        <input type="text" name="tel" class="write-us__input" placeholder="Телефон">
                    </div>
                    <div>
                        <textarea name="message" class="write-us__input" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
                    </div>
                    <input type="submit" class="write-us__input write-us__btn" value="Отправить вопрос">
                </form>
            </div>
        </section>
    </main>

    <?php include('modules/footer.php');?>
