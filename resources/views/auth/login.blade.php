<x-guest-layout>
    <div class="min-h-screen bg-[#f5f6f7] text-slate-900 flex items-center justify-center px-6 py-10">
        <div class="w-full max-w-md">
            <a href="{{ route('home') }}" class="mb-6 inline-flex items-center gap-2 text-sm text-slate-600 hover:text-slate-900">
                <span class="h-2.5 w-2.5 rounded-full bg-slate-900"></span>
                Volver al inicio
            </a>

            <div class="rounded-3xl border border-black/10 bg-white shadow-sm p-6 md:p-8">
                <h1 class="text-2xl font-semibold tracking-tight">Iniciar sesión</h1>
                <p class="mt-2 text-sm text-slate-600">
                    Accede al panel para gestionar el blog.
                </p>

                <!-- Session Status -->
                <x-auth-session-status class="mt-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="mt-6 space-y-4">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input
                            id="email"
                            class="mt-1 block w-full rounded-xl border-black/10"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autofocus
                            autocomplete="username"
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Contraseña')" />
                        <x-text-input
                            id="password"
                            class="mt-1 block w-full rounded-xl border-black/10"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-black/20 text-slate-900 shadow-sm focus:ring-slate-900"
                                name="remember">
                            <span class="ms-2 text-sm text-slate-600">Recordarme</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-slate-600 hover:text-slate-900" href="{{ route('password.request') }}">
                                ¿Olvidaste tu contraseña?
                            </a>
                        @endif
                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-full bg-slate-900 px-4 py-2 text-sm text-white transition hover:bg-black"
                    >
                        Entrar
                    </button>

                    @if (Route::has('register'))
                        <p class="text-center text-sm text-slate-600">
                            ¿No tienes cuenta?
                            <a href="{{ route('register') }}" class="text-slate-900 hover:underline">Crear cuenta</a>
                        </p>
                    @endif
                </form>
            </div>

            <p class="mt-6 text-center text-xs text-slate-500">
                © {{ date('Y') }} Andrés Arias Blog
            </p>
        </div>
    </div>
</x-guest-layout>