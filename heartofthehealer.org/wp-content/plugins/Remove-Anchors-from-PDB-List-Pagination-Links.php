<?php
/**
 * Plugin Name: Remove Anchors from PDB List Pagination Links
 * Description: modifies the pagination links to to remove the anchor so that 
 *              theme smooth scrolling won't interfere with changing pages
 */
add_filter( 'pdb-pagination_configuration', 'xnau_fix_list_pagination_links' );
/**
 * modifies the pagination links to to remove the anchor
 *
 * @param array $config the pagination configuration array
 * @return array
 */
function xnau_fix_list_pagination_links ( $config ) {

 // split the added variables string at the hash #
 $parts = explode( '#', $config['add_variables'] );

 // only use everything in front of the hash
 $config['add_variables'] = $parts[0];
 
 return $config;
}