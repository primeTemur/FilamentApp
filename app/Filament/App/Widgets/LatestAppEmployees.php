<?php

namespace App\Filament\App\Widgets;

use App\Models\Employee;
use Filament\Facades\Filament;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestAppEmployees extends BaseWidget
{
    protected static ?int $sort = 3;
    public function table(Table $table): Table
    {
        return $table
            ->query(Employee::query()->where(Filament::getTenant()))
            ->defaultSort('created_at','desc')
            ->columns([
                TextColumn::make('country.name'),
                TextColumn::make('first_name'),
                TextColumn::make('last_name'),
            ]);
    }
    
}
