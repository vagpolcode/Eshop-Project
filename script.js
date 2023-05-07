function change() {
	
	document.getElementById("lap_des").innerHTML = "Φορητός Υπολογιστής (Laptop Computer/Notebook)είναι ένας ηλεκτρονικός υπολογιστής μικρού μεγέθους και βάρους με εύκολη μεταφερσιμότητα, που διαθέτει ενεργειακή αυτονομία. Συνήθως ανήκει στους υπολογιστές τετάρτης γενιάς (αν και υπάρχουν και παλαιότερες υλοποιήσεις). Ο φορητός υπολογιστής ενσωματώνει πολλές και καινοτόμες τεχνολογίες με προσιτό πλέον κόστος. Μία από αυτές είναι η τεχνολογία οθόνης"  ;
	
   document.getElementById("lap_des").style.backgroundColor = "coral" ;
   
document.getElementById("lap_des").style.color = "red" ; }
   
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


var sum0 =0;var sum1=0;var sum2=0;var sum3=0;var sum4=0; var sum5 = 0;
var sum=0;



function buy() {
	
	var posa0= document.getElementById("quan0").value;
	var posa1= document.getElementById("quan1").value;
	var posa2= document.getElementById("quan2").value;
	var posa2= document.getElementById("quan2").value;
	var posa3= document.getElementById("quan3").value;
	var posa4= document.getElementById("quan4").value;
	var posa5= document.getElementById("quan5").value;
	
	var sum0 = 399 * posa0;
	var sum1 = 459 * posa1;
	var sum2 = 599 * posa2;
	var sum3 = 629 * posa3;
	var sum4 = 899 * posa4;
	var sum5 = 1049 * posa5;
	var sum= sum0+sum1+sum2+sum3+sum4+sum5 ;
	document.getElementById("agora0").innerHTML = ("purplenight x  " + posa0 +  "  σύνολο  &euro;" +sum0);
	document.getElementById("agora1").innerHTML = ("RedFire x  " + posa1 +  "  σύνολο  &euro;" +sum1);
	document.getElementById("agora2").innerHTML = ("BlackShadow x  " + posa2 +  "  σύνολο  &euro;" +sum2);
	document.getElementById("agora3").innerHTML = ("WhiteCrystal x  " + posa3 +  "  σύνολο  &euro;" +sum3);
	document.getElementById("agora4").innerHTML = ("GreenSlayer x  " + posa4 +  "  σύνολο  &euro;" +sum4);
	document.getElementById("agora5").innerHTML = ("UltraSteel  x  " + posa5 +  "  σύνολο  &euro;" +sum5);
	document.getElementById("agora").innerHTML = ("Σύνολο στο καλάθι: " +sum);
}

function buy1() {
	
	var posa0= document.getElementById("quan0").value;
	var posa1= document.getElementById("quan1").value;
	var posa2= document.getElementById("quan2").value;
	var posa2= document.getElementById("quan2").value;
	var posa3= document.getElementById("quan3").value;
	var posa4= document.getElementById("quan4").value;
	var posa5= document.getElementById("quan5").value;
	
	var sum0 = 299 * posa0;
	var sum1 = 399 * posa1;
	var sum2 = 529 * posa2;
	var sum3 = 699 * posa3;
	var sum4 = 849 * posa4;
	var sum5 = 1499 * posa5;
	var sum= sum0+sum1+sum2+sum3+sum4+sum5 ;
	document.getElementById("agora0").innerHTML = ("LittleOne  x  " + posa0 +  "  σύνολο  &euro;" +sum0);
	document.getElementById("agora1").innerHTML = ("BlackDesk x  " + posa1 +  "  σύνολο  &euro;" +sum1);
	document.getElementById("agora2").innerHTML = ("DarkCrystal x  " + posa2 +  "  σύνολο  &euro;" +sum2);
	document.getElementById("agora3").innerHTML = ("PowerDesk x  " + posa3 +  "  σύνολο  &euro;" +sum3);
	document.getElementById("agora4").innerHTML = ("FutureChrome x  " + posa4 +  "  σύνολο  &euro;" +sum4);
	document.getElementById("agora5").innerHTML = ("AlienView   x  " + posa5 +  "  σύνολο  &euro;" +sum5);
	document.getElementById("agora").innerHTML = ("Σύνολο στο καλάθι: " +sum);
}
	
