<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mensaje recibido
            </h2>

            <a href="{{ route('admin.messages.index') }}"
               class="rounded-full border border-black/10 bg-white px-4 py-2 text-sm text-slate-900 hover:bg-black/5 transition">
                ← Volver a mensajes
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="mx-auto max-w-4xl px-6">
            <div class="rounded-3xl border border-black/10 bg-white shadow-sm overflow-hidden">
                <div class="p-6 md:p-10 space-y-6">

                    <div>
                        <p class="text-sm font-semibold text-slate-700">Nombre</p>
                        <p class="mt-1 text-slate-900">{{ $message->name }}</p>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-slate-700">Email</p>
                        <p class="mt-1 text-slate-900">{{ $message->email }}</p>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-slate-700">Ubicación</p>
                        <p class="mt-1 text-slate-900">{{ $message->location }}</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <p class="text-sm font-semibold text-slate-700">Presupuesto</p>
                            <p class="mt-1 text-slate-900">{{ $message->budget }}</p>
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-slate-700">Asunto</p>
                            <p class="mt-1 text-slate-900">{{ $message->subject }}</p>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-slate-700">Mensaje</p>
                        <div class="mt-2 rounded-xl border border-black/10 bg-[#f5f6f7] p-4 text-slate-800 whitespace-pre-line">
                            {{ $message->message }}
                        </div>
                    </div>

                    <div class="pt-4 border-t border-black/10 text-sm text-slate-600">
                        Recibido el {{ $message->created_at->format('d/m/Y H:i') }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>