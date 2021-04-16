 <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="{{asset('css/app.css')}}" >

             <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Chatroom') }}</title>

       
        <!-- Styles -->
       
    </head>
    <body>
       @include('inc.navbar') 
    <div class="container">
        @include('inc.messages')
    @yield('content')     
     </div>
     <script src="{{ asset('js/app.js') }}"></script>
     <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
     <script>
         CKEDITOR.replace( 'article-ckeditor' );
     </script>
    </body>
</html>