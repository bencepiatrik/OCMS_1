<?php

use AppLogger\Logger\Controllers\LogController;
use Illuminate\Support\Facades\Route;

    Route::post('/create-log', [LogController::class, 'createLog']);
    Route::get('/logs', [LogController::class, 'getAllLogs']);
    Route::get('/{username}', [LogController::class, 'getLogsByUser']);



/*

REVIEW

Tu si sa pýtal či to máš správne urobené, je tu určite pár vecí čo tu nesedí

Väčšinou sa nepoužíva ::controller, controller by si mal špecifikovať individuálne pri každej route
Ale každopádne používaš tam Log::class, čo keď si pozrieš čo reálne je tak je to nejaká October Log class, čiže to nedáva zmysel že by si to použil ako svoj controller
Musíš use-nuť svoj custom controller a ten použiť

Pozmenil by som to tak že nechaj si tam to group() (môžeš do toho pridať ako argument nejaký prefix, mapr. "logs", alebo sa často používa prefix "api/v1/logs", pozri dokumentáciu aby si vedel ako funguje group())
A potom do toho group daj individuálne každú Route nejako takto

Route::method('tvoja route', [TvojController::class, 'tvoja funkcia v controlleri']);

Keď to takto pozmeníš tak to bude lepšie, bude to správne používať controller a bude to prehľadné, ak si tak doteraz nerobil tak testuj všetko cez postmana

*/
