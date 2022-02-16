let cbox = document.querySelectorAll(".xele");
cbox.forEach(box => {
    box.addEventListener('click', () => box.classList.toggle("border-blue-400"));
    querySelector('.bgx').style.background = 'blue';
});
