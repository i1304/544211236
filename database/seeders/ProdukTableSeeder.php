<?php
namespace Database\Seeders;

use	Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class	ProdukTableSeeder	extends	Seeder
{
public	function	run()
				{
DB::table('produk')->insert(array(
										['nama_produk'	=>	'Sabun	Lifebuoy',	'harga_jual'	=>	'2000', 'harga beli' => '3000'],
										['nama_produk'	=>	'Shampoo	Sunsilk',	'harga_jual'	=>	'4000', 'harga beli' => '5000']
								));
				}
            }