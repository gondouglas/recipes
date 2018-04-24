<?php if (!defined('ABSPATH')) exit; ?>

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
                <td>Nome: </td>
                <td> <input type="text" name="firstname" value="<?php
                    echo htmlentities(chk_array($modelo->form_data, 'firstname'));
                    ?>" /></td>
            </tr>
            <tr>
                <td>Sobrenome: </td>
                <td> <input type="text" name="lastname" value="<?php
                    echo htmlentities(chk_array($modelo->form_data, 'lastname'));
                    ?>" /></td>
            </tr>
            <tr>
                <td>E-mail: </td>
                <td> <input type="text" name="email" value="<?php
                    echo htmlentities(chk_array($modelo->form_data, 'email'));
                    ?>" /></td>
            </tr>
            <tr>
                <td>Login: </td>
                <td> <input type="text" name="username" value="<?php
                    echo htmlentities(chk_array($modelo->form_data, 'username'));
                    ?>" /></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td> <input type="text" name="password" value="<?php
                    echo htmlentities(chk_array($modelo->form_data, 'password'));
                    ?>" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php echo $modelo->form_msg; ?>
                    <input type="submit" value="Salvar" />
                    <a href="<?php echo HOME_URI . '/user'; ?>">Nova usuário</a>
                </td>
            </tr>
        </table>
    </form>

    <?php
// Lista os usuários
    $lista = $modelo->get_users_list();
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

</div> <!-- .wrap -->
