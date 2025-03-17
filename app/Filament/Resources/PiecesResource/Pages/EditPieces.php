<?php

namespace App\Filament\Resources\PiecesResource\Pages;

use App\Filament\Resources\PiecesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPieces extends EditRecord
{
    protected static string $resource = PiecesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
