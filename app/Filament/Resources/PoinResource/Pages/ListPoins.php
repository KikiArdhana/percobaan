<?php

namespace App\Filament\Resources\PoinResource\Pages;

use App\Filament\Resources\PoinResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPoins extends ListRecords
{
    protected static string $resource = PoinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
