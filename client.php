<?php
// How to Create a SOAP Client/Server in PHP - Part 01
// https://www.youtube.com/watch?v=e_7jDqN2A-Y

class client {
    public function __construct() {
        $params = array('location' =>  'https://soap-automoviles.herokuapp.com/service-automoviles-auth.php',
        'uri' => 'https://soap-automoviles.herokuapp.com/',
        'trace' => 1);
    $this->instance = new SoapClient(null, $params);
    $auth_params = new stdClass();
    $auth_params->username = 'ies';
    $auth_params->password = 'daw';

    // https://www.php.net/manual/en/class.soapheader.php
    // https://www.php.net/manual/en/class.soapvar.php

    $header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);
    $header = new SoapHeader('https://soap-automoviles.herokuapp.com/service-automoviles-auth.php', 'authenticate', $header_params, false);
    $this->instance->__setSoapHeaders(array($header));
    }
    
   public function getMarca() {
        //return $this->instance->__soapCall('ObtenerMarcasUrl');
        return $this->instance->ObtenerMarcasUrl();
    
    }
    public function getModelos($marca) {
        //return $this->instance->__soapCall('ObtenerMarcasUrl');
        return $this->instance->ObtenerModelosPorMarca($marca);
    
    }

}


