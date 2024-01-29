<?php

namespace App\Filament\Resources\PartnerResource\Pages;

use App\Models\Partner;
use Filament\Pages\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PartnerResource;

class EditPartner extends EditRecord
{
    protected static string $resource = PartnerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Partner $record) {
                    if ($record->thumbnail) {
                        Storage::disk("public")->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}