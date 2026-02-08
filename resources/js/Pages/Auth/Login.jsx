import { Head, Link, useForm } from "@inertiajs/react";

export default function Login() {
  const { data, setData, post, processing, errors } = useForm({
    email: "",
    password: "",
    remember: false,
  });

  const submit = (e) => {
    e.preventDefault();
    post(route("login"));
  };

  return (
    <>
      <Head title="Login" />

      <div className="min-h-screen flex items-center justify-center bg-[#f5f6f7] px-4">
        <div className="w-full max-w-md rounded-3xl bg-white border border-black/10 shadow-sm p-8">
          <h1 className="text-2xl font-semibold text-slate-900 mb-6">
            Iniciar sesión
          </h1>

          <form onSubmit={submit} className="space-y-4">
            {/* Email */}
            <div>
              <label className="block text-sm font-medium text-slate-700">
                Email
              </label>
              <input
                type="email"
                value={data.email}
                onChange={(e) => setData("email", e.target.value)}
                className="mt-1 w-full rounded-lg border border-black/10 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-slate-900"
              />
              {errors.email && (
                <div className="text-sm text-red-600 mt-1">
                  {errors.email}
                </div>
              )}
            </div>

            {/* Password */}
            <div>
              <label className="block text-sm font-medium text-slate-700">
                Contraseña
              </label>
              <input
                type="password"
                value={data.password}
                onChange={(e) => setData("password", e.target.value)}
                className="mt-1 w-full rounded-lg border border-black/10 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-slate-900"
              />
              {errors.password && (
                <div className="text-sm text-red-600 mt-1">
                  {errors.password}
                </div>
              )}
            </div>

            {/* Remember */}
            <label className="flex items-center gap-2 text-sm text-slate-600">
              <input
                type="checkbox"
                checked={data.remember}
                onChange={(e) => setData("remember", e.target.checked)}
              />
              Recuérdame
            </label>

            {/* Submit */}
            <button
              disabled={processing}
              className="w-full rounded-full bg-slate-900 py-2 text-white hover:bg-black transition"
            >
              Entrar
            </button>
          </form>

          {/* Links */}
          <div className="mt-6 text-sm text-slate-600 flex justify-between">
            <Link href={route("password.request")} className="hover:underline">
              ¿Olvidaste la contraseña?
            </Link>

            <Link href="/" className="hover:underline">
              Volver al inicio
            </Link>
          </div>
        </div>
      </div>
    </>
  );
}