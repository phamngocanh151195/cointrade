var coin = ['BTC', 'ETH', 'XMR', 'USDT'];
var __token = localStorage.getItem('token');

function load_chart() {
    var type_c = localStorage.getItem('typecoin');
    if (type_c === null) {
        type_c = 1;
    }
    var name_coin = ["BTC", "ETH", "XMR", "USDT"];
    var fullname_coin = ["Bitcoin", "Ethereum", "Monero", "Tether"];
    var data = [];
    var dataPoints = [];

    $.ajax({
        url: 'http://45.119.82.176:8000/general/xembanggiacoin/',
        type: 'get',
        success: function(response) {
            ///load market            
            $('#table_market').empty();
            console.log('price:' + response.data[response.data.length - 5+ type_c].price);
            //var price1 = response.data[response.data.length - 5+ type_c].price;
            for (var i = response.data.length - 4; i <= response.data.length-1; i++) {
                    if (response.data[i].typecoin!=type_c) {
                        var price2 = response.data[i].price;
                        var div = '<tr><td>'+name_coin[response.data[i].typecoin-1]+'</td>\
                                <td>'+parseFloat(price1)/parseFloat(price2)+'</td>\
                                <td>'+fullname_coin[response.data[i].typecoin-1]+'</td></tr>';
                        //console.log(div);
                        $('#table_market').append(div);
                    }
            }



            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].typecoin == type_c) {
                    //console.log(response.data[i].price);
                    dataPoints.push({
                        x: new Date(response.data[i].time),
                        y: response.data[i].price
                    });
                }
            }

            var chart = new CanvasJS.Chart("chartContainer1", {
                zoomEnabled: true,
                animationEnabled: true,
                animationEnabled: true,
                title: {
                    text: name_coin[type_c - 1]
                },
                axisX: {
                },
                axisY: {
                    title: "VNĐ",
                    lineColor: "#4F81BC",
                    labelFontColor: "#4F81BC",
                    tickColor: "#4F81BC",
                    includeZero: false
                },
                toolTip: {
                    shared: true
                },
                data:[
                {
                    type: "line",
                    name: "Profit",
                    showInLegend: true,
                    xValueFormatString: "SS HH DDD MMM YYYY",
                    yValueFormatString: "$#,##0.#",
                    dataPoints: dataPoints
                }
            ]
            });
            chart.render();
        },
        error: function(a, b, c) {
            console.log(a);
        }
    });
};




$(document).ready(function() {
    load_datlenh();
    load_chart();
    setInterval(load_chart, 60000);

});

function load_market(vl1, vl2, vl3, vl4) {
    var type_c = localStorage.getItem('typecoin');
    if (type_c === null) {
        type_c = 1;
    }
    var name_coin = ["BTC", "ETH", "XMR", "USDT"];
    var fullname_coin = ["Bitcoin", "Ethereum", "Monero", "Tether"];

    var ohe = [];
    ohe[0] = vl1;
    ohe[1] = vl2;
    ohe[2] = vl3;
    ohe[3] = vl4;
    console.log('obj:' + ohe);
}

function market_click(id) {
    for (var i = 1; i <= 4; i++) {
        if (i!=id) {
            $('#'+coin[i-1]).removeClass('active_coin');
        }
        else{            
            $('#'+coin[i-1]).addClass('active_coin');
        }
    }

    localStorage.setItem("typecoin", id);
    load_chart();
}


function load_datlenh() {
    $('#tbody').empty();
//    var __token = localStorage.getItem('token');
    $.ajax({
        url: 'http://45.119.82.176:8000/general/xemdanhsachgiaodich/',
        type: 'get',
        success: function(response) {
            for (var i = 0; i < response.data.length; i++) {
                var div = '<tr><td>'+new Date(response.data[i].time)+'</td>\
                                <td>'+response.data[i].id+'</td>\
                                <td>'+response.data[i].fromcoin +coin[response.data[i].fromtypecoin-1]+'</td>\
                                <td>'+response.data[i].tocoin +coin[response.data[i].totypecoin-1]+'</td>\
                                <td>'+response.data[i].userid+'</td></tr>';
                //console.log(div);
                $('#tbody').append(div);
            }

        },
        error: function(a, b, c) {
            console.log(a);
        }
    });
}

function post_click() {
    var __token = localStorage.getItem('token');
    var obj = {};
    obj.fromtypecoin = $('#select_number1').find('option:selected').val();
    obj.fromcoin = $('#input_number1').val();
    obj.totypecoin = $('#select_number2').find('option:selected').val();
    obj.tocoin = $('#input_number2').val();
    if (obj.fromcoin<=0||obj.tocoin<=0) {
        alert('hihi');
        mtip('', 'Error', '', 'Gía trị phải >0');
    }

    if($('#button_sell_span').text()=='Post'&&obj.fromcoin>0&&obj.tocoin>0){
        console.log(obj);
        $.ajax({
        url: 'http://45.119.82.176:8000/users/datlenh/',
        type: 'post',
        datatype: 'json',
        data: obj,
        beforeSend: function(xhr){
           xhr.setRequestHeader('Authorization', __token);
       },
        success: function(response) {
            console.log('datlenh: '+ response);
            console.log(response);
            if (response.status == 'success') {
                load_datlenh();    
                mtip('', 'success', '', response.data);
                khoplenh();
            }
            else
            {
                mtip('', 'error', 'Error', response.message);
            }
            
        },
        error: function(a, b, c) {
            console.log(a);
        }
    });
    }
};


function khoplenh() {
    /// Khop lenh
            $.ajax({
                url: 'http://45.119.82.176:8000/users/khoplenh/',
                type: 'post',
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', __token);
                },
                success: function(response){
                    console.log(response);
                },
                error: function(a, b, c) {
                    console.log(a);
                }
            });
}