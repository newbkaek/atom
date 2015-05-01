<?php

/*
 * This file is part of the Access to Memory (AtoM) software.
 *
 * Access to Memory (AtoM) is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Access to Memory (AtoM) is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Access to Memory (AtoM).  If not, see <http://www.gnu.org/licenses/>.
 */

class arElasticSearchPluginQueryRepository extends arElasticSearchPluginQuery
{
  const INDEX_TYPE = 'QubitRepository';

  // Arrays not allowed in class constants
  public static
    $FACETS = array(
      'languages' =>
        array('type' => 'term',
              'field' => 'i18n.languages',
              'size' => 10),
      'types' =>
        array('type' => 'term',
              'field' => 'types',
              'size' => 10),
      'regions' =>
        array('type' => 'term',
              'field' => 'contactInformations.i18n.en.region.untouched',
              'size' => 10),
      'geographicSubregions' =>
        array('type' => 'term',
              'field' => 'geographicSubregions',
              'size' => 10),
      'locality' =>
        array('type' => 'term',
              'field' => 'contactInformations.i18n.en.city.untouched',
              'size' => 10),
      'thematicAreas' =>
        array('type' => 'term',
              'field' => 'thematicAreas',
              'size' => 10));
}
