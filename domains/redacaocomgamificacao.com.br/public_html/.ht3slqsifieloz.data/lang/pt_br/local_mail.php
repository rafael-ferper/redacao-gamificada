<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_mail', language 'pt_br', version '4.1'.
 *
 * @package     local_mail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addbcc'] = 'Adicionar Bcc';
$string['addcc'] = 'Adicionar Cc';
$string['addrecipients'] = 'Adicionar destinatários';
$string['addto'] = 'Adicionar para';
$string['advsearch'] = 'Busca avançada';
$string['all'] = 'Todos';
$string['applychanges'] = 'Aplicar';
$string['assigntonewlabel'] = 'Marcar com novo marcador';
$string['attachments'] = 'Anexos';
$string['attachnumber'] = '{$a} anexos';
$string['bcc'] = 'Bcc';
$string['bulkmessage'] = 'Com os usuários selecionados, enviar um email local...';
$string['cancel'] = 'Cancelar';
$string['cannotcompose'] = 'Você não pode escrever mensagens porque não está inscrito em nenhum curso.';
$string['cc'] = 'Cc';
$string['compose'] = 'Novo e-mail';
$string['configenablebackup'] = 'Backup / Restauração';
$string['configenablebackupdesc'] = 'Ativar o backup e a restauração de mensagens e rótulos de email.';
$string['configlegacynav'] = 'Navegação legada';
$string['configlegacynavdesc'] = 'Use o estilo de navegação legado. Não recomendado para Moodle 3.2 ou versões mais recentes. Ele será excluído na versão 2.0 do plugin.';
$string['continue'] = 'Continuar';
$string['courses'] = 'Cursos';
$string['delete'] = 'Excluir';
$string['discard'] = 'Descartar';
$string['downloadall'] = 'Baixar tudo';
$string['draft'] = 'Rascunho';
$string['drafts'] = 'Rascunhos';
$string['editlabel'] = 'Editar rótulos';
$string['emptyrecipients'] = 'Sem destinatários.';
$string['emptytrash'] = 'Esvaziar lixeira';
$string['emptytrashconfirm'] = 'Você está prestes a esvaziar a lixeira';
$string['erroremptycourse'] = 'Por favor, especifique um curso.';
$string['erroremptylabelname'] = 'Especifique um nome de rótulo.';
$string['erroremptyrecipients'] = 'Por favor, especifique ao menos um destinatário.';
$string['erroremptysubject'] = 'Por favor, especifique um assunto.';
$string['errorinvalidcolor'] = 'Cor inválida';
$string['errorrepeatedlabelname'] = 'O nome do rótulo já existe';
$string['filterbydate'] = 'Data';
$string['forward'] = 'Encaminhar';
$string['from'] = 'De';
$string['hasattachments'] = '(Mensagem com anexos)';
$string['inbox'] = 'Caixa de entrada';
$string['invalidlabel'] = 'Rótulo inválido';
$string['invalidmessage'] = 'Mensagem inválida';
$string['labelcolor'] = 'Cor';
$string['labeldeleteconfirm'] = 'Você está prestes a excluir completamente o rótulo \'{$a}\'';
$string['labelname'] = 'Nome';
$string['labels'] = 'Rótulos';
$string['mail:addinstance'] = 'Adicionar novo email';
$string['mail:mailsamerole'] = 'Enviar emails para usuários com o mesmo papel';
$string['mail:usemail'] = 'Usar email';
$string['mailmenu'] = 'Menu do email';
$string['mailupdater'] = 'Atualizador de email';
$string['markasread'] = 'Marcar como lida';
$string['markasread_help'] = 'Se habilitado, todas as novas mensagens serão marcadas como lidas';
$string['markasstarred'] = 'Marcar como favorita';
$string['markasunread'] = 'Marcar como não lida';
$string['markasunstarred'] = 'Desmarcar como favorita';
$string['maxattachments'] = 'Número máximo de anexos';
$string['maxattachmentsize'] = 'Tamanho máximo do anexo';
$string['message'] = 'Mensagem';
$string['messagedeleteconfirm'] = 'Você está prestes a excluir completamente a mensagem \'{$a}\'';
$string['messageprovider:mail'] = 'Notificação recebida por email';
$string['messagesdeleteconfirm'] = 'Você está prestes a deletar completamente {$a} mensagem(ns)';
$string['moreactions'] = 'Mais';
$string['mymail'] = 'Meu email';
$string['newlabel'] = 'Novo rótulo';
$string['nocolor'] = 'Sem cor';
$string['nolabels'] = 'Não há rótulos disponíveis.';
$string['nomessages'] = 'Sem mensagens.';
$string['nomessageserror'] = 'Esta ação requer pelo menos uma mensagem selecionada.';
$string['nomessagestoview'] = 'Sem emails para visualizar.';
$string['none'] = 'Nenhum';
$string['norecipient'] = '(sem destinatário)';
$string['noselectedmessages'] = 'Nenhuma mensagem selecionada';
$string['nosubject'] = '(sem assunto)';
$string['notificationbody'] = '- De: {$a->user}

- Assunto: {$a->subject}

{$a->content}';
$string['notificationbodyhtml'] = '<p>De: {$a->user}</p> <p>Assunto: <a href="{$a->url}">{$a->subject}</a></p><p>{$a->content}</p>';
$string['notificationpref'] = 'Enviar notificações';
$string['notificationsubject'] = 'Novo email em {$a}';
$string['notingroup'] = 'Você não participa de nenhum grupo';
$string['pagingmultiple'] = '{$a->first}-{$a->last} de {$a->total}';
$string['pagingsingle'] = '{$a->index} de {$a->total}';
$string['perpage'] = 'Mostrar {$a} mensagens';
$string['pluginname'] = 'Email';
$string['read'] = 'Lido';
$string['references'] = 'Referências';
$string['removelabel'] = 'Remover rótulo';
$string['reply'] = 'Responder';
$string['replyall'] = 'Responder para todos';
$string['restore'] = 'Restaurar';
$string['save'] = 'Salvar';
$string['search'] = 'Buscar';
$string['searchbyattach'] = 'Com anexos';
$string['searchbyunread'] = 'Apenas não lidas';
$string['send'] = 'Enviar';
$string['sendmessage'] = 'Enviar uma mensagem';
$string['sentmail'] = 'Enviados';
$string['setlabels'] = 'Rótulos';
$string['shortaddcc'] = 'Cc';
$string['shortaddto'] = 'Para';
$string['showlabelmessages'] = 'Mostrar mensagens do rótulo "{$a}"';
$string['showrecentmessages'] = 'Mostrar mensagens recentes';
$string['smallmessage'] = '{$a->user} enviou um email para você';
$string['starred'] = 'Favoritos';
$string['starredmail'] = 'Favoritos';
$string['subject'] = 'Assuntos';
$string['to'] = 'Para';
$string['togglemailmenu'] = 'Alternar menu de email';
$string['toomanyrecipients'] = 'A pesquisa tem muitos resultados';
$string['trash'] = 'Lixeira';
$string['undo'] = 'Desfazer';
$string['undodelete'] = '{$a} mensagens foram movidas para a lixeira';
$string['undorestore'] = '{$a} mensagens foram restauradas';
$string['unread'] = 'Não lida';
$string['unstarred'] = 'Desfavoritado';
