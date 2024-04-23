<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Interfaces\TpsRepositoryInterface;
use Auth;
use DB;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Request;

class TpsController extends Controller
{

    private TpsRepositoryInterface $tpsRepository;

    public function __construct(
        TpsRepositoryInterface $tpsRepository
    )
    {
        $this->tpsRepository = $tpsRepository;
    }

    public function index()
    {
        return view('ui.tps.index');
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('ui.tps.create');
    }

    public function store(Request $request): RedirectResponse
    {

        $this->tpsRepository->createTps($request->all());

        return redirect()->route('ui.tps.index');
    }

    public function edit($tps_id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $tps = $this->tpsRepository->getTpsById($tps_id);

        return view('ui.tps.edit', compact('tps'));
    }

    public function update(Request $request, $tps_id): RedirectResponse
    {
        $this->tpsRepository->updateTps($tps_id, $request->all());

        return redirect()->route('ui.tps.index');
    }
}
