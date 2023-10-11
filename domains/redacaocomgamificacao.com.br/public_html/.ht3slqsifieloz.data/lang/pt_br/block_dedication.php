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
 * Strings for component 'block_dedication', language 'pt_br', version '4.1'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_filter_courseid'] = 'Nome do Curso';
$string['admin_filter_courseid_help'] = 'Filtrar o relatório pelo nome do curso';
$string['admin_filter_form'] = 'Configurar dedicação ao curso';
$string['admin_filter_form_help'] = 'O tempo é estimado com base nos conceitos de duração de sessão aplicados de acordo com os registros de log.

<strong>Clique:</strong> Sempre que um usuário acessa uma página do Moodle, um registro é armazenado no log.

<strong>Sessão:</strong> Conjunto de dois ou mais cliques consecutivos em que o tempo decorrido entre cada par de cliques consecutivos não supera um tempo máximo estabelecido.

<strong>Duração da sessão:</strong> Tempo decorrido entre o primeiro e o último clique da sessão.

<strong>Tempo de dedicação:</strong> A soma da duração de todas sessões de um usuário.';
$string['admin_filter_form_text'] = 'Selecione o intervalo de datas e o tempo máximo entre os cliques de uma sessão.';
$string['admin_filter_maxtime'] = 'Fim do período';
$string['admin_filter_maxtime_help'] = 'Considere apenas os registros de log que terminam antes desta data';
$string['admin_filter_mintime'] = 'Início do período';
$string['admin_filter_mintime_help'] = 'Considere apenas os registros de log após esta data';
$string['admin_filter_submit'] = 'Calcular';
$string['allloglifetime'] = 'Manter o histórico da sessão para';
$string['averagetimespent'] = '<strong>Tempo médio gasto no curso:</strong>{$a}';
$string['cleanuptask'] = 'Tarefa para limpar o histórico da sessão';
$string['collect_dedication'] = 'Coletar dados para o bloco dedicação';
$string['configallloglifetime'] = 'Isso especifica o período de tempo que você deseja manter os dados sobre a duração da sessão. As sessões anteriores e este tempo serão excluídas automaticamente.';
$string['connectionratiorow'] = 'Conexões por dia';
$string['dedication:addinstance'] = 'Permitir adicionar o bloco Dedicação';
$string['dedication:myaddinstance'] = 'Permitir adicionar bloco de dedicação na página do painel';
$string['dedication:viewreports'] = 'Permitir visualizar os relatórios de dedicação';
$string['dedicationall'] = 'Dedicação de todos os membros do curso. Clique em qualquer nome para ver sua dedicação detalhada.';
$string['dedicationrow'] = 'Tempo gasto no curso';
$string['enrolmententity'] = 'Inscrição';
$string['enrolmentmethod'] = 'Método de inscrição';
$string['entity_dedication'] = 'Dedicação';
$string['excludesessionslessthan'] = 'Excluir as sessões anteriores a {$a}';
$string['group'] = 'Grupo';
$string['groupentity'] = 'Grupo';
$string['ignore_sessions_limit'] = 'Ignorar o limite de sessão';
$string['ignore_sessions_limit_desc'] = 'Remove sessões mais curtas, qualquer valor menor que esse (em minutos) será ignorado no relatório de dedicação';
$string['lastupdated'] = 'Ultima atualização: {$a}';
$string['period'] = 'Período desde <em>{$a->mintime}</em> até <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Tempo decorrido:</strong> {$a}';
$string['pluginname'] = 'Dedicação ao curso';
$string['privacy:metadata'] = 'O plug-in block_dedication armazena os tempos que os usuários se dedicaram aos cursos.';
$string['privacy:metadata:block_dedication:courseid'] = 'ID do curso para a dedicação do usuário';
$string['privacy:metadata:block_dedication:timespent'] = 'Tempo gasto no curso';
$string['privacy:metadata:block_dedication:timestart'] = 'A hora de início da coleta dos dados';
$string['privacy:metadata:block_dedication:userid'] = 'ID do usuário referente a dedicação do usuário';
$string['report_dedication'] = 'Ferramenta de relatórios da dedicação';
$string['report_timespent'] = 'Relatório de tempo gasto';
$string['session_limit'] = 'Limite da sessão';
$string['session_limit_desc'] = 'Filtro para relatório de limite da sessão';
$string['sessionduration'] = 'Duração da sessão';
$string['sessiondurationsum'] = 'Duração da sessão (soma)';
$string['sessionstart'] = 'Início da sessão';
$string['showestimatedtime'] = 'Mostrar o tempo estimado que foi gasto para os usuários';
$string['showestimatedtime_help'] = 'Essa configuração permite que os usuários vejam o tempo estimado gasto no bloco.';
$string['timespent_estimation'] = 'Seu tempo estimado gasto no curso é:';
$string['timespentincourse'] = 'Tempo gasto no curso';
$string['timespentreport'] = 'Relatório completo';
$string['timespenttasknotrunning'] = 'A tarefa que calcula o tempo gasto ainda não foi iniciada.';
$string['totaltimespent'] = '<strong>Total de todo o tempo gasto no curso:</strong>{$a}';
$string['user_dedication_datasource'] = 'Dedicação dos usuários';
$string['userdedication'] = 'Detalhes da dedicação ao curso de <em>{$a}</em>.';
$string['viewsessiondurationreport'] = 'Exibir relatório de duração da sessão';
