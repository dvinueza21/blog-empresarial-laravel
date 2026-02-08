const WorkSteps = ({ data }) => {
  const { id, title, description, svgPath } = data;

  return (
    <article className="rounded-2xl border border-black/10 bg-white p-5 md:p-6 shadow-sm">
      {/* Icono */}
      <div className="mb-4">
        <div className="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-[#efe9ff]">
          <svg
            viewBox="0 0 32 32"
            className="h-6 w-6"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d={svgPath} fill="#6D28D9" />
          </svg>
        </div>
      </div>

      {/* Texto */}
      <h3 className="text-base md:text-lg font-semibold text-slate-900">
        {id}. {title}
      </h3>

      <p className="mt-2 text-sm md:text-[15px] leading-relaxed text-slate-600">
        {description}
      </p>
    </article>
  );
};

export default WorkSteps;