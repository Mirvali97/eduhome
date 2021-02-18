@extends('app.layout')

@section('title')

@section('content')

    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" >
            <div class="container-fixed" style="
                background-image: url({{ asset('storage/'.$sld->image)}})">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>{{ $sld->title }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Blog Start -->
    <div class="blog-details-area pt-150">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-details">
                        <div class="blog-details-img">
                            <img src="{{ asset('storage/'.$sld->image) }}" alt="blog-details">
                        </div>
                        <div class="blog-details-content">
                            <h2>{{ $sld->title }}</h2>
                            <p>{!! $sld->body !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
