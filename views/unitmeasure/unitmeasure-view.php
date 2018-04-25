<?php if (!defined('ABSPATH')) exit; ?>

<div class="wrap main-page">

    <?php
// Lista os usuários
    $lista = $modelo->get_list();
    ?>

    <button><a href="<?php echo HOME_URI . '/unitmeasure/create'; ?>">Nova unidade</a></button>
    <br/>
    <br/>
    <table  class="table-style-one">
        <thead>
            <tr>
                <th>ID</th>
                <th>Unidade de medida</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($lista as $fetch_data): ?>

                <tr>

                    <td> <?php echo $fetch_data['id'] ?> </td>
                    <td> <?php echo $fetch_data['unit'] ?> </td>

                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>

</div> <!-- .wrap -->

