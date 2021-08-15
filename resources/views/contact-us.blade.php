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
        <!-- favicon -->
        <link rel="shortcut icon" type="image/jpg" href="logo A+.svg" />

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
        <link rel="stylesheet" href="home-style.css" />
        <link rel="stylesheet" href="Addq-style.css" />
        <title>صفحة إضافة سؤال</title>
    </head>

    <body>
        <!-- navigation bar -->
        <nav>
            <div class="nav-center">
                <div><img src="logo A+.svg" alt="logo" /></div>
                <div class="nav-links">
                    <a href="http://" class="active">الرئيسية</a>
                    <a href="http://">عن المنصة</a>
                    <a href="http://">حسابي</a>
                </div>
            </div>
        </nav>

        <div class="container">
            <!-- page content -->

            <h3 class="Addq__titles">أضف محتوى</h3>
            <div class="classification">
                <div><h5>تصنيف المحتوى</h5></div>
                <div>
                    <input
                        type="radio"
                        id="qus"
                        name="question-radio"
                        value=""
                    />
                      <label for="question">سؤال</label><br />
                </div>

                <div>
                    <input
                        type="radio"
                        id="cont"
                        name="question-radio"
                        value=""
                    />
                      <label for="Content">محتوى</label><br />
                </div>
                 
            </div>

            <!-- part of question -->
            <div class="question-details-parent">
                <div class="question-details">
                    <form class="q_title">
                        <label for="qtext"> عنوان السؤال</label>
                        <input
                            type="text"
                            name="q-title-keywords"
                            id="q-title-box"
                        />
                    </form>

                    <form class="q_content">
                        <label for="qcont">نص السؤال</label>

                        <textarea
                            id="q-cont"
                            name="q-cont"
                            name="q-content-keywords"
                        >
                        </textarea>
                        <br /><br />
                    </form>
                </div>
            </div>
            <div class="selection-parent">
                <div class="selection">
                    <div class="first">
                        <select name="majors" id="majors">
                            <option value="" disabled selected>التخصص</option>
                            <option value="cs">علوم حاسب</option>
                            <option value="is">نظم معلومات</option>
                        </select>
                    </div>

                    <div class="second">
                        <select name="course" id="course">
                            <option value="" disabled selected>المقرر</option>
                            <option value="java">البرمجة بلغة الجافا</option>
                            <option value="c++">البرمجة بلغة الC++</option>
                        </select>
                    </div>

                    <div class="third">
                        <select name="tag" id="tag">
                            <option value="" disabled selected>الوسوم</option>
                            <option value="c++">#C++</option>
                            <option value="java">#جافا</option>
                        </select>
                    </div>
                </div>
            </div>
            <section class="add-q">
                <a href="">اضف سؤال</a>
            </section>
        </div>
        <!-- footer  -->
        <footer>
            <section>
                <a href="http://">سياسة المستخدم</a>
                <a href="http://">الخصوصية</a>
                <a href="http://">الأسئلة الشائعة</a>
            </section>
            <section class="footer-contact">
                <a href="http://"><img src="facebook.svg" alt="facebook" /></a>
                <a href="http://"
                    ><img src="instagram.svg" alt="instagram"
                /></a>
                <a href="http://"><img src="twitter.svg" alt="twitter" /></a>
            </section>
            <section>
                <p>جميع الحقوق محفوظة لـ A+</p>
            </section>
        </footer>
    </body>
</html>
