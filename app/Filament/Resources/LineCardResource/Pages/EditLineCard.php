<?php

namespace App\Filament\Resources\LineCardResource\Pages;

use App\Filament\Resources\LineCardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLineCard extends EditRecord
{
    protected static string $resource = LineCardResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
