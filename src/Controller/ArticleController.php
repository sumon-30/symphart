<?php
  namespace App\Controller;
  //use App\Entity\Article;
  use Symfony\Component\HttpFoundation\Response;
  //use Symfony\Component\HttpFoundation\Request;
  //use Symfony\Component\Routing\Annotation\Route;

  class ArticleController {
    /**
     * @Route("/", name="article_list")
     * @Method({"GET"})
     */
    public function index() {
      //$articles= $this->getDoctrine()->getRepository(Article::class)->findAll();
      //return $this->render('articles/index.html.twig', array('articles' => $articles));
       return new Response('<html><body> Hello</body></html>') ;
    }

}