function login() {
    $.ajax({
        type: "POST",
        url: 'http://45.119.82.176:8000/login/user/',
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: $('#login').serialize(),
        success: function(response) {
            alert(response);
            if (("token" in response) == error) {} 
            else {
                __token = response.token;
                localStorage.setItem("token", __token);
                localStorage.setItem("login_time", Math.floor(Date.now() / 1000));
                console.log(__token);
                alert(__token);
                window.location.href = 'index.php';
            }
        },
        error: function(a, b, c) {
            //console.log(a);
            alert(JSON.stringify(a));
        }
    });
}

function Signup(){
   if($('#username').val() == ''||$('#password').val() == ''){
      alert('Input can not be left blank');
      return false;
   };

   $.ajax({
        type: "POST",
        url: 'http://45.119.82.176:8000/users/register/',
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: $('#signup').serialize(),
        success: function(response) {
            alert(response);
            if (("token" in response) == error) {} 
                else {
                localStorage.setItem("name", $('#name').val());
                window.location.href = 'index.php';
            }
        },
        error: function(a, b, c) {
            alert(JSON.stringify(a));
        }
    });
}