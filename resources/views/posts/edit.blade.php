@extends('main')

@section('subtitle', 'Edit Posts')
@section('title', 'Edit Blog Entries')


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

                {{-- Single Post --}}
                <div class="col-lg-12">
                    <div class="blog-post">
                        <div class="blog-thumb">
                        {{ Html::image('assets/images/laravel.jpg', 'Laravel') }}
                        </div>

                        <div class="down-content">

                            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

                            <span>Laravel</span>

                            <h4>{{ Form::text('title', null, ['class' => "form-control"]) }}</h4>

                            <ul class="post-info">
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">Created at: {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</a></li>
                                <li><a href="#">Updated at: {{ date('M j, Y h:ia', strtotime($post->updated_at))  }}</a></li>
                            </ul>

                            <p>{{ Form::textarea('body', null, ['class' => 'form-control']) }}</p>

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
                                <div class="col-sm-4 offset-2">
                                    {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                                </div>
                                <div class="col-sm-4">
                                    {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'])}}
                                </div>
                            </div>
                             {!! Form::close() !!}
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

          {{-- Sidebar --}}
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
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
