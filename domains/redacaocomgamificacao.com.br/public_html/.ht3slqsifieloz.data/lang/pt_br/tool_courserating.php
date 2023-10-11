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
 * Strings for component 'tool_courserating', language 'pt_br', version '4.1'.
 *
 * @package     tool_courserating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrating'] = 'Avaliar';
$string['barwithrating'] = '{$a->rating} estrelas representam {$a->percent} na avaliação';
$string['cannotrate'] = 'Você não tem permissão para avaliar este curso';
$string['cannotview'] = 'Você não tem permissão para ver as avaliações deste curso';
$string['cfielddescription'] = 'Não edite, o conteúdo será preenchido automaticamente sempre que alguém deixar uma avaliação para este curso.';
$string['colorrating'] = 'Cor da avaliação';
$string['colorratingconfig'] = 'Geralmente é um pouco mais escuro que a cor da estrela para obter o melhor efeito visual';
$string['colorstar'] = 'Cor das estrelas';
$string['courserating:delete'] = 'Excluir avaliações e revisões do curso, visualizar revisões sinalizadas';
$string['courserating:rate'] = 'Deixe uma avaliação para o curso';
$string['courserating:reports'] = 'Ver relatórios de avaliações do curso';
$string['coursereviews'] = 'Revisões do curso';
$string['datasource_courseratings'] = 'Avaliações do curso';
$string['deleterating'] = 'Excluir permanentemente';
$string['deletereason'] = 'Motivo da exclusão';
$string['displayempty'] = 'Não exibir nenhuma avaliação com estrelas cinza';
$string['displayemptyconfig'] = 'Para cursos onde a avaliação está habilitada, mas ainda não há avaliações, são exibidas estrelas cinzas. Se não for selecionado, esses cursos não terão nenhuma avaliação exibida';
$string['editrating'] = 'Edite sua avaliação';
$string['entity_rating'] = 'Avaliação do curso por usuário';
$string['entity_summary'] = 'Resumo da avaliação do curso';
$string['event:flag_created'] = 'Avaliação do curso sinalizada';
$string['event:flag_deleted'] = 'Sinalização de avaliação do curso revogada';
$string['event:rating_created'] = 'Avaliação do curso criada';
$string['event:rating_deleted'] = 'Avaliação do curso excluída';
$string['event:rating_updated'] = 'Avaliação do curso atualizada';
$string['flagrating'] = 'Sinalizar';
$string['parentcss'] = 'Seletor CSS para elemento pai';
$string['parentcssconfig'] = 'A avaliação do curso será exibida na página do curso como o último filho do elemento DOM que corresponde a este seletor. Talvez seja necessário substituí-lo se o site usar um tema personalizado e você quiser especificar um pai personalizado. Se deixado em branco, o valor padrão será usado. Para o Moodle 4.0 o padrão é "#page-header", para o Moodle 3.11 o padrão é "#page-header .card-body, #page-header #course-header, #page-header".';
$string['percourseoverride'] = 'Substituições de curso';
$string['percourseoverrideconfig'] = 'Se ativado, será criado um campo de curso personalizado que permitirá definir quando cada curso individual poderá ser avaliado. O valor da configuração "Quando os cursos podem ser avaliados" será tratado como padrão';
$string['pluginname'] = 'Avaliações do curso';
$string['privacy:metadata:tool_courserating:reason'] = 'Razão';
$string['privacy:metadata:tool_courserating:reasoncode'] = 'Código de razão';
$string['privacy:metadata:tool_courserating:timecreated'] = 'Data/Hora da criação';
$string['privacy:metadata:tool_courserating:timemodified'] = 'Hora modificada';
$string['privacy:metadata:tool_courserating_flag'] = 'Avaliações sinalizadas';
$string['privacy:metadata:tool_courserating_flag:id'] = 'Eu ia';
$string['privacy:metadata:tool_courserating_flag:ratingid'] = 'ID de avaliação';
$string['privacy:metadata:tool_courserating_flag:userid'] = 'ID do usuário';
$string['privacy:metadata:tool_courserating_rating'] = 'Avaliações do curso';
$string['privacy:metadata:tool_courserating_rating:cohortid'] = 'Identidade do curso';
$string['privacy:metadata:tool_courserating_rating:hasreview'] = 'Tem revisão';
$string['privacy:metadata:tool_courserating_rating:id'] = 'Eu ia';
$string['privacy:metadata:tool_courserating_rating:rating'] = 'Avaliação';
$string['privacy:metadata:tool_courserating_rating:review'] = 'Revisão';
$string['privacy:metadata:tool_courserating_rating:timecreated'] = 'Data/Hora da criação';
$string['privacy:metadata:tool_courserating_rating:timemodified'] = 'Hora modificada';
$string['privacy:metadata:tool_courserating_rating:userid'] = 'Do utilizador';
$string['ratebyanybody'] = 'Os alunos podem avaliar o curso a qualquer momento';
$string['ratebycompleted'] = 'Os alunos podem avaliar somente após concluir o curso';
$string['ratebydefault'] = 'O valor padrão é: "{$a}"';
$string['ratebynoone'] = 'As avaliações do curso estão desabilitadas';
$string['ratedcategory'] = 'Categoria onde as avaliações de curso são permitidas';
$string['rating'] = 'Avaliação';
$string['rating_actions'] = 'Ações';
$string['rating_hasreview'] = 'Tem revisão';
$string['rating_nofflags'] = 'Número de sinalizações';
$string['rating_rating'] = 'Avaliação do curso';
$string['rating_review'] = 'Revisão';
$string['rating_timecreated'] = 'Data/Hora da criação';
$string['rating_timemodified'] = 'Hora modificada';
$string['ratingasstars'] = 'Avaliação do curso como estrelas';
$string['ratingdeleted'] = 'Avaliação excluída';
$string['ratinglabel'] = 'Avaliação do curso';
$string['ratingmode'] = 'Quando os cursos podem ser avaliados';
$string['ratingmodeconfig'] = 'Além disso, a capacidade de avaliar cursos é verificada';
$string['reindextask'] = 'Reindexar as avaliações do curso';
$string['review'] = 'Revisão (opcional)';
$string['revokeratingflag'] = 'Revogar';
$string['settingsdescription'] = 'A alteração de algumas configurações pode exigir a reindexação de todos os cursos e avaliações dos cursos. Isso acontecerá automaticamente na próxima execução do cron.';
$string['showallratings'] = 'Mostre tudo';
$string['showmorereviews'] = 'Mostre mais';
$string['summary_avgrating'] = 'Avaliação do curso';
$string['summary_cnt01'] = 'Proporção de avaliações de 1 estrela';
$string['summary_cnt02'] = 'Proporção de avaliações de 2 estrelas';
$string['summary_cnt03'] = 'Proporção de avaliações de 3 estrelas';
$string['summary_cnt04'] = 'Proporção de avaliações de 4 estrelas';
$string['summary_cnt05'] = 'Proporção de avaliações de 5 estrelas';
$string['summary_cntall'] = 'Número de avaliações';
$string['summary_cntreviews'] = 'Número de revisões';
$string['summary_ratingmode'] = 'Modo de avaliação do curso';
$string['summary_sumrating'] = 'Total de todas as avaliações';
$string['usehtml'] = 'Use o editor de rich text para revisões';
$string['usehtmlconfig'] = 'Permita que os estudantes usem um editor de rich text para as revisões, incluam links e anexem arquivos.';
$string['usersflagged'] = '{$a} usuários sinalizaram esta revisão como imprópria/ofensiva.';
$string['viewallreviews'] = 'Ver todas as revisões';
$string['youflagged'] = 'Você sinalizou esta revisão como inadequada/ofensiva.';
