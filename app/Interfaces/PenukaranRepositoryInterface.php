<?php

namespace App\Interfaces;

interface PenukaranRepositoryInterface
{
    public function getAllPenukaran();
    public function getPenukaranById($penukaranId);
    public function deletePenukaran($penukaranId);
    public function createPenukaran(array $penukaranData);
    public function updatePenukaran($penukaranId, array $penukaranData);
}

