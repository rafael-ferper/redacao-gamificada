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
 * Strings for component 'auth_googleoauth2', language 'pt_br', version '4.1'.
 *
 * @package     auth_googleoauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dropboxclientid_key'] = 'Chave do aplicativo Dropbox';
$string['auth_dropboxclientsecret_key'] = 'Segredo do aplicativo Dropbox';
$string['auth_facebookclientid'] = 'Seu ID/Segredo do aplicativo pode ser gerado em sua <a href="https://developers.facebook.com/apps/" target="_blank">página do desenvolvedor do Facebook</a>:
<br/>Adicione um novo aplicativo > Site > Insira o nome do seu site como nome do aplicativo > Crie um novo ID de aplicativo do Facebook > Insira o URL do site - não é necessário inserir o URL móvel >
Na página de confirmação, procure o link "Ir para o painel do desenvolvedor" > no painel do aplicativo, você deve encontrar o id/segredo > Configurações > Avançado > insira os URIs de redirecionamento OAuth válidos
<br/>URL do site: {$a->siteurl}
<br/>Domínios de aplicativos: {$a->sitedomain}
<br/>URIs de redirecionamento OAuth válidos: {$a->callbackurl}
<br/><strong>AVISO: o Facebook alterou recentemente a API. Não está funcionando para a chave de API recém-criada. Por exemplo, sabemos que está quebrado na API do Facebook 2.8
e está funcionando com a API do Facebook 2.2. Não testamos a API do Facebook 2.3, 2.4, 2.5, 2.6 e 2.7. Para resumir, se você ainda não possui uma chave de API do Facebook antiga,
então é garantia que o Facebook não funcionará neste login. Veja as alternativas de plug-in ou aguarde a próxima grande atualização do plug-in (ainda não planejada).</strong>';
$string['auth_facebookclientid_key'] = 'ID do aplicativo do Facebook';
$string['auth_facebookclientsecret_key'] = 'Segredo do aplicativo do Facebook';
$string['auth_githubclientid_key'] = 'ID de cliente Github';
$string['auth_githubclientsecret_key'] = 'Segredo de cliente Github';
$string['auth_googleclientid_key'] = 'ID de cliente Google';
$string['auth_googleclientsecret_key'] = 'Segredo de cliente Google';
$string['auth_googleipinfodbkey_key'] = 'Chave IPinfoDB';
$string['auth_googleoauth2description'] = 'Permitir que um usuário se conecte ao site com um provedor de autenticação externo: Google/Facebook/Windows Live.
Na primeira vez que o usuário se conectar a um provedor de autenticação, uma nova conta é criada.
Impedir a criação de conta (configuração de administração de criação de contas authprevent) quando a autenticação <b>deve</b> ser desativada.';
$string['auth_googlesettings'] = 'Configurações dos provedores';
$string['auth_sign-in_with'] = 'Acessar com {$a->providername}';
$string['couldnotauthenticate'] = 'A autenticação falhou - Por favor, tente acessar novamente.';
$string['couldnotauthenticateuserlogin'] = 'Erro no método de autenticação: já existe uma conta de usuário com o mesmo endereço de e-mail !<br/>
Escolha outro método de autenticação ou entre em contato com o administrador do site.<br/>
<br/>
<a href="{$a->loginpage}">Tente novamente</a>.<br/>
<a href="{$a->forgotpass}">Esqueceu sua senha</a>?';
$string['couldnotgetgoogleaccesstoken'] = 'O provedor de autenticação nos comunicou um erro. Por favor, tente acessar novamente.';
$string['emailaddressmustbeverified'] = 'Seu endereço de email não foi verificado pelo método de autenticação selecionado. Você provavelmente esqueceu de clicar em um link "verificar endereço de email" que o Google ou o Facebook deveria ter enviado a você durante sua assinatura do serviço deles.';
$string['faileduserdetails'] = 'O site conseguiu se conectar ao provedor selecionado, mas falhou ao recuperar seus detalhes de usuário.';
$string['moreproviderlink'] = 'Acesse com outro serviço.';
$string['noaccountyet'] = 'Você nao tem permissão de acessar o site ainda. Por favor, contate seu administrador e peça para ativar sua conta.';
$string['othermoodle'] = 'Outras autenticações do Moodle';
$string['pluginname'] = 'Oauth2';
$string['signinwithanaccount'] = 'Fazer login com {$a}';
$string['stattitle'] = 'Estatísticas de login para este plugin';
$string['supportmaintenance'] = 'Para oferecer suporte à manutenção deste plugin, faça login na <a target="_blank" href="https://moodle.org/plugins/view/auth_googleoauth2">página do plug-in Moodle.org</a> e clique em \'Adicionar a meus favoritos\'. Obrigado!';
$string['unknownfirstname'] = 'Primeiro nome desconhecido';
$string['unknownlastname'] = 'Sobrenome desconhecido';
