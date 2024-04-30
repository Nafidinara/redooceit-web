<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Interfaces\PenukaranRepositoryInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PenukaranController extends Controller
{
    private PenukaranRepositoryInterface $penukaranRepository;

    public function __construct(
        PenukaranRepositoryInterface $penukaranRepository
    )
    {
        $this->penukaranRepository = $penukaranRepository;
    }

    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $penukaran = $this->penukaranRepository->getAllPenukaran();
        return view('components.penukaran.index', compact('penukaran'));
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.penukaran.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->penukaranRepository->createPenukaran($request->all());
        toastify()->success('Berhasil menukarkan item di PENUKARAN');
        return redirect()->route('penukaran.index');
    }

    public function edit($penukaran_id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $penukaran = $this->penukaranRepository->getPenukaranById($penukaran_id);

        return view('components.penukaran.edit', compact('penukaran'));
    }

    public function update(Request $request, $penukaran_id): RedirectResponse
    {
        $this->penukaranRepository->updatePenukaran($penukaran_id, [
            'warga_id' => $request->warga_id,
            'item_penukaran_id' => $request->item_penukaran_id,
            'stamp' => $request->stamp,
        ]);

        toastify()->success('Berhasil mengubah data PENUKARAN!');
        return redirect()->route('penukaran.index');
    }

    public function destroy($penukaran_id): RedirectResponse
    {
        $this->penukaranRepository->deletePenukaran($penukaran_id);
        toastify()->success('Berhasil menghapus data PENUKARAN!');
        return redirect()->route('penukaran.index');
    }
}
