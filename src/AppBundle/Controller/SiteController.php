<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class SiteController extends Controller {

	/**
	*@Route("/site", name="index")
	*/

	public function indexAction(Request $request)
	{
		$nome = $request->request->get ('nome');
		$senha = $request->request->get ('senha');
		if ($nome== 'iza' && $senha== '123')
		{
			return $this->redirectToRoute (
				'home_page' , 
				array ('request' => $request),
				307
				);
		}
		return $this->render('site/index.html.php', array());

		//return new Response ("Página Inicial");
	}

	/**
	*@Route("/site/home", name="home_page")
	*/
	public function homeAction()
	{
		$request = Request::createFromGlobals();
		$nome = $request->request->get('nome');
		$senha = $request->request->get('senha');

		return $this->render('site/home.html.php', array('nome'=>$nome, 'senha'=>$senha));
	}













}


?> 