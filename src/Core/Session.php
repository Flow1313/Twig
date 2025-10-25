<?php
namespace App\Core;

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        return $_SESSION[$key] ?? false;
    }

    public function remove($key)
    {
        unset($_SESSION[$key]);
    }

    public function setFlash($key, $message)
    {
        $_SESSION['flash'][$key] = $message;
    }

    public function getFlash($key)
    {
        $message = $_SESSION['flash'][$key] ?? '';
        unset($_SESSION['flash'][$key]);
        return $message;
    }
}
