<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PhotoResource;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $datas = Photo::get();

        return new PhotoResource(true, 'List Data Kegiatan', $datas);
    }

    /**
     * show
     *
     * @param  mixed $post
     * @return void
     */
    public function show($id)
    {
        $datas = Photo::find($id);

        return new PhotoResource(true, 'Detail Data Kegiatan', $datas);
    }
}
