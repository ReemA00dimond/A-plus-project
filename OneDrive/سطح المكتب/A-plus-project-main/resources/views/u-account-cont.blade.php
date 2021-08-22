<!-- user account page -->
@extends('landing')
 @section('content')
<div class="container">
            <h3 class="heading-titles">حسابي</h3>
            <div class="d-flex flex-container">
                <div class="account-nav">
                    <a href="" class="account-active">البيانات الشخصية</a>
                    <a href="/user-questions">أسئلتي</a>
                    <a href="/user-contents">محتواي</a>
                    <a href="/user-volunteer">الساعات التطوعية</a>
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
        @endsection