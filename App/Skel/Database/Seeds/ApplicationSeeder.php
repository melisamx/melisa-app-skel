<?php namespace App\Skel\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\InstallApplication;

class ApplicationSeeder extends Seeder
{    
    use InstallApplication;
    
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
