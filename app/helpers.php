<?php

if (! function_exists('vite_built_assets')) {
    /**
     * Return built asset paths from Vite manifest (production without dev server).
     * Returns null if manifest is missing — use @vite() in dev instead.
     */
    function vite_built_assets(): ?array
    {
        $manifestPath = public_path('build/manifest.json');
        if (! file_exists($manifestPath)) {
            return null;
        }
        $manifest = json_decode(file_get_contents($manifestPath), true);
        if (! $manifest) {
            return null;
        }
        $css = $manifest['resources/css/app.css']['file'] ?? null;
        $js = $manifest['resources/js/app.js']['file'] ?? null;
        if (! $css || ! $js) {
            return null;
        }
        return [
            'css' => asset('build/'.$css),
            'js' => asset('build/'.$js),
        ];
    }
}
