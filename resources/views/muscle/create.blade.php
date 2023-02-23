<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Recipe</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
   
    <body class="antialiased">
        <h1>レシピ投稿</h1>
        <form action="/recipes" method="POST">
            @csrf
            <div class="recipe_name">
                <h4>料理名</h4>
                <input type="text" name=recipe[name] placeholder="料理名">
            </div>
            <div class="ingredient">
                <h4>材料</h4>
                <textarea name="ingredient[name]" placeholder="材料"></textarea>
            </div>
            <div class="ingredient">
                <h4>量</h4>
                <textarea name="ingredient[amount]" placeholder="量"></textarea>
            </div>
            <div class="ingredient">
                <h4>購入頻度</h4>
                <textarea name="ingredient[is_every_time]" placeholder="毎回購入するかどうか"></textarea>
            </div>
            <div class="process">
                <h4>工程</h4>
                <textarea name="recipe[process]" placeholder="工程"></textarea>
            </div>
            <div class="comment">
                <h4>コメント</h4>
                <textarea name="recipe[comment]" placeholder="コメント"></textarea>
            </div>
            <input type="submit" value="store">
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>