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
        <link rel="stylesheet" href="css/style.css" />

        <!-- favicon -->
        <link
            rel="shortcut icon"
            type="image/jpg"
            href="images/logo-a-plus.svg"
        />

        <title>إضافة محتوى</title>
    </head>

    <body>
        <!-- navigation bar -->
        @include('user-interfaces.nav')

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
                      <label for="qus">سؤال</label><br />
                </div>

                <div>
                    <input
                        type="radio"
                        id="cont"
                        name="question-radio"
                        value=""
                    />
                      <label for="cont">محتوى</label><br />
                </div>
                 
            </div>

            <!-- part of question -->
            <div class="question-details-parent">
                <div class="question-details">
                    <form class="q_title">
                        <label for="qtext">العنوان</label>
                        <input
                            type="text"
                            name="q-title-keywords"
                            id="q-title-box"
                        />
                    </form>

                    <form class="q_content">
                        <label for="qcont">النص</label>

                        <textarea
                            id="q-cont"
                            name="q-cont"
                            name="q-content-keywords"
                        ></textarea>
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
            <div class="box-parent">
                <section class="box">
                    <form>
                        <!--need link to the policies page -->
                        <input
                            type="checkbox"
                            id="agree"
                            name="agree"
                            value=""
                        />
                        <label style="display: inline" for="agree">
                            أقر بأني اطلعت على
                            <a href="" style="color: #78cab7; font-weight: bold"
                                >سياسة الإستخدام</a
                            >
                            و أن المحتوى المنشور تحت مسؤوليتي بالكامل</label
                        >
                    </form>
                </section>
            </div>
            <section class="add-q">
                <a href="" class="main-btn">اضف</a>
            </section>
        </div>
        <!-- footer  -->
        @include('user-interfaces.footer')
    </body>
</html>
