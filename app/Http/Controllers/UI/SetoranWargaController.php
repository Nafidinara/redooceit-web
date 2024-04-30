<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Interfaces\SetoranWargaRepositoryInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SetoranWargaController extends Controller
{
    private SetoranWargaRepositoryInterface $setoranWargaRepository;

    public function __construct(
        SetoranWargaRepositoryInterface $setoranWargaRepository
    )
    {
        $this->setoranWargaRepository = $setoranWargaRepository;
    }

    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $setoran_wargas = $this->setoranWargaRepository->getAllSetoranWarga();
        return view('components.setorwarga.index', compact('setoran_wargas'));
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.setorwarga.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->setoranWargaRepository->createSetoranWarga($request->all());
        toastify()->success('Berhasil menambahkan data Setor Warga!');
        return redirect()->route('setoranwarga.index');
    }

    public function edit($setoranWarga_id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $setoran_wargas = $this->setoranWargaRepository->getSetoranWargaById($setoranWarga_id);

        return view('components.setorwarga.edit', compact('setoran_wargas'));
    }

    public function update(Request $request, $setoranWarga_id): RedirectResponse
    {
        $this->setoranWargaRepository->updateSetoranWarga($setoranWarga_id, [
            'warga_id' => $request->warga_id,
            'berat' => $request->berat,
            'stamp' => $request->stamp
        ]);

        toastify()->success('Berhasil mengupdate data Setor Warga!');
        return redirect()->route('setoranwarga.index');
    }

    public function destroy($setoranWarga_id): RedirectResponse
    {
        $this->setoranWargaRepository->deleteSetoranWarga($setoranWarga_id);
        toastify()->success('Berhasil menghapus data Setor Warga!');
        return redirect()->route('setoranwarga.index');
    }
}
