<?php

namespace Ai\LanguageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;

class LanguageController extends Controller
{
    public function indexAction($name)
    {
        return new Response("");
    }
}
