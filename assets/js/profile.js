var __token = localStorage.getItem('token');
var coin = ['BTC', 'ETH', 'XMR', 'USDT'];

$(document).ready(function() {
    load_pie();
    load_queue();
    load_history();
});

function load_pie() {
    var dataPoints = [];
    

    $.ajax({
        url: 'http://45.119.82.176:8000/users/coininfo/',
        type: 'get',
        beforeSend: function(xhr) {
            xhr.setRequestHeader('Authorization', __token);
        },
        success: function(response) {
            for (var i = 0; i < response.data.length; i++) {
                //break;
                dataPoints.push({
                    y: response.data[i].value,
                    indexLabel: coin[response.data[i].coinid - 1]
                });
            }

            var chart = new CanvasJS.Chart("chart_coin", {
                animationEnabled: true,
                title: {
                    text: "User coin"
                },
                legend: {
                    maxWidth: 350,
                    itemWidth: 120
                },
                data: [{
                    type: "pie",
                    showInLegend: true,
                    legendText: "{indexLabel} - {y}",
                    indexLabel: "{indexLabel} - {y}",
                    dataPoints: dataPoints
                }]
            });
            chart.render();
        },
        error: function(a, b, c) {
            console.log(a);
        }
    });
}


function load_queue() {
	$('#queue_transaction').empty();
    $.ajax({
        url: 'http://45.119.82.176:8000/users/xemlenhdangcho/',
        type: 'get',
        beforeSend: function(xhr) {
            xhr.setRequestHeader('Authorization', __token);
        },
        success: function(response) {
            for (var i = 0; i < response.data.length; i++) {
                var div = '<tr><td>'+new Date(response.data[i].time)+'</td>\
                                <td>'+response.data[i].id+'</td>\
                                <td>'+response.data[i].fromcoin +coin[response.data[i].fromtypecoin-1]+'</td>\
                                <td>'+response.data[i].tocoin +coin[response.data[i].totypecoin-1]+'</td>\
                                <td>'+response.data[i].userid+'</td></tr>';
                //console.log(div);
                $('#queue_transaction').append(div);
            }
        },
        error: function(a, b, c) {
            console.log(a);
        }
    });
}

function load_history() {
	$('#history_transaction').empty();
    $.ajax({
        url: 'http://45.119.82.176:8000/users/xemlenhdakhop/',
        type: 'get',
        beforeSend: function(xhr) {
            xhr.setRequestHeader('Authorization', __token);
        },
        success: function(response) {
        	console.log(response.data);
            for (var i = 0; i < response.data.length; i++) {
                var div = '<tr><td>'+new Date(response.data[i].time)+'</td>\
                                <td>'+response.data[i].id+'</td>\
                                <td>'+response.data[i].fromcoin +coin[response.data[i].fromtypecoin-1]+'</td>\
                                <td>'+response.data[i].tocoin +coin[response.data[i].totypecoin-1]+'</td>\
                                <td>'+response.data[i].userid+'</td></tr>';
                //console.log(div);
                $('#history_transaction').append(div);
            }
        },
        error: function(a, b, c) {
            console.log(a);
        }
    });
}