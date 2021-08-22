<!-- user content page -->
@extends('landing')
 @section('content')
<div class="container">
            <h3 class="search-heading-h3" style="text-align: right">السؤال</h3>

            <div class="q-container ans-container">
                <!-- question card -->
                <section class="ans-card">
                    <div class="right-div">
                        <section class="ans-interactions">
                            <a href="">13 <i class="far fa-thumbs-up"></i></a>
                        </section>
                        <section class="ans-interactions">
                            <a href="">20 <i class="far fa-comment"></i></a>
                        </section>
                        <section class="ans-interactions">
                            <a href="">مشاركة <i class="fas fa-share"></i></a>
                        </section>
                    </div>

                    <section class="ans-content">
                        <section class="q-description">
                            <p>صيغة السؤال مختصرة صيغة السؤال مختصرة</p>
                        </section>

                        <!-- show question btn -->
                        <div class="show-ans-btn">
                            <a href=""
                                ><i class="fas fa-plus-circle"></i> اضف اجابة
                            </a>
                        </div>
                    </section>
                </section>
            </div>
            <h3 class="search-heading-h3" style="text-align: right">الأجوبة</h3>

            <div class="q-container ans-container">
                <!-- answer card -->
                <section class="ans-card answer-card">
                    <div class="right-div">
                        <section class="ans-interactions">
                            <a href="">13 <i class="far fa-thumbs-up"></i></a>
                        </section>
                        <section class="ans-interactions">
                            <a href="">20 <i class="far fa-comment"></i></a>
                        </section>
                        <section class="ans-interactions">
                            <a href="">مشاركة <i class="fas fa-share"></i></a>
                        </section>
                    </div>

                    <section class="ans-content">
                        <section class="ans-description">
                            <p>صيغة الجواب مختصرة صيغة الجواب مختصرة</p>
                        </section>

                        <!-- show question btn -->
                        <div class="show-ans-btn">
                            <a href=""
                                ><i class="fas fa-paperclip"></i> عرض
                                المرفقات</a
                            >
                        </div>
                    </section>
                </section>
                <!-- #2 -->
                <section class="ans-card answer-card">
                    <div class="right-div">
                        <section class="ans-interactions">
                            <a href="">13 <i class="far fa-thumbs-up"></i></a>
                        </section>
                        <section class="ans-interactions">
                            <a href="">20 <i class="far fa-comment"></i></a>
                        </section>
                        <section class="ans-interactions">
                            <a href="">مشاركة <i class="fas fa-share"></i></a>
                        </section>
                    </div>

                    <section class="ans-content">
                        <section class="ans-description">
                            <p>صيغة الجواب مختصرة صيغة الجواب مختصرة</p>
                        </section>

                        <!-- show question btn -->
                        <div class="show-ans-btn">
                            <a href=""
                                ><i class="fas fa-paperclip"></i> عرض
                                المرفقات</a
                            >
                        </div>
                    </section>
                </section>
            </div>
        </div>
        @endsection