<?php namespace App\Skel\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class OptionsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installOption('option.skel.access', [
            'name'=>'Option main de aplicación skel',
            'text'=>'Skel',
            'isSubMenu'=>true
        ]);
        
    }
    
}
