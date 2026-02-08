import { Link } from "@inertiajs/react";

import Introduction from "../components/introduction/Introduction";
import Profile from "../components/profile/Profile";
import WorkProcess from "../components/workProcess/WorkProcess";
import Blog from "../components/blog/Blog";

export default function Home() {
  const year = new Date().getFullYear();

  return (
    <div className="min-h-screen bg-[#f5f6f7] text-slate-900">
      {/* Header */}
      <header className="sticky top-0 z-50 border-b border-black/10 bg-[#f5f6f7]/80 backdrop-blur">
        <div className="mx-auto flex max-w-6xl items-center justify-between px-6 py-3">
          {/* Brand */}
          <Link href="/" className="flex items-center gap-2">
            <div className="h-3 w-3 rounded-full bg-slate-900" />
            <span className="text-sm font-semibold tracking-tight md:text-base">
              Andrés Arias Blog
            </span>
          </Link>

          {/* Nav */}
          <nav className="hidden gap-6 text-sm text-slate-600 md:flex">
            <a className="hover:text-slate-900" href="#blog">
              Artículos
            </a>
            <a className="hover:text-slate-900" href="#categorias">
              Categorías
            </a>
            <a className="hover:text-slate-900" href="#newsletter">
              Newsletter
            </a>
          </nav>

          {/* Actions */}
          <div className="flex items-center gap-2">
            <a
              href="#contact"
              className="rounded-full bg-slate-900 px-4 py-2 text-sm text-white transition hover:bg-black"
            >
              Contacto
            </a>

            {/* Login Breeze */}
            <a
  href="/login"
  className="rounded-full border border-black/10 bg-white px-4 py-2 text-sm text-slate-900 transition hover:bg-black/5"
>
  Login
</a>
          </div>
        </div>
      </header>

      {/* Main */}
      <main className="mx-auto max-w-6xl px-6">
        {/* HERO */}
        <section className="py-10">
          <div className="overflow-hidden rounded-3xl border border-black/10 bg-white shadow-sm">
            <div className="p-6 md:p-10">
              <div className="grid grid-cols-1 items-start gap-10 lg:grid-cols-2">
                {/* IZQUIERDA */}
                <div className="relative z-10">
                  <Introduction />
                </div>

                {/* DERECHA */}
                <div className="relative z-0 flex justify-center lg:justify-end">
                  <Profile />
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* Work process */}
        <section className="pb-14">
          <div className="rounded-3xl border border-black/10 bg-white p-6 shadow-sm md:p-10">
            <WorkProcess />
          </div>
        </section>

        {/* Blog */}
        <section id="blog" className="pb-14">
          <div className="rounded-3xl border border-black/10 bg-white p-6 shadow-sm md:p-10">
            <Blog />
          </div>
        </section>

        {/* Anchors */}
        <div id="categorias" className="h-1" />
        <div id="newsletter" className="h-1" />
        <div id="contact" className="h-1" />
      </main>

      {/* Footer */}
      <footer className="border-t border-black/10">
        <div className="mx-auto max-w-6xl px-6 py-6 text-sm text-slate-600">
          © {year} Andrés Arias Blog · Estrategia, SEO y crecimiento.
        </div>
      </footer>
    </div>
  );
}