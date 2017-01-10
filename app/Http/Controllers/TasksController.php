<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $access_token = "TODO";


        $data = [
            "access_token" => $access_token
        ];

        return view('tasks',$data);
    }

}
