<?php

namespace App\Repositories;

use App\Interfaces\PenukaranRepositoryInterface;
use App\Models\Penukaran;

class PenukaranRepository implements PenukaranRepositoryInterface {

    public function getAllPenukaran()
    {
        return Penukaran::all();
    }

    public function getPenukaranById($penukaranId)
    {
        return Penukaran::find($penukaranId);
    }

    public function deletePenukaran($penukaranId)
    {
        return Penukaran::destroy($penukaranId);
    }

    public function createPenukaran(array $penukaranData)
    {
        return Penukaran::create($penukaranData);
    }

    public function updatePenukaran($penukaranId, array $penukaranData)
    {
        return Penukaran::where('id', $penukaranId)->update($penukaranData);
    }
}
