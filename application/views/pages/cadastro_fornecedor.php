<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastro de Novo Fornecedor</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          </div>
        </div>
      </div>

			<div class="col-md-12">
			<?php if(isset($game)) : ?>
					
					<form action="<?= base_url() ?>games/update/<?= $game['id'] ?>" method="post">
				<?php else : ?>
					<form action="<?= base_url() ?>fornecedor/inserte" method="post">
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
							<label for="name">CPF Ou CNPJ</label>
							<input type="text" class="form-control" name="cpf_cnpj" id="cpf_cnpj" placeholder="CPF Ou CNPJ" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="category">Cep *</label>
							<input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" value=""
                                onblur="pesquisacep(this.value);" >
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="price">Endereço</label>
							<input type="text" class="form-control" name="rua" id="rua" placeholder="Endereço" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">Numero</label>
							<input type="text" class="form-control" name="numero" id="numero" placeholder="Numero" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">Bairro</label>
							<input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">Complemento</label>
							<input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento" value="">
						</div>
					</div>

                    <div class="col-md-6">
						<div class="form-group">
							<label for="developer">Cidade</label>
							<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" value="">
						</div>
					</div>

                    <div class="col-md-6">
						<div class="form-group">
							<label for="developer">UF</label>
							<input type="text" class="form-control" name="uf" id="uf" placeholder="UF" value="">
						</div>
					</div>

                    <div class="col-md-6">
						<div class="form-group">
							<label for="developer">Telefone</label>
							<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" value="">
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url() ?>fornecedor" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>

<script>
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
</script>