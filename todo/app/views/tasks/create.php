<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une tâche</title>
    <!-- Lien vers Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Lien vers le fichier CSS personnalisé -->
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Ajouter une tâche</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Titre :</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</body>
</html>
