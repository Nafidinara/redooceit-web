<?php

namespace App\Interfaces;

interface SampahRepositoryInterface
{
    public function getAllSampah();
    public function getSampahById($sampahId);
    public function deleteSampah($sampahId);
    public function createSampah(array $sampahData);
    public function updateSampah($sampahId, array $sampahData);
}
