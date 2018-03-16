<?php

// Copyright (C) 2015-2018 Jacob Barkdull
// This file is part of HashOver.
//
// I, Jacob Barkdull, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.


// Danish text for forms, buttons, links, and tooltips
$locale = array (
	'comment-form'		=> 'Skriv kommentar her...',
	'reply-form'		=> 'Skriv svar her...',
	'comment-formatting'	=> 'Formatering',
	'accepted-format'	=> 'Akseptabel %s',
	'accepted-html'		=> '&lt;b&gt;, &lt;strong&gt;, &lt;u&gt;, &lt;i&gt;, &lt;em&gt;, &lt;s&gt;, &lt;big&gt;, &lt;small&gt;, &lt;sup&gt;, &lt;sub&gt;, &lt;pre&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;blockquote&gt;, &lt;code&gt; undslipper HTML, URL\'er blir til links automatisk, og [img]URL her[/img] vil vise et eksternt billede.',
	'accepted-markdown'	=> '**Fed**, _understregning_, *kursiv*, ~~gennemstregning~~, `fremhævning`, ```kode``` undslipper HTML. HTML og Markdown kan anvendes sammen i din kommentar.',
	'post-button'		=> 'Send Kommentar',
	'login'			=> 'Login',
	'login-tip'		=> 'Login (ikke påkrævet)',
	'logout'		=> 'Logout',
	'be-first-name'		=> 'Ingen kommentarer endnu.',
	'pending-name'		=> 'Venter...',
	'deleted-name'		=> 'Slettet...',
	'error-name'		=> 'Fejl...',
	'be-first-note'		=> 'Vær den første til at kommentere!',
	'pending-note'		=> 'Denne kommentar venter på godkendelse.',
	'deleted-note'		=> 'Denne kommentar er slettet.',
	'error-note'		=> 'Et eller andet gik galt. Kunne ikke hente kommentaren.',
	'options'		=> 'Valgmuligheder',
	'cancel'		=> 'Fortryd',
	'reply-to-comment'	=> 'Svar på kommentar',
	'edit-your-comment'	=> 'Rediger din kommentar',
	'optional'		=> 'Valgfri',
	'required'		=> 'Påkrævet',
	'name'			=> 'Navn',
	'name-tip'		=> 'Navn (%s)',
	'password'		=> 'Pasord',
	'password-tip'		=> 'Pasord (%s, gør det muligt for dig, at redigere eller slette denne kommentar)',
	'confirm-password'	=> 'Bekræft Pasord',
	'email'			=> 'Email Addresse',
	'email-tip'		=> 'Email Addresse (%s, for varsling via email)',
	'website'		=> 'Websted',
	'website-tip'		=> 'Websted (%s)',
	'logged-in'		=> 'Du er blevet logget ind!',
	'logged-out'		=> 'Du er blevet logget ud!',
	'comment-needed'	=> 'Du fik aldrig skrevet en kommentar. Prøv igen.',
	'reply-needed'		=> 'Du fik aldrig skrevet et svar. Prøv igen.',
	'field-needed'		=> 'Feltet "%s" er påkrævet.',
	'post-fail'		=> 'Fejl! Du har ikke de nødvendige rettigheder.',
	'comment-deleted'	=> 'Kommentar Slettet!',
	'post-reply'		=> 'Send Svar',
	'delete'		=> 'Slet',
	'permanently-delete'	=> 'Slet Permanent',
	'subscribe'		=> 'Påmind mig om svar',
	'subscribe-tip'		=> 'Tilmeld email varsling',
	'edit-comment'		=> 'Rediger kommentar',
	'status'		=> 'Status',
	'status-approved'	=> 'Godkendt',
	'status-pending'	=> 'Afventer godkendelse',
	'status-deleted'	=> 'Markerede slettet',
	'save'			=> 'Gem',
	'no-email-warning'	=> 'Du vil ikke modtage varslinger af svar til din kommentar uden at oplyse en email.',
	'invalid-email'		=> 'Email addressen du skrev er ugyldig.',
	'delete-comment'	=> 'Er du sikker på, at du vil slette denne kommentar?',
	'post-comment-on'	=> array ('Skriv en kommentar', 'Skriv en kommentar til "%s"'),
	'popular-comments'	=> array ('Populære Kommentarer', 'Populære Kommentarer'),
	'showing-comments'	=> array ('Viser %d Kommentar', 'Viser %d Kommentarer'),
	'count-link'		=> array ('%d Kommentar', '%d Kommentarer'),
	'count-replies'		=> array ('%d med svar', '%d med svar'),
	'sort'			=> 'Sorter',
	'sort-ascending'	=> 'I rækkefølge',
	'sort-descending'	=> 'I omvendt rækkefølge',
	'sort-by-date'		=> 'Nyeste først',
	'sort-by-likes'		=> 'Flest likes',
	'sort-by-replies'	=> 'Flest svar',
	'sort-by-discussion'	=> 'Efter diskussion',
	'sort-by-popularity'	=> 'Efter popularitet',
	'sort-by-name'		=> 'Efter navn',
	'sort-threads'		=> 'Tråde',
	'thread'		=> 'I svar til %s',
	'thread-tip'		=> 'Hop til toppen af tråden',
	'comments'		=> 'Kommentarer',
	'replies'		=> 'Svar',
	'edit'			=> 'Rediger',
	'reply'			=> 'Svar',
	'like'			=> array ('Synes om', 'Synes om'),
	'liked'			=> 'Synes godt om',
	'unlike'		=> 'Synes ikke om',
	'like-comment'		=> '\'Synes godt om\' denne kommentar',
	'liked-comment'		=> 'Synes ikke godt om denne kommentar',
	'dislike'		=> array ('Synes ikke om', 'Synes ikke om'),
	'disliked'		=> 'Syntes ikke om',
	'dislike-comment'	=> '\'Synes ikke om\' denne kommentar',
	'disliked-comment'	=> 'Du \'Syntes ikke om\' denne kommentar',
	'commenter-tip'		=> 'Du vil ikke blive varslet via email',
	'subscribed-tip'	=> 'vil blive varslet via email',
	'unsubscribed-tip'	=> 'er ikke tilmeldt email varsling',
	'show-other-comments'	=> array ('Vis %d Yderlig Kommentar', 'Vis %d Yderligere Kommentarer'),
	'show-number-comments'	=> array ('Vis %d Kommentar', 'Vis %d Kommentar'),
	'date-time'		=> '%s \p\å %s',
	'date-years'		=> array ('%d år siden', '%d år siden'),
	'date-months'		=> array ('%d måned siden', '%d måneder siden'),
	'date-days'		=> array ('%d dag siden', '%d dage siden'),
	'date-today'		=> '%s i dag',
	'date-day-names'	=> array ('Søndag', 'Mandag', 'tirsdag', 'onsdag', 'torsdag', 'Fredag', 'lørdag'),
	'date-month-names'	=> array ('Januar', 'Februar', 'Marts', 'April', 'Kan', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'December'),
	'untitled'		=> 'Unavngivet',
	'external-image-tip'	=> 'Klik for at se ekstern billede',
	'loading'		=> 'Henter...',
	'click-to-close'	=> 'Klik for at lukke',
	'hashover-comments'	=> 'HashOver Kommentarer',
	'rss-feed'		=> 'RSS Feed',
	'source-code'		=> 'Kilde Kode',

	'source-code-sub'	=> 'HashOver server-side kildekoden viewer',
	'type'			=> 'Type',
	'path'			=> 'Sti',
	'view-as'		=> 'Se som',
	'text'			=> 'Tekst',
	'download'		=> 'Hent',

	'documentation'		=> 'Dokumentation',
	'coming-soon'		=> 'Kommer snart',
	'example'		=> 'Eksempel',
	'back'			=> 'Tilbage',
	'value'			=> 'Værdi',

	'successful-save'	=> 'Vellykket gemt!',
	'failed-to-save'	=> 'Kunne ikke gemme! Kontroller tilladelser.',
	'permissions-info'	=> 'Give "%s" tilladelser 0755 og ejerskab til "%s"-brugeren.',

	'admin'			=> 'Admin',
	'moderation'		=> 'Moderation',
	'block-ip-addresses'	=> 'Bloker IP-adresser',
	'filter-url-queries'	=> 'Filter URL Queries',
	'check-for-updates'	=> 'Check for Updates',
	'settings'		=> 'Indstillinger',

	'admin-required'	=> 'Du skal være logget som administrator',

	'blocklist-title'	=> 'IP-adresseliste',
	'blocklist-sub'		=> 'Blokér specifikke IP-adresser',
	'blocklist-ip-tip'	=> 'IP-adresse eller tom for at fjerne',

	'url-queries-title'	=> 'Ignorerede URL forespørgsler',
	'url-queries-sub'	=> 'Filtrer hvilke webadressespørgsmål der skal ignoreres',
	'url-queries-name-tip'	=> 'Navne navn eller tom for at fjerne',
	'url-queries-value-tip'	=> 'Forespørgselsværdi eller tom for enhver værdi',

	'settings-sub'		=> 'Skift forskellige indstillinger',
	'moderation-sub'	=> 'Indlæg, redigere, godkende og slet kommentarer',

	'setting-language'			=> 'Sprog',
	'setting-theme'				=> 'Tema',
	'setting-uses-moderation'		=> 'Kommentarer indsendt af normale brugere kræver moderering',
	'setting-pends-user-edits'		=> 'Kommentarer redigeret af normale brugere kræver yderligere moderering',
	'setting-data-format'			=> 'Kommentar dataformat',
	'setting-default-name'			=> 'Standardkommentatornavn',
	'setting-allows-images'			=> 'Tillad visning af billeder i kommentarer',
	'setting-allows-login'			=> 'Tillad brugere at logge ind',
	'setting-allows-likes'			=> 'Tillad brugere at kunne lide kommentarer',
	'setting-allows-dislikes'		=> 'Tillad brugere at ikke lide kommentarer',
	'setting-uses-ajax'			=> 'Aktiver asynkron JavaScript-funktioner',
	'setting-collapses-interface'		=> 'Skjul hele HashOver brugergrænseflade',
	'setting-collapses-comments'		=> 'Skjul et konfigurerbart antal kommentarer',
	'setting-collapse-limit'		=> 'Antal kommentarer til sammenbrud',
	'setting-reply-mode'			=> 'Visningstilstand for kommenterede tråde',
	'setting-stream-depth'			=> 'Antal svarindrykninger før strømmen er fladt',
	'setting-popularity-threshold'		=> 'Netto antal synes om, at en kommentar skal være populær',
	'setting-popularity-limit'		=> 'Antal populære kommentarer, der skal vises',
	'setting-uses-markdown'			=> 'Aktiver Markdown support',
	'setting-server-timezone'		=> 'Server tidzone',
	'setting-uses-user-timezone'		=> 'Vis datoer / tider i brugerens tidszone (JavaScript-tilstand)',
	'setting-uses-short-dates'		=> 'Aktiver kortere datoer / tider (eksempel "1 dag siden")',
	'setting-time-format'			=> 'Tidsformat, brug "H:i" til 24-timers format',
	'setting-date-format'			=> 'Datoformat',
	'setting-displays-title'		=> 'Aktiver visning af sidetitel',
	'setting-form-position'			=> 'Position for primær kommentarformular',
	'setting-uses-auto-login'		=> 'Log automatisk ind brugere, når de sender kommentarer',
	'setting-shows-reply-count'		=> 'Vis svar tæller adskilt fra total tæller',
	'setting-count-includes-deleted'	=> 'Inkluder slettede kommentarer i kommentar tæller',
	'setting-icon-mode'			=> 'Avatarikonets visningstilstand',
	'setting-icon-size'			=> 'Avatarikonstørrelse',
	'setting-image-format'			=> 'Formater for ikoner og andre billeder',
	'setting-uses-labels'			=> 'Vis etiketter over input',
	'setting-uses-cancel-buttons'		=> 'Om formularer har annullere knapper',
	'setting-appends-css'			=> 'Tilføj automatisk HashOver CSS til side',
	'setting-appends-rss'			=> 'Tilføj HashOver RSS Feed links til side',
	'setting-login-method'			=> 'Bruger login system',
	'setting-sets-cookies'			=> 'Aktiver cookies',
	'setting-secure-cookies'		=> 'Brug kun HTTPS-kun cookies',
	'setting-stores-ip-address'		=> 'Aktiver opbevaring af brugerens IP-adresser',
	'setting-allows-user-replies'		=> 'Angiv brugerens e-mail som "Svar til" i svarmeddelelser',
	'setting-noreply-email'			=> 'E-mail-adresse, der bruges, når der ikke gives e-mail',
	'setting-spam-batabase'			=> 'SPAM database placering',
	'setting-spam-check-modes'		=> 'Tilstande til at udføre SPAM check under',
	'setting-gravatar-force'		=> 'Brug tema Gravatar billeder i stedet for avatars',
	'setting-gravatar-default'		=> 'Standard Gravatar tema at bruge',
	'setting-minifies-javascript'		=> 'Aktiver JavaScript-minificering',
	'setting-minify-level'			=> 'JavaScript-minusniveau',
	'setting-allow-local-metadata'		=> 'Tillad side metadata at blive opdateret fra localhost'
);
