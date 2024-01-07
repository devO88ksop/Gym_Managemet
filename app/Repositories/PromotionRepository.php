<?php
namespace App\Repositories;

use App\Models\Promotions;
use App\Interfaces\PromotionInterface;

class PromotionRepository implements PromotionInterface{

    public function all()
    {
        // dd('Hello');
        return Promotions::all();

    }
    public function store($request)
    {
        // dd($request->all());
        $this->productValidationCheck($request);
        $data = [
            'name'        => $request->name,
            'description' => $request->description];
        Promotions::create($data);

    }
    public function findById($id){
        return Promotions::findOrFail($id);

    }
    // validation Check
    private function productValidationCheck($request){

        return $request ->validate([
              'name'=> 'required',
              'description' => 'required',
            //   'image' => 'mimes:jpg,jpeg,png',

         ]);

      }

}
