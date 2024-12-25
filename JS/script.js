function nextStep(step) {
    // if(document.getElementById('input-header').value === null){

    // }
    //krijo validimin
    document.getElementById(`step${step}`).classList.remove("active");

    document.getElementById(`step${step + 1}`).classList.add("active");
}