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

	document.getElementById('total1').value = total;
}