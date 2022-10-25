<?php

namespace Database\Seeders;

use App\Models\Permission;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'page' => 'Dashboard',
                'action' => 'View',
                'node' => 'dashboard.view',
                'name' => 'View Dashboard',
                'description' => 'Ability to view dashboard page.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Petty Cash',
                'action' => 'View',
                'node' => 'petty-cash.view',
                'name' => 'View Petty Cash',
                'description' => 'Ability to view petty cash list such as petty cash details.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Petty Cash',
                'action' => 'Create',
                'node' => 'petty-cash.create',
                'name' => 'Create Petty Cash',
                'description' => 'Ability to create new petty cash data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Petty Cash',
                'action' => 'Update',
                'node' => 'petty-cash.update',
                'name' => 'Update Petty Cash',
                'description' => 'Ability to update petty cash data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Petty Cash',
                'action' => 'Delete',
                'node' => 'petty-cash.delete',
                'name' => 'Delete Petty Cash',
                'description' => 'Ability to delete petty cash data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Bill',
                'action' => 'View',
                'node' => 'bill.view',
                'name' => 'View Bill',
                'description' => 'Ability to view bill list such as bill details.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Invoice',
                'action' => 'View',
                'node' => 'invoice.view',
                'name' => 'View Invoice',
                'description' => 'Ability to view invoice list such as invoice details.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Sales Invoice',
                'action' => 'View',
                'node' => 'sales-invoice.view',
                'name' => 'View Sales Invoice',
                'description' => 'Ability to view sales invoice list such as sales invoice details.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Sales Invoice',
                'action' => 'Create',
                'node' => 'sales-invoice.create',
                'name' => 'Create Sales Invoice',
                'description' => 'Ability to create new sales invoice data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Sales Invoice',
                'action' => 'Update',
                'node' => 'sales-invoice.update',
                'name' => 'Update Sales Invoice',
                'description' => 'Ability to update sales invoice data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Sales Invoice',
                'action' => 'Delete',
                'node' => 'sales-invoice.delete',
                'name' => 'Delete Sales Invoice',
                'description' => 'Ability to delete sales invoice data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Service Sales Invoice',
                'action' => 'View',
                'node' => 'service-sales-invoice.view',
                'name' => 'View Service Sales Invoice',
                'description' => 'Ability to view service sales invoice list such as service sales invoice details.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Service Sales Invoice',
                'action' => 'Create',
                'node' => 'service-sales-invoice.create',
                'name' => 'Create Service Sales Invoice',
                'description' => 'Ability to create new service sales invoice data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Service Sales Invoice',
                'action' => 'Update',
                'node' => 'service-sales-invoice.update',
                'name' => 'Update Service Sales Invoice',
                'description' => 'Ability to update service sales invoice data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Service Sales Invoice',
                'action' => 'Delete',
                'node' => 'service-sales-invoice.delete',
                'name' => 'Delete Service Sales Invoice',
                'description' => 'Ability to delete service sales invoice data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Purchase Invoice',
                'action' => 'View',
                'node' => 'purchase-invoice.view',
                'name' => 'View Purchase Invoice',
                'description' => 'Ability to view purchase invoice list such as purchase invoice details.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Purchase Invoice',
                'action' => 'Create',
                'node' => 'purchase-invoice.create',
                'name' => 'Create Purchase Invoice',
                'description' => 'Ability to create new purchase invoice data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Purchase Invoice',
                'action' => 'Update',
                'node' => 'purchase-invoice.update',
                'name' => 'Update Purchase Invoice',
                'description' => 'Ability to update purchase invoice data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Purchase Invoice',
                'action' => 'Delete',
                'node' => 'purchase-invoice.delete',
                'name' => 'Delete Purchase Invoice',
                'description' => 'Ability to delete purchase invoice data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Service Purchase Invoice',
                'action' => 'View',
                'node' => 'service-purchase-invoice.view',
                'name' => 'View Service Purchase Invoice',
                'description' => 'Ability to view service purchase invoice list such as service purchase invoice details.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Service Purchase Invoice',
                'action' => 'Create',
                'node' => 'service-purchase-invoice.create',
                'name' => 'Create Service Purchase Invoice',
                'description' => 'Ability to create new service purchase invoice data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Service Purchase Invoice',
                'action' => 'Update',
                'node' => 'service-purchase-invoice.update',
                'name' => 'Update Service Purchase Invoice',
                'description' => 'Ability to update service purchase invoice data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Service Purchase Invoice',
                'action' => 'Delete',
                'node' => 'service-purchase-invoice.delete',
                'name' => 'Delete Service Purchase Invoice',
                'description' => 'Ability to delete service purchase invoice data.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Transaction',
                'action' => 'View',
                'node' => 'transaction.view',
                'name' => 'View Transaction',
                'description' => 'Ability to view transaction list such as transaction details.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        Permission::insert($permissions);
    }
}
