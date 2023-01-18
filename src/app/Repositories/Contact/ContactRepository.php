<?php

namespace App\Repositories\Contact;

use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    protected $contact;

    /**
    * @param object $contact
    */

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @inheritDoc
     */
    public function getAll(): object
    {
        return $this->contact->all();
    }

    /**
     * @inheritDoc
     */
    public function new($request): Contact
    {
        return $this->contact->newInstance($request->all());
    }

    /**
     * @inheritDoc
     */
    public function create($request): Contact
    {
        return $this->contact->create($request->all());
    }
}
