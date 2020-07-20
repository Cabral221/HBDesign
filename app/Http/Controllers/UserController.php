<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }


    public function show(Product $product)
    {
        return view('show', compact('product'));
    }


    public function commande(Request $request, Product $product)
    {
        // dd($request->all());
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'number' => 'required|numeric|phone:AF,ZA,AX,AL,DZ,DE,AD,AO,AI,AQ,AG,AR,AM,AW,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BQ,BA,BW,BV,BR,BN,BF,BI,KY,KH,CM,CA,CV,CF,CL,CN,CX,CY,CC,CO,KM,CG,CD,CK,KR,KP,CR,CI,HR,CU,CW,DK,DJ,DO,DM,EG,SV,AE,EC,ER,ES,EE,US,ET,FK,FO,FJ,FI,FR,GA,GM,GE,GS,GH,GI,GR,GD,GL,GP,GU,GT,GG,GN,GW,GQ,GY,GF,HT,HM,HN,HK,HU,IM,UM,VG,VI,IN,ID,IR,IQ,IE,IS,IL,IT,JM,JP,JE,JO,KZ,KE,KG,KI,KW,LA,LS,LV,LB,LR,LY,LI,LT,LU,MO,MK,MG,MY,MW,MV,ML,MT,MP,MA,MH,MQ,MU,MR,YT,MX,FM,MD,MC,MN,ME,MS,MZ,MM,NA,NR,NP,NI,NE,NG,NUZ,IO,OM,UG,UZ,PK,PW,PS,PA,PG,PY,NL,PE,PH,PN,PL,PF,PR,PT,QA,RE,RO,GB,RU,RW,EH,BL,KN,SM,MF,SX,PM,VA,VC,SH,LC,SB,WS,AS,ST,SN,RS,SC,SL,SG,SK,SI,SO,SD,SS,LK,SE,CH,SR,SJ,SZ,SY,TJ,TW,TZ,TD,CZ,TF,TH,TL,TG,TK,TO,TT,TN,TM,TC,TR,TV,UA,UY,VU,VE,VN,WF,YE,ZM,ZW',
            'pointer' => 'required|numeric|min:15|max:45',
            'amount' => 'required|min:1',
        ]);
        
        // dd($request->all(), $product);
        $product->commandes()->create([
            'firstname' => $request->first_name,
            'lastname' => $request->last_name,
            'number' => $request->number,
            'pointer' => $request->pointer,
            'amount' => $request->amount,
        ]);

        return redirect()
                ->route('admin.product.show', $product)
                ->with('success','Votre commande a été enregistré avec succés ! Notre service commerciale vous rappelera dans les plus bref delais pour confirmer la commande.');
    }

}
