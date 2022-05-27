<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            justify-content: center;



        }

        .D,
        .O,
        .C,
        .T,
        .L,
        .A,
        .W,
        .Y {
            height: 200px;
            width: 300px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <h1>Images</h1>
    <div class="container">
        <?php
        $inputt = strtoupper($_GET["input"]);
        $imgdoc = array("img_1.jpg", "img_2.jpg", "img_3.jpg", "img_4.jpg");
        $imglaw = array("imgl_1.jpg", "imgl_2.jpg", "imgl_3.jpg", "imgl_4.jpg");

        if ($inputt == "DOCTOR") {
            for ($i = 0; $i < sizeof($imgdoc); $i++) {
                echo "<img class=" . $inputt[$i] . " src='./img/" . $imgdoc[$i] . "' >";
            }
        } else if ($inputt == "LAWYER") {
            for ($l = 0; $l < sizeof($imglaw); $l++) {
                echo "<img class='" . $inputt[$l] . "' src='./img/" . $imglaw[$l] . "'>";
            }
        } else {
            echo "No data found";
        }

        ?>
    </div>
</body>

</html>