<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ ('/css/style.css') }}">
   
  </head>
  <body>
 {{-- Side Bar --}}
 <div class="sidebar" id="sidebar">
    <div class="listS" id="listS">
     <div class="list1">
         <a href="/">Dashboard</a>
     </div>
     <div class="list2">
         <a href="/dataproduk">Kelola data produk</a>
     </div>
     <div class="list3">
         <a href="{{ route('logout') }}"  class="fixed-bottom" 
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
{{ __('Logout') }}</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form>
     </div>
    </div>
    </div>
     {{-- End Side Bar --}}
     
     <div class="viewport" id="viewport">
{{-- Content --}}
@yield('content')
{{-- End Content --}}
</div>
<script src="{{ ('/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
{{-- Sweet alert --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>

