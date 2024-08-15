<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Articles de Blog</h1>
    <a href="{{ route('posts.create') }}">Créer un nouvel article</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>