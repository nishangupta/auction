<?php

namespace App\Http\Controllers\Web\BankAccount;

use App\Http\Controllers\Controller;
use App\Models\User\BankAccount;
use Illuminate\Http\RedirectResponse;

class ChangeAdminBankAccountStatusController extends Controller
{
    public function change(BankAccount $bankAccount): RedirectResponse
    {
        if (!is_null($bankAccount->user_id)) {
            return redirect()->back()->with(RESPONSE_TYPE_ERROR, __('Invalid system bank account id. Please try again.'));
        }
        if ($bankAccount->toggleStatus()) {
            return redirect()->back()->with(RESPONSE_TYPE_SUCCESS, __('Successfully system bank account status changed.'));
        }
        return redirect()->back()->with(RESPONSE_TYPE_ERROR, __('Failed to change status. Please try again.'));
    }
}
