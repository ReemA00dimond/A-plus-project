<!DOCTYPE html>
<html dir="rtl" lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
            rel="stylesheet"
        />

        <!-- font awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <!-- Bootstrap -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous"
        />

        <!-- css style -->
        <link rel="stylesheet" href="css/common-style.css" />
        <link rel="stylesheet" href="css/home-style.css" />
        <link rel="stylesheet" href="css/user-account.css" />
        <link rel="stylesheet" href="css/search-results.css" />
        <link rel="stylesheet" href="css/user-questions.css" />

        <!-- favicon -->
        <link
            rel="shortcut icon"
            type="image/jpg"
            href="images/logo-a-plus.svg"
        />

        <title>صفحة أسئلتي</title>
    </head>

    <body>
        <!-- navigation bar -->
        @include('user-interfaces.nav')

        <div class="container">
            <div class="d-flex flex-container">
                <div class="account-nav user-account-nav">
                    <a href="">البيانات الشخصية</a>
                    <a href="" class="account-active">أسئلتي</a>
                    <a href="">محتواي</a>
                    <a href="">الساعات التطوعية</a>
                </div>

                <div class="user-content-container">
                    <!-- question card -->

                    <section class="q-card">
                        <section class="q-content">
                            <section class="q-date">
                                <time dir="ltr" datetime="2012-12-08"
                                    >8 Dec 2012 - 8:12 PM</time
                                >
                                <i class="far fa-calendar"></i>
                            </section>
                            <section class="q-description">
                                <p>صيغة السؤال مختصرة صيغة السؤال مختصرة</p>
                            </section>
                            <section class="q-interactions">
                                <p>١٣ إجابة</p>
                                <p>١٠٥ مشاهدة</p>
                            </section>
                            <section class="q-tags-layout">
                                <section class="q-tags">
                                    <div class="q-tag"><p>#tag1</p></div>
                                    <div class="q-tag"><p>#tag2</p></div>
                                </section>
                                <!-- show question btn -->
                                <div class="show-q-btn">
                                    <a href="">عرض السؤال</a>
                                </div>
                            </section>
                        </section>
                    </section>

                    <!-- another card -->
                    <!-- question card -->

                    <section class="q-card">
                        <section class="q-content">
                            <section class="q-date">
                                <time dir="ltr" datetime="2012-12-08"
                                    >8 Dec 2012 - 8:12 PM</time
                                >
                                <i class="far fa-calendar"></i>
                            </section>
                            <section class="q-description">
                                <p>صيغة السؤال مختصرة صيغة السؤال مختصرة</p>
                            </section>
                            <section class="q-interactions">
                                <p>١٣ إجابة</p>
                                <p>١٠٥ مشاهدة</p>
                            </section>
                            <section class="q-tags-layout">
                                <section class="q-tags">
                                    <div class="q-tag"><p>#tag1</p></div>
                                    <div class="q-tag"><p>#tag2</p></div>
                                </section>
                                <!-- show question btn -->
                                <div class="show-q-btn">
                                    <a href="">عرض السؤال</a>
                                </div>
                            </section>
                        </section>
                    </section>

                    <!-- another card -->
                    <!-- question card -->

                    <section class="q-card">
                        <section class="q-content">
                            <section class="q-date">
                                <time dir="ltr" datetime="2012-12-08"
                                    >8 Dec 2012 - 8:12 PM</time
                                >
                                <i class="far fa-calendar"></i>
                            </section>
                            <section class="q-description">
                                <p>صيغة السؤال مختصرة صيغة السؤال مختصرة</p>
                            </section>
                            <section class="q-interactions">
                                <p>١٣ إجابة</p>
                                <p>١٠٥ مشاهدة</p>
                            </section>
                            <section class="q-tags-layout">
                                <section class="q-tags">
                                    <div class="q-tag"><p>#tag1</p></div>
                                    <div class="q-tag"><p>#tag2</p></div>
                                </section>
                                <!-- show question btn -->
                                <div class="show-q-btn">
                                    <a href="">عرض السؤال</a>
                                </div>
                            </section>
                        </section>
                    </section>
                </div>
            </div>
        </div>

        <!-- footer  -->

        @include('user-interfaces.footer')
    </body>
</html>
