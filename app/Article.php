<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['title','content'];
  
  /**
   * Get the user that owns the article.
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  # 获取本文所属的分档
  public function catalog()
  {
    return $this->belongsTo(Catalog::class);
  }
}
