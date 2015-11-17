<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
if (!isset($params['background'])) {
    $params['background'] = '';
}
if ($params['background'] !== false) {
    echo '<style>body { background: rgba(0, 0, 0, 0) linear-gradient(#d3d8e8, white) repeat scroll 0 0; }</style>';
}
echo '<div class="ossn-layout-contents">';
echo $params['content'];
echo '</div>';
