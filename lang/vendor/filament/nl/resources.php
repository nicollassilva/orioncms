<?php

return [
    'navigations' => [
        'Dashboard' => 'Dashboard',
        'Hotel' => 'Hotel',
        'Website' => 'Website',
        'Help Center' => 'Helpcentrum',
        'Administration' => 'Administratie',
        'User Management' => 'Gebruikersbeheer',
    ],

    'resources' => [
        'dashboard' => [
            'navigation_label' => 'Dashboard'
        ],
        'achievements' => [
            'navigation_label' => 'Beheer Prestaties',
            'label' => 'Prestatie',
            'plural' => 'Prestaties',
        ],
        'emulator-settings' => [
            'navigation_label' => 'Emulatorinstellingen',
            'label' => 'Instelling',
            'plural' => 'Emulatorinstellingen',
        ],
        'article' => [
            'navigation_label' => 'Beheer Artikelen',
            'label' => 'Artikel',
            'plural' => 'Artikelen',
        ],
        'cms-settings' => [
            'navigation_label' => 'CMS-instellingen',
            'label' => 'Instelling',
            'plural' => 'CMS-instellingen',
        ],
        'help-questions-categories' => [
            'navigation_label' => 'Beheer Categorieën',
            'label' => 'Categorie',
            'plural' => 'Vraagcategorieën',
        ],
        'help-questions' => [
            'navigation_label' => 'Beheer Vragen',
            'label' => 'Vraag',
            'plural' => 'Vragen',
        ],
        'tags' => [
            'navigation_label' => 'Beheer Tags',
            'label' => 'Tag',
            'plural' => 'Tags',
        ],
        'bans' => [
            'navigation_label' => 'Beheer Verbanningen',
            'label' => 'Verbanning',
            'plural' => 'Verbanningen',
        ],
        'users' => [
            'navigation_label' => 'Beheer Gebruikers',
            'label' => 'Gebruiker',
            'plural' => 'Gebruikers',
        ],
        'badge-resource' => [
            'navigation_label' => 'Beheer Badges',
            'label' => 'Badge',
            'plural' => 'Badges',
        ],

        // Relations
        'settings' => [
            'navigation_label' => 'Instellingen',
            'label' => 'Instelling',
            'plural' => 'Instellingen',
        ],
        'badges' => [
            'navigation_label' => 'Badges',
            'label' => 'Badge',
            'plural' => 'Badges',
        ],
    ],

    'common' => [
        'All' => 'Alle',
        'Yes' => 'Ja',
        'No' => 'Nee',
        'Sucessfull' => 'Succesvol',
        'Never' => 'Nooit',
        'Account' => 'Account',
        'IP' => 'IP',
        'Machine' => 'Machine',
        'Super' => 'Super',
        'Male' => 'Man',
        'Female' => 'Vrouw',
        'Credits' => 'Credits',
        'Duckets' => 'Duckets',
        'Diamonds' => 'Diamanten',
        'Points' => 'Punten',
        'Open link' => 'Open link',
    ],

    'helpers' => [
        'achievement_points' => 'Punten voor het behalen van een prestatie',
        'achievement_progress_needed' => 'Voortgang nodig om de prestatie te voltooien',
        'help_questions_category_icon' => 'Je kunt hier elke afbeeldingslink gebruiken. We raden aan om een afbeelding met een formaat van 20x20 te gebruiken.',
        'change_username_description' => 'Sta deze gebruiker toe om zijn gebruikersnaam te wijzigen (binnen de client)',
        'change_password_description' => 'Laat leeg om het huidige wachtwoord te behouden',
        'badge_code_helper' => 'Voer de code in en klik op het vergrootglas naast het veld. Als het embleem bestaat, wordt het automatisch ingevuld.',
    ],

    'tabs' => [
        'Home' => 'Home',
        'Main' => 'Hoofd',
        'Configurations' => 'Configuraties',
        'General Information' => 'Algemene Informatie',
        'Currencies' => 'Valuta',
        'Security' => 'Beveiliging',
        'Change Username' => 'Gebruikersnaam Wijzigen',
        'Change Email' => 'E-mail Wijzigen',
        'Change Password' => 'Wachtwoord Wijzigen',
        'Change Rank' => 'Rang Wijzigen',
        'Account Data' => 'Accountgegevens',
        'Extra Settings' => 'Extra Instellingen',
    ],

    'inputs' => [
        'key' => 'Sleutel',
        'value' => 'Waarde',
        'comment' => 'Opmerking',
        'name' => 'Naam',
        'level' => 'Niveau',
        'email' => 'E-mail',
        'category' => 'Categorie',
        'visible' => 'Zichtbaar',
        'reward_type' => 'Beloningstype',
        'reward_amount' => 'Beloningsbedrag',
        'points' => 'Punten',
        'progress_needed' => 'Benodigde voortgang',
        'fixed' => 'Vast',
        'allow_comments' => 'Reacties toestaan',
        'title' => 'Titel',
        'description' => 'Omschrijving',
        'image' => 'Afbeelding',
        'icon' => 'Pictogram',
        'content' => 'Inhoud',
        'is_promotion' => 'Is dit artikel een promotie?',
        'promotion_ends_at' => 'Promotie eindigt op',
        'categories' => 'Categorieën',
        'background_color' => 'Achtergrondkleur',
        'expires_at' => 'Verloopt op',
        'reason' => 'Reden',
        'type' => 'Type',
        'username' => 'Gebruikersnaam',
        'motto' => 'Motto',
        'gender' => 'Geslacht',
        'created_at' => 'Aangemaakt op',
        'last_login' => 'Laatste login',
        'last_online' => 'Laatst online',
        'ip_register' => 'Registratie-IP',
        'ip_current' => 'Huidige IP',
        'referral_code' => 'Verwijzingscode',
        'referrer_code' => 'Verwijzer Code',
        'allow_change_username' => 'Gebruikersnaam wijzigen toestaan',
        'new_password' => 'Nieuw wachtwoord',
        'new_password_confirmation' => 'Bevestig nieuw wachtwoord',
        'rank' => 'Rang',
        'badge_code' => 'Badge code',
        'achievement_score' => 'Prestatiescore',
        'respects_received' => 'Ontvangen respect',
        'can_trade' => 'Kan handelen?',
        'block_following' => 'Volgen blokkeren',
        'block_friendrequests' => 'Vriendverzoeken blokkeren',
        'block_roominvites' => 'Kameruitnodigingen blokkeren',
        'max_rooms' => 'Maximale kamers',
        'max_friends' => 'Maximale vrienden',
        'old_chat' => 'Oude chat',
        'block_camera_follow' => 'Camera volgen blokkeren',
        'ignore_bots' => 'Bots negeren',
        'ignore_pets' => 'Huisdieren negeren',
        'badge_code' => 'Embleem code',
        'badge_title' => 'Embleem titel',
        'badge_description' => 'Embleem beschrijving',
        'badge_image' => 'Embleem afbeelding',
    ],

    'columns' => [
        'id' => 'ID',
        'badge' => 'Badge',
        'name' => 'Naam',
        'level' => 'Niveau',
        'category' => 'Categorie',
        'visible' => 'Zichtbaar',
        'key' => 'Sleutel',
        'value' => 'Waarde',
        'title' => 'Titel',
        'image' => 'Afbeelding',
        'by' => 'Door',
        'fixed' => 'Vast',
        'allow_comments' => 'Reacties toestaan',
        'comment' => 'Opmerking',
        'order' => 'Volgorde',
        'icon' => 'Pictogram',
        'questions_count' => 'Gekoppelde Vragen',
        'background_color' => 'Achtergrondkleur',
        'avatar' => 'Avatar',
        'username' => 'Gebruikersnaam',
        'reason' => 'Reden',
        'type' => 'Type',
        'banned_at' => 'Verbannen Op',
        'expires_at' => 'Verloopt Op',
        'email' => 'E-mail',
        'motto' => 'Motto',
        'created_at' => 'Aangemaakt Op',
        'online' => 'Online?',
        'badge_code' => 'Badge Code',
        'equipped' => 'Uitgerust?',
        'achievement_score' => 'Prestatiescore',
        'respects_received' => 'Ontvangen Respect',
        'online_time' => 'Online Tijd',
        'can_trade' => 'Kan Handelen?',
        'can_change_name' => 'Kan Naam Wijzigen?',
    ],

    'notifications' => [
        'badge_code_required' => 'Je moet een embleemcode invoeren!',
        'badge_found' => 'Embleem gevonden!',
        'badge_updated' => 'Embleem bijgewerkt!',
        'badge_update_failed' => 'Embleem bijwerken mislukt!',
    ]
];
