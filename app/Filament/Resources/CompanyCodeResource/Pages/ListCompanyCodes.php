<?php

namespace App\Filament\Resources\CompanyCodeResource\Pages;

use App\Filament\Resources\CompanyCodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyCodes extends ListRecords
{
    protected static string $resource = CompanyCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
