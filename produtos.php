<?php

include_once 'conexao.php';
$result_produtos = "SELECT * FROM produtos";
$resultado_produtos = mysqli_query($conn, $result_produtos);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex DT Churrasqueiras</title>

    <script src="https://kit.fontawesome.com/11e64fd663.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap\bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link rel="stylesheet" href="bootstrap\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>


		<div class="container theme-showcase" role="main">
        <div class="page-header">
        <h1>Produtos</h1>
        </div>

    <div class="row">

        <?php

        $query_produtos = "SELECT id,nome,descricao,foto FROM produtos ORDER BY id DESC";
        $result_produtos = $conn->query($query_produtos);
        ?>

        <div>

            <?php
            while ($dado_produto = mysqli_fetch_assoc($result_produtos)) {
                extract($dado_produto);

                /*echo "<img src='image/produtos/$id/$foto' width='200' height='200'><br>";
                echo "ID: $id <br>";
                echo "NOME: $nome <br>";
                echo "DESCRIÇÃO: $descricao <br>";
                echo "<hr>";*/
            ?>
               		<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="<?php echo "image/produtos/$id/$foto" ?>" alt="...">
							<div class="caption text-center">
								<a><h3><?php echo $nome; ?></h3></a>
								<p><a href="#" class="btn btn-primary" role="button">Comprar</a> </p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
            <?php
            ?>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
   <!--sessão  footer-->
   <footer>
        <span>Criado por <a href="https://github.com/YaritzaSilva" target="_blank">YaritzaSilva</a> | 2022</span>
    </footer>
</html>