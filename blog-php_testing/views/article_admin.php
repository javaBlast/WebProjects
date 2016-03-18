<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой блог</title>
        <link rel="stylesheet" href="../style.css">
       <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>-Добавить новую статью-</h1>
            <div>
               <form method="post" action="./index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <label>
                        Название
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                    </label>
                    <label>
                        Дата
                        <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                    </label>
                    <label>
                        Содержимое
                        <textarea type="text" name="content" class="form-item"  required><?=$article['content']?></textarea>
                    </label>
                   <input type="submit" value="Сохранить" class="btn">
                </form>
            </div>    
        </div>
        <footer>
            <p>Мой блог <br>Copyright&copy; 2015</p> 
        </footer>
    </body>
</html>