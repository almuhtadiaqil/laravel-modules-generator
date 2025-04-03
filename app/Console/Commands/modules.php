<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Modules\Auth\Providers\AuthServiceProvider;

class modules extends Command
{
    protected $signature = 'make:module {moduleName}';
    protected $description = 'Generate a new module structure using templates.';

    public function handle()
    {
        $moduleName = ucfirst($this->argument('moduleName'));
        $modulePath = base_path("Modules/{$moduleName}");

        if (!File::exists(base_path("Modules"))){
            File::makeDirectory(base_path("Modules"), 0777, true);
        }

        if (File::exists($modulePath)) {
            $this->error("Module '{$moduleName}' already exists!");
            return;
        }

        // Define module structure
        $directories = [
            "Controllers",
            "Interfaces",
            "Models",
            "Providers",
            "Repositories",
            "Routes",
            "Services",
        ];

        // Create directories
        foreach ($directories as $dir) {
            File::makeDirectory("{$modulePath}/{$dir}", 0755, true);
        }

        // Define files and corresponding templates
        $files = [
            "Controllers/{$moduleName}Controller.php" => "controller.stub",
            "Repositories/{$moduleName}Repository.php" => "repository.stub",
            "Models/{$moduleName}.php" => "model.stub",
            "Services/{$moduleName}Service.php" => "service.stub",
            "Providers/{$moduleName}ServiceProvider.php" => "provider.stub",
            "Routes/api.php" => "route.stub",
        ];

        // Generate multiple interface files from the same template
        $interfaceFiles = [
            "Interfaces/{$moduleName}ControllerInterface.php" => "Controller",
            "Interfaces/{$moduleName}RepositoryInterface.php" => "Repository",
            "Interfaces/{$moduleName}ServiceInterface.php" => "Service",
        ];

        // Generate standard files
        foreach ($files as $filePath => $templateFile) {
            $this->createFile("{$modulePath}/{$filePath}", [
                '{{module}}' => $moduleName,
            ], $templateFile);
        }

        // Generate interface files using the same template
        foreach ($interfaceFiles as $filePath => $fileType) {
            $this->createFile("{$modulePath}/{$filePath}", [
                "{{module}}" => $moduleName,
                '{{file}}' => "{$moduleName}{$fileType}",
            ], "interface.stub");
        }

        $this->info("Module '{$moduleName}' created successfully!");
    }

    private function createFile($filePath,array $variables, $templateFile)
    {
        $templatePath = resource_path("templates/module/{$templateFile}");

        if (!File::exists($templatePath)) {
            $this->error("Template file '{$templateFile}' not found!");
            return;
        }

        // Read template and replace placeholders
        $templateContent = File::get($templatePath);
        $content = str_replace(array_keys($variables), array_values($variables), $templateContent);

        File::put($filePath, $content);
    }

}
