<?php

require_once 'classes/Vehicle.php';

class Tractor extends Vehicle
{
    public $speed_limit = 45;
    public function __construct($model_name, $horse_power, $year_of_production)
    {
        $this->model_name = $model_name;
        $this->horse_power = $horse_power;
        $this->year_of_production = $year_of_production;
        
    }

}
