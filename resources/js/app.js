import Alpine from "alpinejs";
import { initReveal } from "./reveal";

window.Alpine = Alpine;
Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
    // Defer reveal so it doesn't block first paint
    const runReveal = () => initReveal();
    if (typeof requestIdleCallback !== "undefined") {
        requestIdleCallback(runReveal, { timeout: 200 });
    } else {
        setTimeout(runReveal, 0);
    }

    const progress = document.getElementById("scroll-progress");
    const backTop = document.getElementById("back-to-top");

    const onScroll = () => {
        const scrollTop =
            document.documentElement.scrollTop || document.body.scrollTop;
        const docHeight =
            document.documentElement.scrollHeight -
            document.documentElement.clientHeight;
        const percent = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        if (progress) progress.style.width = `${percent}%`;
        if (backTop)
            backTop.style.display = scrollTop > 240 ? "inline-flex" : "none";
    };

    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll();
});
