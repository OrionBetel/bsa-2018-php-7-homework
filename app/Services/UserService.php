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
        return User::find($id);
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
        // Also this statement deletes user's wallet(s).
        // It's specified in wallet table migration.
    }
}
