<?php
require_once 'lib/bancoDeDados.php';

session_start ();

$db = new BancoDeDados();

	if ($db -> conectar ()) {

		$db ->  executarSQL ( "select * from tbl_teste" );

		$arrResultados = $db -> lerResultados ();

	}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<main>
		<?php 
			foreach ($arrResultados as $value) {
				
		?>
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Number</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php echo $value; ?>
					</tr>
				</tbody>	
			</table>
		<?php 

			}
		?>
	</main>
</body>
</html>

<?php 
	$db -> fecharConexao ();
?>