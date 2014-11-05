var Ajax = (function(){

	var ajax = {}
	
	//helper ajax get function
	ajax.get = function(url,callback) {
		var r = new XMLHttpRequest();
		r.responseType = 'text/json';

		r.onreadystatechange = function(e) {
			if (this.readyState == 4) { //Done
				if (this.status == 200) { //Okay we got it
					callback(this.response);
				} else if ( this.status == 404) { //We couldn't find it
					callback("We couldn't find the page, make sure the page exists or you spelt it correctly");
				}
			}
		}

		r.open("GET",url, true);
		r.send(null);

	};

	return ajax;

})();