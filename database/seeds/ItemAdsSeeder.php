<?php

use Illuminate\Database\Seeder;
use Illuminate\Eloquent\Model;

class ItemAdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_ads')->delete();
        $item = app()->make('App\ItemAds');
        $item->fill([
          'user_id' => 1,
          'category_id' => 1,
          'title' => 'Macbook Pro 14 in',
          'price' => 12000000,
          'description' => 'Di jual macbook pro masih mulus keluaran 2012 thanks gan',
          'picture' => 'macbook-pro-2012.php',
          'no_hp' => 62856471231,
          'city' => 'Yogyakata',
          'sold' => false,
          'published' => true
        ]);
        $item->save();
    }
}
