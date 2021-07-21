@extends('layouts.site')

@section('content')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <p>
                        <img src="{{$blog->featured_image_url}}" alt="" class="img-fluid">
                    </p>
                    <h2 class="mb-3">{{$blog->title}}</h2>
                    <p class="text-justify">

                    {!! $blog->body !!}
                    </p>

                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">



                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>

                        @foreach($recent as $blog)
                            <?php
                                $user = \App\Models\User::find($blog->user_id);
                            ?>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" href="{{route('viewblog',$blog->slug)}}" style="background-image: url({{$blog->featured_image_url}});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{route('viewblog',$blog->slug)}}">{{$blog->title}}</a></h3>
                                <div class="meta">
                                    <div><a href="{{route('viewblog',$blog->slug)}}"><span class="icon-calendar"></span> {{$blog->created_at->diffForHumans()}}</a></div>
                                    <div><a href="{{route('viewblog',$blog->slug)}}"><span class="icon-person"></span> {{$user->name}}</a></div>
                                </div>
                            </div>
                        </div>

                            @endforeach
                    </div>


            </div>
        </div>
    </section>
@endsection
