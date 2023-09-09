let SWAP_MAPPER = {};

const ONE_PIP_DENOMINATOR = {
    CZK: 0.001,
    HUF: 0.01,
    JPY: 0.01,
  };

  const ONE_PIP_NUMERATOR = {
    XAG: 0.0001,
    XAU: 0.01,
    XPD: 0.1,
    XPT: 0.1,
    XBR: 0.1,
    XNG: 0.001,
    XTI: 0.1,
  };

function calculateSwap() {

    const accountCurrency = document.getElementById('account_currency_sc').value;
    const currencyPair = document.getElementById('currency_pair_sc').value;
    const splitCurrency = currencyPair.split('/');
    const validCurrencyPair = splitCurrency[0] + splitCurrency[1];
    document.getElementById('trade_size_sc').value = getTradeSize(splitCurrency[0], splitCurrency[1]);
    const tradeSize = document.getElementById('trade_size_sc').value;
    document.getElementById('swap_long_value_sc').innerHTML = SWAP_MAPPER[validCurrencyPair].long; 
    document.getElementById('swap_short_value_sc').innerHTML = SWAP_MAPPER[validCurrencyPair].short;
    document.getElementById('currency_conversion_label_sc').innerHTML = accountCurrency + '/' + splitCurrency[1];
    document.getElementById('account_currency_result_sc').innerHTML = accountCurrency;

    var onePip = ONE_PIP_DENOMINATOR[currencyPair.split('/')[1]] || ONE_PIP_NUMERATOR[currencyPair.split('/')[0]] || 0.0001;

    if (accountCurrency === splitCurrency[1]) {
        const exchangePrice = 1;
        document.getElementById('currency_conversion_value_sc').innerHTML = exchangePrice;
        const pipValue = onePip * (tradeSize / exchangePrice);
        document.getElementById('swaps_currency_long').innerHTML = ((parseFloat(SWAP_MAPPER[validCurrencyPair].long) * pipValue) / 10).toFixed(2);
        document.getElementById('swaps_currency_short').innerHTML =  ((parseFloat(SWAP_MAPPER[validCurrencyPair].short) * pipValue) / 10).toFixed(2);
    } else {
        document.getElementById('loader-container').style.display = 'flex';

        fetch('/currency-exchange')
        .then(res => res.json())
        .then(json => {
            let currencyExchangeValue;

            currencyExchangeValue = calculateCurrencyValue(json, { fromCurrency: accountCurrency, toCurrency: splitCurrency[1] });

            document.getElementById('loader-container').style.display = 'none';
            
            document.getElementById('currency_conversion_value_sc').innerHTML = currencyExchangeValue;
            const pipValue = onePip * (tradeSize / currencyExchangeValue);
            document.getElementById('swaps_currency_long').innerHTML = ((parseFloat(SWAP_MAPPER[validCurrencyPair].long) * pipValue) / 10).toFixed(2);
            document.getElementById('swaps_currency_short').innerHTML =  ((parseFloat(SWAP_MAPPER[validCurrencyPair].short) * pipValue) / 10).toFixed(2);
    });
    }
}

function onTradeSizeChangeForSwapCalculator(event) {
    const tradeSize = parseInt(event.target.value);
    const currencyExchange = parseFloat(document.getElementById('currency_conversion_value_sc').innerHTML);
    const currencyPair = document.getElementById('currency_pair_sc').value;
    const splitCurrency = currencyPair.split('/');
    const validCurrencyPair = splitCurrency[0] + splitCurrency[1];
    var onePip = ONE_PIP_DENOMINATOR[currencyPair.split('/')[1]] || ONE_PIP_NUMERATOR[currencyPair.split('/')[0]] || 0.0001;
    const pipValue = onePip * (tradeSize / currencyExchange);
    document.getElementById('swaps_currency_long').innerHTML = ((parseFloat(SWAP_MAPPER[validCurrencyPair].long) * pipValue) / 10).toFixed(2);
    document.getElementById('swaps_currency_short').innerHTML =  ((parseFloat(SWAP_MAPPER[validCurrencyPair].short) * pipValue) / 10).toFixed(2);
}

function initSwapCalculator() {

    document.getElementById('loader-container').style.display = 'flex';

    fetch('/swap-values')
        .then(res => res.json())
        .then(json => {

            document.getElementById('loader-container').style.display = 'none';

            SWAP_MAPPER = json;
            calculateSwap();
        })

}
