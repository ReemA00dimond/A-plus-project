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
        <link
            rel="shortcut icon"
            type="image/jpg"
            href="images/logo-a-plus.svg"
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
        <link rel="stylesheet" href="css/contact-us.css" />
        <title>تواصل معنا</title>
    </head>

    <body>
        <!-- navigation bar -->
        @include('user-interfaces.nav')

        <div class="container">
            <!-- page content -->
            <h3 class="heading-title">تواصل معنا</h3>
            <div class="classification">
                <div>
                    <input type="radio" id="inquiry" name="Content" value="" />
                      <label for="inquiry">استفسار</label><br />
                </div>

                <div>
                    <input
                        type="radio"
                        id="Suggestion"
                        name="Content"
                        value=""
                    />
                      <label for="Suggestion">مقترح</label><br />
                </div>
                 
                <div>
                    <input
                        type="radio"
                        id="complaint"
                        name="Content"
                        value=""
                    />
                      <label for="complaint">شكوى</label><br />
                </div>
                 
            </div>

            <!-- message content -->
            <div class="message-content-parent">
                <div class="message-content">
                    <form class="message_title">
                        <label for="message-title"> عنوان الرسالة</label>
                        <input
                            type="text"
                            name="message-title"
                            id="message-title"
                        />
                    </form>

                    <form class="message-text">
                        <label for="message-text">نص الرسالة</label>

                        <textarea
                            id="message-text"
                            name="message-text"
                            name="message-text"
                        ></textarea>
                        <br /><br />
                    </form>
                </div>
            </div>
            <section class="message-btn">
                <a href="">إرسال</a>
            </section>
        </div>
        <!-- footer  -->
        @include('user-interfaces.footer')
    </body>
</html>
