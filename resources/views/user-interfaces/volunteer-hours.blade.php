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
        <title>حسابي</title>
    </head>

    <body>
        <!-- navigation bar -->
        @include('user-interfaces.nav')
        <div class="container">
            <h3 class="heading-titles">حسابي</h3>
            <div class="d-flex vol-flex-container">
                <div class="vol-account-nav">
                    <a href="">البيانات الشخصية</a>
                    <a href="">أسئلتي</a>
                    <a href="">محتواي</a>
                    <a href="" class="account-active">الساعات التطوعية</a>
                </div>
                <div class="vol-content-container">
                    <div class="single-chart">
                        <svg viewBox="0 0 36 36" class="circular-chart orange">
                            <path
                                class="circle-bg"
                                d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <!-- variable: "stroke-dasharray"= user volunteer hours hours -->
                            <path
                                class="circle"
                                stroke-dasharray="70, 140"
                                d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <!-- variable: change 70 to the user's volunteer hours -->
                            <text x="18" y="20.35" class="percentage">70</text>
                        </svg>
                        <h4>الساعات الحالية</h4>
                    </div>
                    <!-- variable: if the hours are > 140 change the class to "main-btn" -->
                    <a href="" class="disabled">تقدم بطلب شهادة</a>
                    <p>يمكنك الطلب بعد اكمال 140 ساعة</p>
                </div>
            </div>
        </div>

        <!-- footer  -->
        @include('user-interfaces.footer')
    </body>
</html>
