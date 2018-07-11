<?php

namespace App\Services;

use Illuminate\Support\Collection;
use App\Entity\Wallet;
use App\Requests\CreateWalletRequest;

class WalletService implements WalletServiceInterface
{
    public function findByUser(int $userId): ?Wallet
    {
        $wallet = Wallet::where('user_id', $userId)->first();

        return $wallet ?? null;
    }

    public function create(CreateWalletRequest $request): Wallet
    {

    }

    public function findCurrencies(int $walletId): Collection
    {

    }
}
