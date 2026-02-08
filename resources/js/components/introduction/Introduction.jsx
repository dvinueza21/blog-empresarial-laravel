import person from "../../assets/images/person.png";

const stats = [
  { id: 1, value: "15", label: "años experiencia" },
  { id: 2, value: "150+", label: "proyectos liderados" },
  { id: 3, value: "58", label: "clientes felices" },
];

const Introduction = () => {
  return (
    <div className="pt-2">
      <h1 className="text-4xl md:text-5xl font-semibold tracking-tight">
        Bienvenid@
      </h1>

      <p className="mt-4 max-w-md text-sm md:text-base leading-relaxed text-slate-600">
        Ayudo a pequeñas empresas a crecer con SEO, contenido y estrategia. Con la
        finalidad de ofertar servicios de gestión de talento humano con analítica
        de datos y transformación digital para organizaciones de la economía social
        y solidaria (emprendimientos, pymes).
      </p>

      

      {/* Stats */}
      <div className="mt-8 grid grid-cols-3 gap-3 max-w-sm">
  {stats.map((s) => (
    <div
      key={s.id}
      className="rounded-2xl border border-black/10 bg-white p-4 text-center"
    >
      <p className="text-2xl font-semibold text-violet-600">
        {s.value}
      </p>
      <p className="mt-1 text-xs text-slate-500">
        {s.label}
      </p>
    </div>
  ))}
</div>

      {/* (Opcional) mini-card/preview a la derecha como en algunas variantes de la plantilla.
          Si NO quieres la mini imagen en la izquierda del hero, la dejamos fuera.
          Si luego quieres volver a meterla, me lo dices y te la armo igual que la referencia. */}
    </div>
  );
};

export default Introduction;