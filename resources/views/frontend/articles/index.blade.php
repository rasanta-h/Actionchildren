@extends('frontend.base')

@section('content')
@include('frontend.includes.banner')



                <!-- Blog Start -->
                <div class="blog">
                    <div class="container">
                        <div class="section-header text-center">
                            <p>Our Blog</p>
                            <h2>Latest news & articles directly from our blog</h2>
                        </div>
                        <div class="row">

                            @foreach ($articles as $article)
                                  <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <img src="{{asset($article->image)}}" alt="Image">
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="{{ route('blog.show',$article->id) }}">{{ $article->title }}</a></h3>
                                        <p>
                                            {{ Str::limit($article->excerpt,100) }}
                                        </p>
                                    </div>
                                    <div class="blog-meta">
                                        <p><i class="fa fa-arrow-rightr"></i><a class="btn btn-primary" href="{{ route('blog.show',$article->id) }}">Read</a></p>
                                        <p><i class="fa fa-comments"></i><a href="">{{$article->updated_at}}</a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>

                    </div>
                </div>
                <!-- Blog End -->
                @include('frontend.includes.BecomeVolunteer')
@endsection
