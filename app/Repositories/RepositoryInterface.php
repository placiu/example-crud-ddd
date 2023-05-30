<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function add(array $data): Model;
    public function update(Model $model, array $data): Model;
    public function destroy(Model $model): void;
}