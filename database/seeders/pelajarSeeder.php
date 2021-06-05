<?php

namespace Database\Seeders;
use App\Models\Pelajar;
use Illuminate\Database\Seeder;

class pelajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pljr1 = new pelajar();
        $pljr1->nbi ="1461800187";
        $pljr1->nama_pljr = "abdullahsammi";
        $pljr1->save();

        $pljr2 = new pelajar();
        $pljr2->nbi ="187";
        $pljr2->nama_pljr = "sammi";
        $pljr2->save();

        $pljr3 = new pelajar();
        $pljr3->nbi ="1871461800";
        $pljr3->nama_pljr = "abdullah";
        $pljr3->save();
    }
}
