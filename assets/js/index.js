// Horaires

let horaire = document.getElementById("horaire");
let triangle = document.querySelector(".triangle");
let closH = document.querySelector(".closH")

triangle.addEventListener('click', function(){
  if (horaire.style.display = 'none'){
    horaire.style.display ='block';
    triangle.style.display = 'none';
  }
  else{
    return false;
  }
});

closH.addEventListener('click', function(){
  if (horaire.style.display = 'block'){
    horaire.style.display ='none';
    triangle.style.display = 'block';
  }
  else{
    return false;
  }
});

// Fonction horaire

// function afficheHoraire(){
//   jour = new Array ("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");
//   mois = new Array ("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");


  
// }
