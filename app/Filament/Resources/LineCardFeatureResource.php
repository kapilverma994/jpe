<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LineCardFeatureResource\Pages;
use App\Filament\Resources\LineCardFeatureResource\RelationManagers;
use App\Models\LineCard;
use App\Models\LineCardFeature;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LineCardFeatureResource extends Resource
{
    protected static ?string $model = LineCardFeature::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('line_card_id')
                    ->label('Line Card')
                    ->searchable()
                    ->getSearchResultsUsing(fn (string $search) => LineCard::where('title', 'like', "%{$search}%")->limit(50)->pluck('title', 'id'))
                    ->getOptionLabelUsing(fn ($value): ?string => LineCard::find($value)?->title)->columnSpan(2),
                Repeater::make('feature')
                    ->schema([
                        RichEditor::make('feature')
                    ])->columnSpan(2)
                    ->createItemButtonLabel('Add Feature')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                   Tables\Columns\TextColumn::make('line.title'),
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
            'index' => Pages\ListLineCardFeatures::route('/'),
            'create' => Pages\CreateLineCardFeature::route('/create'),
            'edit' => Pages\EditLineCardFeature::route('/{record}/edit'),
        ];
    }
}