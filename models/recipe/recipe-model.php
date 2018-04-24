<?php

class RecipeModel extends MainModel{
    
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
    
    public function get_recipes_list() {

        // Simplesmente seleciona os dados na base de dados 
        $query = $this->db->query('SELECT * FROM `recipes`');

        // Verifica se a consulta está OK
        if (!$query) {
            return array();
        }
        // Preenche a tabela com os dados do usuário
        return $query->fetchAll();
    }
    
    public function get_recipe_by_id($id) {

        // Simplesmente seleciona os dados na base de dados 
        $query = $this->db->query('SELECT * FROM `recipes` WHERE `id` = ?', $id);

        // Verifica a consulta
        if (!$query) {
            $this->form_msg = '<p class="form_error">Receita não existe.</p>';
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
        $db_check = $this->db->query(
                'SELECT * FROM `recipes` WHERE `id` = ?', array(
            chk_array($this->form_data, 'id')
                )
        );

        // Verifica se a consulta foi realizada com sucesso
        if (!$db_check) {
            $this->form_msg = '<p class="form_error">Internal error.</p>';
            return;
        }

        // Obtém os dados da base de dados MySQL
        $fetch = $db_check->fetch();

        // Configura o ID do usuário
        $id = $fetch['id'];


        // Se o ID do usuário não estiver vazio, atualiza os dados
        if (!empty($id)) {
            $dt = new DateTime();
            $query = $this->db->update('users', 'id', $id, array(
                'firstname' => chk_array($this->form_data, 'firstname'),
                'lastname' => chk_array($this->form_data, 'lastname'),
                'email' => chk_array($this->form_data, 'email'),
                'username' => chk_array($this->form_data, 'username'),
                'password' => chk_array($this->form_data, 'password'),
                'role_id' => 0,
                'createdAt' => $dt->format('Y-m-d H:i:s'),
                'deleted' => false
            ));

            // Verifica se a consulta está OK e configura a mensagem
            if (!$query) {
                $this->form_msg = '<p class="form_error">Internal error. Data has not been sent.</p>';

                // Termina
                return;
            } else {
                $this->form_msg = '<p class="form_success">User successfully updated.</p>';

                // Termina
                return;
            }
            // Se o ID do usuário estiver vazio, insere os dados
        } else {
            $dt = new DateTime();

            // Executa a consulta 
            $query = $this->db->insert('users', array(
                'firstname' => chk_array($this->form_data, 'firstname'),
                'lastname' => chk_array($this->form_data, 'lastname'),
                'email' => chk_array($this->form_data, 'email'),
                'username' => chk_array($this->form_data, 'username'),
                'password' => chk_array($this->form_data, 'password'),
                'role_id' => 0,
                'createdAt' => $dt->format('Y-m-d H:i:s'),
                'deleted' => false
            ));

            // Verifica se a consulta está OK e configura a mensagem
            if (!$query) {
                $this->form_msg = '<p class="form_error">Internal error. Data has not been sent.</p>';

                // Termina
                return;
            } else {
                $this->form_msg = '<p class="form_success">User successfully registered.</p>';

                // Termina
                return;
            }
        }
    }
}

