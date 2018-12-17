<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/indexViewCss.css">
    <link rel="stylesheet" href="view/css/glyphicons.css">
    <script type="text/javascript" src="view/js/jquery.js"></script>
    <script src="view/js/bootstrap.min.js"></script>

    <style>
        #pj1 {
            width: 160px;
            height: 160px;
        }

        #jugador {
            width: 178px;
            height: 280px;
            background-color: #9fcdff;
        }
    </style>

</head>
<body>


<div id="jugador" class="form-group">
    <img id="pj1" src="<?= $personajes[0]["spray"] ?>"><br>
    <input type="text" name="nombre" id="nombre" value="<?= $personajes[0]["nombre"] ?>" disabled><br>
    <input type="text" name="atk" id="atk" value="<?= $personajes[0]["atk"] ?>" disabled><br>
    <input type="text" name="def" id="def" value="<?= $personajes[0]["def"] ?>" disabled><br>
    <input type="text" name="vel" id="vel" value="<?= $personajes[0]["vel"] ?>" disabled>
</div>

<button id="atacar">atacar</button>

<script src="view/js/playjs.js"></script>

</body>
</html>