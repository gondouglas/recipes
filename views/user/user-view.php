<?php if (!defined('ABSPATH')) exit; ?>

<div class="wrap main-page">

    <?php
// Lista os usuários
    $lista = $modelo->get_users_list();
    ?>

    <button><a href="<?php echo HOME_URI . '/user/create'; ?>">Novo usuário</a></button>
    <br/>
    <br/>
    <table  class="table-style-one">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Usuário</th>
                <th>Data de criação</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($lista as $fetch_data): ?>

                <tr>

                    <td> <?php echo $fetch_data['id'] ?> </td>
                    <td> <?php echo $fetch_data['firstname'] ?> </td>
                    <td> <?php echo $fetch_data['lastname'] ?> </td>
                    <td> <?php echo $fetch_data['email'] ?> </td>
                    <td> <?php echo $fetch_data['username'] ?> </td>
                    <td> <?php echo $fetch_data['createdAt'] ?> </td>


                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>

</div> <!-- .wrap -->
