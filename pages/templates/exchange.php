<!-- exchange -->
    <div class="content">
        <div class="container" style="margin-left: 0px; padding-left: 10px;">
            <div id="chartContainer1" style="width: 75%; height: 400px;display: inline-block;"></div>
            <div id="table_coin" >
                <div class="header_table_coin">
                    <div style="font-size: 30px;font-weight: bold;">MARKETS</div>
                    <div id= "coin">
                        <button onclick="market_click(1)" id="BTC" class="active_coin">BTC</button>
                        <button onclick="market_click(2)" id="ETH">ETH</button>
                        <button onclick="market_click(3)" id="XMR">XMR</button>
                        <button onclick="market_click(4)" id="USDT">USDT</button>
                    </div>
                </div>
                <table id="customers" class="table table-striped table-bordered" style="width:100%">
                    <thread>
                        <tr>
                            <th>Coin</th>
                            <th>Price</th>
                            <th>Name</th>
                        </tr>
                    </thread>
                    <tbody id="table_market">
                        
                    </tbody>
                </table>
            </div>

            <div id="sell_table">
                <div id='head_sell_table'>
                    EXCHANGE
                </div>
                <div id = 'Amount' >
                    Amount: 
                    <div id="number">
                        <input id="input_number1" type="text" name="amount" placeholder="0" class="input_number">
                        <select id="select_number1" class="select_number">
                            <option value="1" >BTC</option>
                            <option value="2" >ETH</option>
                            <option value="3">XMR</option>
                            <option value="4">USDT</option>
                          </select>
                    </div>
                </div>
                <div id = 'price'>
                    Price: 
                    <div id="number">
                        <input id="input_number2" type="text" name="amount" placeholder="0" class="input_number">
                        <select id="select_number2" class="select_number">
                            <option value="1">BTC</option>
                            <option value="2" selected>ETH</option>
                            <option value="3">XMR</option>
                            <option value="4">USDT</option>
                          </select>
                    </div>
                </div>

                <div id="footer_sell_table">
                    <button id="button_sell" onclick="post_click()">
                        <span id="button_sell_span">Post</span>
                    </button>
                </div>
            </div>


            <div class="table_order_sell">
                <table id="customers"  style="width:100%">
                    <thread>
                        <tr>
                            <th>Datetime</th>
                            <th>ID</th>
                            <th>Amount</th>
                            <th>Price</th>
                            <th>UserID</th>
                        </tr>
                    </thread>
                    <tbody id="tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.exchange -->