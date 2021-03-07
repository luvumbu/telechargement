<script>
class Information {
	constructor(link) {
		this.link = link;
		this.identite = new FormData();
		this.req = new XMLHttpRequest();
		this.identite_tab = [
		];
	}
	info() {
		return this.identite_tab; 
	}
	add(info, text){
		this.identite_tab.push([info, text]); 
	}
	push(){
		for(var i = 0 ; i < this.identite_tab.length ; i++){
			console.log(this.identite_tab[i][1]);
			this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);		 
		}		
		this.req.open("POST",this.link);
		this.req.send(this.identite);
		console.log(this.req);	 
	}
}







var img = document.getElementsByTagName("img") ; 
img_length = img.length ;


 
var y = 0 ; 

for( var i = 0 ; i<img_length ; i++ ){
  console.log(img[i].src);




  //  debut de la v"erification 


  var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
   
 
    if(myObj.includes(img[i])==false){
              console.log("pas de data") ; 
              // envoyer la data 


              var ok = new Information("php.php"); // création de la classe 
              ok.add("login", "root"); // ajout de l'information pour lenvoi 
              ok.add("password", "root"); // ajout d'une deuxieme information denvoi   
              alert(img[i].src); 
      //        console.log(ok.info()); // demande l'information dans le tableau
              ok.push(); // envoie l'information au code pkp 






              // envoyer la data ici 
    }

  }
};
xmlhttp.open("GET", "https://bokonzi.com/telechargement/all_source.php", true);
xmlhttp.send();
 

  // fin de la verification 
}

</script>