import Alpine from "alpinejs";
import { initReveal } from "./reveal";

window.Alpine = Alpine;
Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
    initReveal();

    const progress = document.getElementById("scroll-progress");
    const backTop = document.getElementById("back-to-top");

    const onScroll = () => {
        const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const percent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        if (progress) progress.style.width = `${percent}%`;
        if (backTop) backTop.style.display = scrollTop > 240 ? "inline-flex" : "none";
    };

    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
});
