<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IO
 *
 * @author RTT
 */
class IO {
    private $curl;
    public $result;
    function __construct() {
        $this->curl = curl_init();
    }
    function setOptions($options, $reset=0){
        if($reset==1) {
            curl_reset($this->curl);
        }
        foreach ($options as $option=>$value)
        {
            curl_setopt($this->curl, $option, $value);
        }
    }
    
    function getPage($url){
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $this->result = curl_exec($this->curl);
        return $this->result;
    }
}
?>
