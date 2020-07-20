<?php

namespace App\Http\Controllers;

use App\Commande;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all = Commande::all()->count();
        $ready = Commande::where(['stat' => true,'active' => true])->count();
        $noready = Commande::where(['stat' => false,'active' => true])->count();
        $deleted = Commande::where('active',false)->count();
        return view('home', compact('all','ready','noready','deleted'));
    }

    /**
     * Tous les commandes
     *
     * @return void
     */
    public function all()
    {
        $commandes = Commande::paginate(10);
        // dd($commandes);
        return view('admin.all', compact('commandes'));
    }

    /**
     * Commande en deja etudier
     *
     * @return void
     */
    public function ready()
    {
        $commandes = Commande::where(['stat' => true, 'active' => true])->paginate(10);
        // dd($commandes);
        return view('admin.ready', compact('commandes'));
    }

    /**
     * Commande en cours
     *
     * @return void
     */
    public function noready()
    {
        $commandes = Commande::where(['stat' => false,'active' => true])->paginate(10);
        // dd($commandes);
        return view('admin.noready', compact('commandes'));
    }

    /**
     * Commandes rejetés
     *
     * @return void
     */
    public function deleted()
    {
        $commandes = Commande::where('active',false)->paginate(10);
        // dd($commandes);
        return view('admin.deleted', compact('commandes'));
    }
}
