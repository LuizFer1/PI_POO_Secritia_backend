<?php
$config['csrf_protection'] = TRUE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200; // Expiração do token em segundos
$config['csrf_regenerate'] = TRUE; // Gera um novo token para cada submissão
$config['csrf_exclude_uris'] = array(); // URIs que não exigem verificação de CSRF
