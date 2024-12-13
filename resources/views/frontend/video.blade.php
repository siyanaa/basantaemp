@extends('frontend.layouts.master')

@section('content')
    <div class="">
        <h1 class="page_title">{{ trans('messages.VideoGallery') }}</h1>
    </div>

    <section class="single_page">
        <div class="container">

            
            
                        <div class="row mt-3">
            
                            @foreach ($videos as $video)
                            <div class="col-md-4">
                                <div class="card video_card mt-2 mb-2">
                                   <iframe width="355" height="315" src="{{ $video->url }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    <div class="card-body text-center">
                                        <span class="vid_desc">
                                            @if (app()->getLocale() == 'ne')
                                        {{ $video->title_ne }}
                                    @else
                                        {{ $video->title }}
                                    @endif
                                        </span><br>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
            
            
                        </div>
            
            
            
                    </div>
                </section>
            @endsection
            