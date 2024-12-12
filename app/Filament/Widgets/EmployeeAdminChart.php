<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class EmployeeAdminChart extends ChartWidget
{
    protected static ?string $heading = 'Employee Chart';
    protected static ?int $sort = 3;
    protected static string $color = 'warning';
    protected function getData(): array
    {
        $data = Trend::model(Employee::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perMonth()
            ->count();
 
        return [
            'datasets' => [
                [
                    'label' => 'Employees posts',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}