<?php

namespace App\Repositories\Contact;

use App\Models\Contact;

/**
 * Contact情報の操作を行うRepositoryです
 */
interface ContactRepositoryInterface
{
    /**
     * お問い合わせを全件取得します。
     * @return object 取得したお問い合わせ
     */
    function getAll(): object;

    /**
     * リクエストからお問い合わせをインスタンス化します。
     * @return Contact 生成したインスタンス
     */
    function new($request): Contact;

    /**
     * リクエストからお問い合わせを登録します。
     * @return Contact 登録したお問い合わせ
     */
    function create($request): Contact;
}
