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
 * Strings for component 'subcourse', language 'pt_br', version '4.1'.
 *
 * @package     subcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blankwindow'] = 'Abrir em uma nova janela';
$string['blankwindow_help'] = 'Quando selecionado, o link abrirá o curso referenciado em uma nova janela do navegador.';
$string['completioncourse'] = 'Requer a conclusão do curso';
$string['completioncourse_help'] = 'Se habilitado, a atividade é considerada concluída quando um estudante concluir o curso referenciado.';
$string['completioncourse_text'] = 'Os estudantes devem concluir o curso referenciado para concluir esta atividade.';
$string['currentgrade'] = 'Nota atual: {$a}';
$string['currentprogress'] = 'Progresso: {$a}%';
$string['displayoption:coursepageprintgrade'] = 'Exibir nota do curso referenciado na página do curso';
$string['displayoption:coursepageprintprogress'] = 'Exibir o progresso do curso referenciado na página do curso';
$string['errfetch'] = 'Não é possível obter notas: código do erro {$a}';
$string['errlocalremotescale'] = 'Não é possível obter nota: o item nota final remoto utiliza uma escala local.';
$string['eventgradesfetched'] = 'Notas obtidas';
$string['fetchgradesmode'] = 'Buscar notas como';
$string['fetchgradesmode0'] = 'Valores reais';
$string['fetchgradesmode1'] = 'Valores percentuais';
$string['fetchgradesmode_help'] = 'Dependendo da configuração do livro de notas do curso referenciado, o valor bruto e o valor percentual da nota final do curso podem nem sempre corresponder aos valores mostrados nesta atividade do subcurso. Esta configuração determina qual dos valores deve corresponder.

* Valores reais - o valor real da nota final no referenciado é obtido como nota da atividade deste subcurso. Caso haja algumas notas excluídas no curso referenciado, então a nota final percentual calculada no curso referenciado poderá não corresponder ao percentual da atividade do subcurso.
* Valores percentuais - a nota final recebida no curso referenciado é recalculada para que o percentual exibido no curso referenciado corresponda ao percentual exibido nesta atividade do subcurso. Se houver algumas notas excluídas no curso referenciado, o valor real da nota real poderá não corresponder.';
$string['fetchnow'] = 'Obter notas agora';
$string['gotocoursename'] = 'Vá para o curso <a href="{$a->href}">{$a->name}</a>';
$string['gotorefcourse'] = 'Ir para {$a}';
$string['gotorefcoursegrader'] = 'Todas as notas em {$a}';
$string['gotorefcoursemygrades'] = 'Minhas notas em {$a}';
$string['gradesfetching'] = 'Obtenção de notas';
$string['hiddencourse'] = '*oculto*';
$string['instantredirect'] = 'Redirecionar para o curso referenciado';
$string['instantredirect_help'] = 'Se habilitado, os usuários serão redirecionados para o curso referenciado ao tentar visualizar a página da atividade do subcurso. Não afeta os usuários com permissão para obter notas manualmente.';
$string['lastfetchnever'] = 'As notas ainda não foram obtidas';
$string['lastfetchtime'] = 'Última execução: {$a}';
$string['linkcontrol'] = 'Link de atividade do subcurso';
$string['modulename'] = 'Subcurso';
$string['modulename_help'] = 'O módulo fornece funcionalidades muito simples e úteis. Quando adicionado a um curso, ele se comporta como uma atividade. A nota de cada estudante é retirada da nota final de outro curso. Combinado com metacursos, permite que os conteudistas organizem cursos em unidades separadas.';
$string['modulenameplural'] = 'Subcursos';
$string['nocoursesavailable'] = 'Nenhum curso que você possa obter notas';
$string['nosubcourses'] = 'Não existem subcursos neste curso';
$string['pluginadministration'] = 'Administração de subcurso';
$string['pluginname'] = 'Subcurso';
$string['privacy:metadata'] = 'Subcourse não armazena nenhum dado pessoal';
$string['refcourse'] = 'Curso referenciado';
$string['refcourse_help'] = 'O curso referenciado é onde a nota da atividade é obtida. Os estudantes devem estar inscritos no curso referenciado.

Você precisa ser um professor no curso para que ele seja listado aqui. Você pode solicitar ao administrador do seu site para configurar este subcurso para que você obtenha notas de outros cursos.';
$string['refcoursecurrent'] = 'Manter a referência atual';
$string['refcourselabel'] = 'Obter notas de';
$string['refcoursenull'] = 'Nenhum curso referenciado configurado';
$string['settings:coursepageprintgrade'] = 'Nota na página do curso';
$string['settings:coursepageprintgrade_desc'] = 'Exibir nota do curso referenciado na página do curso.';
$string['settings:coursepageprintprogress'] = 'Progresso na página do curso';
$string['settings:coursepageprintprogress_desc'] = 'Exibir o progresso do curso referenciado na página do curso.';
$string['subcourse:addinstance'] = 'Adicionar um novo subcurso';
$string['subcourse:begraded'] = 'Receber nota do curso referenciado';
$string['subcourse:fetchgrades'] = 'Obter manualmente as notas do curso referenciado';
$string['subcourse:view'] = 'Ver atividade do subcurso';
$string['subcoursename'] = 'Nome do subcurso';
$string['taskcheckcompletedrefcourses'] = 'Verificar a conclusão dos cursos referenciados';
$string['taskfetchgrades'] = 'Obter notas do subcurso';
