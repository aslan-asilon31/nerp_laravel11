<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class DatabaseBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:database-backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup the database to a gzip file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Make sure the backup directory exists
        if (!Storage::exists('backup')) {
            Storage::makeDirectory('backup');
        }

        $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".gz";
        $backupPath = storage_path('app/backup/' . $filename);

        // Command to perform the database backup
        $command = "mysqldump --user=" . env('DB_USERNAME') . " --password=" . env('DB_PASSWORD')
                 . " --host=" . env('DB_HOST') . " " . env('DB_DATABASE')
                 . " | gzip > " . escapeshellarg($backupPath);

        // Execute the command
        exec($command, $output, $returnVar);

        if ($returnVar !== 0) {
            $this->error('Backup failed!');
            return 1;
        }

        $this->info('Backup successful!');
        return 0;
    }
}
