 /*------------------------------------------------------------------------------

------------------------------------------------------------------------------*/

//---------- Scroll et parallax (skrollr.js)
var s = skrollr.init();


//Waypoint initialisation

/*---- animation du CV ----*/
var elementCv = ".leCvPlusLaBio .cv";
var cv = $(elementCv).waypoint(function(direction) {
  // console.log(this.element.id + ' hit 25% from top of window')
	$(elementCv).css({opacity:100});
	$('.cv').animateCss('flipInX', function() {
	});
}, {
  offset: '75%'
})

var elementTestimonials = ".cd-testimonials-wrapper";
var testimonials = $(elementTestimonials).waypoint(function(direction) {
  // console.log(this.element.id + ' hit 25% from top of window')
	$(elementTestimonials).css({opacity:100});
}, {
  offset: '85%'
})

var elementParagraf1 = ".bio .paragraf1";
var paragraf1 = $(elementParagraf1).waypoint(function(direction) {
  // console.log(this.element.id + ' hit 25% from top of window')
	$(elementParagraf1).css({opacity:100});
}, {
  offset: '80%'
})

var elementParagraf2 = ".bio .paragraf2";
var paragraf2 = $(elementParagraf2).waypoint(function(direction) {
  // console.log(this.element.id + ' hit 25% from top of window')
	$(elementParagraf2).css({opacity:100});
}, {
  offset: '80%'
})

var elementParagraf3 = ".bio .paragraf3";
var paragraf3 = $(elementParagraf3).waypoint(function(direction) {
  // console.log(this.element.id + ' hit 25% from top of window')
	$(elementParagraf3).css({opacity:100});
}, {
  offset: '80%'
})


// Ajout d'un padding-top dynamique de la hauteur du menu fixed,
	//afin de ne pas recouvrir le contenu
var hauteurNav = $('header').height() + 25;
$('body').css('padding-top', hauteurNav + 'px');


// Ajout d'écouteurs sur chaque élément du menu
$('.navi').click(goTo);

function goTo(event) {
	// Récupération de l'élément auquel on doit scroll (attribut data-to dans le html)
	var element = "#" + $(this).data('to');
	console.log(element);

	// Position de l'élément vers qui on scroll par rapport au haut du navigateur, en fonction du scroll actuel
	var distanceFromTop = $(element).offset().top;

	// On rajoute le décalage lié au menu fixe
	distanceFromTop -= hauteurNav;

	// Se déplacer à cette position
	$('html, body').animate({
        scrollTop: distanceFromTop
    }, 2000); // en deux secondes
}
//------------------------------------------------------------------------------


//---------- Animate
$.fn.extend({
  animateCss: function(animationName, callback) {
    var animationEnd = (function(el) {
      var animations = {
        animation: 'animationend',
        OAnimation: 'oAnimationEnd',
        MozAnimation: 'mozAnimationEnd',
        WebkitAnimation: 'webkitAnimationEnd',
      };

      for (var t in animations) {
        if (el.style[t] !== undefined) {
          return animations[t];
        }
      }
    })(document.createElement('div'));

    this.addClass('animated ' + animationName).one(animationEnd, function() {
      $(this).removeClass('animated ' + animationName);

      if (typeof callback === 'function') callback();
    });

    return this;
  },
});

//------------------------------------------------------------------------------


//---------- testimonials
jQuery(document).ready(function($){
  //create slider
  $('.cd-testimonials-wrapper').flexslider({
    selector: ".cd-testimonials > li",
    animation: "slide",
    controlNav: false,
    slideshow: false,
    smoothHeight: true,
    start: function(){
      $('.cd-testimonials').children('li').css({
        'opacity': 1,
        'position': 'relative'
      });
    }
  });

  //open
  $('.cd-see-all').on('click', function(){
    $('.cd-testimonials-all').addClass('is-visible');
  });

  //close
  $('.cd-testimonials-all .close-btn').on('click', function(){
    $('.cd-testimonials-all').removeClass('is-visible');
  });
  $(document).keyup(function(event){
    //check si l'utilisateur a pressé 'Esc'
    if(event.which=='27'){
      $('.cd-testimonials-all').removeClass('is-visible');
    }
  });

  //build the grid
  // $('.cd-testimonials-all-wrapper').children('ul').masonry({
  //   itemSelector: '.cd-testimonials-item'
  // });
});
//------------------------------------------------------------------------------


//---------- Gallerie

document.querySelector('#modalImg').addEventListener('click', onClicExit);

function onClicExit(event) {
	$(this).css("display","none");
}

//je récupère les projets
var dev = document.querySelectorAll('.miniatureDev li img , .miniatureInf li img');

// je récupère la div ou la grande image sera affichée
var imageDevHTML = document.querySelector(".imageDevSeule");

//je récupère l'image à afficher
var grandeImageDevHTML = document.querySelector("#grandeImageDev");

// et je place un écouteur dessus
grandeImageDevHTML.addEventListener('click', ImageOut);

// la boucle va permettre de positionner un écouteur sur l'image qui sera utilisée
for (var i = 0; i < dev.length; i++)
{
	dev[i].addEventListener('mouseover', auSurvol);
	dev[i].addEventListener('mouseout', lorsquOnQuitteLeSurvol);
	dev[i].addEventListener('click', auClic);
}

// au survol de la souris, on ajoute la class pour afficher un effet
function auSurvol(event) {
	this.classList.add('survol');
}

// la souris sort de l'élément, on retire une class pour enlever l'effet
function lorsquOnQuitteLeSurvol(event) {
	this.classList.remove('survol');
}

// au clic sur l'image, elle s'affiche en grand dans la div
function auClic(event)
{
	console.log(event.value);
	$('#modalImg').css("display","flex");
	document.querySelector('#modalImg img').setAttribute("src", this.getAttribute('src'));
}

// au clic sur la grande image elle ne s'affiche plus
function ImageOut(event){
	imageDevHTML.style.display = 'none';
}
//------------------------------------------------------------------------------


function nbEntierAleatoire(min,max){
  return Math.floor(Math.random()*(max-min+1)+min);
}
//------------------------------------------------------------------------------


//---------- retour haut de page ----------//
document.addEventListener('DOMContentLoaded', function() {
window.onscroll = function(ev) {
document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
};
});
document.addEventListener('DOMContentLoaded', function() {
var aLiens = document.querySelectorAll('a[href*="#"]');
for(var i=0, len = aLiens.length; i<len; i++) {
aLiens[i].onclick = function () {
if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname)
{
var target = this.getAttribute("href").slice(1);
if (target.length) {
scrollTo(document.getElementById(target).offsetTop, 1000);
return false;
}
}
};
}
});
function scrollTo(element, duration) {
var e = document.documentElement;
if(e.scrollTop===0){
var t = e.scrollTop;
++e.scrollTop;
e = t+1===e.scrollTop--?e:document.body;
}
scrollToC(e, e.scrollTop, element, duration);
}
function scrollToC(element, from, to, duration) {
if (duration < 0) return;
if(typeof from === "object")from=from.offsetTop;
if(typeof to === "object")to=to.offsetTop;
scrollToX(element, from, to, 0, 1/duration, 20, easeOutCuaic);
}
function scrollToX(element, x1, x2, t, v, step, operacion) {
if (t < 0 || t > 1 || v <= 0) return;
element.scrollTop = x1 - (x1-x2)*operacion(t);
t += v * step;
setTimeout(function() {
scrollToX(element, x1, x2, t, v, step, operacion);
}, step);
}
function easeOutCuaic(t){
t--;
return t*t*t+1;
}
//---------- retour haut de page ----------//
