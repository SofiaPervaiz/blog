@extends('main')

@section('subtitle', 'Recent Posts')
@section('title', 'Our Recent Blog Entries')


@section('content')

    <!-- Page Content -->
    @include('partials._preloader')

    @include('partials._banner')

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>If you love programming.</span>
                  <h4>Subscribe to my newsletter now!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a href="#" target="_parent">Subscribe Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">

                @foreach ($posts as $post)

                    <div class="col-lg-6">
                    <div class="blog-post">
                        <div class="blog-thumb">
                        <img src="assets/images/laravel.jpg" alt="">
                        </div>
                        <div class="down-content">
                        <span>Laravel</span>
                        <a href="post-details.html"><h4>{{ $post->title }}</h4></a>
                        <ul class="post-info">
                            <li><a href="#">{{$post->id}}</a></li>
                            <li><a href="#">Created at: {{ date('M j, Y', strtotime($post->created_at)) }}</a></li>
                            <li><a href="#">Updated at: {{ date('M j, Y', strtotime($post->updated_at)) }}</a></li>
                        </ul>
                        <p>{{ substr($post->body, 0, 100) }}{{strlen($post->body)> 100 ? '...' : ""}}</p>
                        <div class="post-options">
                            <div class="row">
                            <div class="col-lg-12">
                                <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li><a href="#">Best Templates</a>,</li>
                                <li><a href="#">TemplateMo</a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                @endforeach

                {{--  @include('partials._pagination')  --}}

              </div>

            </div>
          </div>


        @include('partials._sidebar')


        </div>
      </div>
    </section>

@endsection
