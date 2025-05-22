<?php

namespace App\Filament\Admin\Resources\PemasokResource\Pages;

use App\Filament\Admin\Resources\PemasokResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemasok extends EditRecord
{
    protected static string $resource = PemasokResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
