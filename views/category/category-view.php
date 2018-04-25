<?php if ( ! defined('ABSPATH')) exit; ?>

<div class="wrap main-page">

<?php 
// Lista os usuários
$lista = $modelo->get_categories_list(); 
?>

    <button><a href="<?php echo HOME_URI . '/category/create'; ?>">Nova categoria</a></button>
    <br/>
    <br/>
<table  class="table-style-one">
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
