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
 * Strings for component 'local_o365', language 'pt_br', version '4.1'.
 *
 * @package     local_o365
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acp_coursesynccustom'] = 'Customização de sincronização do curso';
$string['acp_coursesynccustom_bulk'] = 'Operações em lote';
$string['acp_coursesynccustom_bulk_disable'] = 'Desabilitar sincronização do curso nesta página';
$string['acp_coursesynccustom_bulk_enable'] = 'Habilitar sincronização do curso nesta página';
$string['acp_coursesynccustom_confirm_all_action'] = 'Você tem certeza que quer mudar o status de sincronização de todos os cursos? Esta ação não pode ser desfeita.';
$string['acp_coursesynccustom_controlled_per_course'] = 'Permitir configuração de sincronização no curso';
$string['acp_coursesynccustom_controlled_per_course_desc'] = 'Se habilitado, usuários inscritos em cursos Moodle, que são elegíveis para atuar como donos de Equipe (possuindo "Team owner"[local/o365:temaowner] capability) serão capazes de controlar a sincronização do curso a partir do bloco Microsoft no curso.';
$string['acp_coursesynccustom_disable_all'] = 'Desabilitar sincronização em todos os cursos';
$string['acp_coursesynccustom_enable_all'] = 'Habilitar sincronização em todos os cursos';
$string['acp_coursesynccustom_enabled'] = 'Habilitado';
$string['acp_coursesynccustom_new_course'] = 'Habilitado, padrão para cursos novos';
$string['acp_coursesynccustom_new_course_desc'] = 'Se habilitado, todos os novos cursos criados terão sincronização habilitada por padrão.';
$string['acp_coursesynccustom_off'] = 'Desabilitado<br /> Desabilita a criação de Teams para todos os cursos.';
$string['acp_coursesynccustom_onall'] = 'Todas as funções habilitadas<br />Habilita a criação de Teams para todos os cursos.';
$string['acp_coursesynccustom_oncustom'] = 'Customizar<br />Permite que usuários autorizados selecionem para quais cursos Teams serão criados, permitindo Customizar a sincronização de curso';
$string['acp_coursesynccustom_savemessage'] = 'Alterações salvas.';
$string['acp_coursesynccustom_sds_course'] = 'Bloqueado para curso SDS.';
$string['acp_coursesynccustom_searchwarning'] = 'Nota: As pesquisas irão perder qualquer progresso não salvo. Pressione salvar mudanças para garantir que suas alterações serão salvas.';
$string['acp_coursesynccustom_settings_header'] = 'Opções de sincronização';
$string['acp_healthcheck'] = 'Verificação de integridade';
$string['acp_maintenance'] = 'Ferramentas de manutenção';
$string['acp_maintenance_cleandeltatoken'] = 'Limpar Delta Tokens de Sincronização do usuário';
$string['acp_maintenance_cleandeltatoken_completed'] = 'Delta Token do usuário e Skip Delta Token foram limpos.';
$string['acp_maintenance_cleandeltatoken_desc'] = 'Um Delta Token velho pode causar problemas na sincronização do usuário, fazendo com que seu funcionamento completo seja comprometido após atualizar suas configurações de sincronização do usuário. A limpeza deste token forçará sua remoção em uma próxima sincronização quando esta estiver em execução.';
$string['acp_maintenance_debugdata'] = 'Gerar pacote de dados de depuração';
$string['acp_maintenance_debugdata_desc'] = 'Isso irá gerar um pacote contendo várias informações sobre seu servidor Moodle e também sobre o ambiente Microsoft 365, ajudando os desenvolvedores a solucionar quaisquer problemas que encontrarem. Se solicitado por um desenvolvedor, execute esta ferramenta e envie o arquivo resultante baixado. Nota: Embora este pacote não contenha tokens de dados sensíveis, pedimos que não publique este arquivo publicamente ou o envie para um pessoas não confiáveis.';
$string['acp_maintenance_desc'] = 'Estas ferramentas pode te ajudar a resolver problemas comuns.';
$string['acp_maintenance_recreatedeletedgroups'] = 'Recriar grupos do Microsoft 365 apagados';
$string['acp_maintenance_recreatedeletedgroups_all_groups_exist'] = 'Existem todos os grupos ligados ao curso Moodle e aos grupos de cursos.';
$string['acp_maintenance_recreatedeletedgroups_course'] = 'Curso';
$string['acp_maintenance_recreatedeletedgroups_course_group'] = 'Grupo de curso';
$string['acp_maintenance_recreatedeletedgroups_desc'] = 'Isso irá verificar quaisquer grupos do Microsoft Teams que tenham sido deletados manualmente e irá recriá-los.';
$string['acp_maintenance_recreatedeletedgroups_group_type'] = 'Objeto do tipo Moodle';
$string['acp_maintenance_recreatedeletedgroups_group_type_course'] = 'Curso';
$string['acp_maintenance_recreatedeletedgroups_group_type_course_group'] = 'Grupo de curso';
$string['acp_maintenance_recreatedeletedgroups_status'] = 'Estado';
$string['acp_maintenance_recreatedeletedgroups_status_created_fail'] = 'Recriação de grupo falhou';
$string['acp_maintenance_recreatedeletedgroups_status_created_success'] = 'Grupo recriado';
$string['acp_maintenance_recreatedeletedgroups_status_sync_disabled'] = 'Sincronização de curso desabilitada';
$string['acp_maintenance_resyncgroupusers'] = 'Ressincronizar usuários de grupos do Microsoft 365 nos cursos';
$string['acp_maintenance_resyncgroupusers_course_output'] = 'Saída da ressincronização';
$string['acp_maintenance_resyncgroupusers_desc'] = 'Isso irá ressincronizar a associação do usuário para todos os grupos do Microsoft 365 criados para todos os cursos Moodle. Isso garantirá que todos e apenas os usuários matriculados em um curso Moodle estejam em um grupo do Microsoft 365.<br /><b>Note:</b>Se você tiver adicionado um usuário qualquer(não matriculado no curso Moodle associado) a mais em um Grupo do Microsoft 365, ele será removido.';
$string['acp_maintenance_resyncgroupusers_no_course'] = 'Nenhum curso conectado ao Microsoft 365';
$string['acp_maintenance_warning'] = 'Aviso: Estas são ferramentas avançadas. Por favor, use-as apenas se você tiver entendimento do que esta fazendo.';
$string['acp_parentsite_desc'] = 'Site para dados compartilhados de cursos Moodle.';
$string['acp_parentsite_name'] = 'Moodle';
$string['acp_teamconnection'] = 'Gerenciar conexão da Equipe';
$string['acp_teamconnections'] = 'Gerenciar conexões da Equipe';
$string['acp_teamconnections_actions'] = 'Ações';
$string['acp_teamconnections_cache_last_updated'] = 'O cache do Teams teve sua última atualização em {$a->lastupdated}. Clique <a href="{$a->updateurl}">aqui</a> para atualizar o cache.';
$string['acp_teamconnections_cache_never_updated'] = 'O cache do Teams nunca foi atualizado. Clique <a href="{$a->updateurl}">aqui</a> para atualizar.';
$string['acp_teamconnections_connected_team'] = 'Equipe conectada';
$string['acp_teamconnections_connection_completed'] = 'Conexão bem sucedida entre curso e Equipe.';
$string['acp_teamconnections_course_connected'] = 'A conexão do curso com a Equipe foi realizada com sucesso.';
$string['acp_teamconnections_current_connection'] = 'CONEXÃO ATUAL';
$string['acp_teamconnections_exception_course_not_exist'] = 'O curso a ser conectado não existe.';
$string['acp_teamconnections_exception_invalid_team_id'] = 'ID de Equipe inválido';
$string['acp_teamconnections_exception_no_unified_token'] = 'Falha ao obter token unificado para realizar chamadas a API.';
$string['acp_teamconnections_exception_not_configured'] = 'Microsoft 365 não está completamente configurado.';
$string['acp_teamconnections_exception_team_already_connected'] = 'Este Teams está conectado a outro curso.';
$string['acp_teamconnections_exception_team_creation'] = 'Ocorreu um erro na tentativa de criação de uma Equipe. Detalhes: {$a}';
$string['acp_teamconnections_exception_team_no_owner'] = 'Não foi encontrado nenhum Team owner adequado.';
$string['acp_teamconnections_form_connect_course'] = 'Gerenciar conexão da Equipe para o curso {$a}';
$string['acp_teamconnections_form_sds_warning'] = 'NOTA: A conexão manual entre um curso Moodle e uma Equipe criada por um Student Data Sync (SDS) pode resultar em comportamento inesperado em ambas as sincronizações, portanto, isso deve ser proibido.';
$string['acp_teamconnections_form_team'] = 'Selecionar Equipe';
$string['acp_teamconnections_group_only'] = '(Apenas grupo)';
$string['acp_teamconnections_invalid_connection'] = 'Conexão inválida';
$string['acp_teamconnections_no_owner'] = 'Adicionar donos ao Teams.';
$string['acp_teamconnections_not_connected'] = 'Não conectado';
$string['acp_teamconnections_sync_disabled'] = 'A sincronização do curso precisa ser habilitada antes de se fazer o gerenciamento das conexões Teams.';
$string['acp_teamconnections_table_cannot_create_team_from_group'] = 'Impossível criar uma Equipe de um grupo - sem proprietário';
$string['acp_teamconnections_table_connect'] = 'Conectar';
$string['acp_teamconnections_table_connect_to_different_team'] = 'Conectar com uma Equipe diferente';
$string['acp_teamconnections_table_missing_team'] = 'O curso está conectado a uma equipe inexistente. Tente atualizar o cache dos Teams.';
$string['acp_teamconnections_table_update'] = 'Atualizar';
$string['acp_teamconnections_team_already_connected'] = 'O curso já está conectado a uma Equipe.';
$string['acp_teamconnections_team_created'] = 'Equipe foi criada com sucesso para o curso.';
$string['acp_teamconnections_team_exists_but_not_connected'] = 'O curso está configurado para permitir conexão somente com um Grupo, no entanto, existe uma Equipe conectada ao Grupo.';
$string['acp_teamconnections_team_missing'] = '(Equipe vazia)';
$string['acp_teamconnections_teams_cache_updated'] = 'Cache do Teams atualizado com sucesso.';
$string['acp_tenants_actions'] = 'Ações';
$string['acp_tenants_add'] = 'Adicionar novo locatário';
$string['acp_tenants_additional_tenants'] = 'Locatários adicionais';
$string['acp_tenants_delete'] = 'Apagar';
$string['acp_tenants_errornotsetup'] = 'Por favor, complete o processo de configuração do plugin antes de adicionar locatários adicionais.';
$string['acp_tenants_hosttenant'] = 'Locatário anfitrião: {$a}';
$string['acp_tenants_intro'] = '<b>Como funciona a multilocação:<b><br />A multilocação permite que vários locatários do Microsoft 365 acessem seu site do Moodle.<br /><br />
Veja como configurar:
<ol>
<li>Faça login no Moodle como um usuário administrador do site que não está usando o plug-in de autenticação OpenID Connect.</li>
<li>Verifique se as configurações de Ponto de Extremidade de <b>Autorização e Ponto de Extremidade</b> de <b>Token</b> do plug-in de autenticação do OpenID Connect estão usando as configurações específicas padrão de não locatário.</li>
<li>Desative o plug-in de autenticação OpenID Connect no Moodle. (Use <a href="{$a}/admin/settings.php?section=manageauths">a página de administração de plugins de autenticação</a>.)</li>
<li>Navegue até o Azure AD e localize o aplicativo que você configurou para o Moodle.</li>
<li>Habilite a multilocação no aplicativo Azure AD e salve as alterações.</li>
<li>Conceda pelo menos uma das seguintes permissões delegadas de gráfico ao aplicativo: Directory.Read.All, Domain.Read.All ou <b>Domain.ReadWrite.All</b><b>.</b><b></b> O consentimento do administrador para a sua organização não é necessário.</li>
<li>Se você já estiver conectado usando sua conta da Microsoft do locatário adicional, faça logout completamente e logon novamente.</li>
<li>Para cada locatário que você deseja habilitar, clique em "Adicionar Novo Locatário" e faça logon com uma conta de administrador do locatário que você deseja habilitar.</li>
<li>Depois de adicionar todos os locatários desejados, reative o plug-in de autenticação OpenID Connect no Moodle.</li>
<li>Fim! Para adicionar mais locatários posteriormente, basta clicar no botão "Adicionar novo locatário" e fazer login com uma conta de administrador desse locatário.</li>
</ol>
<b>Observação importante:</b> A multilocação do Azure AD permite que todos os locatários do Microsoft 365 acessem seu aplicativo quando habilitado. Adicionar os locatários aqui nos permite restringir o acesso do Moodle aos locatários que você configurar. <b>Se você remover todos os locatários dessa lista antes de desabilitar a multilocação no Azure AD ou habilitar a autenticação do OpenID Connect no Moodle com uma lista vazia, seu site do Moodle estará aberto para todos os locatários do Microsoft 365.</b>';
$string['acp_tenants_legacy_tenants'] = 'Locatários legados (ação requerida)';
$string['acp_tenants_legacy_tenants_help'] = 'Os locatários adicionais abaixo adicionados anteriormente podem não funcionar no fluxo de trabalho de multilocação atualizado e precisam ser corrigidos.<br/>
Use o botão "Adicionar novo locatário" acima para adicionar novamente.';
$string['acp_tenants_none'] = 'Você não tem nenhum locatário configurado. Se você tiver habilitado a multilocação no Azure AD, seu site Moodle pode estar aberto para todos os usuários do Microsoft 365.';
$string['acp_tenants_revokeaccess'] = 'Acesso revogado';
$string['acp_tenants_tenant'] = 'Locatário';
$string['acp_tenants_title'] = 'Multilocação';
$string['acp_tenants_title_desc'] = 'Esta página ajuda você a configurar o acesso de multilocação ao Moodle a partir do Microsoft 365.';
$string['acp_tenantsadd_desc'] = 'Para garantir acesso a um locatário adicional, clique no botão abaixo e faça log in no Microsoft 365 usando uma conta de administrador do novo locatário. Você obterá como retorno uma lista com os locatários adicionais, onde o novo locatário será listado. Então, você será capaz de usar o Moodle com o novo locatário.';
$string['acp_tenantsadd_linktext'] = 'Seguir para a página de login do Microsoft 365';
$string['acp_userconnections'] = 'Gerenciar conexões dos usuários';
$string['acp_userconnections_column_actions'] = 'Ações';
$string['acp_userconnections_column_muser'] = 'Usuário Moodle';
$string['acp_userconnections_column_o365user'] = 'Usuário Micrososft 365';
$string['acp_userconnections_column_status'] = 'Status da conexão';
$string['acp_userconnections_column_usinglogin'] = 'Usando Login';
$string['acp_userconnections_filtering_muserfullname'] = 'Nome completo do usuário Moodle';
$string['acp_userconnections_filtering_musername'] = 'Nome de usuário Moodle';
$string['acp_userconnections_filtering_o365username'] = 'Nome de usuário do Microsoft 365';
$string['acp_userconnections_manualmatch_details'] = 'Esta página permite que você vincule um usuário do Moodle com um usuário do Microsoft 365.';
$string['acp_userconnections_manualmatch_error_muserconnected'] = 'O usuário Moodle já está conectado a um usuário Microsoft 365';
$string['acp_userconnections_manualmatch_error_muserconnected2'] = 'O usuário Moodle já está conectado a um usuário Microsoft 365 (2)';
$string['acp_userconnections_manualmatch_error_musermatched'] = 'O usuário Moodle já está vinculado a um usuário Microsoft 365';
$string['acp_userconnections_manualmatch_error_o365userconnected'] = 'O usuário Microsoft 365 já está conectado a outro usuário Moodle';
$string['acp_userconnections_manualmatch_error_o365usermatched'] = 'O usuário Microsoft 365 já está vinculado a outro usuário Moodle';
$string['acp_userconnections_manualmatch_musername'] = 'Usuário Moodle';
$string['acp_userconnections_manualmatch_o365username'] = 'Nome de usuário Microsoft 365';
$string['acp_userconnections_manualmatch_title'] = 'Vincular usuário manualmente';
$string['acp_userconnections_manualmatch_uselogin'] = 'Faça logon com o Microsoft 365';
$string['acp_userconnections_resync_nodata'] = 'Não foi encontrada nenhuma informação armazenada para este usuário';
$string['acp_userconnections_resync_notconnected'] = 'Este usuário não está conectado ao Microsoft 365';
$string['acp_userconnections_table_connected'] = 'Conectado';
$string['acp_userconnections_table_disconnect'] = 'Desconectado';
$string['acp_userconnections_table_disconnect_confirmmsg'] = 'Isto irá desconectar o usuário Moodle "{$a}" do Microsoft 365. Clique no link abaixo para prosseguir.';
$string['acp_userconnections_table_match'] = 'Vincular';
$string['acp_userconnections_table_matched'] = 'Vinculado com o usuário existente.<br />Aguardando conclusão.';
$string['acp_userconnections_table_noconnection'] = 'Sem conexão';
$string['acp_userconnections_table_resync'] = 'Sincronizar novamente';
$string['acp_userconnections_table_synced'] = 'Sincronizado a partir do Azure AD.<br />Esperando logon inicial.';
$string['acp_userconnections_table_unmatch'] = 'Desvincular';
$string['acp_userconnections_table_unmatch_confirmmsg'] = 'Isto irá desvincular o usuário Moodle "{$a}" do Microsoft 365. Clique no link abaixo para prosseguir.';
$string['acp_usermatch'] = 'Vinculando usuário';
$string['acp_usermatch_desc'] = 'Esta ferramenta permite que você associe usuários Moodle com usuários Microsoft 365. Você irá carregar um arquivo contendo os usuários Moodle e usuários do Microsoft 365 vinculados, e uma tarefa cron vai verificar os dados e configurar a vinculação.';
$string['acp_usermatch_matchqueue'] = 'Passo 2: Vínculo enfileirado';
$string['acp_usermatch_matchqueue_clearall'] = 'Limpar tudo';
$string['acp_usermatch_matchqueue_clearerrors'] = 'Limpar erros';
$string['acp_usermatch_matchqueue_clearqueued'] = 'Limpar fila';
$string['acp_usermatch_matchqueue_clearsuccess'] = 'Limpeza realizada com sucesso';
$string['acp_usermatch_matchqueue_column_muser'] = 'Nome de usuário Moodle';
$string['acp_usermatch_matchqueue_column_o365user'] = 'Nome de usuário Microsoft 365';
$string['acp_usermatch_matchqueue_column_openidconnect'] = 'OpenID conectado';
$string['acp_usermatch_matchqueue_column_status'] = 'Status';
$string['acp_usermatch_matchqueue_desc'] = 'Esta tabela mostra o status atual da operação de vinculação. Toda vez que a tarefa agendada da <b>Fila de Processos de Vinculação</b> for executada, um lote com os usuários será processado.<br /><b>Note:</b> Esta página não será atualizada automaticamente, recarregue a página para ver o status atual.';
$string['acp_usermatch_matchqueue_empty'] = 'A fila de vinculação está atualmente vazia. Carregue um arquivo de dados usando o file picker acima para adicionar usuários à fila.';
$string['acp_usermatch_matchqueue_status_error'] = 'Erro: {$a}';
$string['acp_usermatch_matchqueue_status_queued'] = 'Enfileirado';
$string['acp_usermatch_matchqueue_status_success'] = 'Bem-sucedido';
$string['acp_usermatch_upload'] = 'Passo 1: Carregar novos vínculos';
$string['acp_usermatch_upload_desc'] = 'Carregue um arquivo de dados contendo nomes de usuário do Moodle e Microsoft 365 para vincular usuários do Moodle a usuários do Microsoft 365.<br />
<br />
Esse arquivo deve ser um arquivo CSV de texto simples contendo três itens por linha:
<ul>
<li>o nome de usuário do Moodle,</li>
<li>o nome de usuário do Microsoft 365,</li>
<li>1 ou 0, enquanto 1 significa alterar o método de autenticação do usuário para OpenID Connect e 0 significa manter o método de autenticação existente e usá-lo como uma conta vinculada.</li>
</ul>
Não inclua cabeçalhos ou dados adicionais.<br />
Por exemplo: <pre>moodleuser1,bob.smith@example.onmicrosoft.com,1<br />moodleuser2,john.doe@example.onmicrosoft.com,0</pre>';
$string['acp_usermatch_upload_err_badmime'] = 'O tipo {$a} não é suportado. Por favor, carregue um arquivo CSV de texto simples.';
$string['acp_usermatch_upload_err_data'] = 'A linha #{$a} contém dados inválidos. Cada linha no arquivo CSV deve ter dois itens: O nome de usuário Moodle e o nome de usuário Microsoft 365.';
$string['acp_usermatch_upload_err_fileopen'] = 'Não foi possível abrir o arquivo para processamento. As permissões de seu diretório Moodledata estão configuradas corretamente?';
$string['acp_usermatch_upload_err_nofile'] = 'Nenhum arquivo foi recebido para ser adicionado a fila.';
$string['acp_usermatch_upload_submit'] = 'Adicionar arquivo de dados à fila de vinculação';
$string['assignment'] = 'Tarefa';
$string['cachedef_groups'] = 'Armazena os dados do grupo Microsoft 365';
$string['calendar_event'] = 'Ver detalhes';
$string['calendar_setting'] = 'Habilitar sincronização de calendário do Outlook';
$string['calendar_site'] = 'Celendário do site';
$string['calendar_user'] = 'Calendário pessoal (usuário)';
$string['course_assignment_submitted_due'] = 'Curso - {$a->course} &nbsp; |  &nbsp; atribuído -{$a->assignment} <br />
       Enviado para - {$a->submittedon} &nbsp; |  &nbsp; Data de vencimento - {$a->duedate}';
