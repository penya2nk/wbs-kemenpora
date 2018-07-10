<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //Seeder Kategori Laporan
        DB::table('kategori_laporan')->insert(['kategori' => 'Dugaan Kecurangan','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('kategori_laporan')->insert(['kategori' => 'Dugaan Korupsi','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('kategori_laporan')->insert(['kategori' => 'Dugaan Pencurian','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('kategori_laporan')->insert(['kategori' => 'Dugaan Pelanggaran Kebijakan dan Peraturan Perusahaan','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('kategori_laporan')->insert(['kategori' => 'Dugaan Benturan Kepentingan','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('kategori_laporan')->insert(['kategori' => 'Dugaan Penyuapan / Gratifikasi','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('kategori_laporan')->insert(['kategori' => 'Dugaan Pelecehan Seksual','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('kategori_laporan')->insert(['kategori' => 'Dugaan Kegiatan Ilegal','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

        //Seeder Status Laporan
        DB::table('master_status_laporan')->insert(['status' => 'Menunggu','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('master_status_laporan')->insert(['status' => 'Tidak Diteruskan','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('master_status_laporan')->insert(['status' => 'Diteruskan','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('master_status_laporan')->insert(['status' => 'Dalam Proses','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('master_status_laporan')->insert(['status' => 'Ditolak','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('master_status_laporan')->insert(['status' => 'Diterima','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

        //Seeder Jalur Laporan
        DB::table('master_jalur_laporan')->insert(['jalur' => 'Website','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('master_jalur_laporan')->insert(['jalur' => 'Telepon','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('master_jalur_laporan')->insert(['jalur' => 'SMS','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('master_jalur_laporan')->insert(['jalur' => 'Fax','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('master_jalur_laporan')->insert(['jalur' => 'Email','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('master_jalur_laporan')->insert(['jalur' => 'Kirim Surat','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('master_jalur_laporan')->insert(['jalur' => 'Lainnya','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

        //Seeder User Roles
        DB::table('roles')->insert(['role' => 'Member','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('roles')->insert(['role' => 'Operator','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('roles')->insert(['role' => 'SPI','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('roles')->insert(['role' => 'Super Administrator','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

        //Seeder User
        DB::table('users')->insert(['email' => 'yoga@gmail.com','password'=>bcrypt('123456'),'fullname'=>'Yoga Dirgantara','address'=>'Jl. Penggilingan Baru 1','phoneNumber'=>'02191919900','handphoneNumber'=>'08568808146','identityNumber'=>'341597990001','roleId'=>'1','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        DB::table('users')->insert(['email' => 'dirgantaradwiyoga@gmail.com','password'=>bcrypt('123456'),'fullname'=>'Dwi Yoga Dirgantara','address'=>'Jl. Hijau Daun','phoneNumber'=>'02194949494','handphoneNumber'=>'08971182277','identityNumber'=>'367771199001','roleId'=>'1','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

        //Seeder Operator
        DB::table('users')->insert(['email' => 'op@gmail.com','password'=>bcrypt('123456'),'fullname'=>'OP','address'=>'Jl. Swadaya No. 1','phoneNumber'=>'0218839993','handphoneNumber'=>'08919191999','identityNumber'=>'8585858585858','roleId'=>'2','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

        //Seeder SPI
        DB::table('users')->insert(['email' => 'spi@gmail.com','password'=>bcrypt('123456'),'fullname'=>'SPI','address'=>'Jl. Akbar No. 1','phoneNumber'=>'02199991111','handphoneNumber'=>'08784949494','identityNumber'=>'77717111111','roleId'=>'3','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

        //Seeder Super
        DB::table('users')->insert(['email' => 'superadmin@gmail.com','password'=>bcrypt('123456'),'fullname'=>'Super Admin','address'=>'Jl. Adamant No. 1','phoneNumber'=>'02188887711','handphoneNumber'=>'089919191','identityNumber'=>'494081294819','roleId'=>'4','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
    }
}
