<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adv;

class AdvController extends Controller
{
    public function index()
    {
      return Adv::all();
    }

    public function search(Request $request, $price_from = false, $price_to = false)
    {
      $bodyRequest = $request->all();
      $name = false;
      if (isset($bodyRequest['name'])) {
        $name = $bodyRequest['name'];
        unset($bodyRequest['name']);
      }
      $adv = Adv::where($bodyRequest);
      if ($price_from !== false && $price_to !==false) {
        $adv->where('price', '>=', (int)$price_from);
        $adv->Where('price', '<=', (int)$price_to);
      }
      if ($name) {
        $adv->where('name', 'like', '%'.$name.'%');
      }
      return $adv->get();
    }
}
