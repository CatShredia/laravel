import { defineConfig } from "vite";
import laravelVite from "laravel-vite-plugin";

export default defineConfig({
	plugins: [
		laravelVite({
			input: ["resources/css/app.css", "resources/js/app.js"],
			refresh: true,
		}),
	],
	resolve: {
		// Добавьте это, если еще нет
		alias: {
			"@": "/resources", // Важно, чтобы этот путь существовал
		},
	},
});
