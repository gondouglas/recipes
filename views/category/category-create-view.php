<?php if (!defined('ABSPATH')) exit; ?>

<div class="wrap main-page">

    <?php
// Carrega todos os métodos do modelo
    $modelo->adicionar();
//$modelo->get_register_form( chk_array( $parametros, 1 ) );
//$modelo->del_user( $parametros );
    ?>

    <form method="post" action="">
        <table  class="table-style-one">
            <tr>
                <td>Categoria: </td>
                <td> <input type="text" name="category" value="<?php
                    echo htmlentities(chk_array($modelo->form_data, 'category'));
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

</div>