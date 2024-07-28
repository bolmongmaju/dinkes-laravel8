<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LayananResource;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $datas = Service::get();

        return new LayananResource(true, 'List Data Layanan', $datas);
    }

    /**
     * show
     *
     * @param  mixed $post
     * @return void
     */
    public function show($id)
    {
        $datas = Service::find($id);

        return new LayananResource(true, 'Detail Data Layanan', $datas);
    }
}
