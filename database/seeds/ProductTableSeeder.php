<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         $product=new\App\Product([
        	'imagePath'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLUzEwCYceHy0ybtxtdsG8GCoSwrJ1coixtkFRxyEbVbK6UIxV',
        	'title'=> 'Harry Potter',
        	'description'=>'super cool-as a child',
        	'price'=>10
        ]);
        $product->save();

         $product=new\App\Product([
        	'imagePath'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLUzEwCYceHy0ybtxtdsG8GCoSwrJ1coixtkFRxyEbVbK6UIxV',
        	'title'=> 'Harry Potter',
        	'description'=>'super cool-as a child',
        	'price'=>10
        ]);
        $product->save();

         $product=new\App\Product([
        	'imagePath'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLUzEwCYceHy0ybtxtdsG8GCoSwrJ1coixtkFRxyEbVbK6UIxV',
        	'title'=> 'Harry Potter',
        	'description'=>'super cool-as a child',
        	'price'=>10
        ]);
        $product->save();


         $product=new\App\Product([
        	'imagePath'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLUzEwCYceHy0ybtxtdsG8GCoSwrJ1coixtkFRxyEbVbK6UIxV',
        	'title'=> 'Harry Potter',
        	'description'=>'super cool-as a child',
        	'price'=>10
        ]);
        $product->save();
    }
}
