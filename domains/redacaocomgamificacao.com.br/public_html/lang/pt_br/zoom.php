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
 * Strings for component 'zoom', language 'pt_br', version '4.1'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['addtocalendar'] = 'Adicionar ao calendário';
$string['allmeetings'] = 'Todas as reuniões';
$string['alternative_hosts'] = 'Hosts Alternativos';
$string['alternative_hosts_disable'] = 'Desabilita a opção de hosts alternativos';
$string['alternative_hosts_help'] = 'A opção de host alternativo permite agendar reuniões, e designar outro usuário Pro na mesma conta, de modo que ele possa iniciar a reunião ou o webinar, se você não conseguir. Este usuário receberá um e-mail informando que foi adicionado como host alternativo, com um link para iniciar a reunião. Separe vários emails por vírgula (sem espaços).';
$string['alternative_hosts_inputfield'] = 'Mostrar a opção de hosts alternativos como um campo de texto';
$string['alternative_hosts_picker'] = 'Mostrar a opção de hosts alternativos como uma seleção de autocompletar';
$string['alternative_hosts_picker_noneselected'] = 'Nenhum host alternativo selecionado';
$string['apikey'] = 'Chave da API do Zoom';
$string['apisecret'] = 'Segredo da API do Zoom';
$string['apiurl'] = 'URL da API do Zoom';
$string['audio_both'] = 'Áudio via computador e telefone';
$string['audio_telephony'] = 'Apenas áudio por telefone';
$string['audio_voip'] = 'Apenas áudio pelo computador';
$string['audiodefault'] = 'Padrão para áudio';
$string['authentication'] = 'Autenticação';
$string['cachedef_zoomid'] = 'O ID do usuário do Zoom';
$string['calendardescriptionURL'] = 'URL de participação na reunião';
$string['calendariconalt'] = 'Ícone do calendário';
$string['changehost'] = 'Alterar host';
$string['clickjoin'] = 'Botão de entrada na reunião clicado';
$string['connectionfailed'] = 'A conexão falhou:';
$string['connectionok'] = 'A conexão está funcionando.';
$string['connectionstatus'] = 'Status da conexão';
$string['defaultsettings'] = 'Configurações padrão do Zoom';
$string['defaultsettings_help'] = 'Essas configurações definem os padrões para todas as novas reuniões e webinars do Zoom.';
$string['duration'] = 'Duração (em minutos)';
$string['endtime'] = 'Tempo de encerramento';
$string['err_duration_nonpositive'] = 'A duração deve ter valor positivo.';
$string['err_duration_too_long'] = 'A duração não pode exceder 150 horas.';
$string['err_invalid_password'] = 'A senha contém caracteres inválidos';
$string['err_long_timeframe'] = 'O intervalo de tempo solicitado é muito longo, mostrando os resultados do último mês no intervalo.';
$string['err_password'] = 'A senha pode conter apenas os seguintes caracteres: [a-z A-Z 0-9 @ - _ *]. Máximo de 10 caracteres.';
$string['err_start_time_past'] = 'A data de início não pode estar no passado.';
$string['errorwebservice'] = 'Erro de serviço Web do Zoom: {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom recebeu uma solicitação incorreta: {$a}';
$string['errorwebservice_notfound'] = 'O recurso não existe: {$a}';
$string['export'] = 'Exportar';
$string['firstjoin'] = 'Quem pode entrar primeiro';
$string['firstjoin_desc'] = 'O mais cedo que um usuário pode entrar em uma reunião agendada (minutos antes do início).';
$string['getmeetingreports'] = 'Obter relatório da reunião do Zoom';
$string['host'] = 'Host';
$string['invalid_status'] = 'Status inválido, verifique o banco de dados.';
$string['invalidscheduleuser'] = 'Você não pode agendar para um usuário específico';
$string['join'] = 'Entrar';
$string['join_meeting'] = 'Entrar na reunião';
$string['joinbeforehost'] = 'Entrar na reunião antes do mediador';
$string['jointime'] = 'Hora de entrada';
$string['leavetime'] = 'Hora de saída';
$string['licensesnumber'] = 'Número de licenças';
$string['lowlicenses'] = 'Se o número de suas licenças exceder as necessárias, então quando você criar cada nova atividade por usuário, ela receberá uma licença PRO reduzindo o status de outro usuário. A opção é ativada quando o número de licenças PRO ativas é maior que 5.';
$string['media'] = 'Recursos de Mídia';
$string['meeting_finished'] = 'Encerrada';
$string['meeting_invite_show'] = 'Mostrar o convite para a reunião';
$string['meeting_nonexistent_on_zoom'] = 'Inexistente no zoom';
$string['meeting_not_started'] = 'Não foi iniciada';
$string['meeting_started'] = 'Em progresso';
$string['meeting_time'] = 'Hora de início';
$string['modulename'] = 'Reunião do Zoom';
$string['modulename_help'] = 'O Zoom é uma plataforma de videoconferência e webconferência que oferece aos usuários autorizados a capacidade de mediar reuniões online.';
$string['modulenameplural'] = 'Reuniões do Zoom';
$string['newmeetings'] = 'Novas Reuniões';
$string['nomeetinginstances'] = 'Nenhuma sessão encontrada para esta reunião.';
$string['noparticipants'] = 'Nenhum participante encontrado para esta sessão neste momento.';
$string['nosessions'] = 'Nenhuma sessão encontrada para o intervalo especificado.';
$string['nozooms'] = 'Sem reuniões';
$string['off'] = 'Desligado';
$string['oldmeetings'] = 'Reuniões Encerradas';
$string['on'] = 'Ligado';
$string['option_audio'] = 'Opções de áudio';
$string['option_authenticated_users'] = 'Somente usuários autenticados podem ingressar: Fazer login no Zoom';
$string['option_host_video'] = 'Host do vídeo';
$string['option_jbh'] = 'Permitir a entrada antes do mediador';
$string['option_mute_upon_entry'] = 'Desativar som dos participantes ao entrar';
$string['option_mute_upon_entry_help'] = 'Desativar automaticamente o som de todos participantes quando ingressarem na reunião. Os participantes podem reativar o som após entrar na reunião.';
$string['option_participants_video'] = 'Vídeo dos participantes';
$string['option_waiting_room'] = 'Habilitar sala de espera';
$string['participantdatanotavailable'] = 'Detalhes não disponíveis';
$string['participants'] = 'Participantes';
$string['password'] = 'Senha';
$string['passwordprotected'] = 'Protegido por Senha';
$string['pluginadministration'] = 'Gerenciar reunião do Zoom';
$string['pluginname'] = 'Reunião do Zoom';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'O nome do participante';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'O email do participante';
$string['recordingshow'] = 'Mostrar Gravação (Atualmente Oculto)';
$string['recordingshowtoggle'] = 'Alternar Mostrar Gravação';
$string['recordingtypeaudio'] = 'Apenas áudio';
$string['recordingtypevideo'] = 'Vídeo e Áudio';
$string['recurringmeeting'] = 'Encontro recorrente';
$string['recurringmeeting_help'] = 'Não tem data de encerramento';
$string['recurringmeetingexplanation'] = 'A reunião não tem data ou hora de término';
$string['recurringmeetinglong'] = 'Reunião recorrente (reunião sem data ou hora de encerramento)';
$string['recurringmeetingthisis'] = 'Esta é uma reunião recorrente';
$string['recycleonjoin'] = 'Renovar licença ao ingressar';
$string['redefinelicenses'] = 'Redefinir licenças';
$string['refreshreports'] = 'Atualizar relatórios de sessão';
$string['repeatinterval'] = 'Repitir a cada';
$string['report'] = 'Relatórios';
$string['reportapicalls'] = 'As chamadas da API de relatórios se esgotaram';
$string['requirepasscode'] = 'Exigir senha de reunião';
$string['requirepasscode_help'] = 'Habilitar esta opção exigirá que o organizador defina uma senha para a reunião. Os participantes que ingressarem deverão informar isso antes de ingressar na reunião. Os participantes que entrarem na reunião a partir da atividade do Moodle não precisam inserir esta senha.';
$string['resetapicalls'] = 'Redefinir o número de chamadas de API disponíveis';
$string['schedule'] = 'Cronograma';
$string['schedulefor'] = 'Agendar reunião para';
$string['schedulefor_help'] = 'Você pode agendar reuniões em nome de outro usuário. Como pré-requisito, este usuário deve ter atribuído a você privilégio de agendamento no Zoom. O usuário selecionado será o host da reunião e será aquele cuja licença do Zoom será usada para a reunião.';
$string['scheduleforself'] = 'Agendar para você mesmo';
$string['schedulingprivilege'] = 'Privilégio de agendamento';
$string['schedulingprivilege_desc'] = 'Com esta configuração, você pode controlar se a opção de privilégio de agendamento é mostrada aos usuários nas configurações da instância de atividade ou não. Esta configuração afeta apenas as configurações de instância de atividade do Moodle. Mesmo se você decidir mostrar a opção, o usuário ainda precisará obter o privilégio de agendamento concedido por outro usuário no Zoom para finalmente agendar uma reunião para o outro usuário.';
$string['schedulingprivilege_disable'] = 'Desabilitar opção de privilégio de agendamento';
$string['schedulingprivilege_enable'] = 'Habilitar opção de privilégio de agendamento';
$string['search:activity'] = 'Zoom - informação de atividade';
$string['security'] = 'Segurança';
$string['sessions'] = 'Sessões';
$string['sessionsreport'] = 'Relatório de sessões';
$string['setpasscode'] = 'Definir código de acesso';
$string['showmedia'] = 'Mostrar a seção \'Recursos de Mídia\'';
$string['showmedia_help'] = 'Habilitar essa opção irá mostrar a seção \'Recursos de Mídia\' na página da reunião.';
$string['showmediaonview'] = 'Mostrar a seção \'Recursos de Mídia\' na página da reunião';
$string['showschedule'] = 'Mostrar a seção Cronograma';
$string['showschedule_help'] = 'Habilitar essa opção irá mostrar a seção Cronograma na página da reunião.';
$string['showscheduleonview'] = 'Mostrar a seção \'Cronograma\' na página da reunião';
$string['showsecurity'] = 'Mostrar a seção Segurança';
$string['showsecurity_help'] = 'Habilitar essa opção irá mostrar a seção Segurança na página da reunião.';
$string['showsecurityonview'] = 'Mostrar a seção \'Segurança\' na página da reunião';
$string['start'] = 'Começar';
$string['start_meeting'] = 'Começar reunião';
$string['start_time'] = 'Quando';
$string['starthostjoins'] = 'Começar o vídeo quando o mediador entrar';
$string['startpartjoins'] = 'Começar o vídeo quando o participante entrar';
$string['starttime'] = 'Hora de início';
$string['status'] = 'Status';
$string['supplementaryfeaturessettings'] = 'Configurações de recursos complementares';
$string['supplementaryfeaturessettings_desc'] = 'Essas configurações controlam se e como os recursos suplementares do zoom são fornecidos aos usuários.';
$string['title'] = 'Título';
$string['topic'] = 'Tópico';
$string['unavailable'] = 'Não é possível participar neste momento';
$string['unavailablefinished'] = 'A reunião já terminou.';
$string['unavailablefirstjoin'] = 'Você pode entrar, no mínimo, {$a->mins} minutos antes do horário de início agendado.';
$string['unavailablenotstartedyet'] = 'A reunião ainda não começou.';
$string['updatemeetings'] = 'Atualizar as configurações de reunião do Zoom';
$string['usepersonalmeeting'] = 'Use o ID de reunião pessoal {$a}';
$string['waitingroom'] = 'Sala de espera habilitada';
$string['waitingroomenable'] = 'Habilitar sala de espera';
$string['webinar'] = 'Webinar';
$string['webinar_already_false'] = '<p><b>Este módulo já foi definido como uma reunião, não como um webinar. Você não pode alternar essa configuração depois de criar a reunião.</b></p>';
$string['webinar_already_true'] = '<p><b>Este módulo já foi definido como um webinar, e não uma reunião. Você não pode alternar essa configuração depois de criar o webinar.</b></p>';
$string['webinar_alwaysshow'] = 'Sempre mostrar a opção de webinar, independentemente se o usuário tem uma licença para hospedar webinars';
$string['webinar_desc'] = 'Com essa configuração, você pode controlar se a opção de criar um webinar é mostrada aos usuários durante a criação de uma reunião ou não. Esta configuração afeta apenas as configurações de instância de atividade do Moodle. Mesmo se você decidir sempre mostrar a opção, o usuário ainda precisará de uma licença válida para webinars para finalmente hospedar um webinar.';
$string['webinar_disable'] = 'Desabilitar webinars';
$string['webinar_help'] = 'Os webinars oferecem aos hosts maior controle e flexibilidade para hospedar reuniões com públicos maiores. Esta opção está disponível apenas para contas Zoom pré-autorizadas.';
$string['webinar_showonlyiflicense'] = 'Mostrar opção de webinar apenas se o usuário tiver uma licença para hospedar webinars';
$string['webinarthisis'] = 'Este é um webinar';
$string['week'] = 'Semana(s)';
$string['weekoption_first'] = 'Primeiro';
$string['weekoption_fourth'] = 'Quarto';
$string['weekoption_last'] = 'Último';
$string['weekoption_second'] = 'Segundo';
$string['weekoption_third'] = 'Terceiro';
$string['zoom:addinstance'] = 'Adicionar uma nova reunião do Zoom';
$string['zoom:eligiblealternativehost'] = 'Selecionável como host alternativo nas reuniões do Zoom';
$string['zoom:refreshsessions'] = 'Atualizar relatórios de reuniões do Zoom';
$string['zoom:view'] = 'Visualizar as reuniões do Zoom';
$string['zoom:viewdialin'] = 'Ver informações de discagem de zoom';
$string['zoom:viewjoinurl'] = 'Visualizar URL de entrada do Zoom';
$string['zoomerr'] = 'Ocorreu um erro com o Zoom.';
$string['zoomerr_alternativehostusernotfound'] = 'O usuário {$a} não foi encontrado no Zoom.';
$string['zoomerr_apilimit'] = 'Limite máximo de taxa diária para esta API foi atingido. Tente novamente em {$a}';
$string['zoomerr_field_missing'] = '{$a} não encontrado';
$string['zoomerr_id_missing'] = 'Você deve especificar um ID do(a) course_module ou um ID de instância';
$string['zoomerr_licensesnumber_missing'] = 'Configuração máxima do Zoom encontrada, mas a configuração do número de licenças não foi encontrada';
$string['zoomerr_maxretries'] = 'Tentamos {$a->maxretries} vezes fazer a chamada, mas falhou: {$a->response}';
$string['zoomerr_meetingnotfound'] = 'Esta reunião não pode ser encontrada no Zoom. Você pode <a href="{$a->recreate}">recriá-la aqui</a> ou <a href="{$a->delete}">excluí-la completamente</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Esta reunião não pode ser encontrada no Zoom. Por favor entre em contato com o mediador da reunião se você tiver dúvidas.';
$string['zoomerr_no_access_token'] = 'Nenhum token de acesso retornado';
$string['zoomerr_usernotfound'] = 'Não foi possível encontrar sua conta no Zoom. Se estiver usando o Zoom pela primeira vez, você deve ativar sua conta do Zoom fazendo login em <a href="{$a}" target="_blank">{$a}</a>. Depois de ativar sua conta Zoom, recarregue esta página e continue configurando sua reunião. Caso contrário, verifique se seu e-mail no Zoom corresponde ao seu e-mail neste sistema.';
$string['zoomerr_viewrecordings_off'] = 'A tarefa Ver gravações está desativada e não pode ser executada';
$string['zoomurl'] = 'URL da página inicial do Zoom';
$string['zoomurl_desc'] = '';
