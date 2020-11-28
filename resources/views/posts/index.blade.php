@extends('main')

@section('subtitle', 'All Posts')
@section('title', 'All of Your Blog Entries')


@section('content')

    <!-- Page Content -->

    @include('partials._banner')

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
              @include('partials._messages')
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

                @foreach($posts as $post)

                 <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="assets/images/laravel.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Laravel</span>
                      <a href="post-details.html"><h4>{{ $post->title }}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">{{ $post->id }}</a></li>
                        <li><a href="#">Created at: {{ date('M j, Y', strtotime($post->created_at)) }}</a></li>
                        <li><a href="#">Updated at: {{ date('M j, Y', strtotime($post->updated_at))  }}</a></li>
                      </ul>
                      <p>{{ substr($post->body, 0, 100) }}{{ strlen($post->body) > 100 ? "..." : ""}}</p>
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
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                {!! Html::linkRoute('posts.show', 'View', array($post->id), array('class' => 'btn btn-light btn-block')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-light btn-block')) !!}
                            </div>
                        </div>
                    </div>
                  </div>
                </div>

                @endforeach

                {{-- Pagination --}}
                @include('partials._pagination')

              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">

                <div class="col-lg-12">
                  <div class="sidebar-item create-btn">
                      {!! Html::linkRoute('posts.create', 'Create New Post', null, array('class' => 'btn btn-warning btn-block')) !!}
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="post-details.html">
                          <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                          <span>May 31, 2020</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                          <span>May 28, 2020</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
                          <span>May 14, 2020</span>
                        </a></li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">- Nature Lifestyle</a></li>
                        <li><a href="#">- Awesome Layouts</a></li>
                        <li><a href="#">- Creative Ideas</a></li>
                        <li><a href="#">- Responsive Templates</a></li>
                        <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                        <li><a href="#">- Creative &amp; Unique</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">PSD</a></li>
                        <li><a href="#">Responsive</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
