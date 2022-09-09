<?php

include_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="shortcut icon" href="image\alex_logo.png">

    <title>Produtos</title>
</head>

<body>
    <div class="container">

        <h1 class="display-4 mt-5 mb-5">Produtos</h1>
        <?php

        $query_produtos = "SELECT id,nome,descricao,foto FROM produtos ORDER BY id DESC";
        $result_produtos = $conn->query($query_produtos);
        ?>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
            while ($dado_produto = mysqli_fetch_assoc($result_produtos)) {
                extract($dado_produto);

                /*echo "<img src='image/produtos/$id/$foto' width='200' height='200'><br>";
                echo "ID: $id <br>";
                echo "NOME: $nome <br>";
                echo "DESCRIÇÃO: $descricao <br>";
                echo "<hr>";*/
            ?>
                <div class="col mb-4 text-center">
                    <div class="card">
                        <img src='<?php echo "image/produtos/$id/$foto" ?>' class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $nome; ?></h5>
                            <p class="card-text"><?php echo $descricao; ?></p>
                            <a href="https://wa.me/5513996592947?text=Ol%C3%A1%2C+Alex+DT+Churrasqueira%21" target="_blank"class="btn btn-primary">Peça o seu!</a>
                            <a href="detalhes_produtos.php?id=<?php echo $id;?>" class="btn btn-primary">Detalhes</a>

                        </div>
                    </div>
                <?php
            }
                ?>
                </div>
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>