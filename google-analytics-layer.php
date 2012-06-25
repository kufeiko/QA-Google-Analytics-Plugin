<?php

class qa_html_theme_layer extends qa_html_theme_base {

function head_script() {// insert Javascript into the <head>
		
		$google_UA = qa_opt('google_analytics_UA');
		$is_admin = (qa_get_logged_in_level() == 120) ? true : false;

    if (!empty($google_UA)) { 
			if (!($is_admin && qa_opt('google_analytics_show_for_admin'))) { // the loged in user is not the admin
				$this->content['script'][]='<script type="text/javascript">'.
				'var _gaq = _gaq || [];'.
        '_gaq.push([\'_setAccount\', \''.$google_UA.'\']);'.
        '_gaq.push([\'_trackPageview\']);'.
        '(function() {'.
        'var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;'.
        'ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';'.
        'var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);'.
        '})();'.
        '</script>';
				
			}
		}
  qa_html_theme_base::head_script();
  }
};
