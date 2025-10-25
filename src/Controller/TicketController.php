<?php
namespace App\Controller;

use App\Core\Application;
use App\Core\Session;

class TicketController
{
    public function index()
    {
        $tickets = Application::$app->session->get('tickets') ?? [];
        
        return $this->render('tickets/index', [
            'tickets' => $tickets
        ]);
    }

    public function create()
    {
        return $this->render('tickets/create');
    }

    public function store()
    {
        $tickets = Application::$app->session->get('tickets') ?? [];
        
        $newTicket = [
            'id' => uniqid(),
            'title' => $_POST['title'] ?? '',
            'description' => $_POST['description'] ?? '',
            'priority' => $_POST['priority'] ?? 'medium',
            'status' => $_POST['status'] ?? 'open',
            'created_at' => date('M d, Y')
        ];

        $tickets[] = $newTicket;
        Application::$app->session->set('tickets', $tickets);
        Application::$app->session->setFlash('success', 'Ticket created successfully!');

        header('Location: /');
        exit;
    }

    public function delete()
    {
        $tickets = Application::$app->session->get('tickets') ?? [];
        $id = $_POST['id'] ?? '';
        
        $tickets = array_filter($tickets, function($ticket) use ($id) {
            return $ticket['id'] !== $id;
        });

        Application::$app->session->set('tickets', array_values($tickets));
        Application::$app->session->setFlash('success', 'Ticket deleted successfully!');

        header('Location: /');
        exit;
    }

    private function render($view, $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        $session = Application::$app->session;
        
        ob_start();
        include_once __DIR__ . "/../../templates/$view.php";
        return ob_get_clean();
    }
}
