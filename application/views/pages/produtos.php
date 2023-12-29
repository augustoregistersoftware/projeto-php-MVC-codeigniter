<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Produtos</h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url() ?>usuarios/new_usuario" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Produtos</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
            <tr>
					<th>Status</th>
					<th>ID</th>
					<th>Codigo Auxiliar</th>
					<th>Codigo De Barras</th>
					<th>Descrição</th>
					<th>Quantidade Em Estoque</th>
                    <th>Quantidade Minima</th>
                    <th>Localização</th>
                    <th>Fornecedor</th>
					<th>Custo</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($produtos as $produtos) : ?>
          <tr>
			<td>
		  	<?php if($produtos['quantidade_estoque'] <= $produtos['quantidade_min']) : ?>
				<a onclick="controleDialog2()" class="btn btn-primary btn-sm btn-warning"><i class="fa-solid fa-circle-exclamation"></i></a>
			<?php else : ?>
				<a id="btn_dialog" onclick="controleDialog()" class="btn btn-success"><i class="fa-regular fa-thumbs-up"></i></a>
			<?php endif; ?>
            <td><?= $produtos['id_almoxarifado']?></td>
            <td><?= $produtos['cod_aux']?></td>
            <td><?= $produtos['cod_barras']?></td>
            <td><?= $produtos['descricao']?></td>
            <td><?= $produtos['quantidade_estoque']?></td>
            <td><?= $produtos['quantidade_min']?></td>
            <td><?= $produtos['nome_localizacao']?></td>
			<td><?= $produtos['nome_fornecedor']?></td>
			<td><?= $produtos['custo']?></td>
            <td>
					<a href="<?= base_url() ?>games/edit/<?= $produtos['id_almoxarifado']?>" class="btn btn-primary btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
					<a href="javascript:goDelete(<?= $produtos['id_almoxarifado']?>)" class="btn btn-primary btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
					<a href="javascript:visualizarFornecedor(<?= $produtos['id_almoxarifado']?>)" class="btn btn-primary btn-sm"><i class="fa-solid fa-address-card"></i></a>
					
          </tr>
        <?php endforeach;?>
			</tbody>
		</table>
	</div>


</main>

<!-- Aqui começa a montagem da modal -->
<dialog id="d1">
<div class="popup center">
	<div class="icon2">
	<i class="fa-solid fa-check"></i>		
	</div>
			<h3>Produto Liberado!!</h3>
			<p>Produto Com Estoque Acima do Limite!</p>
			<div class="dismiss-btn">	
			<button id="dismiss-popup-btn" onclick="fecharDialog()">
				OK
			</button>
			</div>
	</div>
</dialog>

<dialog id="d2">
<div class="popup center">
	<div class="icon">
	<i class="fa-solid fa-x"></i>		
	</div>
			<h3>Produto Abaixo!!</h3>
			<p>Produto Com Estoque Limitado Cuidado!</p>
			<div class="dismiss-btn">	
			<button id="dismiss-popup-btn" onclick="fecharDialog2()">
				OK
			</button>
			</div>
	</div>
</dialog>
<!-- Aqui começa o CSS da modal -->
<style> 
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");
dialog{
    padding: 0;
	border: 0;
	border-radius: 7px;
	box-shadow: 0 0 10px black;
	flex-direction: column;
}

dialog::backdrop{
	background-color: rgba(0, 0, 0, 0.5);
}

.title{
	background-color: #eee;
	border-top-right-radius: inherit;
	border-top-left-radius: inherit;
	padding: 7px;
	display: flex;
	align-items: center;
	border-bottom: 1px solid #aaa;
	height: 40px;
}

.popup{
	width: 350px;
	height: 280px;
	padding: 30px 20px;
	background: #f5f5f5;
	border-radius: 10px;
	background-color: #fff;
	box-sizing: border-box;
	z-index: 2;
	text-align: center;
}

.popup .icon{
	margin:5px 0px;
	width: 50px;
	height: 50px;
	border: 2px solid #FF3333;
	text-align: center;
	display: inline-block;
	border-radius: 50%;
	line-height: 60px;
}

.popup .icon2{
	margin:5px 0px;
	width: 50px;
	height: 50px;
	border: 2px solid #34f234;
	text-align: center;
	display: inline-block;
	border-radius: 50%;
	line-height: 60px;
}

.popup .icon i.fa{
	font-size: 30px;
	color: #FF3333;

}
.popup .title{
	margin: 5px 0px;
	font-size: 30px;
	font-weight: 600;
}

.popup .dismiss-btn{
	margin-top: 15px;
}

.popup .dismiss-btn button{
	padding: 10px 20px;
	background: #111;
	color: #f5f5f5;
	border: 2px solid #111;
	font-size: 16px;
	font-weight: 600;
	outline: none;
	border-radius: 10px;

}


</style>

<script>
	function goDelete(id){
		var myUrl = 'games/delete/' + id
		if(confirm("Deseja realmente deletar?")){
			window.location.href =myUrl;
		}else{
			return false;
		}

	}

	function visualizarFornecedor(idFornecedor){
		var myUrl = 'produtos/fornecedor/' +idFornecedor 
		window.location.href=myUrl;
	}


	function controleDialog(){
		const button = document.getElementById("btn_dialog")
		const modal = document.querySelector("dialog")
		modal.showModal()
	}

	function fecharDialog(){
		const modal =document.querySelector("dialog")
		modal.close()
	}

	function controleDialog2(){
		const button = document.getElementById("btn_dialog")
		const modal = document.getElementById("d2")
		modal.showModal()
	}

	function fecharDialog2(){
		const modal = document.getElementById("d2")
		modal.close()
	}

	

</script>




	
