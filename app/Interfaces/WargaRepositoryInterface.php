<?php

namespace App\Interfaces;

interface WargaRepositoryInterface
{
    public function getAllWarga();
    public function getWargaById($wargaId);
    public function deleteWarga($wargaId);
    public function createWarga(array $wargaData);
    public function updateWarga($wargaId, array $wargaData);
}
