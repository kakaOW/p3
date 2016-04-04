<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developer's Best Friend' --}}
        @yield('title','Developers Best Friend')
    </title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <div class="row">
      <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">Menu</div>
      </div>
      <div class="large-12 columns">
        <nav class="top-bar" id="example-menu" data-topbar>
          <div class="top-bar-left">
            <ul class="dropdown menu vertical medium-horizontal" data-dropdown-menu>
              <li class="menu-text">Developer's Best Friend</li>
              <li><a href="/">Home</a></li>
              <li><a href="/LoremIpsum">Lorem Ipsum</a></li>
              <li><a href="/RandomUser">Random User</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        <p>&copy; Yung Wei {{ date('Y') }}</p>
    </footer>

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
