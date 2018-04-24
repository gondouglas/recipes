<?php if ( ! defined('ABSPATH')) exit; ?>

<div class="wrap">

<?php
// Carrega todos os métodos do modelo
$modelo->adicionar();
//$modelo->get_register_form( chk_array( $parametros, 1 ) );
//$modelo->del_user( $parametros );
?>
    
    <form method="post" action="">
	<table class="form-table">
		<tr>
			<td>Categoria: </td>
			<td> <input type="text" name="category" value="<?php 
				echo htmlentities( chk_array( $modelo->form_data, 'category') );
				?>" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo $modelo->form_msg;?>
				<input type="submit" value="Salvar" />
				<a href="<?php echo HOME_URI . '/category';?>">Nova categoria</a>
			</td>
		</tr>
	</table>
</form>

<?php 
// Lista os usuários
$lista = $modelo->get_categories_list(); 
?>


<table class="list-table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Categoria</th>
		</tr>
	</thead>
			
	<tbody>
			
		<?php foreach ($lista as $fetch_data): ?>

			<tr>
			
				<td> <?php echo $fetch_data['id'] ?> </td>
				<td> <?php echo $fetch_data['category'] ?> </td>

			</tr>
			
		<?php endforeach;?>
			
	</tbody>
</table>

</div> <!-- .wrap -->
