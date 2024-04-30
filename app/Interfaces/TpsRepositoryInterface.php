<?php

namespace App\Interfaces;

interface TpsRepositoryInterface
{
    public function getAllTps();
    public function getTpsById($tpsId);
    public function deleteTps($tpsId);
    public function createTps(array $tpsData);
    public function updateTps($tpsId, array $tpsData);
}
