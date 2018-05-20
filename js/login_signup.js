function ahihe() {
	//alert($('#login').serialize());
    alert($('#login').serialize());
	$.ajax({
		 		type: "POST",
                url: 'http://45.119.82.176:8000/login/user/',
                dataType : "json",
                contentType: "application/json; charset=utf-8",
                data: $('#login').serialize(),
                success: function (response) {
                	alert(response);
                    if (("token" in response) == false) {
                    } else {
                        __token = response.token;
                        localStorage.setItem("token" , __token);
                        localStorage.setItem("login_time" , Math.floor(Date.now() / 1000));
                        console.log(__token);
                        alert(__token);
                        window.location.href = 'http://127.0.0.1/cointrade/index.php';
                    }
                },
                error: function (a, b, c) {
                    //console.log(a);
                    alert(JSON.stringify(a));
                }
            });
}