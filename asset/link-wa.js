let link = document.querySelectorAll(".linkWa");
let page = window.location.pathname;

if (page == '/product.php') {
    let model = document.getElementById("model");
    for (let i = 0; i < link.length; i++) {
        link[i].setAttribute("href", `https://wa.me/6281999482962?text=Halo%20saya%20ingin%20info%20motor%20${model.textContent}%0A%0Ahttps://www.cbu.yamahabismagroup.com/`);
    }
} else {
    for (let i = 0; i < link.length; i++) {
        link[i].setAttribute("href", "https://wa.me/6281999482962?text=Halo%20saya%20ingin%20info%20motor%20CBU%0A%0Ahttps://www.cbu.yamahabismagroup.com/");
    }
}

console.log(page, model.textContent);