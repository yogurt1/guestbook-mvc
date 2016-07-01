<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extend Model {

  protected $fillable = ['email', 'name', 'text', 'file'];

}
