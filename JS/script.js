function nextStep(step) {
    // if(document.getElementById('input-header').value === null){

    // }
    //krijo validimin
    document.getElementById(`step${step}`).classList.remove("active");

    document.getElementById(`step${step + 1}`).classList.add("active");
}

// ================================= drop select ==============================

const selectBtn = document.querySelector(".select-btn"),
items = document.querySelectorAll(".item");

console.log(selectBtn,items);

selectBtn.addEventListener("click", () =>{
    selectBtn.classList.toggle("open"); 
});

items.forEach(item =>{
    item.addEventListener("click", () =>{
        item.classList.toggle("checked");
    
        let checked = document.querySelectorAll(".checked"),
        btnText = document.querySelector(".btn-text");

        if(checked && checked.length > 0){
            btnText.innerText = `${checked.length} Selected`;
        }else{
            btnText.innerText = "Select Language";
        }
    });
})