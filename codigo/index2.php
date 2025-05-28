<php>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="teste_index2.php">

            Nome: <br>
            <input type="text" name="nome" maxlength="" size=""><br><br>
            <br>
            Data: <br>
            <input type="date"><br><br>
            <br><br>
            Valor: <br>
            <input type="value">
            <br><br><br>

            <?php

            require_once "conexao.php";
            require_once "funcoes.php";

            $lista_produtos = listarProdutos($conexao);

            // echo "<pre>";
            // print_r($lista_produtos);
            // echo "</pre>";

            foreach ($lista_produtos as $produto) {
                $produto['nome'];

                echo "<input type='checkbox' name='produto[]' value='" . $produto['idproduto'] . "'>";
                echo  $produto['nome'];
                echo "<input typpe='text' name='?'><br>";
            }
            ?>
            <br><br>
            <input type="submit" value="Comprar">

        </form>
    </body>

    </html>

</php>