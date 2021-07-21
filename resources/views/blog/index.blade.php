@extends('layouts.site')
@section('content')

    <section class="ftco-section bg-light">
        <div class="container">

            <div class="row d-flex">
                @foreach($blogs as $blog)
                    <?php
                        $user = \App\Models\User::find($blog->user_id);
                    ?>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{route('viewblog',$blog->slug)}}" class="block-20" style="background-image: url('{{$blog->featured_image_url}}');">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">{{$blog->created_at->day}}</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">{{$blog->created_at->year}}</span>
                                    <span class="mos">{{$blog->created_at->monthName}}</span>
                                </div>
                            </div>
                            <h3 class="heading mb-0"><a href="#">{{$blog->title}}</a></h3>
                            <p><a href="{{route('viewblog',$blog->slug)}}" class="btn btn-primary">Read more</a></p>
                            <small>by {{$user->name}}</small>
                        </div>
                    </div>
                </div>

                    @endforeach

            <div class="col-md-12">
                {{$blogs->links()}}
            </div>
            </div>


        </div>

    </section>


@endsection
