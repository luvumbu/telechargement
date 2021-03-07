 


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

 


var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
     
    //alert(myObj[0]); 

  
     myObj.includes("okokokok") ; 
 



     for(var  i = 0 ; i <img_length ; i++ ){
   
    ; 
 




    if(myObj.includes(img[i].src)==false){






        var ok = new Information("https://bokonzi.com/telechargement/php.php"); // création de la classe 
        ok.add("src_name", img[i].src); // ajout de l'information pour lenvoi 
 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 


















    }
    
        var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
         
        //alert(myObj); 
      }
    };
    xmlhttp.open("GET", "https://bokonzi.com/telechargement/all_source.php", true);
    xmlhttp.send();
    
    
    
    
 
    
   }































  }
};
xmlhttp.open("GET", "https://bokonzi.com/telechargement/all_source.php", true);
xmlhttp.send();



