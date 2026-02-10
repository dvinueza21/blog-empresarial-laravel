<!doctype html>
<html lang="es" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Andrés Arias Blog') }}</title>

  {{-- Tailwind / Vite --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    html { scroll-padding-top: 90px; }
  </style>
</head>

<body class="min-h-screen bg-[#f5f6f7] text-slate-900">
  {{-- HEADER (centrado) --}}
  <header class="sticky top-0 z-50 border-b border-black/10 bg-[#f5f6f7]/80 backdrop-blur">
    <div class="mx-auto flex w-full max-w-6xl items-center justify-between px-6 py-3">
      <a href="{{ route('home') }}" class="flex items-center gap-2">
        <span class="h-3 w-3 rounded-full bg-slate-900"></span>
        <span class="text-sm font-semibold tracking-tight md:text-base">Andrés Arias Blog</span>
      </a>

      <nav class="hidden gap-6 text-sm text-slate-600 md:flex">
        <a href="#blog" class="hover:text-slate-900"></a>
        <a href="#categorias" class="hover:text-slate-900"></a>
        <a href="#newsletter" class="hover:text-slate-900"></a>
      </nav>

      <div class="flex items-center gap-2">
        <a href="#contact"
           class="rounded-full bg-slate-900 px-4 py-2 text-sm text-white transition hover:bg-black">
          Contacto
        </a>

        @auth
          <a href="{{ route('dashboard') }}"
             class="rounded-full border border-black/10 bg-white px-4 py-2 text-sm text-slate-900 transition hover:bg-black/5">
            Dashboard
          </a>
        @else
          <a href="{{ route('login') }}"
             class="rounded-full border border-black/10 bg-white px-4 py-2 text-sm text-slate-900 transition hover:bg-black/5">
            Login
          </a>
        @endauth
      </div>
    </div>
  </header>


  <main class="mx-auto w-full max-w-6xl px-6">
    {{-- HERO CARD --}}
    <section class="py-10">
      <div class="rounded-3xl border border-black/10 bg-white shadow-sm overflow-hidden">
        <div class="p-6 md:p-10">
          <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 lg:items-start">
            {{-- IZQUIERDA --}}
            <div>
              <h1 class="text-4xl md:text-5xl font-semibold tracking-tight">
                Bienvenid@
              </h1>

              <p class="mt-5 max-w-xl text-sm md:text-base text-slate-600 leading-relaxed">
                Ayudo a pequeñas empresas a crecer con SEO, contenido y estrategia.
                Con la finalidad de ofertar servicios de gestión de talento humano con analítica de datos
                y transformación digital para organizaciones de la economía social y solidaria (emprendimientos, pymes).
              </p>

              {{-- STATS --}}
              <div class="mt-8 grid grid-cols-3 gap-4 max-w-lg">
                <div class="rounded-2xl border border-black/10 bg-[#f5f6f7] p-4 text-center">
                  <div class="text-2xl font-semibold">15</div>
                  <div class="mt-1 text-xs text-slate-600">años<br>Experiencia</div>
                </div>
                <div class="rounded-2xl border border-black/10 bg-[#f5f6f7] p-4 text-center">
                  <div class="text-2xl font-semibold">150+</div>
                  <div class="mt-1 text-xs text-slate-600">Proyectos<br>liderados</div>
                </div>
                <div class="rounded-2xl border border-black/10 bg-[#f5f6f7] p-4 text-center">
                  <div class="text-2xl font-semibold">58</div>
                  <div class="mt-1 text-xs text-slate-600">Clientes<br>felices</div>
                </div>
              </div>
            </div>

            {{-- DERECHA (tarjeta perfil) --}}
<div class="flex justify-center lg:justify-end">
  <div class="relative w-full max-w-md rounded-3xl border border-black/10 bg-[#f5f6f7] p-6 shadow-sm overflow-hidden">
    <div class="rounded-3xl border border-black/10 bg-white p-6">
      
      {{-- FOTO (contenida y centrada) --}}
      <div class="flex justify-center">
        <div class="w-full max-w-[320px]">
          <img
            src="/img/perfil.png"
            alt="Foto de Andrés"
            class="mx-auto h-[280px] md:h-[320px] w-auto object-contain select-none"
          >
        </div>
      </div>

      {{-- Social --}}
     <div class="mt-4 flex items-center justify-center gap-6 text-slate-700">

  <a href="https://facebook.com/tuusuario" target="_blank"
     class="transition-all duration-200 ease-out hover:-translate-y-1 hover:scale-[1.08] hover:text-slate-900">
    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
      <path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2V9.5c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.6l-.4 3h-2.2v7A10 10 0 0022 12z"/>
    </svg>
  </a>

  <a href="https://instagram.com/tuusuario" target="_blank"
     class="transition-all duration-200 ease-out hover:-translate-y-1 hover:scale-[1.08] hover:text-slate-900">
    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
      <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2a3 3 0 013 3v10a3 3 0 01-3 3H7a3 3 0 01-3-3V7a3 3 0 013-3h10zm-5 3.5A4.5 4.5 0 1016.5 12 4.5 4.5 0 0012 7.5zm0 7.3A2.8 2.8 0 1114.8 12 2.8 2.8 0 0112 14.8zM17.5 6a1 1 0 11-1 1 1 1 0 011-1z"/>
    </svg>
  </a>

  <a href="https://linkedin.com/in/tuusuario" target="_blank"
     class="transition-all duration-200 ease-out hover:-translate-y-1 hover:scale-[1.08] hover:text-slate-900">
    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
      <path d="M4.98 3.5a2.5 2.5 0 110 5 2.5 2.5 0 010-5zM3 8.98h4v12H3zM9 8.98h3.8v1.64h.05c.53-1 1.83-2.05 3.77-2.05 4.03 0 4.78 2.65 4.78 6.1v7.3h-4v-6.48c0-1.55-.03-3.55-2.16-3.55-2.16 0-2.49 1.69-2.49 3.44v6.59H9z"/>
    </svg>
  </a>

  <a href="mailto:contacto@tudominio.com"
     class="transition-all duration-200 ease-out hover:-translate-y-1 hover:scale-[1.08] hover:text-slate-900">
    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
      <path d="M2 5a3 3 0 013-3h14a3 3 0 013 3v14a3 3 0 01-3 3H5a3 3 0 01-3-3V5zm3-.5a1.5 1.5 0 00-1.5 1.5v.4l8.5 5.3 8.5-5.3V6A1.5 1.5 0 0019 4.5H5zm15.5 4.1l-8.2 5.1a1.5 1.5 0 01-1.6 0L3.5 8.6V18A1.5 1.5 0 005 19.5h14a1.5 1.5 0 001.5-1.5V8.6z"/>
    </svg>
  </a>

</div>

      {{-- Botones --}}
      <div class="mt-5 flex flex-col sm:flex-row items-center justify-center gap-3">
        <a href="#"
           class="rounded-full bg-slate-900 px-5 py-2 text-sm text-white hover:bg-black transition">
          Mis proyectos
        </a>

        <a href="{{ route('cv.download.latest') }}"
   class="rounded-full border border-black/10 bg-white px-5 py-2 text-sm text-slate-900 hover:bg-black/5 transition">
    Descargar CV
</a>
      </div>

    </div>
  </div>
</div>

          </div>
        </div>
      </div>
    </section>


    {{-- WORK PROCESS --}}
    <section class="pb-14">
      <div class="rounded-3xl border border-black/10 bg-white shadow-sm p-6 md:p-10">
        <p class="text-sm font-semibold text-slate-700">Proceso de Trabajo</p>
        <p class="mt-3 text-sm md:text-base text-slate-600 max-w-3xl">
          Trabajo con un enfoque claro: primero entiendo tu negocio, después defino la estrategia y finalmente ejecuto con calidad para conseguir resultados reales.
        </p>

        <div class="mt-8 rounded-3xl border border-black/10 bg-[#f5f6f7] p-5 md:p-8">
          <div class="grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-6">
            <div class="rounded-2xl border border-black/10 bg-white p-6 shadow-sm">
              <div class="h-12 w-12 rounded-xl bg-[#EDD8FF80] flex items-center justify-center">
                <span class="text-[#A53DFF] font-semibold">🗓</span>
              </div>
              <p class="mt-4 font-semibold text-lg">1. Investigación</p>
              <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                Analizo tu negocio, tu cliente ideal y tu competencia para definir el enfoque correcto desde el inicio.
              </p>
            </div>

            <div class="rounded-2xl border border-black/10 bg-white p-6 shadow-sm">
              <div class="h-12 w-12 rounded-xl bg-[#EDD8FF80] flex items-center justify-center">
                <span class="text-[#A53DFF] font-semibold">📈</span>
              </div>
              <p class="mt-4 font-semibold text-lg">2. Análisis</p>
              <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                Ordeno la información y la convierto en una estrategia clara: objetivos, prioridades y plan de acción.
              </p>
            </div>

            <div class="rounded-2xl border border-black/10 bg-white p-6 shadow-sm">
              <div class="h-12 w-12 rounded-xl bg-[#EDD8FF80] flex items-center justify-center">
                <span class="text-[#A53DFF] font-semibold">✏️</span>
              </div>
              <p class="mt-4 font-semibold text-lg">3. Diseño</p>
              <p class="mt-3 text-sm text-slate-600 leading-relaxed">
                Diseño experiencias digitales limpias y profesionales, enfocadas en claridad, confianza y conversión.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    {{-- BLOG --}}
    <section id="blog" class="pb-14">
      <div class="rounded-3xl border border-black/10 bg-white shadow-sm p-6 md:p-10">
        <p class="text-sm font-semibold text-slate-700 text-center">Blog</p>
        <p class="mt-2 text-sm text-slate-600 text-center">
          Check out my recent blog posts where I share insights on design, development, and the latest industry trends.
        </p>

        <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3">
          <div class="rounded-2xl border border-black/10 bg-[#f5f6f7] p-5">Post 1</div>
          <div class="rounded-2xl border border-black/10 bg-[#f5f6f7] p-5">Post 2</div>
          <div class="rounded-2xl border border-black/10 bg-[#f5f6f7] p-5">Post 3</div>
        </div>
      </div>
    </section>

    {{-- CONTACTO (ÚNICO ID contact) --}}
    <section id="contact" class="mt-24 scroll-mt-24">
      <div class="mx-auto max-w-5xl">
        <div class="rounded-3xl border border-black/10 bg-white p-8 md:p-12 shadow-sm">
          <div class="mb-8 text-center lg:text-left">
            <h2 class="text-2xl md:text-3xl font-semibold text-slate-900">Contacto</h2>
            <p class="mt-2 text-[13px] sm:text-base text-slate-600">
              Háblame de tus ideas <p>Estoy abierto a nuevas colaboraciones, proyectos y oportunidades.
            </p>
          </div>

          @php
            $commonClass = "w-full border-0 border-b-2 border-[#E6E8EB] bg-transparent px-0 py-3
                           placeholder:text-[15px] md:placeholder:text-lg placeholder:text-slate-400
                           focus:outline-none focus:border-slate-900";
          @endphp

          <form method="POST" action="{{ route('contact.store') }}" class="mx-2 flex flex-col gap-4 mt-4">
            @csrf

            <input type="text" name="name" placeholder="Nombre*" value="{{ old('name') }}" class="{{ $commonClass }}" required>
            <input type="email" name="email" placeholder="Email*" value="{{ old('email') }}" class="{{ $commonClass }}" required>
            <input type="text" name="location" placeholder="Ubicación*" value="{{ old('location') }}" class="{{ $commonClass }}" required>

            <div class="flex flex-col gap-4 sm:flex-row sm:gap-5">
              
              <input type="text" name="subject" placeholder="Asunto*" value="{{ old('subject') }}" class="{{ $commonClass }} sm:w-1/2" required>
            </div>

            <textarea name="message" placeholder="Mensaje*" rows="4" class="{{ $commonClass }} resize-none" required>{{ old('message') }}</textarea>

            <div class="pt-3 lg:pt-8">
              <button
    type="submit"
    class="rounded-full bg-slate-900 px-6 py-2.5 text-sm text-white hover:bg-black transition cursor-wait"
    onclick="this.disabled=true; this.innerText='Enviando…'; this.form.submit();"
>
    Enviar mensaje
</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    {{-- anchors sin duplicar contact --}}
    <div id="categorias" class="h-1"></div>
    <div id="newsletter" class="h-1"></div>
  </main>


  <footer class="border-t border-black/10">
    <div class="mx-auto w-full max-w-6xl px-6 py-6 text-sm text-slate-600">
      © {{ date('Y') }} Andrés Arias Blog · Estrategia, SEO y crecimiento.
    </div>
  </footer>
</body>
</html>