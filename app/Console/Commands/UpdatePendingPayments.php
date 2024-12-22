<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\PaymentController;

class UpdatePendingPayments extends Command
{
    protected $signature = 'payments:update-pending';
    protected $description = 'Update pending payments based on rent_due_date';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $paymentController = new PaymentController();
        $paymentController->checkPendingPayments();
        $this->info('Pending payments updated successfully.');
    }
}
