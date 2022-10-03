$(document).ready(function () {
    $(window).scroll(function () {
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });

    var typed = new Typed(".typing", {
        strings: ["Atender com excelência", "Churrasqueiras", "Realizar sonhos", "Fornos", "Eficiência", "Pias e muito mais"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
    var typed = new Typed(".typing-2", {
        strings: ["Profissional em artes em alvenaria", "Construtor de churrasqueiras", "Marido", "Presente no mercado de churrasqueiras, no litoral", "Pai"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    $('.menu-btn').click(function () {
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

});
function clique(img) {
    var modal = document.getElementById('janelaModal');
    var modalImg = document.getElementById("imgModal");
    var captionTexto = document.getElementById("txtImg");
    var btFechar = document.getElementById("fechar");
    var btContato = document.getElementById("contato");


    modal.style.display = "block";
    modalImg.src = img.src;
    modalImg.alt = img.alt;
    captionTexto.innerHTML = img.alt;

    btFechar.onclick = function () {
        modal.style.display = "none";

    }
    btContato.onclick = function () {
        window.open(
            "https://wa.me/5513996592947?text=Ol%C3%A1%2C+Alex+DT+Churrasqueira%21", "_blank");
    }
}