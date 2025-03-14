<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>



        <!-- Styles -->
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    </head>
    <!-- <body class="bg-slate-950 text-white w-screen h-screen overflow-hidden bg-[url(/storage/images/bg.png)] bg-repeat bg-[auto_100px]"> -->
    <body class="bg-slate-950 text-white w-screen h-screen overflow-hidden font-poppins">
      <x-nav-bar></x-nav-bar>
    {{ $slot }}
  </body>
</html>
