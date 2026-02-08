<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('app.name', 'Blog Empresarial') }}</title>

    {{-- Vite (sin React) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f5f6f7] text-slate-900 antialiased">
    @yield('content')

    <script>
      window.scrollToId = function (id, offset = 90, duration = 1200) {
        const target = document.getElementById(id);
        if (!target) return;

        const start = window.pageYOffset;
        const end = target.getBoundingClientRect().top + start - offset;

        let startTime = null;

        const easeInOutCubic = (t) =>
          t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;

        function step(now) {
          if (!startTime) startTime = now;
          const elapsed = now - startTime;
          const t = Math.min(elapsed / duration, 1);
          const eased = easeInOutCubic(t);

          window.scrollTo(0, start + (end - start) * eased);

          if (t < 1) requestAnimationFrame(step);
        }

        requestAnimationFrame(step);
      };
    </script>
</body>
</html>