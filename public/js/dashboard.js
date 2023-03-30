// let form = document.getElementById("button");
// function submitForm(event) {
//     event.preventDefault();
// }

/* <script src="JavaScript/jquery-1.10.2.js" type="text/javascript"></script>; */

// $(function () {
//     // this will get the full URL at the address bar
//     var url = window.location.href;

//     // passes on every "a" tag
//     $(".topmenu a").each(function () {
//         // checks if its the same on the address bar
//         if (url == this.href) {
//             $(this).closest("li").addClass("active");
//             //for making parent of submenu active
//             $(this).closest("li").parent().parent().addClass("active");
//         }
//     });
// });

let dropDownBtn = document.getElementById("new-patient-dropDown-Btn");
dropDownBtn.addEventListener("click", function () {
    let dropDownList = document.getElementById("drop-down-menu-list");
    let caretUpIcon = document.getElementById("caret-up");
    let caretDownIcon = document.getElementById("caret-down");

    if (dropDownList.classList.contains("d-none")) {
        dropDownList.classList.remove("d-none");
        caretDownIcon.classList.add("d-none");
        caretUpIcon.classList.remove("d-none");
    } else {
        dropDownList.classList.add("d-none");
        caretDownIcon.classList.remove("d-none");
        caretUpIcon.classList.add("d-none");
    }
});
// let element = document.getElementsByTagName("a");
// console.log(element);

// // Loop through each element and add an event listener
// for (let i = 0; i < element.length; i++) {
//     element[i].addEventListener("click", function () {
//         // element[i].scrollTo(0, 81);
//         if (element[i].prop("href") == window.location.href) {
//             element[i].classList.add("active");
//         }
//     });
// }
//
