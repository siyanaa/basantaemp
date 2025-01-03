@extends('frontend.layouts.master')

@section('content')
    <section class="banner ">
        <div class="container-fluid">
            <div class="row g-4 align-items-center">
                {{-- <div class="col-lg-4 text-center pt-5 order-lg-1 order-md-2 order-sm-2 order-xs-2"> 
                        <img src="{{ asset('uploads/sitesetting/' . $sitesetting->main_logo) }}" width="250px" height="150px"
                            alt="" />
                        <h3>{{ $sitesetting->office_name }}</h3>
                        <p>{{ $sitesetting->slogan }}</p>
                      
                </div> 

                <div class="col-lg-12 "> --}}
                    
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($coverImages as $key => $coverImage)
    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
        <img src="{{ asset('uploads/coverimage/' . $coverImage->image) }}" class="d-block banners-imgs" width="100%" height="550px" alt="Cover Image" />
        <div class="carousel-caption d-md-block">
            <h1 class="herosectiontitle">
                @if (app()->getLocale() == 'ne')
                    {{ $coverImage->title_ne }}
                @else
                    {{ $coverImage->title }}
                @endif
            </h1>s
           
            <a href="{{ route('About') }}"><button class="btn">
                @if (app()->getLocale() == 'ne')
                    थप पढ्नुहोस्
                @else
                    READ MORE
                @endif
            </button></a>
        </div>
    </div>
