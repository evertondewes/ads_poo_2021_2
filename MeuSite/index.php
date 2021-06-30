<?php
session_start();
?>

<html>
<head>
    <script>
        function criarBotaoLoco(obj) {
            obj.innerHTML  += '<button onclick="criarBotaoLoco(this)">teste</button>';
        }
    </script>
</head>
<body style="background: blue">

<?php
for ($i = 0; $i < 10; $i++) {
    ?>
    <h1 onclick="criarBotaoLoco(this)"> Agora é a linha:
        <?php
            echo $i;
        ?>
    </h1>
    <?php
}
?>
</body>
</html>
