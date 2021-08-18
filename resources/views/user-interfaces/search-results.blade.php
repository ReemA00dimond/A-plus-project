<!DOCTYPE html>
<html lang="en" dir="rtl">
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
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous"
        />

        <!-- css style -->
        <link rel="stylesheet" href="css/common-style.css" />
        <link rel="stylesheet" href="css/search-results.css" />

        <!-- favicon -->
        <link
            rel="shortcut icon"
            type="image/jpg"
            href="images/logo-a-plus.svg"
        />

        <title>نتائج البحث</title>
    </head>
    <body>
        <!-- navigation bar -->
        @include('user-interfaces.nav')
        <section class="results-header">
            <h3>نتائج البحث</h3>
            <section class="search-filter">
                <select name="major" id="major">
                    <option value="" disabled selected>التخصص</option>
                    <option value="cs">علوم حاسب</option>
                    <option value="is">نظم معلومات</option>
                </select>
                <select name="course" id="course">
                    <option value="" disabled selected>المقرر</option>
                    <option value="java">البرمجة بلغة الجافا</option>
                    <option value="c++">البرمجة بلغة الC++</option>
                </select>
                <a href="http://"> ابحث <i class="fas fa-search"></i> </a>
            </section>
        </section>

        <div class="container">
            <!-- question card -->
            <section class="q-card">
                <section class="q-user-img">
                    <p>NA</p>
                </section>
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
            <!-- question card -->
            <section class="q-card">
                <section class="q-user-img">
                    <p>NA</p>
                </section>
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
            <!-- add a question button -->
            <section class="add-q">
                <h3>لم تجد سؤالك المطلوب ؟</h3>
                <a href="" class="main-btn">اضف سؤال</a>
            </section>
        </div>
        <!-- footer  -->
        @include('user-interfaces.footer')
    </body>
</html>
