$('#form_login').submit(function () {
    ahihe();
})
function ahihe() {
	var x = JSON.stringify({ "username": $('#email1').val(), 
                			"password": $('#password1').val()});
	//console.log(x);
	//alert($('#login').serialize());
    alert(x);
	$.ajax({
		 		type: "POST",
                url: 'http://45.119.82.176:8000/login/user/',
                withCredentials: true,
                data: x,
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