import Alpine from "alpinejs";
import { initReveal } from "./reveal";

window.Alpine = Alpine;
Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
    initReveal();
});
