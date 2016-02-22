<?php

namespace Database\Seeds;

use Cloudoki\Guardian\Role;
use Cloudoki\Guardian\Rolegroup;
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
        $admin = Rolegroup::create([
            'name'          =>  'Administrator',
            'description'   =>  'All rights are granted'
        ]);

        $editor = Rolegroup::create([
            'name'          =>  'Editor',
            'description'   =>  'Most rights are granted, except closing'
        ]);

        $intern = Rolegroup::create([
            'name'          =>  'Intern',
            'description'   =>  'Some rights are granted'
        ]);

        $guest = Rolegroup::create([
            'name'          =>  'Guest',
            'description'   =>  'Only limited view rights are granted'
        ]);

        // The Tokens
        // prove 4 example tokens, in a way Guest has 1, and admin 4
        $adminView = Role::create([
            "slug"          =>  "admin:view",
            "description"   =>  "Admin content"
        ]);

        $admin = Rolegroup::find(1);
        $admin->roles()->save($adminView);

        $noteView = Role::create([
            "slug"          =>  "note:view",
            "description"   =>  "Note view content"
        ]);

        $admin->roles()->save($noteView);

        $editor = Rolegroup::find(2);
        $editor->roles()->save($noteView);

        $inter = Rolegroup::find(3);
        $inter->roles()->save($noteView);

        $guest = Rolegroup::find(4);
        $guest->roles()->save($noteView);


        $noteEdit = Role::create([
            "slug"          =>  "note:edit",
            "description"   =>  "Edit notes view"
        ]);

        $admin->roles()->save($noteEdit);
        $editor->roles()->save($noteEdit);
        $inter->roles()->save($noteEdit);

        $noteCreate = Role::create([
            "slug"          =>  "note:create",
            "description"   =>  "Create notes view"
        ]);

        $admin->roles()->save($noteCreate);
        $editor->roles()->save($noteCreate);

    }
}
