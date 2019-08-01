<?php
  namespace App\Controller;
  //use App\Entity\Article;
  use Symfony\Component\HttpFoundation\Response;
  //use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;

  class ArticleController extends Controller{
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index() {
      //$articles= $this->getDoctrine()->getRepository(Article::class)->findAll();
      
      // return new Response('<html><body> Hello World!!!!</body></html>') ;
      return $this->render('articles/index.html.twig');
    }
    /**
     * @Route("/lucky/number")
     */
    public function number() {
        $number = random_int(0, 100);

        // return new Response('<html><body>'. $number .'</body></html>') ;
        return $this->render('articles/luckynumber.html.twig', [
                'number' => $number,
            ]);
      }

}