<?php

namespace App\Interfaces;

interface SetoranWargaRepositoryInterface
{
    public function getAllSetoranWarga();
    public function getSetoranWargaById($setoranWargaId);
    public function deleteSetoranWarga($setoranWargaId);
    public function createSetoranWarga(array $setoranWargaData);
    public function updateSetoranWarga($setoranWargaId, array $setoranWargaData);
}
