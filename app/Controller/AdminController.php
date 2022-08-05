<?php

namespace BukuTamu\Controller;

use BukuTamu\Configs\Database;
use BukuTamu\Configs\Smarty_GuestBook;
use BukuTamu\Exception\ValidationException;
use BukuTamu\Model\AdminLoginRequest;
use BukuTamu\Model\AdminRegisterRequest;
use BukuTamu\Repository\AdminRepository;
use BukuTamu\Repository\SessionRepository;
use BukuTamu\Service\AdminService;
use BukuTamu\Service\SessionService;
use Exception;

class AdminController
{
    private Smarty_GuestBook $smarty;
    private AdminService $adminService;
    private SessionService $sessionService;

    public function __construct()
    {
        $this->smarty = new Smarty_GuestBook();
        $connection = Database::getConnection();
        $adminRepository = new AdminRepository($connection);
        $this->adminService = new AdminService($adminRepository);

        $sessionRepository = new SessionRepository($connection);
        $this->sessionService = new SessionService($sessionRepository, $adminRepository);
    }

    public function dashboard()
    {
        $dataAll = $this->adminService->dataRead();
        $dataLastWeek = $this->adminService->getLastWeek();
        $user = $this->sessionService->current();


        if ($user == null) {
            Smarty_GuestBook::redirect("login");
        } else {
            $this->smarty->renderAdmin("dashboard", $dataAll, $dataLastWeek);
        }
    }

    public function searching()
    {
        $dataLastWeek = $this->adminService->getLastWeek();
        $searching = $this->adminService->searching($_POST['name']);
        $this->smarty->renderAdmin("dashboard", $searching, $dataLastWeek);
    }

    public function register()
    {
        $this->smarty->renderAdmin("register");
    }

    public function postRegister()
    {
        $request = new AdminRegisterRequest();
        $request->id = $_POST['id'];
        $request->name = $_POST['name'];
        $request->password = $_POST['password'];

        try {
            $this->adminService->register($request);
            Smarty_GuestBook::redirect('login');
        } catch (ValidationException $exception) {
            $this->smarty->renderAdmin('register', $exception->getMessage());
        }
    }

    public function login()
    {
        $this->smarty->renderAdmin('login');
    }
    public function postLogin()
    {
        $request = new AdminLoginRequest();
        $request->id = $_POST['id'];
        $request->password = $_POST['password'];

        try {
            $response = $this->adminService->login($request);
            $this->sessionService->create($response->admin->id);

            Smarty_GuestBook::redirect('dashboard');
        } catch (ValidationException $exception) {
            $this->smarty->renderAdmin('login', $exception->getMessage());
        }
    }

    public function logout()
    {
        $this->sessionService->destroy();
        Smarty_GuestBook::redirect('login');
    }

    public function hapus(string $fotoId)
    {
        try {
            $this->adminService->hapus($fotoId);
            Smarty_GuestBook::redirect('/dashboard');
        } catch (Exception $exception) {
        }
    }

    public function tensor()
    {
        $this->smarty->render('tensor');
    }

    public function rekap(string $rekap)
    {
        $rekap = $this->adminService->rekapDataRead($rekap);
        $rekapSeminggu = $this->adminService->getLastWeekRekap();

        $this->smarty->renderAdmin('rekap', $rekap, $rekapSeminggu);
    }
}
