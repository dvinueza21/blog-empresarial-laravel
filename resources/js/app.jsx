import React from "react";
import { createRoot } from "react-dom/client";
import "./bootstrap";
import "../css/app.css";

import Home from "./pages/Home";

const container = document.getElementById("app");

if (container) {
  createRoot(container).render(
    <React.StrictMode>
      <Home />
    </React.StrictMode>
  );
}