$string['course_selector_label'] = 'Selecionar curso existente';
$string['due_date'] = 'Data de vencimento - {$a}';
$string['error_missing_app_id'] = 'Configuração de ID do aplicativo ausente.';
$string['error_missing_bot_settings'] = 'O recurso Bot está habilitado, mas as configurações do bot estão ausentes.';
$string['erroracpapcantgettenant'] = 'Não foi possível obter o locatário do Azure AD, por favor, insira-o manualmente.';
$string['erroracpauthoidcnotconfig'] = 'Por favor, configure primeiro as credenciais da aplicação em auth_oidc.';
$string['erroracpcantgettenant'] = 'Não foi possível obter a URL do OneDrive, por favor, insira manualmente.';
$string['erroracplocalo365notconfig'] = 'Por favor, configure local_o365 primeiro.';
$string['errorchecksystemapiuser'] = 'Não foi possível obter o token de usuário da API do sistema por favor execute a verificação de integridade, garanta que seu cron do Moodle está em execução e recarregue o usuário da API do sistema, se necessário.';
$string['errorcouldnotrefreshtoken'] = 'Não foi possível recarregar o token';
$string['errorhttpclientbadtempfileloc'] = 'Não foi possível abrir o diretório temporário para armazenar o arquivo.';
$string['errorhttpclientnofileinput'] = 'Nenhum parâmetro de arquivo em httpclient::put';
$string['errornodirectaccess'] = 'O acesso direto a página é proibido';
$string['erroro365apibadcall'] = 'Erro na chamada da API.';
$string['erroro365apibadcall_message'] = 'Erro na chamada da API: {$a}';
$string['erroro365apibadpermission'] = 'Permissão não encontrada';
$string['erroro365apicouldnotcreatesite'] = 'Problema ao criar site.';
$string['erroro365apicoursenotfound'] = 'Curso não encontrado.';
$string['erroro365apiinvalidmethod'] = 'httpmethod inválido passado ao apicall';
$string['erroro365apiinvalidtoken'] = 'Token inválido ou expirado.';
$string['erroro365apinoparentinfo'] = 'Não foi possível localizar informações da pasta pai';
$string['erroro365apinotimplemented'] = 'Isso deve ser substituído.';
$string['erroro365apinotoken'] = 'Não tinha um token para o determinado recurso e usuário, e não foi possível obter um. O token de atualização do usuário expirou?';
$string['erroro365apisiteexistsnolocal'] = 'O site já existe, mas não foi possível encontrar seu registro local.';
$string['errorprovisioningapp'] = 'Não foi possível alimentar o aplicativo Moodle no Time.';
$string['errorusermatched'] = 'A conta do Microsoft 365 "{$a->aadupn}" já é correspondente com o usuário do Moodle "{$a->username}". Para concluir a conexão, faça login como usuário do Moodle primeiro e siga as instruções no bloco da Microsoft.';
$string['eventapifail'] = 'Falha de API';
$string['eventcalendarsubscribed'] = 'Usuário inscrito ao calendário';
$string['eventcalendarunsubscribed'] = 'Usuário desinscrito ao calendário';
$string['grade_date'] = 'Nota - {$a->grade} &nbsp; | &nbsp; Data - {$a->date}';
$string['healthcheck_fixlink'] = 'Clique aqui para consertar.';
$string['healthcheck_ratelimit_result_disabled'] = 'Os recursos de limitação de taxa foram desabilitados.';
$string['healthcheck_ratelimit_result_notice'] = 'Uma ligeira limitação foi habilitada para lidar com o aumento de carga do Moodle. <br /><br />Todos os recursos do Microsoft 365 são funcionais, isso apenas espaça ligeiramente as solicitações para evitar a interrupção dos serviços do Microsoft 365. Quando a atividade do Moodle for reduzida, tudo voltará ao normal. <br />(Level {$a->level} / iniciado {$a->timestart})';
$string['healthcheck_ratelimit_result_passed'] = 'Chamadas de API do Microsoft 365 estão sendo executadas em sua velocidade máxima.';
$string['healthcheck_ratelimit_result_warning'] = 'O aumento da limitação foi habilitado para lidar com a carga do Moodle. <br /><br />Todos os recursos do Microsoft 365 ainda estão funcionais, mas as solicitações do Microsoft 365 podem levar mais tempo para serem concluídas. Assim que a atividade do Moodle for reduzida, tudo voltará ao normal. <br />(Level {$a->level} / iniciado {$a->timestart})';
$string['healthcheck_ratelimit_title'] = 'Limitação de API';
$string['healthcheck_systemapiuser_title'] = 'Sistema de API de usuário';
$string['healthcheck_systemtoken_result_badtoken'] = 'Houve um problema de comunicação com o Microsoft 365 como usuário da API do sistema. Normalmente, isso pode ser resolvido ao redefinir o usuário da API do sistema.';
$string['healthcheck_systemtoken_result_noclientcreds'] = 'Não há credenciais da aplicação presente no plugin OpenID Connect. Sem essas credenciais, o Moodle não pode se comunicar com o Microsoft 365. Clique aqui para visitar a página de configurações e inserir suas credenciais.';
$string['healthcheck_systemtoken_result_notoken'] = 'O Moodle não tem um token para se comunicar com o Microsoft 365 como usuário da API do sistema. Isso geralmente pode ser resolvido redefinindo o usuário da API do sistema.';
$string['healthcheck_systemtoken_result_passed'] = 'O Moodle pode se comunicar com o Microsoft 365 como usuário da API do sistema.';
$string['help_message'] = 'Olá! Eu sou seu assistente no Moodle. Você pode me fazer as seguintes perguntas:';
$string['help_user_appassign'] = 'Associar usuários à Ajuda do aplicativo';
$string['help_user_appassign_help'] = 'Isso fará com que todas as contas do Azure AD vinculadas com contas do Moodle sejam atribuídas ao aplicativo do Azure criado para essa instalação do Moodle, se ainda não tiverem sido atribuídas.';
$string['help_user_create'] = 'Ajuda com Criação de Contas';
$string['help_user_create_help'] = 'Isso criará usuários no Moodle para cada usuário vinculado no AD Azure. Apenas usuários que não tenham contas no Moodle atualmente terão contas criadas. Novas contas serão configuradas para usar suas credenciais do Microsoft 365 para realizar o login no Moodle (usando o plugin de autenticação OpenID Connect) , e serão capazes de utilizar todos os recursos da integração Microsoft 365.';
$string['help_user_delete'] = 'Ajuda para excluir Contas';
$string['help_user_delete_help'] = 'Isso irá excluirá os usuários do Moodle se eles forem marcados como excluídos no Azure AD. Isso só funcionará se a opção de Suspender Usuário estiver habilitada.  A conta Moodle será excluida e todas as informações vinculadas serão removidas do Moodle. Tenha cuidado!';
$string['help_user_disabledsync'] = 'Ajuda com Status de sincronização desabilitado';
$string['help_user_disabledsync_help'] = 'Isso irá suspender/cancelar suspensão de usuários no Moodle se eles estiverem contas conectadas no Azure AD marcadas como impedidas/permitidas de login.';
$string['help_user_emailsync'] = 'Ajuda com Sincronização de nomes de usuário azure a emails moodle';
$string['help_user_emailsync_help'] = 'Ao habilitar esta opção, os nomes de usuário azure serão vinculados a emails moodle, ao invés de ter comportamento padrão, onde são vinculados os nomes de usuário azure com os nomes de usuário moodle.';
$string['help_user_guestsync'] = 'Ajuda na Sincronização de usuários visitantes';
$string['help_user_guestsync_help'] = 'Se habilitado, usuários visitantes no AD Azure serão sincronizados ao Moodle após a tarefa de sincronização de usuários.';
$string['help_user_match'] = 'Ajuda com Vinculação de Contas';
$string['help_user_match_help'] = 'Isso realizará uma busca em cada usuário vinculado no AD Azure e irá tentar vincula-lo com um usuário Moodle. Este vínculo é baseados nos nomes de usuário no AD Azure e no Moodle. Os vículos são case-insentitive e ignoram os locatários do Microsoft 365. Por exemplo, "BoB.SmiTh" no Moodle se vinculará como "bob.smith@example.onmicrosoft.com". Usuários vinculados terão suas contas Moodle e Microsoft 365 conectadas e serão capazes de utilizar os recursos desta integração. O métodos de autenticação de usuários não irá ser alterado a menos que a configuração abaixo seja habilitada.';
$string['help_user_matchswitchauth'] = 'Ajuda com Alternar Contas Vinculadas';
$string['help_user_matchswitchauth_help'] = 'Isso requer que a configuração "Vincular usuários do Moodle preexistentes" esteja habilitada. Quando um usuário é vinculado, habilitando esta configuração irá alternar seu método de autenticação para OpenID Connect. Após isso, eles serão capazes de realizar o login no Moodle com suas credenciais do Microsoft 365. Observação: Por favor, assegure que o plugin de autenticação OpenID Connect está habilitado, caso queira usar esta configuração.';
$string['help_user_nodelta'] = 'Ajuda com Execução de Sincronização Completa';
$string['help_user_nodelta_help'] = 'Por padrão, a sincronização de usuários, sincronizará somente as alterações do AD Azure. Marcar está opção forçará que a sincronização completa de um usuário seja executada toda vez.';
$string['help_user_photosync'] = 'Ajuda com Sincronização de Fotos de Perfil do Microsoft 365 (Cron).';
$string['help_user_photosync_help'] = 'Isso fará com que as fotos de perfil de todos os usuários do Moodle sejam sincronizadas com suas fotos de perfil do Microsoft 365.';
$string['help_user_photosynconlogin'] = 'Ajuda com Sincronização de Fotos de Perfil do Microsoft 365 (Login)';
$string['help_user_photosynconlogin_help'] = 'Isso fará com que as fotos de perfil de todos usuários do Moodle sejam sincronizadas com suas fotos de perfil do Microsoft 364 quando os usuários realizem login. Perceba que isso requer que o usuário visite uma página no Moodle que contenha um bloco Microsoft.';
$string['help_user_reenable'] = 'Ajuda para Reativar Contas';
$string['help_user_reenable_help'] = 'Isso reativará contas do Moodle suspensas se elas forem retornadas do AD Azure.';
$string['help_user_suspend'] = 'Ajuda com Contas Suspensas';
$string['help_user_suspend_help'] = 'Isso suspenderá usuários do Moodle se eles forem marcados como excluídos no AD Azure.';
$string['help_user_tzsync'] = 'Ajuda com Sincronização de fuso horário do Outlook (Cron)';
$string['help_user_tzsync_help'] = 'Isso fará com que o fuso horário de todos os usuários do Moodle seja sincronizado de acordo com suas preferências de fuso horário do Outlook.';
$string['help_user_tzsynconlogin'] = 'Ajuda com Sincronização de fuso horário do Outlook (Login)';
$string['help_user_tzsynconlogin_help'] = 'Isso fará com que o fuso horário de todos os usuários Moodle seja sincronizado de acordo com suas preferências de fuso horário do Outlook. Perceba que isso requer que o usuário visite uma página Moodle que contenha o bloco Microsoft.';
$string['help_user_update'] = 'Ajuda com Atualização de Todas as Contas';
$string['help_user_update_help'] = 'Isso irá atualizar todos os usuários no Moodle para cada usuário vinculado no AD Azure.';
$string['last_login_date'] = 'Data do último login - {$a}';
$string['list_of_absent_students'] = 'Esta é a lista de estudantes que faltaram este mês:';
$string['list_of_assignments_grades_compared'] = 'Esta é a lista de notas das suas tarefas em comparação com a média da turma:';
$string['list_of_assignments_needs_grading'] = 'Esta é a lista de tarefas que precisam ser avaliadas:';
$string['list_of_due_assignments'] = 'Esta é a lista de atribuições devidas';
$string['list_of_incomplete_assignments'] = 'Esta é a lista de tarefas que estão incompletas:';
$string['list_of_last_logged_students'] = 'Esta é a lista dos últimos estudantes logados:';
$string['list_of_late_submissions'] = 'Esta é a lista de estudantes que fizeram envios atrasados:';
$string['list_of_latest_logged_students'] = 'Esta é a lista dos últimos estudantes registrados:';
$string['list_of_recent_grades'] = 'Esta é a lista de suas notas recentes:';
$string['list_of_students_with_least_score'] = 'Esta é a lista de estudantes com menor pontuação na última tarefa:';
$string['list_of_students_with_name'] = 'Estes são os estudantes com o nome: {$a}:';
$string['multi_tenants_settings_needs_update'] = 'As configurações de múltiplos locatários precisam ser atualizadas. Por favor, vá na  <a href="{$a}">página de configuração de múltiplos locatários</a>.';
$string['never'] = 'Nunca';
$string['no_absent_users_found'] = 'Nenhum usuário ausente foi encontrado';
$string['no_assignments_for_grading_found'] = 'Nenhuma tarefa para avaliação foi encontrada';
$string['no_assignments_found'] = 'Nenhuma tarefa foi encontrada';
$string['no_due_assignments_found'] = 'Nenhuma atribuição devida foi encontrada';
$string['no_due_incomplete_assignments_found'] = 'Nenhuma atribuição devida ou imcompleta foi encontrada';
$string['no_graded_assignments_found'] = 'Nenhum tarefa avaliada foi encontrada';
$string['no_grades_found'] = 'Nenhuma nota foi encontrada';
$string['no_late_submissions_found'] = 'Nenhuma submissão tardia foi encontrada';
$string['no_user_with_name_found'] = 'Nenhum usuário com este nome foi encontrado';
$string['no_users_found'] = 'Nenhum usuário foi encontrado';
$string['notification_content_invalid_secret'] = 'Prezado administrador do site,

