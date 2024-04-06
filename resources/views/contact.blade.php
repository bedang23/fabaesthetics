@extends('layout')

@section('content')

 <!-- CONTACT FORM START -->
 <section class="section" id="alert">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
               <h4 class="text-dark mb-0">Get In Touch :</h4>
           </div>
       </div>

       <div class="row">
           <div class="col-lg-8 col-md-7 mt-4 pt-2">
               <div class="custom-form rounded border p-4">
                   <div id="message">
                       @if(Session::has('message'))
                       <p class="alert {{ Session::get('alert-class', 'alert-success') }} mt-3">{{ Session::get('message') }}</p>
                       @endif
                   </div>
                   <form method="post" action="/contact-us">
                       @csrf
                       <div class="row">
                           <div class="col-lg-6">
                               <div class="form-group app-label">
                                   <label class="text-muted">Name</label>
                                   <input name="name" id="name2" type="text" class="form-control resume" placeholder="Enter Name..">
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group app-label">
                                   <label class="text-muted">Email address</label>
                                   <input name="email" id="email1" type="email" class="form-control resume" placeholder="Enter Email..">
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group app-label">
                                   <label class="text-muted">Phone Number</label>
                                   <input name="number" type="number" class="form-control resume" placeholder="Enter Phone Number">
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group app-label">
                                   <label class="text-muted">Subject</label>
                                   <input type="text" class="form-control resume" name="subject" placeholder="Subject..">
                               </div>
                           </div>
                           <div class="col-lg-12">
                               <div class="form-group app-label">
                                   <label class="text-muted">Message</label>
                                   <textarea name="message" id="comments" rows="5" class="form-control resume" placeholder="Message.."></textarea>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-12">
                               <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                               <div id="simple-msg"></div>
                           </div>
                       </div>
                   </form>
               </div>
           </div>

           <div class="col-lg-4 col-md-5 mt-4 pt-2">
               <div class="border rounded text-center p-4">
                   <h5 class="text-dark pb-3">Contact Info</h5>
                   <div class="contact-location rounded mt-5 p-4">
                       <div class="contact-location-icon bg-white text-primary rounded-pill">
                           <i class="mdi mdi-cellphone-iphone"></i>
                       </div>
                       <p class="text-muted pt-4 f-20 mb-0"><a href="mailto:support@theactorscasting.com">support@theactorscasting.com</a><br><a href="tel:916260153846">+91 6260153846</a></p>
                   </div>
                   <h6 class="text-muted mt-4 mb-0">Share</h6>
                   <ul class="list-unstyled social-icon mt-3 mb-0">
                       <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100087267705867&mibextid=ZbWKwL" class=""><i class="mdi mdi-facebook"></i></a></li>
                       <li class="list-inline-item"><a href="https://www.instagram.com/invites/contact/?i=1pvwrz8hdw1bo&utm_content=kmdd83e" class=""><i class="mdi mdi-instagram"></i></a></li>
                       <li class="list-inline-item"><a href="https://www.youtube.com/@theactorscasting" class=""><i class="mdi mdi-youtube"></i></a></li>
                       <li class="list-inline-item"><a href="https://www.linkedin.com/company/the-actor-s-casting/" class="rounded"><i class="mdi mdi-linkedin"></i></a></li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
</section>
<!-- CONTACT FORM END -->

@endsection('content')