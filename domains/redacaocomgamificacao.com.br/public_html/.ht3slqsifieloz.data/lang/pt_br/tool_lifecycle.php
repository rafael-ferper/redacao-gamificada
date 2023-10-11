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
 * Strings for component 'tool_lifecycle', language 'pt_br', version '4.1'.
 *
 * @package     tool_lifecycle
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abortdisableworkflow'] = 'Desabilitar fluxo de trabalho (abortar processos, talvez inseguro!)';
$string['abortdisableworkflow_confirm'] = 'O fluxo de trabalho será desativado e todos os processos em execução desse fluxo de trabalho serão interrompidos. Tem certeza?';
$string['abortprocesses'] = 'Abortar processos em execução (talvez inseguros!)';
$string['abortprocesses_confirm'] = 'Todos os processos em execução deste fluxo de trabalho serão interrompidos. Tem certeza?';
$string['activateworkflow'] = 'Ativar';
$string['active_automatic_workflows_heading'] = 'Fluxos de trabalho automáticos ativos';
$string['active_manual_workflows_heading'] = 'Fluxos de trabalho manuais ativos';
$string['active_processes_list_header'] = 'Processos ativos';
$string['active_workflow_not_changeable'] = 'A instância do fluxo de trabalho já foi ativada. Não é mais possível alterar nenhuma de suas etapas.';
$string['active_workflow_not_removeable'] = 'A instância do fluxo de trabalho está ativa. Não é possível removê-lo.';
$string['active_workflows_list'] = 'Listar fluxos de trabalho ativos e definições de fluxo de trabalho';
$string['add_new_step_instance'] = 'Adicionar nova instância de etapa...';
$string['add_new_trigger_instance'] = 'Adicionar nova instância do gatilho...';
$string['add_workflow'] = 'Adicionar fluxo de trabalho';
$string['adminsettings_edit_step_instance_heading'] = 'Instância da etapa para o fluxo de trabalho \'{$a}\'';
$string['adminsettings_edit_trigger_instance_heading'] = 'Gatilho para fluxo de trabalho \'{$a}\'';
$string['adminsettings_edit_workflow_definition_heading'] = 'Definição de fluxo de trabalho';
$string['adminsettings_heading'] = 'Configurações de fluxo de trabalho';
$string['adminsettings_workflow_definition_steps_heading'] = 'Etapas do fluxo de trabalho';
$string['all_delays'] = 'Todos os atrasos';
$string['anonymous_user'] = 'Usuário anônimo';
$string['apply'] = 'Aplicar';
$string['backupcreated'] = 'Criado em';
$string['backupworkflow'] = 'Backup do fluxo de trabalho';
$string['cannot_trigger_workflow_manually'] = 'O fluxo de trabalho solicitado não pôde ser acionado manualmente.';
$string['config_backup_path'] = 'Caminho da pasta de backup do ciclo de vida';
$string['config_backup_path_desc'] = 'Esta configuração define o local de armazenamento dos backups criados pela etapa de backup.
O caminho deve ser especificado como um caminho absoluto em seu servidor.';
$string['config_delay_duration'] = 'Duração padrão de um atraso no curso';
$string['config_delay_duration_desc'] = 'Esta configuração define a duração do atraso padrão de um fluxo de trabalho
caso um de seus processos seja revertido ou finalizado.
A duração do atraso determina quanto tempo um curso será isento de ser processado novamente em qualquer um dos casos.';
$string['course_backups_list_header'] = 'Backups do curso';
$string['coursename'] = 'Nome do curso';
$string['date'] = 'Data de vencimento';
$string['deactivated_workflows_list'] = 'Listar fluxos de trabalho desativados';
$string['deactivated_workflows_list_header'] = 'Fluxos de trabalho desativados';
$string['delayed_courses_header'] = 'Cursos atrasados';
$string['delayed_for_workflow_until'] = 'Atrasado para "{$a->name}" até {$a->date}';
$string['delayed_for_workflows'] = 'Atrasado para {$a} fluxos de trabalho';
$string['delayed_globally'] = 'Adiado globalmente até {$a}';
$string['delayed_globally_and_seperately'] = 'Atrasado globalmente e separadamente para fluxos de trabalho {$a}';
$string['delayed_globally_and_seperately_for_one'] = 'Atrasado globalmente e separadamente para 1 fluxo de trabalho';
$string['delays'] = 'Atrasos';
$string['delays_for_workflow'] = 'Atrasos para "{$a}"';
$string['delete_all_delays'] = 'Excluir todos os atrasos';
$string['delete_delay'] = 'Excluir atraso';
$string['deleteworkflow'] = 'Excluir fluxo de trabalho';
$string['deleteworkflow_confirm'] = 'O fluxo de trabalho será excluído. Isso não pode ser desfeito. Tem certeza?';
$string['disableworkflow'] = 'Desativar o fluxo de trabalho (os processos continuam em execução)';
$string['disableworkflow_confirm'] = 'O fluxo de trabalho será desativado. Tem certeza?';
$string['download'] = 'Baixar';
$string['duplicateworkflow'] = 'Duplicar o fluxo de trabalho';
$string['editworkflow'] = 'Editar configurações gerais';
$string['error_wrong_trigger_selected'] = 'Você tentou solicitar um gatilho não manual.';
$string['followedby_none'] = 'Nenhum';
$string['general_config_header'] = 'Geral e subplugins';
$string['general_settings_header'] = 'Configurações Gerais';
$string['globally'] = 'Atrasos globais';
$string['globally_until_date'] = 'Globalmente até {$a}';
$string['interaction_success'] = 'Ação salva com sucesso.';
$string['invalid_workflow'] = 'Configuração de fluxo de trabalho inválida';
$string['invalid_workflow_cannot_be_activated'] = 'A definição do fluxo de trabalho é inválida, portanto não pode ser ativada.';
$string['invalid_workflow_details'] = 'Vá para a exibição de detalhes para criar um gatilho para este fluxo de trabalho';
$string['lastaction'] = 'última ação sobre';
$string['lifecycle:managecourses'] = 'Pode gerenciar cursos em tool_lifecycle';
$string['lifecycle_cleanup_task'] = 'Excluir entradas de atraso antigas para fluxos de trabalho de ciclo de vida';
$string['lifecycle_task'] = 'Execute os processos do ciclo de vida';
$string['lifecyclestep'] = 'Etapa do processo';
$string['lifecycletrigger'] = 'Gatilho';
$string['manual_trigger_process_existed'] = 'Já existe um fluxo de trabalho para este curso.';
$string['manual_trigger_success'] = 'Fluxo de trabalho iniciado com sucesso.';
$string['name_until_date'] = '"{$a->name}" até {$a->date}';
$string['nocoursestodisplay'] = 'Atualmente não há cursos que precisam de sua atenção!';
$string['nointeractioninterface'] = 'Nenhuma interface de interação disponível!';
$string['noprocessfound'] = 'Não foi possível encontrar um processo com o processid fornecido!';
$string['nostepfound'] = 'Não foi possível encontrar uma etapa com o stepid fornecido!';
$string['pluginname'] = 'Ciclo de Vida';
$string['plugintitle'] = 'Ciclo de Vida do Curso';
$string['privacy:metadata:tool_lifecycle_action_log'] = 'Um registro das ações realizadas pelos gerentes do curso.';
$string['privacy:metadata:tool_lifecycle_action_log:action'] = 'Identificador da ação que foi realizada.';
$string['privacy:metadata:tool_lifecycle_action_log:courseid'] = 'ID do curso para o qual a ação foi realizada';
$string['privacy:metadata:tool_lifecycle_action_log:processid'] = 'ID do processo em que a ação foi realizada.';
$string['privacy:metadata:tool_lifecycle_action_log:stepindex'] = 'Índice da Etapa no Fluxo de Trabalho para a qual a ação foi executada.';
$string['privacy:metadata:tool_lifecycle_action_log:time'] = 'Momento em que a ação foi realizada.';
$string['privacy:metadata:tool_lifecycle_action_log:userid'] = 'ID do usuário que realizou a ação.';
$string['privacy:metadata:tool_lifecycle_action_log:workflowid'] = 'ID do fluxo de trabalho em que a ação foi realizada.';
$string['process_proceeded_event'] = 'Foi iniciado um processo';
$string['process_rollback_event'] = 'Um processo foi revertido';
$string['process_triggered_event'] = 'Um processo foi engatilhado';
$string['restore'] = 'Restaurar';
$string['restore_step_does_not_exist'] = 'A etapa {$a} não está instalada, mas está incluída no arquivo de backup. Instale-o primeiro e tente novamente.';
$string['restore_subplugins_invalid'] = 'Formato errado do arquivo de backup. A estrutura dos elementos do subplugin não é a esperada.';
$string['restore_trigger_does_not_exist'] = 'O gatilho {$a} não está instalado, mas está incluído no arquivo de backup. Instale-o primeiro e tente novamente.';
$string['restore_workflow_not_found'] = 'Formato errado do arquivo de backup. O fluxo de trabalho não foi encontrado.';
$string['show_delays'] = 'Tipo de visualização';
$string['status'] = 'Status';
$string['step'] = 'Etapa do processo';
$string['step_delete'] = 'Excluir';
$string['step_edit'] = 'Editar';
$string['step_instancename'] = 'Nome da instância';
$string['step_instancename_help'] = 'Título da instância da etapa (visível apenas para administradores).';
$string['step_settings_header'] = 'Configurações específicas do tipo de etapa';
$string['step_show'] = 'Mostrar';
$string['step_sortindex'] = 'Acima/Abaixo';
$string['step_subpluginname'] = 'Nome do subplugin';
$string['step_subpluginname_help'] = 'Título do subplugin/gatilho da etapa (visível apenas para administradores).';
$string['step_type'] = 'Tipo';
$string['subplugintype_lifecyclestep'] = 'Etapa dentro de um processo de ciclo de vida';
$string['subplugintype_lifecyclestep_plural'] = 'Etapas dentro de um processo de ciclo de vida';
$string['subplugintype_lifecycletrigger'] = 'Gatilho para iniciar um processo de ciclo de vida';
$string['subplugintype_lifecycletrigger_plural'] = 'Gatilhos para iniciar um processo de ciclo de vida';
$string['tablecourseslog'] = 'Ações anteriores';
$string['tablecoursesremaining'] = 'Cursos restantes';
$string['tablecoursesrequiringattention'] = 'Cursos que exigem sua atenção';
$string['tools'] = 'Ferramentas';
$string['trigger'] = 'Gatilho';
$string['trigger_does_not_exist'] = 'O gatilho solicitado não foi encontrado.';
$string['trigger_enabled'] = 'Habilitado';
$string['trigger_instancename'] = 'Nome da instância';
$string['trigger_instancename_help'] = 'Título da instância do gatilho (visível apenas para administradores).';
$string['trigger_settings_header'] = 'Configurações específicas do tipo de gatilho';
$string['trigger_sortindex'] = 'Cima/Baixo';
$string['trigger_subpluginname'] = 'Nome do subplugin';
$string['trigger_subpluginname_help'] = 'Título do subplugin/gatilho da etapa (visível apenas para administradores).';
$string['trigger_workflow'] = 'Fluxo de trabalho';
$string['upload_workflow'] = 'Carregar fluxo de trabalho';
$string['viewheading'] = 'Gerenciar cursos';
$string['viewsteps'] = 'Exibir etapas do fluxo de trabalho';
$string['workflow'] = 'Fluxo de trabalho';
$string['workflow_active'] = 'Ativar';
$string['workflow_definition_heading'] = 'Definições de fluxo de trabalho';
$string['workflow_delayforallworkflows'] = 'Atraso para todos os fluxos de trabalho?';
$string['workflow_delayforallworkflows_help'] = 'Se marcadas, as durações no topo não apenas atrasam a execução
deste fluxo de trabalho para um curso, mas também para todos os outros fluxos de trabalho. Assim, até que o tempo passe, nenhum processo pode ser iniciado
para o respectivo curso.';
$string['workflow_displaytitle'] = 'Título do fluxo de trabalho exibido';
$string['workflow_displaytitle_help'] = 'Este título é exibido aos usuários ao gerenciar seus cursos.';
$string['workflow_duplicate_title'] = '{$a} (Copiar)';
$string['workflow_finishdelay'] = 'Atraso em caso de curso finalizado';
$string['workflow_finishdelay_help'] = 'Se um curso concluiu uma instância de processo deste fluxo de trabalho,
esse valor descreve o tempo até que um processo para essa combinação de curso e fluxo de trabalho possa ser iniciado novamente.';
$string['workflow_is_running'] = 'O fluxo de trabalho está em execução.';
$string['workflow_not_removeable'] = 'Não é possível remover esta instância de fluxo de trabalho. Talvez ainda tenha processos em execução?';
$string['workflow_processes'] = 'Processos ativos';
$string['workflow_rollbackdelay'] = 'Atraso em caso de reversão';
$string['workflow_rollbackdelay_help'] = 'Se um curso foi revertido em uma instância de processo deste fluxo de trabalho,
esse valor descreve o tempo até que um processo para essa combinação de curso e fluxo de trabalho possa ser iniciado novamente.';
$string['workflow_sortindex'] = 'Cima/Baixo';
$string['workflow_started'] = 'Fluxo de trabalho iniciado.';
$string['workflow_timeactive'] = 'Ativo desde';
$string['workflow_timedeactive'] = 'Desativado desde';
$string['workflow_title'] = 'Título';
$string['workflow_title_help'] = 'Título do fluxo de trabalho (visível apenas para administradores).';
$string['workflow_tools'] = 'Ações';
$string['workflow_trigger'] = 'Gatilho para o fluxo de trabalho';
$string['workflownotfound'] = 'Fluxo de trabalho com id {$a} não encontrado';
