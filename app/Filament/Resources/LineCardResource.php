<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LineCardResource\Pages;
use App\Filament\Resources\LineCardResource\RelationManagers;
use App\Models\LineCard;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LineCardResource extends Resource
{
    protected static ?string $model = LineCard::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('email')
                    ->maxLength(255)->required(),
                Forms\Components\TextInput::make('phone')
                    ->maxLength(255)->required(),
                Forms\Components\TextInput::make('url')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('logo')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')->square(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
            ])

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListLineCards::route('/'),
            'create' => Pages\CreateLineCard::route('/create'),
            'edit' => Pages\EditLineCard::route('/{record}/edit'),
        ];
    }
}