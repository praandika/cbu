function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function openProduct() {
    document.getElementById("sidenavProduct").style.display = "block";
    document.getElementById("toggleProduct").setAttribute("onclick", "closeProduct()");
}

function closeProduct() {
    document.getElementById("sidenavProduct").style.display = "none";
    document.getElementById("toggleProduct").setAttribute("onclick", "openProduct()");
}