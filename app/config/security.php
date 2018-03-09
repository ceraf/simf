<?php

    $container->loadFromExtension('security', array(
        'firewalls' => array(
            'secured_area' => array(
                'pattern' => '^/',
                'anonymous' => array(),
                'http_basic' => array(
                    'realm' => 'Secured Demo Area',
                ),
                'form_login' => array(
                    'login_path' => '/login',
                    'check_path' => '/login_check',
                ),
            ),
        ),
        'access_control' => array(
            array('path' => '^/hello', 'role' => 'ROLE_ADMIN'),
        ),
        'providers' => array(
        //    'in_memory' => array(
        //        'memory' => array(
        //            'users' => array(
        //                'ryan' => array('password' => 'ryanpass', 'roles' => 'ROLE_USER'),
        //                'admin' => array('password' => 'kitten', 'roles' => 'ROLE_ADMIN'),
         //           ),
         //       ),   
                    'main' => array(
                        'entity' => array('class' => 'Sacprd\CoreBundle\Entity\User', 'property' => 'username'),
                    ),         
        //    ),


        ),
        'encoders' => array(
            'Symfony\Component\Security\Core\User\User' => 'plaintext',
            'Sacprd\CoreBundle\Entity\User' => array(
                'algorithm' => 'md5',
                'iterations' => 1,
                'encode_as_base64' => false,
            ),
        ),
    ));