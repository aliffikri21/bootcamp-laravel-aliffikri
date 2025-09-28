<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <img class="mb-4" src="{{ asset('bootstrap-logo.png') }}" alt="" height="80" width="100" />
        <h1 class="mb-3 h3 fw-normal">Silahkan Login</h1>
        <div class="form-floating">
            <input type="text" name="username" class="form-control" value="{{ old('username') }}" id="username"
                placeholder="username" />
            <label for="username">Username</label>
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" />
            <label for="floatingPassword">Password</label>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="my-3 form-check text-start">
            <input class="form-check-input text-gray:800" type="checkbox" name="remember" id="checkDefault" />
            <label class="form-check-label" for="checkDefault">
                Ingat saya
            </label>
        </div>
        <button class="py-2 btn btn-primary w-100" type="submit">
            Masuk
        </button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2025</p>
    </form>
</x-guest-layout>
