<?php

require 'model/userModel.php';

class userController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function index()
    {
        $getAllData = $this->userModel->fetchData();
        require 'views/list.php';
    }

    public function create($productData, $image)
    {
        if ($productData && $image)
        {
            $this->userModel->insertData($productData, $image);
            header('location: /create');
        }
        else
        {
            require 'views/create.php';
        }
    }

    public function edit($targetId)
    {
        $editData = $this->userModel->editData($targetId['targetId']);
        require 'views/edit.php';
    }

    public function update($editData, $editImage)
    {
        $this->userModel->updateData($editData['updateId'], $editData, $editImage);
    }

    public function delete($targetId)
    {
        $this->userModel->deleteData($targetId['targetId']);
    }
}