A licença do aplicativo do Azure usado em sua integração com o Moodle e o Microsoft 365 parece ser inválida. Isso pode ser causado pela licença ter expirado ou ter sido excluída.
Reveja a licença para garantir que a integração funcione conforme o esperado.';
$string['notification_content_secret_almost_expired'] = 'Prezado administrador do site,

A licença do aplicativo do Azure usado em sua integração com o Moodle e o Microsoft 365 expirará em {$a}.
Crie uma nova licença no portal do Azure e atualize-a na configuração de integração para evitar a interrupção da integração.';
$string['notification_content_secret_expired'] = 'Prezado administrador do site,

A licença do aplicativo do Azure usado em sua integração com o Moodle e o Microsoft 365 expirou.
Crie uma nova licença no portal do Azure e atualize-a na configuração de integração para restaurar a integração.';
$string['notification_days_days'] = '{$a} dias';
$string['notification_days_less_than_one_day'] = 'menos que 1 dia';
$string['notification_days_one_day'] = '1 dia';
$string['notification_subject_invalid_secret'] = 'Ação requerida: Liçença do aplicativo Azure encontrada';
$string['notification_subject_secret_almost_expired'] = 'Ação requerida: Licença do Aplicativo Azure expirando em breve';
$string['notification_subject_secret_expired'] = 'Ação requerida: Licença do Aplicativo Azure expirada';
$string['o365:accessbotstudentdata'] = 'Acessar dados do bot do estudante';
$string['o365:accessbotteacherdata'] = 'Acessar dados do bot do professor';
$string['o365:manageconnectionlink'] = 'Gerenciar Vínculação de Conexão';
$string['o365:manageconnectionunlink'] = 'Gerenciar Desvínculação de Conexão';
$string['o365:managegroups'] = 'Exibir links para serviços do Microsoft 365 e opções de gerenciamento no bloco Microsoft em cursos com sincronização habilitada';
$string['o365:teammember'] = 'Membro da equipe';
$string['o365:teamowner'] = 'Líder da Equipe';
$string['o365:viewgroups'] = 'Exibir links para serviços do Microsoft 365 no bloco Microsoft em cursos com sincronização habilitada';
$string['other_login'] = 'Login manual';
$string['participants_submitted_needs_grading'] = 'Participantes - {$a->participants}  &nbsp; |  &nbsp; Submetidos- {$a->submitted}  &nbsp; |  &nbsp;
                        Precisando de avaliação - {$a->needsgrading}';
