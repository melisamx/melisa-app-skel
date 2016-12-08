<?php namespace App\Skel\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\InstallOption;

class OptionsSeeder extends Seeder
{
    use InstallOption;
    
    public function run()
    {
        
        $this->installOption('option.skel.access', [
            'name'=>'Option main de aplicación skel',
            'text'=>'Skel',
            'isSubMenu'=>true
        ]);
        
    }
    
}
