 <?php $__env->startSection('content'); ?>
<div class="home__content-center container">
    <!-- header -->
    <header class="home__header">
        <section class="header-description">
            <h1>منصة <sup>+</sup>A</h1>
            <p>
                أول منصة تعليمية تضم أكبــر <br />
                تجمع طلابي يتشارك المعرفة
            </p>
            <div>
                <a href="http://" class="main-btn">إنشاء حساب</a>
                <a href="http://" class="main-btn">تسجيل دخول</a>
            </div>
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
        <a href="http://"> ابحث <i class="fas fa-search"></i> </a>
    </section>

    <!-- majors panel -->
    <h3 class="home__titles">التخصصات</h3>
    <section class="home__majors">
        <div class="home__majors-parent">
            <div class="home__majors-card">
                <img src="images/major-icon-1.svg" alt="major image" />
                <h4>الشريعة</h4>
            </div>
            <div class="home__majors-card">
                <img src="images/major-icon-1.svg" alt="major image" />
                <h4>الشريعة</h4>
            </div>
            <div class="home__majors-card">
                <img src="images/major-icon-1.svg" alt="major image" />
                <h4>الشريعة</h4>
            </div>
        </div>
    </section>

    <!-- numbers panel -->
    <h3 class="home__titles">المنصة بالأرقام</h3>
    <section class="home__numbers">
        <!-- #1 -->
        <div>
            <img src="images/stats-1.svg" alt="" />
            <h4 class="number">3420</h4>
            <h4>مشترك</h4>
        </div>
        <!-- #2 -->
        <div>
            <img src="images/stats-2.svg" alt="" />
            <h4 class="number">3420</h4>
            <h4>مشاركة</h4>
        </div>
        <!-- #3 -->
        <div>
            <img src="images/stats-3.svg" alt="" />
            <h4 class="number">3420</h4>
            <h4>زائر</h4>
        </div>
        <!-- #4 -->
        <div>
            <img src="images/stats-4.svg" alt="" />
            <h4 class="number">3420</h4>
            <h4>تخصص</h4>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/noufalshehri/Desktop/a-plus/A-plus-project/resources/views/h.blade.php ENDPATH**/ ?>