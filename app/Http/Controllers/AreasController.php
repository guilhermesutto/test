<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Area;


class AreasController extends Controller
{

    public function getIndex(){
        return parent::getIndex();
    }

    public function getForm($id = false){
        return parent::getForm();
    }
 
}