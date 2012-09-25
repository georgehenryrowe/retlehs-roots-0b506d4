function GetCurrentPage() { 
 if (!document.getElementsByTagName) return;  
 var anchors = document.getElementsByTagName("a"); 
 var thisPage = location.href; 
 for (var i=0; i<anchors.length; i++) {  
 var anchor = anchors[i]; 
 thisHREF = anchor.getAttribute("href"); 
 if ((thisHREF == thisPage) ¦¦ (location.protocol + "//" + location.hostname + thisHREF == thisPage)) { 
 anchor.id = "Current"; 
 return; 
 } 
 }  
}