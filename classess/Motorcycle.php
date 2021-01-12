<?php

require_once 'classes/Vehicle.php';

class Motorcycle extends Vehicle
{
    public $speed_limit = 200;
    public function __construct($model_name, $year_of_production)
    {
        $this->model_name = $model_name;
        $this->year_of_production = $year_of_production;
    }

}
