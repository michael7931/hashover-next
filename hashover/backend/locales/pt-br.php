<?php

// Copyright (C) 2015-2018 Jacob Barkdull
// This file is part of HashOver.
//
// I, Jacob Barkdull, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.


// Brazilian Portuguese text for forms, buttons, links, and tooltips
$locale = array (
	'comment-form'		=> 'Digite aqui seu comentário...',
	'reply-form'		=> 'Digite a resposta aqui...',
	'comment-formatting'	=> 'Formatação',
	'accepted-format'	=> '%s permitido',
	'accepted-html'		=> '&lt;b&gt;, &lt;strong&gt;, &lt;u&gt;, &lt;i&gt;, &lt;em&gt;, &lt;s&gt;, &lt;big&gt;, &lt;small&gt;, &lt;sup&gt;, &lt;sub&gt;, &lt;pre&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;blockquote&gt;, &lt;code&gt; evite HTML, URLs automaticamente se tornam links, e [img]URL aqui[/img] irão mostrar uma imagem externa.',
	'accepted-markdown'	=> '**Negrito**, _sublinhado_, *itálico*, ~~tachado~~, `destaque`, ```código``` escapes HTML. HTML e Markdown podem ser usados em conjunto no seu comentário.',
	'post-button'		=> 'Enviar comentário.',
	'login'			=> 'Fazer login',
	'login-tip'		=> 'Fazer login (opcionais)',
	'logout'		=> 'Sair',
	'be-first-name'		=> 'Ainda não há comentários.',
	'pending-name'		=> 'Pendente...',
	'deleted-name'		=> 'Suprimido...',
	'error-name'		=> 'Erro...',
	'be-first-note'		=> 'Seja o primeiro a comentar!',
	'pending-note'		=> 'Esse comentário está pendente de aprovação.',
	'deleted-note'		=> 'Este comentário foi deletado.',
	'error-note'		=> 'Algo deu errado. Não foi possível recuperar este comentário.',
	'options'		=> 'Opções',
	'cancel'		=> 'Cancelar',
	'reply-to-comment'	=> 'Responder ao comentário',
	'edit-your-comment'	=> 'Editar seu comentário',
	'optional'		=> 'Opcionais',
	'required'		=> 'Obrigatório',
	'name'			=> 'Nome',
	'name-tip'		=> 'Nome (%s)',
	'password'		=> 'Senha',
	'password-tip'		=> 'Senha (%s, permite que você edite ou inclua este comentário)',
	'confirm-password'	=> 'Confirme a Senha',
	'email'			=> 'E-mail',
	'email-tip'		=> 'E-mail Address (%s, para as notificações de e-mail)',
	'website'		=> 'Website',
	'website-tip'		=> 'Website (%s)',
	'logged-in'		=> 'Você logou com sucesso!',
	'logged-out'		=> 'Você tem saiu com sucesso!',
	'comment-needed'	=> 'Você não enviou um comentário de maneira correta. Por favor, tente novamente.',
	'reply-needed'		=> 'Você não respondeu ao comentário de maneira correta. Por favor, tente novamente.',
	'field-needed'		=> 'O campo "%s" é obrigatório.',
	'post-fail'		=> 'Falha! Você não possui permissões suficientes.',
	'comment-deleted'	=> 'Comentário suprimido!',
	'post-reply'		=> 'Enviar resposta',
	'delete'		=> 'Apagar',
	'permanently-delete'	=> 'Apagar Permanentemente',
	'subscribe'		=> 'Notifique-me sobre respostas',
	'subscribe-tip'		=> 'Assine para receber notícias por email.',
	'edit-comment'		=> 'Editar comentários',
	'status'		=> 'Status',
	'status-approved'	=> 'Aprovado',
	'status-pending'	=> 'Pendente de aprovação',
	'status-deleted'	=> 'Marcado suprimido',
	'save'			=> 'Salvar',
	'no-email-warning'	=> 'Você não receberá notificações ou respostas do seu comentário sem fornecer um endereço de email.',
	'invalid-email'		=> 'O endereço de e-mail digitado é inválido.',
	'delete-comment'	=> 'Tem certeza que deseja apagar este comentário?',
	'post-comment-on'	=> array ('Enviar um comentário', 'Enviar um comentário na "%s"'),
	'popular-comments'	=> array ('Mais Populares Comentário', 'Mais Populares Comentários'),
	'showing-comments'	=> array ('Mostrando %d Comentário', 'Mostrando %d Comentários'),
	'count-link'		=> array ('%d Comentário', '%d Comentários'),
	'count-replies'		=> array ('%d contando resposta', '%d contando respostas'),
	'sort'			=> 'Ordenar',
	'sort-ascending'	=> 'Em ordem',
	'sort-descending'	=> 'Em ordem onversa',
	'sort-by-date'		=> 'Recentes primeiro',
	'sort-by-likes'		=> 'Por likes',
	'sort-by-replies'	=> 'Por respostas',
	'sort-by-discussion'	=> 'Por discussão',
	'sort-by-popularity'	=> 'Por popularidade',
	'sort-by-name'		=> 'Por comentarista',
	'sort-threads'		=> 'Threads',
	'thread'		=> 'Em resposta a %s',
	'thread-tip'		=> 'Ir para o início da conversa',
	'comments'		=> 'Comentários',
	'replies'		=> 'Respostas',
	'edit'			=> 'Editar',
	'reply'			=> 'Resposta',
	'like'			=> array ('Gostei', 'Likes'),
	'liked'			=> 'Gostou',
	'unlike'		=> 'Desgostei',
	'like-comment'		=> '\'Gostei\' deste comentário',
	'liked-comment'		=> 'Você \'Gostou\' Deste comentário',
	'dislike'		=> array ('Desgostei', 'Dislikes'),
	'disliked'		=> 'Desgostou',
	'dislike-comment'	=> '\'Desgostei\' deste comentário',
	'disliked-comment'	=> 'Você \'Desgostou\' deste comentário',
	'commenter-tip'		=> 'Você não será avisado por email.',
	'subscribed-tip'	=> 'será avisado por email.',
	'unsubscribed-tip'	=> 'não assinou para receber notificações por email',
	'show-other-comments'	=> array ('Mostrar %d outro Comentário', 'Mostrar %d outro Comentários'),
	'show-number-comments'	=> array ('Mostrar %d Comentário', 'Mostrar %d Comentários'),
	'date-time'		=> '%s \à\s %s',
	'date-years'		=> array ('%d ano atrás', '%d anos atrás'),
	'date-months'		=> array ('%d mes atrás', '%d meses atrás'),
	'date-days'		=> array ('%d dia atrás', '%d dias atrás'),
	'date-today'		=> '%s hoje',
	'date-day-names'	=> array ('Domingo', 'Segunda-feira', 'Terça', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'),
	'date-month-names'	=> array ('Janeiro', 'Fevereiro', 'Marcha', 'Abril', 'Pode', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'),
	'untitled'		=> 'Sem Título',
	'external-image-tip'	=> 'Clique para ver imagem externa',
	'loading'		=> 'Carregando...',
	'click-to-close'	=> 'Clique para fechar',
	'hashover-comments'	=> 'HashOver Comentários',
	'rss-feed'		=> 'RSS Feed',
	'source-code'		=> 'Código Fonte',

	'source-code-sub'	=> 'Visualizador de código fonte do lado do servidor HashOver',
	'type'			=> 'Tipo',
	'path'			=> 'Caminho',
	'view-as'		=> 'Vista como',
	'text'			=> 'Texto',
	'download'		=> 'Download',

	'documentation'		=> 'Documentação',
	'coming-soon'		=> 'Próxima',
	'example'		=> 'Exemplo',
	'back'			=> 'Voltar',
	'value'			=> 'Valor',

	'successful-save'	=> 'Gravado com sucesso!',
	'failed-to-save'	=> 'Falha ao salvar! Verifique as permissões.',
	'permissions-info'	=> 'Dê "%s" permissões 0755 e propriedade para o usuário "%s".',

	'admin'			=> 'Administrador',
	'moderation'		=> 'Moderação',
	'block-ip-addresses'	=> 'Bloquear Endereços IP',
	'filter-url-queries'	=> 'Filtrar consultas de URL',
	'check-for-updates'	=> 'Verificar atualizações',
	'settings'		=> 'Configurações',

	'admin-required'	=> 'Você deve estar logado como administrador',

	'blocklist-title'	=> 'Lista de Bloqueio de Endereço IP',
	'blocklist-sub'		=> 'Bloquear endereços IP específicos',
	'blocklist-ip-tip'	=> 'Endereço IP ou em branco para remover',

	'url-queries-title'	=> 'Consultas de URL ignoradas',
	'url-queries-sub'	=> 'Filtre quais consultas de URL devem ser ignoradas',
	'url-queries-name-tip'	=> 'Nome da consulta ou em branco para remover',
	'url-queries-value-tip'	=> 'Valor da consulta ou em branco para qualquer valor',

	'settings-sub'		=> 'Alterar várias configurações',
	'moderation-sub'	=> 'Publicar, editar, aprovar e excluir comentários',

	'setting-language'			=> 'Língua',
	'setting-theme'				=> 'Tema',
	'setting-uses-moderation'		=> 'Os comentários postados por usuários normais requerem moderação',
	'setting-pends-user-edits'		=> 'Os comentários editados por usuários normais requerem moderação',
	'setting-data-format'			=> 'Formato de dados de comentários',
	'setting-default-name'			=> 'Nome do comentador padrão',
	'setting-allows-images'			=> 'Permitir exibição de imagens nos comentários',
	'setting-allows-login'			=> 'Permitir que os usuários façam login',
	'setting-allows-likes'			=> 'Permitir que os usuários gostem de comentários',
	'setting-allows-dislikes'		=> 'Permitir que os usuários não gostem de comentários',
	'setting-uses-ajax'			=> 'Habilitar recursos de JavaScript assíncronos',
	'setting-collapses-interface'		=> 'Reduzir toda a interface do usuário do HashOver',
	'setting-collapses-comments'		=> 'Recolher um número configurável de comentários',
	'setting-collapse-limit'		=> 'Número de comentários para colapsar',
	'setting-reply-mode'			=> 'Modo de exibição de tópicos de comentários',
	'setting-stream-depth'			=> 'Número de indenções de resposta antes do fluxo é achatado',
	'setting-popularity-threshold'		=> 'Número líquido de gostos um comentário precisa ser popular',
	'setting-popularity-limit'		=> 'Número de comentários populares a serem exibidos',
	'setting-uses-markdown'			=> 'Ative o suporte do Markdown',
	'setting-server-timezone'		=> 'Fuso horário do servidor',
	'setting-uses-user-timezone'		=> 'Exibir datas / horas no fuso horário do usuário (modo JavaScript)',
	'setting-uses-short-dates'		=> 'Habilitar datas / vezes mais curtas (exemplo "1 dia atrás")',
	'setting-time-format'			=> 'Formato de hora, use "H:i" para o formato de 24 horas',
	'setting-date-format'			=> 'Formato da data',
	'setting-displays-title'		=> 'Ativar exibição do título da página',
	'setting-form-position'			=> 'Posição para formulário de comentário primário',
	'setting-uses-auto-login'		=> 'Regista automaticamente os usuários quando eles postam comentários',
	'setting-shows-reply-count'		=> 'Exibir contagem de respostas separadamente da contagem total',
	'setting-count-includes-deleted'	=> 'Incluir comentários excluídos nas contagens de comentários',
	'setting-icon-mode'			=> 'Modo de exibição do ícone Avatar',
	'setting-icon-size'			=> 'Tamanho do ícone do Avatar',
	'setting-image-format'			=> 'Formato para ícones e outras imagens',
	'setting-uses-labels'			=> 'Exibir etiquetas acima das entradas',
	'setting-uses-cancel-buttons'		=> 'Se os formulários têm botões de cancelamento',
	'setting-appends-css'			=> 'Adiciona automaticamente HashOver CSS à página',
	'setting-appends-rss'			=> 'Adicionar HashOver RSS Feed links para a página',
	'setting-login-method'			=> 'Sistema de login do usuário',
	'setting-sets-cookies'			=> 'Habilitar cookies',
	'setting-secure-cookies'		=> 'Usar cookies seguros do HTTPS',
	'setting-stores-ip-address'		=> 'Habilitar o armazenamento de endereços IP do usuário',
	'setting-subscribes-user'		=> 'Assine o usuário para notificações por e-mail por padrão',
	'setting-allows-user-replies'		=> 'Configure o e-mail do usuário como "Responder-Para" nas notificações de resposta',
	'setting-noreply-email'			=> 'Endereço de e-mail usado quando nenhum e-mail é fornecido',
	'setting-spam-batabase'			=> 'Localização do banco de dados SPAM',
	'setting-spam-check-modes'		=> 'Modos para executar a verificação SPAM sob',
	'setting-gravatar-force'		=> 'Use imagens gravatar temáticas em vez de avatares',
	'setting-gravatar-default'		=> 'Tema gravatar padrão para usar',
	'setting-minifies-javascript'		=> 'Ativar minificação de JavaScript',
	'setting-minify-level'			=> 'Nível de minificação de JavaScript',
	'setting-allow-local-metadata'		=> 'Permitir que os metadados da página sejam atualizados do localhost'
);
