<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    // ...
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => '66.175.212.71',
                    'dbname'   => 'researchapps',
                    'port'     => '3306',
                    'user'     => 'root',
                    'password' => 'Qwe456123',
                )
            )
        )
    ),
    'session'         => array(
        'config'     => array(
            'class'   => 'Zend\Session\Config\SessionConfig',
            'options' => array(
                'name'                => 'UserSession',
                'save_path'           => __DIR__ . '/../../data/session',
                'use_cookies'         => true,
                'cookie_lifetime'     => 0,
                'cookie_httponly'     => true,
                'cookie_secure'       => false,
                'remember_me_seconds' => 7200,
                'gc_maxlifetime' => 7200
            )
        ),
        'storage'    => 'Zend\Session\Storage\SessionArrayStorage',
        'validators' => array(
            array(
                'Zend\Session\Validator\RemoteAddr',
                'Zend\Session\Validator\HttpUserAgent'
            )
        )
    ),
    'php_settings' => array(
        'date.timezone' => 'America/New_York'
    )     
);
