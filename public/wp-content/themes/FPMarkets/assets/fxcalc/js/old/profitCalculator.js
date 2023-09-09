/*

(closePrice - openPrice) * PositionSize * openPrice ± (0 * 0.60) 


*/

let PROFIT_SWAP_MAPPER = {};

let currencyExchangeValue  = null;
let exchangeValue = null;


function getSwapValuesForUnits(swap, units, currencyPair) {
    if (currencyPair.indexOf('XAG') !== -1) {
        return swap * 0.01 * (units / 50);
    }

    if (currencyPair.indexOf('XBR') !== -1 || currencyPair.indexOf('XTI') !== -1) {
        return swap * 0.01 * (units / 10);
    }

    if (currencyPair.indexOf('XAU') !== -1) {
        return swap * 0.01 * units;
    }

    return swap * 0.01 * (units / 1000);
}   

function calculateProfit() {
    const tradeSide = document.getElementById('trade_side_pc').value;
    const currencyPair = document.getElementById('currency_pair_pc').value;
    document.getElementById('position_size_pc').value = getTradeSize(currencyPair.split('/')[0], currencyPair.split('/')[1]);
    const positionSize = parseInt(document.getElementById('position_size_pc').value);
    const period = parseInt(document.getElementById('period_in_days_pc').value);
    const accountCurrency = document.getElementById('account_currency_pc').value;
    const splitCurrency = currencyPair.split('/');
    document.getElementById('loader-container').style.display = 'flex';

    fetch('http://165.22.217.213:4444/currency-exchange')
        .then(res => res.json())
        .then(json => {

            document.getElementById('loader-container').style.display = 'none';
            let exchangePrice;
            
            currencyExchangeValue = calculateCurrencyValue(json, { fromCurrency: currencyPair.split('/')[0], toCurrency: currencyPair.split('/')[1] });

            if (currencyPair.split('/')[1] === accountCurrency) {
                exchangePrice = 1;
            } else {
                exchangePrice = calculateCurrencyValue(json, { fromCurrency: currencyPair.split('/')[1], toCurrency: accountCurrency });
            }
            
            const closePriceCurrencyValue = currencyExchangeValue;
            const openPiceCurrencyValue =  currencyExchangeValue;
            exchangeValue = exchangePrice;
            document.getElementById('open_price_pc').value = currencyExchangeValue;
            document.getElementById('close_price_pc').value = currencyExchangeValue;
            document.getElementById('swap_long_value_pc').innerHTML = PROFIT_SWAP_MAPPER[splitCurrency[0] + splitCurrency[1]].long;
            document.getElementById('swap_short_value_pc').innerHTML = PROFIT_SWAP_MAPPER[splitCurrency[0] + splitCurrency[1]].short;

            if (tradeSide.indexOf('SELL') !== -1) {
                document.getElementById('Profit').innerHTML = (((openPiceCurrencyValue - closePriceCurrencyValue) * positionSize * exchangePrice) + (period * getSwapValuesForUnits(parseFloat(PROFIT_SWAP_MAPPER[splitCurrency[0] + splitCurrency[1]].short), positionSize, currencyPair))).toFixed(2);
            } else {
                document.getElementById('Profit').innerHTML = (((closePriceCurrencyValue - openPiceCurrencyValue) * positionSize * exchangePrice) + (period * getSwapValuesForUnits(parseFloat(PROFIT_SWAP_MAPPER[splitCurrency[0] + splitCurrency[1]].long), positionSize, currencyPair))).toFixed(2);
            }
        })
        .catch(err => {
            console.log(err);
        });
}

function onInputsChange() {
    const tradeSide = document.getElementById('trade_side_pc').value;
    const positionSize = parseInt(document.getElementById('position_size_pc').value);
    const currencyPair = document.getElementById('currency_pair_pc').value;
    const period = parseInt(document.getElementById('period_in_days_pc').value);
    const openPrice = parseFloat(document.getElementById('open_price_pc').value);
    const closePrice = parseFloat(document.getElementById('close_price_pc').value);
    const swapLongValue = parseFloat(document.getElementById('swap_long_value_pc').innerHTML);
    const swapShortValue = parseFloat(document.getElementById('swap_short_value_pc').innerHTML);
    
    if (tradeSide.indexOf('SELL') !== -1) {
    const positionSize = parseInt(document.getElementById('position_size_pc').value);
        document.getElementById('Profit').innerHTML = (((openPrice - closePrice) * positionSize * exchangeValue) + (period * getSwapValuesForUnits(swapShortValue, positionSize, currencyPair))).toFixed(2);
    } else {
        document.getElementById('Profit').innerHTML = (((closePrice - openPrice) * positionSize * exchangeValue) + (period * getSwapValuesForUnits(swapLongValue, positionSize, currencyPair))).toFixed(2);
    }
}

function initProfitCalculator() {
    document.getElementById('loader-container').style.display = 'flex';
    fetch('http://165.22.217.213:4444/swap-values')
        .then(res => res.json())
        .then(json => {
            document.getElementById('loader-container').style.display = 'none';
            PROFIT_SWAP_MAPPER = json;
            calculateProfit();
    });
}