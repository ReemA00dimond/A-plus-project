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
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />

    <!-- css style -->
    <link rel="stylesheet" href="css/home-style.css" />

    <!-- favicon -->
    <link rel="shortcut icon" type="image/jpg" href="images/logo-a-plus.svg" />

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
          <a href="http://">إنشاء حساب</a>
          <a href="http://">تسجيل دخول</a>
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
        <section>
          <select name="major" id="major">
            <option value="" disabled selected>التخصص</option>
            <option value="cs">علوم حاسب</option>
            <option value="is">نظم معلومات</option>
          </select>
          <select name="course" id="course">
            <option value="" disabled selected>المقرر</option>
            <option value="java">البرمجة بلغة الجافا</option>
            <option value="c++">البرمجة بلغة الC++</option>
          </select>
          <a href="http://"> ابحث <i class="fas fa-search"></i> </a>
        </section>
      </section>

      <!-- majors panel -->
      <h3 class="home__titles">التخصصات</h3>
      <section class="home__majors">
        <div class="home__majors-parent">
          <div class="home__majors-card">
            <i class="fas fa-bookmark"></i>
            <img src="images/major-image1.jpg" alt="major image" />
            <h4>رياضيات 101</h4>
            <a href="http://"> عرض</a>
          </div>

          <div class="home__majors-card">
            <i class="fas fa-bookmark"></i>

            <img src="images/major-image1.jpg" alt="major image" />
            <h4>رياضيات 101</h4>
            <a href="http://"> عرض</a>
          </div>

          <div class="home__majors-card">
            <i class="fas fa-bookmark"></i>

            <img src="images/major-image1.jpg" alt="major image" />
            <h4>رياضيات 101</h4>
            <a href="http://"> عرض</a>
          </div>
        </div>

        <a href="http://" id="show-all-courses">عرض الكل</a>
      </section>

      <!-- numbers panel -->
      <h3 class="home__titles">المنصة بالأرقام</h3>
      <section class="home__numbers"></section>
    </div>

    <!-- footer  -->
    @include('footer')
  </body>
</html>
