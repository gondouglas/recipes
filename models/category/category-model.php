<?php

class CategoryModel extends MainModel {

    /**
     * Construtor para essa classe
     *
     * Configura o DB, o controlador, os parâmetros e dados do usuário.
     *
     * @since 0.1
     * @access public
     * @param object $db Objeto da nossa conexão PDO
     * @param object $controller Objeto do controlador
     */
    public function __construct($db = false, $controller = null) {
        // Configura o DB (PDO)
        $this->db = $db;

        // Configura o controlador
        $this->controller = $controller;

        // Configura os parâmetros
        $this->parametros = $this->controller->parametros;

        // Configura os dados do usuário
        $this->userdata = $this->controller->userdata;
    }

    // Crie seus próprios métodos daqui em diante

    public function get_categories_list() {

        // Simplesmente seleciona os dados na base de dados 
        $query = $this->db->query('SELECT * FROM `categories`');

        // Verifica se a consulta está OK
        if (!$query) {
            return array();
        }
        // Preenche a tabela com os dados do usuário
        return $query->fetchAll();
    }

// get_user_list

    public function get_category_by_id($id) {

        // Simplesmente seleciona os dados na base de dados 
        $query = $this->db->query('SELECT * FROM `categories` WHERE `id` = ?', $id);

        // Verifica a consulta
        if (!$query) {
            $this->form_msg = '<p class="form_error">Categoria não existe.</p>';
            return;
        }

        // Verifica se a consulta está OK
        if (!$query) {
            return array();
        }
        // Preenche a tabela com os dados do usuário
        return $query->fetchAll();
    }

    public function adicionar() {
        // Configura os dados do formulário
        $this->form_data = array();

        // Verifica se algo foi postado
        if ('POST' == $_SERVER['REQUEST_METHOD'] && !empty($_POST)) {

            // Faz o loop dos dados do post
            foreach ($_POST as $key => $value) {

                // Configura os dados do post para a propriedade $form_data
                $this->form_data[$key] = $value;

                // Nós não permitiremos nenhum campos em branco
                if (empty($value)) {

                    // Configura a mensagem
                    $this->form_msg = '<p class="form_error">There are empty fields. Data has not been sent.</p>';

                    // Termina
                    return;
                }
            }
        } else {

            // Termina se nada foi enviado
            return;
        }

        // Verifica se a propriedade $form_data foi preenchida
        if (empty($this->form_data)) {
            return;
        }

        // Verifica se o usuário existe
        $db_check_category = $this->db->query(
                'SELECT * FROM `categories` WHERE `category` = ?', array(
            chk_array($this->form_data, 'category')
                )
        );

        // Verifica se a consulta foi realizada com sucesso
        if (!$db_check_category) {
            $this->form_msg = '<p class="form_error">Internal error.</p>';
            return;
        }

        // Obtém os dados da base de dados MySQL
        $fetch_category = $db_check_category->fetch();

        // Configura o ID do usuário
        $id = $fetch_category['id'];


        // Se o ID do usuário não estiver vazio, atualiza os dados
        if (!empty($id)) {

            $query = $this->db->update('categories', 'id', $id, array(
                'category' => chk_array($this->form_data, 'category'),
                'deleted' => false
            ));

            // Verifica se a consulta está OK e configura a mensagem
            if (!$query) {
                $this->form_msg = '<p class="form_error">Internal error. Data has not been sent.</p>';

                // Termina
                return;
            } else {
                $this->form_msg = '<p class="form_success">Category successfully updated.</p>';

                // Termina
                return;
            }
            // Se o ID do usuário estiver vazio, insere os dados
        } else {

            // Executa a consulta 
            $query = $this->db->insert('categories', array(
                'category' => chk_array($this->form_data, 'category'),
                'deleted' => false
            ));

            // Verifica se a consulta está OK e configura a mensagem
            if (!$query) {
                $this->form_msg = '<p class="form_error">Internal error. Data has not been sent.</p>';

                // Termina
                return;
            } else {
                $this->form_msg = '<p class="form_success">Category successfully registered.</p>';

                // Termina
                return;
            }
        }
    }

}
