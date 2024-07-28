<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BeritaResource;
use App\Models\News;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $datas = News::get();

        return new BeritaResource(true, 'List Data Berita', $datas);
    }

    /**
     * show
     *
     * @param  mixed $post
     * @return void
     */
    public function show($id)
    {
        $datas = News::find($id);

        return new BeritaResource(true, 'Detail Data Berita', $datas);
    }
}
