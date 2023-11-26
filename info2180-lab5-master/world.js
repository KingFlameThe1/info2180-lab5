document.addEventListener( 'DOMContentLoaded', () =>{
	
	var srchbtn = document.getElementById("lookup");
	//var txtval = document.getElementById("country").value;
	
	srchbtn.addEventListener('click', function(e) {
		var txtval = document.getElementById("country").value;
		
		fetch("world.php?country="+encodeURI(txtval),{method: 'GET'})
            .then(response => {
                if (response.ok) {
                    return response.text()
                } else {
                    return Promise.reject('something went wrong!')
                }
            })
            .then(data => {
                alert(data);
				console.log(data)
            })
            .catch(error => console.log('There was an error: ' + error));e.preventDefault();
		
		
		
	});//end srchbtn on-click
	
});//end page onload 



/*
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