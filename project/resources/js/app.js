import $ from "jquery";
window.$ = window.jQuery = $;

import "@popperjs/core";
import "./bootstrap";
import "../sass/app.scss";
import "./../css/app.css";

const modules = import.meta.glob("../plugins/**/*.js");

for (const path in modules) {
    modules[path]()
        .then((module) => {})
        .catch((error) => {
            console.error(`Ошибка при импорте модуля ${path}:`, error);
        });
}
