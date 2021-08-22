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

        <title>إنشاء حساب</title>
    </head>

    <body>
        <!-- navigation bar -->
        @include('user-interfaces.nav')

        <div class="container">
            <div class="login-details">
                <div class="login-card">
                    <h4 class="login-heading-h4">إنشاء حساب</h4>
                    <form>
                        <label for="text"> الإسم كامل</label>
                        <input
                            type="text"
                            name="-title-keywords"
                            id="a-title-box"
                        />
                    </form>
                    <form>
                        <label for="etext"> البريد الإلكتروني</label>
                        <input
                            type="text"
                            name="e-title-keywords"
                            id="e-title-box"
                        />
                    </form>

                    <form>
                        <label for="text"> التخصص</label>
                        <select id="Select" class="selectionMajor">
                            <option value="" disabled selected></option>
                            <option value="SE">هندسة برمجيات</option>
                            <option value="cs">علوم حاسب</option>
                            <option value="is">نظم معلومات</option>
                        </select>
                    </form>

                    <form>
                        <label for="ntext"> الرقم السري</label>
                        <input
                            type="text"
                            name="n-title-keywords"
                            id="n-title-box"
                        />
                    </form>

                    <section class="login-button">
                        <a href="" class="main-btn">إنشاء حساب</a>
                    </section>
                </div>
            </div>
        </div>

        <!-- footer  -->
        @include('user-interfaces.footer')
    </body>
</html>
