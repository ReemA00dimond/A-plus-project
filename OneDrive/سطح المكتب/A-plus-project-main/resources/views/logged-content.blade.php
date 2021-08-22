@extends('landing')
 @section('content')           
            <div
            class="home__content-center container"
            style="border-top: #e2b357 solid 15px"   >
            <!-- header -->
            <header class="logged__header home__header">
                <section class="header-description">
                    <h1 style="color: #6a7686">أهلاً محمد</h1>
                    <p>
                        هنا مساحتك الخاصة في المنصة <br />
                        نتمنى لك تجربة تعليمية ممتعة
                    </p>
                    <div>
                        <a href="http://">اجب سؤال</a>
                        <a href="/add-content">أضف محتوى</a>
                    </div>
                </section>
                <section>
                    <img src="images/major-header-icon.svg" alt="header-icon" />
                </section>
            </header>

            <!-- quesion search panel -->
            <h3 class="home__titles logged__titles">إبحث عن سؤالك</h3>
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
            <h3 class="home__titles logged__titles">المقررات</h3>
            <section class="logged__subject home__subject">
                <div class="logged__subject-parent home__subject-parent">
                    <div class="logged__subject-card">
                        <a href="">اسم المقرر</a>
                    </div>
                    <div class="logged__subject-card">
                        <a href="">اسم المقرر</a>
                    </div>
                    <div class="logged__subject-card">
                        <a href="">اسم المقرر</a>
                    </div>
                    <div class="logged__subject-card">
                        <a href="">اسم المقرر</a>
                    </div>
                </div>
            </section>

            <!-- videos panel -->
            <h3 class="home__titles logged__titles">احدث الشروحات</h3>
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
@endsection