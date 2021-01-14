let days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
for (i = 0; i < days.length; i++) {
    if (days[i] == 'Samedi') {
        var p = document.createElement("p");
        p.innerHTML = days[i];
        p.style.fontWeight = "bold";
        document.body.appendChild(p);
    }
    else if (days[i] == 'Dimanche') {
        var p = document.createElement("p");
        p.innerHTML = days[i];
        p.style.fontWeight = "bold";
        document.body.appendChild(p);
    }
    else {
        var p = document.createElement("p");
        p.innerHTML = days[i];
        document.body.appendChild(p);
    }
}
/*let days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi','Dimanche'];
days.forEach(function(day){
  let p =  document.createElement('p');
  p.innerHTML= day;
  if( day == 'Samedi' || day == 'Dimanche' ) {
    p.style.fontWeight = 'bold';
  }
  document.body.appendChild(p);
});*/