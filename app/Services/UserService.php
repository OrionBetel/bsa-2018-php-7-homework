<?php

namespace App\Services;

use Illuminate\Support\Collection;
use App\Entity\User;
use App\Requests\SaveUserRequest;

class UserService implements UserServiceInterface
{
    public function findAll(): Collection
    {
        return User::all();
    }

    public function findById(int $id): ?User
    {
        $user = User::find($id);

        return $user ?? null;
    }

    public function save(SaveUserRequest $request): User
    {
        $user = User::updateOrCreate(
            ['id' => $request->getId()],
            ['name' => $request->getName(), 'email' => $request->getEmail()]
        );

        return $user;
    }

    public function delete(int $id): void
    {
        User::destroy($id);
    }
}
