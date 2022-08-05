<?php

namespace BukuTamu\Controller;

use BukuTamu\Configs\Database;
use BukuTamu\Configs\Smarty_GuestBook;
use BukuTamu\Exception\ValidationException;
use BukuTamu\Model\TamuKunjunganRequest;
use BukuTamu\Model\TamuRegisterRequest;
use BukuTamu\Repository\TamuRepository;
use BukuTamu\Service\TamuService;

class TamuController
{
    private Smarty_GuestBook $smarty;
    private TamuService $tamuService;

    public string $fotoId;

    public function __construct()
    {
        $this->smarty = new Smarty_GuestBook();
        $connection = Database::getConnection();
        $tamuRepository = new TamuRepository($connection);
        $this->tamuService = new TamuService($tamuRepository);
    }

    public function index()
    {
        $this->smarty->renderTamu('index');
    }

    public function home()
    {
        $this->smarty->renderTamu('home');
    }

    // public function register()
    // {
    //     $data = $_SERVER['REQUEST_URI'];
    //     $this->smarty->renderTamu('tambah', $data);
    // }

    public function daftar()
    {
        $this->smarty->renderTamu('daftar');
    }

    public function postDaftar()
    {
        $encoded_data = $_POST['mydata'];
        $binary_data = base64_decode($encoded_data);

        $newNameImage = uniqid() . ".jpg";

        // save to server (beware of permissions)
        $result = file_put_contents("./Media/tamu/" . $newNameImage, $binary_data);
        if (!$result) die("Could not save image!  Check file permissions.");

        $request = new TamuRegisterRequest();
        $request->nama = $_POST['nama'];
        $request->institusi = $_POST['institusi'];
        $request->telepon = "62$_POST[telepon]";
        $request->foto = $newNameImage;
        $request->email = $_POST['email'];
        $request->pin = $_POST['pin'];

        $nameImg = explode(".", $newNameImage)[0];



        try {
            $this->tamuService->Register($request);
            Smarty_GuestBook::redirect('scaning', $nameImg);
        } catch (ValidationException $exception) {
            var_dump($exception);
        }
    }

    public function scaning(string $scaning)
    {
        $this->smarty->renderTamu('scaning', $scaning);
    }

    public function guest(string $guest)
    {
        $response = $this->tamuService->tampilGuest($guest);
        $this->smarty->renderTamu('guest', $response);
    }

    public function postGuest()
    {
        $request = new TamuKunjunganRequest();
        $request->id_tamu = $_POST['foto'];
        $request->id_rekap = uniqid();
        $request->tujuan = $_POST['tujuan'];

        try {
            $this->tamuService->saveRekapTamu($request);
            Smarty_GuestBook::redirect('/');
        } catch (ValidationException $exception) {
        }
    }

    public function verifikasi()
    {
        $this->smarty->renderTamu("guestVefikasi");
    }

    public function postVerifikasi()
    {
        try {
            $response = $this->tamuService->verifikasiPhone($_POST['phone']);
            $myfile = fopen("./readPin.json", "w") or die("Unable to open file!");
            $array = array(
                "telepon" => "$response[telepon]",
                "pin" => "$response[pin]",
            );
            $json = json_encode(array('data' => $array));
            fwrite($myfile, $json);
            fclose($myfile);
            Smarty_GuestBook::redirect('/');
        } catch (ValidationException $exception) {
        }
    }
}
