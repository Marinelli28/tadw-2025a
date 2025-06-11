<php>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="teste_index.php">

            Nome: <br>
            <select name="idcliente">

                <?php
                
                require_once "conexao.php";
                require_once "funcoes.php";
                
                $lista_cliente = (listarClientes($conexao));
                
                foreach ($lista_cliente as $cliente){
                    $idcliente = $cliente['idcliente'];
                    $nome = $cliente['nome'];
                    echo "<option value='$idcliente' >$nome</option>";      
                    
                }
                
                ?>  
            </select> <br><br>
            
            <br>
            Data: <br>
            <input type="date" name="data"><br><br>
            <br><br>
            Valor: <br>
            <input type="value" name="valor_total">    
            <br><br><br>

            <?php

            $lista_produtos = listarProdutos($conexao);
            $arry = 0;

            // echo "<pre>";
            // print_r($lista_produtos);
            // echo "</pre>";

            foreach ($lista_produtos as $produto) {
                $produto['nome'];

                echo "<input type='checkbox' name='produto[". $arry ."][0]' value='" . $produto['idproduto'] . "'>";
                echo  $produto['nome'];
                echo "<input typpe='number' name='produto]". $arry ."][1]'>";
                echo "<br><br>";
                $arry++;
            }
            ?>
            <br><br>
            <input type="submit" value="Comprar">

        </form>
    </body>

    </html>

</php>