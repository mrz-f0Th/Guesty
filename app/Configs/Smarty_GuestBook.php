<?php

namespace BukuTamu\Configs;

use Smarty;

class Smarty_GuestBook extends Smarty
{

    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir('../app/templates/');
        $this->setConfigDir('../app/Configs/');
        $this->setCompileDir('../app/templates_c/');
        $this->setCacheDir('../app/cache/');

        // $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        // $this->testInstall();
    }

    public function renderTamu(string $page, $data = '')
    {
        $this->assign("data", $data);
        $this->display('./component/header.html');
        $this->display("$page.html");
        $this->display('./component/footer.html');
    }

    public function renderAdmin(string $page, $data1 = '', $data2 = '')
    {
        $this->assign("data1", $data1);
        $this->assign("data2", $data2);
        $this->display("./admin/$page.html");
    }

    public function render(string $page)
    {
        $this->display("$page.html");
    }

    public static function redirect(string $url, string $data = '')
    {
        if ($data == '') {
            header("Location: $url");
        } else {
            header("Location: $url/$data");
        }
        exit();
    }
}
