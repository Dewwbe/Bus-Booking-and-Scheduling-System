var fromInput = document.getElementById("myDropdown");
var toInput = document.getElementById("myDropdown2");
var errorMessage = document.getElementById("errorMessage");
var selectedDate = document.getElementById("date");

fromInput.addEventListener("change", validateInput);
toInput.addEventListener("change", validateInput);

function validateInput() {
	var fromValue = fromInput.value;
	var toValue = toInput.value;

	if (fromValue === toValue) {
		errorMessage.textContent = "Cannot select the same location.";
	}
	else {
		errorMessage.textContent = "";
	}
}

selectedDate.addEventListener("change", checkDate);

function checkDate(){

	var newDate = new Date(selectedDate.value);
	var currentDate = new Date();

	if(newDate < currentDate){
		errorMessage.textContent = "Please select a valid date.";
	}
	else{
		errorMessage.textContent = "";
	}
}
			
var from = document.getElementById("myDropdown");
var to = document.getElementById("myDropdown2");

from.addEventListener("change", changeMap);
to.addEventListener("change", changeMap);

function changeMap(){

	var fromValue = from.value;
	var toValue = to.value;
				
	if((fromValue == 'Colombo' && toValue == 'Negombo') ||(fromValue == 'Negombo' && toValue == 'Colombo')){
		document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d253410.1574512919!2d79.87898135000002!3d7.063942499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2sNegombo!3m2!1d7.2007968!2d79.8736754!4m5!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!3m2!1d6.9270786!2d79.861243!5e0!3m2!1sen!2slk!4v1686230329848!5m2!1sen!2slk";
	}
	else if((fromValue == 'Colombo' && toValue == 'Nuwara Eliya') ||(fromValue == 'Nuwara Eliya' && toValue == 'Colombo')){
		document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d506902.67944099504!2d80.3251714!3d6.98839975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3ae380434e1554c7%3A0x291608404c937d9c!2sNuwara%20Eliya!3m2!1d6.9497165999999995!2d80.7891068!4m5!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!3m2!1d6.9270786!2d79.861243!5e0!3m2!1sen!2slk!4v1686230574885!5m2!1sen!2slk";
	}
	else if((fromValue == 'Colombo' && toValue == 'Galle') ||(fromValue == 'Galle' && toValue == 'Colombo')){
		document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1014780.1017272883!2d80.0624889!3d6.523605800000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!3m2!1d6.032894799999999!2d80.2167912!4m5!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!3m2!1d6.9270786!2d79.861243!5e0!3m2!1sen!2slk!4v1686230695822!5m2!1sen!2slk";
	}
	else if((fromValue == 'Colombo' && toValue == 'Trincomalee') ||(fromValue == 'Trincomalee' && toValue == 'Colombo')){
		document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2023965.4374069427!2d80.53823685!3d7.783729149999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3afbbcb6902dbe27%3A0x7de76a7a331b0fbb!2sTrincomalee!3m2!1d8.5873638!2d81.2152121!4m5!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!3m2!1d6.9270786!2d79.861243!5e0!3m2!1sen!2slk!4v1686230759175!5m2!1sen!2slk";
	}
	else if((fromValue == 'Negombo' && toValue == 'Nuwara Eliya') ||(fromValue == 'Nuwara Eliya' && toValue == 'Negombo')){
		document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d506806.4040987225!2d80.33139109999996!3d7.076621950000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3ae380434e1554c7%3A0x291608404c937d9c!2sNuwara%20Eliya!3m2!1d6.9497165999999995!2d80.7891068!4m5!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2sNegombo!3m2!1d7.2007968!2d79.8736754!5e0!3m2!1sen!2slk!4v1686231185407!5m2!1sen!2slk";
	}
	else if((fromValue == 'Negombo' && toValue == 'Galle') ||(fromValue == 'Galle' && toValue == 'Negombo')){
		document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2029186.4328836733!2d80.05936149999998!3d6.615238850000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2sNegombo!3m2!1d7.2007968!2d79.8736754!4m5!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!3m2!1d6.032894799999999!2d80.2167912!5e0!3m2!1sen!2slk!4v1686231015256!5m2!1sen!2slk";
	}
	else if((fromValue == 'Negombo' && toValue == 'Trincomalee') ||(fromValue == 'Trincomalee' && toValue == 'Negombo')){
		document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2023299.4702672635!2d80.54445655000004!3d7.920454800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3afbbcb6902dbe27%3A0x7de76a7a331b0fbb!2sTrincomalee!3m2!1d8.5873638!2d81.2152121!4m5!1s0x3ae2ee9c6bb2f73b%3A0xa51626e908186f3e!2sNegombo!3m2!1d7.2007968!2d79.8736754!5e0!3m2!1sen!2slk!4v1686230828716!5m2!1sen!2slk";
	}
	else if((fromValue == 'Nuwara Eliya' && toValue == 'Galle') ||(fromValue == 'Galle' && toValue == 'Nuwara Eliya')){
		document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1014808.9696560589!2d80.58055604999998!3d6.509336850000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3ae380434e1554c7%3A0x291608404c937d9c!2sNuwara%20Eliya!3m2!1d6.9497165999999995!2d80.7891068!4m5!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!3m2!1d6.032894799999999!2d80.2167912!5e0!3m2!1sen!2slk!4v1686231128872!5m2!1sen!2slk";
	}
	else if((fromValue == 'Nuwara Eliya' && toValue == 'Trincomalee') ||(fromValue == 'Trincomalee' && toValue == 'Nuwara Eliya')){
		document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2024036.4816223471!2d80.89380704999996!3d7.769002350000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3afbbcb6902dbe27%3A0x7de76a7a331b0fbb!2sTrincomalee!3m2!1d8.5873638!2d81.2152121!4m5!1s0x3ae380434e1554c7%3A0x291608404c937d9c!2sNuwara%20Eliya!3m2!1d6.9497165999999995!2d80.7891068!5e0!3m2!1sen!2slk!4v1686230882008!5m2!1sen!2slk";
	}
	else if((fromValue == 'Galle' && toValue == 'Trincomalee') ||(fromValue == 'Trincomalee' && toValue == 'Galle')){
		document.getElementById("map").src = "https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d4052554.1760439137!2d80.77624945000001!3d7.289389200000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3afbbcb6902dbe27%3A0x7de76a7a331b0fbb!2sTrincomalee!3m2!1d8.5873638!2d81.2152121!4m5!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!3m2!1d6.032894799999999!2d80.2167912!5e0!3m2!1sen!2slk!4v1686230957403!5m2!1sen!2slk";
	}
	else{}
}

