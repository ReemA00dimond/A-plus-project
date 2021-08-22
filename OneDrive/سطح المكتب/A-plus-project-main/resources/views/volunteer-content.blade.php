<!-- volunteer phours page -->
@extends('landing')
 @section('content')
 <div class="container">
            <h3 class="heading-titles">حسابي</h3>
            <div class="d-flex vol-flex-container">
                <div class="vol-account-nav">
                    <a href="/user-account">البيانات الشخصية</a>
                    <a href="/user-questions">أسئلتي</a>
                    <a href="/user-contents">محتواي</a>
                    <a href="/user-volunteer" class="account-active">الساعات التطوعية</a>
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
        @endsection