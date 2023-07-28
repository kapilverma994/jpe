<?php

namespace App\Filament\Resources\EnquiryResource\Pages;

use App\Filament\Resources\EnquiryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListEnquiries extends ListRecords
{
    protected static string $resource = EnquiryResource::class;

    protected function getTitle(): string
    {
        return "Bom Enquiry";
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
        return static::getResource()::getEloquentQuery()->where('type', 'bom');
    }
}