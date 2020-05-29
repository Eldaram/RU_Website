// TOUTE LA PROCEDURE POUR LES MENUS DEROULANTS

//On retiens ici les variables essentiel
	//pour "index"
var navIndex = document.getElementById('navIndex');
var underIndex = document.getElementById('underIndex');
var enFonctionIndex = {state : 0};
	//pour "Jdr"
var navJdr = document.getElementById('navJdr');
var underJdr = document.getElementById('underJdr');
var enFonctionJdr = {state : 0};
	//pour "contact"
var navContact = document.getElementById('navContact');
var underContact = document.getElementById('underContact');
var enFonctionContact = {state : 0};

//On ecrit une fonction pour afficher le menu déroulant
function showUnder(enFonction,under){
	if(document.body.clientWidth>767){
		enFonction.state = 1;
		var style = under.style.height;
		var contient = Number(style.substring(0,style.length-2));
		var showUnderIndexInterval = setInterval(
			function(){
				contient = Number(under.style.height.substring(0,under.style.height.length-2));
				if(contient<=59 && enFonction.state == 1){
					contient = contient + 1;
					under.style.height = contient+'px';
				}
				else{
					clearInterval(showUnderIndexInterval);
				};
			},1);
	};
};

//On écrit ici une fonction pour cacher le menu déroulant
function hideUnder(enFonction,under){
	enFonction.state = 2;
	var style = under.style.height;
	var contient = Number(style.substring(0,style.length-2));
	var hideUnderIndexInterval = setInterval(
		function(){
			contient = Number(under.style.height.substring(0,under.style.height.length-2));
			if(contient>0 && enFonction.state == 2){
				contient = contient - 1;
				under.style.height = contient+'px';
			}
			else{
				clearInterval(hideUnderIndexInterval);
			};
		},8);
};

//On fait ici la définition des évènements
	//pour "index"
navIndex.addEventListener('mouseover', function(){showUnder(enFonctionIndex,underIndex);});
navIndex.addEventListener('mouseout',function(){hideUnder(enFonctionIndex,underIndex);});
	//pour "Jdr"
navJdr.addEventListener('mouseover', function(){showUnder(enFonctionJdr,underJdr);});
navJdr.addEventListener('mouseout',function(){hideUnder(enFonctionJdr,underJdr);});
	//pour "Contact"
navContact.addEventListener('mouseover', function(){showUnder(enFonctionContact,underContact);});
navContact.addEventListener('mouseout',function(){hideUnder(enFonctionContact,underContact);});