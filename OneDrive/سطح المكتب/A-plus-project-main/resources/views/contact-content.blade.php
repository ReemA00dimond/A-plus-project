@extends('landing')
 @section('content')

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
        @endsection