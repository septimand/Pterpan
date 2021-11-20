<?php

use App\User;
use Illuminate\Database\Seeder;

class UserWithRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->email = 'gracia@si.ukdw.ac.id';
        $admin->id_unit = 'UN01';
        $admin->nama_user = 'Gracia Zerlinda Puspita';
        $admin->tgl_lahir = '2001-07-20';
        $admin->jenis_kelamin = 'P';
        $admin->no_telp = '088216396436';
        $admin->gambar_user = 'zerlinda.jpg';
        $admin->password = 'admin';
        $admin->role = 'admin';
        $admin->save();
    }
}