function buy3() {	
	document.getElementById('quan0').value = 0;
	document.getElementById('quan1').value = 0;
	document.getElementById('quan2').value = 0;
	document.getElementById('quan3').value = 0;
	document.getElementById('quan4').value = 0;
	document.getElementById('quan5').value = 0;
	document.getElementById("agora0").innerHTML = ("purplenight x  0  σύνολο  &euro;0" );
	document.getElementById("agora1").innerHTML = ("RedFire x  0   σύνολο  &euro;0" );
	document.getElementById("agora2").innerHTML = ("BlackShadow x  0  σύνολο  &euro;0" );
	document.getElementById("agora3").innerHTML = ("WhiteCrystal x  0  σύνολο  &euro;0" );
	document.getElementById("agora4").innerHTML = ("GreenSlayer x  0  σύνολο  &euro;0" );
	document.getElementById("agora5").innerHTML = ("UltraSteel  x  0  σύνολο  &euro;0" );
	document.getElementById("agora").innerHTML = ("Σύνολο στο καλάθι: 0" );


}
function buy4() {
	document.getElementById('quan0').value = 0;
	document.getElementById('quan1').value = 0;
	document.getElementById('quan2').value = 0;
	document.getElementById('quan3').value = 0;
	document.getElementById('quan4').value = 0;
	document.getElementById('quan5').value = 0;
	document.getElementById("agora0").innerHTML = ("LittleOne  x  0  σύνολο  &euro;0" );
	document.getElementById("agora1").innerHTML = ("BlackDesk x  0  σύνολο  &euro;0" );
	document.getElementById("agora2").innerHTML = ("DarkCrystal x  0  σύνολο  &euro;0" );
	document.getElementById("agora3").innerHTML = ("PowerDesk x  0  σύνολο  &euro;0" );
	document.getElementById("agora4").innerHTML = ("FutureChrome x  0  σύνολο  &euro;0" );
	document.getElementById("agora5").innerHTML = ("AlienView   x  0  σύνολο  &euro;0" );
	document.getElementById("agora").innerHTML = ("Σύνολο στο καλάθι: 0" );

}


function ok() { alert("Η παραγγελία ολοκληρώθηκε");   }

function rand() {
	
	var posa0 = Math.floor(Math.random()*5) ;
	var posa1 = Math.floor(Math.random()*5);
	var posa2 = Math.floor(Math.random()*5);
	var posa3 = Math.floor(Math.random()*5) ;
	var posa4 = Math.floor(Math.random()*5);
	var posa5 = Math.floor(Math.random()*5) ;
	document.getElementById('quan0').value = posa0;
	document.getElementById('quan1').value = posa1;
	document.getElementById('quan2').value = posa2;
	document.getElementById('quan3').value = posa3;
	document.getElementById('quan4').value = posa4;
	document.getElementById('quan5').value = posa5;
	
	var sum0 = 399 * posa0;
	var sum1 = 459 * posa1;
	var sum2 = 599 * posa2;
	var sum3 = 629 * posa3;
	var sum4 = 899 * posa4;
	var sum5 = 1049 * posa5;
	var sum= sum0+sum1+sum2+sum3+sum4+sum5 ;
	document.getElementById("agora0").innerHTML = ("purplenight x  " + posa0 +  "  σύνολο  &euro;" +sum0);
	document.getElementById("agora1").innerHTML = ("RedFire x  " + posa1 +  "  σύνολο  &euro;" +sum1);
	document.getElementById("agora2").innerHTML = ("BlackShadow x  " + posa2 +  "  σύνολο  &euro;" +sum2);
	document.getElementById("agora3").innerHTML = ("WhiteCrystal x  " + posa3 +  "  σύνολο  &euro;" +sum3);
	document.getElementById("agora4").innerHTML = ("GreenSlayer x  " + posa4 +  "  σύνολο  &euro;" +sum4);
	document.getElementById("agora5").innerHTML = ("UltraSteel  x  " + posa5 +  "  σύνολο  &euro;" +sum5);
	document.getElementById("agora").innerHTML = ("Σύνολο στο καλάθι: " +sum);
	
	
	
}

