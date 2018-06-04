function mtip(a, c, title, content) {
    $(".alert").length && $(".alert").remove();
    if (a && a.length) {
        if (a == 'alert') {
            $('body').append('<div class="the-board-fixed"></div><div class="alert-fixed alert-' + c + '"><a class="close" onclick="htip(\'just-add\')" data-dismiss="alert">\u00d7</a><strong>' + title + " </strong>" + content + "</div>");
        } else $(a).prepend('<div class="alert alert-' + c + ' just-add"><a class="close" onclick="htip(\'just-add\')" data-dismiss="alert">\u00d7</a><strong>' + title + " </strong>" + content + "</div>");
    } else $('body').append('<div class="alert alert-' + c + ' just-add"><a class="close" onclick="htip(\'just-add\')" data-dismiss="alert">\u00d7</a><strong>' + title + " </strong>" + content + "</div>");
    wi = $('.just-add').width()/2;
    $('.just-add').css("left", "calc(50% - "+wi+"px)").animate({
        bottom: "+=50"
    }, 200);
    stip('just-add')
}

function htip(a) {
    if ($('.' + a).length) {
        var l = $('.' + a).attr('class');
        if (l.indexOf('alerts') > -1) {
            $("." + a).slideUp(function () {
                $("." + a).remove().prev('.the-board-fixed').remove()
            })
        } else {
            $(".alert").animate({
                bottom: "-=150"
            }, 500, function () {
                $(".alert").remove().prev('.the-board-fixed').remove()
            })
        }
    }
}

function stip(d) {
    $("." + d).fadeIn(1E3);
    setTimeout("htip('" + d + "')", 5E3)
}


function submitLoginForm () {
    $.ajax({
        url: 'http://45.119.82.176:8000/login/user/',
        type: 'post',
        data: $('#login').serialize(),
        success: function (response) {
            console.log(response);
            if (("token" in response) == false) {
                mtip('', 'error', 'Lỗi', response.message);
            } else {
                __token = response.token;
                localStorage.setItem("token" , __token);
                localStorage.setItem("username" , $('#username').val());
                localStorage.setItem("login_time" , Math.floor(Date.now() / 1000));
                console.log(__token);
                mtip('', 'success', '', 'Đăng nhập thành công! Đang chuyển hướng...');
                if ($('.popup:not(".popup-map") .load_login_form').length) {
                    remove_popup();
                } else if ($('.popup-map').length) {
                    location.reload();
                } else {
                    goBack();
                }
            }
        },
        error: function (a, b, c) {
            console.log(a);
            if (c == 'Unauthorized') {
                mtip('', 'error', '', 'Could not verify!');
            } else {
                mtip('', 'error', '', 'Lỗi hệ thống! Vui lòng liên hệ với quản trị viên để được hỗ trợ sớm nhất!');
            }
        }
    });
    return false
}


function submitSignupForm () {
    $.ajax({
        url: 'http://45.119.82.176:8000/users/register/',
        type: 'post',
        data: $('#signup').serialize(),
        success: function (response) {
            if (response.status=='success') {
                __token = response.token;
                localStorage.setItem("token" , '');
                localStorage.setItem("username" , $('#username').val());
                localStorage.setItem("login_time" , Math.floor(Date.now() / 1000));
                goBack();
            }
        },
        error: function (a, b, c) {
            console.log(a);
            location.reload();
        }
    });
    return false
}


$(function() {
    if (localStorage.getItem('username')===null||localStorage.getItem('username')==='') {
        $('#login_button').show();
        $('#signup_button').show();
        $('#profile_button').hide();
        $('#logout').hide();
        $('#button_sell_span').text('Login');        
    }
    else{
        $('#login_button').hide();
        $('#signup_button').hide();
        $('#profile_button').show();  
        $('#logout').show();
        $('#button_sell_span').text('Post');
        $('#profile_img').attr('title', localStorage.getItem('username'));
    }
});

function logout_click() {
    localStorage.setItem("token", '');
    localStorage.setItem("username", '');
    location.reload();
};

function goBack(){
    history.back();
}