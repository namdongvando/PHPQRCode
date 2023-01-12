<?php

namespace PHPQRCODE;


class QRCODECLASSS
{

    public $level;
    public $size;
    public $data;

    public function __construct($item = null)
    {
        $this->level = $item["level"] ?? null;
        $this->size = $item["size"] ?? null;
        $this->data = $item["data"] ?? null;
    }
    public function _RequsetData($item = null)
    {
        $this->level = $item["level"] ?? null;
        $this->size = $item["size"] ?? null;
        $this->data = $item["data"] ?? null;
    }

    public function Images()
    {
        $_REQUEST["level"] = $this->level;
        $_REQUEST["size"] = $this->size;
        $_REQUEST["data"] = $this->data;
        // $this->redDirectoryByPath("temp/");
        include(__DIR__ . "/index.php");
    }

    
}
