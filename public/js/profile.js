let editBtn = document.getElementById("edit_btn");
let updateBtn = document.getElementById("update_btn");

// console.log("editBtn =>", editBtn);

editBtn.addEventListener("click", EditSaveToDataBase);
//updateBtn.addEventListener("click", UpdateInDataBase);

function EditSaveToDataBase() {
    let element = document.getElementsByTagName("input");

    //button to update gnb el save

    console.log(element);
    for (let i = 0; i < element.length; i++) {
        console.log(element[i].readOnly);
        console.log(element[i].id);
        if (element[i].id == "inputEmail") {
            continue;
        }
        if (element[i].id == "uploaded_profile_image") {
            element[i].removeAttribute("disabled");
        }
        // console.log(element[i].getAttribute("readonly"));
        // element[i].setAttribute("readonly", "true");
        
        element[i].removeAttribute("readonly");
    }

    console.log(editBtn);
    console.log("hi");

    updateBtn.classList.remove("d-none");
    editBtn.classList.add("d-none");
}

function UpdateInDataBase() {
    let element = document.getElementsByTagName("input");

    for (let i = 0; i < element.length; i++) {
        console.log(element[i].readOnly);
        console.log(element[i].id);
        if (element[i].id == "inputEmail") {
            continue;
        }
        // console.log(element[i].getAttribute("readonly"));
        // element[i].setAttribute("readonly", "true");

        element[i].setAttribute("readonly", true);
    }

    console.log(editBtn);
    console.log("updates");

    updateBtn.classList.add("d-none");
    editBtn.classList.remove("d-none");
}

let form = document.getElementById("formId");
function submitForm(event) {
    event.preventDefault();
}
//form.addEventListener("submit", submitForm);

// element[i].addEventListener("click", function () {
//     // element[i].scrollTo(0, 81);
//     console.log();

//     let x = element[i].getAttribute("name");
//     console.log("x => ", x);
//     let idd = document.getElementById(x);
//     console.log(idd);
//     let topDistance = idd.getBoundingClientRect();
//     console.log(topDistance.y);
// });
