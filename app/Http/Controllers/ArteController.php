<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arte;
use App\Models\Material;
use App\Models\ArtesMateriais;

class ArteController extends Controller
{
    //
    // public function index()
    // {

        // $search = request('search');

        // if ($search) {

        //     $events = Event::where([
        //         ['title', 'like', '%' . $search . '%']
        //     ])->get();
        // } else {
        //     $events = Event::all();
        // }

        // return view('welcome', ['events' => $events, 'search' => $search]);
    // }

    public function create()
    {
        $materiais = Material::all()->toArray();
        return view('events.portfolionovo', ['materiais' => $materiais]);
    }

    public function insert(Request $request)
    {

        $arte = new Arte;

        $arte->tituloArte = $request->tituloArte;
        $arte->valorArte = $request->valorArte;
        $arte->statusArte = $request->statusArte;
        $arte->envernizadoArte = $request->envernizadoArte;
        $arte->emolduradoArte = $request->emolduradoArte;
        $arte->envioArte = date('Y-m-d H:i:s');

        // Image Upload
        if ($request->hasFile('imagemArte') && $request->file('imagemArte')->isValid()) {

            $requestImage = $request->imagemArte;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/artes'), $imageName);

            $arte->imagemArte = $imageName;
        }

        $arte->save();

        if ($request->has('materiais')) {
            $materiais = $request->materiais;

            foreach ($materiais as $idMaterial) {
                ArtesMateriais::insert([
                    'idArte' => $arte->idArte,
                    'idMaterial' => $idMaterial
                ]);
            }
        }

        return redirect('/admin')->with('msg', 'Arte criada com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $arte = Arte::find($id);

        if (!$arte) {
            return redirect('/admin')->with('error', 'Arte não encontrada.');
        }

        $arte->tituloArte = $request->tituloArte;
        $arte->valorArte = $request->valorArte;
        $arte->statusArte = $request->statusArte;
        $arte->envernizadoArte = $request->envernizadoArte;
        $arte->emolduradoArte = $request->emolduradoArte;

        if ($request->hasFile('imagemArte') && $request->file('imagemArte')->isValid()) {
            $requestImage = $request->imagemArte;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/artes'), $imageName);
            $arte->imagemArte = $imageName;
        }

        $arte->save();

        if ($request->has('materiais')) {
            $materiais = $request->materiais;

            ArtesMateriais::where('idArte', $arte->idArte)->delete();

            foreach ($materiais as $idMaterial) {
                ArtesMateriais::create([
                    'idArte' => $arte->idArte,
                    'idMaterial' => $idMaterial
                ]);
            }
        } else {
            ArtesMateriais::where('idArte', $arte->idArte)->delete();
        }

        return redirect('/admin')->with('msg', 'Arte atualizada com sucesso!');
    }

    public function delete($id)
    {
        $arte = Arte::find($id);

        if (!$arte) {
            return redirect('/admin')->with('error', 'Arte não encontrada.');
        }

        ArtesMateriais::where('idArte', $arte->idArte)->delete();

        $arte->delete();

        return redirect('/admin')->with('msg', 'Arte excluída com sucesso!');
    }

    public function edit($id)
    {
        $arte = Arte::findOrFail($id);
        $artesMateriais = ArtesMateriais::where('idArte', $id)->get()->toArray();
        $materiais = Material::all()->toArray();

        return view('events.portfolioeditar', ['arte' => $arte, 'artesMateriais' => $artesMateriais, 'materiais' => $materiais]);
    }

    public function show()
    {
        $artes = Arte::all()->toArray();
        return view('events.admin', ['artes' => $artes]);
    }

    public function index()
    {
        $artes = Arte::all()->toArray();
        $artesMateriais = ArtesMateriais::all()->toArray();
        $materiais = Material::all()->toArray();
        return view('welcome', ['artes' => $artes, 'materiais' => $materiais, 'artesMateriais' => $artesMateriais]);
    }
}
