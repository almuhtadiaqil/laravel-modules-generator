<?php

namespace Modules\Auth\Interfaces;

interface AuthServiceInterface
{
    public function index();

    public function store($request);

    public function detail($id);

    public function update($request, $id);

    public function delete($id);
}
