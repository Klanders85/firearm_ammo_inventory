<!doctype html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="/js/vendor/jquery-1.10.2.min.js"></script>
</head>
<body>
	<div class="container">
            <div id="form1">
                <form action="ammo_add.php" method="post" class="center">
                    <p class="inline-block">Select caliber:</p>
                    <select name="ammo_caliber">
                        <option value=""></option>
                        <option value=".22">.22</option>
                        <option value="9mm">9mm</option>
                        <option value=".38sp">.38sp</option>
                        <option value=".357mag">.357mag</option>
                        <option value=".40mm">.40mm</option>
                        <option value=".45ACP">.45ACP</option>
                        <option value=".10ga">.10ga</option>
                        <option value=".12ga">.12ga</option>
                        <option value=".16ga">.16ga</option>
                        <option value=".410ga">.410ga</option>
                        <option value=".454 Casull">.454 Casull</option>
                        <option value=".223">.223</option>
                        <option value="7.62x39mm">7.62x39mm</option>
                        <option value="5.56mm">5.56mm</option>
                        <option value="7.62x54r">7.62x54r</option>
                    </select><br>

                    <p class="inline-block">Select count:</p>
                    <select name="ammo_added">
                        <option value=""></option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="75">75</option>
                        <option value="100">100</option>
                        <option value="150">150</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="500">500</option>
                        <option value="1000">1000</option>
                    </select><br>

                    <input type="submit" value="submit" id="submit"/>
                </form>
            </div>
        </div>
</body>
</html>