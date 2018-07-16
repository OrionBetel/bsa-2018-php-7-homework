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
        $userId = $request->getUserId();

        if (Wallet::where('user_id', $userId)->first()) {
            throw new \LogicException('The user already has a wallet.');
        }
        
        $wallet = new Wallet;
        
        $wallet->user_id = $userId;

        $wallet->save();

        return $wallet;
    }

    public function findCurrencies(int $walletId): Collection
    {
        $currencies = [];
        
        $money = Wallet::find($walletId)->money;

        foreach ($money as $item) {
            $currencies[] = $item->currency;
        }

        return collect($currencies);
    }
}
