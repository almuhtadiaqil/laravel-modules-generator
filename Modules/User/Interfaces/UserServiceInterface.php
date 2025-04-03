<?php

namespace Modules\User\Interfaces;

interface UserServiceInterface
{
    public function index();

    public function store($request);

    public function detail($id);

    public function update($request, $id);

    public function delete($id);
}
