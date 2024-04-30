<?php

namespace App\Repositories;
use App\Interfaces\ItemPenukaranRepositoryInterface;
use App\Models\ItemPenukaran;

class ItemPenukaranRepository implements ItemPenukaranRepositoryInterface {

    public function getAllItemPenukaran()
    {
        return ItemPenukaran::all();
    }

    public function getItemPenukaranById($itemPenukaranId)
    {
        return ItemPenukaran::find($itemPenukaranId);
    }

    public function deleteItemPenukaran($itemPenukaranId)
    {
        return ItemPenukaran::destroy($itemPenukaranId);
    }

    public function createItemPenukaran(array $itemPenukaranData)
    {
        return ItemPenukaran::create($itemPenukaranData);
    }

    public function updateItemPenukaran($itemPenukaranId, array $itemPenukaranData)
    {
        return ItemPenukaran::where('id', $itemPenukaranId)->update($itemPenukaranData);
    }
}
