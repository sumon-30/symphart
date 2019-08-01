This is a symfony project.
Symfony 4.3.3

## How to install symfony with xampp

1. create symfonu project from git
    -go to xampp/http
    -open git bash
	-composer create-project symfony/skeleton symphart(projectName)

Call project 127.0.0.1/symphart, we can see file directory
And then,when we call 127.0.0.1/symphart/public, we can see "Welcome to Symfony 4.3.3" page

2. create virtual host
    C:\xampp\apache\conf\extra
    Add this 
    <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/symphart/public"
        ServerName symphart.test
    </VirtualHost>

    -add this at C:\Windows\System32\drivers\etc
    127.0.0.1 symphart.test
When we call symphart.test , we can see "Welcome to Symfony 4.3.3" page

## In the project
- create .htaccess file under public folder

## How to create a page

- create ArticleController under controller folder

- create route in routes.yaml

   index:
   path: /
   controller: App\Controller\ArticleController::index

## Annotation Routes
1. run composer require annotations

2. define this in controller
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    
3. add your route directly above the controller
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        // this looks exactly the same
    }

http://localhost:8000/lucky/number will work exactly

4. To get a list of all of the routes in your system
run php bin/console debug:router

## Rendering a Template

1. run composer require twig

2. In controller 
Declare use Symfony\Bundle\FrameworkBundle\Controller\Controller;
And then, extends Controller

return $this->render('articles/index.html.twig');

3. Create Template under templates folder