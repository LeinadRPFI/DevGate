<?php

    fucntion novaConexao($banco = 'devgate_database') {
        $servidor = '127.0.0.1';
        $usuario = 'root';
        $senha = '';

        try {
            $conexao = new PDO("mysql:host=$servidor;db=$banco", $usuario, $senha);
            return $conexao;
        } catch (PDOException $e){
            die ('Erro : ' . $e->getMessage());
        }
    }