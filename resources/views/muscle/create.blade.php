<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>recipe</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        
    </head>
    <body class="antialiased">
        <form action="/recipes" method="POST">
            @csrf
            <div class="recipe_name">
                <h4>料理名</h4>
                <input type="text" name="post[recipe_name]" placeholder="サラダチキン">
            </div>
            
            <div class="ingredients">
                <h4>材料</h4>
                <textarea name="ingredient[ingredients]" placeholder="鶏胸肉"></textarea>
            </div>
           
            <div class="process">
                <h4>工程</h4>
                <textarea name="post[process]" placeholder="鶏胸肉に砂糖をまぶして15分放置。"></textarea>
            </div>
           
            <div class="comment">
                <h4>コメント</h4>
                <textarea name="post[comment]" placeholder="美味しいサラダチキンができました。"></textarea>
            </div>
          
            <div class="image">
                <h4>画像ファイル埋め込み</h4>
            </div>
            <input type="submit" value="投稿">
         </form>
         <div class="footer">
             <a href="/">戻る</a>
         </div>
    </body>
</html>
