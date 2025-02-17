<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>@yield('title',config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    @include('front.layouts.inc.head')

</head>
<body>
<header>
    @include('front.layouts.inc.header')
</header>

@if (Request::path() !== 'home' )
    @include('front.layouts.inc.banner')
@elseif (Request::path() == 'home' )
    @include('front.layouts.inc.slider')
@endif


<main>
    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                @yield('content')
                @include('front.layouts.inc.right_sideBar')
            </div>
        </div>
    </section>
</main>

@include('front.layouts.inc.footer')
@include('front.layouts.inc.footer_script')

</body>
</html>
