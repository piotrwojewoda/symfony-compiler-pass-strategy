<?php

namespace App\Controller;

use App\Service\Conversion;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(Conversion $conversion)
    {
        $data = [
            'test' => 123,
            'lalala' => 'blabla',
            'qwe' => [
                'sfd' => 'gddfgdfgg'
            ],
            'dfgdfg' => 'fghgfhghhg'
        ];
        $result = $conversion->convert($data, 'CSV');
        dump($result);
        return $this->render('main/index.html.twig');
    }
}
