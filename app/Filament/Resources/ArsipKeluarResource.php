<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArsipKeluarResource\Pages;
use App\Filament\Resources\ArsipKeluarResource\RelationManagers;
use App\Models\ArsipKeluar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArsipKeluarResource extends Resource
{
    protected static ?string $model = ArsipKeluar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no_surat')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\DatePicker::make('tanggal_surat'),
                Forms\Components\TextInput::make('tujuan')
                    ->maxLength(100)
                    ->default(null),
                Forms\Components\Textarea::make('perihal')
                    ->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('tanggal_surat')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tujuan')
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
            'index' => Pages\ListArsipKeluars::route('/'),
            'create' => Pages\CreateArsipKeluar::route('/create'),
            'edit' => Pages\EditArsipKeluar::route('/{record}/edit'),
        ];
    }
}
