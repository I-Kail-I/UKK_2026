<?php

namespace App\Filament\Siswa\Resources\Pengaduans\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Hidden;
use Filament\Schemas\Schema;

class PengaduanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('ruangan')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                DateTimePicker::make('when')
                    ->required(),
                Hidden::make('status')
                    ->default('menunggu')
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Select::make('siswa_id')
                    ->relationship('siswa', 'name')
                    ->required(),
            ]);
    }
}
