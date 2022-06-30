<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Services\FormsDataService;
use Illuminate\Support\Facades\DB;

$router->get(
    '/',
    function () {
        $tables = DB::connection()
                    ->getPdo()
                    ->query('SHOW TABLES')
                    ->fetchAll(\PDO::FETCH_COLUMN);

        return view('home', ["tables" => $tables]);
    }
);

$router->get(
    '/list-of/{category}',
    function ($category) use ($router) {
        $rows = DB::connection()
                  ->getPdo()
                  ->query("SELECT * FROM {$category}")
                  ->fetchAll(\PDO::FETCH_ASSOC);

        $columns = DB::connection()->getPdo()->query("DESCRIBE {$category}")->fetchAll(\PDO::FETCH_COLUMN);

        return view('list-of', ['rows' => $rows, 'columns' => $columns, 'category' => $category]);
    }
);

$router->get(
    '/add/{category}',
    function ($category) use ($router) {
        $formData = method_exists(FormsDataService::class, $category) ? call_user_func(
            [FormsDataService::class, $category]
        ) : [];

        $formData['category'] = $category;
        $template = implode('.', ['forms', $category]);

        if (view()->exists($template)) {
            return view($template, $formData);
        }

        return view('forms.fallback');
    }
);

$router->post(
    '/insert/{category}',
    function ($category) use ($router) {
        dd($category);
//        $formData = method_exists(FormsHandlersService::class, $category) ? call_user_func(
//            [FormsHandlersService::class, $category]
//        ) : [];
//
//        $template = implode('.', ['forms', $category]);
//
//        if (view()->exists($template)) {
//            return view($template, $formData);
//        }
//
//        return view('forms.fallback');
    }
);