$string['pending_submissions_due_date'] = 'Submissões pendentes - {$a->incomplete} / {$a->total} &nbsp; |  &nbsp; Vencimento - {$a->duedate}';
$string['personal_calendar'] = 'Pessoal';
$string['pluginname'] = 'Integração com Microsoft 365';
$string['privacy:metadata:local_o365'] = 'Plugin Local Microsoft 365';
$string['privacy:metadata:local_o365_appassign'] = 'Informações sobre atribuições de papel do aplicativo Microsoft 365';
$string['privacy:metadata:local_o365_appassign:assigned'] = 'Se o usuário foi atribuído ao aplicativo';
$string['privacy:metadata:local_o365_appassign:muserid'] = 'O ID do usuário Moodle';
$string['privacy:metadata:local_o365_appassign:photoid'] = 'O ID da foto do usuário no Microsoft 365';
$string['privacy:metadata:local_o365_appassign:photoupdated'] = 'Quando a foto de usuário do Microsoft 365 foi atualizada pela última vez';
$string['privacy:metadata:local_o365_calidmap'] = 'Informações sobre links entre eventos no calendário do Microsoft 365 e eventos no calendário do Moodle.';
$string['privacy:metadata:local_o365_calidmap:eventid'] = 'O ID do evento no Moodle';
$string['privacy:metadata:local_o365_calidmap:origin'] = 'Onde o evento se originou. Moodle ou Microsoft 365.';
$string['privacy:metadata:local_o365_calidmap:outlookeventid'] = 'O ID do evento no Outlook.';
$string['privacy:metadata:local_o365_calidmap:userid'] = 'O ID do usuário dono do evento.';
$string['privacy:metadata:local_o365_calsettings'] = 'Informações sobre as configurações de sincronização do calendário';
$string['privacy:metadata:local_o365_calsettings:o365calid'] = 'O ID do calendário no Microsoft 365';
$string['privacy:metadata:local_o365_calsettings:timecreated'] = 'A hora em que o registro foi criado.';
$string['privacy:metadata:local_o365_calsettings:user_id'] = 'O ID do usuário Moodle';
$string['privacy:metadata:local_o365_calsub'] = 'Informações sobre inscrições de sincronização entre calendários do Moodle e do Outlook';
$string['privacy:metadata:local_o365_calsub:caltype'] = 'O tipo do calendário Moodle (site, curso, usuário)';
$string['privacy:metadata:local_o365_calsub:caltypeid'] = 'O ID vinculado do calendário do Moodle';
$string['privacy:metadata:local_o365_calsub:isprimary'] = 'Se este for o calendário primário';
$string['privacy:metadata:local_o365_calsub:o365calid'] = 'O ID do calendário do Microsoft 365';
$string['privacy:metadata:local_o365_calsub:syncbehav'] = 'O comportamento da sincronização (ou seja, Moodle para Outlook ou Outlook para Moodle)';
$string['privacy:metadata:local_o365_calsub:timecreated'] = 'A hora em que a inscrição foi criada.';
$string['privacy:metadata:local_o365_calsub:user_id'] = 'O ID do usuário do Moodle para o qual a inscrição se destina';
$string['privacy:metadata:local_o365_connections'] = 'Informações sobre conexões entre usuários do Moodle e do Microsoft 365 que ainda não foram confirmadas';
$string['privacy:metadata:local_o365_connections:aadupn'] = 'O UPN do usuário do Microsoft 365.';
$string['privacy:metadata:local_o365_connections:muserid'] = 'O ID do usuário do Moodle';
$string['privacy:metadata:local_o365_connections:uselogin'] = 'Se o método de autenticação do usuário deve ser alternado quando concluído.';
$string['privacy:metadata:local_o365_matchqueue'] = 'Informações sobre a vinculação de usuário do Moodle para usuário do Microsoft 365';
$string['privacy:metadata:local_o365_matchqueue:completed'] = 'Se o registro foi processado';
$string['privacy:metadata:local_o365_matchqueue:errormessage'] = 'A mensagem de erro (se houver)';
$string['privacy:metadata:local_o365_matchqueue:musername'] = 'O nome de usuário do usuário do Moodle.';
$string['privacy:metadata:local_o365_matchqueue:o365username'] = 'O nome de usuário do usuário do Microsoft 365.';
$string['privacy:metadata:local_o365_matchqueue:openidconnect'] = 'Se o usuário deve alternar para a autenticação do OpenID Connect quando a vinculação for feita';
$string['privacy:metadata:local_o365_objects'] = 'Informações sobre a relação entre objetos do Moodle e do Microsoft 365';
$string['privacy:metadata:local_o365_objects:metadata'] = 'Quaisquer metadados associados';
$string['privacy:metadata:local_o365_objects:moodleid'] = 'A ID do objeto no Moodle';
$string['privacy:metadata:local_o365_objects:o365name'] = 'O nome legível do objeto no Microsoft 365';
$string['privacy:metadata:local_o365_objects:objectid'] = 'A ID do objeto do Microsoft 365';
$string['privacy:metadata:local_o365_objects:subtype'] = 'O subtipo de objeto.';
$string['privacy:metadata:local_o365_objects:tenant'] = 'O locatário ao qual o objeto pertence (em ambientes de multilocação)';
$string['privacy:metadata:local_o365_objects:timecreated'] = 'A hora em que o registro foi criado.';
$string['privacy:metadata:local_o365_objects:timemodified'] = 'A hora em que o registro foi modificado.';
$string['privacy:metadata:local_o365_objects:type'] = 'O tipo de objeto (grupo, usuário, curso, etc)';
$string['privacy:metadata:local_o365_token'] = 'Informações sobre tokens de API do Microsoft 365 para usuários';
$string['privacy:metadata:local_o365_token:expiry'] = 'O tempo de expiração do token.';
$string['privacy:metadata:local_o365_token:refreshtoken'] = 'O token de atualização.';
$string['privacy:metadata:local_o365_token:scope'] = 'O escopo do token.';
$string['privacy:metadata:local_o365_token:token'] = 'O token.';
$string['privacy:metadata:local_o365_token:tokenresource'] = 'O recurso de token.';
$string['privacy:metadata:local_o365_token:user_id'] = 'O ID do usuário do Moodle';
$string['question_student_assignments_compared'] = 'Como eu me saí nas minhas últimas tarefas em comparação com a classe?';
$string['question_student_assignments_due'] = 'Quais atribuições devem ser cumpridas a seguir?';
$string['question_student_latest_grades'] = 'Quais são as últimas notas que recebi?';
$string['question_teacher_absent_students'] = 'Quais estudantes se ausentaram neste mês?';
$string['question_teacher_assignments_for_grading'] = 'Quais tarefas ainda serão avaliadas?';
$string['question_teacher_assignments_incomplete_submissions'] = 'Quantas tarefas têm envios incompletos?';
$string['question_teacher_last_logged_students'] = 'Quais estudantes fizeram login no Moodle (o mais recente primeiro)?';
$string['question_teacher_late_submissions'] = 'Quais estudantes fizeram envios atrasados?';
$string['question_teacher_latest_logged_students'] = 'Quais estudantes fizeram login no Moodle (mais antigos primeiro)?';
$string['question_teacher_least_scored_in_assignment'] = 'Quais estudantes tiveram as menores notas na última tarefa?';
$string['question_teacher_student_last_logged'] = 'Quando é que o Firstname Lastname entrou no moodle?';
$string['settings_aadsync'] = 'Sincronizar usuários com o Azure AD';
$string['settings_aadsync_appassign'] = 'Atribuir usuários ao aplicativo durante a sincronização';
$string['settings_aadsync_create'] = 'Criar contas no Moodle para usuários no Azure AD';
$string['settings_aadsync_delete'] = 'Excluir contas sincronizadas anteriormente no Moodle quando elas forem excluídas do Azure AD (requer a opção "suspender" acima)';
$string['settings_aadsync_details'] = 'Quando habilitados, os usuários do Moodle e do Azure AD são sincronizados de acordo com as opções acima.<br /><br /><b>Nota: </b>O trabalho de sincronização é executado no cron do Moodle e sincroniza 1000 usuários por vez. Por padrão, isso é executado uma vez por dia à 1:00 AM no fuso horário local para o servidor. Para sincronizar grandes conjuntos de usuários mais rapidamente, você pode aumentar a frequência da tarefa <b>Sincronizar usuários com o Azure AD</b> usando a página de gerenciamento de tarefas <a href="{$a}">Tarefas agendadas.</a><br /><br />';
$string['settings_aadsync_disabledsync'] = 'Status de sincronização desabilitado';
$string['settings_aadsync_emailsync'] = 'Vincular nomes de usuário do Azure a emails do moodle em vez de nomes de usuário do moodle durante a sincronização';
$string['settings_aadsync_guestsync'] = 'Sincronizar usuários convidados';
$string['settings_aadsync_match'] = 'Vincular usuários preexistentes do Moodle com contas de mesmo nome no Azure AD';
$string['settings_aadsync_matchswitchauth'] = 'Alternar usuários vinculados para a autenticação do Microsoft 365 (OpenID Connect)';
$string['settings_aadsync_nodelta'] = 'Executar uma sincronização completa a cada execução';
$string['settings_aadsync_photosync'] = 'Sincronizar fotos de perfil do Microsoft 365 com o Moodle no cron job';
$string['settings_aadsync_photosynconlogin'] = 'Sincronizar fotos de perfil do Microsoft 365 com o Moodle no login';
$string['settings_aadsync_reenable'] = 'Reabilitar contas suspensas para usuários no Azure AD';
$string['settings_aadsync_suspend'] = 'Suspender contas sincronizadas anteriormente no Moodle quando elas forem excluídas do Azure AD';
$string['settings_aadsync_update'] = 'Atualizar todas as contas no Moodle para usuários no Azure AD';
$string['settings_aadtenant'] = 'Locatário do Azure AD';
$string['settings_aadtenant_details'] = 'Usado para identificar sua organização no Azure AD. Por exemplo: "contoso.onmicrosoft.com".';
$string['settings_aadtenant_error'] = 'Não foi possível detectar seu locatário do Azure AD.<br />Verifique se "Windows Azure Active Directory" foi adicionado ao seu aplicativo registrado do Azure AD e se a permissão "Ler dados do diretório" está habilitada.';
$string['settings_addsync_tzsync'] = 'Sincronizar o fuso horário do Outlook com o Moodle no cronjob';
$string['settings_addsync_tzsynconlogin'] = 'Sincronizar o fuso horário do Outlook com o Moodle no login';
$string['settings_adminconsent'] = 'Consentimento do administrador';
$string['settings_adminconsent_btn'] = 'Fornecer consentimento do administrador';
$string['settings_adminconsent_details'] = 'Para permitir o acesso a algumas das permissões necessárias, um administrador precisará fornecer consentimento de administrador. Clique nesse botão e faça logon com uma conta de administrador do Azure para fornecer consentimento. Isso precisará ser feito sempre que você alterar as permissões de "Admin" no Azure.';
$string['settings_azuresetup'] = 'Configuração do Azure AD';
$string['settings_azuresetup_appdatadesc'] = 'Verifica se os parâmetros corretos estão configurados no Azure AD.';
$string['settings_azuresetup_appdataheader'] = 'Registro de aplicativo do Azure AD';
$string['settings_azuresetup_appdatareplyurlcorrect'] = 'URL de resposta correta';
$string['settings_azuresetup_appdatareplyurlgeneralerror'] = 'Não foi possível verificar a URL de resposta.';
$string['settings_azuresetup_appdatareplyurlincorrect'] = 'URL de resposta incorreta';
$string['settings_azuresetup_appdatasignonurlcorrect'] = 'URL de logon correto.';
$string['settings_azuresetup_appdatasignonurlgeneralerror'] = 'Não foi possível verificar a URL de logon.';
$string['settings_azuresetup_appdatasignonurlincorrect'] = 'URL de logon incorreta';
$string['settings_azuresetup_apppermscorrect'] = 'As permissões do aplicativo estão corretas.';
$string['settings_azuresetup_checking'] = 'Verificando...';
$string['settings_azuresetup_correctval'] = 'Valor correto:';
$string['settings_azuresetup_details'] = 'Essa ferramenta verifica com o Azure AD para garantir que tudo esteja configurado corretamente. <br /><b>Observação:</b> as alterações no Azure AD podem demorar um pouco para aparecer aqui. Se você fez uma alteração no Azure AD e não a vê refletida aqui, aguarde um momento e tente novamente.';
$string['settings_azuresetup_detectedval'] = 'Valor detectado:';
$string['settings_azuresetup_errorcheck'] = 'Ocorreu um erro ao tentar verificar a instalação do Azure AD.';
$string['settings_azuresetup_missingappperms'] = 'Permissões de aplicativo ausentes:';
$string['settings_azuresetup_missingperms'] = 'Permissões delegadas ausentes:';
$string['settings_azuresetup_noinfo'] = 'Ainda não temos informações sobre a configuração do Azure AD. Clique no botão Atualizar para verificar.
';
$string['settings_azuresetup_permscorrect'] = 'As permissões delegadas estão corretas.';
$string['settings_azuresetup_strtenanterror'] = 'Use o botão dectect para definir seu locatário do Azure AD antes de atualizar a instalação do Azure AD.';
$string['settings_azuresetup_strunifiedpermerror'] = 'Ocorreu um erro ao verificar as permissões da API do Microsoft Graph.';
$string['settings_azuresetup_unifiedactive'] = 'API do Microsoft Graph ativa.';
$string['settings_azuresetup_unifieddesc'] = 'A API do Microsoft Graph permite a comunicação entre o Moodle e o Microsoft 365.';
$string['settings_azuresetup_unifiederror'] = 'Ocorreu uma verificação de erro para suporte à API do Microsoft Graph.';
$string['settings_azuresetup_unifiedheader'] = 'API Microsoft Graph';
$string['settings_azuresetup_unifiedmissing'] = 'A API do Microsoft Graph não foi encontrada neste aplicativo.';
$string['settings_azuresetup_update'] = 'Atualizar';
$string['settings_bot_app_id'] = 'ID da aplicação';
$string['settings_bot_app_password'] = 'Senha do cliente';
$string['settings_bot_app_password_desc'] = 'Vá para a seção \'Certificados e senha\' em \'Gerenciar\' nas configurações do aplicativo, clique em \'Nova senha do cliente\' e cole a senha único';
$string['settings_bot_feature_enabled'] = 'Recurso de bot habilitado';
$string['settings_bot_feature_enabled_desc'] = '<span class="warning">NOTA: Há um problema conhecido em que, se o recurso de bot estiver habilitado no aplicativo Teams, o aplicativo Moodle Teams não poderá ser provisionado para equipes de classe, a menos que a equipe seja ativada manualmente.</span>';
$string['settings_bot_sharedsecret'] = 'Senha compartilhada do Moodle';
$string['settings_bot_sharedsecret_desc'] = 'Essa senha compartilhada também será adicionada ao campo \'Senha compartilhada do Moodle\' no modelo Bot do Azure para proteger a comunicação entre o Moodle e o Bot.';
$string['settings_bot_webhook_endpoint'] = 'End pointWebhook do Bot';
$string['settings_bot_webhook_endpoint_desc'] = 'Formato: https://<moodlebotname\\>.azurewebsites.net/api/webhook';
$string['settings_check_moodle_settings'] = 'Verificar configurações do Moodle';
$string['settings_course_reset_teams'] = 'Redefinição das ações de Equipe/grupo do curso';
$string['settings_course_reset_teams_details'] = 'Ações a serem realizadas em uma Equipe ou grupo conectado a um curso quando o curso é redefinido.';
$string['settings_course_reset_teams_option_archive_only'] = 'Desconectar o curso somente  com a Equipe ou grupo<br />A Equipe ou grupo existente conectado ao curso será renomeado conforme for configurado. Se uma Equipe está conectada, a mesma será arquivada. Nenhuma Equipe ou grupo novo será criado.';
$string['settings_course_reset_teams_option_do_nothing'] = 'Não fazer nada<br />A Equipe ou grupo ainda está conectado ao curso. A desinscrição do usuário resultará na exclusão de seu vínculo com a Equipe ou grupo.';
$string['settings_course_reset_teams_option_force_archive'] = 'Desconectar o curso com a Equipe ou grupo e crie um novo<br />A Equipe ou grupo existente conectado ao curso será renomeado conforme for configurado. Se uma Equipe está conectada, ela será arquivado. Uma nova Equipe ou Grupo será criada e conectada ao curso.';
$string['settings_course_reset_teams_option_per_course'] = 'Permitir configurações por curso<br/>Isso requer que o bloco Microsoft seja adicionado ao curso. Usuários capazes de redefinir o curso podem escolher o que fazer durante a redefinição de curso no bloco.';
$string['settings_coursesync'] = 'Sincroniação do curso';
$string['settings_coursesync_courses_per_task'] = 'Cursos a sincronizar por execução de tarefa';
$string['settings_coursesync_courses_per_task_details'] = 'O número de cursos cujo status da Equipe/grupo é para ser processados em cada execução de tarefa.';
$string['settings_coursesync_delete_group_on_course_deletion'] = 'Excluir grupos do Microsoft 365 quando o curso Moodle conectado for excluído.';
$string['settings_coursesync_delete_group_on_course_deletion_details'] = 'Se habilitado, o Moodle tentará excluir o Grupo Microsoft 365 (e a Equipe vinculada) quando o curso conectado for excluído do Moodle. Note que isso não se aplica a cursos criados a partir da sincronização SDS.';
$string['settings_coursesync_delete_group_on_course_sync_disabled'] = 'Excluir Grupos Microsoft 365 quando a sincronização de curso for desabilitada';
$string['settings_coursesync_delete_group_on_course_sync_disabled_details'] = 'Se habilitado, o Moodle tentará excluir o Grupo Microsoft 365 conectado (e a Equipe vinculada) quando a sincronização do curso estiver desligada para um curso Moodle.';
$string['settings_coursesync_details'] = 'Se habilitado, Equipes serão criadas e mantidas para cursos no site Moodle (Padrão: Desabilitado). Isso criará todas Equipes que forem necessários a cada execução do cron, e adicionará todos os usuários atualmente inscritos como proprietários ou membros de uma Equipe, dependendo da verificação de capacidade.';
$string['settings_customtheme'] = 'Tema personalizado (Avançado)';
$string['settings_customtheme_desc'] = 'O tema recomendado é o "boost_o365teams". No entanto, você pode selecionar um diferente tema se você tiver um tema personalizado que está adaptado para ser utilizado na aba Teams.
<br/>
Observe que um tema personalizado definido no nível do curso ou da categoria teria precedência sobre as configurações presentes, ou seja, um curso usaria o tema do curso ou da categoria na aplicação Moodle no Teams, por padrão.';
$string['settings_debugmode'] = 'Registrar mensagens de depuração';
$string['settings_debugmode_details'] = 'Se habilitado, as informações serão registradas no log do Moodle. Essas informações podem ajudar na identificação de problemas.';
$string['settings_deploy_bot'] = 'Implatar bot no Azure';
$string['settings_detectoidc'] = 'Credenciais da aplicação';
$string['settings_detectoidc_credsinvalid'] = 'As credenciais não foram configuradas ou estão incompletas.';
$string['settings_detectoidc_credsinvalid_link'] = 'Configurar Credenciais';
$string['settings_detectoidc_credsvalid'] = 'Credenciais configuradas';
$string['settings_detectoidc_credsvalid_link'] = 'Alterar';
$string['settings_detectoidc_details'] = 'Para se comunicar com o Microsoft 365, o Moodle necessita se identificar. Estas são configuradas no plugin de autenticação "OpenID Connect".';
$string['settings_detectperms'] = 'Permissões da aplicação';
$string['settings_detectperms_details'] = 'Para uso dos recursos do plugin, as permissões corretas devem ser configuradas para a aplicação no Azure AD.';
$string['settings_detectperms_errorfix'] = 'Ocorreu um erro ao tentar corrigir as permissões. Por favor, configure-as manualmente no Azure AD.';
$string['settings_detectperms_fixperms'] = 'Corrigir permissões';
$string['settings_detectperms_fixprereq'] = 'Para corrigi-las automaticamente, seu usuário da API do Sistema deve ser um administrador, e a permissão "Acessar o diretório de sua organização" deve estar habilitada no Azure AD para a aplicação "Windows Azure Active Directory".';
$string['settings_detectperms_invalid'] = 'Verificar permissões no Azure AD';
$string['settings_detectperms_missing'] = 'Faltando:';
$string['settings_detectperms_nocreds'] = 'As credenciais da aplicação precisam ser configuradas antes. Veja a configuração acima.';
$string['settings_detectperms_nounified'] = 'A API Microsoft Graph não está presente, alguns recursos podem não funcionar.';
$string['settings_detectperms_unifiednomissing'] = 'Todas as permissões unificadas estão presentes.';
$string['settings_detectperms_update'] = 'Atualizar';
$string['settings_detectperms_valid'] = 'Permissões configuradas.';
$string['settings_download_teams_tab_app_manifest'] = 'Baixar arquivo manifest.';
$string['settings_download_teams_tab_app_manifest_reminder'] = 'Por favor, salve todas as alterações antes de baixar o manifest.';
$string['settings_enableapponlyaccess'] = 'Acesso ao aplicativo';
$string['settings_enableapponlyaccess_details'] = '<b>Recomendado</b><br />
Utilizando esse método, a integração acessa o Microsoft 365 diretamente usando "Permissões da Aplicação", que é a maneira mais fácil e recomendada de se conectar ao Microsoft 365.<br />
Ele requer que você habilite algumas permissões extras na aplicação do Azure.<br />';
$string['settings_fieldmap'] = 'Mapeamento de campo do usuário';
$string['settings_fieldmap_details'] = 'Disponível em <a href="{$a}">Plugin de autenticação OpenID Connect</a>.';
$string['settings_group_mail_alias_course'] = 'Parte do curso do alias de email do grupo';
$string['settings_group_mail_alias_prefix'] = 'Prefixo do alias de email do grupo';
$string['settings_group_mail_alias_suffix'] = 'Sufixo de alias de email de grupo';
$string['settings_header_advanced'] = 'Avançado';
$string['settings_header_moodle_app'] = 'Aplicativo Moodle Teams';
$string['settings_header_sds'] = 'Sincronizar dados escolares';
$string['settings_header_setup'] = 'Configuração';
$string['settings_header_syncsettings'] = 'Configurações de Sincronização';
$string['settings_header_teams'] = 'Configurações dos Teams';
$string['settings_header_tools'] = 'Ferramentas';
$string['settings_healthcheck'] = 'Verificação de integridade';
$string['settings_healthcheck_details'] = 'Se algo não estiver funcionando corretamente, realizar uma verificação de integridade geralmente pode identificar o problema e propor soluções.';
$string['settings_healthcheck_linktext'] = 'Realizar verificação de integridade';
$string['settings_main_name_option_full_name'] = 'Nome completo';
$string['settings_main_name_option_id'] = 'ID Moodle criado';
$string['settings_main_name_option_id_number'] = 'Número de ID';
$string['settings_main_name_option_short_name'] = 'Nome abreviado';
$string['settings_maintenance'] = 'Manutenção';
$string['settings_maintenance_details'] = 'Várias tarefas de manutenção estão disponíveis para resolução de problemas comuns.';
$string['settings_maintenance_linktext'] = 'Ver ferramentas de manutenção';
$string['settings_moodle_app_id'] = 'ID do aplicativo Moodle';
$string['settings_moodle_app_id_desc'] = 'ID do app Moodle carregado no catalogo do app Teams.<br/>
Se configurado, o Moodle tentará criar uma aba Moodle ligando ao curso Moodle no canal "Geral" da Equipe criada/conectada.';
$string['settings_moodle_app_id_desc_auto_id'] = '<br/>
O valor detectado automaticamento foi  "<span class="local_o365_settings_moodle_app_id">{$a}</span>".';
$string['settings_moodlesettingssetup'] = 'Configurar o Moodle';
$string['settings_moodlesettingssetup_details'] = 'Isso certificará que:
<ul class="local_o365_settings_teams_horizontal_spacer">
<li>Open ID está habilitado.</li>
<li>Incorporação de Quadros está habilitada.</li>
<li>Web Services estão habilitados.</li>
<li>Protocolo REST está habilitado.</li>
<li>Microsoft 365 Webservices estão habilitados.</li>
<li>O usuário autenticado tem permissão para criar um token de web services</li>
<li>O usuário autenticado tem permissão para usar o Protocolo REST.</li>
</ul>';
$string['settings_moodlesetup_checking'] = 'Verificando...';
$string['settings_notice_createtokenallowed'] = 'Permissão para criar um token de web service concedido';
$string['settings_notice_createtokenalreadyallowed'] = 'Permissão para criar um token de web service já foi concedida';
$string['settings_notice_createtokennotallowed'] = 'Houve um problema ao conceder permissão para criar um token de web service';
$string['settings_notice_o365servicealreadyenabled'] = 'Webservices do O365 já estavam habilitados';
$string['settings_notice_o365serviceenabled'] = 'Webservices do O365 habilitados com sucesso';
$string['settings_notice_oidcalreadyenabled'] = 'OpenID Connect já foi habilitado';
$string['settings_notice_oidcenabled'] = 'OpenID Connect habilitado com sucesso';
$string['settings_notice_oidcnotenabled'] = 'OpenID Connect não pôde ser habilitado';
$string['settings_notice_restalreadyenabled'] = 'Protocolo REST já foi habilitado';
$string['settings_notice_restenabled'] = 'Protocolo REST já foi habilitado';
$string['settings_notice_restnotenabled'] = 'Protocolo REST não pôde ser habilitado';
$string['settings_notice_restusageallowed'] = 'Permissão para usar o Protocolo REST concedida';
$string['settings_notice_restusagealreadyallowed'] = 'Permissão para usar o Protocolo REST já foi concedida';
$string['settings_notice_restusagenotallowed'] = 'Houve um problema ao conceder permissão para usar o Protocolo REST';
$string['settings_notice_webservicesframealreadyenabled'] = 'Webservices já estavam habilitados e incorporação de quadros também está permitida';
$string['settings_notice_webservicesframeenabled'] = 'Webservices habilitados com sucesso e incorporação de quadros também está permitida agora';
$string['settings_o365china'] = 'Microsoft 365 para a China';
$string['settings_o365china_details'] = 'Marque se estiver usando o Microsoft 365 para a China.';
$string['settings_odburl'] = 'OneDrive para URL Business';
$string['settings_odburl_details'] = 'A URL usada para acessar o OneDrive for Business. Isso geralmente pode ser determinado pelo locatário do Azure AD. Por exemplo, se o locatário do Azure AD for "contoso.onmicrosoft.com", isso provavelmente será "contoso-my.sharepoint.com". Digite apenas o nome de domínio, não inclua http:// ou https://';
$string['settings_odburl_error'] = 'Não foi possível determinar sua URL do OneDrive for Business.<br />Verifique se "Microsoft 365 SharePoint Online" foi adicionado a sua aplicação registrada no Azure AD.';
$string['settings_odburl_error_graph'] = 'Não foi possível determinar o URL do OneDrive for Business, insira manualmente. Isso geralmente pode ser determinado usando a URL que você usa para acessar o OneDrive.';
$string['settings_options_usersync'] = 'Sincronização de Usuário';
$string['settings_options_usersync_desc'] = 'As seguintes configurações controlam a sincronização de usuário entre Microsoft 365 e Moodle.';
$string['settings_photoexpire'] = 'Tempo de atualização da foto do perfil';
$string['settings_photoexpire_details'] = 'O número de horas a esperar antes da atualização das fotos de perfil. Mais tempo pode melhorar a performance.';
$string['settings_publish_manifest_instruction'] = '<a href="https://docs.microsoft.com/en-us/microsoftteams/platform/concepts/apps/apps-upload" target="_blank">Clique aqui</a> para saber como publicar o arquivo manifest do app Moodle baixado para todos os usuários do Teams.';
$string['settings_reset_group_name_prefix'] = 'Redefinir prefixo do nome do grupo';
$string['settings_reset_group_name_prefix_details'] = 'Ao redefinir um curso conectado a um grupo, o nome do grupo existente será prefixado com isso.';
$string['settings_reset_team_name_prefix'] = 'Redefinir prefixo do nome da Equipe';
$string['settings_reset_team_name_prefix_details'] = 'Ao redefinir um curso conectado a uma Equipe, o nome da Equipe conectada existente será prefixada com isso.';
$string['settings_sds_coursecreation'] = 'Criação de cursos';
$string['settings_sds_coursecreation_desc'] = 'Essas opções controlam a criação de cursos no Moodle com base em informações no SDS.';
$string['settings_sds_coursecreation_enabled'] = 'Escolas sincronizadas';
$string['settings_sds_coursecreation_enabled_desc'] = 'Criar cursos para estas escolas.';
$string['settings_sds_enrolment_enabled'] = 'Inscrever usuários';
$string['settings_sds_enrolment_enabled_desc'] = 'Inscrever professores e membros da turma SDS em cursos do Moodle criados a partir das aulas.<br/>
Observação: Para sincronizar as alterações do papel de professor/membro da classe SDS com as classes do Moodle, <b>a opção Sincronização de inscrições avançadas com classes SDS</b> deve ser habilitada e as configurações de <b>papel de professor</b> e <b>de membro</b> devem ser configuradas.';
$string['settings_sds_enrolment_student_role'] = 'Papel de membro';
$string['settings_sds_enrolment_student_role_desc'] = 'Se a opção "Inscrever usuários" estiver habilitada, os estudantes da turma SDS serão inscritos no curso conectado ao Moodle com esse papel.';
$string['settings_sds_enrolment_teacher_role'] = 'Papel de professor';
$string['settings_sds_enrolment_teacher_role_desc'] = 'Se a opção "Inscrever usuários" estiver habilitada, os professores da turma SDS serão inscritos no curso conectado do Moodle com esse papel.';
$string['settings_sds_get_schools_error'] = '<div class="alert alert-info error">Falha ao obter escolas SDS. Verifique se o aplicativo do Azure tem a permissão necessária.</div>';
$string['settings_sds_intro_desc'] = 'A ferramenta de sincronização de dados escolares ("SDS") permite sincronizar informações importadas para o Azure AD de sistemas SIS externos para o Moodle. <a href="https://sis.microsoft.com/" target="_blank">Saiba mais</a><br/>
<br/>
O recurso de sincronização SDS requer o método de conexão "<b>Acesso ao aplicativo"</b> para funcionar.<br/>
Verifique também se o aplicativo do Azure usado para a integração tem permissões de aplicativo<b> EduRoster.Read.All</b> e <b>Member.Read.Hidden</b> do Microsoft Graph, que não são adicionadas automaticamente pela configuração padrão. O consentimento do administrador também precisa ser concedido para eles.<br/>
<br/>
Por padrão, o processo de sincronização de dados da escola acontece no cron do Moodle, às 3h (horário local) do servidor. Para alterar esse cronograma, visite a página <a href="{$a}">Gerenciamento de tarefas agendadas.</a><br /><br />';
$string['settings_sds_intro_previewwarning'] = '<div class="alert"><b>Este é uma prévia do recurso</b><br />Os recursos em prévia podem não funcionar como pretendido ou podem quebrar sem aviso. Por favor, prossiga com cuidado.</div>';
$string['settings_sds_noschools'] = '<div class="alert alert-info">Você não tem nenhuma escola disponível na sincronização de dados da escola.</div>';
$string['settings_sds_profilesync'] = 'Sincronizar dados de perfil da escola';
$string['settings_sds_profilesync_desc'] = 'Selecione a escola SDS a partir da qual o Moodle sincroniza dados de perfil específicos do SDS.<br/>
Observação: A sincronização dos campos SDS só acontecerá ao executar a tarefa agendada "Sincronizar com SDS" e não acontecerá ao executar a tarefa agendada "Sincronizar usuários com o Azure AD", nem quando o usuário fizer login.<br/>
Observe que há um problema conhecido na API do Microsoft Graph usada por esse recurso, onde determinados campos de perfil de estudante e professor não são retornados, portanto, não podem ser sincronizados mesmo quando configurados.';
$string['settings_sds_profilesync_disabled'] = 'Desabilitado';
$string['settings_sds_profilesync_header'] = 'Sincronização de Dados do Perfil';
$string['settings_sds_profilesync_header_desc'] = 'Essas opções controlam a sincronização de dados de perfil entre dados SDS e Moodle.';
$string['settings_sds_school_disabled_action'] = 'Ação de sincronização escolar desativada';
$string['settings_sds_school_disabled_action_desc'] = 'Ação para os cursos do Moodle já conectados quando a sincronização está desativada em uma escola SDS.';
$string['settings_sds_school_disabled_action_disconnect'] = 'Desconectar o curso Moodle com a Equipe';
$string['settings_sds_school_disabled_action_keep_connected'] = 'Manter o curso Moodle conectado à Equipe';
$string['settings_sds_sync_enrolment_to_sds'] = 'As inscrições avançadas são sincronizadas com as classes SDS';
$string['settings_sds_sync_enrolment_to_sds_desc'] = 'Essa opção exige que a opção <b>Inscrever usuários</b> esteja habilitada para funcionar.<br/>
Se essa configuração estiver habilitada, a sincronização de classe SDS fará o seguinte:
<ul>
<li>As mudanças no status de propriedade/vinculação da classe SDS serão sincronizadas com o curso do Moodle e refletidas nas mudanças de função do usuário do Moodle.</li>
<li>As alterações de inscrição de usuários, como nova inscrição e desinscrição, que são feitas no curso do Moodle conectado às aulas de SDS serão sincronizadas com as aulas de SDS. O status de propriedade/vinculação do usuário dependerá dos recursos "local/o365:teamowner" e "local/o365:teammember" no contexto do curso.</li>
</ul>';
$string['settings_sds_teams_enabled'] = 'Criação de Teams habilitada';
$string['settings_sds_teams_enabled_desc'] = 'Isso controla se os cursos do Moodle criados a partir da sincronização de classes SDS são conectados automaticamente ao Microsoft Teams da classe SDS. Isso deve ser habilitado somente se o Teams for criado automaticamente a partir das classes SDS.';
$string['settings_secthead_advanced'] = 'Configurações Avançadas';
$string['settings_secthead_advanced_desc'] = 'Essas configurações controlam outros recursos do conjunto de plugins. Tenha cuidado! Estas configurações podem causar efeitos não intencionais.';
$string['settings_secthead_coursesync'] = 'Sincronização do curso';
$string['settings_secthead_coursesync_desc'] = 'Essas configurações a seguir controlam a sincronização do curso entre o Moodle e o Microsoft Teams.';
$string['settings_secthead_team_group_name'] = 'Nomes das equipes/grupos';
$string['settings_secthead_team_group_name_desc'] = 'Se um curso estiver configurado para ser sincronizado, o nome da equipe e do grupo serão construídos da seguinte maneira.<br/>
<ul>
<li>O alias de email do grupo e os nomes de exibição da Equipe podem ser definidos.</li>
O grupo do <li>Microsoft 365 será criado primeiro usando o grupo mailNickname e o nome de exibição da Equipe configurados primeiro, e uma Equipe será criada a partir do grupo.</li>
<li>Se as políticas de nomenclatura de grupo do Azure AD forem usadas, os grupos não serão criados se o nome de exibição criado de acordo com a configuração não corresponder às políticas.</li>
<li>As alterações feitas aqui afetarão apenas a criação futura de Equipes, e não as existentes.</li>
<li>Todos os espaços serão removidos do alias de email do grupo.</li>
<li>Somente letras maiúsculas e minúsculas, números - e _ são permitidos no alias de email do grupo.</li>
<li>O alias de email de grupo, incluindo prefixo e sufixo, não pode exceder 64 caracteres.</li>
<li>O alias de email do grupo precisa ser exclusivo, caso contrário, um número aleatório de 4 dígitos será anexado para garantir a exclusividade.</li>
</ul>';
$string['settings_serviceresourceabstract_detect'] = 'Detectar';
$string['settings_serviceresourceabstract_detecting'] = 'Detectando...';
$string['settings_serviceresourceabstract_empty'] = 'Insira um valor ou clique em "Detectar" para tentar detectar o valor correto.';
$string['settings_serviceresourceabstract_error'] = 'Ocorreu um erro ao detectar a configuração. Por favor, defina manualmente.';
$string['settings_serviceresourceabstract_invalid'] = 'Esse valor não parece ser utilizável.';
$string['settings_serviceresourceabstract_nocreds'] = 'Defina as credenciais do aplicativo primeiro.';
$string['settings_serviceresourceabstract_noperms'] = 'Tivemos um problema ao detectar essa configuração.<br />Verifique se "Windows Azure Active Directory" foi adicionado ao seu aplicativo registrado do Azure AD e se a permissão "Ler dados do diretório" está habilitada.';
$string['settings_serviceresourceabstract_valid'] = '{$a} é usável.';
$string['settings_set_moodle_app_id_instruction'] = 'Para localizar o ID do aplicativo Moodle manualmente, siga estas etapas:
<ol>
<li>Carregue o arquivo de manifesto baixado no catálogo de aplicativos do Teams do seu locatário.</li>
<li>No catálogo de aplicativos do Teams, localize o aplicativo.</li>
<li>Clique no ícone de opção do aplicativo, que está localizado no canto superior direito da imagem do aplicativo.</li>
<li>Clique em "Copiar link".</li>
<li>Em um editor de texto, cole o conteúdo copiado. Ele deve conter uma URL como https://teams.microsoft.com/l/app/00112233-4455-6677-8899-aabbccddeeff.</li>
</ol>
A última parte da URL, ou seja, <span class="local_o365_settings_moodle_app_id">00112233-4455-6677-8899-aabbccddeeff,</span> é o ID do aplicativo.';
$string['settings_setup_step1'] = 'Etapa 1/3: Registrar o Moodle com o Azure AD';
$string['settings_setup_step1_continue'] = '<b>Depois de inserir sua ID e Chave do Aplicativo, clique em "Salvar alterações" na parte inferior da página para continuar.</b><br /><br /><br /><br /><br />';
$string['settings_setup_step1_credentials_end'] = 'Se você não conseguir configurar o aplicativo AzureAD por meio do PowerShell, <a href="https://aka.ms/MoodleTeamsManualSetup" target="_blank">clique aqui</a> para obter instruções de configuração manual.';
$string['settings_setup_step1_desc'] = 'Registre um novo Aplicativo AzureAD para seu locatário do Microsoft 365 usando o Windows PowerShell:

