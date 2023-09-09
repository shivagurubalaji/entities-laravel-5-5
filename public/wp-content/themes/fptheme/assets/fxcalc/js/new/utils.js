function calculateCurrencyValue(json, currencyPair) {
    const {
        fromCurrency,
        toCurrency
    } = currencyPair;

    if (json[`${fromCurrency}${toCurrency}.r`] !== undefined) {
        return parseFloat(json[`${fromCurrency}${toCurrency}.r`]);
    } else if (json[`${toCurrency}${fromCurrency}.r`] !== undefined) {
        return 1 / parseFloat(json[`${toCurrency}${fromCurrency}.r`]);
    } else {
        const fromToBaseUSD = calculateCurrencyValue(json, { fromCurrency, toCurrency: 'USD' });
        const toBaseUSD = calculateCurrencyValue(json, { fromCurrency: toCurrency, toCurrency: 'USD' });
        return parseFloat(fromToBaseUSD / toBaseUSD);
    }
}

function getTradeSize(currencyA, currencyB) {
    const exceptionalTradeLots = {
        XAU: 100,
        XAG: 5000,
        XTI: 1000,
        XBR: 1000,
    };

    if (exceptionalTradeLots[currencyA] !== undefined) {
        return exceptionalTradeLots[currencyA];
    } else if (exceptionalTradeLots[currencyB] !== undefined) {
        return exceptionalTradeLots[currencyB];
    }
    return 100000;
}


const currencyPairValue = null;

