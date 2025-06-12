<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PermohonanPegawaiResource\Pages;
use App\Filament\Resources\PermohonanPegawaiResource\RelationManagers;
use App\Models\PermohonanPegawai;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PermohonanPegawaiResource extends Resource
{
    protected static ?string $model = PermohonanPegawai::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('pegawai_id')
                    ->relationship('pegawai', 'id')
                    ->required(),
                Forms\Components\TextInput::make('jenis_permohonan')
                    ->maxLength(100)
                    ->default(null),
                Forms\Components\Textarea::make('data_baru')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('keterangan')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pegawai.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_permohonan')
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
            'index' => Pages\ListPermohonanPegawais::route('/'),
            'create' => Pages\CreatePermohonanPegawai::route('/create'),
            'edit' => Pages\EditPermohonanPegawai::route('/{record}/edit'),
        ];
    }
}
