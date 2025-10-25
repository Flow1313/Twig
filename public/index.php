<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Application;
use App\Controller\TicketController;

$app = new Application();

// Define routes
$app->router->get('/', [TicketController::class, 'index']);
$app->router->get('/tickets/create', [TicketController::class, 'create']);
$app->router->post('/tickets/create', [TicketController::class, 'store']);
$app->router->post('/tickets/delete', [TicketController::class, 'delete']);

$app->run();
