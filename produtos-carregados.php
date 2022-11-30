<?php 


//  for($i = 0 ; $i <100000000 ; $i++){
// //     //
// }

$acao = 'recuperarProdutos';
require "area_controle.php";
    $pagina = $_SESSION['pagina'];
    $total_paginas = $_SESSION['total_paginas'];
    $_GET['lado'];
    if(isset($_GET['lado']) && $_GET['lado'] =='right'){ //caso click do lado esquerdo cai aqui
        // echo 'lado right';
        $pagina += 1;
        if($pagina > $total_paginas){
            $pagina = 1;
        } 
        $_SESSION['pagina'] = $pagina;
    }else if(isset($_GET['lado']) && $_GET['lado'] =='left'){//caso click do lado direito cai aqui
        // echo 'lado left';
        $pagina -= 1;
        if($pagina < 1){
            $pagina = $total_paginas;
        }   
        $_SESSION['pagina'] = $pagina;
    }

    
?>



<?php foreach($produtos as $indece => $produto){?>
    <section class="container-produto sombra">
        <img src="arquivos/img_banco_dados/<?=$produto['imagem']?>"  alt="">
        <h4><?= $produto['nome']?></h4>
        <h3><?= number_format($produto['preco'], 2, ',', '.')?></h3>
        <i class="fa-solid fa-star icon-star"></i>
        <i class="fa-solid fa-cart-plus icon-buy" onclick="requisitarPagina('container', 'carrinho.php?id_produto=<?=$produto['id_produto']?>')" ></i>
    </section>
<?}?>
