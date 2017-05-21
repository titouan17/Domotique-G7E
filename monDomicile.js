


		
function monDomicile(str){

	affichePiece(str);

}

function supprimeCapteur(){
	showUser(this.id);

}
function showUser(str)
            {
                if (str == "")
                {
                    document.getElementById("divers").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest) {
                    xmlhttp= new XMLHttpRequest();
                } else {
                    if (window.ActiveXObject)
                        try {
                            xmlhttp= new ActiveXObject("Msxml2.XMLHTTP");
                        } catch (e) {
                            try {
                                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
                            } catch (e) {
                                return NULL;
                            }
                        }
                }

                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        window.location.reload();
                        alert("Capteur supprimé");
                    }
                }
                xmlhttp.open("GET", "/php/App/Matthieu/Git/Controleur/getuser.php?q=" + str, true);
                xmlhttp.send();
            }

function affichePiece(piece){
	document.getElementById("domi").innerHTML += "<h2>"+piece+"</h2>"; 
	nouveauDiv = document.createElement("div");
	nouveauDiv.className='piece';
	p = document.getElementById("domi");
	p.appendChild(nouveauDiv);  
}


function afficheCapteur(placePiece,placeCapteur,Capteur,donnee,idCapteur){
	if (Capteur=='Luminosité') {
		var typeCapteur="luminosite";
		if(donnee="N/A"){
			var valeur="<span class='description_capteur'>"+donnee+"</span>";
		}else{
			var valeur='<form><input type="range" value="'+donnee+'" class="range"></form>';
		}	
	}else if(Capteur=='Température'){
		var typeCapteur="temperature";
		var valeur="<span class='description_capteur'>"+donnee+"</span>";
	}else if(Capteur=='Détecteur de Fumée'){
		var typeCapteur="detecteurfumee";
		var valeur="<span class='description_capteur'>"+donnee+"</span>";
	}else if(Capteur=='Humidité'){
		var typeCapteur="humidite";
		var valeur="<span class='description_capteur'>"+donnee+"</span>";
	}else if(Capteur=='Capteur de CO2'){
		var typeCapteur="capteurco2";
		var valeur="<span class='description_capteur'>"+donnee+"</span>";
	}else if(Capteur=='Capteur de présence'){
		var typeCapteur="capteurpresence";
		var valeur="<span class='description_capteur'>"+donnee+"</span>";
	}
	nouveauDiv = document.createElement("div");
	nouveauDiv.className='capteur';
	nouveauDiv.id=idCapteur;
	p = document.getElementsByClassName("piece")[placePiece];
	p.appendChild(nouveauDiv);  

	var monImg = document.createElement('img');
	monImg.className=typeCapteur;
	monImg.alt=typeCapteur;
	monImg.src = "/php/App/Matthieu/Git/Image/"+typeCapteur+".png";
	

	document.getElementsByClassName("capteur")[placeCapteur].innerHTML += "<h3>"+Capteur+"</h3>";
	document.getElementsByClassName("capteur")[placeCapteur].appendChild(monImg);
	document.getElementsByClassName("capteur")[placeCapteur].innerHTML += valeur;
}

//,nb,nb,"temperature","Température","30°C"


