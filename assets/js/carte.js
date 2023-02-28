// CARTE PIZZA//

let toutes = document.querySelector(".toutes");
let tomate = document.querySelector(".tomate");
let fraiche = document.querySelector(".fraiche");
let sucrees = document.querySelector(".sucrees");

let tomate2 = document.getElementById("tomate");
let fraiche2 = document.getElementById("fraiche");
let sucrees2 = document.getElementById("sucrees");


toutes.addEventListener('click', function(){
    if (tomate2.style.display == 'none' || fraiche2.style.display == 'none' 
    || sucrees2.style.display == 'none' ){
        tomate2.style.display = 'block';
        fraiche2.style.display = 'block';
        toutes.style.backgroundColor = 'black';
        toutes.style.color ="#FF2600";
        tomate.style.backgroundColor = '#FF2600';
        tomate.style.color ="white";
        fraiche2.style.display = 'block';
        fraiche.style.backgroundColor = '#FF2600';
        fraiche.style.color ="white";
        sucrees2.style.display = 'block';
        sucrees.style.backgroundColor = '#FF2600';
        sucrees.style.color ="white";
  }
  else{
    return false;
  }
});

tomate.addEventListener('click', function(){
    if (tomate2.style.display = 'none' || fraiche2.style.display == 'block' 
    || sucrees2.style.display == 'none'){
        tomate2.style.display = 'block';
        toutes.style.backgroundColor = '#FF2600';
        toutes.style.color ="white";
        tomate.style.backgroundColor = 'black';
        tomate.style.color ="#FF2600";
        fraiche2.style.display = 'none';
        fraiche.style.backgroundColor = '#FF2600';
        fraiche.style.color ="white";
        sucrees2.style.display = 'none';
        sucrees.style.backgroundColor = '#FF2600';
        sucrees.style.color ="white";
  }
  else{
    return false;
  }
});

fraiche.addEventListener('click', function(){
    if (tomate2.style.display = 'block' || fraiche2.style.display == 'none' 
    || sucrees2.style.display == 'block'){
        tomate2.style.display = 'none';
        toutes.style.backgroundColor = '#FF2600';
        toutes.style.color ="white";
        fraiche.style.backgroundColor = 'black';
        fraiche.style.color ="#FF2600";
        fraiche2.style.display = 'block';
        tomate.style.backgroundColor = '#FF2600';
        tomate.style.color ="white";
        sucrees2.style.display = 'none';
        sucrees.style.backgroundColor = '#FF2600';
        sucrees.style.color ="white";
    }
    else{
      return false;
    }
  });

  sucrees.addEventListener('click', function(){
    if (tomate2.style.display = 'block' || fraiche2.style.display == 'block' 
    || sucrees2.style.display == 'none'){
        tomate2.style.display = 'none';
        toutes.style.backgroundColor = '#FF2600';
        toutes.style.color ="white";
        fraiche.style.backgroundColor = '#FF2600';
        fraiche.style.color ="white";
        fraiche2.style.display = 'none';
        tomate.style.backgroundColor = '#FF2600';
        tomate.style.color ="white";
        sucrees2.style.display = 'block';
        sucrees.style.backgroundColor = 'black';
        sucrees.style.color ="#FF2600";
    }
    else{
      return false;
    }
  });