<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="card mt-5 mx-auto">
            <a href="{{route('sendEmails')}}" class="btn btn-warning btn-lg">Rappel Parent</a>
            <div class="card-body">
                <h4 class="text-center mb-4">Inscrivez-vous et recevez les notes de votre enfant</h4>
                <form method="POST" action="{{ route('inscriptions.store') }}">
                    @method('POST')
                    @csrf
                    <div class="mb-3 row">
                        <label for="nom" class="col-sm-4 col-form-label text-sm-end">Nom et Prénom :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nom" value="{{old('$nom')}}">
                            <div class="form-text text-warning">Veuillez entrer le nom complet de votre enfant.</div>
                            @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="classe" class="col-sm-4 col-form-label text-sm-end">Niveau de classe :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="classe">
                            <div class="form-text text-warning">Précisez le niveau de classe de votre enfant.</div>
                            @error('classe')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-4 col-form-label text-sm-end">Adresse Email :</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email">
                            <div class="form-text text-warning">Nous ne partagerons jamais votre adresse e-mail avec personne.</div>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</body>

</html>
