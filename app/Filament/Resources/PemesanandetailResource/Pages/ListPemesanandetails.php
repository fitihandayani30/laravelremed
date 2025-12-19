<?php

namespace App\Filament\Resources\PemesanandetailResource\Pages;

use App\Filament\Resources\PemesanandetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPemesanandetails extends ListRecords
{
    protected static string $resource = PemesanandetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
