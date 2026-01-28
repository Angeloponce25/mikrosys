<?php
require_once '../app/services/MikrotikService.php';

class ClientesController {

    public function index() {
        $mk = new MikrotikService();
        $colas = $mk->listarColas();

        require '../app/views/clientes/lista.php';
    }

    public function cortar($id) {
        $mk = new MikrotikService();
        $mk->cortarCliente($id);

        header("Location: " . BASE_URL . "clientes");
    }
}
