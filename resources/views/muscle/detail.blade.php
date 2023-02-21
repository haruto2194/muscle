<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Recipe</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <body class="antialiased">
        <div class='recipes'>
                <div class='recipe'>
                    <h2 class='name'>account_name</h2>
                    <h2 class='food_name'>{{ $recipe->name }}</h2>
                    <p class='comment'>{{ $recipe->comment }}</p>
                    @foreach($ingredients as $ingredient)
                        <h2 class='ingredients'>{{ $ingredient->name }}</h2>
                    @endforeach
                    <p class='process'>{{ $recipe->process }}</p></h2>
                    <img src="sample.jpg" alt="サンプル画像が表示されます。">
                </div>
         </div>
         <div class='footer'>
             <a href="/">戻る</a>
         </div>
        
</html>