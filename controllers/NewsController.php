<?php

require_once __DIR__ . '/../models/News.php';

class NewsController {

    public function actionAll(){

        $items = News::getAll();
        include __DIR__ . '/../views/index.php';

    }

    public function actionOne(){

        $id = $_GET ['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../views\News\one.php';
    }
}
