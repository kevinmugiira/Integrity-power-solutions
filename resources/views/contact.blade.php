@extends('master')




@section('content')


    <!-- contact -->
    <section class="contact-innpage py-md-5">
        <div class="container py-4 mt-2">
            <h3 class="tittle text-center mb-3">Get in Touch</h3>
            <p class="tit text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
            <form action="#" method="post">
                <div class="row mail_grid_w3l pt-4 mt-md-5">

                    <div class="col-md-6 contact_left_grid">
                        <div class="contact-fields-w3ls">
                            <input type="text" name="Name" placeholder="Name" required="">
                        </div>
                        <div class="contact-fields-w3ls">
                            <input type="email" name="Email" placeholder="Email" required="">
                        </div>
                        <div class="contact-fields-w3ls">
                            <input type="text" name="Telephone" placeholder="Telephone" required="">
                        </div>
                        <div class="contact-fields-w3ls">
                            <input type="text" name="Subject" placeholder="Subject" required="">
                        </div>
                    </div>
                    <div class="col-md-6 contact_left_grid rgt_gd">
                        <div class="contact-fields-w3ls">
                            <textarea name="Message" placeholder="Message..." required=""></textarea>
                        </div>
                        <input type="submit" value="Submit">
                    </div>

                </div>
            </form>
        </div>
    </section>
    <!-- //contact -->
    <!-- footer-w3 -->
    <section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.30591910525!2d-74.25986432970718!3d40.697149422113014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1521710297542"></iframe>
    </section>

    @endsection
