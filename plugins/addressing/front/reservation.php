<?php
/*
 * @version $Id: addressing.php 178 2014-04-02 08:05:45Z orthagh $
 -------------------------------------------------------------------------
 Addressing plugin for GLPI
 Copyright (C) 2003-2011 by the addressing Development Team.

 https://forge.indepnet.net/projects/addressing
 -------------------------------------------------------------------------

 LICENSE

 This file is part of addressing.

 Addressing is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Addressing is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Addressing. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

include ('../../../inc/includes.php');

Html::header(PluginAddressingReservation::getTypeName(1), '', "tools", "pluginaddressingmenu");

$PluginAddressingAddressing = new PluginAddressingReservation();

if ($PluginAddressingAddressing->canView() || Session::haveRight("config", UPDATE)) {
   Search::show("PluginAddressingReservation");

} else {
   Html::displayRightError();
}

Html::footer();
?>