<?php

namespace Mfnannah\ArabicPdf\Commands;

use Illuminate\Console\Command;

class ArabicPdfCommand extends Command
{
    public $signature = 'arabic-pdf';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
