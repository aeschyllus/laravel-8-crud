<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>
        {{-- Container --}}
        <div class="bg-gradient-to-tr from-purple-600 to-pink-300 h-screen flex justify-center items-center">
            {{-- Card --}}
            <div class="bg-white w-screen max-w-4xl shadow-2xl">
                {{-- Card title --}}
                <div class="px-3 py-2 text-gray-700 flex justify-between">
                    @yield('title')
                </div>

                {{-- Card body --}}
                <div class="text-gray-700">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
