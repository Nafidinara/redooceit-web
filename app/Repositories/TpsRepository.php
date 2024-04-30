<?php

namespace App\Repositories;

use App\Interfaces\TpsRepositoryInterface;
use App\Models\Tps;

class TpsRepository implements TpsRepositoryInterface {

    public function getAllTps()
    {
        return Tps::all();
    }

    public function getTpsById($tpsId)
    {
        return Tps::find($tpsId);
    }

    public function deleteTps($tpsId)
    {
        return Tps::destroy($tpsId);
    }

    public function createTps(array $tpsData)
    {
        return Tps::create($tpsData);
    }

    public function updateTps($tpsId, array $tpsData)
    {
        return Tps::where('id', $tpsId)->update($tpsData);
    }
}
