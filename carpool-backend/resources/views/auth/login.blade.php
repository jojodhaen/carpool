<x-layouts.auth-layout>
    <x-slot:title>
        Login
    </x-slot:title>

    <h1>Login</h1>
    <form method="post" action="{{ route('login') }}" class="border-2 border-black">
        @csrf
        <legend>Login for admins only</legend>

        <label for="email">email</label>
        <input id="email" type="email" name="email" placeholder="email" required/>
        @if ($errors)
            <span class="error">{{ $errors->first('email') }}</span>
        @endif

        <label for="password">password</label>
        <input id="password" type="password" name="password" placeholder="password" required/>

        <button type="submit">Login</button>
    </form>
</x-layouts.auth-layout>
