<?php
declare(strict_types=1);

namespace App\Repositories\Contact;

use App\Models\Contact;

use Illuminate\Support\Collection;

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
    public function getAll(): Collection
    {
        return $this->contact->with('department')->get();
    }

    /**
     * @inheritDoc
     */
    public function new(FormRequest $request): Contact
    {
        return $this->contact->newInstance($request->all());
    }

    /**
     * @inheritDoc
     */
    public function create(FormRequest $request): Contact
    {
        return $this->contact->create($request->all());
    }
}
