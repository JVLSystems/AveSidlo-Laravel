@extends('FrontModule.master')

@section('content')
    <div class="breadcrumb-area bg-gradient text-center">
        <!-- Fixed BG -->
        <div class="fixed-bg abount-company-banner"></div>
        <!-- Fixed BG -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Kontakt</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Úvod</a></li>
                        <li class="active">Kontakt</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 wow fadeInUp address text-light">
                    <div class="address-items">
                        <div class="item">
                            <h4>Sídlo</h4>
                            <div class="info">
                                <p>Dolné pažitie 58<br> 911 01 Trenčín<br>Slovensko</p>
                            </div>
                        </div>
                        <div class="item">
                            <h4>Kontaktné informácie</h4>
                            <div class="info">
                                <ul>
                                    <li>Telefón: <a href="tel:+421949585695">+421 949 585 695</a></li>
                                    <li>E-mail: <a href="mailto:info@avesidlo.sk">info@avesidlo.sk</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 wow fadeInLeft contact-form">
                    <h2>Potrebujete pomoc? <strong>Neváhajte a napíšte nám</strong></h2>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Vaše meno" type="text" />
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Váš e-mail*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Váš telefón" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Vaša správa *"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">
                                    Odoslať správu <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.0486769632344!2d17.99877061607456!3d48.895409479291196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4714a1af7670eb21%3A0x2d751957f16219c6!2zRG9sbsOpIFBhxb5pdGUgODUsIDkxMSAwNiBUcmVuxI3DrW4tWsOhYmxhdGll!5e0!3m2!1ssk!2ssk!4v1632678012305!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
@endsection
