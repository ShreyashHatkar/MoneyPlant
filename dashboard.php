<?php
  include("connection.php");
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!--ICONS-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--FONTS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&family=Roboto:ital,wght@0,300;0,400;0,500;1,400&display=swap"
    rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
  <!--NAVBAR-->
  <header id="header">
    <nav id="nav-bar">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        <input type="checkbox" name="" id="check">
        <label for="check" class="checkbtn"><i class="bi bi-list"></i></label>
        <img src="0paisapodha.png" alt="StarLights logo" id="header-img">
        <label class="brand"><b>MoneyPlant</b></label>
        <ul>
            <li><a href="home2.html" class="nav-link">About</a></li>
            <li><a href="home2.html" class="nav-link">Features</a></li>
            <li><a href="home2.html" class="nav-link">Preview</a></li>
            <li><a href="home2.html" class="nav-link">Testimonials</a></li>
        </ul>
    
    </nav>
</header>
  <!--NAV BAR ENDS-->
  <!--MAIN SECTION STARTS-->
  <main>


    <!--SIDE BAR ENDS-->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="home2.php">About</a>
      <a href="services.html">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>

    <!--CONTENT STARTS-->
    <section class="middle">
      <div class="header">
        <h1>Your assets</h1>
        <p>Overview of your account</p>
        <input type="date">
      </div>
      <div class="cards">



        <!--card start-->
        <div class="card">
          <header>

            <span class="logo">
              <img src="images/images/master card.png" alt="" />
              <h5>Master Card</h5>
            </span>
            <img src="images/images/card chip.png" alt="" class="chip" />
          </header>

          <div class="card-details">
            <div class="name-number">
              <div class="crypto">
                <img src="images/images/ETH.png" alt="" / height="50px" width="50px">
                <p>ETH</p>
              </div>
              <h5 class="number"><?php echo $_SESSION['UserBalance'];?></h5>
              <h5 class="name"><?php echo $_SESSION['loggedInUser'];?></h5>
            </div>
            <div class="valid-date">
              <h6>Valid Thru</h6>
              <h5>05/28</h5>
            </div>
          </div>
        </div>
        <div class="card">
          <header>

            <span class="logo">
              <img src="images/images/master card.png" alt="" />
              <h5>Master Card</h5>
            </span>
            <img src="images/images/card chip.png" alt="" class="chip" />
          </header>

          <div class="card-details">
            <div class="name-number">

              <div class="crypto">
                <img src="/images/images/BTC.png" alt="" / height="50px" width="50px">
                <p>BTC</p>
              </div>
              <h5 class="number"><?php echo $_SESSION['UserBalance'];?></h5>
              <h5 class="name"><?php echo $_SESSION['loggedInUser'];?></h5>
            </div>
            <div class="valid-date">
              <h6>Valid Thru</h6>
              <h5>05/28</h5>
            </div>
          </div>
        </div>
        <div class="card">
          <header>

            <span class="logo">
              <img src="images/images/master card.png" alt="" />
              <h5>Master Card</h5>
            </span>
            <img src="images/images/card chip.png" alt="" class="chip" />
          </header>

          <div class="card-details">
            <div class="name-number">
              <div class="crypto">
                <img src="images/images/EURO.png" alt="" / height="50px" width="50px">
                <p>EUR</p>
              </div>
              <h5 class="number"><?php echo $_SESSION['UserBalance'];?></h5>
              <h5 class="name"><?php echo $_SESSION['loggedInUser'];?></h5>
            </div>
            <div class="valid-date">
              <h6>Valid Thru</h6>
              <h5>05/28</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="monthly-report">
        <div class="report">
          <h3>Income</h3>
          <div>
            <details>
              <h1>$34,543</h1>
              <h6 class="danger">+3%</h6>
            </details>
            <p class="text-muted">
              Compared to 32,000 last month
            </p>
          </div>
        </div>

        <div class="report">
          <h3>Expenses</h3>
          <div>
            <details>
              <h1>$34,543</h1>
              <h6 class="sucess">+3%</h6>
            </details>
            <p class="text-muted">
              Compared to 32,000 last month
            </p>
          </div>
        </div>



        <div class="report">
          <h3>Cashback</h3>
          <div>
            <details>
              <h1>$34,543</h1>
              <h6 class="sucess">+3%</h6>
            </details>
            <p class="text-muted">
              Compared to 32,000 last month
            </p>
          </div>
        </div>

        <div class="report">
          <h3>Turnover</h3>
          <div>
            <details>
              <h1>$34,543</h1>
              <h6 class="sucess">+3%</h6>
            </details>
            <p class="text-muted">
              Compared to 32,000 last month
            </p>
          </div>
        </div>

      </div>
      </div>

      <!--INSIGHTS-->

      <div class="insights">
        <div class="sales">
          <i class="material-icons">analytics</i>
          <div class="middle">
            <div class="left">
              <h3>Sales</h3>
              <h1>$25,924</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx='38' cy='38' r='36'></circle>
              </svg>
              <div class="number">
                <p>81%</p>
              </div>
            </div>
          </div>
          <small class="text-mut">Last 24 Hours</small>
        </div>



        <div class="expenses">
          <i class="material-icons">analytics</i>
          <div class="middle">
            <div class="left">
              <h3>Expenses</h3>
              <h1>$5,924</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx='38' cy='38' r='36'></circle>
              </svg>
              <div class="number">
                <p>81%</p>
              </div>
            </div>
          </div>
          <small class="text-mut">Last 24 Hours</small>
        </div>

        <div class="income">
          <i class="material-icons">analytics</i>
          <div class="middle">
            <div class="left">
              <h3>Savings</h3>
              <h1>$20,000</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx='38' cy='38' r='36'></circle>
              </svg>
              <div class="number">
                <p>81%</p>
              </div>
            </div>
          </div>
          <small class="text-mut">Last 24 Hours</small>
        </div>




      </div>


      <div class="stock">
        <h1>Stock analysis</h1>
        <div>
          <label for="symbol">Select a stock symbol:</label>
          <select id="symbol">
            <option value="AAPL">APPLE</option>
            <option value="GOOG">GOOGLE</option>
            <option value="MSFT">MICROSOFT</option>
            <option value="AMZN">AMAZON</option>
            <option value="FB">FB</option>
          </select>
        </div>
        <canvas id="myChart"></canvas>
        <script>

          const apiKey = '41d675f827msh6b19b557ac4aaf9p1165a1jsn769bbf3ec6d7';
          const symbolSelect = document.getElementById('symbol');
          let symbol = symbolSelect.value;
          let apiUrl = `https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=${symbol}&interval=5min&apikey=${apiKey}`;

          const chart = new Chart(document.getElementById('myChart'), {
            type: 'line',
            data: {
              labels: [],
              datasets: [
                {
                  label: `${symbol} stock price`,
                  data: [],
                  borderColor: '#3e95cd',
                  fill: false,
                },
              ],
            },
            options: {
              title: {
                display: true,
                text: `${symbol} live stock price`,
              },
              scales: {
                xAxes: [
                  {
                    type: 'time',
                    distribution: 'series',
                  },
                ],
                yAxes: [
                  {
                    scaleLabel: {
                      display: true,
                      labelString: 'Price ($)',
                    },
                  },
                ],
              },
            },
          });

          const getData = async () => {
            try {
              const response = await fetch(apiUrl);
              const data = await response.json();
              const timeSeriesData = data['Time Series (5min)'];
              const labels = [];
              const prices = [];
              for (const [timestamp, priceData] of Object.entries(timeSeriesData)) {
                labels.push(new Date(timestamp));
                prices.push(parseFloat(priceData['4. close']));
              }
              chart.data.labels = labels.reverse();
              chart.data.datasets[0].data = prices.reverse();
              chart.options.title.text = `${symbolSelect.value} live stock price`;
              chart.update();
            } catch (error) {
              console.error(error);
            }
          };

          symbolSelect.addEventListener('change', () => {
            symbol = symbolSelect.value;
            apiUrl = `https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=${symbol}&interval=5min&apikey=${apiKey}`;
            chart.options.title.text = `${symbol} live stock price`;
            getData();
          });

          getData();
          setInterval(getData, 50000); // Refresh every 5 seconds
        </script>

      </div>
      <!--PAPER TRADING SECTION-->
      <div class="trainer-container">
        <h1>Stock Trainer</h1>
        <div class="form-container">
          <form>
            <label for="symbol1">Stock Symbol:</label>
            <input type="text" id="symbol1" name="symbol1" placeholder="Enter a stock symbol">
            <button type="submit">Search</button>
          </form>
        </div>
        <div id="stock-info-container" class="hidden">
          <h2 id="stock-name"></h2>
          <div id="stock-symbol"></div>
          <div id="stock-price"></div>
          <div id="stock-change"></div>
          <div id="stock-open"></div>
          <div id="stock-close"></div>
          <div id="stock-high"></div>
          <div id="stock-low"></div>
        </div>
        <div id="balance-container">
          <span color = 'black'>Account Balance:</span>
          <span id="balance" color = 'black' ><?php echo $_SESSION['UserBalance'];?></span>
        </div>
       
        <div id="buy-sell-container">
          <h3>Buy/Sell</h3>
          <form id="buy-sell-form">
            <input type="number" id="shares-input" placeholder="Shares" min="1" step="1" required />
            <select id="buy-sell-select" required>
              <option value="buy">Buy</option>
              <option value="sell">Sell</option>
            </select>
            <button type="submit">Submit</button>
          </form>
        </div>
        
        
  
        <div id="transaction-history-container">
          <h3>Transaction History</h3>
          <div id="transaction-history"></div>
        </div>
      </div>


    
      <script>
  let currentPrice=0;
  let currentSymbol='';
  const form = document.querySelector('form');
  const stockInfoContainer = document.querySelector('#stock-info-container');
  const stockName = document.querySelector('#stock-name');
  // stock name heading
  stockName.textContent = '';
  
  // stock info
  const stockSymbol = document.querySelector('#stock-symbol');
  const stockPrice = document.querySelector('#stock-price');
  const stockChange = document.querySelector('#stock-change');
  const stockOpen = document.querySelector('#stock-open');
  const stockClose = document.querySelector('#stock-close');
  const stockHigh = document.querySelector('#stock-high');
  const stockLow = document.querySelector('#stock-low');
  
  //extras
        const balanceSpan = document.getElementById('balance');
        const transactionHistoryDiv = document.getElementById('transaction-history');
        const buySellForm = document.getElementById('buy-sell-form');
        const sharesInput = document.getElementById('shares-input');
        const buySellSelect = document.getElementById('buy-sell-select');
  stockSymbol.textContent = '';
  stockPrice.textContent = '';
  stockChange.textContent = '';
  stockOpen.textContent = '';
  stockClose.textContent = '';
  stockHigh.textContent = '';
  stockLow.textContent = '';
  
  // show/hide stock info container
  stockInfoContainer.classList.add('hidden');
  
  // event listener for form submission
  form.addEventListener('submit', async (e) => {
  e.preventDefault();
  
  // get stock symbol input value
  const symbolInput = document.querySelector('#symbol1');
  const symbol1 = symbolInput.value;
  // fetch stock data
  const response = await fetch(`https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=${symbol1}`, {
  headers: {
      'x-rapidapi-key': '41d675f827msh6b19b557ac4aaf9p1165a1jsn769bbf3ec6d7',
      'x-rapidapi-host': 'apidojo-yahoo-finance-v1.p.rapidapi.com',
      'useQueryString': true
  }
  });
  const data = await response.json();
  const stock1 = data.quoteResponse.result[0];
  currentPrice= Number(stock1.regularMarketPrice.toFixed(2));
  currentSymbol=stock1.symbol;
  console.log(currentPrice);
  console.log(currentSymbol);
  if (data.quoteResponse.result.length === 0) {
  // stock not found
  stockName.textContent = `Stock not found for symbol "${symbol1}"`;
  } else {
  // update stock info
  const stock = data.quoteResponse.result[0];
  stockName.textContent = stock.shortName;
  stockSymbol.textContent = `Symbol: ${stock.symbol}`;
  stockPrice.textContent = `Price: $${stock.regularMarketPrice.toFixed(2)}`;
  stockChange.textContent = `Change: ${stock.regularMarketChangePercent.toFixed(2)}%`;
  stockOpen.textContent = `Open: $${stock.regularMarketOpen.toFixed(2)}`;
  stockClose.textContent = `Close: $${stock.regularMarketPreviousClose.toFixed(2)}`;
  stockHigh.textContent = `High: $${stock.regularMarketDayHigh.toFixed(2)}`;
  stockLow.textContent = `Low: $${stock.regularMarketDayLow.toFixed(2)}`;
   currentPrice= Number(stock.regularMarketPrice.toFixed(2));
  console.log(currentPrice);
  
  // set stock info color based on change
  if (stock.regularMarketChangePercent > 0) {
    stockChange.classList.add('positive');
  } else {
    stockChange.classList.add('negative');
  }
  
  // show stock info container
  stockInfoContainer.classList.remove('hidden');
  }
  
  // clear input
  symbolInput.value = '';
  });
  
  console.log(currentPrice);
  function updateBalance(change) {
          const currentBalance = parseFloat(balanceSpan.textContent.slice(1));
          const newBalance = currentBalance + change;
          balanceSpan.textContent = `$${newBalance.toFixed(2)}`;
        }
      
        function addTransactionToHistory(shares, transactionType) {
          const transaction = document.createElement('p');
          console.log("currentPrice:",currentPrice,currentSymbol);
          transaction.textContent = `${transactionType.toUpperCase()} ${shares} shares of ${currentSymbol} @ $${currentPrice.toFixed(2)}`;
          transactionHistoryDiv.prepend(transaction);
        
  }
  
  buySellForm.addEventListener('submit', (event) => {
      event.preventDefault();
      const shares = parseInt(sharesInput.value);
      if (isNaN(shares) || shares < 1) {
        alert('Invalid number of shares.');
        return;
      }
      const transactionType = buySellSelect.value;
      if (transactionType === 'buy') {
        const cost = shares * currentPrice;
        const currentBalance = parseFloat(balanceSpan.textContent.slice(1));
        if (currentBalance < cost) {
          alert('Insufficient balance.');
          return;
        }
        updateBalance(-cost);
        addTransactionToHistory(shares, 'Buy');
      } else {
        const currentShares = parseInt(transactionHistoryDiv.getElementsByTagName('p')[0].textContent.split(' ')[1]);
        if (currentShares < shares) {
          alert('Insufficient shares to sell.');
          return;
        }
        const revenue = shares * currentPrice;
        updateBalance(revenue);
        addTransactionToHistory(shares, 'Sell');
      }
    });
      </script>





       
      </div>

      <div id="analyzer">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/NASDAQ-AAPL/technicals/"
              rel="noopener" target="_blank"><span class="blue-text">AAPL stock analysis</span></a> </div>
          <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
              {
                "interval": "1m",
                  "width": 425,
                    "isTransparent": false,
                      "height": 450,
                        "symbol": "NASDAQ:AAPL",
                          "showIntervalTabs": true,
                            "locale": "in",
                              "colorTheme": "light"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->


        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/key-events/" rel="noopener"
              target="_blank"><span class="blue-text">Daily news roundup</span></a></div>
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js"
            async>
              {
                "feedMode": "all_symbols",
                  "colorTheme": "light",
                    "isTransparent": false,
                      "displayMode": "regular",
                        "width": "425",
                          "height": "450",
                            "locale": "in"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
    </section>


    <!--CONTENT ENDS-->
    <section class="right">
      <div class="investments">
        <div class="header">
          <h1>Investments</h1>


        </div>

        <div class="investment">

          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <h2>Cryptocurrencies</h2>
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/cryptocurrencies/"
                rel="noopener" target="_blank"></div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                {
                  "title": "Cryptocurrencies",
                    "title_raw": "Cryptocurrencies",
                      "tabs": [
                        {
                          "title": "Overview",
                          "title_raw": "Overview",
                          "symbols": [
                            {
                              "s": "CRYPTOCAP:TOTAL"
                            },
                            {
                              "s": "BITSTAMP:BTCUSD"
                            },
                            {
                              "s": "BITSTAMP:ETHUSD"
                            },
                            {
                              "s": "FTX:SOLUSD"
                            },
                            {
                              "s": "BINANCE:AVAXUSD"
                            },
                            {
                              "s": "COINBASE:UNIUSD"
                            }
                          ],
                          "quick_link": {
                            "title": "More cryptocurrencies",
                            "href": "/markets/cryptocurrencies/prices-all/"
                          }
                        },
                        {
                          "title": "Bitcoin",
                          "title_raw": "Bitcoin",
                          "symbols": [
                            {
                              "s": "BITSTAMP:BTCUSD"
                            },
                            {
                              "s": "COINBASE:BTCEUR"
                            },
                            {
                              "s": "COINBASE:BTCGBP"
                            },
                            {
                              "s": "BITFLYER:BTCJPY"
                            },
                            {
                              "s": "CEXIO:BTCRUB"
                            },
                            {
                              "s": "CME:BTC1!"
                            }
                          ],
                          "quick_link": {
                            "title": "More Bitcoin pairs",
                            "href": "/symbols/BTCUSD/markets/"
                          }
                        },
                        {
                          "title": "Ethereum",
                          "title_raw": "Ethereum",
                          "symbols": [
                            {
                              "s": "BITSTAMP:ETHUSD"
                            },
                            {
                              "s": "KRAKEN:ETHEUR"
                            },
                            {
                              "s": "COINBASE:ETHGBP"
                            },
                            {
                              "s": "BITFLYER:ETHJPY"
                            },
                            {
                              "s": "BINANCE:ETHBTC"
                            },
                            {
                              "s": "BINANCE:ETHUSDT"
                            }
                          ],
                          "quick_link": {
                            "title": "More Ethereum pairs",
                            "href": "/symbols/ETHUSD/markets/"
                          }
                        },
                        {
                          "title": "Solana",
                          "title_raw": "Solana",
                          "symbols": [
                            {
                              "s": "FTX:SOLUSD"
                            },
                            {
                              "s": "BINANCE:SOLEUR"
                            },
                            {
                              "s": "COINBASE:SOLGBP"
                            },
                            {
                              "s": "BINANCE:SOLBTC"
                            },
                            {
                              "s": "HUOBI:SOLETH"
                            },
                            {
                              "s": "BINANCE:SOLUSDT"
                            }
                          ],
                          "quick_link": {
                            "title": "More Solana pairs",
                            "href": "/symbols/SOLUSD/markets/"
                          }
                        },
                        {
                          "title": "Uniswap",
                          "title_raw": "Uniswap",
                          "symbols": [
                            {
                              "s": "COINBASE:UNIUSD"
                            },
                            {
                              "s": "KRAKEN:UNIEUR"
                            },
                            {
                              "s": "COINBASE:UNIGBP"
                            },
                            {
                              "s": "BINANCE:UNIBTC"
                            },
                            {
                              "s": "KRAKEN:UNIETH"
                            },
                            {
                              "s": "BINANCE:UNIUSDT"
                            }
                          ],
                          "quick_link": {
                            "title": "More Uniswap pairs",
                            "href": "/symbols/UNIUSD/markets/"
                          }
                        }
                      ],
                        "title_link": "/markets/cryptocurrencies/prices-all/",
                          "width": 400,
                            "height": 660,
                              "showChart": true,
                                "showFloatingTooltip": false,
                                  "locale": "in",
                                    "plotLineColorGrowing": "#2962FF",
                                      "plotLineColorFalling": "#2962FF",
                                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                          "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                              "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                                "gridLineColor": "rgba(240, 243, 250, 0)",
                                                  "scaleFontColor": "rgba(120, 123, 134, 1)",
                                                    "showSymbolLogo": true,
                                                      "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                                        "colorTheme": "light"
                }
              </script>
          </div>
          <!-- TradingView Widget END -->

        </div>

        <div class="investment">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <h2>FOREX</h2>
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/currencies/"
                rel="noopener" target="_blank"><span class="blue-text"></span></a> </div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                {
                  "title": "Currencies",
                    "tabs": [
                      {
                        "title": "Major",
                        "title_raw": "Major",
                        "symbols": [
                          {
                            "s": "FX_IDC:EURUSD",
                            "d": "EUR/USD"
                          },
                          {
                            "s": "FX_IDC:USDJPY",
                            "d": "USD/JPY"
                          },
                          {
                            "s": "FX_IDC:GBPUSD",
                            "d": "GBP/USD"
                          },
                          {
                            "s": "FX_IDC:AUDUSD",
                            "d": "AUD/USD"
                          },
                          {
                            "s": "FX_IDC:USDCAD",
                            "d": "USD/CAD"
                          },
                          {
                            "s": "FX_IDC:USDCHF",
                            "d": "USD/CHF"
                          }
                        ],
                        "quick_link": {
                          "title": "More majors",
                          "href": "/markets/currencies/rates-major/"
                        }
                      },
                      {
                        "title": "Minor",
                        "title_raw": "Minor",
                        "symbols": [
                          {
                            "s": "FX_IDC:EURGBP",
                            "d": "EUR/GBP"
                          },
                          {
                            "s": "FX_IDC:EURJPY",
                            "d": "EUR/JPY"
                          },
                          {
                            "s": "FX_IDC:GBPJPY",
                            "d": "GBP/JPY"
                          },
                          {
                            "s": "FX_IDC:CADJPY",
                            "d": "CAD/JPY"
                          },
                          {
                            "s": "FX_IDC:GBPCAD",
                            "d": "GBP/CAD"
                          },
                          {
                            "s": "FX_IDC:EURCAD",
                            "d": "EUR/CAD"
                          }
                        ],
                        "quick_link": {
                          "title": "More minors",
                          "href": "/markets/currencies/rates-minor/"
                        }
                      },
                      {
                        "title": "Exotic",
                        "title_raw": "Exotic",
                        "symbols": [
                          {
                            "s": "FX_IDC:USDSEK",
                            "d": "USD/SEK"
                          },
                          {
                            "s": "FX_IDC:USDMXN",
                            "d": "USD/MXN"
                          },
                          {
                            "s": "FX_IDC:USDZAR",
                            "d": "USD/ZAR"
                          },
                          {
                            "s": "FX_IDC:EURTRY",
                            "d": "EUR/TRY"
                          },
                          {
                            "s": "FX_IDC:EURNOK",
                            "d": "EUR/NOK"
                          },
                          {
                            "s": "FX_IDC:GBPPLN",
                            "d": "GBP/PLN"
                          }
                        ],
                        "quick_link": {
                          "title": "More exotics",
                          "href": "/markets/currencies/rates-exotic/"
                        }
                      }
                    ],
                      "title_link": "/markets/currencies/rates-major/",
                        "width": 400,
                          "height": 660,
                            "showChart": true,
                              "showFloatingTooltip": false,
                                "locale": "in",
                                  "plotLineColorGrowing": "#2962FF",
                                    "plotLineColorFalling": "#2962FF",
                                      "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                          "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                              "gridLineColor": "rgba(240, 243, 250, 0)",
                                                "scaleFontColor": "rgba(120, 123, 134, 1)",
                                                  "showSymbolLogo": true,
                                                    "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                                      "colorTheme": "light"
                }
              </script>
          </div>
          <!-- TradingView Widget END -->

        </div>



        <div class="investment">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/stocks-india/"
                rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                {
                  "title": "Stocks",
                    "tabs": [
                      {
                        "title": "Financial",
                        "symbols": [
                          {
                            "s": "NYSE:JPM",
                            "d": "Jpmorgan Chase & Co"
                          },
                          {
                            "s": "NYSE:WFC",
                            "d": "Wells Fargo Co New"
                          },
                          {
                            "s": "NYSE:BAC",
                            "d": "Bank Amer Corp"
                          },
                          {
                            "s": "NYSE:HSBC",
                            "d": "Hsbc Hldgs Plc"
                          },
                          {
                            "s": "NYSE:C",
                            "d": "Citigroup Inc"
                          },
                          {
                            "s": "NYSE:MA",
                            "d": "Mastercard Incorporated"
                          }
                        ]
                      },
                      {
                        "title": "Technology",
                        "symbols": [
                          {
                            "s": "NASDAQ:AAPL",
                            "d": "Apple"
                          },
                          {
                            "s": "NASDAQ:GOOGL",
                            "d": "Google Inc"
                          },
                          {
                            "s": "NASDAQ:MSFT",
                            "d": "Microsoft Corp"
                          },
                          {
                            "s": "NASDAQ:FB",
                            "d": "Meta Platforms, Inc"
                          },
                          {
                            "s": "NYSE:ORCL",
                            "d": "Oracle Corp"
                          },
                          {
                            "s": "NASDAQ:INTC",
                            "d": "Intel Corp"
                          }
                        ]
                      },
                      {
                        "title": "Services",
                        "symbols": [
                          {
                            "s": "NASDAQ:AMZN",
                            "d": "Amazon Com Inc"
                          },
                          {
                            "s": "NYSE:BABA",
                            "d": "Alibaba Group Hldg Ltd"
                          },
                          {
                            "s": "NYSE:T",
                            "d": "At&t Inc"
                          },
                          {
                            "s": "NYSE:WMT",
                            "d": "Wal-mart Stores Inc"
                          },
                          {
                            "s": "NYSE:V",
                            "d": "Visa Inc"
                          }
                        ]
                      }
                    ],
                      "width": 400,
                        "height": 660,
                          "showChart": true,
                            "showFloatingTooltip": false,
                              "locale": "in",
                                "plotLineColorGrowing": "#2962FF",
                                  "plotLineColorFalling": "#2962FF",
                                    "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                      "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                          "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                            "gridLineColor": "rgba(240, 243, 250, 0)",
                                              "scaleFontColor": "rgba(120, 123, 134, 1)",
                                                "showSymbolLogo": true,
                                                  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                                    "colorTheme": "light"
                }
              </script>
          </div>
          <!-- TradingView Widget END -->

        </div>






    </section>

  </main>
  <br>
  <br>
  <br>

  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="rows">
        <div class="about">
          <h6>About</h6>
          <p class="text-justify">At MoneyPlant, we understand the importance of security when it comes to virtual money. That's why we use advanced encryption and security protocols to ensure that your transactions are safe and secure. Our platform utilizes blockchain technology, which creates a distributed ledger system that is tamper-proof and transparent. This means that every transaction on our platform is recorded and verified by multiple parties, making it nearly impossible to manipulate or hack.</p>
        </div>

        <div class="categories">
          <h6>Technologies Used</h6>
          <ul class="footer-links">
            <li><a href="">Html</a></li>
            <li><a href="">CSS</a></li>
            <li><a href="">PHP</a></li>
            <li><a href="">JavaScript</a></li>
            <li><a href="">GCP</a></li>
          </ul>
        </div>

        <div class="quick_links">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Contribute</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <br>
      <br>
      <hr style="background-color: white;">
      <br>
      <br>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by 
       <a href="#">MoneyPlant.com</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="github" href="#"><i class="fa fa-github"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a class="linkedin" href="#"><i class="bi bi-linkedin"></i></a></li>   
          </ul>
        </div>
      </div>
    </div>
</footer>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "15%";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
</body>

</html>