<?php

namespace App\Services;

use App\Repositories\Interfaces\UserAttributesRepositoryInterface;

class UserAttributesService
{
    protected $userAttributesRepository;

    public function __construct(UserAttributesRepositoryInterface $userAttributesRepository)
    {
        $this->userAttributesRepository = $userAttributesRepository;
    }

    public function setAttributes($image, $user_type, $user_id)
    {
        $data = [
            'image' => $image,
            'user_type' => $user_type,
            'user_id' => $user_id
        ];
        $result = $this->userAttributesRepository->create($data);
        return $result;
    }

    public function updateAvatar($image, $id)
    {
        $this->userAttributesRepository->update([
            'image' => $image
        ], $id);
    }
}
