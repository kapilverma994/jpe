<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndustryLogoHomepageResource\Pages;
use App\Filament\Resources\IndustryLogoHomepageResource\RelationManagers;
use App\Models\IndustryLogoHomepage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IndustryLogoHomepageResource extends Resource
{
    protected static ?string $model = IndustryLogoHomepage::class;
    protected static ?string $navigationLabel = "Brands";
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Pages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('logo')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')->square(),
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
            'index' => Pages\ListIndustryLogoHomepages::route('/'),
            'create' => Pages\CreateIndustryLogoHomepage::route('/create'),
            'edit' => Pages\EditIndustryLogoHomepage::route('/{record}/edit'),
        ];
    }
}