function rand2() {
	
	var posa0 = Math.floor(Math.random()*5) ;
	var posa1 = Math.floor(Math.random()*5) ;
	var posa2 = Math.floor(Math.random()*5) ;
	var posa3 = Math.floor(Math.random()*5) ;
	var posa4 = Math.floor(Math.random()*5) ;
	var posa5 = Math.floor(Math.random()*5) ;
	document.getElementById('quan0').value = posa0;
	document.getElementById('quan1').value = posa1;
	document.getElementById('quan2').value = posa2;
	document.getElementById('quan3').value = posa3;
	document.getElementById('quan4').value = posa4;
	document.getElementById('quan5').value = posa5;
	var sum0 = 299 * posa0;
	var sum1 = 399 * posa1;
	var sum2 = 529 * posa2;
	var sum3 = 699 * posa3;
	var sum4 = 849 * posa4;
	var sum5 = 1499 * posa5;
	var sum= sum0+sum1+sum2+sum3+sum4+sum5 ;
	document.getElementById("agora0").innerHTML = ("LittleOne  x  " + posa0 +  "  σύνολο  &euro;" +sum0);
	document.getElementById("agora1").innerHTML = ("BlackDesk x  " + posa1 +  "  σύνολο  &euro;" +sum1);
	document.getElementById("agora2").innerHTML = ("DarkCrystal x  " + posa2 +  "  σύνολο  &euro;" +sum2);
	document.getElementById("agora3").innerHTML = ("PowerDesk x  " + posa3 +  "  σύνολο  &euro;" +sum3);
	document.getElementById("agora4").innerHTML = ("FutureChrome x  " + posa4 +  "  σύνολο  &euro;" +sum4);
	document.getElementById("agora5").innerHTML = ("AlienView   x  " + posa5 +  "  σύνολο  &euro;" +sum5);
	document.getElementById("agora").innerHTML = ("Σύνολο στο καλάθι: " +sum);
	

}

function check0() {
	var clicked = document.getElementById('subm3').value;
	if(clicked == "off"){
		document.getElementById('quan0').value = 1;
		document.getElementById('subm3').value = "on";
	}
	else{
		document.getElementById('quan0').value = 0;
		document.getElementById('subm3').value = "off";
	}
}
function check1() {
	var clicked = document.getElementById('subm3').value;
	if(clicked == "off"){
		document.getElementById('quan1').value = 1;
		document.getElementById('subm3').value = "on";
	}
	else{
		document.getElementById('quan1').value = 0;
		document.getElementById('subm3').value = "off";
	}
}
function check2() {
	var clicked = document.getElementById('subm3').value;
	if(clicked == "off"){
		document.getElementById('quan2').value = 1;
		document.getElementById('subm3').value = "on";
	}
	else{
		document.getElementById('quan2').value = 0;
		document.getElementById('subm3').value = "off";
	}
}
function check3() {
	var clicked = document.getElementById('subm3').value;
	if(clicked == "off"){
		document.getElementById('quan3').value = 1;
		document.getElementById('subm3').value = "on";
	}
	else{
		document.getElementById('quan3').value = 0;
		document.getElementById('subm3').value = "off";
	}
}
function check4() {
	var clicked = document.getElementById('subm3').value;
	if(clicked == "off"){
		document.getElementById('quan4').value = 1;
		document.getElementById('subm3').value = "on";
	}
	else{
		document.getElementById('quan4').value = 0;
		document.getElementById('subm3').value = "off";
	}
}
function check5() {
	var clicked = document.getElementById('subm3').value;
	if(clicked == "off"){
		document.getElementById('quan5').value = 1;
		document.getElementById('subm3').value = "on";
	}
	else{
		document.getElementById('quan5').value = 0;
		document.getElementById('subm3').value = "off";
	}
}

	
	
	
	
	
	
	
