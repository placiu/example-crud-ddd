<?php

namespace Domains\Vehicles\Entities;

use Domains\Vehicles\Dictionaries\VehicleBrands;
use Domains\Vehicles\Dictionaries\VehicleTypes;

class Vehicle
{
    protected int $id;

    protected VehicleTypes $type;

    protected VehicleBrands $brand;

    protected string $model;

    protected string $licence_number;

    protected \DateTime $created_at;

    protected \DateTime $updated_at;

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): VehicleTypes
    {
        return $this->type;
    }

    public function setType(VehicleTypes $type): void
    {
        $this->type = $type;
    }

    public function getBrand(): VehicleBrands
    {
        return $this->brand;
    }

    public function setBrand(VehicleBrands $brand): void
    {
        $this->brand = $brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getLicenceNumber(): string
    {
        return $this->licence_number;
    }

    public function setLicenceNumber(string $licence_number): void
    {
        $this->licence_number = $licence_number;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTime $created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt(): \DateTime
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTime $updated_at): void
    {
        $this->updated_at = $updated_at;
    }
}
