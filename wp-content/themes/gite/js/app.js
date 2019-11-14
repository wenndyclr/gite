//SLIDE PREMIER ARTICLE
var images = ["slide01.jpg", "slide02.jpg", "slide03.jpg"];
var i = 0;


var maFonction = () =>{
    document.getElementById('slide-article').src="http://localhost/gite/wp-content/themes/gite/images/" + images[i];
    i++;

    if(i === images.length){
        i=0
    }
}

setInterval(maFonction, 2000);

//SLIDE DU DEUXIEME ARTICLE
var pictures = ["slide04.jpg", "slide05.jpg", "slide06.jpg"];
var i = 0;


var maFonction = () =>{
    document.getElementById('slide-article2').src="http://localhost/gite/wp-content/themes/gite/images/" + pictures[i];
    i++;

    if(i === pictures.length){
        i=0
    }
}

setInterval(maFonction, 2000);

//Bienvenue

let sentence = 'Bienvenue';
let letters = sentence.split('');
let div = document.getElementById('bienvenue');


function animateText() {	
 
    if (letters.length > 0) { 
       
       div.innerHTML += letters.shift();
       
       setTimeout(animateText, 100);
    };

};
 
animateText();

