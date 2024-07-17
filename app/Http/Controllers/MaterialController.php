<?php

namespace App\Http\Controllers;

use App\Models\ArtesMateriais;
use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    //
    public function index()
    {

        // $search = request('search');

        // if ($search) {

        //     $events = Event::where([
        //         ['title', 'like', '%' . $search . '%']
        //     ])->get();
        // } else {
        //     $events = Event::all();
        // }

        // return view('welcome', ['events' => $events, 'search' => $search]);
    }

    public function create()
    {
        return view('events.materialnovo');
    }

    public function insert(Request $request)
    {

        $material = new Material;

        $material->tituloMaterial = $request->tituloMaterial;

        $material->save();

        return redirect('/material')->with('msg', 'Material criado com sucesso!');
    }

    public function delete($id)
    {
        $artesMateriais = ArtesMateriais::where('idMaterial', $id)->count();

        if ($artesMateriais > 0) {
            return redirect('/material')->with('error', 'Não é possível excluir o material porque ele está sendo usado.');
        }

        $material = Material::find($id);

        if ($material) {
            $material->delete();
            return redirect('/material')->with('msg', 'Material excluído com sucesso!');
        }

        return redirect('/material')->with('error', 'Material não encontrado.');
    }

    public function update(Request $request, $id)
    {
        $material = Material::where('idMaterial', $id)->first();

        if ($material) {
            $material->tituloMaterial = $request->tituloMaterial;
            $material->save();

            return redirect('/material')->with('msg', 'Material atualizado com sucesso!');
        }

        return redirect('/material')->with('error', 'Material não encontrado.');
    }
    public function edit($id)
    {

        $material = Material::findOrFail($id);

        return view('events.materialeditar', ['material' => $material]);
    }
    public function show()
    {
        $materiais = Material::all()->toArray();
        return view('events.material', ['materiais' => $materiais]);
    }
}
