<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.logout_listener.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Logout/LogoutSuccessHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Logout/DefaultLogoutSuccessHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Logout/LogoutHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Logout/SessionLogoutHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Firewall/LogoutListener.php';

$a = ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load(__DIR__.'/getSecurity_HttpUtilsService.php')) && false ?: '_'};

$this->services['security.logout_listener.main'] = $instance = new \Symfony\Component\Security\Http\Firewall\LogoutListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/portfolio/index'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout'));

$instance->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

return $instance;
