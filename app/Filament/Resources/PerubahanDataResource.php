<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerubahanDataResource\Pages;
use App\Filament\Resources\PerubahanDataResource\RelationManagers;
use App\Models\PerubahanData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerubahanDataResource extends Resource
{
    protected static ?string $model = PerubahanData::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('pegawai_id')
                    ->relationship('pegawai', 'id')
                    ->required(),
                Forms\Components\TextInput::make('jenis_perubahan')
                    ->maxLength(100)
                    ->default(null),
                Forms\Components\Textarea::make('data_lama')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('data_baru')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pegawai.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_perubahan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
   Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPerubahanData::route('/'),
            'create' => Pages\CreatePerubahanData::route('/create'),
            'edit' => Pages\EditPerubahanData::route('/{record}/edit'),
        ];
    }
}
