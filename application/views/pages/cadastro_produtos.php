    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastro de Novo Usuario</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          </div>
        </div>
      </div>

			<div class="col-md-12">
			<?php if(isset($game)) : ?>
					
					<form action="<?= base_url() ?>games/update/<?= $game['id'] ?>" method="post">
				<?php else : ?>
					<form action="<?= base_url() ?>usuarios/inserte" method="post">
				<?php endif; ?>
				<form action="" method="post">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Login</label>
							<input type="text" class="form-control" name="login" id="login" placeholder="Login" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="category">Senha</label>
							<input type="text" class="form-control" name="senha" id="senha" placeholder="Senha" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="price">Email</label>
							<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">Telefone</label>
							<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">Permitido</label>
							<input type="text" class="form-control" name="permitido" id="permitido" placeholder="Permitido" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
						<label for="nivel">Nivel</label>
							<select name="nivel" id="nivel">
							<option value="administrador">Administrador</option>
							<option value="almoxarifado">Almoxarifado</option>
							<option value="professor">Professor</option>
							</select>
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url() ?>usuarios" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
