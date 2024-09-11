# REVIEW

## Code
Tu napíšem nejaké global poznámky k tvojmu backend kódu, všetko ostatné píšem rovno do kódu, čiže si pls v projekte vyhľadaj "REVIEW" aby si našiel všetky moje poznámky (alebo pozri git commit)

Migrácie
Tvoju migráciu pre model Log (2024_09_03_112757_create_logs_table.php) máš v database/migrations
Je fajn že máš v migrácii timestamp, aj názov ako taký je fajn, len to umiestnenie by malo byť v plugine ku ktorému migrácia patrí
Zvyčajne sa migrácia nachádza v parentPlugin.plugin.updates, čo tam vlastne aj je, lenže ako keby máš tú migráciu 2 krát, raz v database/migrations a raz v updates folderi
Prečo máš vlastne vôbec database/migrations? :DD (odpovede na otázky v review mi môžeš potom písať do slacku)
Upravil by som to tak aby si to mal v applogger.logger.updates, s tým správnym názvom (čiže timestamp + názov)
- migraciu som raz spravil pomocou artisan make:migration, takto automaticky prida tam timestamp ale migracia sa ulozi niekde inde ako v plugine.


Controllers
Super že si si urobil controller pre funkcionality Logov, opäť ale ide o umiestnenie, v ďalšej lekcii budeš mať v controllers folderi iné veci
Tvoje custom controlleri ktoré máš momentálne v controllers folderi by si mal mať v http/controllers
A možno by som to ešte lepšie nazval, formát je väčšinou <model>Controller.php, čiže tu by to bolo LogController.php
Samotnú logiku čo tam máš je fajn :D

Model
Je nejaký dôvod prečo si dal timestamps = false? Akože nie je to moc dôležité ale väčšinou je dobré mať timestamps
Ak by si to upravoval tak nezabudni že aj v migrácii musíš pridať ->timestamps()

Routes
Skúšal si si tieto requesty cez postmana?
Malo by sa to volať routes.php, nie route.php, inak by to pokiaľ viem ani nemalo fungovať, možno toto nejako súvisí s tým include_once čo máš v Plugin.php

## Theme
Vidím že si si nejako riešil aj custom theme "logger"
Priznám sa že toto som nikdy v OctoberCMS nerobil, keďže keď robíme v OctoberCMS backend API pre nejakú aplikáciu, tak frontend sa rieši úplne inde, v iných technologiách a pod
OctoberCMS ponúka túto možnosť ale vo wezeu využívame len tú API časť, a všetky themes a frontend prvky úplne vynechávame
Samozrejme, je to len výhoda pre teba ak sa s tým zoznamuješ, učiť sa môžeš čo len chceš, len som ti chcel dať vedieť, že to nie je povinné a na reálnom projekte to pravdepodobne nevyužiješ
