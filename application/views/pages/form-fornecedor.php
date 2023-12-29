<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Fornecedor Por Produto</h1>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<?php foreach($fornecedor_produto_descricao as $fornecedor_produto_descricao) : ?>
			<h2 class="h2">Produto Selecionado: <?= $fornecedor_produto_descricao['descricao'] ?></h2>
		<?php endforeach;?>	
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
            <tr>
					<th>ID</th>
					<th>Nome</th>
					<th>CPF/CNPJ</th>
					<th>CEP</th>
					<th>Endereço</th>
                    <th>Numero</th>
                    <th>Bairro</th>
                    <th>Complemento</th>
					<th>Cidade</th>
					<th>UF</th>
					<th>Telefone</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($fornecedor_produto as $fornecedor_produto) : ?>
          <tr>
            <td><?= $fornecedor_produto['id_fornecedor']?></td>
            <td><?= $fornecedor_produto['nome']?></td>
            <td><?= $fornecedor_produto['cpf_cnpj']?></td>
            <td><?= $fornecedor_produto['cep']?></td>
            <td><?= $fornecedor_produto['endereco']?></td>
            <td><?= $fornecedor_produto['numero']?></td>
            <td><?= $fornecedor_produto['bairro']?></td>
			<td><?= $fornecedor_produto['complemento']?></td>
			<td><?= $fornecedor_produto['cidade']?></td>
			<td><?= $fornecedor_produto['ie']?></td>
			<td><?= $fornecedor_produto['telefone']?></td>
        <?php endforeach;?>
			</tbody>
		</table>

		

	</div>


</main>





	
