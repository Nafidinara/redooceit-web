<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Interfaces\TpsRepositoryInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TpsController extends Controller
{
    private TpsRepositoryInterface $tpsRepository;

    public function __construct(
        TpsRepositoryInterface $tpsRepository
    )
    {
        $this->tpsRepository = $tpsRepository;
    }

    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $tps = $this->tpsRepository->getAllTps();
        return view('components.tps.index', compact('tps'));
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.tps.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->tpsRepository->createTps($request->all());
        toastify()->success('Berhasil menambahkan data TPS!');
        return redirect()->route('tps.index');
    }

    public function edit($tps_id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $tps = $this->tpsRepository->getTpsById($tps_id);

        return view('components.tps.edit', compact('tps'));
    }

    public function update(Request $request, $tps_id): RedirectResponse
    {
       

        toastify()->success('Berhasil mengubah data TPS!');
        return redirect()->route('tps.index');
    }

    public function destroy($tps_id): RedirectResponse
    {
        $this->tpsRepository->deleteTps($tps_id);
        toastify()->success('Berhasil menghapus data TPS!');
        return redirect()->route('tps.index');
    }
}
