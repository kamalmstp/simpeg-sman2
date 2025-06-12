<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerjalananDinasResource\Pages;
use App\Filament\Resources\PerjalananDinasResource\RelationManagers;
use App\Models\PerjalananDinas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerjalananDinasResource extends Resource
{
    protected static ?string $model = PerjalananDinas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('pegawai_id')
                    ->relationship('pegawai', 'id')
                    ->required(),
                Forms\Components\TextInput::make('tujuan_dinas')
                    ->maxLength(100)
                    ->default(null),
                Forms\Components\DatePicker::make('tgl_berangkat'),
                Forms\Components\DatePicker::make('tgl_kembali'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pegawai.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tujuan_dinas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tgl_berangkat')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tgl_kembali')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListPerjalananDinas::route('/'),
            'create' => Pages\CreatePerjalananDinas::route('/create'),
            'edit' => Pages\EditPerjalananDinas::route('/{record}/edit'),
        ];
    }
}
