<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Interfaces\WargaRepositoryInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    private WargaRepositoryInterface $wargaRepository;

    public function __construct(
        WargaRepositoryInterface $wargaRepository
    )

    {
        $this->wargaRepository = $wargaRepository;
    }

    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $wargas = $this->wargaRepository->getAllWarga();
        return view('components.warga.index', compact('wargas'));
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.warga.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->wargaRepository->createWarga($request->all());
        toastify()->success('Berhasil menambahkan data Warga!');
        return redirect()->route('warga.index');
    }

    public function edit($warga_id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $warga = $this->wargaRepository->getWargaById($warga_id);
        return view('components.warga.edit', compact('warga'));
    }

    public function update(Request $request, $warga_id): RedirectResponse
    {
        $this->wargaRepository->updateWarga($warga_id, [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        toastify()->success('Berhasil mengubah data Warga!');
        return redirect()->route('warga.index');
    }

    public function destroy($warga_id): RedirectResponse
    {
        $this->wargaRepository->deleteWarga($warga_id);
        toastify()->success('Berhasil menghapus data Warga!');
        return redirect()->route('warga.index');
    }
}
