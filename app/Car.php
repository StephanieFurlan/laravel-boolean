<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $id;
    public $model;
    public $brand;
    public $licencePlate;

    public function get_model() {
        return $this->model;
    }
}