<a href="{$a}/local/o365/scripts/Moodle-AzureAD-Powershell.zip" class="btn btn-primary" target="_blank">Baixar script do Windows PowerShell</a>

<p style="margin-top:10px"><a href="https://aka.ms/MoodleTeamsPowerShellReadMe" target="_blank">Clique aqui</a> para ler as instruções sobre como executar o script.</p>
<p>Quando solicitado, use o seguinte link como URL do Moodle:</p><h5><b>{$a}</b></h5>';
$string['settings_setup_step1_existing_settings'] = '<h5>Configurações existentes</h5>';
$string['settings_setup_step1clientcreds'] = '<br />Uma vez que o script seja executado com êxito, copie o ID do Aplicativo e a Senha retornados pelo script na página de configuração do plugin de autenticação <a href="{$a}">OpenID Connect</a>.';
$string['settings_setup_step2'] = 'Etapa 2/3: Escolha o método de conexão';
$string['settings_setup_step2_continue'] = '<b>Escolha um método de conexão e clique em "Salvar alterações" para continuar.</b><br /><br /><br /><br /><br />';
$string['settings_setup_step2_desc'] = 'Esta seção permite que você escolha como o pacote de integração do Microsoft 365 se conecta aos serviços do Microsoft 365.<br />
Historicamente, a integração pode se conectar aos serviços do Microsoft 365 usando o "Acesso ao Aplicativo", ou o nome de um usuário que você tenha dedicado como o usuário do "sistema".<br />
<b>A partir de março de 2022, apenas o "Acesso ao Aplicativo" é suportado. Todas as novas funções futuras só serão implementadas e testadas usando o método de conexão "Acesso ao Aplicativo".</b>';
$string['settings_setup_step2_desc_additional'] = '<br /><br />
<span class="error">Você está usando o método de conexão "Usuário da API do Sistema", que não é suportado desde março de 2022. Altere para o método de conexão "Acesso ao aplicativo".</span>';
$string['settings_setup_step3'] = 'Passo 3/3: Consentimento do administrador &amp; informações adicionais';
$string['settings_setup_step3_desc'] = 'Esta última etapa permite que você dê consentimento de administrador para usar algumas permissões do Azure e reúne algumas informações adicionais sobre seu ambiente do Microsoft 365.<br /><br />';
$string['settings_setup_step4'] = 'Verificar configuração';
$string['settings_setup_step4_desc'] = 'A instalação está concluída. Clique no botão "Atualizar" abaixo para verificar sua configuração.';
$string['settings_suspend_delete_running_time'] = 'Tempo de execução de suspensão/exclusão do usuário';
$string['settings_suspend_delete_running_time_desc'] = 'Se a opção estiver habilitada, o recurso de suspensão/exclusão da função de sincronização do usuário será executado uma vez por dia, no horário configurado no fuso horário padrão da instância do Moodle.';
$string['settings_switchauthminupnsplit0'] = 'Comprimento mínimo inexato de nome de usuário para alternar para o Microsoft 365';
$string['settings_switchauthminupnsplit0_details'] = 'Se você habilitar a configuração "Alternar usuários vinculados para autenticação do Microsoft 365", isso definirá o comprimento mínimo para nomes de usuário sem um locatário (a parte @example.onmicrosoft.com) que será alternada. Isso ajuda a evitar a troca de contas com nomes genéricos, como "admin", que não são necessariamente os mesmos no Moodle e no Azure AD.
';
$string['settings_team_name_course'] = 'Parte do curso do nome do Teams';
$string['settings_team_name_prefix'] = 'Prefixo do nome das Equipes';
$string['settings_team_name_sample'] = 'Suponha que um curso tenha:
<ul>
<li>Nome completo: <b>Exemplo de curso</b></li>
<li>Nome abreviado: <b>amostra 15</b></li>
<li>ID criado pelo Moodle: <b>2</b></li>
<li>Número de identificação: <b>ID de amostra 15</b></li>
</ul>
Sua configuração atual criará um grupo usando o alias de email "{$a-><b>mailalias</b>}" e a Equipe usando o nome "<b>{$a->teamname}</b>".<br/>
Clique no botão "Salvar alterações" abaixo para ver como suas configurações mudarão isso.';
$string['settings_team_name_suffix'] = 'Sufixo do nome das Equipes';
$string['settings_team_name_sync'] = 'Atualizar o nome das Equipes na atualização do curso';
$string['settings_team_name_sync_desc'] = 'Se habilitado, quando o curso do Moodle for atualizado, o nome da Equipe será atualizado de acordo com as configurações de nome mais recentes do Teams.';
$string['settings_teamconnections'] = 'Conexões da Equipe';
$string['settings_teamconnections_details'] = 'Revise e gerencie conexões entre o curso Moodle e o Microsoft Teams.';
$string['settings_teamconnections_linktext'] = 'Gerenciar conexões de Equipe';
$string['settings_teams_additional_instructions'] = '<p class="local_o365_settings_teams_horizontal_spacer">
Vá para a seção <a href="https://aka.ms/MoodleBotRegistration" target="_blank">Registros de aplicativo do Portal do Azure</a> e registre um novo aplicativo. Digite o ID do aplicativo e a senha do cliente abaixo:
</p>';
$string['settings_teams_banner_1'] = 'O aplicativo Moodle para <a href="https://aka.ms/MoodleLearnTeams" target="_blank">Microsoft Teams</a> permite que você acesse e colabore facilmente em torno de seus cursos do Moodle no Teams. O aplicativo Moodle também consiste em um bot Moodle Assistant, que enviará notificações do Moodle para estudantes e professores e responderá a perguntas sobre seus cursos, tarefas, notas e estudantes - diretamente no Teams!';
$string['settings_teams_banner_2'] = 'Para provisionar o Bot do Assistente do Moodle para seu locatário do Microsoft 365, você precisa implantá-lo em <a href="https://aka.ms/MoodleLearnAzure" target="_blank">Microsoft Azure</a>. Se você não tiver uma assinatura ativa do Azure, poderá <a href="https://aka.ms/MoodleTeamsAzureFree" target="_blank">obter uma gratuitamente</a> hoje!';
$string['settings_teams_deploy_bot_1'] = 'Depois de concluir as etapas acima e ter uma assinatura ativa do Azure, clique aqui para implantar o bot:';
$string['settings_teams_deploy_bot_2'] = 'Precisa de ajuda?';
$string['settings_teams_download_json'] = 'Baixar JSON';
$string['settings_teams_download_json_desc'] = 'Depois de inserir o ID do cliente e a senha acima, clique no botão abaixo para baixar o arquivo JSON para implantação.';
$string['settings_teams_moodle_app_external_id'] = 'ID do aplicativo Microsoft para o aplicativo Moodle Teams';
$string['settings_teams_moodle_app_external_id_desc'] = 'Isso deve ser definido como o valor padrão, a menos que vários aplicativos do Moodle Teams sejam necessários em seu locatário para se conectar a diferentes sites Moodle.';
$string['settings_teams_moodle_app_short_name'] = 'Nome do aplicativo Teams';
$string['settings_teams_moodle_app_short_name_desc'] = 'Isso pode ser definido como padrão, a menos que vários aplicativos do Moodle Teams sejam necessários em seu locatário para se conectar a diferentes sites Moodle.';
$string['settings_teams_moodle_setup_heading'] = '<h4 class="local_o365_settings_teams_h4_spacer">Configurar aplicativo Moodle para Microsoft Teams</h4>';
$string['settings_tools_tenants'] = 'Locatários';
$string['settings_tools_tenants_details'] = 'Gerencie o acesso a locatários adicionais do Microsoft 365.';
$string['settings_tools_tenants_linktext'] = 'Configurar locatários adicionais';
$string['settings_userconnections'] = 'Conexões de usuários';
$string['settings_userconnections_details'] = 'Revise e gerencie conexões entre usuários do Moodle e do Microsoft 365.';
$string['settings_userconnections_linktext'] = 'Gerenciar conexões de usuário';
$string['settings_usermatch'] = 'Vinculação de usuários';
$string['settings_usermatch_details'] = 'Esta ferramenta permite que você vincule usuários do Moodle com usuários do Microsoft 365 com base em um arquivo de dados personalizado carregado.';
$string['settings_usersynccreationrestriction'] = 'Restrição de criação de usuários';
$string['settings_usersynccreationrestriction_details'] = 'Se habilitado, somente os usuários que tiverem o valor especificado para o campo especificado do Azure AD serão criados durante a sincronização do usuário.';
$string['settings_usersynccreationrestriction_fieldval'] = 'Valor do campo';
$string['settings_usersynccreationrestriction_o365group'] = 'Vinculação de grupo do Microsoft 365';
$string['settings_usersynccreationrestriction_regex'] = 'O Valor é uma expressão regular';
$string['sorry_do_not_understand'] = 'Desculpe, não entendo';
$string['spsite_group_contributors_desc'] = 'Todos os usuários que têm acesso para gerenciar arquivos para o curso {$a}';
$string['sso_login'] = 'Realizar login no Microsoft 365';
$string['tab_moodle'] = 'Moodle';
$string['tab_name'] = 'Nome da guia';
$string['task_bot'] = 'Tarefa de mensagem de bot';
$string['task_calendarsyncin'] = 'Sincronizar eventos do Microsoft 365 com o Moodle';
$string['task_coursesync'] = 'Sincronizar cursos do Moodle com o Microsoft Teams';
$string['task_notifysecretexpiry'] = 'Notificar o administrador do site sobre a expiração da senha do aplicativo do Azure';
$string['task_processmatchqueue'] = 'Fila de vinculação de processos';
$string['task_processmatchqueue_err_museralreadymatched'] = 'O usuário do Moodle já está vinculado a um usuário do Microsoft 365.';
$string['task_processmatchqueue_err_museralreadyo365'] = 'O usuário do Moodle já está conectado ao Microsoft 365.';
$string['task_processmatchqueue_err_nomuser'] = 'Nenhum usuário do Moodle foi encontrado com este nome de usuário.';
$string['task_processmatchqueue_err_noo365user'] = 'Nenhum usuário do Microsoft 365 encontrado com esse nome de usuário.';
$string['task_processmatchqueue_err_o365useralreadyconnected'] = 'O usuário do Microsoft 365 já está conectado a um usuário do Moodle.';
$string['task_processmatchqueue_err_o365useralreadymatched'] = 'O usuário do Microsoft 365 já tem vínculo com um usuário do Moodle.';
$string['task_refreshsystemrefreshtoken'] = 'Atualizar token de atualização do usuário da API do sistema';
$string['task_sds_sync'] = 'Sincronizar com SDS';
$string['task_syncusers'] = 'Sincronizar usuários com o Azure AD';
$string['teams_no_course'] = 'Você não tem nenhum curso para adicionar.';
$string['ucp_calsync_availcal'] = 'Calendários Disponíveis do Moodle';
$string['ucp_calsync_desc'] = 'Os calendários verificados do Moodle serão sincronizados com o calendário do Outlook.';
$string['ucp_calsync_title'] = 'Configurações de sincronização do Calendário do Outlook';
$string['ucp_connection_aadlogin'] = 'Use suas credenciais do Microsoft 365 para fazer login no Moodle<br />';
$string['ucp_connection_aadlogin_active'] = 'Você está usando a conta do Microsoft 365 "{$a}" para fazer login no Moodle.';
$string['ucp_connection_aadlogin_desc_authcode'] = 'Em vez de inserir um nome de usuário e senha na página de login do Moodle, você verá uma seção que diz "Faça login usando sua conta em {$a}" na página de login. Você clicará no link e será redirecionado para o Microsoft 365 para fazer login. Depois de ter iniciado sessão no Microsoft 365 com êxito, você será redirecionado de volta ao Moodle e terá iniciado sessão na sua conta.';
$string['ucp_connection_aadlogin_desc_rocreds'] = 'Em vez de seu nome de usuário e senha do Moodle, você digitará seu nome de usuário e senha do Microsoft 365 na página de login do Moodle.';
$string['ucp_connection_aadlogin_start'] = 'Comece a usar o Microsoft 365 para fazer login no Moodle.';
$string['ucp_connection_aadlogin_stop'] = 'Pare de usar o Microsoft 365 para fazer login no Moodle.';
$string['ucp_connection_desc'] = 'Aqui você pode configurar como você irá se conectar ao Microsoft 365. Para usar os recursos do Microsoft 365, você deve estar conectado a uma conta do Microsoft 365. Isso pode ser feito conforme descrito abaixo.';
$string['ucp_connection_disconnected'] = 'Você não está conectado ao Microsoft 365.';
$string['ucp_connection_linked'] = 'Vincule suas contas do Moodle e do Microsoft 365';
$string['ucp_connection_linked_active'] = 'Você está vinculado à conta do Microsoft 365 "{$a}".';
$string['ucp_connection_linked_desc'] = 'Vincular suas contas do Moodle e do Microsoft 365 permite que você use os recursos do Microsoft 365 Moodle sem alterar como você faz login no Moodle. <br />Clicando no link abaixo, enviará você para realizar um login único no Microsoft 365, após isso você será retornado aqui. Você será capaz de usar todos os recursos do Microsoft 365 sem fazer quaisquer outras alterações em sua conta Moodle - você fará login no Moodle como sempre fez.';
$string['ucp_connection_linked_migrate'] = 'Mude para a conta vinculada.';
$string['ucp_connection_linked_start'] = 'Vincule sua conta do Moodle a uma conta do Microsoft 365.';
$string['ucp_connection_linked_stop'] = 'Desvincule sua conta do Moodle da conta do Microsoft 365.';
$string['ucp_connection_options'] = 'Opções de conexão:';
$string['ucp_connection_start'] = 'Conectar-se ao Microsoft 365';
$string['ucp_connection_status'] = 'A conexão do Microsoft 365 é:';
$string['ucp_connection_stop'] = 'Desconectar do Microsoft 365';
$string['ucp_connectionstatus'] = 'Status da conexão';
$string['ucp_features'] = 'Recursos do Microsoft 365';
$string['ucp_features_intro'] = 'Abaixo está uma lista dos recursos que você pode usar para melhorar o Moodle com o Microsoft 365.';
$string['ucp_features_intro_notconnected'] = 'Alguns deles podem não estar disponíveis até que você esteja conectado ao Microsoft 365.';
$string['ucp_general_intro'] = 'Aqui você pode gerenciar sua conexão com o Microsoft 365.';
$string['ucp_general_intro_notconnected_nopermissions'] = 'Para se conectar ao Microsoft 365, você precisará entrar em contato com o administrador do site.';
$string['ucp_index_aadlogin_active'] = 'Você está usando o Microsoft 365 para fazer login no Moodle';
$string['ucp_index_aadlogin_desc'] = 'Você pode usar suas credenciais do Microsoft 365 para fazer login no Moodle.';
$string['ucp_index_aadlogin_inactive'] = 'No momento, você não está usando o Microsoft 365 para fazer login no Moodle';
$string['ucp_index_aadlogin_title'] = 'Login do Microsoft 365';
$string['ucp_index_calendar_desc'] = 'Aqui você pode configurar a sincronização entre seus calendários do Moodle e do Outlook. Você pode exportar eventos de calendário do Moodle para o Outlook e trazer eventos do Outlook para o Moodle.';
$string['ucp_index_calendar_title'] = 'Configurações de sincronização do Calendário do Outlook';
$string['ucp_index_connection_desc'] = 'Configure como você se conectar ao Microsoft 365.';
$string['ucp_index_connection_title'] = 'Configurações de conexão do Microsoft 365';
$string['ucp_index_connectionstatus_connect'] = 'Clique aqui para se conectar.';
$string['ucp_index_connectionstatus_connected'] = 'Você está conectado ao Microsoft 365';
$string['ucp_index_connectionstatus_disconnect'] = 'Desconectar';
$string['ucp_index_connectionstatus_login'] = 'Clique aqui para fazer login';
$string['ucp_index_connectionstatus_manage'] = 'Gerenciar conexão';
$string['ucp_index_connectionstatus_matched'] = 'Você foi vinculado com o usuário do Microsoft 365 <small>"{$a}".</small> Para concluir essa conexão, clique no link abaixo e faça login no Microsoft 365.';
$string['ucp_index_connectionstatus_notconnected'] = 'Você não está conectado ao Microsoft 365';
$string['ucp_index_connectionstatus_reconnect'] = 'Atualizar conexão';
$string['ucp_index_connectionstatus_title'] = 'Status da conexão';
$string['ucp_index_connectionstatus_usinglinked'] = 'Você está vinculado a uma conta do Microsoft 365.';
$string['ucp_index_connectionstatus_usinglogin'] = 'No momento, você está usando o Microsoft 365 para fazer logon no Moodle.';
$string['ucp_index_onenote_desc'] = 'A integração com o OneNote permite que você use o Microsoft 365 OneNote com o Moodle. Você pode concluir tarefas usando o OneNote e fazer anotações facilmente para seus cursos.';
$string['ucp_index_onenote_title'] = 'OneNote';
$string['ucp_notconnected'] = 'Conecte-se ao Microsoft 365 antes de visitar aqui.';
$string['ucp_o365accountconnected'] = 'Essa conta do Microsoft 365 já está conectada a outra conta do Moodle.';
$string['ucp_options'] = 'Opções';
$string['ucp_status_disabled'] = 'Não conectado';
$string['ucp_status_enabled'] = 'Ativo';
$string['ucp_syncdir_both'] = 'Atualizar o Outlook e o Moodle';
$string['ucp_syncdir_in'] = 'Do Outlook para o Moodle';
$string['ucp_syncdir_out'] = 'Do Moodle para o Outlook';
$string['ucp_syncdir_title'] = 'Comportamento de sincronização:';
$string['ucp_syncwith_title'] = 'Nome do calendário do Outlook para sincronizar com:';
$string['ucp_title'] = 'Painel de Controle Microsoft 365 / Moodle';
$string['webservices_error_assignnotfound'] = 'Não foi possível encontrar o registro de atribuição do módulo recebido.';
$string['webservices_error_couldnotsavegrade'] = 'Não foi possível salvar a nota.';
$string['webservices_error_invalidassignment'] = 'O ID de atribuição recebido não pode ser usado com essa função de webservices.';
$string['webservices_error_modulenotfound'] = 'Não foi possível encontrar o ID do módulo recebido.';
$string['webservices_error_sectionnotfound'] = 'A seção do curso não pôde ser encontrada.';
$string['your_grade'] = 'Sua nota - {$a}';
$string['your_grade_class_grade'] = 'Sua nota - {$a->usergrade} &nbsp; |  &nbsp; Nota média da turma - {$a->classgrade}';
