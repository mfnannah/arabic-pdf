<?php

namespace Mfnannah\ArabicPdf;

use Arphp\Glyphs;
use Closure;
use Dompdf\Dompdf;
use Filament\Actions\Concerns\CanCustomizeProcess;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ArabicPdf extends Action
{
    use CanCustomizeProcess;

    protected ?Closure $mutateRecordDataUsing = null;

    public static function getDefaultName(): ?string
    {
        return 'arabicPdf';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label('PDF');

        $this->modal(false);

        $this->successNotificationTitle(__('filament-actions::edit.single.notifications.saved.title'));

        $this->icon('heroicon-o-arrow-down');

        $this->action(function (): void {
            $this->process(function (array $data, Model $record, Table $table) {
                $arabic = new Glyphs;
                $record['title'] = 'محمد علي فنانه';
                $data = [
                    'record' => $record,
                    'arabic' => $arabic,
                ];
                $html = view('arabic-pdf::templates.pdf', $data)->render();
                $dompdf = new Dompdf;
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('document.pdf');
            });

            $this->success();
        });
    }
}
