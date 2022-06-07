console.log("js was loaded!");
const navElems = document.getElementsByClassName("nav-custom");

Array.from(navElems).forEach((element) => {

    element.addEventListener("click", (el) =>{
        console.log("clicked "+el)
        removeClassName(navElems,"active");
        addClassName(el,"active");
    });
});

function removeClassName(elements, className) {
    elements.array.forEach((element) => {
        element.classList.remove(className);
    })
}

function addClassName(element, className) {
    element.classList.add(className);
}
