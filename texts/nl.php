<?php

$texts = [
    'project.link'                                             => 'Project op GitHub',
    'project.log_in'                                           => 'Log in',

    'error.not.installed.title'                                => 'Niet geïnstalleerd',
    'error.not.installed.description'                          => 'Het lijkt erop dat OpCache niet geïnstalleerd is.',
    'error.not.enabled.title'                                  => 'Niet actief',
    'error.not.enabled.description'                            => 'Het lijkt erop dat OpCache niet actief is.',

    'menu.status'                                              => 'Status',
    'menu.config'                                              => 'Configuratie',
    'menu.scripts'                                             => 'Opgeslagen Scripts',
    'menu.graphs'                                              => 'Grafieken',

    'reset.submit'                                             => 'Leegmaken',
    'confirmation.reset'                                       => 'Weet je zeker dat je de cache wilt leegmaken?',
    'confirmation.yes'                                         => 'Ja',
    'confirmation.no'                                          => 'Nee',

    'status.title'                                             => 'Status',
    'status.opcache_enabled'                                   => 'Aangezet',
    'status.cache_full'                                        => 'Cache vol',
    'status.restart_pending'                                   => 'Herstart in afwachting',
    'status.restart_in_progress'                               => 'Herstart is bezig',

    'memory.title'                                             => 'Geheugen gebruik',
    'memory.used_memory'                                       => 'Gebruikt geheugen',
    'memory.free_memory'                                       => 'Vrij geheugen',
    'memory.wasted_memory'                                     => 'Verspild geheugen',
    'memory.current_wasted_percentage'                         => 'Momenteel verspild',

    'stats.title'                                              => 'Statistieken',
    'stats.num_cached_scripts'                                 => 'Cached Scripts',
    'stats.num_cached_keys'                                    => 'Cached sleutels',
    'stats.max_cached_keys'                                    => 'Max cached sleutels',
    'stats.hits'                                               => 'Hits',
    'stats.start_time'                                         => 'Start tijd',
    'stats.last_restart_time'                                  => 'Laatste herstart',
    'stats.oom_restarts'                                       => 'Oom herstarts',
    'stats.hash_restarts'                                      => 'Hash herstarts',
    'stats.manual_restarts'                                    => 'Handmatige herstarts',
    'stats.misses'                                             => 'Misses',
    'stats.blacklist_misses'                                   => 'Blacklist misses',
    'stats.blacklist_miss_ratio'                               => 'Miss ratio',
    'stats.opcache_hit_rate'                                   => 'Opcache hit ratio',

    'config.title'                                             => 'Configuratie',
    'config.opcache.enable'                                    => 'Aangezet',
    'config.opcache.enable.description'                        => 'Bepaald of Zend OPCache aan staat',
    'config.opcache.enable_cli'                                => 'Aangezet op de CLI',
    'config.opcache.enable_cli.description'                    => 'Bepaald of Zend OPCache aan staat op de CLI versie van PHP',
    'config.opcache.use_cwd'                                   => 'Sleutels gebaseerd op de huidige werk map',
    'config.opcache.use_cwd.description'                       => 'Indien deze waarde aan staat zal OPcache de huidige werk map toevoegen aan de sleutel van scripts. Dit voorkomt dat scripts met dezelfde naam in andere mappen elkaar overschrijven. Uitschakelen van deze optie verbeterd de prestatie, maar kan huidige applicatie breken.',
    'config.opcache.validate_timestamps'                       => 'Valideer tijstempels',
    'config.opcache.validate_timestamps.description'           => 'Indien uitgeschakeld moet OPcache of de webserver handmatig herstart worden om wijzigen aan bestanden effect te laten hebben.',
    'config.opcache.dups_fix'                                  => 'Duplicaten fix',
    'config.opcache.dups_fix.description'                      => 'Deze hack moet alleen aangezet worden om "Cannot redeclare class" foutmeldingen te voorkomen.',
    'config.opcache.revalidate_path'                           => 'Valideer pad',
    'config.opcache.revalidate_path.description'               => 'Optie voor het aan- of uitzetten van het zoeken van bestanden in de include_path optimalisatie',
    'config.opcache.log_verbosity_level'                       => 'Logging niveau',
    'config.opcache.log_verbosity_level.description'           => 'Alle OPcache foutmeldingen gaan naar het log van de webserver. Standaard zullen alleen fatale fouten (niveau 0) of fouten (niveau 1) gelogged worden. Het is ook mogelijk om waarschuwingen (niveau 2), informatieve meldingen (niveau 3) of debug meldingen (niveau 4) te loggen.',
    'config.opcache.memory_consumption'                        => 'Opcache geheugen grootte',
    'config.opcache.memory_consumption.description'            => 'De grootte van het gedeelde geheugen dat OPcache kan gebruiken.',
    'config.opcache.interned_strings_buffer'                   => 'Interned strings buffer',
    'config.opcache.interned_strings_buffer.description'       => 'The grootte van het geheugen voor interned strings in Mbytes.',
    'config.opcache.max_accelerated_files'                     => 'Maximum aantal van opgeslagen (cached) scripts',
    'config.opcache.max_accelerated_files.description'         => 'Het maximum aantal sleutels (scripts) in de OPcache hash tabel. Alleen getallen tussen 200 en 100000 zijn valide.',
    'config.opcache.max_wasted_percentage'                     => 'Maximaal verspild voordat er een herstart wordt uitgevoerd',
    'config.opcache.max_wasted_percentage.description'         => 'Het maximum percentage "verspilde" geheugen voordat een herstart cal worden gepland.',
    'config.opcache.consistency_checks'                        => 'Consitentie checks frequency',
    'config.opcache.consistency_checks.description'            => 'Controleer de cache checksum elke N verzoeken. The standaard waarde van "0" houdt in dat de controle is uitgeschakeld.',
    'config.opcache.force_restart_timeout'                     => 'Forceer herstart timeout',
    'config.opcache.force_restart_timeout.description'         => 'Hoe lang te wachten (in seconden) voordat een geplande herstart zal beginnen als de cache niet is gebruikt.',
    'config.opcache.revalidate_freq'                           => 'Frenquentie om te controleren voor wijzigen',
    'config.opcache.revalidate_freq.description'               => 'Hoe vaak (in seconden) er zal worden gecontroleerd op wijzigingen. ("1" betekend 1 maal per seconde, maar slechts 1 maal per verzoek. "0" betekend dat er altijd gecontroleerd zal worden)',
    'config.opcache.preferred_memory_model'                    => 'Voorkeur geheugen model',
    'config.opcache.preferred_memory_model.description'        => 'Voorkeur voor gedeelde geheugen back-end. Indien deze waarde leeg is zal het systeem dit bepalen.',
    'config.opcache.blacklist_filename'                        => 'Blacklist',
    'config.opcache.blacklist_filename.description'            => 'De locatie van het blacklist bestand (wildcards zijn toegstaan). Elk OPcache blacklist bestand is een tekst bestand met daarin de namen van de bestanden die niet meegenomen moeten worden in het caching mechanisme. Het bestandformaat bevat een bestandsnaam per regel. De bestandsnaam kan een volledig pad zijn of alleen het begin van een pad (bijvoorbeeld, /var/www/x zal alle bestanden en mappen in /var/www die beginnen met  \'x\' niet meenmen in het caching mechanisme). Regels die beginnen met aan ; zullen worden genegeerd (opmerkingen).',
    'config.opcache.max_file_size'                             => 'Uitsluiten van caching boven grootte',
    'config.opcache.max_file_size.description'                 => 'Uitsluiten van grote bestanden. Standaard zullen alle bestande worden gecached.',
    'config.opcache.error_log'                                 => 'Foutmeldingen log',
    'config.opcache.error_log.description'                     => 'OPcache error_log bestandnaam. Indien deze waarde leeg is zal "stderr" worden gebruikt.',
    'config.opcache.protect_memory'                            => 'Bescherm geheugen',
    'config.opcache.protect_memory.description'                => 'Beschermt het gdeelde geheugen tegen onverwacht schrijven tijdens het uitvoeren van scripts. Alleen handig tijdens debuggen.',
    'config.opcache.save_comments'                             => 'Bewaren opmerkingen',
    'config.opcache.save_comments.description'                 => 'Indien uitgeschakeld zullen alle PHPDoc opmerkingen worden verwijderd van de code om de grootte van de geoptimimaliseerde scripts te verkleinen.',
    'config.opcache.fast_shutdown'                             => 'Snel uitschakelen',
    'config.opcache.fast_shutdown.description'                 => 'Indien ingeschakeld zal een "fast shutdown sequence" gebruikt worden voor geaccelereerde code',
    'config.opcache.enable_file_override'                      => 'File override',
    'config.opcache.enable_file_override.description'          => 'Allow file existence override (file_exists, etc.) performance feature.',
    'config.opcache.optimization_level'                        => 'Optimisatie niveau',
    'config.opcache.optimization_level.description'            => 'Een bitmask waar elke bit een OpCache pass aan- of uitzet',
    'config.opcache.mmap_base'                                 => 'Mmap base',
    'config.opcache.mmap_base.description'                     => 'The base used for shared memory segments on Windows. All PHP processes have to map shared memory into the same address space. Using this directive allows "Unable to reattach to base address" errors to be fixed.',
    'config.opcache.restrict_api'                              => 'Restrict API',
    'config.opcache.restrict_api.description'                  => 'Allows calling OPcache API functions only from PHP scripts which path is started from specified string. The default "" means no restriction.',
    'config.opcache.file_update_protection'                    => 'File update protection',
    'config.opcache.file_update_protection.description'        => 'Prevents caching files that are less than this number of seconds old. It protects from caching of incompletely updated files. In case all file updates on your site are atomic, you may increase performance by setting it to "0".',
    'config.opcache.huge_code_pages'                           => 'Huge code pages',
    'config.opcache.huge_code_pages.description'               => 'Enables or disables copying of PHP code (text segment) into HUGE PAGES. This should improve performance, but requires appropriate OS configuration.',
    'config.opcache.lockfile_path'                             => 'Lockfile path',
    'config.opcache.lockfile_path.description'                 => 'Absolute path used to store shared lockfiles (for *nix only)',
    'config.opcache.file_cache'                                => 'File cache',
    'config.opcache.file_cache.description'                    => 'Enables and sets the second level cache directory. It should improve performance when SHM memory is full, at server restart or SHM reset. The default "" disables file based caching.',
    'config.opcache.file_cache_only'                           => 'File cache only',
    'config.opcache.file_cache_only.description'               => 'Enables or disables opcode caching in shared memory.',
    'config.opcache.file_cache_consistency_checks'             => 'File cache consistency checks',
    'config.opcache.file_cache_consistency_checks.description' => 'Enables or disables checksum validation when script loaded from file cache.',
    'config.opcache.file_cache_fallback'                       => 'File cache fallback',
    'config.opcache.file_cache_fallback.description'           => 'Implies opcache.file_cache_only=1 for a certain process that failed to reattach to the shared memory (for Windows only). Explicitly enabled file cache is required.',
    'config.opcache.validate_permission'                       => 'Validate permission',
    'config.opcache.validate_permission.description'           => 'Validates the cached file permissions against the current user.',
    'config.opcache.validate_root'                             => 'Validate root',
    'config.opcache.validate_root.description'                 => 'Prevents name collisions in chroot\'ed environments. This should be enabled in all chroot\'ed environments to prevent access to files outside the chroot.',

    'blacklist.title'                                          => 'Blacklist',
    'blacklist.empty'                                          => 'Er zijn geen scripts geblacklist',

    'scripts.title'                                            => 'Cached Scripts',
    'scripts.overview.title'                                   => 'Overzicht',
    'scripts.empty'                                            => 'Er zijn geen scripts gecached',
    'scripts.directory.script_count'                           => ' (<i class="count">%s</i> bestanden)',
    'scripts.full_path'                                        => 'Bestandnaam',
    'scripts.hits'                                             => 'Hits',
    'scripts.memory_consumption'                               => 'Geheugen',
    'scripts.last_used_timestamp'                              => 'Laats gebruikt',
    'scripts.timestamp'                                        => 'Aangemaakt',
    'scripts.actions'                                          => 'Acties',
    'script.invalidate'                                        => 'Invalideer',
    'scripts.filter.placeholder'                               => 'Filter opgeslagen scripts',

    'graph.title'                                              => 'Grafieken',
    'graph.memory.title'                                       => 'Geheugen',
    'graph.memory.free'                                        => 'beschikbaar',
    'graph.memory.used'                                        => 'gebruikt',
    'graph.memory.wasted'                                      => 'verspild',
    'graph.keys.title'                                         => 'Sleutels',
    'graph.keys.free'                                          => 'beschikbaar',
    'graph.keys.scripts'                                       => 'gebruikt',
    'graph.keys.wasted'                                        => 'verspild',
    'graph.hits.title'                                         => 'Hits',
    'graph.hits.hits'                                          => 'hits',
    'graph.hits.misses'                                        => 'misses',
    'graph.hits.blacklist'                                     => 'blacklist',
];
