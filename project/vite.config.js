import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/css/app.css",
                "resources/js/app.js",

                "resources/css/admin/adminlte.css",
                "resources/js/admin/adminlte.js",
            ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            external: ["resources/plugins/flot/jquery.flot.js"],
        },
    },
});
