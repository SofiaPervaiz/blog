<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/"><h2>For the Love of Coding<em>.</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/')? "active" : "" }}">
            <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ Request::is('about')? "active" : "" }}" href="/about">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ Request::is('blogs')? "active" : "" }}" href="/blogs">Blog Entries</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ Request::is('posts')? "active" : "" }}" href="/posts">Post Details</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ Request::is('contact')? "active" : "" }}" href="/contact">Contact Us</a>
            </li>
        </ul>

        </div>
    </div>
    </nav>
</header>
