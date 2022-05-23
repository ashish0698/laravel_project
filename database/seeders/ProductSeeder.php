<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	[
        	 'name'=>"Iphone",
        	 "price"=>"$1000",
        	 "description"=>"Fastest Smart Phone With RAM 4gb.",
             "image"=>"https://images.unsplash.com/photo-1603791239531-1dda55e194a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YXBwbGUlMjBpcGhvbmV8ZW58MHx8MHx8&w=1000&q=80"
			],
			[
        	 'name'=>"Laptop",
        	 "price"=>"$9000",
        	 "description"=>"Macbook Pro (Best Laptop In The World).",
             "image"=>"https://www.pixelstalk.net/wp-content/uploads/2016/05/Laptop-Wallpaers-HD.jpg"
			],
			[
        	 'name'=>"Headphone",
        	 "price"=>"$3000",
        	 "description"=>"It Has Best Sound Quality.",
             "image"=>"https://images.unsplash.com/photo-1599669454699-248893623440?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGhlYWRwaG9uZXN8ZW58MHx8MHx8&w=1000&q=80"
			],
			[
        	 'name'=>"Smart-T.V",
        	 "price"=>"$8000",
        	 "description"=>"It Has Best Video Quality Upto 8k.",
             "image"=>"https://images.unsplash.com/photo-1601944179066-29786cb9d32a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c21hcnQlMjB0dnxlbnwwfHwwfHw%3D&w=1000&q=80"
			],
			[
        	 'name'=>"Refrigerator",
        	 "price"=>"$6000",
        	 "description"=>"It Has Best Cooling Technology Compared To Others.",
             "image"=>"https://www.cnet.com/a/img/resize/3be58b218810a0d5ba3c43c20e1eb140b8509bb2/hub/2016/07/15/bda3c418-740a-4183-93fc-3b95d5a1cc58/samsung-family-hub-refrigerator-promo.jpg?auto=webp&width=768"
			],


        ]);
    }
}
