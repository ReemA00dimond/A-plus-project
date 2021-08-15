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

        <!-- favicon -->
        <link
            rel="shortcut icon"
            type="image/jpg"
            href="images/logo-a-plus.svg"
        />

        <title>الصفحة الرئيسية</title>
    </head>

    <body>
        <!-- navigation bar -->
        @include('nav')
        <div class="home__content-center container">
            <!-- header -->
            <header class="home__header">
                <section class="header-description">
                    <h1>منصة <sup>+</sup>A</h1>
                    <p>
                        أول منصة تعليمية تضم أكبــر <br />
                        تجمع طلابي يتشارك المعرفة
                    </p>
                    <div>
                        <a href="http://">إنشاء حساب</a>
                        <a href="http://">تسجيل دخول</a>
                    </div>
                </section>
                <section>
                    <img src="images/header-icon.svg" alt="header-icon" />
                </section>
            </header>

            <!-- quesion search panel -->
            <h3 class="home__titles">إبحث عن سؤالك</h3>
            <section class="q-search__content">
                <input
                    type="text"
                    name="q-search-keywords"
                    id="q-search-box"
                    placeholder="كلمة دلالية"
                />
                <a href="http://"> ابحث <i class="fas fa-search"></i> </a>
            </section>

            <!-- majors panel -->
            <h3 class="home__titles">التخصصات</h3>
            <section class="home__majors">
                <div class="home__majors-parent">
                    <div class="home__majors-card">
                        <img src="images/major-icon-1.svg" alt="major image" />
                        <h4>الشريعة</h4>
                    </div>
                    <div class="home__majors-card">
                        <img src="images/major-icon-1.svg" alt="major image" />
                        <h4>الشريعة</h4>
                    </div>
                    <div class="home__majors-card">
                        <img src="images/major-icon-1.svg" alt="major image" />
                        <h4>الشريعة</h4>
                    </div>
                </div>
            </section>

            <!-- numbers panel -->
            <h3 class="home__titles">المنصة بالأرقام</h3>
            <section class="home__numbers">
                <!-- #1 -->
                <div class="single-chart">
                    <svg viewBox="0 0 36 36" class="circular-chart orange">
                        <path
                            class="circle-bg"
                            d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <path
                            class="circle"
                            stroke-dasharray="20, 100"
                            d="M18 2.0845
                        a 15.9155 15.9155 0 0 1 0 31.831
                        a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <text x="18" y="20.35" class="percentage">800</text>
                    </svg>
                    <h4> مشترك</h4>
                </div>

                <!-- #2 -->
                <div class="single-chart">
                    <svg viewBox="0 0 36 36" class="circular-chart orange">
                        <path
                            class="circle-bg"
                            d="M18 2.0845
                      a 15.9155 15.9155 0 0 1 0 31.831
                      a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <path
                            class="circle"
                            stroke-dasharray="30, 100"
                            d="M18 2.0845
                      a 15.9155 15.9155 0 0 1 0 31.831
                      a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <text x="18" y="20.35" class="percentage">3500</text>
                    </svg>
                    <h4>مشاركة</h4>
                </div>

                <!-- #3 -->
                <div class="single-chart">
                    <svg viewBox="0 0 36 36" class="circular-chart orange">
                        <path
                            class="circle-bg"
                            d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <path
                            class="circle"
                            stroke-dasharray="95, 100"
                            d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <text x="18" y="20.35" class="percentage">12000</text>
                    </svg>
                    <h4>زائر</h4>
                </div>

                <!-- #4 -->
                <div class="single-chart">
                    <svg viewBox="0 0 36 36" class="circular-chart orange">
                        <path
                            class="circle-bg"
                            d="M18 2.0845
                  a 15.9155 15.9155 0 0 1 0 31.831
                  a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <path
                            class="circle"
                            stroke-dasharray="10, 100"
                            d="M18 2.0845
                  a 15.9155 15.9155 0 0 1 0 31.831
                  a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <text x="18" y="20.35" class="percentage">20</text>
                    </svg>
                    <h4>تخصص</h4>
                </div>
            </section>
        </div>

        <!-- footer  -->
        @include('footer')
    </body>
</html>
