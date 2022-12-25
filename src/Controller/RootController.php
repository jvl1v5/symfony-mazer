<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RootController extends AbstractController
{
    #[Route('/', name: 'app_root')]
    public function index(): Response
    {
        return $this->render('root/index.html.twig', [
            'controller_name' => 'RootController',
	        'title' => 'Index',
        ]);
    }

	#[Route('/menu1_submenu1', name: 'app_menu1.submenu1')]
	public function menu1Submenu1(): Response
	{
		return $this->render('root/index.html.twig', [
			'controller_name' => 'RootController',
			'title' => 'Menu 1 - Submenu 1',
			'content' => '<a class="btn btn-info" href="/menu1_submenu1_new">New</a>'
		]);
	}

	#[Route('/menu1_submenu1_new', name: 'app_menu1.submenu1.new')]
	public function menu1Submenu1New(): Response
	{
		return $this->render('root/index.html.twig', [
			'controller_name' => 'RootController',
			'title' => 'Menu 1 - Submenu 1 - New',
		]);
	}

	#[Route('/menu2', name: 'app_menu2')]
	public function menu2(): Response
	{
		return $this->render('root/index.html.twig', [
			'controller_name' => 'RootController',
			'title' => 'Menu 2',
		]);
	}

	#[Route('/menu3_submenu1', name: 'app_menu3.submenu1')]
	public function menu3Submenu1(): Response
	{
		return $this->render('root/index.html.twig', [
			'controller_name' => 'RootController',
			'title' => 'Menu 3 - Submenu 1',
		]);
	}

	#[Route('/menu3_submenu2', name: 'app_menu3.submenu2')]
	public function menu3Submenu2(): Response
	{
		return $this->render('root/index.html.twig', [
			'controller_name' => 'RootController',
			'title' => 'Menu 3 - Submenu 2',
		]);
	}

	#[Route('/menu3_submenu3', name: 'app_menu3.submenu3')]
	public function menu3Submenu3(): Response
	{
		return $this->render('root/index.html.twig', [
			'controller_name' => 'RootController',
			'title' => 'Menu 3 - Submenu 3',
		]);
	}


}
