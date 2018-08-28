var menu = document.getElementById('menu');
var cont = document.getElementById('navcont');
var help = document.getElementById('help');
var rs = document.getElementById('rs');

menu.addEventListener("click", open);
cont.addEventListener("mouseleave", close);

menu.addEventListener("mouseover", hidden);
cont.addEventListener("mouseover", hidden);

menu.addEventListener("mouseleave", reveal);
cont.addEventListener("mouseleave", reveal);

function open() {
    menu.style.display = "none";
    cont.style.display = "block";
}

function close() {
    menu.style.display = "block";
    cont.style.display = "none";
}

function hidden() {
    help.style.display = "none";
    rs.style.display = "none";
}

function reveal() {
    help.style.display = "flex";
    rs.style.display = "flex";
}