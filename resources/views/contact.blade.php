@extends('new-layout')

@section('mytitle', 'Contact the Experts | Reach Out to Fabaesthetics for Skin & Hair Solutions')

@section('mydescription', "Connect with Fabaesthetics for expert skin & hair solutions. Contact us for personalized treatments in Mumbai!")

@section('content')

<section id="slider" class="slider-element include-header" style="background: linear-gradient(90deg, rgba(34, 193, 195, 0.06), rgba(253, 187, 45, 0.1));">
    <div class="container mt-lg-12" style="text-align: center">
        <div class="row justify-content-between align-items-center py-lg-6 py-5" style="padding-top: 12rem !important;">
            <h1 class="display-3 color all-ts" style="font-weight: 600">Contact Us</h1>
        </div>
    </div>
</section>

<section>
    <div class="container contact-container">
        <div class="row">
            <div class="col-lg-5">
                <img src="assets/images/icons/wave.svg" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
                <h2 class="display-4">Get in touch..</h2>
                <div class="custom-form">
                    <div id="message">
                        @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-success') }} mt-3">{{ Session::get('message') }}</p>
                        @endif
                    </div>
                    <form method="post" action="/contact-us">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    {{-- <label class="text-muted">Name</label> --}}
                                    <input required name="name" id="name2" type="text" class="form-control resume" placeholder="Enter Name..">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    {{-- <label class="text-muted">Email address</label> --}}
                                    <input required name="email" id="email1" type="email" class="form-control resume" placeholder="Enter Email..">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    {{-- <label class="text-muted">Phone Number</label> --}}
                                    <input required name="phone" type="number" class="form-control resume" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group app-label">
                                    {{-- <label class="text-muted">Message</label> --}}
                                    <textarea required name="message" id="comments" rows="2" class="form-control resume" placeholder="Message.."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" id="submit" name="send" class="submitBnt btn" style="background-color: #206631;  border-block: #206631; color:white" value="Send Message">
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5" style="padding-top: 60px !important">

                <h6 class="fs-6 fw-light text-uppercase op-07 mb-2">Give us a Quick Call</h6>
                <h6 class="display-6"><a href="tel:+918433966645"> 84339 66645</a></h6>

                <h6 class="fs-6 fw-light text-uppercase op-07 mb-2">Mail Us</h6>
                <h6 class="display-6"><a href="mailto:info@fabaesthetics.in">info@fabaesthetics.in</a></h6>

                <div class="divider divider-xs fw-light font-body text-uppercase mb-3 op-05 ms-0" style="--cnvs-divider-border-color: rgba(var(--cnvs-contrast-rgb), 0.2); margin-top: 2rem; margin-bottom:2rem !important"><div class="divider-text">Or</div></div>

                <h6 class="fs-6 fw-light text-uppercase op-07 mb-2">Visit Us</h6>
                <p>Flat no.606, Kamdhenu Building no.4, Lokhandwala Market,<br> Andheri West,  Mumbai-400053 </p>

            </div>
        </div>
    </div>
</section>


<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5869.117578583781!2d72.82211596178176!3d19.143136488720295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7163b47aaf7%3A0xdc9a1e2d1f20519!2sFab%20Aesthetics%7CDr.Samreen%20Khan%7CHydrafacial%7CSkinclinic%7CBotox%7CFiller%7CThread%20lift%7CChemical%20Peel%20%7CAcne%20Scar%7CUnder%20Eye%20Filler!5e0!3m2!1sen!2sin!4v1712392897640!5m2!1sen!2sin" width="400" height="100" style="border:0; border-radius:5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection('content')