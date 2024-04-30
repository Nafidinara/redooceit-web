<?php

namespace App\Repositories;

use App\Interfaces\SampahRepositoryInterface;
use App\Models\Sampah;

class SampahRepository implements SampahRepositoryInterface {

    public function getAllSampah()
    {
        return Sampah::all();
    }

    public function getSampahById($sampahId)
    {
        return Sampah::find($sampahId);
    }

    public function deleteSampah($sampahId)
    {
        return Sampah::destroy($sampahId);
    }

    public function createSampah(array $sampahData)
    {
        return Sampah::create($sampahData);
    }

    public function updateSampah($sampahId, array $sampahData)
    {
        return Sampah::where('id', $sampahId)->update($sampahData);
    }
}