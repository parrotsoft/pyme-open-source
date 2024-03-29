<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Seeder;

class ApplicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'operative_system_id' => 1,
                'category_id' => 1,
                'name' => 'LibreOffice',
                'description' => 'LibreOffice es una suite ofimática gratuita y potente. Procesador de textos, hojas de cálculo, presentaciones, diagramas, bases de datos, editores de fórmulas, gráficos y más. Compatible con Windows, Mac y Linux.',
                'image' => 'https://a.fsdn.com/con/app/nel_img/11941',
                'star' => 5,
                'tutorial_link' => 'https://www.youtube.com/watch?v=Cy_c422B9ts',
            ],
            [
                'user_id' => 1,
                'operative_system_id' => 1,
                'category_id' => 1,
                'name' => 'Apache OpenOffice',
                'description' => 'Alternativa gratuita para las herramientas de productividad de Office: Apache OpenOffice, anteriormente conocido como OpenOffice.org, es un paquete de software de productividad de oficina de código abierto que contiene procesadores de texto, hojas de cálculo, presentaciones, gráficos.',
                'image' => 'https://a.fsdn.com/allura/mirror/openofficeorg/icon?1675777998?&w=120',
                'star' => 5,
                'tutorial_link' => 'https://blog.desdelinux.net/apache-openoffice-4-1-14-llega-con-27-correcciones/',
            ]
        ];

        foreach ($data as $row) {
            Application::query()->create($row);
        }
    }
}
