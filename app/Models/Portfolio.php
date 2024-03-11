<?php

namespace App\Models;

use App\Models\PortfolioCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
  use HasFactory;
  protected $guarded = [];

  public function category(){
    return $this->belongsTo(PortfolioCategory::class,'category_id','id');
  }
}
