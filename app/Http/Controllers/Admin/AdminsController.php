<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admins;
use Illuminate\Http\Request;

class AdminsController extends AdminBaseController
{
    protected $create_field = [];
    protected $update_field = [];

    public function __construct(Admins $model)
    {
        $this->model = $model;
        parent::__construct();
    }

    public function index(Request $request)
    {
        return view("{$this->view_folder}.index");
    }

    public function list(Request $request)
    {
        $builder = Admins::query();
        // 过滤条件

        // 分页数据
        $pageSize = $request->limit;
        if (empty($request->page)) {
            $offset = 0;
        } else {
            $page   = (int)$request->page;
            $offset = ($page - 1) * $pageSize;
        }
        return response()->json([
            'code'  => 0,
            'msg'   => 'success',
            'count' => $builder->count(),
            'data' => $builder->offset($offset)->limit($pageSize)->orderBy('id', 'desc')->get()
        ]);
    }

    public function show(Request $request)
    {
        return view("{$this->view_folder}.show");
    }
}
