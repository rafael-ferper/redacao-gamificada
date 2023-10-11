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
 * Strings for component 'auth_oidc', language 'pt_br', version '4.1'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['application_updated'] = 'A configuração do OpenID Connect foi atualizada.';
$string['application_updated_azure'] = 'A configuração do OpenID Connect foi atualizada.<br/>
<span class="warning" style="color: red;"> O administrador do Azure precisará <b>Fornecer as permissões de administrador</b> e <b>Verificar as configurações</b> novamente se o "Tipo de provedor de identidade (IdP)" ou o "Método de autenticação do cliente" estão com as configurações atualizadas na <a href="{$a}" target="_blank">Página de configuração de integração do Microsoft 365</a> .</span>';
$string['auth_method_certificate'] = 'Certificado';
$string['auth_method_secret'] = 'Segredo';
$string['auth_oidcdescription'] = 'O plugin de autenticação OpenID Connect fornece funcionalidade de login único usando Idp configurável.';
$string['authendpoint'] = 'Endpoint de autorização';
$string['authendpoint_help'] = 'O URI do endpoint de autorização do seu Idp que vai ser usado.<br>
Note que, o site deve ser configurado para permitir o acesso de usuários de outros clientes, o endpoint de autorização específico do cliente não pode ser utilizado.';
$string['authentication_and_endpoints_saved'] = 'Configurações de autenticação e endpoists atualizadas';
$string['cfg_authenticationlink_desc'] = '<a href="{$a}" target="_blank">Link para configurações de Idp e autenticação</a>';
$string['cfg_autoappend_desc'] = 'Anexe uma string automaticamente para que ao fazer login o usuário utilize somente o método de autenticação "Credenciais e senha do usuário". Isso é útil quando seu idP requer um domínio comum, com isso os usuários precisam informar somente o usuário. Por exemplo, se o usuário no OpenID Connect for "jose.maria@exemplo.com" e for colocado como domínio "@exemplo.com", o usuário pode digitar somente "jose.maria" para realizar o login.<br /><b>Nota:</b> Caso existam nomes de usuário conflitantes - ou seja, dois usuário do Moodle com o mesmo nome, a prioridade do plugin de autenticação é usada para determinar a prioridade do usuário.';
$string['cfg_autoappend_key'] = 'Anexar automaticamente';
$string['cfg_customicon_desc'] = 'Se você preferir utilizar seu próprio ícone, faça o upload aqui. Com isso, qualquer ícone escolhido acima será substituído.<br /><br /><b>Observações sobre o uso de ícones personalizados:</b><ul><li>Esta imagem <b>não</b> será redimensionada na página de login, por isso, recomendamos o upload de uma imagem de até 35x35 pixels.</li><li>Se você carregou um ícone personalizado e deseja voltar para um ícone padrão, clique no ícone personalizado na caixa acima, clique em "Excluir" e, em seguida, clique em "OK" e em "Salvar alterações" na parte inferior desse formulário. O ícone padrão que foi selecionado irá aparecer na página de login do Moodle.</li></ul>';
$string['cfg_customicon_key'] = 'Ícone personalizado';
$string['cfg_debugmode_desc'] = 'Se habilitado, informações que podem ajudar na identificação de problemas serão registradas no log do Moodle.';
$string['cfg_debugmode_key'] = 'Gravar mensagem de depuração';
$string['cfg_domainhint_desc'] = 'Ao utilizar o fluxo de login <b>Código de autorização</b>, passe esse valor como o parâmetro "domain_hint". O "domain_hint" é usado por alguns OpenID Connect idP para tornar o processo de login mais fácil para os usuários. Verifique se seu provedor fornece suporte para esse parâmetro.';
$string['cfg_domainhint_key'] = 'Dica de domínio';
$string['cfg_err_invalidauthendpoint'] = 'Endpoint de autorização inválido';
$string['cfg_err_invalidclientid'] = 'ID do cliente inválido';
$string['cfg_err_invalidclientsecret'] = 'Senha do cliente inválida';
$string['cfg_err_invalidtokenendpoint'] = 'Token do Endpoint inválido';
$string['cfg_field_mapping_desc'] = 'Os dados do perfil do usuário podem ser mapeados do OpenID Connect idP para o Moodle.<br/>
<ul>
<li>Os dados básicos do perfil estão disponíveis nos tokens de ID de todos os idP\'s.</li>
<li>Se o Azure AD for usado como idP, os dados de perfil adicionados podem ser utilizados instalando e configurando o <a href="https://moodle.org/plugins/local_o365"> plug-in de integração do Microsoft 365 (local_o365)</a>.</li>
<li>Se o recurso de sincronização de perfil SDS estiver habilitado no plugin local_o365, determinados campos de perfil podem ser sincronizados do SDS para o Moodle ao executar a tarefa agendada "Sincronizar com SDS" e não quando a tarefa "Sincronizar usuários com o Azure AD" for executada ou quando o usuário fizer login.</li>
</ul>';
$string['cfg_forceredirect_desc'] = 'Se habilitado, a página de login index será ignorada e será redirecionado para a página OpenID Conncet. Pode ser ignorado com o parâmetro de URL ?noredirect=1';
$string['cfg_forceredirect_key'] = 'Forçar redirecionamento';
$string['cfg_frontchannellogouturl_desc'] = 'Este é a URL que o seu idP precisa acionar quando os usuários do Moodle tenta desconectar.<br/>
Para a plataforma Microsoft Azure AD/Microsoft Identity, a configuração é chamada de "URL de logout do canal frontal" e pode ser configurada no aplicativo Azure.';
$string['cfg_frontchannellogouturl_key'] = 'URL de logout do canal frontal';
$string['cfg_icon_desc'] = 'Um ícone que será exibido ao lado do nome do provedor da página de login.';
$string['cfg_icon_key'] = 'Ícone';
$string['cfg_iconalt_check'] = 'Ícone de marca de seleção';
$string['cfg_iconalt_go'] = 'Círculo verde';
$string['cfg_iconalt_group'] = 'Ícone do grupo';
$string['cfg_iconalt_group2'] = 'Ícone do grupo alternativo';
$string['cfg_iconalt_key'] = 'Ícone de chave';
$string['cfg_iconalt_lock'] = 'Ícone de cadeado';
$string['cfg_iconalt_locked'] = 'Ícone bloqueado';
$string['cfg_iconalt_mnet'] = 'Ícone MNET';
$string['cfg_iconalt_o365'] = 'Ícone Microsoft 365';
$string['cfg_iconalt_plus'] = 'Ícone de adição';
$string['cfg_iconalt_rightarrow'] = 'Ícone de seta para a direita';
$string['cfg_iconalt_stop'] = 'Círculo vermelho';
$string['cfg_iconalt_user'] = 'Ícone do usuário';
$string['cfg_iconalt_user2'] = 'Ícone do usuário alternativo';
$string['cfg_iconalt_userlock'] = 'Usuário com ícone de cadeado';
$string['cfg_loginflow_authcode'] = 'Fluxo de código de autorização <b>(recomendado)</b>';
$string['cfg_loginflow_authcode_desc'] = 'Usando esse fluxo, o usuário clica no nome do idP (consulte no "Nome de exibição do provedor" acima) na página de login do Moodle, o redirecionando ao provedor para fazer login. Esta é a maneira mais padronizada e segura para o login do usuário.';
$string['cfg_loginflow_key'] = 'Fluxo de login';
$string['cfg_loginflow_rocreds'] = 'Concessão de credenciais de senha do proprietário do recurso <b>(obsoleto)</b>';
$string['cfg_loginflow_rocreds_desc'] = '<b>Este fluxo de login está obsoleto e será removido do plugin em breve.</b><br/>Usando este fluxo, o usuário insere seu nome de usuário e senha no formulário de login Moodle, como se fosse realizar um login manual. Isso autorizará esse usuário com idP, mas não criará uma sessão no site do idP. Por exemplo, se estiver utilizando o Microsoft 365 com OpenID Connect, o usuário será conectado ao Moodle, mas não aos aplicativos da Web do Microsoft 365. O uso da solicitação de autorização é recomendado se você deseja que os usuários estejam logados no Moodle e no idP. Observe que nem todos os idP\'s suportam esse fluxo. Esta opção só deve ser usada quando outros tipos de concessões de autorização não estiverem disponíveis.';
$string['cfg_logoutendpoint_desc'] = 'O URI do endpoint de logout do seu idP que vai ser utilizado.';
$string['cfg_logoutendpoint_key'] = 'Endpoint de logout do idP';
$string['cfg_opname_desc'] = 'Esta é a etiqueta voltada para o usuário final que identifica o tipo de credenciais que o usuário deve usar para fazer login. Este rótulo é usado em todas as partes deste plugin voltadas para o usuário, para a identificação do seu provedor.';
$string['cfg_opname_key'] = 'Nome de exibição do provedor';
$string['cfg_redirecturi_desc'] = 'Este é o URI que deve ser registrado como o "URI de redirecionamento". Seu OpenID Connect idP deve solicitar isso ao registrar o Moodle como cliente. <br/><b>NOTA:</b> Voce deve inserir isso em seu OpenID Connect idP *exatamente* como aparece aqui. Qualquer diferença impedirá logins usando o OpenID Connect.';
$string['cfg_redirecturi_key'] = 'URI de redirecionamento';
$string['cfg_signoffintegration_desc'] = 'Se a opção estiver habilitada, quando o usuário do Moodle conectado ao idP configuradofizer logout do Moodle, a integraçãoacionará uma solicitação no terminal de logout abaixo, tentando desconectar o usuário do idP também.<br/>
Observação para integração com o Microsoft Azure AD, a URL do site Moodle ({$a}) precisa ser adicionada como um URI de redirecionamento no aplicativo Azure criado para integração Moodle e Microsoft 365.';
$string['cfg_signoffintegration_key'] = 'Saída única (do Moodle para o IdP)';
$string['cfg_userrestrictions_desc'] = 'Permita apenas o login de usuários que atendam a certas restrições. <br /><b>Como usar as restrições de usuário: </b> <ul><li>Insira um padrão de <a href="https://en.wikipedia.org/wiki/Regular_expression">expressão regular</a> que corresponda aos nomes de usuário dos usuários que você deseja permitir.</li><li>Insira um padrão por linha</li><li>Se você inserir vários padrões, um usuário terá permissão se eles corresponderem a QUALQUER um dos padrões.</li><li>O caractere "/" deve ser precedido por "\\".</li><li >Se você não inserir nenhuma restrição acima, todos os usuários que podem fazer login no OpenID Connect IdP serão aceitos pelo Moodle.</li><li>Qualquer usuário que não corresponda a nenhum dos padrões inseridos será impedido de fazer login usando o OpenID Connect.</li></ul>';
$string['cfg_userrestrictions_key'] = 'Restrições de usuário';
$string['cfg_userrestrictionscasesensitive_desc'] = 'Isso controla se a opção "/i" na expressão regular é usada na correspondência de restrição de usuário.<br/>Se habilitada, todas as verificações de restrição de usuário serão executadas com distinção entre maiúsculas e minúsculas. Observe que, se estiver desabilitado, quaisquer padrões em maiúsculas e minúsculas serão ignorados.';
$string['cfg_userrestrictionscasesensitive_key'] = 'Restrições de usuário com distinção entre maiúsculas e minúsculas';
$string['cleanup_oidc_tokens'] = 'Limpar tokens OpenID Connect';
$string['clientauthmethod'] = 'Método de autenticação do cliente';
$string['clientauthmethod_help'] = '<ul>
<li>O IdP em todos os tipos pode usar o método de autenticação "<b>Secret</b>".</li>
<li>O IdP no tipo <b>plataforma de identidade Microsoft (v2.0)</b> também pode usar o método de autenticação <b>Certificate</b>.</li>
</ul>
Observe o método de autenticação <b>Certificate</b> não é suportado no fluxo de login <b>Concessão de credenciais de senha do proprietário do recurso</b>.';
$string['clientcert'] = 'Chave pública do certificado do cliente';
$string['clientcert_help'] = 'Ao usar o método de autenticação <b>certificate</b>, esta é a chave pública, ou certificado, usado para autenticar com o IdP.';
$string['clientid'] = 'ID do aplicativo';
$string['clientid_help'] = 'Seu ID de aplicativo/cliente registrado no IdP.';
$string['clientprivatekey'] = 'Chave privada do certificado do cliente';
$string['clientprivatekey_help'] = 'Ao usar o método de autenticação <b>certificate</b>, esta é a chave privada do certificado usado para autenticar com o IdP.';
$string['clientsecret'] = 'Segredo do cliente';
$string['clientsecret_help'] = 'Ao usar o método de autenticação <b>secret</b>, este é o segredo do cliente no IdP. Em alguns provedores, também é chamado de chave.';
$string['delete_token'] = 'Excluir token';
$string['delete_token_and_reference'] = 'Excluir token e referência';
$string['error_empty_client_cert'] = 'A chave pública do certificado do cliente não pode estar vazia ao usar o método de autenticação "certificate"';
$string['error_empty_client_private_key'] = 'A chave privadado certificado do cliente não pode estar vazia ao usar o método de autenticação "certificate"';
$string['error_empty_client_secret'] = 'O segredo do cliente não pode estar vazio ao usar o método de autenticação "secret"';
$string['error_empty_oidcresource'] = 'O recurso não pode estar vazio ao usar o Azure AD (v1.0) ou outros tipos de IdP.';
$string['error_empty_tenantname_or_guid'] = 'O nome do locatário ou GUID não pode estar vazio ao usar o método de autenticação "certificate"';
$string['error_empty_tenantnameorguid'] = 'O nome do locatário ou o GUID não podem estar vazios ao usar IdPs do Azure AD (v1.0) ou da plataforma de identidade da Microsoft (v2.0).';
$string['error_endpoint_mismatch_auth_endpoint'] = 'O endpoint de autorização configurado não corresponde ao tipo de IdP configurado.<br/>
<ul>
<li>Ao usar o tipo de IdP "Azure AD (v1.0)", use o endpoint v1.0, por exemplo https://login.microsoftonline.com/common/oauth2/authorize</li>
<li>Ao usar o tipo de IdP "plataforma de identidade da Microsoft (v2.0)", use o endpoint v2.0, por exemplo https://login.microsoftonline.com/common/oauth2/v2.0/authorize</li>
</ul>';
$string['error_endpoint_mismatch_token_endpoint'] = 'O endpoint de autorização configurado não corresponde ao tipo de IdP configurado.<br/>
<ul>
<li>Ao usar o tipo de IdP "Azure AD (v1.0)", use o endpoint v1.0, por exemplo https://login.microsoftonline.com/common/oauth2/authorize</li>
<li>Ao usar o tipo de IdP "plataforma de identidade da Microsoft (v2.0)", use o endpoint v2.0, por exemplo https://login.microsoftonline.com/common/oauth2/v2.0/authorize</li>
</ul>';
$string['error_invalid_client_authentication_method'] = 'Método de autenticação de cliente inválido';
$string['errorauthdisconnectemptypassword'] = 'A senha não pode estar vazia';
$string['errorauthdisconnectemptyusername'] = 'O nome de usuário não pode estar vazio';
$string['errorauthdisconnectifmanual'] = 'Se estiver usando o método de login manual, insira as credenciais abaixo.';
$string['errorauthdisconnectinvalidmethod'] = 'Método de login inválido recebido.';
$string['errorauthdisconnectnewmethod'] = 'Usar método de login';
$string['errorauthdisconnectusernameexists'] = 'Esse nome de usuário já está em uso. Por favor, escolha um diferente.';
$string['errorauthgeneral'] = 'Ocorreu um problema ao fazer login. Entre em contato com o administrador para obter assistência.';
$string['errorauthinvalididtoken'] = 'ID_token inválido recebido.';
$string['errorauthloginfaileddupemail'] = 'Login inválido: Uma conta existente neste Moodle tem o mesmo endereço de e-mail da conta que você tentou criar e a configuração "Permitir contas com o mesmo e-mail" (allowaccountssameemail) está desativada.';
$string['errorauthloginfailednouser'] = 'Login inválido: Usuário não encontrado no Moodle. Se este site tiver a configuração "authpreventaccountcreation" habilitada, isso pode significar que você precisa de um administrador para criar uma conta para você primeiro.';
$string['errorauthnoaccesstoken'] = 'Token de acesso não recebido.';
$string['errorauthnoauthcode'] = 'Nenhum código de autorização foi recebido do servidor de identidade. Os logs de erro podem ter mais informações.';
$string['errorauthnocredsandendpoints'] = 'Configure as credenciais e os terminais do cliente OpenID Connect.';
$string['errorauthnohttpclient'] = 'Defina um cliente HTTP.';
$string['errorauthnoidtoken'] = 'OpenID Connect id_token não recebido.';
$string['errorauthunknownstate'] = 'Estado desconhecido.';
$string['errorauthuseralreadyconnected'] = 'Você já está conectado a um usuário OpenID Connect diferente.';
$string['errorauthuserconnectedtodifferent'] = 'O usuário OpenID Connect autenticado já está conectado a um usuário Moodle.';
$string['errorbadloginflow'] = 'Tipo de autenticação especificada inválida. Note: Se você estiver recebendo isso após uma instalação ou atualização, limpe seu cache no Moodle.';
$string['errorinvalidredirect_message'] = 'Você está tentando redirecionar para um URL que não existe.';
$string['errorjwtbadpayload'] = 'Não foi possível ler o payload JWT.';
$string['errorjwtcouldnotreadheader'] = 'Não foi possível ler o cabeçalho JWT.';
$string['errorjwtempty'] = 'JWT recebido vazio ou sem string.';
$string['errorjwtinvalidheader'] = 'Cabeçalho JWT inválido.';
$string['errorjwtmalformed'] = 'JWT recebido inválido.';
$string['errorjwtunsupportedalg'] = 'JWS Alg ou o JWE não suportado.';
$string['errorlogintoconnectedaccount'] = 'Este usuário do Microsoft 365 está conectado a uma conta do Moodle, mas o logon do OpenID Connect não está habilitado para essa conta do Moodle. Faça o login na conta do Moodle usando o método de autenticação definido da conta para usar os recursos do Microsoft 365.';
$string['errornodisconnectionauthmethod'] = 'Não é possível desconectar pois não há nenhum plugin de autenticação habilitado para o qual retornar. (O método de login anterior do usuário ou o método de login manual).';
$string['erroroidccall'] = 'Erro no OpenID Connect. Verifique os registros para obter mais informações.';
$string['erroroidccall_message'] = 'Erro no OpenID Connect: {$a}';
$string['erroroidcclientinsecuretokenendpoint'] = 'O Endpoint do token deve estar usando SSL/TLS para isso.';
$string['erroroidcclientinvalidendpoint'] = 'URI do Endpoint recebido é inválido.';
$string['erroroidcclientnoauthendpoint'] = 'Nenhum endpoint de autorização definido. Por favor, defina com $this->setendpoints';
$string['erroroidcclientnocreds'] = 'Defina as credenciais do cliente com setcreds';
$string['erroroidcclientnotokenendpoint'] = 'Nenhum token endpoint definido. Por favor, defina com $this->setendpoints';
$string['erroroidcnotenabled'] = 'O plugin de autenticação OpenID Connect não está habilitado.';
$string['errorrestricted'] = 'Este site tem restrições em vigor sobre os usuários que podem fazer login com o OpenID Connect. Essas restrições atualmente impedem que você conclua essa tentativa de login.';
$string['errorucpinvalidaction'] = 'Ação inválida recebida.';
$string['errorusermatched'] = 'A conta do Microsoft 365 "{$a->aadupn}" já é correspondente com o usuário do Moodle "{$a->username}". Para concluir a conexão, faça login como usuário do Moodle primeiro e siga as instruções no bloco da Microsoft.';
$string['erroruserwithusernamealreadyexists'] = 'Ocorreu um erro ao tentar renomear sua conta do Moodle. Já existe um usuário do Moodle com o novo nome de usuário. Peça ao administrador do site para resolver isso primeiro.';
$string['event_debug'] = 'Mensagem de depuração';
$string['eventuserauthed'] = 'Usuário autorizado com o OpenID Connect';
$string['eventuserconnected'] = 'Usuário conectado com o OpenID Connect';
$string['eventusercreated'] = 'Usuário criado com o OpenID Connect';
$string['eventuserdisconnected'] = 'Usuário desconectado do OpenID Connect';
$string['eventuserloggedin'] = 'Usuário conectado com o OpenID Connect';
$string['heading_additional_options'] = 'Opções adicionais';
$string['heading_basic'] = 'Configurações básicas';
$string['heading_debugging'] = 'Depuração';
$string['heading_display'] = 'Exposição';
$string['heading_sign_out'] = 'Integração de sair';
$string['heading_user_restrictions'] = 'Restrições de usuário';
$string['idp_type_azuread'] = 'Azure AD (v1.0)';
$string['idp_type_microsoft'] = 'Plataforma de identidade Microsoft (v2.0)';
$string['idp_type_other'] = 'Outro';
$string['idptype'] = 'Tipo de provedor de identidade (IdP)';
$string['idptype_help'] = 'Três tipos de IdP são suportados atualmente:
<ul>
<li>Azure AD (v1.0): Azure AD com endpoint oauth2 <b>v1.0</b>, por exemplo, https://login.microsoftonline.com/common/oauth2/authorize.</li>
<li><b>Plataforma de identidade da Microsoft (</b>v2.0): Azure AD com endpoint do oath2 v2.0, por exemplo, https://login.microsoftonline.com/common/oauth2/v2.0/authorize.</li>
<li><b>Outros</b>: qualquer IdP do Azure AD.</li>
</ul>
As diferenças entre as opções do Azure AD (v1.0) e da <b>plataforma de identidade da Microsoft (v2.0)</b> podem ser encontradas em <a href="https://docs.microsoft.com/en-us/azure/active-directory/azuread-dev/azure-ad-endpoint-comparison">https://docs.microsoft.com/en-us/azure/active-directory/azuread-dev/azure-ad-endpoint-comparison</a>.<br/>
Notavelmente, o aplicativo configurado pode usar <b>certificate</b> além <b>de secret</b> para autenticação ao usar o IdP da <b>plataforma de identidade da Microsoft (v2.0).</b><br/>
Os pontos de extremidade de autorização e token precisam ser configurados de acordo com o tipo de IdP configurado.';
$string['mismatched'] = 'Incompatíveis';
$string['mismatched_details'] = 'O registro de token contém o nome de usuário "{$a->tokenusername}"; O usuário correspondente do Moodle tem o nome de usuário "{$a->moodleusername}".';
$string['na'] = 'n/a';
$string['no_token_to_cleanup'] = 'Não há nenhum token OIDC para limpeza.';
$string['oidc:manageconnection'] = 'Permitir conecxão e desconexão OpenID';
$string['oidc:manageconnectionconnect'] = 'Permitir conexão OpenID';
$string['oidc:manageconnectiondisconnect'] = 'Permitir desconexão OpenID';
$string['oidcresource'] = 'Recurso';
$string['oidcresource_help'] = 'O recurso OpenID Connect para o qual enviar a solicitação.<br/>
<b>Observe</b> que esse parâmetro não é suportado no tipo de IdP da <b>plataforma de identidade da Microsoft (v2.0).</b>';
$string['oidcscope'] = 'Escopo';
$string['oidcscope_help'] = 'O escopo OIDC que vai ser utilizado.';
$string['pluginname'] = 'OpenID Connect';
$string['privacy:metadata:auth_oidc'] = 'Autenticação do OpenID Connect';
$string['privacy:metadata:auth_oidc_prevlogin'] = 'Métodos de login anteriores para desfazer conexões do Microsoft 365';
$string['privacy:metadata:auth_oidc_prevlogin:method'] = 'Método de login anterior';
$string['privacy:metadata:auth_oidc_prevlogin:password'] = 'O campo de senha de usuário anterior (criptografado).';
$string['privacy:metadata:auth_oidc_prevlogin:userid'] = 'ID do usuário do Moodle';
$string['privacy:metadata:auth_oidc_token'] = 'Tokens OpenID Connect';
$string['privacy:metadata:auth_oidc_token:authcode'] = 'O código de autenticação para o token';
$string['privacy:metadata:auth_oidc_token:expiry'] = 'O token está expirado';
$string['privacy:metadata:auth_oidc_token:idtoken'] = 'O token de ID';
$string['privacy:metadata:auth_oidc_token:oidcuniqid'] = 'O identificador de usuário exclusivo do OIDC.';
$string['privacy:metadata:auth_oidc_token:oidcusername'] = 'O nome de usuário do usuário OIDC';
$string['privacy:metadata:auth_oidc_token:refreshtoken'] = 'Token de atualização';
$string['privacy:metadata:auth_oidc_token:scope'] = 'O escopo do token';
$string['privacy:metadata:auth_oidc_token:token'] = 'O token';
$string['privacy:metadata:auth_oidc_token:tokenresource'] = 'O recurso do token';
$string['privacy:metadata:auth_oidc_token:userid'] = 'O ID do usuário do Moodle';
$string['privacy:metadata:auth_oidc_token:username'] = 'O nome de usuário do usuário no Moodle';
$string['settings_fieldmap_feild_not_mapped'] = '(não mapeado)';
$string['settings_fieldmap_field_businessPhones'] = 'Telefone do escritório';
$string['settings_fieldmap_field_city'] = 'Cidade';
$string['settings_fieldmap_field_companyName'] = 'Nome da Empresa';
$string['settings_fieldmap_field_country'] = 'País';
$string['settings_fieldmap_field_department'] = 'Departamento';
$string['settings_fieldmap_field_displayName'] = 'Nome de Exibição';
$string['settings_fieldmap_field_employeeId'] = 'ID do funcionário';
$string['settings_fieldmap_field_extensionattribute'] = 'Atributo de extensão {$a}';
$string['settings_fieldmap_field_faxNumber'] = 'Número de Fax';
$string['settings_fieldmap_field_givenName'] = 'Nome';
$string['settings_fieldmap_field_groups'] = 'Grupos';
$string['settings_fieldmap_field_jobTitle'] = 'Cargo';
$string['settings_fieldmap_field_mail'] = 'Email';
$string['settings_fieldmap_field_manager'] = 'Nome do gerente';
$string['settings_fieldmap_field_manager_email'] = 'E-mail do gerente';
$string['settings_fieldmap_field_mobile'] = 'Celular';
$string['settings_fieldmap_field_mobilePhone'] = 'Telefone celular';
$string['settings_fieldmap_field_objectId'] = 'ID do objeto';
$string['settings_fieldmap_field_officeLocation'] = 'Escritório';
$string['settings_fieldmap_field_onPremisesSamAccountName'] = 'Nome da conta SAM local';
$string['settings_fieldmap_field_postalCode'] = 'Código postal';
$string['settings_fieldmap_field_preferredLanguage'] = 'Linguagem';
$string['settings_fieldmap_field_preferredName'] = 'Nome preferido';
$string['settings_fieldmap_field_roles'] = 'Papéis';
$string['settings_fieldmap_field_sds_school_id'] = 'ID da escola SDS ({$a})';
$string['settings_fieldmap_field_sds_school_name'] = 'Nome da escola SDS ({$a})';
$string['settings_fieldmap_field_sds_school_role'] = 'Função escolar da SDS ("Estudante" ou "Professor")';
$string['settings_fieldmap_field_sds_student_birthDate'] = 'Data de nascimento do estudante SDS';
$string['settings_fieldmap_field_sds_student_externalId'] = 'ID externo do estudante SDS';
$string['settings_fieldmap_field_sds_student_grade'] = 'Nota do estudante SDS';
$string['settings_fieldmap_field_sds_student_graduationYear'] = 'Ano de formatura do estudante SDS';
$string['settings_fieldmap_field_sds_student_studentNumber'] = 'Número de estudante SDS';
$string['settings_fieldmap_field_sds_teacher_externalId'] = 'ID externo do professor SDS';
$string['settings_fieldmap_field_sds_teacher_teacherNumber'] = 'Número do professor SDS';
$string['settings_fieldmap_field_state'] = 'Estado';
$string['settings_fieldmap_field_streetAddress'] = 'Endereço';
$string['settings_fieldmap_field_surname'] = 'Sobrenome';
$string['settings_fieldmap_field_teams'] = 'Teams';
$string['settings_fieldmap_field_telephoneNumber'] = 'Número telefônico';
$string['settings_fieldmap_field_userPrincipalName'] = 'Nome de usuário (UPN)';
$string['settings_page_application'] = 'IdP e autenticação';
$string['settings_page_cleanup_oidc_tokens'] = 'Limpar tokens OpenID Connect';
$string['settings_page_field_mapping'] = 'Campos de mapeamento';
$string['settings_page_other_settings'] = 'Outras opções';
$string['settings_section_authentication'] = 'Autenticação';
$string['settings_section_basic'] = 'Configurações básicas';
$string['settings_section_other_params'] = 'Outros parâmetros';
$string['table_action'] = 'Ação';
$string['table_matching_details'] = 'Detalhes';
$string['table_matching_status'] = 'Status de correspondência';
$string['table_oidc_username'] = 'Nome de usuário OIDC';
$string['table_token_id'] = 'ID do registro de token';
$string['table_token_unique_id'] = 'ID único do OIDC';
$string['task_cleanup_oidc_state_and_token'] = 'Limpar o estado OIDC e o token inválido';
$string['token_deleted'] = 'O token foi excluído com sucesso';
$string['tokenendpoint'] = 'Endpoint do token';
$string['tokenendpoint_help'] = 'O URI do endpoint do token do seu IdP que será utilizado.<br/>
Observe se o site deve ser configurado para permitir que usuários de outros locatários acessem, o endpoint de token específico do locatário não poderá ser usado.';
$string['ucp_disconnect_details'] = 'Isso desconectará sua conta do Moodle de {$a}. Você precisará criar um nome de usuário e senha para fazer login no Moodle.';
$string['ucp_disconnect_title'] = '{$a} Desconectado';
$string['ucp_general_intro'] = 'Aqui você pode gerenciar sua conexão com {$a}. Se habilitado, você poderá usar sua conta {$a} para fazer login no Moodle em vez de um nome de usuário e senha separados. Uma vez conectado, você não precisará mais se lembrar de um nome de usuário e senha para o Moodle, todos os logins serão manipulados por {$a}.';
$string['ucp_login_start'] = 'Comece a usar {$a} para fazer login no Moodle';
$string['ucp_login_start_desc'] = 'Isso mudará sua conta para usar {$a} para fazer login no Moodle. Uma vez habilitado, você fará login usando suas credenciais {$a} - seu nome de usuário e senha atuais do Moodle não funcionarão. Você pode desconectar sua conta a qualquer momento e voltar a fazer login normalmente.';
$string['ucp_login_status'] = '{$a} login é:';
$string['ucp_login_stop'] = 'Pare de usar {$a} para fazer login no Moodle';
$string['ucp_login_stop_desc'] = 'No momento, você está usando {$a} para fazer login no Moodle. Clicar em "Parar de usar {$a} login" desconectará sua conta do Moodle de {$a}. Você não poderá mais fazer login no Moodle com sua conta {$a}. Você será solicitado a criar um nome de usuário e senha e, a partir de então, poderá fazer login no Moodle diretamente.';
$string['ucp_o365accountconnected'] = 'Essa conta do Microsoft 365 já está conectada a outra conta do Moodle.';
$string['ucp_status_disabled'] = 'Desabilitado';
$string['ucp_status_enabled'] = 'Habilitado';
$string['ucp_title'] = '{$a} Gestão';
$string['update_oncreate_and_onlogin'] = 'Na criação e em cada login';
$string['update_oncreate_and_onlogin_and_usersync'] = 'Na criação, cada logon e cada tarefa de sincronização do usuário são executados';
$string['update_onlogin_and_usersync'] = 'Em cada login e em cada tarefa de sincronização do usuário executada';
