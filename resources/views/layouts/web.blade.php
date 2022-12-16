<!doctype html>
<html lang="en">
  <head>
    @include('components.head')
  </head>
  <body>
    <header>
        @include('components.navbar')
    </header>

    @yield('content')

    @include('components.script')

    @yield('script')

  </body>
</html>
