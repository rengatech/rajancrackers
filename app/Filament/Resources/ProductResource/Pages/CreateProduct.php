<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['url_slug'] = \Illuminate\Support\Str::slug($data['name']);
        $data['seo_title'] = $data['name'];
        $data['description'] = $data['name'];

        return $data;
    }
}