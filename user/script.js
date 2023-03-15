const box = document.querySelector(".box");

const dragging = (e) => {
    box.scrollleft = e.pagex;
}

box.addEventListener("mousemove", dragging);