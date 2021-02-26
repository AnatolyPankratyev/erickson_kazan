<?php

use ishop\Router;

Router::add('^product/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Product', 'action' => 'view']);
Router::add('^category/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Category', 'action' => 'view']);
Router::add('^photos/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Photos', 'action' => 'view']);
Router::add('^feedbacks/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Feedbacks', 'action' => 'view']);
Router::add('^videos/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Videos', 'action' => 'view']);

// default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');