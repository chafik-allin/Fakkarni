<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Client;

class PageController extends Controller
{
	private $wilayas = ['Adrar', 'Chlef', "Laghouat", 'Oum El Bouaghi', 'Batna', 'Béjaia', 'Biskra', 'Bechar', 'Blida', 'Bouira', 'Tamanrasset', 'Tebessa','Tlemcen', 'Tiaret', 'Tizi Ouzou', 'Alger', 'Djelfa', 'Jijel', 'Setif', 'Saida', 'Skikda', 'Sidi Bel Abbas', 'Annaba', 'Guelma',
	'Constantine', 'Médéa','Mostaganem', "M'Sila", 'Mascara', 'Ouargla', 'Oran', 'El Bayadh', 'Illizi', 'Bordj Bou Arreridj', 'Boumerdes', 'El Taref', 'Tindouf', 'Tissemsilt', 'EL Oued', 'Khenchla', 'Souk Ahras', 'Tipaza', 'Mila', 'Ain Defla', 'Naama', 'Ain Temouchent', 'Ghardaia', 'Relizane'];
    
    public function index()
    {
    	return view('index')->withWilayas($this->wilayas);
    }

    public function Post(PostRequest $request )
    {
    	Client::create($request->all());
    	return redirect('/#inscription')->withSuccess('Votre inscription a été effectué avec succèss');
    }

}
