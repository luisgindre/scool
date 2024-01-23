<?php

namespace App\Filament\Resources\AulasResource\Pages;

use App\Filament\Resources\AulasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAulas extends EditRecord
{
    protected static string $resource = AulasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
