<?php

namespace App\Repositories;

use App\Interfaces\WargaRepositoryInterface;
use App\Models\Warga;

class WargaRepository implements WargaRepositoryInterface {

    public function getAllWarga()
    {
        return Warga::all();
    }

    public function getWargaById($wargaId)
    {
        return Warga::find($wargaId);
    }

    public function deleteWarga($wargaId)
    {
        return Warga::destroy($wargaId);
    }

    public function createWarga(array $wargaData)
    {
        return Warga::create($wargaData);
    }

    public function updateWarga($wargaId, array $wargaData)
    {
        return Warga::where('id', $wargaId)->update($wargaData);
    }
}
