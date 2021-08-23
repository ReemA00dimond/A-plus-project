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
    <link rel="stylesheet" href="css/home-style.css" />
    <link rel="stylesheet" href="css/question-notification.css" />

    <!-- favicon -->
    <link rel="shortcut icon" type="image/jpg" href="logo A+.svg" />

    <title>تم إضافة سؤال</title>
  </head>
  <body>
  <!-- navigation bar -->
  <?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="container">
    <!-- question added image -->
    <section class="q-done">
      <img src="images/question added.svg" alt="question added">
    </section>
     

    <!-- view a question button -->
    <section class="q-button">
      <h3>تمت إضافة سؤالك بنجاح</h3>
      <a href="">عرض السؤال</a>
      <a href="">جميع الأسئلة</a>
    </section>
  </div>

    <!-- footer  -->
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </body>
</html>
<?php /**PATH /Users/noufalshehri/Desktop/a-plus/A-plus-project/resources/views/q-notification.blade.php ENDPATH**/ ?>