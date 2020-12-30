<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 *
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactsController extends AppController
{
    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['index', 'indexExt', 'create']);
    }

    const LIMIT = 5000;

    public function index() {
        $this->paginate = [
            'contain' => ['Companies'],
        ];
        $totalContacts = [];
        $hasMore = true;
        $page = 1;
        $contacts;
        while ($hasMore) {
            $this->paginate = [
                'maxLimit' => self::LIMIT,
                'limit' => self::LIMIT,
                'page' => $page
            ];
            $contacts = $this->paginate($this->Contacts)->toArray();
            $totalContacts = array_merge($totalContacts, $contacts);
            if (sizeof($contacts) < self::LIMIT) $hasMore = false;
            else $page++;
        }
        $this->responseWithJson($totalContacts);
    }

    public function indexExt() {
        $totalContactExts = $this->Contacts->getContactExtDetail()->toArray();
        $hasMore = true;
        $page = 1;
        $contacts;
        while ($hasMore) {
            $this->paginate = [
                'maxLimit' => self::LIMIT,
                'limit' => self::LIMIT,
                'page' => $page
            ];
            $contacts = $this->paginate($this->Contacts->getContactExtDetail())->toArray();
            $totalContactExts = array_merge($totalContactExts, $contacts);
            if (sizeof($contacts) < self::LIMIT) $hasMore = false;
            else $page++;
        }
        $this->responseWithJson($totalContactExts);
    }

    public function create() {
        $data =  $this->request->getData();
        // business validate here
        $contact = $this->Contacts->newEntity();
        $contact = $this->Contacts->patchEntity($contact, $data);
        $maxId = $this->Contacts->getMaxId();
        // due to id is not set to auto increase in db
        $contact->id = $maxId ? $maxId + 1: 1;
        $this->responseWithJson($this->Contacts->save($contact));
    }

}
