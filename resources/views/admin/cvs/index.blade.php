<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                CVs
            </h2>

            <a href="{{ route('dashboard') }}"
               class="inline-flex items-center gap-2 rounded-full border border-black/10 bg-white px-4 py-2 text-sm text-slate-900 hover:bg-black/5 transition">
                ← Volver al dashboard
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="mx-auto max-w-6xl px-6">
            <div class="rounded-3xl border border-black/10 bg-white shadow-sm overflow-hidden">
                <div class="p-6 md:p-10">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <p class="text-sm font-semibold text-slate-700">Listado de CVs</p>
                            <p class="mt-2 text-sm text-slate-600">
                                Estos son los currículums disponibles en la tabla <span class="font-semibold">cv_uploads</span>.
                            </p>
                        </div>

                        <a href="{{ route('home') }}"
                           class="rounded-full border border-black/10 bg-white px-4 py-2 text-sm text-slate-900 hover:bg-black/5 transition">
                            Ir al sitio
                        </a>
                    </div>

                    <div class="mt-8 overflow-hidden rounded-2xl border border-black/10">
                        <table class="min-w-full divide-y divide-black/10">
                            <thead class="bg-[#f5f6f7]">
                                <tr class="text-left text-xs font-semibold text-slate-600">
                                    <th class="px-5 py-3">Archivo</th>
                                    <th class="px-5 py-3">Mime</th>
                                    <th class="px-5 py-3">Tamaño</th>
                                    <th class="px-5 py-3">Fecha</th>
                                    <th class="px-5 py-3 text-right">Acción</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-black/10 bg-white">
                                @forelse($cvs as $cv)
                                    <tr class="text-sm text-slate-700">
                                        <td class="px-5 py-4">
                                            <div class="font-semibold text-slate-900">
                                                {{ $cv->original_name ?? $cv->path ?? 'CV' }}
                                            </div>
                                            <div class="mt-1 text-xs text-slate-500">
                                                Ruta: {{ $cv->path ?? '—' }}
                                            </div>
                                        </td>

                                        <td class="px-5 py-4">
                                            {{ $cv->mime ?? '—' }}
                                        </td>

                                        <td class="px-5 py-4">
                                            @php
                                                $size = (int) ($cv->size ?? 0);
                                                $kb = $size ? round($size / 1024, 1) : 0;
                                                $mb = $size ? round($size / (1024 * 1024), 2) : 0;
                                            @endphp
                                            {{ $size >= 1024 * 1024 ? $mb.' MB' : $kb.' KB' }}
                                        </td>

                                        <td class="px-5 py-4">
                                            {{ optional($cv->created_at)->format('d/m/Y H:i') }}
                                        </td>

                                        <td class="px-5 py-4 text-right">
                                            <a href="{{ route('admin.cvs.download', $cv) }}"
                                               class="inline-flex items-center rounded-full bg-slate-900 px-4 py-2 text-sm text-white hover:bg-black transition">
                                                Descargar
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-5 py-10 text-center text-sm text-slate-600">
                                            No hay CVs registrados aún. (Inserta uno en <b>cv_uploads</b> o luego hacemos el formulario de subida.)
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-8 text-sm text-slate-600">
                        Tip: El botón del Home descarga el último registro: <span class="font-semibold">/cv/latest</span>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>