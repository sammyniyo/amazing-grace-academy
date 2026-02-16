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

    // Scroll spy on home: highlight nav item for section in view
    const isHome = window.location.pathname === "/" || window.location.pathname === "";
    const nav = document.getElementById("main-nav");
    const sectionIds = ["programs", "events", "music-shop"];

    if (isHome && nav) {
        const sections = sectionIds
            .map((id) => document.getElementById(id))
            .filter(Boolean);
        if (sections.length === 0) return;

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    const id = entry.target.id;
                    const link = nav.querySelector(`a[data-section="${id}"]`);
                    if (!link) return;
                    if (entry.isIntersecting) {
                        link.classList.add("ui-pill-link-active");
                        nav.querySelectorAll("a[data-section]").forEach((a) => {
                            if (a !== link) a.classList.remove("ui-pill-link-active");
                        });
                    }
                });
            },
            { rootMargin: "-20% 0px -60% 0px", threshold: 0 }
        );

        let ticking = false;
        const checkHomeActive = () => {
            if (ticking) return;
            ticking = true;
            requestAnimationFrame(() => {
                const scrollTop = document.documentElement.scrollTop;
                const firstSectionTop = sections[0].getBoundingClientRect().top + scrollTop;
                const homeLink = nav.querySelector('a[data-section="home"]');
                if (homeLink && scrollTop < firstSectionTop - 100) {
                    homeLink.classList.add("ui-pill-link-active");
                    nav.querySelectorAll('a[data-section]:not([data-section="home"])').forEach((a) => {
                        a.classList.remove("ui-pill-link-active");
                    });
                }
                ticking = false;
            });
        };

        sections.forEach((el) => observer.observe(el));
        window.addEventListener("scroll", checkHomeActive, { passive: true });
        checkHomeActive();
    }
});
