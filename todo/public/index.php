<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do list</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>To do list</h1>
        <form action="./add.php" method="post">
            <input type="text" name="task" id="task" placeholder="Need to do" class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Submit</button>
        </form>

        <br><br>

        <?php
            $dsn = 'mysql:host=localhost;dbname=to_do';
            $pdo = new PDO($dsn,'root','12345678Ee!!');

            echo '<ul>';
            $query =$pdo->query('SELECT * FROM `tasks`');
            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo '<li><b>'.$row->task.'</b><a href="./del.php?id='.$row->id.'"><button>Delete</button></a></li>';
            }
            echo '</ul>';
        ?>

    </div>
</body>
</html>