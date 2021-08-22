@extends('landing')
 @section('content')
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
                        <a href="/logged-in" class="main-btn">إنشاء حساب</a>
                    </section>
                </div>
            </div>
        </div>
        @endsection