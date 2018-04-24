<?php
// Lista os usuários
    $lista = $modelo->get_recipes_list();
    ?>


    <table class="list-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Usuário</th>
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


                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
