<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArsipMasukResource\Pages;
use App\Filament\Resources\ArsipMasukResource\RelationManagers;
use App\Models\ArsipMasuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArsipMasukResource extends Resource
{
    protected static ?string $model = ArsipMasuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no_surat')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\DatePicker::make('tanggal_terima'),
                Forms\Components\TextInput::make('pengirim')
                    ->maxLength(100)
                    ->default(null),
                Forms\Components\Textarea::make('perihal')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('lampiran')
                    ->maxLength(100)
                    ->default(null),
                Forms\Components\Textarea::make('file_surat')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('qr_code')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('keterangan')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_surat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_terima')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pengirim')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lampiran')
                    ->searchable(),
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
            'index' => Pages\ListArsipMasuks::route('/'),
            'create' => Pages\CreateArsipMasuk::route('/create'),
            'edit' => Pages\EditArsipMasuk::route('/{record}/edit'),
        ];
    }
}
