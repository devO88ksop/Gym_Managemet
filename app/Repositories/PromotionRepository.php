<?php
namespace App\Repositories;

use App\Models\promotions;
use GuzzleHttp\Psr7\Request;
use App\Interfaces\PromotionInterface;

class PromotionRepository implements PromotionInterface{

    public function all()
    {
        return promotions::all();

    }

}
