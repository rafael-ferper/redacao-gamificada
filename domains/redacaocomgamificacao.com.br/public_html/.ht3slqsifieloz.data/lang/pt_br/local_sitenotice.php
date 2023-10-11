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
 * Strings for component 'local_sitenotice', language 'pt_br', version '4.1'.
 *
 * @package     local_sitenotice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['booleanformat:false'] = 'Não';
$string['booleanformat:true'] = 'Sim';
$string['button:accept'] = 'Aceitar';
$string['button:close'] = 'Fechar';
$string['cachedef_enabled_notices'] = 'Uma lista dos avisos ativos';
$string['cachedef_notice_view'] = 'Uma lista dos avisos visualizados';
$string['confirmation:deletenotice'] = 'Você realmente quer excluir o aviso "{$a}"';
$string['event:acknowledge'] = 'confirmar';
$string['event:create'] = 'criar';
$string['event:delete'] = 'excluir';
$string['event:disable'] = 'desativar';
$string['event:dismiss'] = 'dispensar';
$string['event:enable'] = 'ativar';
$string['event:reset'] = 'reiniciar';
$string['event:timecreated'] = 'Tempo';
$string['event:update'] = 'atualizar';
$string['modal:acceptbtntooltip'] = 'Marque a caixa de seleção acima.';
$string['modal:checkboxtext'] = 'Eu li e entendi o aviso (fechar este aviso fará com que você desconecte deste site).';
$string['notice:activefrom'] = 'Ativar de';
$string['notice:activefrom_help'] = 'A hora e a data a partir das quais a mensagem estará ativa.';
$string['notice:cohort'] = 'Cohort';
$string['notice:cohort:all'] = 'Todos os usuários';
$string['notice:content'] = 'Conteúdo';
$string['notice:create'] = 'Criar novo aviso';
$string['notice:delete'] = 'Apagar aviso';
$string['notice:disable'] = 'Desativar aviso';
$string['notice:enable'] = 'Ativar aviso';
$string['notice:expiry'] = 'Expirar';
$string['notice:expiry_help'] = 'A hora e a data em que as mensagens expiram e não serão mais exibidas aos usuários.';
$string['notice:forcelogout'] = 'Forçar desconexão';
$string['notice:forcelogout_help'] = 'Se habilitado, o usuário será desconectado após fechar o aviso. Esta configuração não afeta o administrador do site.';
$string['notice:hlinkcount'] = 'Contagem de hyperlinks';
$string['notice:info'] = 'Informações de aviso';
$string['notice:notice'] = 'Aviso';
$string['notice:perpetual'] = 'É visível';
$string['notice:perpetual_help'] = 'Quando definido como sim, o aviso sempre será exibido (a menos que desativado). Se definido como não, um intervalo de data e hora para o aviso deve ser especificado.';
$string['notice:redirectmsg'] = 'Curso obrigatório não concluído. Não tem permissão para enviar tarefa.';
$string['notice:report'] = 'Visualizar relatório';
$string['notice:reqack'] = 'Requer confirmação';
$string['notice:reqack_help'] = 'Se habilitado, o usuário precisará aceitar o aviso antes de poder continuar a usar o site LMS.
Se o usuário não aceitar o aviso, ele será desconectado do site.';
$string['notice:reqcourse'] = 'Requer conclusão do curso';
$string['notice:reqcourse_help'] = 'Se selecionado, o usuário verá o aviso até que o curso seja concluído.';
$string['notice:reset'] = 'Redefinir aviso';
$string['notice:resetinterval'] = 'Reiniciar a cada';
$string['notice:resetinterval_help'] = 'O aviso será exibido ao usuário novamente assim que o período especificado expirar.';
$string['notice:timemodified'] = 'Hora modificada';
$string['notice:title'] = 'Título';
$string['notice:view'] = 'Ver aviso';
$string['notification:noack'] = 'Não há confirmação para este aviso';
$string['notification:nodeleteallowed'] = 'A exclusão do aviso não é permitida';
$string['notification:nodis'] = 'Não há dispensa para este aviso';
$string['notification:noticedoesnotexist'] = 'O aviso não existe';
$string['notification:noupdateallowed'] = 'A atualização do aviso não é permitida';
$string['pluginname'] = 'Aviso do site';
$string['privacy:metadata:firstname'] = 'Nome';
$string['privacy:metadata:idnumber'] = 'Número da ID';
$string['privacy:metadata:lastname'] = 'Sobrenome';
$string['privacy:metadata:local_sitenotice_ack'] = 'Confirmação de aviso';
$string['privacy:metadata:local_sitenotice_hlinks_his'] = 'Rastreamento de hiperlink';
$string['privacy:metadata:local_sitenotice_lastview'] = 'Última visualização do aviso';
$string['privacy:metadata:userid'] = 'ID do usuário';
$string['privacy:metadata:username'] = 'Nome de usuário';
$string['report:acknowledge_desc'] = 'Lista de usuários que confirmaram o aviso.';
$string['report:acknowledged'] = 'aviso_confirmado_{$a}';
$string['report:button:ack'] = 'Relatório de confirmação de aviso';
$string['report:button:dis'] = 'Relatório de notificações dispensadas';
$string['report:dismissed'] = 'aviso_dispensado_{$a}';
$string['report:dismissed_desc'] = 'Lista de usuários que dispensaram o aviso.';
$string['report:timecreated_server'] = 'Horário do servidor';
$string['report:timecreated_spreadsheet'] = 'Carimbo de data/hora da planilha';
$string['report:timeformat:sortable'] = '%A-%m-%d %H:%M:%S';
$string['setting:allow_delete'] = 'Permitir exclusão de aviso';
$string['setting:allow_deletedesc'] = 'Permitir que o aviso seja excluído';
$string['setting:allow_update'] = 'Permitir atualização de aviso';
$string['setting:allow_updatedesc'] = 'Permitir que o aviso seja atualizado';
$string['setting:cleanup_deleted_notice'] = 'Limpar informações relacionadas ao aviso excluído';
$string['setting:cleanup_deleted_noticedesc'] = 'Requer "Permitir exclusão de aviso".
Se habilitado, outros detalhes relacionados ao aviso que está sendo excluído, como hiperlinks, histórico de hiperlinks, confirmação, última visualização do usuário, também serão excluídos';
$string['setting:enabled'] = 'Habilitado';
$string['setting:enableddesc'] = 'Habilitar aviso do site';
$string['setting:managenotice'] = 'Gerenciar aviso';
$string['setting:settings'] = 'Configurações';
$string['sitenotice:manage'] = 'Gerenciar aviso do site';
$string['timeformat:resetinterval'] = '%a dia(s), %h hora(s), %i minuto(s) e %s segundo(s)';
