<?php

namespace App\Filament\Resources\OtherPageBannerResource\Pages;

use App\Filament\Resources\OtherPageBannerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOtherPageBanner extends CreateRecord
{
    protected static string $resource = OtherPageBannerResource::class;
    protected static bool $canCreateAnother = false;
}
