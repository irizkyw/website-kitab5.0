<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KitabResource\Pages;
use App\Filament\Resources\KitabResource\RelationManagers;
use App\Models\Kitab;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KitabResource extends Resource
{
    protected static ?string $model = Kitab::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kitab')->required(),
                Forms\Components\TextInput::make('agama')->required(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kitab'),
                Tables\Columns\TextColumn::make('agama'),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListKitabs::route('/'),
            'create' => Pages\CreateKitab::route('/create'),
            'edit' => Pages\EditKitab::route('/{record}/edit'),
        ];
    }    
}
