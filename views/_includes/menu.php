<?php if (!defined('ABSPATH')) exit; ?>

<?php if ($this->login_required && !$this->logged_in) return; ?>





<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><img src="https://www.receitaspravoce.com.br/wp-content/themes/food-cook/images/Logomaior.png" width="120px" height="55px"></a>
        </button>
        <nav class="menu clearfix">
            <ul>
                <li><a href="<?php echo HOME_URI; ?>/recipe/">Home</a></li>
                <li><a href="<?php echo HOME_URI; ?>/recipe/create">Criar receitas</a></li>
                <li><a href="<?php echo HOME_URI; ?>/user/">Usuários</a></li>
                <li><a href="<?php echo HOME_URI; ?>/category/">Categorias</a></li>
                <li><a href="<?php echo HOME_URI; ?>/unitmeasure/">Unidades de medidas</a></li>
                <form class="form-inline mt-2 mt-md-0 push-right">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="button">Search</button>
                </form>
            </ul>
<!--            <form method="post" class="push-right" action="#">
                <input class="textbox" type="text" name="usuario" placeholder="Login..." required autofocus>
                <input class="textbox" type="password" name="senha" placeholder="Password..." required>
                <button type="button" class="btn btn-primary my-1 my-sm-0">Sign In</button><br />
            </form> -->
            </div>
        </nav>
</header>

