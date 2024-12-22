<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tenant;
use App\Models\Payment;
use Carbon\Carbon;

class CheckMonthlyRent extends Command
{
    protected $signature = 'rent:check-monthly';
    protected $description = 'Check if tenants have completed a month since last rent payment and create payment entries if needed.';

    public function handle()
    {
        $tenants = Tenant::all();
        foreach ($tenants as $tenant) {
            if ($tenant->last_paid_date) {
                $nextDueDate = Carbon::parse($tenant->last_paid_date)->addMonth();
                if (Carbon::now()->greaterThanOrEqualTo($nextDueDate)) {
                    // Calculate the month for payment record
                    $paymentMonth = $nextDueDate->format('F Y');

                    // Create payment record
                    Payment::create([
                        'tenant_id' => $tenant->id,
                        'amount' => $this->calculateMonthlyRent($tenant),
                        'payment_date' => now(),
                        'month' => $paymentMonth,
                    ]);

                    // Update last_paid_date to this payment date
                    $tenant->update(['last_paid_date' => now()]);

                    $this->info("Payment created for Tenant ID: {$tenant->id} for month: {$paymentMonth}");
                }
            }
        }

        $this->info('Monthly rent check completed.');
        return 0;
    }

    private function calculateMonthlyRent(Tenant $tenant)
    {
        // Define monthly rent logic here, e.g., return a fixed amount or custom logic
        return 1000.00; // Example: Fixed monthly rent amount
    }
}
