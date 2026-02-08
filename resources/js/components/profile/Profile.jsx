import person from "../../assets/images/person2.png";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faDownload } from "@fortawesome/free-solid-svg-icons";
import SocialMedia from "../common/socialMedia/SocialMedia";

const Profile = () => {
  return (
    <div className="w-full max-w-md">
      <div className="rounded-3xl border border-black/10 bg-white shadow-sm p-6">
        {/* Imagen grande (marco gris suave) */}
        <div className="rounded-3xl border border-black/10 bg-[#f5f6f7] p-6 flex justify-center">
          <img
  src={person}
  alt="Perfil"
  className="h-[420px] md:h-[460px] w-auto object-contain"
/>
        </div>

        {/* Social media centrado */}
        <div className="mt-4 flex justify-center">
          <div className="rounded-xl border border-black/10 bg-white px-6 py-3 shadow-sm">
            <SocialMedia />
          </div>
        </div>

        {/* Botones centrados */}
        <div className="mt-6 flex justify-center gap-3">
          <a
            className="rounded-full bg-slate-900 px-5 py-2.5 text-sm text-white hover:bg-black transition"
            href="#!"
          >
            Mis proyectos
          </a>

          <a
            className="rounded-full border border-black/10 bg-white px-5 py-2.5 text-sm text-slate-900 hover:bg-black/5 transition"
            href="#!"
          >
            <FontAwesomeIcon icon={faDownload} className="mr-2" />
            Descargar CV
          </a>
        </div>
      </div>
    </div>
  );
};

export default Profile;