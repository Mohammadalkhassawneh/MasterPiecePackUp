@extends('publicSite.layout.master')

@section('content')

<section class="page-header" style="background-image: url(assets/images/backgrounds/contactus.jpg);margin-top:145px;">
    <div class="container">
        <h2>Contact</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{route('home2')}}">Home</a></li>
            <li><span>Contact</span></li>
        </ul><!-- /.thm-breadcrumb -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="contact-info-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info-one__single">
                    <div class="contact-info-one__icon">
                        <i class="tripo-icon-placeholder"></i>
                    </div><!-- /.contact-info-one__icon -->
                    <div class="contact-info-one__content">
                        <p>Amman<br>
                            7-th Circle</p>
                    </div><!-- /.contact-info-one__content -->
                </div><!-- /.contact-info-one__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="contact-info-one__single">
                    <div class="contact-info-one__icon">
                        <i class="tripo-icon-phone-call"></i>
                    </div><!-- /.contact-info-one__icon -->
                    <div class="contact-info-one__content">
                        <p>Local: <a href="tel:666-999-0000">666 999 0000</a> <br>
                            Mobile: <a href="tel:+123-456-hello">0777746310</a></p>
                    </div><!-- /.contact-info-one__content -->
                </div><!-- /.contact-info-one__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="contact-info-one__single">
                    <div class="contact-info-one__icon">
                        <i class="tripo-icon-message"></i>
                    </div><!-- /.contact-info-one__icon -->
                    <div class="contact-info-one__content">
                        <p><a href="mailto:needhelp@tripo.com">SecondChance@gmail.com</a> <br>
                            <a href="mailto:info@tripo.com">support@secondchance.com</a>
                        </p>
                    </div><!-- /.contact-info-one__content -->
                </div><!-- /.contact-info-one__single -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-info-one -->

<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-one__content">
                    <div class="block-title text-left">
                        <p>Contact with us</p>
                        <h3>Have any Question? <br>
                            feel free to contact <br>
                            with us.</h3>
                    </div><!-- /.block-title -->
                    <div class="contact-one__content-text">
                        <p>We are happy to receive any complaint, note, comment, suggestion from you</p>
                    </div><!-- /.contact-one__content-text -->
                    <div class="contact-one__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                    </div><!-- /.contact-one__social -->
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-7">
                <form action="/" class="contact-one__form">
                    <div class="row low-gutters">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="name" placeholder="Your Name" require>
                            </div><!-- /.input-group -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="email" placeholder="Email Address" require>
                            </div><!-- /.input-group -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="phone" placeholder="Phone Number" require>
                            </div><!-- /.input-group -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" name="subject" placeholder="Subject" require>
                            </div><!-- /.input-group -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12">
                            <div class="input-group">
                                <textarea name="message" placeholder="Write Message" require></textarea>
                            </div><!-- /.input-group -->
                        </div><!-- /.col-md-12 -->
                        <div class="col-md-12">
                            <div class="input-group">
                                <button type="submit" class="thm-btn contact-one__btn" onclick="alert('Your Message has been sent successfully \n Thank You for contact us!')">Send message</button><!-- /.thm-btn contact-one__btn -->
                            </div><!-- /.input-group -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row low-gutters -->
                </form>
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->




@endsection