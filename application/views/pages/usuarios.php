<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Usuarios</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url() ?>usuarios/new_usuario" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Usuarios</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
            <tr>
					<th>Nome</th>
					<th>Login</th>
					<th>Nivel</th>
					<th>Email</th>
					<th>Telefone</th>
                    <th>Data Registro</th>
                    <th>Permitido</th>
                    <th>Ações</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($usuarios_usuarios as $usuarios_usuarios) : ?>
          <tr>
            <td><?= $usuarios_usuarios['nome']?></td>
            <td><?= $usuarios_usuarios['login']?></td>
            <td><?= $usuarios_usuarios['nivel']?></td>
            <td><?= $usuarios_usuarios['email']?></td>
            <td><?= $usuarios_usuarios['telefone']?></td>
            <td><?= $usuarios_usuarios['data_registro']?></td>
            <td><?= $usuarios_usuarios['quantidade_permitida']?></td>
            <td>
					<a href="<?= base_url() ?>games/edit/<?= $usuarios_usuarios['id_login']?>" class="btn btn-primary btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
					<a href="javascript:goDelete(<?= $usuarios_usuarios['id_login']?>)" class="btn btn-primary btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
					<?php if($usuarios_usuarios['permitido'] == '0') : ?>
						<a href="javascript:ativa(<?= $usuarios_usuarios['id_login']?>)" class="btn btn-primary btn-sm"><i class="fas fa-check-square"></i></a>
						<?php else : ?>
						<a href="javascript:inativa(<?= $usuarios_usuarios['id_login']?>)" class="btn btn-primary btn-sm"><i class="fas fa-minus-circle"></i></a>
						<?php endif; ?>
					
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