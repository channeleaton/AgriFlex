<?php

add_filter( 'agriflex_about', 'research_about', 10, 1 );
function research_about( $about ) {

  $html .= '<h4>About</h4>';
  $html .= '<a href="http://www.youtube.com/watch?v=UnLkKMJasXk"><img src="' . get_bloginfo( 'template_directory' ) . '/images/research-video-pic.jpg?v=100" alt="link to Texas A&amp;M Research about video" /></a>';
  $html .= '<p><a href="http://agriliferesearch.tamu.edu/">Texas A&amp;M AgriLife Research</a> is the state&apos;s premier research agency in agriculture, natural resources, and the life sciences. Our research spans numerous scientific disciplines and is international in scope.</p>';
  $html .= '<ul>';
  $html .= '<li><a href="http://agriliferesearch.tamu.edu/research-units/">Research Units</a></li>';
  $html .= '<li><a href="http://agriliferesearch.tamu.edu/about/">About</a></li>';
  $html .= '<li><a href="http://agriliferesearch.tamu.edu/resources/">Resources</a></li>';
  $html .= '<li><a href="http://agriliferesearch.tamu.edu/careers/">Careers</a></li>																						 									';
  $html .= '</ul>';

  return $html;

} // research_about

add_filter( 'footer_links', 'research_links', 10, 1 );
function research_links( $links ) {

  $html .= '<h4>Research Topics</h4>';
  $html .= '<a href="http://agriliferesearch.tamu.edu/"><img src="' . get_bloginfo( 'template_directory' ) . '/images/agrilife-research-footer-logo.png?v=100" alt="Texas A and M AgriLife Research Logo" /></a>	';
  $html .= '<ul>';
  $html .= '<li><a href="http://agriliferesearch.tamu.edu/topics/animals/">Animals</a></li>';
  $html .= '<li><a href="http://agriliferesearch.tamu.edu/topics/crops-plants/">Crops &amp; Plants</a></li>';
  $html .= '<li><a href="http://agriliferesearch.tamu.edu/topics/natural-resources/">Environment &amp; Natural Resources</a></li>';
  $html .= '<li><a href="http://agriliferesearch.tamu.edu/topics/health-and-food/">Health &amp; Food Science</a></li>';
  $html .= '<li><a href="http://agriliferesearch.tamu.edu/topics/policy-and-economics/">Policy &amp; Economics</a></li>';
  $html .= '</ul>';

  return $html;

} // research_links