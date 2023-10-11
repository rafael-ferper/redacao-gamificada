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
 * Strings for component 'allocationform', language 'pt_br', version '4.1'.
 *
 * @package     allocationform
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acesso negado ao formulário de atribuição';
$string['add_option'] = 'Adicionar nova opção';
$string['al_notwant'] = 'Não quero';
$string['al_notwant_help'] = 'Selecione uma opção que você não deseja ser atribuído para';
$string['allocationform'] = 'Formulário de atribuição';
$string['allocationform:addinstance'] = 'Adicionar um novo formulário de atribuição';
$string['allocationform:edit'] = 'Editar formulários de atribuição';
$string['allocationform:exportallocations'] = 'Exportar alocações';
$string['allocationform:exportchoices'] = 'Exportar escolhas';
$string['allocationform:reallocate'] = 'Forçar uma redistribuição';
$string['allocationform:viewallocations'] = 'Ver todas as atribuições feitas';
$string['allocationform:viewform'] = 'Ver formulários de atribuição';
$string['allocationformname'] = 'Nome do formulário de atribuição';
$string['allocationformname_help'] = 'O nome deste formulário de atribuição  será usado para se conectar ao formulário.';
$string['allocations'] = 'Atribuições';
$string['allocations_not_visible'] = 'As alocações só podem ser vistas pelos editores.';
$string['allocationsexported'] = 'Alocações exportadas';
$string['allocationviewed'] = 'Formulário de Atribuição visto';
$string['aria:delete'] = 'Excluir {$a}';
$string['aria:edit'] = 'Editar {$a}';
$string['aria:restrict'] = 'Restringir {$a}';
$string['availabilityheading'] = 'Formato da disponibilidade';
$string['back_to_edit'] = 'Mudar o modo de edição';
$string['back_to_edit_warning'] = 'Isto irá apagar todas as informações apresentadas ao formulário.';
$string['before_start'] = 'A data de início do presente formulário de atribuição ainda não chegou.';
$string['calendar:avaliable'] = 'Alocações liberadas para {$a}';
$string['calendar:deadline'] = 'Limite até {$a}';
$string['cannoteditinapp'] = 'O formulário de atribuição não pode ser editado na App Moodle';
$string['changestateto'] = 'Tem certeza de que deseja alterar o formulário para o estado {$a}?';
$string['choice'] = 'Preferência {$a->choice}';
$string['choice_help'] = 'Selecione uma opção que você gostaria de ser atribuído';
$string['choicealreadyselected'] = 'Uma opção só pode ser selecionada uma vez';
$string['choiceheading'] = 'Opções de preferência';
$string['choiceincorrectstate'] = 'O formulário não está aberto. Atualize a página.';
$string['choiceinvalid'] = 'Você selecionou uma opção que não faz parte do formulário';
$string['choicerequired'] = 'Faça uma escolha';
$string['choicesexported'] = 'Escolhas exportadas';
$string['cron'] = 'Processamento em segundo plano para formulários de Atribuição';
$string['csvgenerated'] = 'CSV gerado';
$string['deadline'] = 'Prazo de Entrega';
$string['deadline_help'] = 'A última vez que os usuários serão capazes de selecionar as suas atribuições, também é a primeira vez que um formulário de atribuição será colocado em fila para o processo de atribuição acontecer.';
$string['deadline_message'] = 'O prazo para preencher este formulário é: {$a->deadline}';
$string['deadline_passed'] = 'O prazo desse formulário já terminou, se você ativá-lo agora ele  começara a processar imediatamente.';
$string['defaultrole'] = 'Papel padrão';
$string['defaultrole_help'] = 'Definir o papel padrão que será utilizado para selecionar os usuários que serão atribuídos usando a atividade';
$string['deleteuserdata'] = 'Excluir dados do usuário';
$string['disallow_list'] = 'Proibir lista';
$string['disallow_list_help'] = 'Todos os usuários assinalados não serão capazes de selecionar {$a->option_name}';
$string['duplicate_choice'] = 'Você só pode selecionar uma opção de cada vez';
$string['duplicateoption'] = 'Suas alterações não puderam ser salvas no banco de dados. Isso provavelmente ocorre devido a um nome de opção duplicado inserido';
$string['editingmode'] = 'Editar';
$string['editingoption'] = 'Editar opção';
$string['event:optiondcreated'] = 'Opção criada';
$string['event:optiondeleted'] = 'Opção excluída';
$string['form_allocation_error'] = 'ERRO no formID {$a->formid}:';
$string['form_allocation_error2'] = 'ERRO: Não é possível atribuir UserID {$a->userid}';
$string['generate_allocation_csv'] = 'Gerar CSV de atribuições de usuários';
$string['generate_csv'] = 'Gerar CSV de opções do usuário';
$string['in_editingmode'] = 'O formulário está sendo editado, etapa 1 de 5.';
$string['in_processedmode'] = 'As alocações foram liberadas, etapa 5 de 5.';
$string['in_processmode'] = 'Os usuários estão sendo alocados, etapa 3 de 5.';
$string['in_readymode'] = 'O formulário está ativo, etapa 2 de 5.';
$string['in_reviewmode'] = 'As alocações estão sendo revisadas, etapa 4 de 5.';
$string['incorrectnumberofchoices'] = 'O formulário não tem o número correto de opções';
$string['instructions'] = 'Você deve classificar {$a->choices} opções, você será alocado para {$a->allocation} das opções.';
$string['instructionsnotwant'] = 'Você deve classificar {$a->choices} opções, você será alocado para {$a->allocation} das opções. Você pode selecionar 1 opção à qual não deseja ser alocado.';
$string['invalidstate'] = 'Uma mudança de estado inválida foi passada para o formulário de atribuição';
$string['invalidstatechange'] = 'Tentativa de mudança de estado inválida';
$string['make_active'] = 'Faça um formulário ativo';
$string['makechoice'] = 'Faça suas escolhas';
$string['modulename'] = 'Formulário de atribuição';
$string['modulename_help'] = 'O formulário de alocação pode ser usado para atribuir aos estudantes entre uma e dez opções (por exemplo, módulos, tarefas, estágios...)

