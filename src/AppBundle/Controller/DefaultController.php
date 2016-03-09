<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        /*
        $result = $this->get('language.pos.tagger')->tag('Licht an.');
        dump($result[0]);
        dump($this->get('command.action.extractor')->extract($result));

        $result = $this->get('language.pos.tagger')->tag('mach das Licht an.');
        dump($result[0]);
        dump($this->get('command.action.extractor')->extract($result));


        $result = $this->get('language.pos.tagger')->tag('tu das Licht anmachen.');
        dump($result[0]);
        dump($this->get('command.action.extractor')->extract($result)[0]);

        $result = $this->get('language.pos.tagger')->tag('bitte schalte das Licht an.');
        dump($result[0]);
        dump($this->get('command.action.extractor')->extract($result)[0]);

        $result = $this->get('language.pos.tagger')->tag('bitte mach das Licht an.');
        dump($result[0]);
        dump($this->get('command.action.extractor')->extract($result)[0]);

        $result = $this->get('language.pos.tagger')->tag('könntest du das Licht anmachen?');
        dump($result[0]);
        dump($this->get('command.action.extractor')->extract($result)[0]);

        $result = $this->get('language.pos.tagger')->tag('könntest du bitte das Licht anmachen?');
        dump($result[0]);
        dump($this->get('command.action.extractor')->extract($result)[0]);

        $result = $this->get('language.pos.tagger')->tag('kannst du bitte das Licht anmachen?');
        dump($result[0]);
        dump($this->get('command.action.extractor')->extract($result)[0]);

        $result = $this->get('language.pos.tagger')->tag('kannst du bitte nicht das Licht anmachen?');
        dump($result[0]);
        dump($this->get('command.action.extractor')->extract($result)[0]);*/

        $result = $this->get('language.pos.tagger')->tag('ich bin unterwegs nachhause und stehe in circa 5 Minuten vor der Tür. kannst du bis dahin das Licht anmachen?');
        dump($result);
        dump($this->get('command.action.extractor')->extract($result));

        return new Response("");
    }
}
