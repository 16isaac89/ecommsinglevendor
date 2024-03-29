<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'product_create',
            ],
            [
                'id'    => 29,
                'title' => 'product_edit',
            ],
            [
                'id'    => 30,
                'title' => 'product_show',
            ],
            [
                'id'    => 31,
                'title' => 'product_delete',
            ],
            [
                'id'    => 32,
                'title' => 'product_access',
            ],
            [
                'id'    => 33,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 34,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 35,
                'title' => 'product_variation_create',
            ],
            [
                'id'    => 36,
                'title' => 'product_variation_edit',
            ],
            [
                'id'    => 37,
                'title' => 'product_variation_show',
            ],
            [
                'id'    => 38,
                'title' => 'product_variation_delete',
            ],
            [
                'id'    => 39,
                'title' => 'product_variation_access',
            ],
            [
                'id'    => 40,
                'title' => 'variation_create',
            ],
            [
                'id'    => 41,
                'title' => 'variation_edit',
            ],
            [
                'id'    => 42,
                'title' => 'variation_show',
            ],
            [
                'id'    => 43,
                'title' => 'variation_delete',
            ],
            [
                'id'    => 44,
                'title' => 'variation_access',
            ],
            [
                'id'    => 45,
                'title' => 'subcategory_create',
            ],
            [
                'id'    => 46,
                'title' => 'subcategory_edit',
            ],
            [
                'id'    => 47,
                'title' => 'subcategory_show',
            ],
            [
                'id'    => 48,
                'title' => 'subcategory_delete',
            ],
            [
                'id'    => 49,
                'title' => 'subcategory_access',
            ],
            [
                'id'    => 50,
                'title' => 'sub_sub_category_create',
            ],
            [
                'id'    => 51,
                'title' => 'sub_sub_category_edit',
            ],
            [
                'id'    => 52,
                'title' => 'sub_sub_category_show',
            ],
            [
                'id'    => 53,
                'title' => 'sub_sub_category_delete',
            ],
            [
                'id'    => 54,
                'title' => 'sub_sub_category_access',
            ],
            [
                'id'    => 55,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 56,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 57,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 58,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 59,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
