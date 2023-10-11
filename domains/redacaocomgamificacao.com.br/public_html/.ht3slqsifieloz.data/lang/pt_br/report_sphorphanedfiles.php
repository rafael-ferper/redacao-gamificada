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
 * Strings for component 'report_sphorphanedfiles', language 'pt_br', version '4.1'.
 *
 * @package     report_sphorphanedfiles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessruleviolationmessage'] = 'O relatório não está habilitado ou permissão ausente';
$string['confighandleractivitiescore'] = 'Nem todas as <b>atividades nativas do moodle</b> suportam a descrição da introdução (por exemplo, rótulo).
    Esta lista separada por vírgulas da atividade principal do moodle será verificada quanto a arquivos órfãos na descrição da introdução.
    Uma nova atividade nativa do Moodle deve ser adicionada a esta lista.';
$string['confighandleractivitiesplugin'] = 'Nem todas as <b>atividades adicionais</b> suportam a descrição da introdução.
    Esta lista separada por vírgulas de atividades adicionais será verificada quanto a arquivos órfãos na descrição da introdução.
    Novas atividades adicionais devem ser adicionadas a esta lista se suportarem a descrição da introdução.';
$string['confighandlermaterialscore'] = 'Nem todos os <b>recursos nativos do moodle</b> suportam a descrição da introdução.
    Esta lista separada por vírgulas dos principais recursos do moodle será verificada quanto a arquivos órfãos na descrição da introdução.
    Novos recursos nativos do moodle devem ser adicionados a esta lista se eles suportarem a descrição da introdução.';
$string['confighandlermaterialsplugin'] = 'Nem todos os <b>recursos adicionais</b> suportam a descrição da introdução.
    Esta lista separada por vírgulas de recursos adicionais será verificada quanto a arquivos órfãos na descrição da introdução.
    Novos recursos adicionais devem ser adicionados a esta lista se eles suportarem a descrição da introdução.';
$string['configisactive'] = 'Quando habilitado, o relatório pode ser iniciado na navegação do curso.';
$string['configisactiveforadmin'] = 'Quando habilitado, um administrador pode iniciar o relatório na navegação do curso, independentemente do status estar ativo para usuários normais.';
$string['deleteMessage'] = 'Arquivo órfão excluído com sucesso';
$string['description'] = 'Se um professor adicionar um arquivo ao editor e excluir o arquivo, o arquivo ainda será armazenado no plano de fundo deste contexto (por exemplo, rótulo). O professor pode excluir o arquivo com a caixa de diálogo "gerenciar arquivo" no editor. Isso não é muito confortável.
Este relatório ajuda a mostrar arquivos órfãos que podem não ser usados em descrições de atividades ou recursos, ajudando a excluí-los.';
$string['handleractivitiescore'] = 'Verifique as atividades nativas do moodle para arquivos órfãos na descrição da introdução';
$string['handleractivitiesplugin'] = 'Verifique as atividades adicionais do moodle para arquivos órfãos na descrição da introdução';
$string['handlermaterialscore'] = 'Verifique os recursos nativos do moodle para arquivos órfãos na descrição da introdução';
$string['handlermaterialsplugin'] = 'Verifique os recursos adicionais do moodle para arquivos órfãos na descrição da introdução';
$string['header.code'] = 'Código fonte:';
$string['header.content'] = 'Conteúdo';
$string['header.filename'] = 'Nome do arquivo';
$string['header.modName'] = 'Módulo';
$string['header.moduleContent'] = 'Descrição, ...';
$string['header.tool'] = 'excluir os arquivos órfão sem solicitação!';
$string['invalidcourseidmessage'] = 'id de curso inválido';
$string['isactive'] = 'Habilitar relatório';
$string['isactiveforadmin'] = 'Habilitar relatório para administrador do site';
$string['isallowedtodeleteallfiles'] = 'O usuário tem permissão/capacidade de excluir todos os arquivos neste curso';
$string['isgridlayoutfilehint'] = 'Este arquivo talvez tenha sido usado pelo gridlayout-plugin, mas parece não estar em uso.';
$string['pluginname'] = 'Relatório arquivos órfãos';
$string['sphorphanedfiles:delete'] = 'Permissão de adicionar um ícone a cada arquivo órfão para poder excluir arquivos.';
$string['sphorphanedfiles:view'] = 'Permissão de visualizar este relatório.';
