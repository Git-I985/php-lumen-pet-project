<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class FormsDataService
{
    public static function computers(): array
    {
        $hardware_types = DB::connection()
                            ->getPdo()
                            ->query("SELECT * FROM hardware_types")
                            ->fetchAll(\PDO::FETCH_ASSOC);

        return ['hardware_types' => $hardware_types];
    }
}