function freq1(){
    document.getElementById("myDropdown").value = "Colombo";
    document.getElementById("myDropdown2").value = "Negombo";
    changeMap();
}
function freq2(){
    document.getElementById("myDropdown").value = "Galle";
    document.getElementById("myDropdown2").value = "Colombo";
    changeMap();
}
function freq3(){
    document.getElementById("myDropdown").value = "Trincomalee";
    document.getElementById("myDropdown2").value = "Colombo";
    changeMap();
}
function freq4(){
    document.getElementById("myDropdown").value = "Nuwara Eliya";
    document.getElementById("myDropdown2").value = "Galle";
    changeMap();
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


function calcPrice() {
	var fromInput = document.querySelector("select[name=myDropdown]").value;
	var toInput = document.querySelector("select[name=myDropdown2]").value;
	var adult = document.querySelector("select[name=Adults]").value;
	var child = document.querySelector("select[name=children]").value;

	var fromvalue;

	if((fromInput == 'Colombo' && toInput == 'Negombo') ||(fromInput == 'Negombo' && toInput == 'Colombo')){
		 fromvalue = 500;
	}
	else if((fromInput == 'Colombo' && toInput == 'Nuwara Eliya') ||(fromInput == 'Nuwara Eliya' && toInput == 'Colombo')){
		 fromvalue = 3000;
	}
	else if((fromInput == 'Colombo' && toInput == 'Galle') ||(fromInput == 'Galle' && toInput == 'Colombo')){
		 fromvalue = 2000;
	}
	else if((fromInput == 'Colombo' && toInput == 'Trincomalee') ||(fromInput == 'Trincomalee' && toInput == 'Colombo')){
		 fromvalue = 5000;
	}
	else if((fromInput == 'Negombo' && toInput == 'Nuwara Eliya') ||(fromInput == 'Nuwara Eliya' && toInput == 'Negombo')){
		 fromvalue = 3000;
	}
	else if((fromInput == 'Negombo' && toInput == 'Galle') ||(fromInput == 'Galle' && toInput == 'Negombo')){
		 fromvalue = 2500;
	}
	else if((fromInput == 'Negombo' && toInput == 'Trincomalee') ||(fromInput == 'Trincomalee' && toValue == 'Negombo')){
		 fromvalue = 4500;
	}
	else if((fromInput == 'Nuwara Eliya' && toInput == 'Galle') ||(fromInput == 'Galle' && toInput == 'Nuwara Eliya')){
		 fromvalue = 3000;
	}
	else if((fromInput == 'Nuwara Eliya' && toInput == 'Trincomalee') ||(fromInput == 'Trincomalee' && toInput == 'Nuwara Eliya')){
		 fromvalue = 5000;
	}
	else if((fromInput == 'Galle' && toInput == 'Trincomalee') ||(fromInput == 'Trincomalee' && toInput == 'Galle')){
		 fromvalue = 6000;
	}
	else{}

	var total = fromvalue * adult + (fromvalue*child/2);

	document.getElementById('total').value = total;
}