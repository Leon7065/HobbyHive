
const selectBtn = document.querySelector(".select-btn"),
    items = document.querySelectorAll(".item");

console.log(selectBtn, items);

selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
});

items.forEach(item => {
    item.addEventListener("click", () => {
        item.classList.toggle("checked");

        let checked = document.querySelectorAll(".checked"),
            btnText = document.querySelector(".btn-text");

        if (checked && checked.length > 0) {
            btnText.innerText = `${checked.length} Selected`;
        } else {
            btnText.innerText = "Select Language";
        }
    });
});

// Function to confirm and hide the container if any items are checked
function confirm() {
    const container = document.querySelector('.container');
    const checked = document.querySelectorAll(".checked");

    if (checked && checked.length > 0) {
        container.style.display = "none";
    }
}
