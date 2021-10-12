<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminBaseController extends Controller
{
    protected $model;
    protected $model_name;
    protected $root_folder = 'admin';
    protected $view_folder; // 视图目录，类似 admin.user

    protected $create_field = [];
    protected $update_field = [];

    public function __construct()
    {
        if($this->model) {
            $this->model_name = Str::lower(basename(\get_class($this->model)));

            //
            $this->view_folder = $this->root_folder.'.'. $this->model_name;
        }
    }

    public function index(Request $request)
    {
        $params = $request->all();
        $data   = [];
        return view("{$this->view_folder}.index", compact('data', 'params'));
    }
}
