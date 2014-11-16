<?php
/**
 * Theme related functions. 
 *
 */
 
/**
 * Get title for the webpage by concatenating page specific title with site-wide title.
 *
 * @param string $title for this page.
 * @return string/null whether the favicon is defined or not.
 */
function get_title($title) {
  global $eros;
  return $title . (isset($eros['title_append']) ? $eros['title_append'] : null);
}