<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartementCreateRequest;
use App\Models\Departement;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DepartementController extends Controller
{
    public function index(): View
    {
        $departements = Departement::all();
        return view('back.departements.index', compact('departements'));
    }

    public function store(DepartementCreateRequest $request)
    {
        $data = $request->validated();

        Departement::create($data);

        return Redirect::route('index_departements');

    }
}
