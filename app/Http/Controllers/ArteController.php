<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arte;

class ArteController extends Controller
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
        return view('events.portfolionovo');
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

        return redirect('/admin')->with('msg', 'Arte criada com sucesso!');
    }

    public function show()
    {
        $artes = Arte::all()->toArray();
        return view('events.admin', ['artes' => $artes]);
    }
}
