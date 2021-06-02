<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    //
    public function getQuote(){
        /*   $quote = quote::all()->random(1)[0]->quote;
          return view("/", ["quote=>$quote"]);
   */
           return quote::all()->random(1);
      }
}
