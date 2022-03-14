<?php

return [
    '/post/<id>:(\d+)' => 'post/view', //post/123
    '/posts' => 'post/index',
    '/test' => 'test/index',
    '/' => 'default/index',
    '/profile' => 'profile/index',
    '/add' => 'add/index'
];