<?php

namespace App\Repositories;

use App\Interfaces\SetoranWargaRepositoryInterface;
use App\Models\SetoranWarga;

class SetoranWargaRepository implements SetoranWargaRepositoryInterface {

    public function getAllSetoranWarga()
    {
        return SetoranWarga::all();
    }

    public function getSetoranWargaById($setoranWargaId)
    {
        return SetoranWarga::find($setoranWargaId);
    }

    public function deleteSetoranWarga($setoranWargaId)
    {
        return SetoranWarga::destroy($setoranWargaId);
    }

    public function createSetoranWarga(array $setoranWargaData)
    {
        return SetoranWarga::create($setoranWargaData);
    }

    public function updateSetoranWarga($setoranWargaId, array $setoranWargaData)
    {
        return SetoranWarga::where('id', $setoranWargaId)->update($setoranWargaData);
    }
}
