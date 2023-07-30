<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getTitle(): string
    {
        return "Contact Enquiry";
    }
    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    protected function getTableRecordUrlUsing(): ?\Closure
    {
        return null;
    }
    protected function getTableQuery(): Builder
    {
        return static::getResource()::getEloquentQuery()->where('type', 'contact');
    }
}
