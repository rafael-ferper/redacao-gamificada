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
 * Strings for component 'tool_clearbackupfiles', language 'pt_br', version '4.1'.
 *
 * @package     tool_clearbackupfiles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupcompletedlog'] = 'Durante esta operação, {$a->filecount} arquivos de backup de curso foram excluídos, com tamanho total de {$a->filesize} .';
$string['backupremovedlog'] = 'O arquivo de backup do curso {$a->filename} de tamanho {$a->filesize} foi excluído.';
$string['clearbackupcompleted'] = 'Limpar backup concluído';
$string['coursebackupremoved'] = 'Backup do curso excluído';
$string['filedeletedempty'] = 'Não há arquivos de backup para excluir.';
$string['filedeletedfooter'] = 'No total, {$a->filecount} arquivos de backup foram excluídos e {$a->filesize} de espaço do servidor foi liberado.';
$string['filedeletedheader'] = 'Os arquivos de backup do curso excluídos durante esta operação são os seguintes:';
$string['filename'] = 'Nome do arquivo';
$string['filesize'] = 'Tamanho do arquivo';
$string['pluginname'] = 'Limpar arquivos de backup';
$string['warningalert'] = 'Você tem certeza que quer continuar?';
$string['warningmsg'] = 'Observe que a limpeza de arquivos de backup é um processo irreversível, você não poderá restaurar arquivos de backup excluídos.';
