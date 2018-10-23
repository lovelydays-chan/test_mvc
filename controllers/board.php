<?php

use Lnw\Core\Controller;

class BoardController extends Controller
{
    protected function Index()
    {
        $this->returnView('board.index', false);
    }

    protected function shares()
    {
        $viewmodel = new ShareModel();
        $result = $viewmodel::orderBy('create_date', 'desc')->get();
        $data = [
            'datas' => $result,
        ];
        $this->returnView('board.shares', $data);
    }
}
