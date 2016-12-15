<?php namespace App\Skel\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class ApplicationSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installApplication('skel', [
            'name'=>'Skel',
            'description'=>'Application Skel',
            'nameSpace'=>'Melisa.skel',
            'typeSecurity'=>'art'
        ]);
        
    }
    
}
