<?php
namespace App\Backend;

use \OCFram\Application;

class BackendApplication extends Application 
{
  public function __construct()
  {
    parent::__construct();

    $this->name = 'Backend';
  }

  public function run()
  {
    if ($this->user->isAuthenticated())
    {
      

      if($_SERVER['REQUEST_URI']=='/admin/deconnexion')
      {
        session_destroy();

        header('Location: '.'.'); 
        // exit;
      }
      else
      {
        $controller = $this->getController();
      }
    }
    else
    {
      $controller = new Modules\Connexion\ConnexionController($this, 'Connexion', 'index');
    }

    if($_SERVER['REQUEST_URI']=='/admin/deconnexion')
    {

    }
    else
    {
      $controller->execute();

      $this->httpResponse->setPage($controller->page());
      $this->httpResponse->send();
    }

    
  }
}
