<?php
namespace Apsl\Controller;

use Apsl\Http\Request;
use Apsl\Http\Response;

abstract class Page{
    protected Request $_REQUEST;
    protected Response $response;
    abstract public function createRespose():void; 


    public function run(): void {


}

}