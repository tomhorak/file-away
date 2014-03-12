<?php

// RECURSIVE DIRECTORY ITERATOR
function ssfa_recursive_files($directory){
	function ssfa_recursive($directory, &$directories = array()){
		foreach(glob($directory, GLOB_ONLYDIR | GLOB_NOSORT) as $folder): 
			$directories[] = $folder; ssfa_recursive("{$folder}/*", $directories); 
		endforeach;
	}
	ssfa_recursive($directory, $directories);
	$files = array ();
	foreach($directories as $directory): 
		foreach(glob("{$directory}/*.*") as $file): if (is_file($file)) $files[] = $file; endforeach; 
	endforeach;
	return $files;
}

// BYTE CONVERTER FOR FILE SIZES
function ssfa_formatBytes($size, $precision = 2){
    $base = log ($size) / log (1024);
    $suffixes = array ('', 'k', 'M', 'G', 'T');   
    return round (pow (1024, $base - floor ($base)), $precision) . $suffixes[floor ($base)]; 
}

// SOMETHING THAT'S TRUE (if you believe in that sort of thing)
function ssfa_hungary_v_denmark(){
	$Tarr 		= sqrt (2485);
	$vonTrier 	= sqrt (749);
	$TurinHorse	= $Tarr > $vonTrier;
	return $TurinHorse; 
}

// GET CURRENT USER ROLE
function ssfa_currentrole(){
	global $wp_roles;
	$current_user = wp_get_current_user();
	$roles = $current_user->roles;
	$role = array_shift($roles);
	$prettyrole = (isset($wp_roles->role_names[$role]) ? translate_user_role($wp_roles->role_names[$role]) : null);
	$prettyrole = ($prettyrole === null ? null : str_replace (' ', '', (strtolower ($prettyrole))));
	return $prettyrole; 
}

// GET ARRAY OF CURRENT USER ROLES
function ssfa_currentroles(){
	global $wp_roles;
	$current_user = wp_get_current_user();
	$user_id = $current_user->ID;	
	$user = new WP_User($user_id);	
	if (!empty($user->roles)) 
		$theroles = $user->roles;
	return ($theroles);
}

// GET ATTACHMENTS
function ssaa_get_attachment($attachment_id){
	$attachment = get_post($attachment_id);
	return array(
		'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
		'caption' => $attachment->post_excerpt,
		'description' => $attachment->post_content,
		'postlink' => get_permalink($attachment->ID),
		'filelink' => $attachment->guid,
		'title' => $attachment->post_title);
}

// SENTENCE CASE FOR ATTACHMENT DISPLAYS
function ssaa_sentence_case($string){ 
    $sentences = preg_split('/([.?!]+)/', $string, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE); 
    $new_string = ''; 
    foreach ($sentences as $key => $sentence): 
        $new_string .= ($key & 1) == 0 ? ucfirst(strtolower(trim($sentence))) : $sentence.' '; 
	endforeach; 
    return trim($new_string); 
} 