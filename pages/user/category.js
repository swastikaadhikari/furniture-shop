function displayme(ab,bc){//function
	var xmlHttp = new XMLHttpRequest();//accept the requesrt
	xmlHttp.open('POST', '../../pages/user/category.php', true);//includes the page and made it true
	var data = new FormData();//new var data
	data.append('id',ab);//append the id
	data.append("value",bc);//append the value
	xmlHttp.onreadystatechange = function(){//function set chanfe
		if(xmlHttp.readyState > 3){//made changes
			var divn = document.getElementById('new');//gives the value new
			divn.innerHTML = xmlHttp.responseText;//response text
		}
	};
	xmlHttp.send(data);//send sthe data
 }

function myLoad(){//load function
	var load = document.getElementById('displayMe');//gets the id
}

document.addEventListener('DOMContentLoaded',myLoad);//my laod called