<? php 
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Exchange</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Fontello CSS -->
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
</head>

<body>
    <!-- header-section-->
    <div class="header-wrapper fixed-top header-collapse">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="logo"> <a href="index.php"><img src="./images/logo.png" alt=""> </a> </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                    <!-- navigations-->
                    <div class="navigation">
                        <div id="navigation">
                            <ul>
                                <li><a href="#" onclick="admin_click(1)">Thống kê & Chênh lệch</a></li>
                                <li><a href="#" onclick="admin_click(2)">Danh sách người dùng</a></li>
                                <li><a href="#" onclick="admin_click(3)">Lịch sử giao dịch</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navigations-->
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 d-none d-xl-block d-lg-block">
                    <div class="header-quick-info">
                        <a href="login.php" class="btn btn-white btn-xs mr-1">Login</a>
                        <a href="register.php" class="btn btn-default btn-xs">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->
    <!-- page-header -->
    <div class="page-header" style="height: 100px; margin: 0px; padding: 0px">
    </div>
    <!-- /.page-header-->
    <!-- exchange -->
    <div class="content" style="padding-top: 0px; text-align: center;">
        <div id="1" class="container_admin">
            <div id="chartContainer"></div>
            <div id="chenh_lech">
                <div id='Amount' style="margin-top: 45px; padding-left: 130px;">
                    Interest rate:
                    <div id="number">
                        <input id="input_number" type="text" name="amount" value="1" style="width: 15%; text-align: right;">
                        <button id="select_number" disabled style="width: 15%;">%</button>
                    </div>
                </div>
                <button id="update_percent">Update</button>
            </div>
        </div>
        <div id="2" class="container_admin">
            <div class="table_order_sell" style="margin-right: 200px;">
                <table id="customers" style="width:100%">
                    <thread>
                        <tr>
                            <th>ID</th>
                            <th>User name</th>
                            <th>BTC</th>
                            <th>ETH</th>
                            <th>XMR</th>
                            <th>USDT</th>
                        </tr>
                    </thread>
                    <tbody>
                        <tr>
                            <td>Alfreds</td>
                            <td>Maria </td>
                            <td>Germany</td>
                            <td>Germany</td>
                            <td>Germany</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Berglunds </td>
                            <td>Christina </td>
                            <td>Sweden</td>
                            <td>Germany</td>
                            <td>Germany</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Centro </td>
                            <td>Francisco </td>
                            <td>Mexico</td>
                            <td>Germany</td>
                            <td>Germany</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Alfreds</td>
                            <td>Maria </td>
                            <td>Germany</td>
                            <td>Germany</td>
                            <td>Germany</td>
                            <td>Germany</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="3" class="container_admin">
            <div class="table_order_sell" style="margin-right: 200px;">
                <table id="customers"  style="width:100%">
                    <thread>
                        <tr>
                            <th>DateTime</th>
                            <th>ID</th>
                            <th>Amount</th>
                            <th>Price</th>
                            <th>Interest rate</th>
                        </tr>
                    </thread>
                    <tbody>
                        <tr>
                            <td>Alfreds</td>
                            <td>Maria </td>
                            <td>Germany</td>
                            <td>Germany</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Berglunds </td>
                            <td>Christina </td>
                            <td>Sweden</td>
                            <td>Germany</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Centro </td>
                            <td>Francisco </td>
                            <td>Mexico</td>
                            <td>Germany</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Alfreds</td>
                            <td>Maria </td>
                            <td>Germany</td>
                            <td>Germany</td>
                            <td>Germany</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.exchange -->
    <!-- /.contact -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row ">
                <!-- footer-about -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                    <div class="footer-widget ">
                        <div class="footer-title">Company</div>
                        <ul class="list-unstyled">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Legal & Privacy</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-about -->
                <!-- footer-links -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                    <div class="footer-widget ">
                        <div class="footer-title">Quick Links</div>
                        <ul class="list-unstyled">
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-links -->
                <!-- footer-links -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                    <div class="footer-widget ">
                        <div class="footer-title">Social</div>
                        <ul class="list-unstyled">
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Google +</a></li>
                            <li><a href="#">Linked In</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-links -->
                <!-- footer-links -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-6 ">
                    <div class="footer-widget ">
                        <h3 class="footer-title">Subscribe Newsletter</h3>
                        <form>
                            <div class="newsletter-form">
                                <input class="form-control" placeholder="Enter Your Email address" type="text">
                                <button class="btn btn-default btn-sm" type="submit">Go</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.footer-links -->
                <!-- tiny-footer -->
            </div>
            <div class="row ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                    <div class="tiny-footer">
                        <p>Copyright © All Rights Reserved 2020 | Template Design & Development by <a href="https://easetemplate.com/ " target="_blank" class="copyrightlink">EaseTemplate</a></p>
                    </div>
                </div>
                <!-- /. tiny-footer -->
            </div>
        </div>
    </div>
    <!-- /.footer -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/return-to-top.js"></script>
    <script src="js/canvasjs.min.js"></script>
    <script src="js/admin.js"></script>
    <script type="text/javascript">
    var chart = new CanvasJS.Chart("chartContainer", {
        exportEnabled: true,
        animationEnabled: true,
        title: {
            text: "Storage Coin"
        },
        legend: {
            cursor: "pointer",
            itemclick: explodePie
        },
        data: [{
            type: "pie",
            showInLegend: true,
            toolTipContent: "{name}: <strong>{y}%</strong>",
            indexLabel: "{name} - {y}",
            dataPoints: [
                { y: 55, name: "BTC", exploded: true },
                { y: 27, name: "ETH" },
                { y: 28, name: "XMR" },
                { y: 35, name: "USDT" }
            ]
        }]
    });
    chart.render();

    function explodePie(e) {
        if (typeof(e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
            e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
        } else {
            e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
        }
        e.chart.render();

    }
    </script>
</body>

</html>
?>