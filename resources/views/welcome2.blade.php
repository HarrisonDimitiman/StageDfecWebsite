@extends('layouts.homepage2')
@section('content')
<section class="section py-5" id="about">
   <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade">
         <div class="col-md-7 text-center heading-wrap">
            <h2 data-aos="fade-up">ABOUT US</h2>
            <p data-aos="fade-up" data-aos-delay="100">
               The Fraternal Order of Eagles Philippine Eagles is the first born fraternal socio-civic organization in our country. 
               It is a movement, an idea kindled by the founders- to nurture with the fire of brotherhood. 
               Spearheaded by zealous organizers from the members of the society clamoring for a change in vision and concept to widen its horizons, 
               to forever forge an amalgam of the rare breed of fellows amidst an apochrypal panorama. 
               Common yet unique, simple but a stand out, proud but not meek, singular but not alone, selected yet not confined and daring yet grandiose and sure.
            </p>
         </div>
      </div>
      <div class="row align-items-center">
         <div class="col-lg-4">
            <img src="{{ asset('/assets2/img/aboutus2.jpeg') }}" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="200">
         </div>
         <div class="col-lg-4">
            <img src="{{ asset('/assets2/img/aboutus1.jpeg') }}" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="300">
            <img src="{{ asset('/assets2/img/aboutus3.jpeg') }}" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="400">
         </div>
         <div class="col-lg-4">
            <img src="{{ asset('/assets2/img/aboutus4.jpeg') }}" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="500">
         </div>
      </div>
   </div>
</section>
<section class="section" id="outreach">
   <div class="clearfix mb-5 pb-5">
      <div class="container-fluid mb-5">
         <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
               <h2>OUTREACH PROGRAMS</h2>
            </div>
         </div>
      </div>
      <div class="owl-carousel centernonloop">
         <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="100">
            <div class="text">
               {{-- <p class="dishes-price">$11.50</p> --}}
               <h2 class="dishes-heading">Community Outreach</h2>
            </div>
            <img src="{{ asset('/assets2/img/outreach1.jpeg') }}" alt="" class="img-fluid">
         </a>
         <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="200">
            <div class="text">
               {{-- <p class="dishes-price">$12.00</p> --}}
               <h2 class="dishes-heading">Thanks Giving Outreach</h2>
            </div>
            <img src="{{ asset('/assets2/img/outreachgiving.jpeg') }}" alt="" class="img-fluid">
         </a>
         <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="300">
            <div class="text">
               {{-- <p class="dishes-price">$11.00</p> --}}
               <h2 class="dishes-heading">Shats Outreach</h2>
            </div>
            <img src="{{ asset('/assets2/img/outreachinom.jpeg') }}" alt="" class="img-fluid">
         </a>
         <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="400">
            <div class="text">
               {{-- <p class="dishes-price">$12.00</p> --}}
               <h2 class="dishes-heading">Tree Planting Outreach</h2>
            </div>
            <img src="{{ asset('/assets2/img/outreach2treeplanting.jpeg') }}" alt="" class="img-fluid">
         </a>
      </div>
   </div>
