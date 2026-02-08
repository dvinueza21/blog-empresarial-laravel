<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mensajes de contacto
            </h2>

            <a href="{{ route('dashboard') }}"
               class="rounded-full border border-black/10 bg-white px-4 py-2 text-sm text-slate-900 hover:bg-black/5 transition">
                ← Volver al dashboard
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="mx-auto max-w-6xl px-6">
            <div class="rounded-3xl border border-black/10 bg-white shadow-sm overflow-hidden">
                <div class="p-6 md:p-10">

                    @if ($messages->count() === 0)
                        <div class="rounded-xl border border-black/10 bg-[#f5f6f7] p-6 text-center text-slate-600">
                            No hay mensajes todavía.
                        </div>
                    @else
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm">
                                <thead>
                                    <tr class="border-b border-black/10 text-left text-slate-600">
                                        <th class="py-3">Nombre</th>
                                        <th>Email</th>
                                        <th>Asunto</th>
                                        <th>Fecha</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-black/5">
                                    @foreach ($messages as $message)
                                        <tr class="hover:bg-black/5 transition">
                                            <td class="py-4 font-medium text-slate-900">
                                                {{ $message->name }}
                                            </td>
                                            <td class="text-slate-700">
                                                {{ $message->email }}
                                            </td>
                                            <td class="text-slate-700">
                                                {{ Str::limit($message->subject, 30) }}
                                            </td>
                                            <td class="text-slate-600">
                                                {{ $message->created_at->format('d/m/Y H:i') }}
                                            </td>
                                            <td class="text-right">
                                                <a href="{{ route('admin.messages.show', $message) }}"
                                                   class="rounded-full bg-slate-900 px-3 py-1.5 text-xs text-white hover:bg-black transition">
                                                    Ver
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6">
                            {{ $messages->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>