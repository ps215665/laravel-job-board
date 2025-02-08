<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel New</title>

{{--    <!-- Fonts -->--}}
{{--    <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />--}}
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
    <body class="mx-auto mt-10 max-w-2xl bg-slate-200 text-slate-700">
    <nav class="mb-8 flex justify-between text-lg font-medium">
        <ul class="flex space-x-2 items-center">
            <li>
                <a href="{{route('jobs.index')}}" class="bg-black text-white rounded-md px-2 py-1">Home</a>
            </li>
        </ul>
        <ul class="flex space-x-2 items-center">
            @auth
                <li>
                    <span class="text-slate-600 font-semibold mr-3">Welcome, {{ auth()->user()->name ?? ''}}</span>
                </li>
                <li>
                    <form method="POST" action="{{route('auth.destroy')}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="cursor-pointer bg-red-500 text-white rounded-md px-2 py-0.5 hover:bg-red-600">Logout</button>
                    </form>

                </li>
                @else
                <a href="{{route('auth.create')}}" class="bg-blue-500 text-white px-2 py-0.5 rounded-md">Login</a>
            @endauth
        </ul>
    </nav>

    @if(session('success'))
        <div role="alert"
            class="my-8 rounded-md border-l-4 border-green-300 bg-green-100 p-4 text-green-700 opacity-75">
            <p class="font-bold">Success!</p>
            <p>{{session('success')}}</p>
        </div>
    @endif
        {{$slot}}
    </body>
</html>
