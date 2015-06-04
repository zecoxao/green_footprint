<?php
	/** @var EmpresaController $this */
	/** @var Empresa $model */
	$this->breadcrumbs = array(
		'Resultados',
	);
	$db_connection = mysqli_connect("localhost" , "root" , "root", "pegada_energetica"  );

?>

<?php

	$role = Rights::getAssignedRoles(Yii::app() -> user -> Id);
	foreach ($role as $role)
                $role -> name;
	if($role -> name == 'Profissional') {
		echo "
		<style>
			#content {
				width:100%;
			}
		</style>
		";

		echo "
		<style>
			#left_div {
				float:left;width:100px;
			}
		</style>
		";

		echo "\t<div id='left_div'>\n";
		
		echo "\tEQUIPAMENTO:<br>\n";

		$equipamento = "SELECT * FROM equipamento";
		$result_equipamento = mysqli_query($db_connection, $equipamento);

		
		echo "\t<select>\n";
		echo"\t<option value='0'></option>\n";
		while ($row = mysqli_fetch_array($result_equipamento))
		{
			$id = $row['id'];
			$rep = $row ['nome'];
			echo"\t<option value='$id'>$rep</option>\n";
		}
		echo "\t</select>\n";
		
		echo "\t<br>VISITA:<br>\n";

		$visita = "SELECT * FROM visita";
		$result_visita = mysqli_query($db_connection, $visita);

		
		echo "\t<select>\n";
		echo"\t<option value='0'></option>\n";
		while ($row = mysqli_fetch_array($result_visita))
		{
			$id = $row['id'];
			$rep = $row ['data'];
			echo"\t<option value='$id'>$rep</option>\n";
		}
		echo "\t</select>\n";

		echo "\t</div>\n";
		
		echo "
		<style>
			#center_div {
				margin:0 auto;width:400px;
			}
		</style>
		";
		
		echo "\t<div id='center_div'>\n";
		
		$equipamento_display=$visita_display="";
		
		$equipamento_display = "1";
		
		echo "\tVISITA->EQUIPAMENTO:<br>\n";
		$visita_equipamento = "SELECT * FROM visita WHERE equipamento=$equipamento_display";
		$result_visita_equipamento = mysqli_query($db_connection, $visita_equipamento);
		
		while ($row = mysqli_fetch_array($result_visita_equipamento))
		{
			$rep = $row ['data'];
			echo"\t$rep<br>\n";
		}
		
		echo "\t</div>\n";
	
	}else if($role -> name == 'Cliente') {

		echo "
		<style>
			#content {
				width:100%;
			}
		</style>
		";

		echo "
		<style>
			#left_div {
				float:left;width:100px;
			}
		</style>
		";

		echo "\t<div id='left_div'>\n";

		$cae = "SELECT * FROM cae";
		$result_cae = mysqli_query($db_connection, $cae);

		echo "\tCAE:<br>\n";
		
		echo "\t<select>\n";
		echo"\t<option value='0'></option>\n";
		while ($row = mysqli_fetch_array($result_cae))
		{
			$id = $row['id'];
			$rep = $row ['descricao'];
			echo"\t<option value='$id'>$rep</option>\n";
		}
		echo "\t</select>\n";
		
		echo "\t<br>EMPRESA:<br>\n";

		$empresa = "SELECT * FROM empresa";
		$result_empresa = mysqli_query($db_connection, $empresa);

		
		echo "\t<select>\n";
		echo"\t<option value='0'></option>\n";
		while ($row = mysqli_fetch_array($result_empresa))
		{
			$id = $row['id'];
			$rep = $row ['nome'];
			echo"\t<option value='$id'>$rep</option>\n";
		}
		echo "\t</select>\n";
		
		echo "\t<br>EQUIPAMENTO:<br>\n";

		$equipamento = "SELECT * FROM equipamento";
		$result_equipamento = mysqli_query($db_connection, $equipamento);

		
		echo "\t<select>\n";
		echo"\t<option value='0'></option>\n";
		while ($row = mysqli_fetch_array($result_equipamento))
		{
			$id = $row['id'];
			$rep = $row ['nome'];
			echo"\t<option value='$id'>$rep</option>\n";
		}
		echo "\t</select>\n";
		
		echo "\t<br>POTENCIA:<br>\n";

		$potencia = "SELECT * FROM potencia";
		$result_potencia = mysqli_query($db_connection, $potencia);

		
		echo "\t<select>\n";
		echo"\t<option value='0'></option>\n";
		while ($row = mysqli_fetch_array($result_potencia))
		{
			$id = $row['id'];
			$rep = $row ['potencia'];
			echo"\t<option value='$id'>$rep</option>\n";
		}
		echo "\t</select>\n";
		
		echo "\t<br>SIMULACAO:<br>\n";

		$simulacao = "SELECT * FROM simulacao";
		$result_simulacao = mysqli_query($db_connection, $simulacao);

		
		echo "\t<select>\n";
		echo"\t<option value='0'></option>\n";
		while ($row = mysqli_fetch_array($result_simulacao))
		{
			$id = $row['id'];
			$rep = $row ['consumo_total'];
			echo"\t<option value='$id'>$rep</option>\n";
		}
		echo "\t</select>\n";

		echo "\t</div>\n";
		
		echo "
		<style>
			#center_div {
				margin:0 auto;width:400px;
			}
		</style>
		";
		
		echo "\t<div id='center_div'>\n";
		
		$cae_display=$empresa_display=$equipamento_display=$potencia_display=$simulacao_display="";
		$cae_display = "2";
		
		echo "\tEMPRESA->CAE:<br>\n";
		$empresa_cae = "SELECT * FROM empresa WHERE cae=$cae_display";
		$result_empresa_cae = mysqli_query($db_connection, $empresa_cae);
		
		while ($row = mysqli_fetch_array($result_empresa_cae))
		{
			$rep = $row ['nome'];
			echo"\t$rep<br>\n";
		}
		
		$empresa_display = "2";
		
		echo "\tSIMULACAO->EMPRESA:<br>\n";
		$simulacao_empresa = "SELECT * FROM simulacao WHERE empresa=$empresa_display";
		$result_simulacao_empresa = mysqli_query($db_connection, $simulacao_empresa);
		
		while ($row = mysqli_fetch_array($result_simulacao_empresa))
		{
			$rep = $row ['consumo_total'];
			echo"\t$rep<br>\n";
		}
		
		$equipamento_display = "1";
		
		echo "\tSIMULACAO->EQUIPAMENTO:<br>\n";
		$simulacao_equipamento = "SELECT * FROM simulacao WHERE equipamento=$equipamento_display";
		$result_simulacao_equipamento = mysqli_query($db_connection, $simulacao_equipamento);
		
		while ($row = mysqli_fetch_array($result_simulacao_equipamento))
		{
			$rep = $row ['consumo_total'];
			echo"\t$rep<br>\n";
		}
		
		$potencia_display = "1";
		
		echo "\tEQUIPAMENTO->POTENCIA:<br>\n";
		$equipamento_potencia = "SELECT * FROM equipamento WHERE potencia=$potencia_display";
		$result_equipamento_potencia = mysqli_query($db_connection, $equipamento_potencia);
		
		while ($row = mysqli_fetch_array($result_equipamento_potencia))
		{
			$rep = $row ['nome'];
			echo"\t$rep<br>\n";
		}
		
		echo "\tSIMULACAO->(EQUIPAMENTO,EMPRESA):<br>\n";
		$simulacao_double = "SELECT * FROM simulacao WHERE equipamento=$equipamento_display and empresa=$empresa_display";
		$result_simulacao_double = mysqli_query($db_connection, $simulacao_double);
		
		while ($row = mysqli_fetch_array($result_simulacao_double))
		{
			$rep = $row ['consumo_total'];
			echo"\t$rep<br>\n";
		}
		
		echo "\t</div>\n";
	}
?>