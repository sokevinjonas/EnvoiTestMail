<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rappel de Paiement de Scolarité</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .content {
            margin-bottom: 20px;
        }
        
        .button {
            display: inline-block;
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Rappel de Paiement de Scolarité</h2>
        </div>
        <div class="content">
            <p>Chers parents,</p>
            <p>Nous vous rappelons que le paiement de la scolarité pour le trimestre en cours est maintenant dû.</p>
            <p>Le montant dû est de {{ $montant }} {{ $devise }}.</p>
            <p>Veuillez effectuer le paiement dans les plus brefs délais pour éviter tout désagrément.</p>
            <p>Si vous avez déjà effectué le paiement, veuillez ignorer ce message et nous vous en remercions.</p>
        </div>
        <div class="button-container" style="text-align: center">
            <a class="button" href="{{ $lien_paiement }}" target="_blank" style="color: #fff; text-decoration:none">Payer Maintenant</a>
        </div>
        <div class="footer" style="margin-top: 30px;">
            <p>Cordialement,<br>L'équipe de Votre École</p>
        </div>
    </div>
</body>
</html>
