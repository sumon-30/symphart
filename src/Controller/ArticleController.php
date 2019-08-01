<?php
  namespace App\Controller;
  //use App\Entity\Article;
  use Symfony\Component\HttpFoundation\Response;
  //use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

  class ArticleController {
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index() {
      //$articles= $this->getDoctrine()->getRepository(Article::class)->findAll();
      //return $this->render('articles/index.html.twig', array('articles' => $articles));
       return new Response('<html><body> Hello World!!!!</body></html>') ;
    }
    /**
     * @Route("/lucky/number")
     */
    public function number() {
        //$articles= $this->getDoctrine()->getRepository(Article::class)->findAll();
        //return $this->render('articles/index.html.twig', array('articles' => $articles));
        $number = random_int(0, 100);

        // return $this->render('lucky/number.html.twig', [
        //     'number' => $number,
        // ]);
        return new Response('<html><body>'. $number .'</body></html>') ;
      }

}