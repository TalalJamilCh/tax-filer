@extends('includes.layout')
@section('meta_tag')
<title>Contact - Taxfiler</title>
@endsection
@section('main_content')

<div class="rs-contact contact-style3 pt-120 md-pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 md-mb-60">
                <div class="contact-box">
                    <div class="sec-title mb-45 md-mb-30">
                        <span class="sub-text sub-text3">Need A Consultant</span>
                        <h2 class="title">Contact With our Expert</h2>
                    </div>
                    <div class="address-box mb-25">
                        <div class="address-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="address-text">
                            <span class="label">Email:</span>
                            <a href="mailto:info@fintax.pk">info@fintax.pk</a>
                        </div>
                    </div>
                    <div class="address-box mb-25">
                        <div class="address-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="address-text">
                            <span class="label">Phone:</span>
                            <a href="tel:+923374009582">+92 337 4009582</a>
                        </div>
                    </div>
                    <div class="address-box">
                        <div class="address-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="address-text">
                            <span class="label">Address:</span>
                            <div class="desc">Thokar Niaz Baig, 81 Canal Breeze, Ali Town Lahore, Punjab 54000</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pl-70 md-pl-15">
                <div class="contact-wrap">
                    <form id="contact-form" method="post" action="{{ route('admin.email')}}" style="background-color: #fbfbfb;">
                        @csrf
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-25">
                                    <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <textarea class="from-control" id="message" name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="btn-part">
                                <div class="form-group mb-0">
                                    <input class="readon submit" type="submit" value="Submit Now">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map-canvas pt-120 md-pt-80">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13613.293166353102!2d74.2495423!3d31.4602918!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4b81c6c657bd369e!2sFinTax%20Advisors!5e0!3m2!1sen!2s!4v1668179788970!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<div class="">
    <div class="container mt-80 mb-80" style="background-color: #fbfbfb;">
        <div class="row y-middle">
            <div class="col-lg-8 md-mb-30">
                <div class="sec-title">
                    <h2 class="title">
                        Are You Ready To Take Action? <br>
                        We Are Ready To Help.
                    </h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="btn-part text-right md-left">
                    <a class="readon cta-started call-us" href="/services">Started</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection