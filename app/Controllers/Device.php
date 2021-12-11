<?php

namespace App\Controllers;

use App\Models\DeviceModel;

class Device extends BaseController
{
    protected $deviceModel;
    public function __construct()
    {
        $this->deviceModel = new DeviceModel();
    }

    public function device()
    {
        $device = $this->deviceModel->findAll();

        $data = [
            'title' => 'Daftar Device',
            'device' => $device

        ];

        return view('pages/device', $data);
    }
}
