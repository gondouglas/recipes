<?php if (!defined('ABSPATH')) exit; ?>
<?php
// Lista os usuários
$lista = $modelo->get_recipes_list();
?>

<div class="wrap main-page">
    <table  class="table-style-one">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Rendimento</th>
                <th>Avaliação</th>
                <th>Data de criação</th>
                <th>Vídeo</th>
                <th>Usuário</th>
                <th>Categoria</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($lista as $fetch_data): ?>

                <tr>

                    <td> <?php echo $fetch_data['title'] ?> </td>
                    <td> <?php echo $fetch_data['description'] ?> </td>
                    <td> <?php echo $fetch_data['yield'] ?> </td>
                    <td> <?php echo $fetch_data['rate'] ?> </td>
                    <td> <?php echo $fetch_data['createdAt'] ?> </td>
                    <td> <?php echo $fetch_data['video'] ?> </td>
                    <td> <?php echo $fetch_data['username'] ?> </td>
                    <td> <?php echo $fetch_data['category'] ?> </td>

                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
</div>
