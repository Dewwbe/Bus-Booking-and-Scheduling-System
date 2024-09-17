let picIndex = 0;
showPics(); //Image gallery animation

function showPics() {
	let i;
	let imgs = document.getElementsByClassName("gallery");
	for (i = 0; i < imgs.length; i++) {
		imgs[i].style.display = "none";
	}
	picIndex++;
	if (picIndex > imgs.length) {picIndex = 1}
	imgs[picIndex-1].style.display = "block";
	setTimeout(showPics, 4000); // Change image every 4 seconds
} 


let offerIndex = 1;
showOffers1(offerIndex);
			
function nextOffer(n){
	showOffers1(offerIndex += n);
}

function showOffers1(n) {
	let i;
	let offers1 = document.getElementsByClassName("offer1");
	let offers2 = document.getElementsByClassName("offer2");
	let offers3 = document.getElementsByClassName("offer3");

	if (n > offers1.length) {offerIndex = 1}    
	if (n < 1) {offerIndex = offers1.length}
	for (i = 0; i < offers1.length; i++) {
		offers1[i].style.display = "none";  
	}
	offers1[offerIndex-1].style.display = "block";

	if (n > offers2.length) {offerIndex = 1}    
	if (n < 1) {offerIndex = offers2.length}
	for (i = 0; i < offers2.length; i++) {
		offers2[i].style.display = "none";  
	}
	offers2[offerIndex-1].style.display = "block";

	if (n > offers3.length) {offerIndex = 1}    
	if (n < 1) {offerIndex = offers3.length}
	for (i = 0; i < offers3.length; i++) {
		offers3[i].style.display = "none";  
	}
	offers3[offerIndex-1].style.display = "block";
} 

