<?php
return [
  'POST' => [
    '/login' => 'Login@store',
    '/user/create' => 'User@store'
  ],
  'GET' => [
    '/' => 'Home@index',
    '/user' => 'user@index',
    '/user/[0-9]+' => 'User@show',
    '/user/create' => "User@create",
    '/login' => 'Login@index',
    '/logout' => 'Login@destroy',
  ],

];