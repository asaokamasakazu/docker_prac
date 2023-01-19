<?php
declare(strict_types=1);

namespace App\Repositories\Contact;

use App\Models\Contact;

use Illuminate\Support\Collection;

/**
 * Contact情報の操作を行うRepositoryです
 */
interface ContactRepositoryInterface
{
    /**
     * お問い合わせを全件取得します。
     * @return collection 取得したお問い合わせ
     */
    function getAll(): Collection;

    /**
     * リクエストからお問い合わせをインスタンス化します。
     * @return Contact 生成したインスタンス
     */
    function new(FormRequest $request): Contact;

    /**
     * リクエストからお問い合わせを登録します。
     * @return Contact 登録したお問い合わせ
     */
    function create(FormRequest $request): Contact;
}
