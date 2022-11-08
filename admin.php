




<section class="carrinho-caixa sombra">
    <section class="borda-bottom">
    <h2>Cadastrar novo produto</h2>
    </section>
    <section class="row">
        <form action="area_controle.php?acao=salvar-produto" method="POST" class="row form-admin" enctype="multipart/form-data">
            <section class="form-campo1 coluna">

                <label for="">Escolha a imagem do produto:</label>
                <input type="file" name="arquivo" id="">

            </section>
            <section class="form-campo2 coluna">  
        
                    <label for="">Digite o nome do produto:</label>
                    <input type="text" placeholder="nome do produto" name="nome">

                    <label for="">Digite a descrição do produto:</label>
                    <textarea name="descricao" cols="45" rows="5" placeholder="Digite a descrição do produto"></textarea>

                    <label for="">Digite a categoria do produto:</label>
                    
                    <select name="categoria" id="" >
                        <optgroup>
                            <option value="vazio" disabled selected>Selecione a categoria</option>
                            <option value="Limpeza">Limpeza</option>
                            <option value="Higiente">Higiente</option>
                            <option value="Gelados">Gelados</option>
                            <option value="Alimentos">Alimentos</option>
                        </optgroup>
                    </select>

            </section>
            <section class="form-campo3">

                <label for="">Digite a quantidade em estoque do produto:</label>
                <input type="number" placeholder="Quantidade do estoque" name="estoque" min="1" > 

                <label for="">Digite a valor do produto:</label>
                <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Digite o valor do produto" name="preco"/>

                <input type="submit" value="Salvar" class="botao-salvar" >

            </section>
            
        </form>
        
    </section>

    
</section>
