<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EnquiryResource\Pages;
use App\Models\Enquiry;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;

class EnquiryResource extends Resource
{
    protected static ?string $model = Enquiry::class;
    protected static ?string $navigationGroup = 'Enquiry';
    protected static ?string $navigationLabel = 'Bom Enquiry';
    protected static ?string $navigationIcon = 'heroicon-o-collection';





    // public static function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             Forms\Components\TextInput::make('name'),
    //             Forms\Components\TextInput::make('email'),
    //             Forms\Components\TextInput::make('message'),
    //             Forms\Components\TextInput::make('mobile'),
    //             Forms\Components\TextInput::make('type')
    //         ]);
    // }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email'),
                // Tables\Columns\TextColumn::make('message'),
                Tables\Columns\TextColumn::make('mobile'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            // ->filters([
            //     SelectFilter::make('type')
            //         ->options([
            //             'contact' => 'Contact',
            //             'bom' => 'Bom',
            //         ])
            // ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('Download')
                    ->visible(function (Enquiry $record): bool {
                        $visible = $record->type == 'bom'; // or whatever condition you need and return TRUE or FALSE
                        return $visible;
                    })
                    ->url(fn (Enquiry $record): string => asset('storage/' . $record->file))
                    ->openUrlInNewTab()
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }




    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEnquiries::route('/'),
            'create' => Pages\CreateEnquiry::route('/create'),
            'edit' => Pages\EditEnquiry::route('/{record}/edit'),
        ];
    }
}
