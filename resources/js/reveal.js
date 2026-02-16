export function initReveal() {
    const els = document.querySelectorAll(".reveal");
    if (els.length === 0) return;

    const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    if (reduceMotion) {
        els.forEach((el) => el.classList.add("show"));
        return;
    }

    if (!("IntersectionObserver" in window)) {
        els.forEach((el) => el.classList.add("show"));
        return;
    }

    const io = new IntersectionObserver(
        (entries) => {
            for (const e of entries) {
                if (e.isIntersecting) {
                    e.target.classList.add("show");
                    io.unobserve(e.target);
                }
            }
        },
        { threshold: 0.12 },
    );

    els.forEach((el) => io.observe(el));
}
