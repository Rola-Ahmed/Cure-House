// let navBarBtn = document.getElementById("hoohoh").value;

// navBarBtn.addEventListener("click", Scroll);
// //.addEventListener("click", myFunction);

// function Scroll() {
//     console.log("1");
//     //console.log(navBarBtn);
// }

let element = document.getElementsByTagName("a");
console.log(element);

// Loop through each element and add an event listener
for (let i = 0; i < element.length; i++) {
    element[i].addEventListener("click", function () {
        // element[i].scrollTo(0, 81);
        console.log(
            "element[i].getAttribute('name') => ",
            element[i].getAttribute("name")
        );

        let x = element[i].getAttribute("name");
        console.log("x => ", x);
        let idd = document.getElementById(x);
        console.log(idd);
        let topDistance = idd.getBoundingClientRect();
        console.log(topDistance.y);

        idd.scrollIntoView({
            behavior: "smooth",
            block: "end",
            inline: "nearest",
        });
    });
}
// element.addEventListener("click", myFunction);

function myFunction() {
    console.log(element);
}
