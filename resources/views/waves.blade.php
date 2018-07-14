<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Minha carteira digital</h1>
    <h2>Numero de conta<br/>
        <span id="accountNumber"></span>
    </h2>

    <h2>Balan&ccedil;o<br/>
        <span id="balance"></span>
    </h2>

    <h1>
        <a href="#">
            Enviar
        </a>

        <input type="number" id="" />
    </h1>

    <script src="waves-api.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        WavesAPI.TESTNET_CONFIG.nodeAddress = 'http://127.0.0.1:6861';
        WavesAPI.TESTNET_CONFIG.matcherAddress = 'http://127.0.0.1:6862/matcher';
        WavesAPI.TESTNET_CONFIG.networkByte = 85;
        const Waves = WavesAPI.create(WavesAPI.TESTNET_CONFIG);

        $(document).ready(function () {
            var wallet;
            if (localStorage.getItem('carteira')) {
                var d=localStorage.getItem('carteira');
                wallet=JSON.parse(d);
            } else {
                wallet=Waves.Seed.create();
                localStorage.setItem('carteira', JSON.stringify(wallet));
            }

            $("#accountNumber").text(wallet.address);
            Waves.API.Node.v1.addresses.balance(wallet.address)
            .then((data) => {
                console.log("BALANCO: ", data.balance);
                Waves.Asset.get('WAVES')
                .then(function (Asset){                
                    var b = new Waves.Money(data.balance, Asset);
                    console.info(b);
                    $("#balance").text(b.toFormat() + " WAVES");
                });
            });
        });
    </script>
</body>
</html>