<?php

abstract class Vehicle
{
    public $started = false;
    public $speed;
    public $model_name;

    public function getName(){
        return $this->model_name;
    }
        
    public function accelerate($acc)
    {
        if($this->started){
            if($this->speed+$acc>$this->speed_limit){
                return $this->speed =$this->speed_limit;
            }
            return $this->speed = $this->speed+$acc;
        }
        return $this->speed = 'ERROR - ENGINE OFF';
     
    }

    public function slow($dec)
    {
        if($this->speed < $dec){
           return  $this->started = false;
            
        }
        return $this->speed = $this->speed-$dec;
    }

    public function getSpeed()
    {
    return $this->speed;
    }

    public function startEngine(){
        $this->started = true;
        $this->speed = 0;
    }

    public function stopEngine(){
        $this->started = false;
        $this->speed = 0;
    }

}
