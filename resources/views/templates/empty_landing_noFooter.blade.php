<!doctype html>
<html lang="en">

<head>
    <title>Mobile MT5 Trader</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link href="/assets/templates/bootstrap.min.css" rel="stylesheet">

    <link href="/assets/templates/v3/assets/css/all.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/44325f843e.js"></script>
    <link href="/assets/templates/v3/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/templates/v3/assets/css/simplyScroll.css?v=1.4" rel="stylesheet">
    <link href="/assets/templates/v3/assets/css/style.css?v=3.1.4" rel="stylesheet">
    <link href="/assets/templates/v3/assets/css/style_v3.css?v=2.5" rel="stylesheet">
    <link href="/assets/templates/v3/assets/css/responsive.css?v=1.6" rel="stylesheet">
    <link href="/assets/templates/v3/assets/css/new.css?v=7" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</head>

<style>
    html {
        height: 100% !important;
    }

    body {
        min-height: 100% !important;
    }
</style>

<body>
    <div id="webterminal" style="width:100%;height:100vh;"></div>
    <script type="text/javascript" src="https://metatraderweb.app/trade/widget.js"></script>
    <script type="text/javascript">
        new MetaTraderWebTerminal("webterminal", {
            version: 5,
            servers: ["FPMarkets-Demo", "FPMarkets-Live"],
            server: "FPMarkets-Live",
            utmSource: "www.fpmarkets.com",
            demoAllServers: false,
            startMode: "login",
            language: "en",
            mobile: 1,
            colorScheme: "black_on_white"
        });
    </script>

</body>

</html>