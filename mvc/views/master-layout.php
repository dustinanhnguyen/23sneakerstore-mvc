<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://localhost/23sneakerstore-mvc/public/css/grid.css">
    <link rel="stylesheet" href="http://localhost/23sneakerstore-mvc/public/css/main.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <?php require_once "./mvc/views/pages/header.php" ?>
    </div>

    <div class="container">
        <?php
        if (isset($data['background-page'])) {
            require "./mvc/views/pages/" . $data['background-page'] . ".php";
        }
        ?>
        <div class="grid wide">
            <div class="row">
                <?php
                if (isset($data['page'])) {
                    require "./mvc/views/".$data['page'].".php";
                }
                ?>
            </div>
        </div>
    </div>

    <div class="footer">
        <?php require_once "./mvc/views/pages/footer.php" ?>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>