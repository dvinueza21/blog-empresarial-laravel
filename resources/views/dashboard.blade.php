<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Panel de control
            </h2>

            <a href="{{ route('home') }}"
               class="inline-flex items-center gap-2 rounded-full border border-black/10 bg-white px-4 py-2 text-sm text-slate-900 hover:bg-black/5 transition">
                ← Volver al inicio
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="mx-auto max-w-6xl px-6">
            <div class="rounded-3xl border border-black/10 bg-white shadow-sm overflow-hidden">
                <div class="p-6 md:p-10">
                    {{-- CABECERA --}}
                    <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                        <div>
                            <p class="text-sm font-semibold text-slate-700">Bienvenid@</p>
                            <h1 class="mt-2 text-2xl md:text-3xl font-semibold tracking-tight text-slate-900">
                                {{ auth()->user()->name }}
                            </h1>
                            <p class="mt-2 text-sm md:text-base text-slate-600">
                                Desde aquí podrás gestionar el blog (artículos, categorías y ajustes).
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-3">
                            <a href="{{ route('home') }}#blog"
                               class="rounded-full bg-slate-900 px-5 py-2.5 text-sm text-white hover:bg-black transition text-center">
                                Ver artículos
                            </a>

                            <a href="{{ route('home') }}"
                               class="rounded-full border border-black/10 bg-white px-5 py-2.5 text-sm text-slate-900 hover:bg-black/5 transition text-center">
                                Ir al sitio
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                        class="rounded-full border border-black/10 bg-white px-5 py-2.5 text-sm text-slate-900 hover:bg-black/5 transition w-full">
                                    Cerrar sesión
                                </button>
                            </form>
                        </div>
                    </div>

                    {{-- BLOQUE 1: TARJETAS INFO --}}
                    <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="rounded-2xl border border-black/10 bg-[#f5f6f7] p-5">
                            <p class="text-sm font-semibold text-slate-800">Acceso rápido</p>
                            <p class="mt-2 text-sm text-slate-600">
                                Enlaces principales para gestionar el contenido.
                            </p>
                            <div class="mt-4 flex flex-col gap-2">
                                <a href="{{ route('home') }}#blog"
                                   class="text-sm text-slate-900 underline underline-offset-4 hover:opacity-80">
                                    Ver sección Blog
                                </a>
                                <a href="{{ route('home') }}#contact"
                                   class="text-sm text-slate-900 underline underline-offset-4 hover:opacity-80">
                                    Ir a Contacto
                                </a>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-black/10 bg-[#f5f6f7] p-5">
                            <p class="text-sm font-semibold text-slate-800">Estado</p>
                            <p class="mt-2 text-sm text-slate-600">
                                Sesión iniciada correctamente.
                            </p>
                            <div class="mt-4 text-sm text-slate-700">
                                <div><span class="font-semibold">Email:</span> {{ auth()->user()->email }}</div>
                                <div class="mt-1"><span class="font-semibold">Fecha:</span> {{ now()->format('d/m/Y H:i') }}</div>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-black/10 bg-[#f5f6f7] p-5">
                            <p class="text-sm font-semibold text-slate-800">Siguiente paso</p>
                            <p class="mt-2 text-sm text-slate-600">
                                Cuando quieras, añadimos el panel editorial (crear/editar artículos).
                            </p>
                            <div class="mt-4">
                                <span class="inline-flex items-center rounded-full bg-white px-3 py-1 text-xs text-slate-700 border border-black/10">
                                    Próximo: CRUD de artículos
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- BLOQUE 2: ADMIN (Mensajes + CVs) --}}
                    <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- MENSAJES --}}
                        <div class="rounded-2xl border border-black/10 bg-white p-6 shadow-sm">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="text-sm font-semibold text-slate-800">Mensajes de contacto</p>
                                    <p class="mt-1 text-sm text-slate-600">
                                        Revisa los mensajes recibidos desde el formulario del Home.
                                    </p>
                                </div>

                                <a href="{{ route('admin.messages.index') }}"
                                   class="shrink-0 rounded-full bg-slate-900 px-4 py-2 text-sm text-white hover:bg-black transition">
                                    Ver mensajes
                                </a>
                            </div>

                            <div class="mt-5 rounded-xl border border-black/10 bg-[#f5f6f7] p-4 text-sm text-slate-700">
                                <div class="flex items-center justify-between">
                                    <span class="font-semibold">Acceso:</span>
                                    <span>/admin/mensajes</span>
                                </div>
                                <div class="mt-2 text-slate-600">
                                    (Más adelante podemos añadir “no leídos” y contador.)
                                </div>
                            </div>
                        </div>

                        {{-- CVS --}}
                        <div class="rounded-2xl border border-black/10 bg-white p-6 shadow-sm">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="text-sm font-semibold text-slate-800">Currículums (CV)</p>
                                    <p class="mt-1 text-sm text-slate-600">
                                        Gestiona los CVs disponibles para descarga desde el Home.
                                    </p>
                                </div>

                                <a href="{{ route('admin.cvs.index') }}"
                                   class="shrink-0 rounded-full bg-slate-900 px-4 py-2 text-sm text-white hover:bg-black transition">
                                    Ver CVs
                                </a>
                            </div>

                            <div class="mt-5 rounded-xl border border-black/10 bg-[#f5f6f7] p-4 text-sm text-slate-700">
                                <div class="flex items-center justify-between">
                                    <span class="font-semibold">Acceso:</span>
                                    <span>/admin/cvs</span>
                                </div>
                                <div class="mt-2 text-slate-600">
                                    (Luego añadimos “Subir nuevo CV” desde el panel.)
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- FOOTER --}}
                    <div class="mt-10 border-t border-black/10 pt-6 text-sm text-slate-600">
                        © {{ now()->format('Y') }} Andrés Arias Blog · Panel de administración
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>