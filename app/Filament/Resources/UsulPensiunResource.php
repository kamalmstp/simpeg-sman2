<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsulPensiunResource\Pages;
use App\Filament\Resources\UsulPensiunResource\RelationManagers;
use App\Models\UsulPensiun;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UsulPensiunResource extends Resource
{
    protected static ?string $model = UsulPensiun::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Menu Utama';
    protected static ?string $navigationLabel = 'Usul Pensiun';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('pegawai_id')
                    ->relationship('pegawai', 'id')
                    ->required(),
                Forms\Components\Textarea::make('alasan_pensiun')
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('tgl_pengajuan'),
                Forms\Components\Textarea::make('dokumen_pendukung')
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
                Tables\Columns\TextColumn::make('tgl_pengajuan')
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
            'index' => Pages\ListUsulPensiuns::route('/'),
            'create' => Pages\CreateUsulPensiun::route('/create'),
            'edit' => Pages\EditUsulPensiun::route('/{record}/edit'),
        ];
    }
}
