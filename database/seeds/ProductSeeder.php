<?php

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
            ['category_id' => 1, 'brand_id' => 1, 'type_id' => 1, 'name' => 'Brit Care Adult Small Breed Cordero', 'desc' => 'Brit Care Adult Lamb & Rice Small breed es un alimento hipoalergénico balanceado y altamente digestible.', 'image_url' => 'https://www.petclick.cl/669-large_default/brit-care-adult-small-breed-cordero.jpg', 'stock' => 5, 'price' => 17900],
            ['category_id' => 1, 'brand_id' => 1, 'type_id' => 1, 'name' => 'Brit Care Adult Medium Cordero 12Kg', 'desc' => 'Brit Care Adult Lamb & Rice Medium breed es un alimento hipoalergénico balanceado y altamente digestible.', 'image_url' => 'https://braloy03.akamaized.net/6634/brit-care-adult-medium-cordero-12-kg.jpg', 'stock' => 5, 'price' => 48000],
            ['category_id' => 1, 'brand_id' => 2, 'type_id' => 1, 'name' => 'ProPlan Adult Razas Medianas', 'desc' => 'PURINA® PRO PLAN® Adult Razas Medianas provee una nutrición avanzada que ayuda a los perros de razas medianas a mantenerse fuertes y llenos de vitalidad.', 'image_url' => 'https://dojiw2m9tvv09.cloudfront.net/11787/product/M_purinaproplanadultcompleteconoptilife7672.jpg?181', 'stock' => 12, 'price' => 15900],
            ['category_id' => 2, 'brand_id' => 2, 'type_id' => 1, 'name' => 'ProPlan Puppy Razas Medianas', 'desc' => 'Formulado con carne fresca de pollo como ingrediente principal, PURINA PRO PLAN® Puppy Razas Medianas ofrece una óptima nutrición para cachorros en crecimiento.', 'image_url' => 'https://dojiw2m9tvv09.cloudfront.net/11787/product/purinaproplanpuppycompleteconoptistar8475.jpg', 'stock' => 12, 'price' => 17900],
            ['category_id' => 2, 'brand_id' => 3, 'type_id' => 1, 'name' => 'Royal Canin Puppy Mini', 'desc' => 'Royal Canin Puppy Mini es un alimento para cachorros de razas pequeñas (1 a 10 kg de peso adulto).', 'image_url' => 'http://www.santiagopetstore.cl/tienda/image/cache/catalog/Perros/Alimentos/Royal%20Canin/Mini-Puppy-350x350.jpeg', 'stock' => 12, 'price' => 15900],
            ['category_id' => 3, 'brand_id' => 4, 'type_id' => 1, 'name' => 'Hills Adult 7+ Small Bites 6,8kg', 'desc' => 'Hill\'s Science Diet Adult 7+ Small Bites es un alimento para perros senior (más de 7 años) de razas pequeñas de menos de 10kg de peso.', 'image_url' => 'https://www.petclick.cl/799/hills-adult-7-small-bites-68kg.jpg', 'stock' => 16, 'price' => 39900],
        ]);
    }
}
