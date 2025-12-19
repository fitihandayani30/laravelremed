<?php

namespace App\Filament\Resources\PemesanandetailResource\Pages;

use App\Filament\Resources\PemesanandetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemesanandetail extends EditRecord
{
    protected static string $resource = PemesanandetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
