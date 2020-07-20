<?php

namespace App\Http\Controllers;

use App\Commande;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show($id) 
    {
        $commande = Commande::find($id);
        return view('admin.show', compact('commande'));
    }

    // Marquer une commande
    public function handleReady($id)
    {
        $commande = Commande::find($id);
        // dd($commande);
        $commande->update(['stat' => true]);
        $commande->save();
        return redirect()
                ->route('admin.product.show',$commande->id)
                ->with('success', 'La commande a été validé avec succés !');
    }

    public function handleDeleted($id)
    {
        $commande = Commande::find($id);
        $commande->update(['active' => false,'stat' => false]);
        // dd($commande);
        $commande->save();
        return redirect()->route('home')->with('danger','La commande a été rejeté avec success !');
    }
}
