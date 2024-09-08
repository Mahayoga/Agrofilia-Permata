<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KebunModel;
use App\Models\User;

class TabelDataController extends Controller
{
    public function index() {
        $dataUser = User::all();
        $dataKebun = KebunModel::all();

        return view('pages.admin.tabeldata.index', compact('dataUser', 'dataKebun'));
    }
}
