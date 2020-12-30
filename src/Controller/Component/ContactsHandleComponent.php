<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Cache\Cache;
use Cake\ORM\TableRegistry;
use Cake\Controller\Component\Controller\Component\PaginatorComponent;

class ContactsHandleComponent extends Component
{
  public $components = ['Paginator'];

  public function getAll() {

  }
}