@endforeach                         </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                    
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="country py-4">
        <div class="container swiper p-4">
            <div class="slide-container">
                <div class="card-wrapper swiper-wrapper">
                    @foreach ($demands as $demand)
                        <div class="card swiper-slide text-center d-flex flex-column">
                            <a href="{{ route('SingleDemand', ['id' => $demand->id]) }}" class="flex-grow-1 d-flex flex-column">
                                <div class="img-box">
                                    <img src="{{ asset('uploads/demands/' . ($demand->image ?? 'default.jpg')) }}" alt="Demand Image" />
                                </div>
                                <div class="profile-details flex-grow-1">
                                    <h3 class="pb-2">
                                        <span>
                                            @if (app()->getLocale() == 'ne')
                                                {{ $demand->country->name_ne ?? 'Default Country Name' }}
                                            @else
                                                {{ $demand->country->name ?? 'Default Country Name' }}
                                            @endif
                                        </span>
                                    </h3>
                                    <h6>
                                        {{ $demand->from_date ?? 'N/A' }} <span class="to">to</span> {{ $demand->to_date ?? 'N/A' }} <br />
                                    </h6>
                                    <span class="my-1">
                                        {{ trans('messages.Vacancy') }}:
                                        @if (app()->getLocale() == 'ne')
                                            {{ $demand->vacancy_ne ?? 'N/A' }}
                                        @else
                                            {{ $demand->vacancy ?? 'N/A' }}
                                        @endif
                                    </span>
                                </div>
                            </a>
                            <div class="apply-button mt-2">
                                <a href="{{ route('apply', ['id' => $demand->id]) }}" class="apply-btn">
                                    {{ 'Apply now' }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    
    

 <!-- ceo message -->
<section class="about-us my-5 ">
  <div class="container">
      <div class="container-box">
          <div class="left position-relative">
              <div class="img position-relative">
                  <img src="{{ asset('uploads/about/' . $about->image) }}" alt="">
              </div>
              <div class="cr-1 position-absolute bottom-0 start-0"></div>
          </div>
          <div class="right  position-relative">
              <div class="cr-2 position-absolute top-0 end-0"></div>
              <div class="content ">
                  <div class="right-box">
                      <h2 class="section_title">{{ trans('messages.' . ucfirst($about->title)) }}
                        
                     </h2>
                      <p>
                        {{-- {{ trans('messages.AboutDescription') }} --}}
                        <div class="col-lg-9 col-md-9 col-sm-9 order-2 order-md-2 sample_page_content">
                            {!! app()->getLocale() === 'ne' ? $about->description_ne : $about->description !!}
                        </div>
                    </p>
                      <a href="{{ route('About') }}" class="btn">{{ trans('messages.ReadMore') }}<i
                            class="fa-solid fa-arrow-right mx-2"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
</section>

    <!-- Experience -->
    <section class="experience py-4 my-5">
        <div class="container w-90 justify-content-center">
            <h2 class="text-center pb-3 section_title">Our Services</h2>
            <div class="row py-4 g-2">
                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-3 Ebox-wrap">
                        <a href="{{ route('SingleService', ['slug' => $service->slug]) }}" >
                            <div class="Ebox1  p-3 d-flex flex-column  experiencebox ">
                            <h3 class="text-center"></h3><br>
                                {{-- <h6 class=" Ebox-text text-justify"><span>
                                    @if (app()->getLocale() == 'ne')
                                  
                                        {{ $service->title_ne }}
                                        <p>{!! Str::limit($service->description_ne, 100)  !!}</p>
                                    @else
                                        {{ $service->title }}
                                        <p>{!! Str::limit($service->description, 100)  !!}</p>
                                    @endif
                                </span></h6> --}}
                              
                            </div>
                    
                        </a>
                 
                    </div>
                
                @endforeach
            </div>
        </div>
    </section>


    <!-- ceomessage -->

    <!-- CEO Message -->
    <section class="ceomessage py-5">
    <div class="container">
        <div class="row">
            @if(isset($message) && $message)
                <div class="col-md-7">
                    @if($message->image)
                        <img src="{{ asset('uploads/message/' . $message->image) }}" alt="{{ $message->title }}" class="img-fluid">
                    @else
                        <img src="{{ asset('path/to/default/image.jpg') }}" alt="Default Image" class="img-fluid">
                    @endif
                </div>
                <div class="col-md-5">
                    <div class="m-box py-2 animated-image">
                        <h1 class="ceopositionmes"> {{ trans('messages.CEO Message') }}</h1>
                        {{-- <p class="text-justify">
                            @if (app()->getLocale() == 'ne')
                                {{ $message->title_ne }}
                            @else
                                {{ $message->title }}
                            @endif
                        </p> --}}
                        <p class="text-justify">
                            @if (app()->getLocale() == 'ne')
                                {!! $message->description_ne !!}
                            @else
                                {!! $message->description !!}
                            @endif
                        </p>
                    </div>
                </div>
            @else
                <div class="col-md-12">
                    <p>No CEO message available at this time.</p>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- our client -->
<section class="container">
    <div class="client-section d-flex flex-column align-items-center">
        <h2 class="text-center pb-3 section_title">{{ trans('messages.client') }}</h2>
        <div class="row">
            @if(isset($clients) && $clients->count() > 0)
                @foreach($clients as $client)
                <div class="client-img col-md-4 d-flex justify-content-center align-items-center">
                    @if($client->image)
                        <img src="{{ asset('uploads/client/' . $client->image) }}" alt="{{ $client->name }}" class="img-fluid" /> <!-- Added img-fluid for responsive images -->
                    @else
                        <img src="{{ asset('image/default-client.png') }}" alt="Default Client Image" class="img-fluid" /> <!-- Added img-fluid for responsive images -->
                    @endif
                </div>
                @endforeach
            @else
                <div class="col-md-12">
                    <p>No clients available at this time.</p>
                </div>
            @endif
        </div>
    </div>
</section>


<section class="experience py-2 my-5 clientsay">
    <div class="container">
        <h2 class="text-center pb-2 section_title">{{ trans('messages.clientsay') }}</h2>
        <div class="row py-2 g-4">
            @if(isset($clientMessages) && $clientMessages->count() > 0)
                @foreach($clientMessages as $clientMessage)
                    <div class="col-lg-3 col-md-3 Ebox-wrap">
                        <div class="Ebox1 clientcard pt-3 px-3 d-flex flex-column position-relative">
                            <!-- Adjusted positioning for the icon -->
                            <div class="clientcard-icon position-absolute top-2 left-4">
                                <i class="fas fa-heart heart-icon"></i>
                            </div>
                            
                            {{-- @if($clientMessage->image)
                                <img src="{{ asset('uploads/client/' . $clientMessage->image) }}" alt="{{ $clientMessage->name }}" class="img-fluid mb-3">
                            @else
                                <img src="{{ asset('path/to/default/image.jpg') }}" alt="Default Image" class="img-fluid mb-3">
                            @endif --}}

                            <p class="d-flex text-justify messagefromclient my-4" >
                                @if (app()->getLocale() == 'ne')
                                    {!! $clientMessage->message_ne !!}
                                @else
                                    {!! $clientMessage->message !!}
                                @endif
                            </p>
                            <h4 class="whosaidit">@if (app()->getLocale() == 'ne')
                                {{ $clientMessage->name_ne }}
                            @else
                                {{ $clientMessage->name }}
                            @endif</h4>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12">
                    <p>No client messages available at this time.</p>
                </div>
            @endif
        </div>
    </div>
</section>


    {{-- <section class="testimonial">
        <div class="container swiper mySwiper">
            <h2 class="text-center section_title pb-3">{{ trans('messages.Testimonials') }}</h2>
            <div class="swiper-wrapper">
                @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide px-5">
                        <a href="{{ route('Testimonial') }}">
                            <h5 class="text-center pt-3">
                              <span>
                                    @if (app()->getLocale() == 'ne')
                                    {{ $testimonial->description_ne }}
                                @else
                                    {{ $testimonial->description }}
                                @endif
                                </span>
                            </h5>
                            <div class=" text-center text-img">
                                <img src="{{ asset('uploads/testimonial/' . $testimonial->image) }}"
                                    alt="Testimonial Image" style="width: 100px;">
                                    <h3><span>
                                        @if (app()->getLocale() == 'ne')
                                        {{ $testimonial->name_ne }}
                                    @else
                                        {{ $testimonial->name }}
                                    @endif
                                    </span></h3>
                                    <h5><span>
                                        @if (app()->getLocale() == 'ne')
                                        {{ $testimonial->company->title_ne }}
                                    @else
                                        {{ $testimonial->company->title }}
                                    @endif
                                    </span></h5>
                                    <h6>
                                        @if (app()->getLocale() == 'ne')
                                            {{ $testimonial->work_category ? $testimonial->work_category->title_ne : 'Default Title' }}
                                        @else
                                            {{ $testimonial->work_category ? $testimonial->work_category->title : 'Default Title' }}
                                        @endif
                                    </h6>
                                    
                                    
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next arrow"></div>
            <div class="swiper-button-prev arrow"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>  --}}

    <section class="blogs py-5">
        <div class="container">
            <h2 class="text-center section_title pb-3">{{ trans('messages.Blogs') }}</h2>
            <div class="row g-4">
                @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-4">
                    <a href="{{ route('SingleBlogpostcategory', ['slug' => $blog->slug]) }}">
                        <div class="Ebox1">
                            <div class="E-B-img">
                                <img src="{{ asset('uploads/blogpostcategory/' . $blog->image) }}" alt="">
                            </div>
                            <h3 class="text-center pt-3">
                                @if (app()->getLocale() == 'ne')
                                {{ $blog->title_ne }}
                                @else
                                {{ $blog->title }}
                                @endif
                            </h3>
                            <p class="text-center pt-2">
                                @if (app()->getLocale() == 'ne')
                                {!! $blog->content_ne !!}
                                @else
                                {!! $blog->content !!}
                                @endif
                            </p>
                        </div>
                    </a>
                </div>
                @endforeach
            
            </div>
        </div>
    </section>


    <section class="container">
        <div class="d-flex flex-column justify-content-center my-5 row customconnectwithus">
            <span class="d-flex flex-column justify-content-center align-items-center containertitle">
                <h2 class="d-flex justify-content-center"></h2>
                <h2 class="text-center pb-2 section_title">{{ trans('messages.Contact') }}</h2>
            </span>
            <div class="d-flex flex-column justify-content-center  row">
                <p class="my-4">
                    Are you prepared to enhance your skills, unlock new career opportunities, and achieve personal growth? Join our Professional Development and Training program, and connect with us to discover the empowering potential of targeted learning and career advancement.
                </p>

                <div class="customconnectwithus-innersection d-flex justify-content-between">
                    <div class="customconnectwithus-innersection-left col-md-5">
                        <form id="contactForm" class="form-horizontal" method="POST" action="{{ route('Contact.store') }}">
                            @csrf
                            <div class="customconnectwithus-innersection-left_inputcontainer d-flex flex-column">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="NAME" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
            
                            <div class="customconnectwithus-innersection-left_inputcontainer d-flex flex-column">
                                <label for="phone_no">Contact Number</label>
                                <input type="tel" class="form-control @error('phone_no') is-invalid @enderror" id="phone_no" placeholder="Phone No." name="phone_no" value="{{ old('phone_no') }}" required>
                                @error('phone_no')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="customconnectwithus-innersection-left_inputcontainer d-flex flex-column">
                                <label for="message">Message</label>
                                <textarea class="form-control message-box @error('message') is-invalid @enderror" rows="4" placeholder="MESSAGE" name="message" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                            <div class="customconnectwithus-innersection-left_inputcontainer d-flex flex-column my-1">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="customconnectwithus-innersection-right p-4 col-md-6">
                        <span>Feel free to connect with us through the contact details provided below for any type of inquiry or to establish a connection. We are here to assist you in a positive and helpful manner.</span>
                        <div class="customconnectwithus-innersection-right-ourdetail my-4 px-4 py-3">
                            <h6>Contact</h6>
                            <div class="py-2">
                                @if (!empty($sitesetting->office_contact))
                                    @php
                                        $officeContacts = json_decode($sitesetting->office_contact, true);
                                    @endphp
                                    @if (is_array($officeContacts))
                                        @foreach ($officeContacts as $contact)
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-phone"></i><span class="px-2">{{ $contact }}</span>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-phone"></i><span class="px-2">{{ $sitesetting->office_contact }}</span>
                                        </div>
                                    @endif
                                @endif
                            </div>
                            <div class="">
                                @if (!empty($sitesetting->office_email))
                                    @php
                                        $officeEmails = json_decode($sitesetting->office_email, true);
                                    @endphp
                                    @if (is_array($officeEmails))
                                        @foreach ($officeEmails as $email)
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-envelope"></i><span class="px-2">{{ $email }}</span>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-envelope"></i><span class="px-2">{{ $sitesetting->office_email }}</span>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="customconnectwithus-innersection-right-ourdetail my-3 px-4 py-3">
                            <h6>Address</h6>
                            <div class="py-2">
                                @if (!empty($sitesetting->office_address))
                                    @php
                                        $officeAddresses = json_decode($sitesetting->office_address, true);
                                    @endphp
                                    @if (is_array($officeAddresses))
                                        @foreach ($officeAddresses as $address)
                                            <div class="d-flex align-items-start py-1">
                                                <i class="fa-solid fa-location-dot"></i>
                                                <span class="px-2 pt-">{{ $address }}</span>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span class="px-2 ">{{ $sitesetting->office_address }}</span>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                var form = $(this);
                var formData = new FormData(this);
                var recaptchaResponse = grecaptcha.getResponse();

                if (recaptchaResponse.length === 0) {
                    alert("Please tick the reCAPTCHA box before submitting.");
                    return;
                }

                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Assuming the server returns JSON with 'success' and 'message'
                        if (response.success) {
                            alert("Message sent successfully!");
                        } else {
                            alert("Error in sending message. Please try again.");
                        }
                    },
                    error: function(xhr, status, error) {
                        alert("An unexpected error occurred. Please try again.");
                    }
                });
            });
        });
    </script>
    

@endsection






