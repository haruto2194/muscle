<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Recipe</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <body class="antialiased">
        <h1>home</h1>
        <div class='recipes'>
            @foreach($recipes as $recipe)
                <div class='recipe'>
                    <h2 class='name'>account_name</h2>
                    <h2 class='food_name'>{{ $recipe->name}}</h2>
                    <h3 class='comment'>{{ $recipe->comment}}</h3>
                    <a href="/recipes/{{ $recipe->id }}"><h3 class='detail'>詳細</h3></a>
                    <img src="sample.jpg" alt="サンプル画像が表示されます。">
                </div>
            @endforeach
        </div>
        <div class='paginate'>{{ $recipes->links() }}</div>
</html>