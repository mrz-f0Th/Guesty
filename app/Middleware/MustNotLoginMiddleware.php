<?php

namespace BukuTamu\Middleware;

use BukuTamu\Configs\Database;
use BukuTamu\Configs\Smarty_GuestBook;
use BukuTamu\Repository\AdminRepository;
use BukuTamu\Repository\SessionRepository;
use BukuTamu\Service\SessionService;

class MustNotLoginMiddleware
{
    private SessionService $sessionService;

    public function __construct()
    {
        $sessionRepository = new SessionRepository(Database::getConnection());
        $adminRepository = new AdminRepository(Database::getConnection());
        $this->sessionService = new SessionService($sessionRepository, $adminRepository);
    }

    function before(): void
    {
        $admin = $this->sessionService->current();
        if ($admin != null) {
            Smarty_GuestBook::redirect('dashboard');
        }
    }
}
