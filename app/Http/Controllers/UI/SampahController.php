<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Interfaces\SampahRepositoryInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class SampahController extends Controller {
    private SampahRepositoryInterface $sampahRepository;

    public function __construct(
        SampahRepositoryInterface $sampahRepository
    )
    {
        $this->sampahRepository = $sampahRepository;
    }

    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $sampah = $this->sampahRepository->getAllSampah();
        return view('components.sampah.index', compact('sampah'));
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.sampah.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->sampahRepository->createSampah($request->all());
        toastify()->success('Berhasil menambahkan data Sampah!');
        return redirect()->route('sampah.index');
    }

    public function edit($sampah_id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $sampah = $this->sampahRepository->getSampahById($sampah_id);

        return view('components.sampah.edit', compact('sampah'));
    }

    public function update(Request $request, $sampah_id): RedirectResponse
    {
        $this->sampahRepository->updateSampah($sampah_id, [
            'tps_id' => $request->tps_id,
            'keterangan' => $request->keterangan,
            'volume' => $request->volume,
            'jenis' => $request->jenis
        ]);

        toastify()->success('Berhasil mengubah data Sampah!');
        return redirect()->route('sampah.index');
    }

    public function destroy($sampah_id): RedirectResponse
    {
        $this->sampahRepository->deleteSampah($sampah_id);
        toastify()->success('Berhasil menghapus data Sampah!');
        return redirect()->route('sampah.index');
    }
}