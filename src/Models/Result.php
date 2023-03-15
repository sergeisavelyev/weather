<?php

namespace WayWay\Weather\Models;

class Result
{
    private int|float $celsius;
    private int|float $farenheit;

    public function setCelsius(int|float $celsius): Result
    {
        $this->celsius = $celsius;
        return $this;
    }

    public function setFarenheits(int|float $farenheit): Result
    {
        $this->farenheit = $farenheit;
        return $this;
    }

    public function getCelsius(): int|float
    {
        return $this->celsius;
    }

    public function getFarenheits(): int|float
    {
        return $this->farenheit;
    }
}
