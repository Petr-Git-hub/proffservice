<?php

return [
    'plugin' => [
        'name' => 'Pages',
        'description' => 'Funzionalità di pagine & menu.',
    ],
    'page' => [
        'menu_label' => 'Pagine',
        'template_title' => '%s Pagine',
        'delete_confirmation' => 'Vuoi davvero eliminare le pagine selezionate? L\'operazione cancellerà anche le sottopagine, se presenti.',
        'no_records' => 'Nessuna pagina trovata',
        'delete_confirm_single' => 'Vuoi davvero eliminare questa pagina? L\'operazione cancellerà anche le sottopagine, se presenti.',
        'new' => 'Nuova pagina',
        'add_subpage' => 'Aggiungi sottopagina',
        'invalid_url' => 'Formato dell\'URL non valido. L\'URL deve iniziare con una barra e può contenere numeri, lettere latine e i seguenti simboli: _-/.',
        'url_not_unique' => 'L\'URL è già utilizzato da un\'altra pagina.',
        'layout' => 'Layout',
        'layouts_not_found' => 'Layouts non trovato',
        'saved' => 'Pagina salvata con successo.',
        'tab' => 'Pagine',
        'manage_pages' => 'Gestisci pagine',
        'manage_menus' => 'Gestisci menu',
        'access_snippets' => 'Accedi agli snippet',
        'manage_content' => 'Gestisci contenuti'
    ],
    'menu' => [
        'menu_label' => 'Menu',
        'delete_confirmation' => 'Vuoi davvero eliminare i menu selezionati?',
        'no_records' => 'Nessun menu trovato',
        'new' => 'Nuovo menu',
        'new_name' => 'Nuovo menu',
        'new_code' => 'nuovo-menu',
        'delete_confirm_single' => 'Vuoi davvero eliminare questo menu?',
        'saved' => 'Menu salvato con successo.',
        'name' => 'Nome',
        'code' => 'Codice',
        'items' => 'Voci di menu',
        'add_subitem' => 'Aggiungi sottomenu',
        'code_required' => 'Il Codice è obbligatorio',
        'invalid_code' => 'Formato del Codice non valido. Il Codice può contenere numeri, lettere latine e i seguenti simboli: _-'
    ],
    'menuitem' => [
        'title' => 'Titolo',
        'editor_title' => 'Modifica voce di menu',
        'type' => 'Tipo',
        'allow_nested_items' => 'Consenti elementi nidificati',
        'allow_nested_items_comment' => 'Gli elementi nidificati possono essere generati dinamicamente dalle pagine e altre tipologie di elementi',
        'url' => 'URL',
        'reference' => 'Riferimento',
        'title_required' => 'Il Titolo è obbligatorio',
        'unknown_type' => 'Tipologia di menu sconosciuta',
        'unnamed' => 'Voce di menu senza nome',
        'add_item' => 'Aggiungi elemento',
        'new_item' => 'Nuova voce di menu',
        'replace' => 'Sostituisci questo elemento con i figli generati',
        'replace_comment' => 'Usa questa checkbox per inserire le voci di menu generate allo stesso livello di questo elemento. Questa voce verrà nascosta.',
        'cms_page' => 'Pagine CMS',
        'cms_page_comment' => 'Seleziona una pagina del CMS da aprire quando viene selezionata la voce di menu.',
        'reference_required' => 'Il riferimento della voce di menu è obbligatorio.',
        'url_required' => 'L\'URL è obbligatorio',
        'cms_page_required' => 'Seleziona una pagina CMS',
        'code' => 'Codice',
        'code_comment' => 'Inserisci il codice della voce di menu se vuoi accedervi con l\'API.',
        'static_page' => 'Pagine',
        'all_static_pages' => 'Tutte le pagine'
    ],
    'content' => [
        'menu_label' => 'Contenuti',
        'cant_save_to_dir' => 'Salvataggio dei file di contenuto nella directory static-pages non consentito.'
    ],
    'sidebar' => [
        'add' => 'Aggiungi',
        'search' => 'Cerca...'
    ],
    'object' => [
        'invalid_type' => 'Tipo di oggetto sconosciuto',
        'not_found' => 'Oggetto richiesto non trovato.'
    ],
    'editor' => [
        'title' => 'Titolo',
        'new_title' => 'Titolo nuova pagina',
        'content' => 'Contenuto',
        'url' => 'URL',
        'filename' => 'Nome file',
        'layout' => 'Layout',
        'description' => 'Descrizione',
        'preview' => 'Anteprima',
        'enter_fullscreen' => 'Abilita visualizzazione a schermo intero',
        'exit_fullscreen' => 'Esci dalla visualizzazione a schermo intero',
        'hidden' => 'Nascosto',
        'hidden_comment' => 'Le pagine nascoste sono accessibili soltanto dagli utenti che hanno effettuato l\'accesso al pannello di controllo.',
        'navigation_hidden' => 'Nascondi dalla navigazione',
        'navigation_hidden_comment' => 'Seleziona questa checkbox per nascondere questa pagina dai menu e dalle barre di navigazione generate automaticamente.',
    ],
    'snippet' => [
        'partialtab' => 'Snippet',
        'code' => 'Codice Snippet',
        'code_comment' => 'Inserisci un codice per rendere questa vista parziale disponibile come snippet nel plugin Static Pages.',
        'name' => 'Nome',
        'name_comment' => 'Il nome è visualizzato nella lista degli snippet nella barra laterale di Static Pages e su una Pagina quando viene aggiunto lo snippet.',
        'no_records' => 'Nessuno snippet trovato',
        'menu_label' => 'Snippet',
        'column_property' => 'Titolo proprietà',
        'column_type' => 'Tipo',
        'column_code' => 'Codice',
        'column_default' => 'Default',
        'column_options' => 'Opzioni',
        'column_type_string' => 'Testo',
        'column_type_checkbox' => 'Checkbox',
        'column_type_dropdown' => 'Menu a cascata',
        'not_found' => 'Snippet con codice :code non trovato nel tema.',
        'property_format_error' => 'Il codice della proprietà deve iniziare con una lettera latina e può contenere solo lettere latine e numeri',
        'invalid_option_key' => 'Opzione del menu a cascata non valida: %s. Le opzioni possono contenere solo numeri, lettere latine e i caratteri _ e -'
    ]
];
