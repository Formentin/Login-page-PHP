

function start_slide() {
    setTimeout(function() {
        trocarImagem2()
        console.log("trocarImag")
    }
    ,5000)
    setTimeout(function() {
        trocarImagem3()
        console.log("trocarImag")
    }
    ,10000)
    setTimeout(function() {
        trocarImagem1()
        console.log("trocarImag")
        start_slide();
    }
    ,15000)
    
}
trocarImagem1()
start_slide()


function trocarImagem1() {
    document.getElementById("img_container").style.backgroundImage = 'url("images/aleatorio1.png")';
    document.getElementById("image1").className = "active";
    document.getElementById("image2").className = null;
    document.getElementById("image3").className = null;
}
function trocarImagem2() {
    document.getElementById("img_container").style.backgroundImage = 'url("images/aleatorio2.png")';
    document.getElementById("image1").className = null;
    document.getElementById("image2").className = "active";
    document.getElementById("image3").className = null;
}
function trocarImagem3() {
    document.getElementById("img_container").style.backgroundImage = 'url("images/aleatorio3.png")';
    document.getElementById("image1").className = null;
    document.getElementById("image2").className = null;
    document.getElementById("image3").className = "active";
}