

<script type="text/javascript">
    $(function () {
        var __token = localStorage.getItem('token');
        if (__token===null || __token==="") {
            location.href = '<?php echo MAIN_URL ?>/home';
        }
    });
</script>

<div style="width: 100%; displayd: inline-block; height: 400px;">
    <div id="chart_coin" style="height: 300px; width: 45%; float: left; margin-top: 50px;">
    
    </div>
    <div id="table_edit_transaction" style="width: 45%; float: right; padding-top: 100px; padding-right: 50px;" >
                <div class="header_table_coin">
                    <div style="font-size: 30px;font-weight: bold; text-align: center;">Queue transaction</div>
                </div>
                <table id="customers" class="table table-striped table-bordered" style="width:100%;">
                    <thread>
                        <tr>
                            <th>Datetime</th>
                            <th>ID</th>
                            <th>Amount</th>
                            <th>Price</th>
                            <th>UserID</th>
                            <th></th>
                        </tr>
                    </thread>
                    <tbody id="queue_transaction" style=" height: 30px;overflow-y: scroll;">
                    </tbody>
                </table>
            </div>
</div>

<div id="table_trade_history"  style="display: inline-block; width: 500px; margin-left: 400px; margin-top: 100px;">
                <div class="header_table_coin">
                    <div style="font-size: 40px;font-weight: bold; text-align: center;">Trade History</div>
                </div>
                <table id="customers" class="table table-striped table-bordered" style="width:100%; margin-top: 30px;">
                    <thread>
                        <tr>
                            <th>Datetime</th>
                            <th>ID</th>
                            <th>Amount</th>
                            <th>Price</th>
                            <th>UserID</th>
                        </tr>
                    </thread>
                    <tbody id="history_transaction">
                    </tbody>
                </table>
            </div>


