<?php

use Lnw\Core\Controller;

use Validate\ShareAddValidate;

class SharesController extends Controller
{
    protected function index()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            $this->redirectTo('/board/shares');
        }
        $this->returnView('board.add', false);
    }

    protected function add($request)
    {
        if (!isset($_SESSION['is_logged_in'])) {
            $this->redirectTo('/board/shares');
        }

        $validator = new ShareAddValidate($request);

        if ($validator->fails()) {
            $data = [
                'errors' => $validator->errors(),
            ];
            $this->redirectTo('/board/shares/add', $data);
        }
        try {
            $board = new ShareModel();
            $board->user_id = $_SESSION['user_data']['id'];
            $board->create_date = date('Y-m-d H:i:s');
            $board->title = $request['title'];
            $board->body = $request['body'];
            $board->link = $request['link'];
            $board->save();
            $this->redirectTo('/board/shares');
        } catch (\Exception $e) {
            $this->returnView('board.add', false);
        }
    }
}
