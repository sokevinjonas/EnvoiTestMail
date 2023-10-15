<!DOCTYPE html>
<html>
<head>
    <title>Votre Sujet d'E-mail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .header {
            background-color: #4caf50;
            color: white;
            text-align: center;
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }

        .content {
            padding: 20px;
        }

        .footer {
            background-color: #4caf50;
            color: white;
            text-align: center;
            padding: 10px;
            border-radius: 0 0 5px 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Bonjour chers parents,</h2>
        </div>
        <div class="content">
            <p>Nous sommes ravis de vous informer que vous pouvez désormais consulter les résultats et les notes de votre enfant <b> {{ $nom }}</b> en classe de <strong style="color: red">{{ $class }}</strong>.</p>
            <p>De plus, nous vous tiendrons au courant des actualités de l'école, telles que le meilleur élève du mois et les événements à venir.</p>
            <p>Pour accéder à ces informations, veuillez visiter notre plateforme en cliquant sur le lien ci-dessous :</p>
            <p><a href="{{ $lien }}" style="background-color: #4caf50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Accéder à la plateforme</a></p>
            <p>Nous vous remercions pour votre soutien continu et votre confiance en notre établissement.</p>
        </div>
        <div class="footer">
            <p>Cordialement,<br>L'équipe du Lycée PteamSchool</p>
        </div>
    </div>
</body>
</html>
