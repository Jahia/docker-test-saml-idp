<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:password' => array(
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'user1@jahia.com',
            'firstName' => 'Richard',
            'lastName' => 'Brown'
        ),
        'user2:password' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user2@jahia.com',
            'firstName' => 'Cathy',
            'lastName' => 'Smith'
        ),
    ),

);
