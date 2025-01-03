const editProfileBtn = document.getElementById('edit-btn');
const overlay = document.getElementById('overlay');
const editDiv = document.querySelector('.edit-div');
const saveBtn = document.getElementById('save-btn');
const imageUpload = document.getElementById('image-upload');
const description = document.getElementById('epd');
const hobbies = document.getElementById('eph');



function showeditDiv() {
    overlay.style.display = 'block';
    editDiv.style.display = 'block';
}
 

function hideeditDiv() {
    overlay.style.display = 'none';
    editDiv.style.display = 'none';
}


function validateForm() {
    const descriptionValue = description.value.trim();
    const hobbiesSelected = Array.from(hobbies.selectedOptions).length > 0;

    if (!descriptionValue) {
        alert('Please write a new bio.');
        return false;
    }

    if (!hobbiesSelected) {
        alert('Please select at least one hobby.');
        return false;
    }

    return true;
}

saveBtn.addEventListener("click", (event) => {
    event.preventDefault(); 
    
    const descriptionInput = document.querySelector("#epd");
    const hobbiesSelect = document.querySelector("#eph");
    let isValid = true;

    if (!descriptionInput.value.trim()) {
        alert("Please write a new bio.");
        isValid = false;
    }else if(hobbiesSelect.selectedOptions.length === 0){
        alert("Please select at least one hobby.");
        isValid = false;
    }


    if (isValid) {
        const form = document.querySelector(".edit-div form");
        form.submit(); 
        hideeditDiv();
    }
});

editProfileBtn.addEventListener('click', showeditDiv);

overlay.addEventListener('click', hideeditDiv);