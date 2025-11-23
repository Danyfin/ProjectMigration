import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const selectElements = document.querySelectorAll(".status-from #status_id");
console.log(selectElements);
for (let elem of selectElements) {
    elem.addEventListener("change", function () {
        this.form.submit();
    });
}
