<?php

namespace App\Console\Commands;

use App\Models\Permission;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

class GeneratePermissions extends Command
{
    protected $signature = 'permissions:generate';
    protected $description = 'Generate CRUD permissions for all models';

    public function handle()
    {
        $modelsPath = app_path('Models');
        $models = File::allFiles($modelsPath);

        foreach ($models as $model) {
            $modelName = pathinfo($model->getPathname(), PATHINFO_FILENAME);
            $tableName = strtolower(snake_case($modelName));

            $array_value = ['list', 'create', 'update', 'delete'];

            foreach ($array_value as $value) {
                Permission::firstOrCreate(
                    ['name' => $value . ' ' . $tableName,
                        'guard_name' => 'backpack'],
                );
            }

        }

        $this->info('Permissions generated successfully for all models.');
    }
}
