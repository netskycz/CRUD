<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new' => 'Uložit a nový záznam',
    'save_action_save_and_edit' => 'Uložit a upravit tento záznam',
    'save_action_save_and_back' => 'Uložit a zpět',
    'save_action_save_and_preview' => 'Uložit a zobrazit náhled',
    'save_action_changed_notification' => 'Výchozí chování po uložení bylo změněno.',

    // Create form
    'add' => 'Přidat',
    'back_to_all' => 'Zpět na vše ',
    'cancel' => 'Zrušit',
    'add_a_new' => 'Přidat nový ',

    // Edit form
    'edit' => 'Upravit',
    'save' => 'Uložit',

    // Translatable models
    'edit_translations' => 'Překlad',
    'language' => 'Jazyk',

    // CRUD table view
    'all' => 'Vše ',
    'in_the_database' => 'v databázi',
    'list' => 'Seznam',
    'reset' => 'Resetovat',
    'actions' => 'Akce',
    'preview' => 'Náhled',
    'delete' => 'Smazat',
    'admin' => 'Admin',
    'details_row' => 'Toto je řádek s detaily. Upravte dle potřeby.',
    'details_row_loading_error' => 'Při načítání detailů došlo k chybě. Prosím, zkuste to znovu.',
    'clone' => 'Klonovat',
    'clone_success' => '<strong>Záznam byl klonován</strong><br>Byl přidán nový záznam se stejnými informacemi jako tento.',
    'clone_failure' => '<strong>Klonování se nezdařilo</strong><br>Nový záznam nemohl být vytvořen. Prosím, zkuste to znovu.',

    // Confirmation messages and bubbles
    'delete_confirm' => 'Opravdu chcete smazat tento záznam?',
    'delete_confirmation_title' => 'Záznam smazán',
    'delete_confirmation_message' => 'Záznam byl úspěšně smazán.',
    'delete_confirmation_not_title' => 'Nesmazáno',
    'delete_confirmation_not_message' => 'Došlo k chybě. Váš záznam možná nebyl smazán.',
    'delete_confirmation_not_deleted_title' => 'Nesmazáno',
    'delete_confirmation_not_deleted_message' => 'Nic se nestalo. Váš záznam je stále bezpečný.',

    // Bulk actions
    'bulk_no_entries_selected_title' => 'Nebyly vybrány žádné záznamy',
    'bulk_no_entries_selected_message' => 'Prosím, vyberte jeden nebo více záznamů pro hromadnou akci.',

    // Bulk delete
    'bulk_delete_are_you_sure' => 'Opravdu chcete smazat tyto :number záznamy?',
    'bulk_delete_sucess_title' => 'Záznamy smazány',
    'bulk_delete_sucess_message' => ' záznamů bylo smazáno',
    'bulk_delete_error_title' => 'Smazání se nezdařilo',
    'bulk_delete_error_message' => 'Jeden nebo více záznamů nemohlo být smazáno',

    // Bulk clone
    'bulk_clone_are_you_sure' => 'Opravdu chcete klonovat tyto :number záznamy?',
    'bulk_clone_sucess_title' => 'Záznamy byly klonovány',
    'bulk_clone_sucess_message' => ' záznamů bylo klonováno.',
    'bulk_clone_error_title' => 'Klonování se nezdařilo',
    'bulk_clone_error_message' => 'Jeden nebo více záznamů nemohlo být vytvořeno. Prosím, zkuste to znovu.',

    // Ajax errors
    'ajax_error_title' => 'Chyba',
    'ajax_error_text' => 'Chyba při načítání stránky. Prosím, obnovte stránku.',

    // DataTables translation
    'emptyTable' => 'V tabulce nejsou k dispozici žádná data',
    'info' => 'Zobrazuje se _START_ až _END_ z _TOTAL_ záznamů',
    'infoEmpty' => 'Žádné záznamy',
    'infoFiltered' => '(filtrováno z _MAX_ celkových záznamů)',
    'infoPostFix' => '.',
    'thousands' => ',',
    'lengthMenu' => '_MENU_ záznamů na stránku',
    'loadingRecords' => 'Načítání...',
    'processing' => 'Zpracovává se...',
    'search' => 'Hledat',
    'zeroRecords' => 'Nebyly nalezeny žádné odpovídající záznamy',
    'paginate' => [
        'first' => 'První',
        'last' => 'Poslední',
        'next' => 'Další',
        'previous' => 'Předchozí',
    ],
    'aria' => [
        'sortAscending' => ': aktivujte pro řazení sloupce vzestupně',
        'sortDescending' => ': aktivujte pro řazení sloupce sestupně',
    ],
    'export' => [
        'export' => 'Exportovat',
        'copy' => 'Kopírovat',
        'excel' => 'Excel',
        'csv' => 'CSV',
        'pdf' => 'PDF',
        'print' => 'Tisk',
        'column_visibility' => 'Viditelnost sloupců',
    ],
    'custom_views' => [
        'title' => 'vlastní zobrazení',
        'title_short' => 'zobrazení',
        'default' => 'výchozí',
    ],

    // global crud - errors
    'unauthorized_access' => 'Neoprávněný přístup - nemáte potřebná oprávnění pro zobrazení této stránky.',
    'please_fix' => 'Prosím, opravte následující chyby:',

    // global crud - success / error notification bubbles
    'insert_success' => 'Záznam byl úspěšně přidán.',
    'update_success' => 'Záznam byl úspěšně upraven.',

    // CRUD reorder view
    'reorder' => 'Přeuspořádat',
    'reorder_text' => 'Použijte táhni a pusť pro přeuspořádání.',
    'reorder_success_title' => 'Hotovo',
    'reorder_success_message' => 'Vaše pořadí bylo uloženo.',
    'reorder_error_title' => 'Chyba',
    'reorder_error_message' => 'Vaše pořadí nebylo uloženo.',

    // CRUD yes/no
    'yes' => 'Ano',
    'no' => 'Ne',

    // CRUD filters navbar view
    'filters' => 'Filtry',
    'toggle_filters' => 'Přepnout filtry',
    'remove_filters' => 'Odstranit filtry',
    'apply' => 'Aplikovat',

    //filters language strings
    'today' => 'Dnes',
    'yesterday' => 'Včera',
    'last_7_days' => 'Posledních 7 dní',
    'last_30_days' => 'Posledních 30 dní',
    'this_month' => 'Tento měsíc',
    'last_month' => 'Minulý měsíc',
    'custom_range' => 'Vlastní rozsah',
    'weekLabel' => 'T',

    // Fields
    'browse_uploads' => 'Procházet nahrávky',
    'select_all' => 'Vybrat vše',
    'select_files' => 'Vybrat soubory',
    'select_file' => 'Vybrat soubor',
    'clear' => 'Vymazat',
    'page_link' => 'Odkaz na stránku',
    'page_link_placeholder' => 'http://example.com/vaše-požadovaná-stránka',
    'internal_link' => 'Interní odkaz',
    'internal_link_placeholder' => 'Interní slug. Např.: \'admin/stránka\' (bez uvozovek) pro \':url\'',
    'external_link' => 'Externí odkaz',
    'choose_file' => 'Vybrat soubor',
    'new_item' => 'Nový záznam',
    'select_entry' => 'Vybrat záznam',
    'select_entries' => 'Vybrat záznamy',
    'upload_multiple_files_selected' => 'Vybrané soubory. Po uložení se zobrazí nahoře.',

    //Table field
    'table_cant_add' => 'Nelze přidat nový :entity',
    'table_max_reached' => 'Maximální počet :max dosažen',

    // google_map
    'google_map_locate' => 'Získat mou polohu',

    // File manager
    'file_manager' => 'Správce souborů',

    // InlineCreateOperation
    'related_entry_created_success' => 'Související záznam byl vytvořen a vybrán.',
    'related_entry_created_error' => 'Nepodařilo se vytvořit související záznam.',
    'inline_saving' => 'Ukládání...',

    // returned when no translations found in select inputs
    'empty_translations' => '(prázdné)',

    // The pivot selector required validation message
    'pivot_selector_required_validation_message' => 'Pivot pole je vyžadováno.',
];
