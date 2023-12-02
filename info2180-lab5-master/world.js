document.addEventListener( 'DOMContentLoaded', () =>{
	
	var coSrchBtn = document.getElementById("lookup-country");
    var ciSrchBtn = document.getElementById("lookup-city");
	//var txtval = document.getElementById("country").value;
	
	coSrchBtn.addEventListener('click', function(e) {
		e.preventDefault();
		var txtval = document.getElementById("country").value;
		
		fetch("world.php?country="+encodeURI(txtval)+"&want=country",{method: 'GET'})
            .then(response => {
                if (response.ok) {
                    return response.text()
                } else {
                    return Promise.reject('something went wrong!')
                }
            })
            .then(data => {
                //alert(data);
				//console.log(data);
				var countryArr = data.trim();
				//console.log(countryArr);
				SearchDisplay(countryArr);
            })
            .catch(error => console.log('There was an error: ' + error));
		
	});//end srchbtn on-click

    ciSrchBtn.addEventListener('click', function(e) {
		e.preventDefault();
		var txtval = document.getElementById("country").value;
		
		fetch("world.php?country="+encodeURI(txtval)+"&want=city",{method: 'GET'})
            .then(response => {
                if (response.ok) {
                    return response.text()
                } else {
                    return Promise.reject('something went wrong!')
                }
            })
            .then(data => {
                //alert(data);
				//console.log(data);
				var countryArr = data.trim();
				//console.log(countryArr);
				SearchDisplay(countryArr);
            })
            .catch(error => console.log('There was an error: ' + error));

	});//end srchbtn on-click
	
});//end page onload 

function SearchDisplay(country){
	
	var res = document.getElementById('result');
	res.innerHTML = country;
}




/*
		||----------------------THUS BEGINS THE CODE GRAVEYARD----------------------||


var i = 0;
	while (i < length(country)){
		var c_div = document.getElementById('result');
		var head2 = document.createElement('h2');
		var txt1 = document.createTextNode();
	}//end while
	

function ProData(data){
	return data.split("::");
}//end process data funciton

fetch("world.php",{method: 'GET', headers:{document.getElementById("country"): txtval}})
            .then(response => {
                if (response.ok) {
                    return response.text()
                } else {
                    return Promise.reject('something went wrong!')
                }
            })
            .then(data => {
                let quote = document.querySelector('#quote');
				alert(data);
                //quote.innerHTML = data;
            })
            .catch(error => console.log('There was an error: ' + error));
*/