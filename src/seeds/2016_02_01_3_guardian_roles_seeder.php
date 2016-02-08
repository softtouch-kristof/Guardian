<?php

namespace Database\Seeds;

use Cloudoki\Guardian\Role;
use Cloudoki\Guardian\RoleToken;
use Illuminate\Database\Seeder;

class GuardianRolesSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // The Roles
        $admin = Role::create([
            'name'          =>  'Administrator',
            'description'   =>  'All rights are granted'
        ]);

        $editor = Role::create([
            'name'          =>  'Editor',
            'description'   =>  'Most rights are granted, except closing'
        ]);

        $intern = Role::create([
            'name'          =>  'Intern',
            'description'   =>  'Some rights are granted'
        ]);

        $guest = Role::create([
            'name'          =>  'Guest',
            'description'   =>  'Only limited view rights are granted'
        ]);

        // The Tokens
        // prove 4 example tokens, in a way Guest has 1, and admin 4
        $adminView = RoleToken::create([
            "slug"          =>  "admin:view",
            "description"   =>  "Admin content"
        ]);

        $admin = Role::find(1);
        $admin->roletokens()->save($adminView);

        $noteView = RoleToken::create([
            "slug"          =>  "note:view",
            "description"   =>  "Note view content"
        ]);

        $admin->roletokens()->save($noteView);

        $editor = Role::find(2);
        $editor->roletokens()->save($noteView);

        $inter = Role::find(3);
        $inter->roletokens()->save($noteView);

        $guest = Role::find(4);
        $guest->roletokens()->save($noteView);


        $noteEdit = RoleToken::create([
            "slug"          =>  "note:edit",
            "description"   =>  "Edit notes view"
        ]);

        $admin->roletokens()->save($noteEdit);
        $editor->roletokens()->save($noteEdit);
        $inter->roletokens()->save($noteEdit);

        $noteCreate = RoleToken::create([
            "slug"          =>  "note:create",
            "description"   =>  "Create notes view"
        ]);

        $admin->roletokens()->save($noteCreate);
        $editor->roletokens()->save($noteCreate);

    }
}
