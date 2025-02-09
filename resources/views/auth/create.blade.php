<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">
        {{'Sign in to your account'}}
    </h1>
    <x-card class="py-8 px-16">
        <form id="login" action="{{ route('auth.store') }}" method="POST">
            @csrf
            <div class="mb-8">
                <label for="email">E-Mail</label>
                <x-text-input name="email"></x-text-input>
            </div>
            <div class="mb-8">
                <label for="password">Password</label>
                <x-text-input name="password" type="password" class="mt-2"></x-text-input>
            </div>

            <div class="mb-8 flex justify-between text-sm font-medium">
                <div>
                    <dNiv class="flex items-center space-x-2">
                        <input type="checkbox" name="remember" class="rounder-sm border border-slate-400" />
                        <label for="">Remember Me</label>
                    </dNiv>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">Forget Password?</a>
                </div>
            </div>
            <x-button class="w-full bg-green-50 cursor-pointer">Login</x-button>
        </form>
    </x-card>
</x-layout>
