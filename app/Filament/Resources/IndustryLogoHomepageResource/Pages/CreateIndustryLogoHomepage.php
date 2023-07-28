<?php

namespace App\Filament\Resources\IndustryLogoHomepageResource\Pages;

use App\Filament\Resources\IndustryLogoHomepageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIndustryLogoHomepage extends CreateRecord
{
    protected static string $resource = IndustryLogoHomepageResource::class;
    protected static bool $canCreateAnother = false;
}
