<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>List</title>
    </head>

    <body>
        <div class="container">
            <h1>Список дел</h1>
            <form action="/app_14/add.php" method="post">
                <input type="text" name="task" id="task" placeholder="Нужно сделать.." class="form-conrol">

                <button id="btn_form" type="submit" name="sendTask" class="btn btn-success">Отправить</button>

            </form>

            <?php
            require "config.php";
            
            echo '<ul>';
            $query = $pdo->query("SELECT * FROM `tasks` ORDER BY `id` DESC");
            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo '<li><b>'. $row->task . '</b><a href="/app_14/delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';                   
            }
            echo'</ul>';
            ?>

        </div>

    </body>

</html>