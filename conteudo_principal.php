<?php
    $acao = 'recuperarProdutos';
    
    require "area_controle.php";
  
?>

<!-- inicio do conteudo do menu carousel -->
<section class="slider sombra">
                    <section class="slides">
                            <!-- botões do slide -->
                        <input type="radio" name="radio-btn" id="radio1" onclick="resgataIndece(1)">
                        <input type="radio" name="radio-btn" id="radio2" onclick="resgataIndece(2)">
                        <input type="radio" name="radio-btn" id="radio3" onclick="resgataIndece(3)">
                        <input type="radio" name="radio-btn" id="radio4" onclick="resgataIndece(4)">
                        <div class="slide first">
                            <section>
                                <img src="img/dia_da_carne.jpg" width="500px" height="350px" alt="">
                            </section>
                            <section class="conteudo_menu">
                                <h1> Dia da carne</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quae ipsam saepe culpa officia corrupti accusamus! Quae, voluptates quas officia repudiandae quaerat eligendi at nemo nam magni, neque atque ut.
                                    Loree laboriosam placeat perferendis iusto libero quia veniam quos explicabo omnis dolores?</p>
                                <h1>Promoões</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quae ipsam saepe culpa officia corrupti accusamus! Quae, voluptates quas officia repudiandae quaerat eligendi at nemo nam magni, neque atque ut.
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste doloremque optio id quaerat dolorem impedit, delectus necessitatibus amet cumque laboriosam placeat perferendis iusto libero quia veniam quos explicabo omnis dolores?</p>
                            </section>
                        </div>
                        <div class="slide">
                            <section>
                                <img src="img/dia_verde.jpg" width="500px" height="350px" alt="">
                            </section>
                            <section class="conteudo_menu">
                                <h1> Dia da Verdura</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quae ipsam saepe culpa officia corrupti accusamus! Quae, voluptates quas officia repudiandae quaerat eligendi at nemo nam magni, neque atque ut.
                                    Loree laboriosam placeat perferendis iusto libero quia veniam quos explicabo omnis dolores?</p>
                                <h1>Promoões</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quae ipsam saepe culpa officia corrupti accusamus! Quae, voluptates quas officia repudiandae quaerat eligendi at nemo nam magni, neque atque ut.
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste doloremque optio id quaerat dolorem impedit, delectus necessitatibus amet cumque laboriosam placeat perferendis iusto libero quia veniam quos explicabo omnis dolores?</p>
                            </section>
                        </div>
                        <div class="slide">
                                <section>
                                    <img src="img/natal.jpg" width="500px" height="350px" alt="">
                                </section>
                                <section class="conteudo_menu">
                                    <h1> O Natal já chegou para o Super Nunes</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quae ipsam saepe culpa officia corrupti accusamus! Quae, voluptates quas officia repudiandae quaerat eligendi at nemo nam magni, neque atque ut.
                                        Loree laboriosam placeat perferendis iusto libero quia veniam quos explicabo omnis dolores?</p>
                                    <h1>Promoões Natalinas</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quae ipsam saepe culpa officia corrupti accusamus! Quae, voluptates quas officia repudiandae quaerat eligendi at nemo nam magni, neque atque ut.
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste doloremque optio id quaerat dolorem impedit, delectus necessitatibus amet cumque laboriosam placeat perferendis iusto libero quia veniam quos explicabo omnis dolores?</p> 
                        </div>
                        <div class="slide">
                            <section>
                                <img src="img/trocar-moedas.jpg" width="500px" height="350px" alt="">
                            </section>
                            <section class="conteudo_menu">
                                <h1> Venha trocar suas moedas</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quae ipsam saepe culpa officia corrupti accusamus! Quae, voluptates quas officia repudiandae quaerat eligendi at nemo nam magni, neque atque ut.
                                    Loree laboriosam placeat perferendis iusto libero quia veniam quos explicabo omnis dolores?</p>
                                <h1> Mega Promoção</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quae ipsam saepe culpa officia corrupti accusamus! Quae, voluptates quas officia repudiandae quaerat eligendi at nemo nam magni, neque atque ut.
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste doloremque optio id quaerat dolorem impedit, delectus necessitatibus amet cumque laboriosam placeat perferendis iusto libero quia veniam quos explicabo omnis dolores?</p>
                            </section>
                        </div>
                         <!-- NAVIGATION AUTO    -->
                            <div class="navigation-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                                <div class="auto-btn4"></div>
                            </div>
                    </section>
                            <!-- LABEL DOS INPUT -->
                        <div class="manual-navigation">
                            <label for="radio1" class="manual-btn"></label>
                            <label for="radio2" class="manual-btn"></label>
                            <label for="radio3" class="manual-btn"></label>
                            <label for="radio4" class="manual-btn"></label>
                        </div>
                </section>

                  <!-- inicio conteudo imagens -->
                  <section class="img row ">
                    <section class="area_img">
                        <img src="img/bem_vindo.jpg"  alt="">
                    </section>
                    <section class="conteudo_da_img sombra">
                        <h1>Olá, seja muito bem vindo ao nosso site</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ab dolor hic veritatis debitis, iusto modi minima animi placeat, inventore quisquam sequi excepturi suscipit aspernatur ullam enim quia labore blanditiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam reiciendis consectetur, dolore eos atque voluptate ipsam repellat ab sint. Nostrum alias voluptate iste soluta suscipit totam, qui unde velit beatae.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quidem expedita voluptates ipsa obcaecati, non corporis optio magnam et molestiae consectetur eaque facilis nam illo? Distinctio iure laborum dolor nostrum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate libero, tenetur et atque praesentium quos harum deserunt reprehenderit quia quas. Ipsa hic earum corporis asperiores pariatur voluptatibus animi repudiandae officia?</p>
                        <!-- <h3>Olá, Sejá muito bem vindo ao nosso site</h3> -->
                    </section>
                </section>

                <!-- fim do conteudo do menu carousel -->
                
                <h1 class="titulos-produtos">Confira</h1>
                <section class="row" >
                    <i class="fa-solid fa-caret-left left"  onclick="requisitarProdutos('produtos-confira', 'produtos-carregados.php?lado=left', 'gif_produtos.php')"></i>
                    <i class="fa-solid fa-caret-right right" onclick="requisitarProdutos('produtos-confira', 'produtos-carregados.php?lado=right', 'gif_produtos.php')"></i>
                    <section id='produtos-confira' class="row row-produtos">
                    <?php foreach($produtos as $indece => $produto){?>
                        <section class="container-produto sombra">
                            <img src="arquivos/img_banco_dados/<?=$produto['imagem']?>"  alt="">
                            <h4><?= $produto['nome']?></h4>
                            <h3><?= $produto['preco']?></h3>
                            <i class="fa-solid fa-star icon-star"></i>
                            
                            <a href="area_controle.php?acao=adicionarCarrinho&id_produto= <?=$produto['id_produto']?>"><i class="fa-solid fa-cart-plus icon-buy"></i></a>
                        </section>
                    <?}?>
                    </section>
                </section>

                <!-- SEÇÃO NOVIDADES -->
                <h1 class="titulos-produtos">Novidades</h1>

                <section class="row" >
                    <i class="fa-solid fa-caret-left left"  onclick="requisitarProdutos('produtos-novidades', 'produtos-carregados.php?lado=left', 'gif_produtos.php')"></i>
                    <i class="fa-solid fa-caret-right right" onclick="requisitarProdutos('produtos-novidades', 'produtos-carregados.php?lado=right', 'gif_produtos.php')"></i>
                    <section id='produtos-novidades' class="row row-produtos">
                    <?php foreach($produtos as $indece => $produto){?>
                        <section class="container-produto sombra">
                            <img src="arquivos/img_banco_dados/<?=$produto['imagem']?>"  alt="">
                            <h4><?= $produto['nome']?></h4>
                            <h3><?= $produto['preco']?></h3>
                            <i class="fa-solid fa-star icon-star"></i>
                            <a href="area_controle.php?acao=adicionarCarrinho&id_produto= <?=$produto['id_produto']?>"><i class="fa-solid fa-cart-plus icon-buy"></i></a>
                        </section>
                    <?}?>
                    </section>
                </section>
                
                <h1 class="titulos-produtos">Tudo de limpeza</h1>
                
                <section class="row" >
                    <i class="fa-solid fa-caret-left left"  onclick="requisitarProdutos('produtos-limpeza', 'produtos-carregados.php?lado=left', 'gif_produtos.php')"></i>
                    <i class="fa-solid fa-caret-right right" onclick="requisitarProdutos('produtos-limpeza', 'produtos-carregados.php?lado=right', 'gif_produtos.php')"></i>
                    <section id='produtos-limpeza' class="row row-produtos">
                    <?php foreach($produtos as $indece => $produto){?>
                        <section class="container-produto sombra">
                            <img src="arquivos/img_banco_dados/<?=$produto['imagem']?>"  alt="">
                            <h4><?= $produto['nome']?></h4>
                            <h3><?= $produto['preco']?></h3>
                            <i class="fa-solid fa-star icon-star"></i>
                            <a href="area_controle.php?acao=adicionarCarrinho&id_produto= <?=$produto['id_produto']?>"><i class="fa-solid fa-cart-plus icon-buy"></i></a>
                        </section>
                    <?}?>
                    </section>
                </section>

                
                <!-- inicio conteudo imagens -->
                <section class="img row ">

                    <section class="area_img">
                        <img src="img/pagar_contas.jpg"  alt="">
                    </section>
                    <section class="conteudo_da_img sombra">
                        <h1>Venha pagar suas contas em nosso estabelecimento</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ab dolor hic veritatis debitis, iusto modi minima animi placeat, inventore quisquam sequi excepturi suscipit aspernatur ullam enim quia labore blanditiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam reiciendis consectetur, dolore eos atque voluptate ipsam repellat ab sint. Nostrum alias voluptate iste soluta suscipit totam, qui unde velit beatae.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quidem expedita voluptates ipsa obcaecati, non corporis optio magnam et molestiae consectetur eaque facilis nam illo? Distinctio iure laborum dolor nostrum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate libero, tenetur et atque praesentium quos harum deserunt reprehenderit quia quas. Ipsa hic earum corporis asperiores pariatur voluptatibus animi repudiandae officia?</p>
                        <!-- <h3>Olá, Sejá muito bem vindo ao nosso site</h3> -->
                    </section>
                </section>
               
               
            </section>