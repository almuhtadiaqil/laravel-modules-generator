<?php

namespace Modules\User\Interfaces;

use Illuminate\Http\Request;

interface UserControllerInterface
{
    public function index();

    public function store(Request $request);

    public function detail($id);

    public function update(Request $request, $id);

    public function delete($id);
}
