<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Fornecedores</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url() ?>fornecedor/new_fornecedor" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Fornecedores</a>
		</div>
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
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($fornecedor as $fornecedor) : ?>
          <tr>
            <td><?= $fornecedor['id_fornecedor']?></td>
            <td><?= $fornecedor['nome']?></td>
            <td><?= $fornecedor['cpf_cnpj']?></td>
            <td><?= $fornecedor['cep']?></td>
            <td><?= $fornecedor['endereco']?></td>
            <td><?= $fornecedor['numero']?></td>
            <td><?= $fornecedor['bairro']?></td>
			<td><?= $fornecedor['complemento']?></td>
			<td><?= $fornecedor['cidade']?></td>
			<td><?= $fornecedor['ie']?></td>
			<td><?= $fornecedor['telefone']?></td>
            <td>
					<a href="<?= base_url() ?>games/edit/<?= $fornecedor['id_fornecedor']?>" class="btn btn-primary btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
					<a href="javascript:goDelete(<?= $fornecedor['id_fornecedor']?>)" class="btn btn-primary btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
					<a href="javascript:inativa(<?= $fornecedor['id_fornecedor']?>)" class="btn btn-primary btn-sm"><i class="fa-solid fa-file"></i></a>
					
          </tr>
        <?php endforeach;?>
			</tbody>
		</table>
	</div>
</main>

<script>
	function goDelete(id){
		var myUrl = 'games/delete/' + id
		if(confirm("Deseja realmente deletar?")){
			window.location.href =myUrl;
		}else{
			return false;
		}

	}

	function inativa(id_login){
		var myUrl = 'usuarios/inativa/' + id_login
		if(confirm("Deseja realmente inativar esse usuario?")){
			window.location.href = myUrl;
		}else{
			return false;
		}
	}

	function ativa(id_login){
		var myUrl = 'usuarios/ativa/' + id_login
		if(confirm("Deseja realmente ativar usuario?")){
			window.location.href = myUrl;
		}else{
			return false;
		}
	}
</script>