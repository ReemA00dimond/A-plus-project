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
        <link rel="stylesheet" href="css/view-content.css" />

        <!-- favicon -->
        <link
            rel="shortcut icon"
            type="image/jpg"
            href="images/logo-a-plus.svg"
        />

        <title>السؤال</title>
    </head>
    <body>
        <!-- navigation bar -->
        @include('user-interfaces.nav')
        <div class="container">
            <h3>السؤال</h3>

            <div class="q-container">
                <!-- question card -->
                <section class="q-card">
                    <div class="right-div">
                        <section class="q-user-img">
                            <p>NA</p>
                        </section>
                        <section class="q-interactions">
                            <a href="">13 <i class="far fa-thumbs-up"></i></a>
                        </section>
                        <section class="q-interactions">
                            <a href="">20 <i class="far fa-comment"></i></a>
                        </section>
                        <section class="q-interactions">
                            <a href="">مشاركة <i class="fas fa-share"></i></a>
                        </section>
                    </div>

                    <section class="q-content">
                        <section class="q-description">
                            <p>صيغة السؤال مختصرة صيغة السؤال مختصرة</p>
                        </section>

                        <!-- show question btn -->
                        <div class="show-q-btn">
                            <a href=""
                                ><i class="fas fa-plus-circle"></i> اضف اجابة
                            </a>
                        </div>
                    </section>
                </section>
                <!-- answer card -->
                <section class="q-card">
                    <div class="right-div">
                        <section class="q-user-img">
                            <p>NA</p>
                        </section>
                        <section class="q-interactions">
                            <a href="">13 <i class="far fa-thumbs-up"></i></a>
                        </section>
                        <section class="q-interactions">
                            <a href="">20 <i class="far fa-comment"></i></a>
                        </section>
                        <section class="q-interactions">
                            <a href="">مشاركة <i class="fas fa-share"></i></a>
                        </section>
                    </div>

                    <section class="q-content">
                        <section class="q-description">
                            <p>صيغة الجواب مختصرة صيغة الجواب مختصرة</p>
                        </section>

                        <!-- show question btn -->
                        <div class="show-q-btn">
                            <a href=""
                                ><i class="fas fa-paperclip"></i> عرض
                                المرفقات</a
                            >
                        </div>
                    </section>
                </section>
            </div>
        </div>
        <!-- footer  -->
        @include('user-interfaces.footer')
    </body>
</html>
