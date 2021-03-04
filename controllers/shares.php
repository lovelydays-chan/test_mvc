<?php

use Lnw\Core\Controller;
use Lnw\Core\Validator;

class SharesController extends Controller
{
    public function __construct(){
        if (!isset($_SESSION['is_logged_in'])) {
            header('Location:/board/shares');
            exit;
        }
    }
    protected function index()
    {
        $this->returnView('board.add', false);
    }

    protected function add()
    {
        $data = [
            'title' => $this->request('title'),
            'body' => $this->request('body'),
            'link' => $this->request('link'),
        ];
        $validator = (new Validator())->make(
            $data,
            $rules = [
                'title' => ['required'],
                'body' => ['required'],
                'link' => ['required'],
            ]
        );
        if ($validator->fails()) {
            $data = [
                'errors' => $validator->errors(),
            ];
            $this->returnView('board.add', $data);
            exit;
        }
        try {
            $board = new ShareModel();
            $data['user_id'] = $_SESSION['user_data']['id'];
            $data['create_date'] = date('Y-m-d H:i:s');
            $board::insert($data);
            header('Location: /board/shares');
            exit;
        } catch (\Exception $e) {
            Messages::setMsg('Save Data Error.', 'error');
            $this->returnView('board.add', false);
            exit;
        }
    }
}
