<?php

namespace BukuTamu\Service;

use BukuTamu\Configs\Database;
use BukuTamu\Domain\RekapTamu;
use BukuTamu\Domain\Tamu;
use BukuTamu\Exception\ValidationException;
use BukuTamu\Model\TamuKunjunganRequest;
use BukuTamu\Model\TamuKunjunganResponse;
use BukuTamu\Model\TamuRegisterRequest;
use BukuTamu\Model\TamuRegisterResponse;
use BukuTamu\Repository\TamuRepository;

class TamuService
{
    private TamuRepository $tamuRepository;

    public function __construct(TamuRepository $tamuRepository)
    {
        $this->tamuRepository = $tamuRepository;
    }


    public function Register(TamuRegisterRequest $request): TamuRegisterResponse
    {
        $this->validateTamuRegisterRequest($request);

        try {
            Database::beginTransaction();

            $tamu = new Tamu();
            $tamu->nama = $request->nama;
            $tamu->institusi = $request->institusi;
            $tamu->telepon = $request->telepon;
            $tamu->foto = $request->foto;
            $tamu->email = $request->email;
            $tamu->pin = $request->pin;

            $this->tamuRepository->save($tamu);

            $response = new TamuRegisterResponse();
            $response->tamu = $tamu;

            Database::commitTransaction();
            return $response;
        } catch (\Exception $exception) {
            Database::rollbackTransaction();
            throw $exception;
        }
    }

    private function validateTamuRegisterRequest(TamuRegisterRequest $request)
    {
        if ($request->nama == null || $request->institusi == null || $request->telepon == null || $request->foto == null || $request->email == null || $request->pin == null || trim($request->nama) == "" || trim($request->institusi) == "" || trim($request->telepon) == "" || trim($request->foto) == "" || trim($request->email) == "" || trim($request->pin) == "") {
            throw new ValidationException("nama, institusi, tujuan, foto tidak boleh kosong!");
        }
    }

    public function tampilGuest(string $idFoto)
    {
        try {
            $response = $this->tamuRepository->findById($idFoto);

            return $response;
        } catch (\Exception $exception) {
        }
    }

    public function saveRekapTamu(TamuKunjunganRequest $request): TamuKunjunganResponse
    {
        $this->validateTamuKunjunganRequest($request);

        $tamuKunjungan = new RekapTamu();
        $tamuKunjungan->id_tamu = $request->id_tamu;
        $tamuKunjungan->id_rekap = $request->id_rekap;
        $tamuKunjungan->tujuan = $request->tujuan;

        $this->tamuRepository->saveRekap($tamuKunjungan);

        $response = new TamuKunjunganResponse();
        $response->rekapTamu = $tamuKunjungan;

        return $response;
    }

    private function validateTamuKunjunganRequest(TamuKunjunganRequest $request)
    {
        if ($request->id_tamu == null || $request->id_rekap == null || $request->tujuan == null || trim($request->id_tamu) == "" || trim($request->id_rekap) == "" || trim($request->tujuan) == "") {
            throw new ValidationException("id_tamu, id_rekap, tujuan tidak boleh kosong!");
        }
    }

    public function verifikasiPhone(string $phone)
    {
        try {
            $response = $this->tamuRepository->getTamuByPhone($phone);
            return $response;
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}
