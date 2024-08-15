<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Créer un Article</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Titre:</label>
        <input type="text" name="title" id="title" required>

        <label for="content">Contenu:</label>
        <textarea name="content" id="content" required></textarea>

        <button type="submit">Créer</button>
    </form>
</body>
</html>