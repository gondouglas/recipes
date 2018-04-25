<?php if (!defined('ABSPATH')) exit; ?>


<div class="wrap main-page">

    <?php
// Carrega todos os métodos do modelo
    $modelo->adicionar();
    ?>

    <form method="post" action="">
        <table class="table-style-one">
            <tr>
                <td>Título: </td>
                <td> <input type="text" name="title" value="<?php
                    echo htmlentities(chk_array($modelo->form_data, 'title'));
                    ?>" /></td>
            </tr>
            <tr>
                <td>Descrição: </td>
                <td> <input type="text" name="description" value="<?php
                    echo htmlentities(chk_array($modelo->form_data, 'description'));
                    ?>" /></td>
            </tr>
            <tr>
                <td>Vídeo URL: </td>
                <td> <input type="text" name="video" value="<?php
                    echo htmlentities(chk_array($modelo->form_data, 'video'));
                    ?>" /></td>
            </tr>
            <tr>
                <td>Rendimento: </td>
                <td> <input type="text" name="yield" value="<?php
                    echo htmlentities(chk_array($modelo->form_data, 'yield'));
                    ?>" /></td>
            </tr>
            <tr>
                <td>Usuário Id: </td>
                <td> <input type="number" name="user_id" value="<?php
                    echo htmlentities(chk_array($modelo->form_data, 'user_id'));
                    ?>" /></td>
            </tr>
            <tr>
                <td>Categoria Id: </td>
                <td> <input type="number" name="category_id" value="<?php
                    echo htmlentities(chk_array($modelo->form_data, 'category_id'));
                    ?>" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php echo $modelo->form_msg; ?>
                    <input type="submit" value="Salvar" />
                </td>
            </tr>
        </table>
    </form>
