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
        <link rel="stylesheet" href="css/logged-in-home.css" />

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
        <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="home__content-center container">
            <!-- header -->
            <header class="home__header">
                <section class="header-description">
                    <h1>أهلاً محمد</h1>
                    <p>
                        هنا مساحتك الخاصة في المنصة <br />
                        نتمنى لك تجربة تعليمية ممتعة
                    </p>
                    <div>
                        <a href="http://">اجب سؤال</a>
                        <a href="http://">أضف محتوى</a>
                    </div>
                </section>
                <section>
                    <img src="images/major-header-icon.svg" alt="header-icon" />
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

            <!-- subjects panel -->
            <h3 class="home__titles">المقررات</h3>
            <section class="home__subject">
                <div class="home__subject-parent">
                    <div class="home__subject-card">
                        <p>اسم المقرر</p>
                    </div>
                    <div class="home__subject-card">
                        <p>اسم المقرر</p>
                    </div>
                    <div class="home__subject-card">
                        <p>اسم المقرر</p>
                    </div>
                    <div class="home__subject-card">
                        <p>اسم المقرر</p>
                    </div>
                </div>
            </section>

            <!-- videos panel -->
            <h3 class="home__titles">التخصصات</h3>
            <section class="home__videos">
                <div class="home__videos-parent">
                    <div class="home__videos-card">
                        <i class="fas fa-bookmark"></i>
                        <img src="images/major-icon-1.svg" alt="major image" />
                        <p>العنوان</p>
                        <time dir="rtl" datetime="2012-12-08"
                            ><i class="far fa-calendar"></i> 8 Dec 2012 - 8:12
                            PM
                        </time>
                        <p><i class="far fa-eye"></i> 307 مشاهدة</p>
                    </div>
                    <div class="home__videos-card">
                        <i class="fas fa-bookmark"></i>
                        <img src="images/major-icon-1.svg" alt="major image" />
                        <p>العنوان</p>
                        <time dir="rtl" datetime="2012-12-08"
                            ><i class="far fa-calendar"></i> 8 Dec 2012 - 8:12
                            PM
                        </time>
                        <p><i class="far fa-eye"></i> 307 مشاهدة</p>
                    </div>
                    <div class="home__videos-card">
                        <i class="fas fa-bookmark"></i>
                        <img src="images/major-icon-1.svg" alt="major image" />
                        <p>العنوان</p>
                        <time dir="rtl" datetime="2012-12-08"
                            ><i class="far fa-calendar"></i> 8 Dec 2012 - 8:12
                            PM
                        </time>
                        <p><i class="far fa-eye"></i> 307 مشاهدة</p>
                    </div>
                </div>
            </section>
        </div>

        <!-- footer  -->
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH /Users/noufalshehri/Desktop/a-plus/A-plus-project/resources/views/logged-in-home.blade.php ENDPATH**/ ?>