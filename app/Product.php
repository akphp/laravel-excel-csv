<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
   public $fillable = [
       'strProductName' ,

       'strProductName' ,
       'strProductDesc' ,
       'strProductCode' ,
       'dtmAdded' ,
       'dtmDiscontinued' ,
       'stmTimestamp' ,
   ];
}