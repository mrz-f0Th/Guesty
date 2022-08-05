<?php

namespace BukuTamu\Service;

use BukuTamu\Domain\Admin;
use BukuTamu\Domain\Session;
use BukuTamu\Repository\AdminRepository;
use BukuTamu\Repository\SessionRepository;

class SessionService
{
    private SessionRepository $sessionRepository;
    private AdminRepository $adminRepository;

    public static string $COOKIE_NAME = "X-EGUEST-SESSION";

    public function __construct(SessionRepository $sessionRepository, AdminRepository $adminRepository)
    {
        $this->sessionRepository = $sessionRepository;
        $this->adminRepository = $adminRepository;
    }

    public function create(string $user_id): Session
    {
        $session = new Session();
        $session->id = uniqid();
        $session->user_id = $user_id;

        $this->sessionRepository->save($session);

        setcookie(self::$COOKIE_NAME, $session->id, time() + (60 * 60 * 24 * 7), "/");

        return $session;
    }

    public function destroy()
    {
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? '';
        $this->sessionRepository->deleteById($sessionId);

        setcookie(self::$COOKIE_NAME, '', 1, "/");
    }

    public function current(): ?Admin
    {
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? '';

        $session = $this->sessionRepository->findById($sessionId);

        if ($session == null) {
            return null;
        }

        return $this->adminRepository->findById($session->user_id);
    }
}
