<?php

namespace Apsl\Inf03\Webdev;

use Apsl\Config\Config;
use Apsl\Html\Template;
use Apsl\Http\Request;
use Apsl\Http\Response;
use Apsl\Session\Session;


class Application
{
    public function run(): void
    {
        $request = new Request();
        $config = new Config('config/routing.php');
        $routing = $config->getValue('routing');
        $uri = $request->getUri(iwithQuaeryString:false);
        $pageClass = (isset($routing[$uri]) ? $routing[$uri] : $config->getValue('404'));
        $response = new Response();
        if($request->getUri(iwithQuaeryString: false) === '/'){
            $template = new Template('templates/index.html.php');
            $responce = new Template($template->render());
            $page = new $routing[$uri]();
            
            $out = $template->render([
                'title' => 'Hello'
            ]);
            $response->setBody($out);
        }
        elseif ($request->getUri(iwithQuaeryString:false) === 'contact'){

        }
        else {
            $responce = new Response();
            $responce->setStatusCode(Response::STATUS_CODE_404_NOT_FOUND);
       }
        $response = new Response();
        $response->addHeader(Response::HEADER_CONTENT_TYPE, 'text/html');

        $session = new Session();

        $template = new Template('templates/index.html.php');
        $out = $template->render([
            'title' => 'Hello!'
        ]);

        // TODO: hide login form when user is logged in, display log out which will destroy session

        $response->setBody($out);

        $response->send();
    }
}
