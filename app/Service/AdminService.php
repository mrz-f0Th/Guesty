<?php

namespace BukuTamu\Service;

use BukuTamu\Model\AdminRegisterRequest;
use BukuTamu\Model\AdminRegisterResponse;
use BukuTamu\Repository\AdminRepository;
use BukuTamu\Exception\ValidationException;
use BukuTamu\Configs\Database;
use BukuTamu\Domain\Admin;
use BukuTamu\Model\AdminDataReadResponse;
use BukuTamu\Model\AdminGetDataLastWeekResponse;
use BukuTamu\Model\AdminLoginRequest;
use BukuTamu\Model\AdminLoginResponse;

class AdminService
{
    private AdminRepository $adminRepository;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function register(AdminRegisterRequest $request): AdminRegisterResponse
    {

        $this->validateAdminRegisterRequest($request);

        try {
            Database::beginTransaction();

            $admin = $this->adminRepository->findById($request->id);
            if ($admin != null) {
                throw new ValidationException("User Id already exist");
            }

            $admin = new Admin();
            $admin->id = $request->id;
            $admin->name = $request->name;
            $admin->password = password_hash($request->password, PASSWORD_BCRYPT);

            $this->adminRepository->save($admin);

            $response = new AdminRegisterResponse();
            $response->admin = $admin;

            Database::commitTransaction();
            return $response;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }


    private function validateAdminRegisterRequest(AdminRegisterRequest $request)
    {
        if ($request->id == null || $request->name == null || $request->password == null || trim($request->id) == "" || trim($request->name) == "" || trim($request->password) == "") {
            throw new ValidationException("id, name, password tidak boleh kosong!");
        }
    }

    public function login(AdminLoginRequest $request): AdminLoginResponse
    {
        $this->validateAdminLoginRequest($request);

        $admin = $this->adminRepository->findById($request->id);

        if ($admin == null) {
            throw new ValidationException("Id or Password is wrong!!!");
        }

        if ($request->id == $admin->id) {
            $response = new AdminLoginResponse();
            $response->admin = $admin;
            return $response;
        } else {
            throw new ValidationException("Id or password is wrong");
        }
    }

    public function validateAdminLoginRequest(AdminLoginRequest $request)
    {
        if ($request->id == null || $request->password == null || trim($request->id) == "" || trim($request->password) == "") {
            throw new ValidationException("id, password tidak boleh kosong!");
        }
    }

    public function dataRead()
    {

        $admin = $this->adminRepository->getAllTamu();

        return $admin;
    }

    public function hapus(string $fotoId)
    {
        $this->adminRepository->hapusTamu($fotoId);
    }

    public function getLastWeek()
    {
        $tamu = $this->adminRepository->tamuSeminggu();

        foreach ($tamu as $data) {
            $tanggal = explode("-", $data->tanggal);
            $data->tanggal = end($tanggal);
        }


        return $tamu;
    }

    public function searching(string $name)
    {
        $tamu = $this->adminRepository->searchData($name);
        return $tamu;
    }

    public function rekapDataRead(string $id_tamu)
    {

        $rekap = $this->adminRepository->getRekapTamu($id_tamu);

        return $rekap;
    }

    public function getLastWeekRekap()
    {
        $tamu = $this->adminRepository->rekapTamuSeminggu();

        foreach ($tamu as $data) {
            $tanggal = explode("-", $data->tanggal);
            $data->tanggal = end($tanggal);
        }


        return $tamu;
    }
}
