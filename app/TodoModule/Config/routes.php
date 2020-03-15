<?php

return [
    'index_route' => [
        'pattern' => '/',
        'command' => 'Todo_Default:index',
    ],
    'delete_task' => [
        'pattern' => '/%id/delete',
        'command' => 'Todo_Default:delete',
    ],
];