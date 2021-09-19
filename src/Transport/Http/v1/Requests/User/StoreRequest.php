<?php

namespace Yu2ry\Clean\Transport\Http\v1\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRequest
 * @package Yu2ry\Clean\Transport\Http\v1\Requests\User
 */
class StoreRequest extends FormRequest
{

    private const FIELD_EMAIL = 'email';
    private const FIELD_NAME = 'name';
    private const FIELD_PASSWORD = 'password';

    /**
     * @return false
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            self::FIELD_EMAIL => [
                'required',
                'string',
                'email'
            ],
            self::FIELD_NAME => [
                'required',
                'string',
                'between:1,20'
            ],
            self::FIELD_PASSWORD => [
                'required',
                'string',
            ]
        ];
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->request->get(self::FIELD_EMAIL);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->request->get(self::FIELD_NAME);
    }

    /**
     * @return string
     */
    public function getUserPassword(): string
    {
        return $this->request->get(self::FIELD_PASSWORD);
    }
}
