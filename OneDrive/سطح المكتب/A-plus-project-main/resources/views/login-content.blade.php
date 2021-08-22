@extends('landing')
 @section('content')
 <div class="container">
            <div class="login-details">
                <div class="login-card">
                    <h4 class="login-heading-h4">تسجيل الدخول</h4>
                    <form>
                        <label for="etext"> البريد الإلكتروني</label>
                        <input
                            type="text"
                            name="e-title-keywords"
                            id="e-title-box"
                        />
                    </form>
                    <form>
                        <label for="ntext"> الرقم السري</label>
                        <input
                            type="text"
                            name="n-title-keywords"
                            id="n-title-box"
                        />
                    </form>

                    <form>
                        <input type="checkbox" id="save" name="save" value="" />
                        <label style="display: inline" for="save">
                            حفظ البيانات</label
                        >
                    </form>
                    <section class="login-button">
                        <a href="/logged-in" class="main-btn">تسجيل الدخول</a>
                    </section>
                </div>
            </div>
        </div>
        @endsection