A professora define:

* A lista de opções disponíveis para os estudantes.
* O número de estudantes que podem ser atribuídos a uma opção.
* A quantas opções os estudantes são atribuídos (entre um e dez)
* Quantas opções um estudante pode classificar (entre um e dez)
* Se os estudante puderem selecionar uma opção à qual não desejam ser alocados.
* O último ponto em que os estudantes podem enviar uma escolha.

Aviso: Ao alternar a atividade do modo ativo para o modo de edição, todas as escolhas feitas pelos estudantes serão excluídas.

Após a data de fechamento, o formulário tentará fazer uma alocação de \'melhor ajuste\' dos estudantes para que:

* O maior número possível de estudantes é designado para as opções mais altas em sua classificação.
* Os estudantes nunca serão atribuídos a uma opção que eles selecionaram como \'Não quero\'.
* Os estudantes não serão atribuídos a opções que foram impedidos de selecionar.
* Os estudantes que não fizerem escolha serão alocados por último.

Após o processamento das alocações, os professores podem:

* Revise o resultado e altere o número de estudantes alocados às opções antes de liberar os resultados para os estudantes .
* Obtenha um csv das escolhas do estudante.
* Obtenha um csv das alocações.';
$string['modulenameplural'] = 'Formulários de atribuição';
$string['no_allocations'] = 'Atribuições não encontradas';
$string['noallocationforms'] = 'Formulários de atribuição não encontrados para este curso';
$string['noformdatapassed'] = 'Nenhum dado de formulário foi enviado. Nenhuma atualização realizada.';
$string['nopermission'] = 'Você não pode ser alocado ao formulário, suas escolhas não foram salvas';
$string['not_active'] = 'O formulário de atribuição não está disponível, por favor, tente novamente mais tarde.';
$string['not_enough_slots'] = 'Não há vagas suficientes disponíveis para todas as pessoas aceitáveis para atribuição';
$string['not_set'] = 'Você deve fazer uma escolha';
$string['notrequired'] = 'não requerido';
$string['notwant'] = 'Incluir não quer';
$string['notwant_help'] = 'Se selecionado, um usuário terá a oportunidade de definir uma opção que não deseja ser alocado';
$string['nousersallocated'] = 'Nenhum usuário alocado';
$string['numberofallocations'] = 'Atribuições por usuário';
$string['numberofallocations_help'] = 'O número de opções que um usuário será atribuído a';
$string['numberofchoices'] = 'Número de escolhas';
$string['numberofchoices_help'] = 'O número de opções que um usuário terá que escolher';
$string['ok_to_continue'] = 'Tem certeza de que deseja continuar?';
$string['option_form_header'] = 'Nova opção';
$string['option_heading'] = 'Título';
$string['option_heading_help'] = 'Um título a ser exibido acima desta opção.';
$string['option_list'] = 'Lista de Opções';
$string['option_maxallocation'] = 'Atribuições máximas';
$string['option_maxallocation_help'] = 'O número máximo de pessoas que podem ser atribuídas para essa opção.';
$string['option_maxallocation_invalid'] = 'Atribuições máximas não definidas';
$string['option_name'] = 'Nome da Opção';
$string['option_name_help'] = 'O nome da opção, pois ela será exibida para o usuário';
$string['option_restricted'] = 'Usuários restritos';
$string['optioncreated'] = 'Opção criada: {$a}';
$string['optiondeleted'] = 'Opção excluída: {$a}';
$string['optionedited'] = 'Opções editadas';
$string['optionmodified'] = 'Opção modificada: {$a}';
$string['optionnamenumber'] = '{$a->name} ({$a->allocation})';
$string['overviewclose'] = 'Data de Encerramento: {$a->closedate}';
$string['overviewname'] = 'Atribuição: {$a->link}';
$string['overviewready'] = 'Sua atribuição está disponível.';
$string['overviewreview'] = 'Pronto para revisão. As pessoas afetadas não podem ver os resultados.';
$string['people'] = 'Número de pessoas a serem atribuídas';
$string['permissionedited'] = 'Permissão editada';
$string['permissionviewed'] = 'Permissão visualizada';
$string['pluginadministration'] = 'Formulário de administração de atribuição';
$string['pluginname'] = 'Formulários de Atribuição (eForms)';
$string['privacy:export:allocations'] = 'Alocações';
$string['privacy:export:choices'] = 'Escolhas';
$string['privacy:export:restrictions'] = 'Restrições';
$string['privacy:metadata:allocationform_allocations'] = 'Armazena as alocações feitas para o usuário';
$string['privacy:metadata:allocationform_allocations:allocation'] = 'A opção para a qual o usuário foi alocado';
$string['privacy:metadata:allocationform_allocations:userid'] = 'O usuário que está sendo alocado';
$string['privacy:metadata:allocationform_choices'] = 'Armazena as escolhas que um usuário fez em um formulário de alocação';
$string['privacy:metadata:allocationform_choices:choice1'] = 'A primeira preferência do usuário';
$string['privacy:metadata:allocationform_choices:choice10'] = 'A décima preferência do usuário';
$string['privacy:metadata:allocationform_choices:choice2'] = 'A segunda preferência do usuário';
$string['privacy:metadata:allocationform_choices:choice3'] = 'A terceira preferência do usuário';
$string['privacy:metadata:allocationform_choices:choice4'] = 'A quarta preferência do usuário';
$string['privacy:metadata:allocationform_choices:choice5'] = 'A quinta preferência do usuário';
$string['privacy:metadata:allocationform_choices:choice6'] = 'A sexta preferência do usuário';
$string['privacy:metadata:allocationform_choices:choice7'] = 'A sétima preferência do usuário';
$string['privacy:metadata:allocationform_choices:choice8'] = 'A oitava preferência do usuário';
$string['privacy:metadata:allocationform_choices:choice9'] = 'A nona preferência do usuário';
$string['privacy:metadata:allocationform_choices:notwant'] = 'Uma opção à qual o usuário não deseja ser alocado';
$string['privacy:metadata:allocationform_choices:userid'] = 'O usuário fazendo as escolhas';
$string['privacy:metadata:allocationform_disallow'] = 'Armazenar as opções que um usuário foi impedido de escolher';
$string['privacy:metadata:allocationform_disallow:disallow_allocation'] = 'A opção que o usuário está impedido de selecionar';
$string['privacy:metadata:allocationform_disallow:userid'] = 'O usuário sendo restrito';
$string['processedmode'] = 'Processado';
$string['processmode'] = 'Processando';
$string['queued_for_processing'] = 'O formulário de atribuição está esperando para ser processado ... por favor, volte mais tarde.';
$string['readymode'] = 'Ativo';
$string['reprocess'] = 'Forçar reatribuição';
$string['reprocess_warning'] = 'Isto irá apagar todas as atribuições atuais';
$string['requirechoice'] = 'Exigir escolha';
$string['resetstate'] = 'Redefinir para o estado de edição';
$string['restrict'] = 'Restringir';
$string['restrictionsexceeded'] = 'Você excedeu o número de restrições viáveis para {$a->users} usuários. Pelo menos {$a->numberofchoices} opções disponíveis são necessárias por usuário.';
$string['restrictionsmodified'] = 'Restrições atualizadas.';
$string['reviewmode'] = 'Revisar';
$string['roleselect'] = 'Papel a atribuir';
$string['roleselect_help'] = 'Selecione o papel dos utilizadores sobre este curso que será atribuído através deste formulário.';
$string['saved'] = 'Suas escolhas foram salvas.';
$string['savefail'] = 'Suas escolhas não puderam ser salvas no Moodle';
$string['search:activity'] = 'Formulário de alocação - informações da atividade';
$string['show_allocations'] = 'Disponibilizar atribuições';
$string['slots'] = 'Número de vagas para a atribuição';
$string['startdate'] = 'Data de Início';
$string['startdate_help'] = 'A primeira data em que os usuários serão capazes de selecionar as suas atribuições.';
$string['statechanged'] = 'Estado alterado';
$string['statechangefailed'] = 'Não foi possível alterar o estado';
$string['trackcompletion'] = 'Exigir a apresentação de uma escolha para completar esta atividade?';
$string['unallocated'] = 'Não atribuído';
$string['youralloactions'] = 'Você foi alocado para:';
