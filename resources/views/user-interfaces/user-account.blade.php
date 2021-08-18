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
        <link rel="stylesheet" href="css/user-account.css" />

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
            <div class="d-flex flex-container">
                <div class="account-nav">
                    <a href="" class="account-active">البيانات الشخصية</a>
                    <a href="">أسئلتي</a>
                    <a href="">محتواي</a>
                    <a href="">الساعات التطوعية</a>
                </div>
                <div class="content-container">
                    <form>
                        <div class="field-wrapper">
                            <label for="user-name">الاسم</label>
                            <input
                                name="user-name"
                                type="text"
                                placeholder="البيانات"
                            />
                        </div>
                        <div class="field-wrapper">
                            <label for="user-name">البريد الالكتروني</label>
                            <input
                                name="user-name"
                                type="text"
                                placeholder="البيانات"
                            />
                        </div>
                        <div class="field-wrapper">
                            <label for="user-name">رقم الجوال</label>
                            <input
                                name="user-name"
                                type="text"
                                placeholder="البيانات"
                            />
                        </div>
                        <div class="field-wrapper">
                            <label for="user-name">السجل المدني</label>
                            <input
                                name="user-name"
                                type="text"
                                placeholder="البيانات"
                            />
                        </div>
                        <div class="field-wrapper">
                            <label for="user-name">التخصص</label>
                            <input
                                name="user-name"
                                type="text"
                                placeholder="البيانات"
                            />
                        </div>
                        <a href="" class="main-btn">حفظ</a>
                    </form>
                </div>
            </div>
        </div>

        <!-- footer  -->
        @include('user-interfaces.footer')
    </body>
</html>
