<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>holi</title>
</head>
<body style="background-color: white ">

<table style="max-width: 600px; padding: 0px; margin:0 auto; border-collapse: collapse;">
    <tr>
        <td style="background-color: #ecf0f1; text-align: left; padding: 0">            
            <a href="https://imgbb.com/"><img src="https://i.ibb.co/98NnwV4/fondo-final.png" alt="fondo-final"></a>
        </td>
    </tr>	
    <tr>
        <td style="background-color: #ecf0f1">
            <div style="color: #34495e; margin: 4% 10% 2%; text-align: justify;font-family: sans-serif">
                <div style="width: 100%;margin:20px 0; display: inline-block;text-align: center">
                    <a href="https://imgbb.com/"><img src="https://i.ibb.co/RSGFxF1/logo.png" alt="logo"></a>
                    <p style="font-family: 'Segoe UI'; font-size: 130%;"><?= $mensaje ?></p>	
                    <p style="font-family: 'Segoe UI'; font-size: 130%;">Fecha límite: <?= $fecha?></p>					
                </div>
                <br>
                <br>
                <div style="width: 100%; text-align: center">
                    <a style="text-decoration: none; border-radius: 5px; padding: 11px 23px; color: white; background-color: #3498db; font-family: 'Segoe UI'; font-size: 130%;" href="<?= $url?>">Contesta la encuesta</a>	
                </div>
                <p style="color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0">UXTest 2020</p>
            </div>
        </td>
    </tr>
</table>

</body>
</html>