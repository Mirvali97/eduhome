@extends('app.layout')
@section('title','Blog')

@section('content')
    <!-- Blog Start -->
    <!-- Banner Area Start -->

                <div class="row  text-center">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2 style="color: #0b0b0b">Our blog</h2>
                            </div>
                        </div>
                    </div>

    <!-- Banner Area End -->
    <div class="blog-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                @forelse($posts as $post)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog mb-60">
                        <div class="blog-img">
                            <img src="{{ asset('storage/'. $post->photo) }}" alt="blog" style="height: 365px; width: 365px;">
{{--                            <div class="blog-hover">--}}
{{--                                <i class="fa fa-link"></i>--}}
{{--                            </div>--}}
                        </div>
                        <div class="blog-content">
                            <div class="blog-top">
                                <p>By {{ $post->user->name }}
                                    /  {{ $post->created_at->format('M-d-Y') }}
{{--                                    /  <i class="fa fa-eye"> {{ $post->views_count }}</i>--}}
                                </p>
                            </div>
                            <div class="blog-bottom">
                                <h2>{{ Str::limit($post->title,30) }} </h2>
                                <a href="{{ route('read', $post->id) }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
