<?php namespace App\Skel\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
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
