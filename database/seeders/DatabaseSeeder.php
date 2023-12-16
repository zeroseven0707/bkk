<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Area;
use App\Models\Petugasan;
use App\Models\Perbaikan;
use App\Models\Statusa;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run():void
    {
        Statusa::create([
            'name'=>'CLOSED'
            // 'slug'=>'closed'
        ]);
        Statusa::create([
            'name'=>'BACKEND'
            // 'slug'=>'backend'
        ]);
        Statusa::create([
            'name'=>'PENDING'
            // 'slug'=>'pending'
        ]);
        Statusa::create([
            'name'=>'pilih status'
            // 'slug'=>'pilih-status'
        ]);
        Area::create([
            'name'=>'HGM'
            // 'slug'=>'hgm'
        ]);
        Area::create([
            'name'=>'GGK'
            // 'slug'=>'ggk'
        ]);
        Area::create([
            'name'=>'TLE'
            // 'slug'=>'tle'
        ]);
        Area::create([
            'name'=>'BDK'
            // 'slug'=>'bdk'
        ]);
        Area::create([
            'name'=>'CCD'
            // 'slug'=>'ccd'
        ]);
        Area::create([
            'name'=>'DGO'
            // 'slug'=>'dgo'
        ]);
        Area::create([
            'name'=>'LBG'
            // 'slug'=>'lbg'
        ]);
        Area::create([
            'name'=>'TRG'
            // 'slug'=>'trg'
        ]);
        Area::create([
            'name'=>'CJA'
            // 'slug'=>'cja'
        ]);
        Area::create([
            'name'=>'UBR'
            // 'slug'=>'ubr'
        ]);
        Area::create([
            'name'=>'SMD'
            // 'slug'=>'smd'
        ]);
        Area::create([
            'name'=>'TAS'
            // 'slug'=>'tas'
        ]);
        Area::create([
            'name'=>'Pilih-Area'
            // 'slug'=>'pilih-area'
        ]);

        Category::create([
            'name' => 'DATIN'
            // 'slug' => 'datin'
        ]);

        Category::create([
            'name' => 'REGULAR'
            // 'slug' => 'regular'
        ]);

        Category::create([
            'name' => 'WIFIID'
            // 'slug' => 'wifiid'
        ]);
        Category::create([
            'name' => 'PROACTIVE'
            // 'slug' => 'proactive'
        ]);
        Category::create([
            'name' => 'UNSPEC'
            // 'slug' => 'unspec'
        ]);
        Category::create([
            'name' => 'GARANSI DATIN'
            // 'slug' => 'garansi-datin'
        ]);
        Category::create([
            'name' => 'GARANSI REGULER'
            // 'slug' => 'garansi-reguler'
        ]);
        Category::create([
            'name' => 'Pilih-Type'
            // 'slug' => 'pilih-type'
        ]);
        

        
        Perbaikan::create([
            'name' => 'ONT CONFIG'
            // 'slug' => 'ont-config'
        ]);
        Perbaikan::create([
            'name' => 'DETAIL PERBAIKAN'
            // 'slug' => 'detail-perbaikan'
        ]);
        Perbaikan::create([
            'name' => 'BAIK SENDIRI'
            // 'slug' => 'baik-sendiri'
        ]);
        Perbaikan::create([
            'name' => 'GANTI ADAPTER LISTRIK'
            // 'slug' => 'ganti-adapter-listrik'
        ]);
        Perbaikan::create([
            'name' => 'GANTI PACHCORE'
            // 'slug' => 'ganti-pachore'
        ]);
        Perbaikan::create([
            'name' => 'SPLICE ULANG'
            // 'slug' => 'splice-ulang'
        ]);
        Perbaikan::create([
            'name' => 'ODC GANTI ADAPTER'
            // 'slug' => 'odc-ganti-adapter'
        ]);
        Perbaikan::create([
            'name' => 'ODC GANTI SPLITER'
            // 'slug' => 'odc-ganti-spliter'
        ]);
        Perbaikan::create([
            'name' => 'ODP REVISI'
            // 'slug' => 'odp-revisi'
        ]);
        Perbaikan::create([
            'name' => 'ODP GANTI SPLITER'
            // 'slug' => 'odp-ganti-spliter'
        ]);
        Perbaikan::create([
            'name' => 'ODP SPLICE ULANG'
            // 'slug' => 'odp-splice-ulang'
        ]);
        Perbaikan::create([
            'name' => 'DC GANTI'
            // 'slug' => 'dc-ganti'
        ]);
       
        Perbaikan::create([
            'name' => 'OTP GANTI ADAPTER'
            // 'slug' => 'otp-ganti-adapter'
        ]);
        Perbaikan::create([
            'name' => 'OTP IKG REVISI'
            // 'slug' => 'otp-ikg-revisi'
        ]);
        Perbaikan::create([
            'name' => 'ONT GANTI'
            // 'slug' => 'ont-ganti'
        ]);
        Perbaikan::create([
            'name' => 'EXS GAMAS OLT'
            // 'slug' => 'exs-gamas-olt'
        ]);
        Perbaikan::create([
            'name' => 'EXS GAMAS DISTRIBUSI'
            // 'slug' => 'exs-gamas-distribusi'
        ]);
        Perbaikan::create([
            'name' => 'IKG REVISI'
            // 'slug' => 'ikg-revisi'
        ]);
        Perbaikan::create([
            'name' => 'KENDALA IZIN'
            // 'slug' => 'kendala-izin'
        ]);
        Perbaikan::create([
            'name' => 'KENDALA JARINGAN'
            // 'slug' => 'kendala-jaringan'
        ]);
        Perbaikan::create([
            'name' => 'KENDALA ISOIR/CABUT'
            // 'slug' => 'kendala-isoir/cabut'
        ]);        
        Perbaikan::create([
            'name' => 'ONT RESTART'
            // 'slug' => 'ont-restart'
        ]);        
        Perbaikan::create([
            'name' => 'STB GANTI'
            // 'slug' => 'stb-ganti'
        ]);        
        Perbaikan::create([
            'name' => 'ROUTER PELANGGAN'
            // 'slug' => 'router-pelanggan'
        ]);        
        Perbaikan::create([
            'name' => 'PABX PELANGGAN'
            // 'slug' => 'pabx-pelanggan'
        ]);        
        Perbaikan::create([
            'name' => 'SALAH LAPOR'
            // 'slug' => 'salah-lapor'
        ]);        
        Perbaikan::create([
            'name' => 'GANTI REMOTE STB'
            // 'slug' => 'ganti-remote-stb'
        ]);        
        Perbaikan::create([
            'name' => 'ODP GANTI ADAPTER'
            // 'slug' => 'odp-ganti-adapter'
        ]);        
        Perbaikan::create([
            'name' => 'PENUTUPAN DAN PERAPIHAN ODP'
            // 'slug' => 'penutupan-dan-perapihan-odp'
        ]);        
        Perbaikan::create([
            'name' => 'PENURUNAN DP PELANGGAN'
            // 'slug' => 'penurunan-dp-pelanggan'
        ]);        
        Perbaikan::create([
            'name' => 'UNSPEC'
            // 'slug' => 'unspec'
        ]);        
        Perbaikan::create([
            'name' => 'VALINS'
            // 'slug' => 'valins'
        ]);        
        Perbaikan::create([
            'name' => 'DC DIRAPIHKAN'
            // 'slug' => 'dc-dirapihkan'
        ]);        
        Perbaikan::create([
            'name' => 'DC DILABELING'
            // 'slug' => 'dc-dilabeling'
        ]);        
        Perbaikan::create([
            'name' => 'STB SETTING ULANG'
            // 'slug' => 'stb-setting-ulang'
        ]);        
        Perbaikan::create([
            'name' => 'BYPAS LOKASI'
            // 'slug' => 'bypas-lokasi'
        ]);        
        Perbaikan::create([
            'name' => 'LOGIC'
            // 'slug' => 'logic'
        ]);        
        Perbaikan::create([
            'name' => 'PINDAH IFACE'
            // 'slug' => 'pindah-iface'
        ]);        
        Perbaikan::create([
            'name' => 'MIKROTIK PELANGGAN'
            // 'slug' => 'mikrotik-pelanggan'
        ]);        
        Perbaikan::create([
            'name' => 'PINDAH PRANGKAT'
            // 'slug' => 'pindah-prangkat'
        ]);        
        Perbaikan::create([
            'name' => 'DC SPLICE ULANG'
            // 'slug' => 'dc-splice-ulang'
        ]);        
        Perbaikan::create([
            'name' => 'JUMPER ULANG'
            // 'slug' => 'jumper-ulang'
        ]);        
        Perbaikan::create([
            'name' => 'GANTI KABEL TELP'
            // 'slug' => 'ganti-kabel-telp'
        ]);        
        Perbaikan::create([
            'name' => 'MATI LISTRIK'
            // 'slug' => 'mati-listrik'
        ]);        
        Perbaikan::create([
            'name' => 'Nama-Perbaikan'
            // 'slug' => 'nama-perbaikan'
        ]);        
    
       
    
    
    }
}
