<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,e,u,d,a,s',
            'payments' => 'c,e,u,d,a,s',
            'profile' => 'a,e,u,s'
        ],
        'Lawyer' => [
            'users' => 's',
            'profile' => 'a,e,u,s'
        ],
        'user' => [
            'profile' => 'a,e,u,s',
        ],
        'user2' =>[
            'profile' => 'a,e,u,s',
        ],
        '42' =>[
            'profile' => 'a,e,u,s',
        ],


    ],

    'permissions_map' => [
        'c' => 'create',
        'e' => 'edit',
        'u' => 'update',
        'd' => 'delete',
        's' => 'show',
        'a'  => 'add'
    ]
];
