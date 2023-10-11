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
 * Strings for component 'tool_reportbuilder', language 'pt_br', version '4.1'.
 *
 * @package     tool_reportbuilder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesstab'] = 'Acesso';
$string['actions'] = 'Ações';
$string['addacondition'] = 'Adicionar uma condição...';
$string['addafilter'] = 'Adicionar um filtro...';
$string['addaudience'] = 'Adicionar público';
$string['addaudiences'] = 'Adicionar um público a este relatório';
$string['addcolumn'] = 'Adicionar coluna';
$string['adddefault'] = 'Adicionar configuração padrão';
$string['adddefault_help'] = 'Cada fonte de relatório também define colunas, condições e filtros padrão. Se você quer criar o relatório usando esses padrões, selecione esse campo';
$string['addemails'] = 'Adicionar e-mails manualmente';
$string['addfieldbyname'] = 'Adicionar campo \'{$a}\' ao relatório';
$string['addreport'] = 'Novo relatório';
$string['addschedule'] = 'Novo cronograma';
$string['addusers'] = 'Adicionar usuários manualmente';
$string['addusers_help'] = 'Todos os usuários adicionados manualmente vão receber esse relatório independente de sua posição e departamento';
$string['aggregation_avg'] = 'Média';
$string['aggregation_count'] = 'Contagem';
$string['aggregation_countdistinct'] = 'Contagem dos únicos';
$string['aggregation_groupconcat'] = 'Valores separados por vírgula';
$string['aggregation_groupconcatdistinct'] = 'Valores distintos separados por vírgula';
$string['aggregation_max'] = 'Máximo';
$string['aggregation_min'] = 'Mínimo';
$string['aggregation_percent'] = 'Porcentagem';
$string['aggregation_sum'] = 'Soma';
$string['aggregation_unique'] = 'Valores únicos';
$string['allusers'] = 'Todos os usuários';
$string['allusersdesc'] = 'Adicionar todos os usuários a este relatório';
$string['and'] = 'E';
$string['asc'] = 'A coluna \'{$a}\' tem direção de classificação crescente';
$string['audience'] = 'Audiência';
$string['audiencejobadd'] = 'Adicionar cargo';
$string['audiencejobremove'] = 'Remover cargo';
$string['audiencejobs'] = 'Cargos';
$string['audiencejobs_help'] = 'Usuários podem ver esse relatório se eles pertencem a um dos cargos selecionados abaixo';
$string['audiencejobsempty'] = 'Nenhum cargo adicionado';
$string['audiencemultiselectpostix'] = 'mais {$a} a mais';
$string['audiencenotsaved'] = 'Público não salvo';
$string['audiences'] = 'Audiências';
$string['authmethod'] = 'Método de autenticação';
$string['availableinalltenants_help'] = 'Quando ativado, os usuários (com as permissões apropriadas) em todos os locatários poderão visualizar este relatório. A maioria das fontes de relatório limitará automaticamente os usuários exibidos e outras entidades (programas, certificações, cursos) àqueles visíveis dentro do locatário.';
$string['backtoreport'] = 'Voltar ao relatório';
$string['basicinformation'] = 'Informações básicas';
$string['cachedef_userreports'] = 'Relatórios personalizados que o usuário pode acessar';
$string['canviewallreports'] = 'Pode ver todos os relatórios';
$string['cardview'] = 'Visualização do cartão';
$string['cardview_help'] = 'O relatório mudará automaticamente para card view quando exibido em telas pequenas ou em blocos estreito';
$string['certificatesissues'] = 'Certificados emitidos';
$string['certificatetemplates'] = 'Modelos de certificados';
$string['checkboxanyvalue'] = 'Qualquer valor';
$string['checkboxischecked'] = 'Sim';
$string['checkboxisnotchecked'] = 'Não';
$string['choose'] = 'Escolher...';
$string['columncannotbeconverted'] = 'A coluna \'{$a}\' não pode ser convertida';
$string['conditioncannotbeconverted'] = 'A condição \'{$a}\' não pode ser convertida';
$string['conditionoptioncannotbeconverted'] = 'A opção \'{$a->option}\' na condição \'{$a->condition}\' não pode ser convertida';
$string['conditionshelp'] = 'Condições';
$string['conditionshelp_help'] = 'Lista pré-definida de condições que serão aplicadas sempre quando vendo esse relatório.';
$string['conditionstab'] = 'Condições';
$string['confirm'] = 'Confirmar';
$string['confirmdeletecondition'] = 'Tem certeza de que deseja excluir a condição \'{$a}\'?';
$string['confirmdeleteschedule'] = 'Tem certeza de que deseja excluir o agendamento \'{$a}\' e todos os dados associados? Essa ação não pode ser desfeita.';
$string['confirmresetallconditions'] = 'Tem certeza de que deseja redefinir todas as condições?';
$string['confirmresetconditions'] = 'Tem certeza de que deseja redefinir a condição \'{$a}\'?';
$string['confirmsendschedule'] = 'Tem certeza de que deseja colocar \'{$a}\' na fila para envio?';
$string['contentvisibility'] = 'Número de colunas sempre visíveis';
$string['convertingreport'] = 'Convertendo relatório \'{$a}\'';
$string['convertnotimplementeddesc'] = 'O relatório não pôde ser convertido. O desenvolvedor precisa especificar as regras de conversão. Você também pode tentar criar o mesmo relatório na nova versão do criador de relatórios do zero e remover este.';
$string['convertnotpossibledesc'] = 'O relatório não pôde ser convertido automaticamente. Por favor, veja a mensagem de erro abaixo. É possível que algumas colunas ou outros atributos deste relatório não tenham uma correspondência exata nas novas fontes de dados. Neste caso, você pode editar o relatório e remover os elementos que não podem ser convertidos automaticamente e tentar converter novamente. Observe que, se houver vários erros durante a conversão do relatório, apenas o primeiro será exibido aqui.';
$string['convertocore'] = 'Converter para a versão mais recente';
$string['course_completion_days_course'] = 'Dias fazendo curso';
$string['course_completion_days_enrolled'] = 'Dias inscritos';
$string['course_completion_daysuntilcompletion'] = 'Dias até a conclusão';
$string['course_completion_progress'] = 'Progresso';
$string['course_completion_progress_percent'] = 'Progresso (%)';
$string['course_completion_reaggregate'] = 'Tempo reagregado';
$string['course_completion_reaggregated'] = 'Tempo reagregado';
$string['course_completion_timecompleted'] = 'Tempo concluído';
$string['course_completion_timeenrolled'] = 'Tempo registrado';
$string['course_completion_timestarted'] = 'Hora de início';
$string['course_enrolment_method'] = 'Método';
$string['course_enrolment_status'] = 'Status de inscrição';
$string['course_enrolment_timeended'] = 'Inscrição encerrada';
$string['course_enrolment_timestarted'] = 'Inscrição iniciada';
$string['coursefullnamewithlink'] = 'Nome completo do curso com link';
$string['courseidnumberewithlink'] = 'ID do curso com link';
$string['customessage'] = 'Mensagem personalizada';
$string['customfieldcolumn'] = '{$a}';
$string['customizecondition'] = 'Editar nome da condição';
$string['customizefilter'] = 'Editar nome do filtro';
$string['customizeheader'] = 'Edite o cabeçalho da coluna \'{$a}\'';
$string['customreports'] = 'Relatórios personalizados';
$string['customreportsdesc'] = 'Relatórios personalizados, incluindo audiência e dados de cronograma';
$string['customreportslegacy'] = 'Relatórios personalizados de versão desatualizada';
$string['customreportslimit'] = 'Limite de relatórios personalizados';
$string['customreportslimit_desc'] = 'O número de relatórios personalizados pode ser limitado por motivos de desempenho. Se definido como zero, não há limite.';
$string['customreportsliveediting'] = 'Editar em tempo real os relatórios personalizados';
$string['dateanyvalue'] = 'Qualquer valor';
$string['datecreated'] = 'Criado';
$string['datecurrent'] = 'Atualmente';
$string['dateinthefuture'] = 'No futuro';
$string['dateinthepast'] = 'No passado';
$string['dateisempty'] = 'Está vazio';
$string['dateisnotempty'] = 'Não está vazio';
$string['datelast'] = 'Últimos ... dias';
$string['datenext'] = 'Próximos ... dias';
$string['dateprevious'] = 'Anterior';
$string['daterangefrom'] = 'De';
$string['daterangeto'] = 'Até';
$string['datetostart'] = 'Data';
$string['debugsqlquery'] = 'Consulta atual';
$string['deletecolumn'] = 'Excluir coluna \'{$a}\'';
$string['deletecondition'] = 'Excluir condição \'{$a}\'';
$string['deletefilter'] = 'Excluir filtro';
$string['deletereport'] = 'Excluir relatório';
$string['deletereportsuccess'] = 'O relatório foi excluído';
$string['deleteschedule'] = 'Excluir cronograma';
$string['description'] = 'Descrição';
$string['duplicate'] = 'Duplicar';
$string['duplicatereport'] = 'Duplicar relatório';
$string['editmode'] = 'Mudar para visualização de edição';
$string['editreport'] = 'Editar conteúdo';
$string['editreportdetails'] = 'Editar detalhes';
$string['editreportname'] = 'Editar nome do relatório';
$string['entityreportbuilder'] = 'Relatórios personalizados';
$string['entityschedule'] = 'Cronograma';
$string['entityuser'] = 'Usuário';
$string['filtersbutton'] = 'Mostrar/esconder a barra lateral com filtros';
$string['filtershelp'] = 'Filtros';
$string['filterstab'] = 'Filtros';
$string['fullnamewithlink'] = 'Nome completo com link para o perfil';
$string['fullnamewithpicture'] = 'Nome completo com a imagem';
$string['fullnamewithpicturelink'] = 'Nome completo com a imagem e o link';
$string['importexportreportdefinition_help'] = 'Incluir colunas, condições e filtros do relatório';
$string['modifiedby'] = 'Modificado por';
$string['nofilters'] = 'Não existem filtros selecionados.';
$string['pluginname'] = 'Construtor de relatórios';
$string['reportbuilder:read'] = 'Ver relatórios';
$string['reportname'] = 'Nome do relatório';
$string['reportstab'] = 'Relatórios';
$string['resetall'] = 'Redefinir todos';
$string['resetallconditions'] = 'Redefinir todas as condições';
$string['resetcondition'] = 'Redefinir condição';
$string['resettable'] = 'Redefinir tabela';
$string['rolemanager'] = 'Gerente do construtor de relatórios';
$string['rolemanagerdescription'] = 'Permite criar e gerenteicar relatórios personalizados dentro do tenant aual';
$string['saveandcontinue'] = 'Salvar e continuar';
$string['schedule'] = 'Cronograma';
$string['scheduleaddedastask'] = 'O cronograma será enviado assim que possível';
$string['scheduled'] = 'Agendado';
$string['schedulename'] = 'Nome do cronograma';
$string['schedules'] = 'Cronogramas';
$string['send'] = 'Enviar';
$string['send_schedulestask'] = 'Enviar cronogramas';
$string['settings'] = 'Configurações';
$string['sidebarbutton'] = 'Mostrar/ocultar a barra lateral';
$string['subject'] = 'Assunto';
$string['tabletab'] = 'Tabela';
$string['timecreated'] = 'Data/Hora da criação';
$string['userconfirmed'] = 'Registro confirmado';
$string['userpicture'] = 'Imagem do usuário';
$string['usersuspended'] = 'Registro suspenso';
$string['userviewreportas'] = 'Ver dados do relatório como';
$string['userviewreportas_help'] = 'Os dados do relatórios serão incluídos como se vistos pelo usuário selecionado. Se deixado vazio, o usuário atual será usado como padrão';
$string['viewreports'] = 'Criador de relatórios';
