<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>



        <!-- Styles -->
      
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />



    </head>
    <body>
      <x-layout.app>
        <x-container>
          <div class="flex flex-row items-center justify-evenly w-screen">
            <div class="flex flex-col items-center justify-center gap-4">
              <div class="flex flex-col items-center justify-center gap-2">
                <h1 class="text-5xl font-bold">A <span class="text-blue-700"> PLATAFORMA </span> COMPLETA</h1>
                <p class="text-5xl font-bold">PARA SEUS<span class="text-blue-700"> LINKS </span></p>
              </div>
              <p class="text-xl text-gray-500 text-center contain-inline-size w-full mb-16">Na MyLynks, você consegue organizar e divulgar todos os seus links
              de maneira prática e ágil, comece já criando uma conta de forma gratuita. </p>
              <a class="w-full" href="{{ route('login') }}">
                <x-form.button>Criar minha conta na MyLinks</x-form.button>
              </a>
            </div>

            <div class="flex items-center justify-center rounded-4xl overflow-hidden">
            <img src="/storage/images/home.jpg" alt="MyLinks Image" class=" w-105 cursor-pointer" />
            </div>
          </div>
        </x-container>
      </x-layout.app>
    </body>
</html>
