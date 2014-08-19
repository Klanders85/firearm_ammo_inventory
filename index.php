
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add some guns</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- If adding Bootstrap, un-comment below and remove normalize, add the bootstrap file to CSS dir -->
        <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
       <header>
        <h1 class="center">Gun &amp; Ammo Inventory</h1>
       </header>
        <div class="container">
            <div id="form1">
                <form action="firearm_add.php" method="post" class="center">
                    <p>Add a firearm: 
                        <select name="firearm_type">
                            <option value=""></option>
                            <option value="Pistol">Pistol</option>
                            <option value="Rifle">Rifle</option>
                            <option value="Shotgun">Shotgun</option>
                            <option value="Other">Other</option>
                        </select> 
                    </p>
                    <p class="inline-block">Enter the model:</p> <input type="text" name="firearm_model" /><br>
                    <p class="inline-block">Select caliber:</p>
                    <select name="firearm_caliber">
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
                    </select><br>
                    <input type="submit" value="submit" id="submit"/>
                </form>
                <h2 class="center">Your Weapons Cache</h2>
                <table border="1">
                    <tr>
                        <th align="center" colspan="3">Guns</th>
                    </tr>
                    <tr>
                        <td><strong>Model</strong></td>
                        <td><strong>Caliber</strong></td>
                        <td><strong>Type</strong></td>
                    </tr>
                    <tr>
                        
                    </tr>
                     <tr>
                       
                    </tr>
                </table>

                <table border="1">
                    <tr>
                        <th align="center" colspan="2">Ammo</th>
                    </tr>
                    <tr>
                        <td>Caliber</td>
                        <td>Type</td>
                    </tr>
                </table>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript"></script>
    </body>
</html>
