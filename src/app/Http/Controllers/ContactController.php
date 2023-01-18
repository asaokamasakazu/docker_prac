<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

use App\Repositories\Contact\ContactRepositoryInterface;
use App\Repositories\Department\DepartmentRepositoryInterface;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $ContactRepository;
    protected $DepartmentRepository;

    public function __construct(
        ContactRepositoryInterface $contactRepository,
        DepartmentRepositoryInterface $departmentRepository
    )
    {
        $this->ContactRepository = $contactRepository;
        $this->DepartmentRepository = $departmentRepository;
    }

    /**
     * お問い合わせ一覧ページ用のアクションです。
     */
    public function index()
    {
        $contacts = $this->ContactRepository->getAll();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * お問い合わせ作成ページ用のアクションです。
     */
    public function create()
    {
        $departments = $this->DepartmentRepository->getAll();
        return view('contacts.create', compact('departments'));
    }

    /**
     * お問い合わせ確認ページ用のアクションです。
     */
    public function confirm(ContactRequest $request)
    {
        $contact = $this->ContactRepository->new($request);
        return view('contacts.confirm', compact('contact'));
    }

    /**
     * お問い合わせ登録用のアクションです。
     * 確認画面で修正するボタンを押した場合は、inputの値を引き継いで作成ページにリダイレクトします。
     */
    public function store(ContactRequest $request)
    {
        if($request->input('back') == 'back') {
            return redirect()->route('contacts.create')->withInput();
        }

        $this->ContactRepository->create($request);
        return view('contacts.complete');
    }
}
