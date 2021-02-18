@extends('app.layout')

@section('title')

@section('content')

    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center" >
            <div class="container-fixed" style="
                position: center;
                background-image: url({{ asset('storage/'.$post->photo)}})">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>{{ $post->title }}</h2>
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
                            <img src="{{ asset('storage/'.$post->photo) }}" alt="blog-details">
                        </div>
                        <div class="blog-details-content">
                            <h2>{{ $post->title }}</h2>
                            <p>{!! $post->content !!}</p>
                        </div>
                        <div class="blog-top">
                            <p>By {{ $post->user->name }}
                                /  {{ $post->created_at->format('M-d-Y') }}
{{--                                /  <i class="fa fa-eye"></i> {{ $views->views_count }}--}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