</section>
<section class="section bg-light" id="kuya">
   <div class="clearfix mb-5 pb-5">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12 text-center heading-wrap">
               <h2>OUR HARDWORKING KUYA</h2>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="major-caousel js-carousel-1 owl-carousel">
            <div>
               <div class="media d-block media-custom text-center">
                  <a href="#"><img src="{{ asset('/assets2/img/pres.jpeg') }}" alt="Image Placeholder" class="img-fluid"></a>
                  <div class="media-body">
                     <h3 class="mt-0 text-black">Eagles Jay Oñez</h3>
                     <p class="lead">Kuya President</p>
                  </div>
               </div>
            </div>
            <div>
               <div class="media d-block media-custom text-center">
                  <a href="#"><img src="{{ asset('/assets2/img/vpres.jpeg') }}" alt="Image Placeholder" class="img-fluid"></a>
                  <div class="media-body">
                     <h3 class="mt-0 text-black">Eagles James Andog</h3>
                     <p class="lead">Kuya Vice President</p>
                  </div>
               </div>
            </div>
            <div>
               <div class="media d-block media-custom text-center">
                  <a href="#"><img src="{{ asset('/assets2/img/secretary.jpeg') }}" alt="Image Placeholder" class="img-fluid"></a>
                  <div class="media-body">
                     <h3 class="mt-0 text-black">Eagles Liam Calibugar</h3>
                     <p class="lead">Kuya Secretary</p>
                  </div>
               </div>
            </div>
            <div>
               <div class="media d-block media-custom text-center">
                  <a href="#"><img src="{{ asset('/assets2/img/assembly.jpeg') }}" alt="Image Placeholder" class="img-fluid"></a>
                  <div class="media-body">
                     <h3 class="mt-0 text-black">Eagles Pascual Deopante</h3>
                     <p class="lead">Kuya Assembly Man</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- .section -->
<section class="section  bg-light">
   <div class="clearfix mb-5 pb-5">
      <div class="container-fluid">
         <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
               <h2>Blog</h2>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         @foreach ($blog as $blog)
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
               <div class="blog d-block">
                  <a class="bg-image d-block" href="single.html" style="background-image: url('{{ asset('storage/'.$blog->image) }}');"></a>
                  <div class="text">
                     <h3><a href="single.html">{{ $blog->title }}</a></h3>
                     <p class="sched-time">
                        <span><span class="fa fa-user"></span> {{ $blog->name }}</span> <br>
                        <span><span class="fa fa-calendar"></span> {{ \Carbon\Carbon::parse($blog->created_at)->format('M j, Y') }}</span> <br>
                     </p>
                     <p>
                        @php
                           $maxLength = 100;
                           $truncatedText = strlen($blog->content) > $maxLength ? substr($blog->content, 0, $maxLength - 3) . ' .....' : $blog->content;
                        @endphp
                        {{ $truncatedText }}
                     </p>
                  </div>
               </div>
            </div>
         @endforeach
         
      </div>
   </div>
</section>


<section class="section  pt-5  relative-higher bottom-slant-gray " id="contact_us">
    <div class="clearfix mb-5 pb-5">
       <div class="container-fluid">
          <div class="row" data-aos="fade">
             <div class="col-md-12 text-center heading-wrap">
                <h2>CONTACT US</h2>
             </div>
          </div>
       </div>
    </div>
    <div class="container mb-5">
       <div class="row">
          <div class="col-lg-6">
             <form action="{{ route('application.store') }}" method="post">
               @csrf
                <div class="row">
                   <div class="col-md-6 form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                   </div>
                   <div class="col-md-6 form-group">
                      <label for="phone">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12 form-group">
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12 form-group">
                      <label for="email">Subject</label>
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12 form-group">
                      <label for="message">Write Message</label>
                      <textarea class="form-control" name="message" cols="30" rows="8" placeholder="Message" required></textarea>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12 form-group text-center">
                      <input type="submit" value="Send Message" class="btn btn-primary">
                   </div>
                </div>
             </form>
          </div>
          <div class="col-lg-6 pl-2 pl-lg-5">
             <div class="col-md-8 mx-auto contact-form-contact-info">
                <h4 class="mb-5">Contact Details</h4>
                <p class="d-flex">
                   <span class="ion-ios-location icon mr-5"></span>
                   <span>{{ $lcd->location }}</span>
                </p>
                <p class="d-flex">
                   <span class="ion-ios-telephone icon mr-5"></span>
                   <span>{{ $lcd->phone_number }}</span>
                </p>
                <p class="d-flex">
                   <span class="ion-android-mail icon mr-5"></span>
                   <span>{{ $lcd->email }}</span>
                </p>
             </div>
          </div>
       </div>
    </div>
</section>
@endsection