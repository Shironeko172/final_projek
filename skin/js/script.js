document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".kategori");
    const items = document.querySelectorAll(".item");

    filterButtons.forEach(button => {
        button.addEventListener("click", () => {
            const filterValue = button.getAttribute("data-filter");
            items.forEach(item => {
                item.classList.remove("show");
                if (filterValue === "all" || item.classList.contains(filterValue)) {
                    item.classList.add("show");
                }
            });
        });
    });
});
window.onload = function () {
    var elementToClick = document.getElementById('theps');
    if (elementToClick) {
        var numberOfClicks = 1;

        for (var i = 0; i < numberOfClicks; i++) {
            elementToClick.click();
        }
    } else {
        console.log("Element not found.");
    }
};