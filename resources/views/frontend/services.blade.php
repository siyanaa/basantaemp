@extends('frontend.layouts.master')

@section('content')
<!-- herosection -->
<section class="herosectionforallpage my-4">
    <div class="container">
    <img src="./image/candidate2.jpg" alt="">
    <div class="d-flex flex-column innercontent">
     <span class="maintitle">SERVICE</span>
     <span class="navigatetitle py-2 px-3 mb-1">
      <a href="{{ route('index') }}" style="color: white !important; text-decoration: none;">Home</a> > <span>Service</span>
  </span>
    </div>
  </div>
  </section>


<!-- multiple post of service -->
    <section class="multi_post">
        <div class="container">
            <div class="multi_poster row justify-content-center gap-5">
                @foreach ($services as $service)
                    <div class="card col-lg-3">
                        <a href="{{ route('SingleService', ['slug' => $service->slug]) }}">
                            <div class="multi_post_image">
                                @if ($service->image)
                                    <img src="{{ asset('uploads/service/' . $service->image) }}" class="card-img-top" alt="Post Image">
                                @else
                                    <img src="https://plus.unsplash.com/premium_photo-1705091309202-5838aeedd653?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyfHx8ZW58MHx8fHx8" class="card-img-top" alt="Post Image">
                                @endif
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">
                                    @if (app()->getLocale() == 'ne')
                                        {{ $service->title_ne }}
                                    @else
                                        {{ $service->title }}
                                    @endif
                                </h5>
                                <p class="card-text">
                                    @if (app()->getLocale() == 'ne')
                                        {!! $service->description_ne !!}
                                    @else
                                        {!! $service->description !!}
                                    @endif
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
