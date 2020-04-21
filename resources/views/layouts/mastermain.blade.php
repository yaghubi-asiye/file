<!DOCTYPE html>
<html lang="fa">
 <head>
   @include('layouts.partials.head')
 </head>
 <body  dir="rtl" class="goto-here">
<div class="wrapper-wide">
@include('layouts.partials.header')
@yield('content')
@include('layouts.partials.footer')
@include('layouts.partials.footer-scripts')
</div>
 </body>
</html>
