<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
		<div class="btn-group mr-2">
		<a href="<?= base_url() ?>dashboard/solicitacoes" class="btn btn-sm btn-outline-secondary"><i class="	fas fa-sort-alpha-up"></i> Solicitações</a>   <a href="<?= base_url() ?>dashboard" class="btn btn-sm btn-outline-secondary"><i class="	fas fa-sort-alpha-up"></i> Estoque</a>
		</div>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">5 Ultimos Usuarios Cadastrados</h2>
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
      <?php foreach($usuarios as $usuarios) : ?>
          <tr>
            <td><?= $usuarios['nome']?></td>
            <td><?= $usuarios['login']?></td>
            <td><?= $usuarios['nivel']?></td>
            <td><?= $usuarios['email']?></td>
            <td><?= $usuarios['telefone']?></td>
            <td><?= $usuarios['data_registro']?></td>
            <td><?= $usuarios['quantidade_permitida']?></td>
            <td>
					<a href="<?= base_url() ?>games/edit/<?= $usuarios['id_login']?>" class="btn btn-primary btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
					<a href="javascript:goDelete(<?= $usuarios['id_login']?>)" class="btn btn-primary btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
          </tr>
        <?php endforeach;?>
			</tbody>
		</table>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">5 Ultimos Produtos Cadastrados</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Codigo Auxiliar</th>
					<th>Codigo De Barras</th>
					<th>Descrição</th>
                    <th>Quantidade em Estoque</th>
                    <th>Quantidade Minima</th>
                    <th>Custo</th>
          <th>Ações</th>
				</tr>
			</thead>
			<tbody>
      <?php foreach($produtos as $produtos) : ?>
          <tr>
            <td><?= $produtos['cod_aux']?></td>
            <td><?= $produtos['cod_barras']?></td>
            <td><?= $produtos['descricao']?></td>
            <td><?= $produtos['quantidade_estoque']?></td>
            <td><?= $produtos['quantidade_min']?></td>
            <td><?= $produtos['custo']?></td>
            <td>
				<a href="<?= base_url() ?>users/edit/<?= $produtos['id_almoxarifado']?>" class="btn btn-primary btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
				<a href="<?= base_url() ?>users/delete/<?= $produtos['id_almoxarifado']?>" class="btn btn-primary btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
			</td>
          </tr>
        <?php endforeach;?>
			</tbody>
		</table>
	</div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">5 Ultimas Solicitações Cadastradas</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Descrição</th>
					<th>Data Requisição</th>
					<th>Data Resposta</th>
                    <th>Status</th>
                    <th>Total</th>
          <th>Ações</th>
				</tr>
			</thead>
			<tbody>
      <?php foreach($solicitacao as $solicitacao) : ?>
          <tr>
            <td><?= $solicitacao['descricao']?></td>
            <td><?= $solicitacao['data_requisicao']?></td>
            <td><?= $solicitacao['data_resposta']?></td>
            <td><?= $solicitacao['status']?></td>
            <td><?= $solicitacao['total']?></td>
            <td>
				<a href="<?= base_url() ?>users/edit/<?= $solicitacao['id_solicitacao']?>" class="btn btn-primary btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
				<a href="<?= base_url() ?>users/delete/<?= $solicitacao['id_solicitacao']?>" class="btn btn-primary btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
			</td>
          </tr>
        <?php endforeach;?>
			</tbody>
		</table>
	</div>
	<div class="table-responsive" >
    <table class="table table-bordered table-hover">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Professor(a)', 'Solicitado'],
          <?php foreach ($usuarios_grafico as $usuarios_grafico) : ?>
          ['<?php echo $usuarios_grafico['nome']?>',  <?php echo $usuarios_grafico['pedidos']?>],
		  <?php endforeach;?>
        ]);

        var options = {
          title: 'Solicitações',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    </table>
	</div>
	<body>
	<div id="curve_chart" style="width: 900px; height: 500px"></div>
	</body>
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
</script>

<script>
	function abrirGraficoEstoque(){
		document.getElementById("d1").setAttribute("open","");
	}
</script>