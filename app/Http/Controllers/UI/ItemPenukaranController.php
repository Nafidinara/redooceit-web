<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Interfaces\ItemPenukaranRepositoryInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ItemPenukaranController extends Controller
{
    private ItemPenukaranRepositoryInterface $itemPenukaranRepository;

    public function __construct(
        ItemPenukaranRepositoryInterface $itemPenukaranRepository
    )
    {
        $this->itemPenukaranRepository = $itemPenukaranRepository;
    }

    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $itemPenukaran = $this->itemPenukaranRepository->getAllItemPenukaran();
        return view('components.itemPenukaran.index', compact('itemPenukaran'));
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.itemPenukaran.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->itemPenukaranRepository->createItemPenukaran($request->all());
        toastify()->success('Berhasil menambahkan data Item!');
        return redirect()->route('itemPenukaran.index');
    }

    public function edit($itemPenukaran_id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $itemPenukaran = $this->itemPenukaranRepository->getItemPenukaranById($itemPenukaran_id);

        return view('components.itemPenukaran.edit', compact('itemPenukaran'));
    }

    public function update(Request $request, $itemPenukaran_id): RedirectResponse
    {
        $this->itemPenukaranRepository->updateItemPenukaran($itemPenukaran_id, [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stamp' => $request->stamp,
            'satuan' => $request->satuan,
        ]);

        toastify()->success('Berhasil menukar Item!');
        return redirect()->route('itemPenukaran.index');
    }

    public function destroy($itemPenukaran_id): RedirectResponse
    {
        $this->itemPenukaranRepository->deleteItemPenukaran($itemPenukaran_id);
        toastify()->success('Berhasil menghapus data Item!');
        return redirect()->route('itemPenukaran.index');
    }
}
