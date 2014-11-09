<?php

$texts = [
    'project.link'                                          => 'Project auf GitHub',

    'menu.status'                                           => 'Status',
    'menu.config'                                           => 'Konfiguration',
    'menu.scripts'                                          => 'Dateien im Cache',
    'menu.graphs'                                           => 'Diagramme',

    'reset.submit'                                          => 'Neustart',
    'confirmation.reset'                                    => 'Soll der Cache wirklich neu gestartet werden?',
    'confirmation.yes'                                      => 'Ja',
    'confirmation.no'                                       => 'Nein',

    'status.title'                                          => 'Status',
    'status.opcache_enabled'                                => 'Aktiv',
    'status.cache_full'                                     => 'Cache voll',
    'status.restart_pending'                                => 'Neustart anhängig',
    'status.restart_in_progress'                            => 'Neustart läuft',

    'memory.title'                                          => 'Speichernutzung',
    'memory.used_memory'                                    => 'Benutzter Speicher',
    'memory.free_memory'                                    => 'Freier Speicher',
    'memory.wasted_memory'                                  => '"Verschwendeter" Speicher (Code ungültig oder veraltet)',
    'memory.current_wasted_percentage'                      => 'Momentan "verschwendet"',

    'stats.title'                                           => 'Statistiken',
    'stats.num_cached_scripts'                              => 'Dateien im Cache',
    'stats.num_cached_keys'                                 => 'Schlüssel im Cache',
    'stats.max_cached_keys'                                 => 'Maximale Anzahl von Schlüsseln im Cache',
    'stats.hits'                                            => 'Treffer',
    'stats.start_time'                                      => 'Startzeit',
    'stats.last_restart_time'                               => 'Letzter Neustart',
    'stats.oom_restarts'                                    => 'Oom-Neustarts',
    'stats.hash_restarts'                                   => 'Hash-Neustarts',
    'stats.manual_restarts'                                 => 'Manuelle Neustarts',
    'stats.misses'                                          => 'Fehlgriffe',
    'stats.blacklist_misses'                                => 'Treffer auf der Negativliste',
    'stats.blacklist_miss_ratio'                            => 'Verhältnis von Treffern zu Treffern auf der Negativliste',
    'stats.opcache_hit_rate'                                => 'Verhältnis von Treffern zu Fehlgriffen',

    'config.title'                                          => 'Konfiguration',
    'config.opcache.enable'                                 => 'enable',
    'config.opcache.enable.description'                     => 'Zeigt an, ob der OPCache aktiviert ist.',
    'config.opcache.enable_cli'                             => 'enable_cli',
    'config.opcache.enable_cli.description'                 => 'Zeigt an, ob der OPCache für PHPs CLI-Version aktiviert ist.',
    'config.opcache.use_cwd'                                => 'use_cwd',
    'config.opcache.use_cwd.description'                    => 'Wenn diese Einstellung gesetzt ist, ergänzt der OPcache den Datei-Schlüssel (basename) um das aktuelle Arbeitsverzeichnis und verhindert so eventuelle Konflikte bei gleichnamigen Dateien. Das Deaktivieren dieser Einstellung verbessert die Performance, kann aber zu Problemen mit bestehenden Anwendungen führen.',
    'config.opcache.validate_timestamps'                    => 'validate_timestamps',
    'config.opcache.validate_timestamps.description'        => 'Ist diese Einstellung deaktiviert, muss der OPcache manuell oder über einen Neustart des Webservers zurückgesetzt werden, damit Änderungen auf Dateiebene erkannt werden.',
    'config.opcache.inherited_hack'                         => 'inherited_hack',
    'config.opcache.inherited_hack.description'             => 'Nicht mehr verwendet seit PHP 5.3.',
    'config.opcache.dups_fix'                               => 'dups_fix',
    'config.opcache.dups_fix.description'                   => 'Sollte nur aktiviert werden um "Cannot redeclare class"-Fehler zu umgehen.',
    'config.opcache.revalidate_path'                        => 'revalidate_path',
    'config.opcache.revalidate_path.description'            => 'Wenn deaktiviert, werden Dateien mit gleichem Namen, die an unterschiedlichen Stellen im include_path liegen, wie eine einzige Datei behandelt.',
    'config.opcache.log_verbosity_level'                    => 'log_verbosity_level',
    'config.opcache.log_verbosity_level.description'        => 'In der Standard-Einstellung werden nur schwere Fehler (0) und Fehler (1) in das Log geschrieben. Es können aber auch Warnungen (2), Info-Meldungen (3) und Debug-Meldungen (4) geloggt werden.',
    'config.opcache.memory_consumption'                     => 'memory_consumption',
    'config.opcache.memory_consumption.description'         => 'Die Größe des Opcache-Speichers.',
    'config.opcache.interned_strings_buffer'                => 'interned_strings_buffer',
    'config.opcache.interned_strings_buffer.description'    => 'Die Menge an Speicher für eindeutige Zeichenketten in MB. Wird erst ab PHP 5.3 berücksichtigt.',
    'config.opcache.max_accelerated_files'                  => 'max_accelerated_files',
    'config.opcache.max_accelerated_files.description'      => 'Die maximale Anzahl von Schlüsseln (und damit Dateien) in der OPcache-Hashtabelle. Erlaubt sind nur Zahlen zwischen 200 und 100000.',
    'config.opcache.max_wasted_percentage'                  => 'max_wasted_percentage',
    'config.opcache.max_wasted_percentage.description'      => 'Der maximale prozentuale Anteil von "verschwendetem" Speicher bevor ein Neustart angesetzt wird.',
    'config.opcache.consistency_checks'                     => 'consistency_checks',
    'config.opcache.consistency_checks.description'         => 'Die Hash-Prüfsumme wird jede n-te Anfrage überprüft. In der Standardeinstellung 0 finden diese Prüfungen nicht statt.',
    'config.opcache.force_restart_timeout'                  => 'force_restart_timeout',
    'config.opcache.force_restart_timeout.description'      => 'Wartezeit in Sekunden, nach der ein geplanter Neustart durchgeführt wird, sobald keine Zugriffe auf den Cache erfolgen.',
    'config.opcache.revalidate_freq'                        => 'revalidate_freq',
    'config.opcache.revalidate_freq.description'            => 'Wie oft (in Sekunden) werden die Zeitstempel der Dateien auf Änderungen überprüft. "0" lässt OPcache bei jeder Anfrage prüfen.',
    'config.opcache.preferred_memory_model'                 => 'preferred_memory_model',
    'config.opcache.preferred_memory_model.description'     => 'Die bevorzugte Speicherart für OPcache ("mmap", "shm", "posix" oder "win32"). In der Standardeinstellung entscheidet OPcache selbst (i.d.R. ist das auch die beste Wahl).',
    'config.opcache.blacklist_filename'                     => 'blacklist_filename',
    'config.opcache.blacklist_filename.description'         => 'Der Speicherort der Negativliste (Platzhalter sind erlaubt). Jede OPcache-Negativliste ist eine Textdatei, die die Namen der Dateien beinhaltet, die von OPCache ignoriert werden sollen. Jeder Dateiname in der Negativliste muss in einer eigenen Zeile stehen. Der Dateiname kann der volle Pfad oder nur eine Vorsilbe des Dateinamens sein ("/var/www/x" z.B. ignoriert alle Dateien und Verzeichnisse in "/var/www", die mit einem "x" beginnen). Zeilen, die mit einem ";" beginnen, werden wie Kommentare behandelt und ignoriert.',
    'config.opcache.max_file_size'                          => 'max_file_size',
    'config.opcache.max_file_size.description'              => 'Ermöglicht, Dateien ab einer bestimmten Größe vom Cache auszuschließen (Angabe in Byte). In der Standardeinstellung gibt es keine Beschränkung.',
    'config.opcache.error_log'                              => 'error_log',
    'config.opcache.error_log.description'                  => 'OPcache-Fehler-Log. Leere Zeichenkette setzt "stderr".',
    'config.opcache.protect_memory'                         => 'protect_memory',
    'config.opcache.protect_memory.description'             => 'Schützt den Speicher vor unerwarteten Schreibzugriffen während der Skriptausführung. Sinnvoll nur bei der Fehlersuche.',
    'config.opcache.save_comments'                          => 'save_comments',
    'config.opcache.save_comments.description'              => 'Ist diese Einstellung deaktiviert, werden alle PHPDoc-Kommentare aus dem Code gelöscht, um Speicherplatz zu sparen.',
    'config.opcache.load_comments'                          => 'load_comments',
    'config.opcache.load_comments.description'              => 'Ist diese Einstellung deaktiviert, werden PHPDoc-Kommentare nicht geladen. Auf diese Weise können die Kommentare zwar gespeichert (save_comments=1) werden, müssen aber, von Anwendungen die sie ohnehin nicht benötigen, nicht geladen werden.',
    'config.opcache.fast_shutdown'                          => 'fast_shutdown',
    'config.opcache.fast_shutdown.description'              => 'Ermöglicht eine schnelle Shutdown-Sequenz, die nicht jeden Speicherblock leert sondern den Speichermanager der Zend-Engine nutzt.',
    'config.opcache.enable_file_override'                   => 'enable_file_override',
    'config.opcache.enable_file_override.description'       => 'Aktivierung dieser Funktion führt dazu, dass der OPcache daraufhin überprüft wird, ob er die Datei bereits gespeichert hat, wenn "file_exists()", "is_file()" oder "is_readable()" aufgerufen werden. Das kann unter Umständen die Performance des Caches erhöhen, kann aber auch zu Fehlverhalten führen, wenn "validate_timestamps" deaktiviert ist.',
    'config.opcache.optimization_level'                     => 'optimization_level',
    'config.opcache.optimization_level.description'         => 'Eine Bitmaske, mit der festgelegt wird, welche Optimierungsläufe durchgeführt werden.',

    'blacklist.title'                                       => 'Negativliste',
    'blacklist.empty'                                       => 'Es befindet sich keine Datei auf der Negativliste.',

    'scripts.title'                                         => 'Dateien im Cache',
    'scripts.empty'                                         => 'Es befindet sich keine Datei im Cache.',
    'scripts.directory.script_count'                        => ' (<i class="count">%s</i> Dateien)',
    'scripts.full_path'                                     => 'Dateiname',
    'scripts.hits'                                          => 'Treffer',
    'scripts.memory_consumption'                            => 'Größe im Cache',
    'scripts.last_used_timestamp'                           => 'Zuletzt genutzt',
    'scripts.timestamp'                                     => 'Erstellt',
    'scripts.actions'                                       => 'Aktionen',
    'script.invalidate'                                     => 'Aus dem Cache löschen',

    'graph.title'                                           => 'Diagramme',
    'graph.memory.title'                                    => 'Speicher',
    'graph.memory.free'                                     => 'frei',
    'graph.memory.used'                                     => 'benutzt',
    'graph.memory.wasted'                                   => 'verschwendet',
    'graph.keys.title'                                      => 'Schlüssel',
    'graph.keys.free'                                       => 'frei',
    'graph.keys.scripts'                                    => 'benutzt',
    'graph.keys.wasted'                                     => 'ungültig',
    'graph.hits.title'                                      => 'Treffer',
    'graph.hits.hits'                                       => 'Treffer',
    'graph.hits.misses'                                     => 'Fehlgriffe',
    'graph.hits.blacklist'                                  => 'auf der Negativliste',
];