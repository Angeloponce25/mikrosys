<?php
require_once APP_PATH . '/config/config.php';
require_once APP_PATH . '/../vendor/routeros_api.class.php';

class MikrotikService {

    private $API;

    public function __construct() {
        $this->API = new RouterosAPI();

        if (!$this->API->connect(
            MIKROTIK_HOST,
            MIKROTIK_USER,
            MIKROTIK_PASS,
            MIKROTIK_PORT
        )) {
            die("Error conectando al MikroTik");
        }
    }

    public function listarColas() {
        return $this->API->comm('/queue/simple/print');
    }

    public function cortarCliente($id) {
        return $this->API->comm('/queue/simple/disable', [".id" => $id]);
    }

    public function activarCliente($id) {
        return $this->API->comm('/queue/simple/enable', [".id" => $id]);
    }
}
