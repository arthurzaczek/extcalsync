<?php

$this->create('extcalsync_index', '/')->action(
    function($params){
        require __DIR__ . '/../index.php';
    }
);