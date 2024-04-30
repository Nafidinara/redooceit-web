<?php

namespace App\Interfaces;

interface ItemPenukaranRepositoryInterface
{
    public function getAllItemPenukaran();
    public function getItemPenukaranById($itemPenukaranId);
    public function deleteItemPenukaran($itemPenukaranId);
    public function createItemPenukaran(array $itemPenukaranData);
    public function updateItemPenukaran($itemPenukaranId, array $itemPenukaranData);
}
