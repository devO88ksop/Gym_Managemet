<?php

namespace App\Repositories;

use App\Models\Promotions;
use App\Interfaces\PromotionInterface;

class PromotionRepository implements PromotionInterface
{

    public function all()
    {
        return Promotions::paginate(3);
    }
    public function store($request)
    {
        // dd($request->all());
        $this->productValidationCheck($request);
        $data = [
            'name'        => $request->name,
            'description' => $request->description
        ];
        Promotions::create($data);
    }
    public function findById($id)
    {
        return Promotions::where('promotion_id', $id)->first();
    }
    public function update($id)
    {
        $data = [
            'name'        => request()->name,
            'description' => request()->description
        ];
        Promotions::where('promotion_id', $id)->update($data);
    }

    public function destroy($id)
    {
        // dd($id);
        Promotions::where('promotion_id', $id)->delete();

    }

    // validation Check
    private function productValidationCheck($request)
    {

        return $request->validate([
            'name' => 'required | max:255 | unique:promotions',
            'description' => 'required | max:255 ',
            //   'image' => 'mimes:jpg,jpeg,png',

        ]);
    }
}