function currencyPairChange() {
    var accountCurrency = document.getElementById('account-currency').value;
    var currencyPair = document.getElementById('currency-pair').value;
    document.getElementById('currency-pair-label').innerHTML = accountCurrency + "/" + currencyPair.split('/')[1];
    document.getElementById('currencyvalue').innerHTML = accountCurrency;
    calculatePipValue();
  }


  function calculatePipValue() {

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

    var accountCurrency = document.getElementById('account-currency').value;
    var currencyPair = document.getElementById('currency-pair').value;
    var currencyExchangePair = accountCurrency + currencyPair.split('/')[1];
    document.getElementById('trade-lots-pip').value = getTradeSize(currencyPair.split('/')[0], currencyPair.split('/')[1]);
    var onePip = ONE_PIP_DENOMINATOR[currencyPair.split('/')[1]] || ONE_PIP_NUMERATOR[currencyPair.split('/')[0]] || 0.0001;

    if (accountCurrency === currencyPair.split('/')[1]) {
      document.getElementById('currency-pair-value').innerHTML = 1;
      var tradeLots = parseInt(document.getElementById('trade-lots-pip').value);
      var pipValue = onePip * (tradeLots / 1);
      document.getElementById('pip-value').innerHTML = pipValue.toFixed(2);
    } else {

      document.getElementById('loader-container').style.display = 'flex';

      fetch('/currency-exchange')
        .then(res => res.json())
        .then(json => {

          document.getElementById('loader-container').style.display = 'none';
          let currencyExchange;
          currencyExchange = calculateCurrencyValue(json, { fromCurrency: accountCurrency, toCurrency: currencyPair.split('/')[1] });
          document.getElementById('currency-pair-value').innerHTML = currencyExchange;
          var tradeLots = parseInt(document.getElementById('trade-lots-pip').value);
          var pipValue = onePip * (tradeLots / currencyExchange);
          document.getElementById('pip-value').innerHTML = pipValue.toFixed(2);
        });
    }

  }

  function calculatePipsForTradeLots(event) {

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

    var currencyPair = document.getElementById('currency-pair').value;
    var tradeLots = parseInt(event.target.value);
    var onePip = ONE_PIP_DENOMINATOR[currencyPair.split('/')[1]] || ONE_PIP_NUMERATOR[currencyPair.split('/')[0]] || 0.0001;
    var pipValue = onePip * (tradeLots / parseFloat(document.getElementById('currency-pair-value').innerHTML));
    document.getElementById('pip-value').innerHTML = pipValue.toFixed(2);
  }

  function initPipCalculator() {
    currencyPairChange();
  }


  // currency convertor

  function convertCurrencyForAmount(event) {
    const amount = event.target.value;
    const price = document.getElementById('currency-exchange-price').innerHTML;
    document.getElementById('currency-conversion-value').innerHTML = (amount * parseFloat(price)).toFixed(2);
  }

  function convertCurrency() {
    var fromCurrency = document.getElementById('currency-from').value;
    var toCurrency = document.getElementById('currency-to').value;
    document.getElementById('currency-convertor-amount').value = getTradeSize(fromCurrency, toCurrency);
    var amount = document.getElementById('currency-convertor-amount').value;
    document.getElementById('currency-conversion-label').innerHTML = fromCurrency + "/" + toCurrency;
    document.getElementById('conversion-currency').innerHTML = toCurrency;

    if (fromCurrency === toCurrency) {
      const priceValue = 1;
      document.getElementById('currency-exchange-price').innerHTML = priceValue;
      document.getElementById('currency-conversion-value').innerHTML = (amount * priceValue).toFixed(2);
    } else {
      document.getElementById('loader-container').style.display = 'flex';

      fetch('/currency-exchange')
        .then(res => res.json())
        .then(json => {

          // console.log(calculateCurrencyValue(json, { toCurrency, fromCurrency }));

          document.getElementById('loader-container').style.display = 'none';
          const currencyExchange = calculateCurrencyValue(json, { toCurrency, fromCurrency });
          document.getElementById('currency-exchange-price').innerHTML = currencyExchange;
          document.getElementById('currency-conversion-value').innerHTML = (amount * currencyExchange).toFixed(2);
        });
    }

  }

  function initCurrencyConvertor() {
    convertCurrency()
  }

  // MARGIN CALCULATOR

  function calculateMargin() {
    var accountCurrency = document.getElementById('account_currency_mc').value;
    var leverage = document.getElementById('leverage_mc').value;
    var currencyPair = document.getElementById('currency_pair_mc').value;
    document.getElementById('trade_size_mc').value = getTradeSize(currencyPair.split('/')[0], currencyPair.split('/')[1]);
    var tradeSize = document.getElementById('trade_size_mc').value;
    document.getElementById('currency_conversion_label_mc').innerHTML = currencyPair.split('/')[0] + "/" + accountCurrency;
    document.getElementById('margin_currency').innerHTML = accountCurrency;
    if (currencyPair.split('/')[0] === accountCurrency) {
      currencyPairExchangeValue = 1;
      document.getElementById('currency_conversion_mc').innerHTML = currencyPairExchangeValue;
      document.getElementById('margin_value').innerHTML = (tradeSize * currencyPairExchangeValue / parseInt(leverage)).toFixed(2);
    } else {
      document.getElementById('loader-container').style.display = 'flex';

      fetch('/currency-exchange')
        .then(res => res.json())
        .then(json => {
          document.getElementById('loader-container').style.display = 'none';
          const currencyExchange = calculateCurrencyValue(json, { fromCurrency: currencyPair.split('/')[0], toCurrency: accountCurrency });
          document.getElementById('currency_conversion_mc').innerHTML = currencyExchange;
          document.getElementById('margin_value').innerHTML = (tradeSize * currencyExchange / parseInt(leverage)).toFixed(2);
        });
    }

  }

  function tradeSizMarginCalculator(event) {
    const tradeSize = event.target.value;
    var leverage = document.getElementById('leverage_mc').value;
    var currencyExchange = document.getElementById('currency_conversion_mc').innerHTML;
    document.getElementById('margin_value').innerHTML = (tradeSize * parseFloat(currencyExchange) / parseInt(leverage)).toFixed(2);

  }
  function initMarginCalculator() {
    calculateMargin();
  }
