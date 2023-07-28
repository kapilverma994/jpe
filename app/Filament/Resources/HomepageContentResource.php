<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomepageContentResource\Pages;
use App\Filament\Resources\HomepageContentResource\RelationManagers;
use App\Models\HomepageContent;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomepageContentResource extends Resource
{
    protected static ?string $model = HomepageContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Pages';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('section_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image'),
                Forms\Components\Textarea::make('main_description')

                    ->maxLength(65535),
                Forms\Components\Textarea::make('short_description')

                    ->maxLength(65535),
                Forms\Components\TextInput::make('url')
                    ->maxLength(255),
                Forms\Components\TextInput::make('youtube_llink')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->square(),
                Tables\Columns\TextColumn::make('section_name'),
                Tables\Columns\TextColumn::make('main_description')->limit(50),
                Tables\Columns\TextColumn::make('url'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ListHomepageContents::route('/'),
            'create' => Pages\CreateHomepageContent::route('/create'),
            'edit' => Pages\EditHomepageContent::route('/{record}/edit'),
        ];
    }
}
