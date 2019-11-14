<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function main_menu() {
    return array(
        array("titulo" => "Login", "url" => base_url()),
        array("titulo" => "Registro", "url" => base_url("registro"))
    );
}