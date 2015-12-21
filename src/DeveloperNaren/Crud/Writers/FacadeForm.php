<?php


namespace DeveloperNaren\Crud\Writers;
/**
 * Created by PhpStorm.
 * User: anons
 * Date: 12/17/15
 * Time: 4:07 PM
 */

use Illuminate\Support\Facades\Facade;

class FacadeForm extends Facade {


    protected static function getFacadeAccessor() { return 'forms'; }

}