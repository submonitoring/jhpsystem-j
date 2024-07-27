<?php

namespace App\Filament\Resources\CompanyCodeResource\Pages;

use App\Filament\Resources\CompanyCodeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyCode extends EditRecord
{
    protected static string $resource = CompanyCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
