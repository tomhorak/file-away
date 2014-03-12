<?php
$current_user = wp_get_current_user ( );
$fa_userid = get_current_user_id();
$fa_username = strtolower ( $current_user->user_login );
$fa_firstlast = strtolower ( $current_user->user_firstname ) . strtolower ( $current_user->user_lastname );
$blogusers = get_users('blog_id=1&orderby=nicename');
echo '<p><dl class="accordion">
<dt><label>Directory Security</label></dt>
<dd style="display:none;">
To prevent users from directly accessing your directory listings, you have two options, and a combination of both is preferable. 
<br />
<br />
1. The simplest way to prevent direct directory listing access is to disable all directory listings. This usually involves adding a special command to the .htaccess file found in your root directory, or some other similar method. Contact your web host to find out how to do this safely and correctly for your particular server. Do not attempt to do this unless you have help or already know what you are doing. 
<br />
<br />
2. Include a simple index.html file in each and every directory that you create for file storage. Doing so is easy. Just <a id="index-html-link" href="#" data-clipboard-target="index-html" data-clipboard-text="Default clipboard text from attribute">grab this</a> and paste it into a blank Notepad document, then save the document as <code>index.html</code>. Keep this file on hand, and copy it into any and all directories that you create. This will prevent users from direct access to your directory listings. 
<textarea id="index-html" cols="1" rows="1" disabled="disabled" style="display:none;"><html><head><title>Access Denied</title></head><body bgcolor="#000000"></body></html></textarea>
			<script>
			var clip = new ZeroClipboard( document.getElementById("index-html-link"), 
				{moviePath: "'.SSFA_ADMIN_JS_URL.'ZeroClipboard.swf"});
				clip.on( "complete", function(client, args){alert("You grabbed it.");});
			</script>
</dd>';
echo '<dt><label>File Management</label></dt>
<dd style="display:none;">
<dl class="accordion-secondary">
			<dt><label>Directory Management</label></dt>
			<dd style="display:none;">
			The best and simplest solution for creating your file directories and uploading your files to them is an FTP client like <a href="https://filezilla-project.org/" target="_blank">FileZilla</a>. It has drag-and-drop functionality allowing you to upload multiple directories and their contents all at once, from your PC or Mac straight to your server. If, however, you need a purely WordPress solution to directory management, there aren\'t many terrific options available, but one that works fairly well is <a href="http://wordpress.org/plugins/wp-filemanager/" target="_blank">WP-FileManager</a>.
			<br />
			<br />
			</dd>
			<dt><label>Attachment Management</label></dt>
			<dd style="display:none;">
			For all your WordPress attachment needs, File Away cannot recommend Dan Holloran\'s <a href="http://wordpress.org/plugins/wp-better-attachments/" target="_blank">WP Better Attachments</a> highly enough. Directly from your post or page editor, it will allow you to add attachments (images, documents, music, whatever), see a list of all files currently attached to the post or page, edit each attachment\'s Title, its Caption, and its Description. The Caption and Description fields can be added to [attachaway]\'s Sortable Data Tables as custom columns. (See the tutorial on Shortcode Attributes, or the info links on the shortcode generator, for details.) WP Better Attachments also allows you to remove attachments from the current page, and numerous other things. It provides everything you will need to compliment the [attachaway] shortcode. 
			<br />
			<br />
			Note that, with attachments, the [attachaway] shortcode will look first for the Title of the file, and if that is not defined, the shortcode will prettify the filename, subtract its extension, and try to give it a nice title-case. This is what will appear as the filename on all [attachaway] lists and tables. You can override the file name by defining the Title field, and with WP Better Attachments, it\'s a breeze. 
			<br />
			<br />
			</dd>			
			</dl>
</dd>';
echo '<dt><label>Shortcode Attributes</label></dt>
<dd style="display:none;">
The [fileaway] shortcode has 28 attributes. The [attachaway] shortcode has 27. Not a single one is required. Just entering [fileaway] into your page content will, by default, display all files in Base Directory 1, in an Alphabetical List, with the Minimal-List style, and random colors, excluding all web code documents and any filenames or file types permanently excluded on the Basic Configuration page. Just entering [attachaway] will do the same, except it will grab the current post\'s/page\'s attachments, rather than the files from Base Directory 1. But to fine tune the functionality and appearance of your file display, the two shortcodes offer a total of 31 attributes. 
<br />
<br />
The point-and-click shortcode generator will take care of these attributes for you, but if you want to build your shortcodes manually, or just want to know what all is underneath the machinery, below is a table detailing each one. To build a shortcode manually, follow this format: <code>[fileaway attribute="value" attribute="value"]</code> or <code>[attachaway attribute="value" attribute="value"]</code>, replacing "attribute" and "value" with the names of the attributes of your choosing, and their accepted values, detailed in the table below:
<br>
<br>';
echo '<table id="ssfa-table" class="ssfa-minimalist ssfa-left ssfa-attributes">
<thead><tr>
<th class="ssfa-minimalist-first-column">shortcode</th>
<th>attribute</th>
<th>values</th>
<th>for&nbsp;type</th>
<th class="ssfa-minimalist-last-column">notes</th>
</tr></thead>
<tbody>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>type</td>
<td>list | table</td>
<td></td>
<td class="ssfa-minimalist-last-column">Will default to "list" if this attribute is not used.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway]</td>
<td>base</td>
<td>1, 2, 3, 4, 5</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">These correspond to the Base Directories established under the Basic Configuration tab. Will default to "1" (i.e., Base Directory 1) if this attribute is not used.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway]</td>
<td>sub</td>
<td>User defined. Example: files/spreadsheets/2013</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">Picks up from where the selected Base Directory path leaves off. Dynamic Path codes can be used. (See "Dynamic Paths")</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway]</td>
<td>recursive</td>
<td>recursive=ohlordyitsrecursive (or recursive=anything) to enable; leave out to disable</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">If Recursive Directory Iteration is enabled, the files from the specified directory, and from all subdirectories, will be output by the shortcode. If disabled, only the files from the specified directory will be displayed.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[attachaway]</td>
<td>postid</td>
<td>User defined. Example: 1028</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">By default, the [attachaway] shortcode will display the attachments of the page where the shortcode is inserted. To instead display attachments from a different post or page, specify the post id using this attribute. Attach Away has added a Post ID column to "All Posts" and "All Pages" for quick reference.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>heading</td>
<td>User defined. Example: My Essays</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">Adds an h3 heading to the top of your list or table.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>hcolor</td>
<td>black | silver | red | blue | green | brown | orange | purple | pink | (custom)</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">Defaults to random if this attribute is not used.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>color</td>
<td>black | silver | red | blue | green | brown | orange | purple | pink | (custom)</td>
<td>list</td>
<td class="ssfa-minimalist-last-column">Specifies the link color in Alphabetical Lists. Does not apply to Tables. Defaults to random color if this attribute is not used.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>accent</td>
<td>black | silver | red | blue | green | brown | orange | purple | pink | (custom)</td>
<td>list</td>
<td class="ssfa-minimalist-last-column">Specifies the accent color in Alphabetical Lists. Does not apply to Tables. Defaults to match the link color if this attribute is not used.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>iconcolor</td>
<td>black | silver | red | blue | green | brown | orange | purple | pink | (custom)</td>
<td>list</td>
<td class="ssfa-minimalist-last-column">Specifies the color of the icons in Alphabetical Lists. Does not apply to Tables. Defaults to random color if this attribute is not used.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>style</td>
<td>For Lists:<br />
minimal-list | silk | (custom)
<br />
<br />
For Tables:<br />
minimalist | silver-bullet | (custom)
</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">Defaults to minimal-list or minimalist if this attribute is not used.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>display</td>
<td>inline | 2col</td>
<td>list</td>
<td class="ssfa-minimalist-last-column">Applies only to lists. If not used, the list will be displayed vertically. "Inline" will display the list items side-by-side. "2col" will display them in two columns. You may have to play with the width attribute to get them to look right, depending on the length of your file names.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>corners</td>
<td>sharp | roundtop | roundbottom | roundleft | roundright | elliptical</td>
<td>list</td>
<td class="ssfa-minimalist-last-column">Defaults to all corners rounded if not used. Does not apply to the minimal-list style, or to tables.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>width</td>
<td>User defined. Any numeric integer.</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">For tables, defaults to 100% if not used. For lists, defaults to auto-width if not used. You will set your width-type using the next attribute. Here you just enter the integer. So, e.g., 75 for 75%. 640 for 640 pixels.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>perpx</td>
<td>% | px</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">Defaults to % if not used.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>align</td>
<td>left | right | none</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">Choosing "left" or "right" will float your list or table to the left or right of the page, allowing other page content to wrap around the list or table, providing your width specification leaves enough room for the content to wrap. Choosing "none" will prevent content wrapping and align the display to the left. Defaults to "left" (with wrapping) if not used.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>textalign</td>
<td>left | right</td>
<td>table</td>
<td class="ssfa-minimalist-last-column">Text in tables will be centered by default. Use this attribute to override that. Applies to tables only.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>icons</td>
<td>paperclip | none</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">If not used, file-type icons will be the default.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway]</td>
<td>mod</td>
<td>yes | no</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">Specifies whether to display the date and time modified of each file. If not used, defaults to "yes" for tables and "no" for lists. In tables, users can sort the table by date modified by clicking on the modified column. Does not apply to the [attachaway] shortcode as WordPress does not provide date modified data for page attachments.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>size</td>
<td>no</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">Specifies whether to display the file size for each file. Defaults to yes if not used. In tables, users can sort the table by file size by clicking on the file size column.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>images</td>
<td>only | none</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">By default, image file types will be included along with all other file types in your displays. Choosing "only" will mean that only image files will be displayed in your list or table. Choosing "none" will exclude all image files from your list or table. Image types are: .bmp, .gif, .jpg, .jpeg, .png, .tif, .tiff</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>code</td>
<td>yes</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">By default, all web code documents will be excluded from your file and attachment displays. To include web code file types, use this attribute with a value of "yes". Code file types excluded by default are: .asp, .cfm, .cgi, .class, .cpp, .css, .htm, .html, .java, .js, .less, .php, .pl, .py, .rb, .sass, .scss, .shtm, .shtml, .xhtm, .xhtml, and .yml.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>only</td>
<td>User defined.</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">If you\'d like, you can enter a comma-separated list of filenames and/or file extensions here. Doing this will filter out anything not here entered. Do not use quotation marks. Just separate each item with a comma. Example: 
<br />
<br />
<code>My Polished Essay, .mp3, Gertrude Stein Essay, .jpg</code>
<br />
<br />
This will tell the shortcode only to ouput files that have the string "My Polished Essay" or "Gertrude Stein Essay," and any file with the extension .mp3 or .jpg</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>exclude</td>
<td>User defined.</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">Here you can enter a comma-separated list of filenames or file extensions to exclude from your list. Example: 
<br />
<br />
<code>.doc, .ppt, My Unfinished Draft Essay, Embarrassing Photo Name</code> 
<br />
<br />
This will exclude all .doc and .ppt files from your list, as well as your ugly first draft and that photo of you after that party.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>include</td>
<td>User defined.</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">This option also takes a comma-separated list of files or file extensions, but it is primarily for correcting / fine tuning. For instance, if you excluded ".doc" in the above field, you may want to include ".docx" here, so it isn\'t filtered out, if that\'s your fancy.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>showto</td>
<td>User defined.</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">This option takes a comma-separated list of user roles. Only users with one of the roles specified using the \'showto\' attribute will have access to the file/attachment display.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>hidefrom</td>
<td>User defined.</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">This option also takes a comma-separated list of user roles. Users with one of the roles specified using the \'hidefrom\' attribute will <em>not</em> have access to the file/attachment display. If this attribute is used, logged-out users are also prevented from seeing the file/attachment display.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>paginate</td>
<td>yes</td>
<td>table</td>
<td class="ssfa-minimalist-last-column">With sortable data tables, by default, all files will be displayed. If you have a large amount of files in your table, you may wish to activate pagination. If pagination is on, the default number of files/attachments per table page is 15. You can set a different number using the next attribute. </td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>pagesize</td>
<td>User defined. Example: 25</td>
<td>table</td>
<td class="ssfa-minimalist-last-column">Enter a numeric integer to specify the amount of files/attachments per page on paginated tables. Defaults to 15 if this attribute is not used.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>search</td>
<td>no</td>
<td>table</td>
<td class="ssfa-minimalist-last-column">If this attribute is not used, by default a search field will be placed at the top-right of Sortable Data Tables, allowing the user to search the contents of the files in that table, filtering out non-matches. To remove the search field, use this attribute with a value of "no".</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway]</td>
<td>customdata</td>
<td>User defined. See note.</td>
<td>table</td>
<td class="ssfa-minimalist-last-column">With the [fileaway] shortcode, you can add multiple custom columns to your table and add custom data to any file you want. Name the columns here, e.g., <code>customdata="Artist"</code>, then to add data to your files, just put the data in between square brackets [ ] at the *end* of your file name, *before* the extension. If you want to add more than one column, separate the column names here with a semi-colon (e.g., <code>customdata="Artist; Label; Year"</code>), and separate the corresponding data in the fileneames with a semi-colon. Example filenames: 
<br />
<br />
<code>My Funny Valentine [Chet Baker; Blue Note; 1994].mp3</code><br />
<code>So What [Miles Davis; Columbia; 1959].mp3</code><br />
<code>Birdland [Weather Report; Columbia; 1977].mp3</code>
<br />
<br />
The data in square brackets will be automatically added to the column(s) that you create here. This feature can be used for any purpose you like.
<br />
<br />
Note that anything in square brackets will only show up in Data Tables, and, in that case, only if you name your custom column(s) here. 
</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[attachaway]</td>
<td>capcolumn</td>
<td>User defined. See note.</td>
<td>table</td>
<td class="ssfa-minimalist-last-column">With the [attachaway] shortcode, you can add a custom column to your table and add custom data to any attachment file you want. For this particular column, the data will be pulled from the attachment\'s "Caption" field. Name the column using the "capcolumn" attribute, anything you want, e.g., <code>capcolumn="Artist"</code>. Then just add the specific data to the Caption field for each attachment file. Example:
<br />
<br />
<code>Caption Column Name: Artist</code><br />
<code>Attachment 1 Caption: Jon Bon Jovi</code><br />
<code>Attachment 2 Caption: Michael J. Iafrate</code>
<br />
<br />
For easy management of your attachments without leaving the page editor, File Away recommends the <a href="http://wordpress.org/plugins/wp-better-attachments/" target="_blank">WP Better Attachments</a> plugin by Dan Holloran.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[attachaway]</td>
<td>descolumn</td>
<td>User defined. See note.</td>
<td>table</td>
<td class="ssfa-minimalist-last-column">With the [attachaway] shortcode, you can add a second custom column to your table and add custom data to any attachment file you want. For this column, the data will be pulled from the attachment\'s "Description" field. Name the column using the "descolumn" attribute, anything you want, e.g., <code>descolumn="Author"</code>. Then just add the specific data to the Description field for each attachment file. Example:
<br />
<br />
<code>Description Column Name: Author</code><br />
<code>Attachment 1 Description: Vaclav Havel</code><br />
<code>Attachment 2 Description: Terry Eagleton</code>
<br />
<br />
For easy management of your attachments without leaving the page editor, File Away recommends the <a href="http://wordpress.org/plugins/wp-better-attachments/" target="_blank">WP Better Attachments</a> plugin by Dan Holloran.</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>sortfirst</td>
<td>For both shortcodes: filename | filename-desc | type | type-desc | size | size-desc
<br />
<br />
For [fileaway] only: mod | mod-desc | custom | custom-desc
<br />
<br />
For [attachaway] only: caption | caption-desc | description | description-desc
</td>
<td>table</td>
<td class="ssfa-minimalist-last-column">Choose by which column to sort on initial page load, either ascending or descending. filename (ascending) is the default if the attribute is not used.<br><br>
Note: If you are using multiple custom columns in a [fileaway] table, and you wish to sort initially by one of those custom columns, set your Initial Sorting to either <code>sortfirst="custom"</code> or <code>sortfirst="custom-desc"</code>, then in your <code>customdata</code> attribute, put an asterisk(*) next to the name of the column by which you wish to sort initially. Example: <code>customdata="Artist*; Label; Year"</code> Don\'t worry. The asterisk will be removed before it gets to the page. 
</td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway]</td>
<td>nolinks</td>
<td>true</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">Defaults to false if left blank. If Disable Links is set to \'true\', the hypertext reference is removed from the &#60;a&#62; tag. This is in case you want, for instance, to display successful uploads without providing links to the files. You\'ll still want to style your links using the shortcode options, but the link functionality will be removed. </td>
</tr>';
echo '<tr>
<td class="ssfa-minimalist-first-column">[fileaway], [attachaway]</td>
<td>debug</td>
<td>on</td>
<td>list, table</td>
<td class="ssfa-minimalist-last-column">If nothing is showing up on the page when you insert the shortcode, it\'s either because there are no files in the directory (or attached to the page) that you\'re pointing to, or because you\'ve excluded anything that\'s in the directory (or attached to the page) that you\'re pointing to. Activating the debug feature will display a box in the page content that will tell you the directory or the attachment page to which your shortcode is pointing.</td>
</tr>';
echo '</tbody></table></dd>';
echo '<dt><label>Dynamic Paths</label></dt>
<dd style="display:none;">
<code>Note:</code> Below these instructions there is a table with a list of all your site\'s users, each column displaying how each dynamic code will be rendered for each user. Use this table as a reference when creating your directories.
<br />
<br />
You can create dynamic paths to your user\'s files using one or more of File Away\'s codewords. This means that you can point to a theoretically unlimited number of different file directories, all with a single shortcode, and each logged-in user will only ever see the files they are meant to see. 
<br />
<br />
The four codes are: <code>fa-firstlast</code>, <code>fa-username</code>, <code>fa-userid</code>, and <code>fa-userrole</code>. You can use them separately, or in combination with each other. You can use them in your Base Directory paths, and/or in your Sub Directory specification in the shortcode generator. Wherever the codes are used in the path, they will be replaced dynamically by the <code>firstname+lastname</code>, the <code>username</code>, the <code>user ID number</code>, or the <code>user role</code>, respectively, of whoever is logged in. Thus, if you create folders for your users such as: "bobsmith" or "bobsloginname" or "15" or "editor", using these dynamic codes will point whoever is logged in to their own folders. You can combine them, or use them separately. You can use them along with static words. You can use them more than once in the same path. 
<br />
<br />
If you\'ve created directories that are named (or partially named) for your users\' first and last names (e.g., jackhandy), user id (e.g., 15), username (e.g., admin), or user role (e.g., subscriber), the codes will dynamically point whoever is logged in to their appropriate folder. The directories you create for your users must be all lowercase with no spaces. If the username is \'JoanJett,\' the directory should be: <code>joanjett</code>. Examples: 
<br />
<br />
<code>uploads/fa-userrole/fa-firstlastfa-userid</code> will point dynamically, depending on who is logged in, to directories like: <code>uploads/editor/jackhandy15</code> or <code>uploads/subscriber/joanjett58</code>.
<br />
<br />
<code>files/fa-userid/fa-firstlast-docs</code> will point to: <code>files/15/bobsmith-docs</code> or <code>files/14/maryjane-docs</code> <br />
<code>uploads/fa-firstlastfa-userid/photos</code> will point to: <code>uploads/bobsmith15/photos</code> or <code>uploads/maryjane14/photos</code>
<br />
<br />
Note that these codes do not need to be separated from whatever comes before or after them. <code>misterfa-firstlastisawesome</code> will render: <code>misterbobsmithisawesome</code>. You can even pluralize your user role directories. Rather than creating directories called <code>administrator</code>, <code>editor</code>, and <code>author</code>, you can create ones called <code>administrators</code>, <code>editors</code>, and <code>authors</code>. Then when you enter the code, just append an \'s\' to the end: <code>fa-userroles</code>. The shortcode is translating the code to the role in the singular, and you\'re just adding the \'s\' to the path as a static character.
<br />
<br />
A few small points to make about dynamic paths: <ul class="ssfa-bulletlist">
<li>You can use them in your base directories or in your sub directories specified in the shortcode generator.</li>
<li>If a dynamic path is used in your shortcode, the file list or table will not be visible to logged-out users.</li>
<li>If no files are found in the directory, the list or table will not be visible. That way, with dynamic paths, only those logged-in users who have something to see will be able to see anything.</li>
<li>For clarity\'s sake: using these codes does <i>not</i> create the directories. You have to create the directories manually, then these codes will point to something real.</li>
<li>Note also that the folders you create for a user\'s first and last name must be all lowercase with no spaces, and must match the user\'s first and last names as recorded in their user profile. See the table below for reference when creating your directories.</li>
<li>Folders created to match usernames (user logins) must also be all lowercase with no spaces, even if the username is actually "BobSmith." Again, see the table below for reference.</li>
<li>There\'s a debug feature in the shortcode that you can use if you\'re having trouble with your paths.</li></ul>
<br />
<br />
<div id="ssfa-table-wrap" style="margin: 10px 0 0; width:70%;">
<div class="ssfa-search-wrap">
<span class="ssfa-searchicon ssfa-icon-search" aria-hidden="true"></span>
<input id="filter-dynamic-paths" class="ssfa-searchfield" placeholder="SEARCH" value="" name="search" id="search" type="text" />
</div>
<script type="text/javascript">jQuery(function(){jQuery(".footable").footable();});</script>
<table id="ssfa-table" data-filter="#filter-dynamic-paths" data-page-size="25" class="footable ssfa-sortable ssfa-minimalist">
<thead><tr>
<th class="ssfa-minimalist-first-column" data-sort-initial="true" title="Click to Sort">fa-firstlast</th>
<th title="Click to Sort">fa-username</th>
<th title="Click to Sort">fa-userid</th>
<th class="ssfa-minimalist-last-column" title="Click to Sort">fa-userrole</th>
</tr></thead>
<tfoot><tr>
<td colspan="100"><div class="ssfa-pagination ssfa-pagination-centered hide-if-no-paging"></div></td>
</tr></tfoot> 
<tbody>';
foreach ($blogusers as $user) {
	$userrole = new WP_User( $user->ID );
	echo '
		<tr>
		<td class="ssfa-minimalist-first-column">' . strtolower ( $user->user_firstname ) . strtolower ( $user->user_lastname ) . '</td>
		<td>' . strtolower ( $user->user_login ) . '</td>
		<td>' . $user->ID . '</td>			
		<td class="ssfa-minimalist-last-column">' . strtolower ( $userrole->roles[0] ) . '</td>
		</tr>'; }
echo '</tbody></table></div>
</dd>';
echo '<dt><label>Formidable Pro</label></dt>
<dd style="display:none;">
Users of the <a href="http://formidablepro.com/" target="_blank">Formidable Pro</a> plugin can create dynamic paths in File Away lists and tables inside Formidable custom displays, following the same basic principles outlined under "Dynamic Paths" above. 
<br />
<br />
When inserting your [fileaway] shortcode inside a custom display, you can set a base directory or your sub directory attribute to point dynamiclly to directories named for any form field datum or user meta, using Formidable\'s shortcodes inside the [fileaway] shortcode. Examples:
<br />
<br />
<code>[fileaway base="1" sub="[125 show=\'user_login\']"]</code>, where "125" is the field ID number of your form\'s user ID field. This will point dynamically to any directory named for the user_login of the custom display\'s current form entry. So if base=1 equals something like, <code>client-files/docs</code>, then the sub directory would append each entry\'s username to the end of the path, e.g., <code>client-files/docs/jackhandy</code> or <code>client-files/docs/joanjett</code>. 
<br />
<br />
<code>[fileaway base="2" sub="hr/[125 show=\'first_name\'][125 show=\'last_name\']/pdfs"]</code>, if Base Directory 2 equals <code>staff-files</code>, would point to: <code>staff-files/hr/jeremyrenner/pdfs</code> or <code>staff-files/hr/tomcruise/pdfs</code>. 
<br />
<br />
You can do the same with <code>[125 show=\'display_name\']</code> and <code>[125 show=\'ID\']</code>, or, technically, any field shortcode from any form, e.g., <code>[889]</code>. As long as you have manually-created directories that match the data output by the Formidable fields and user meta shortcodes, you can use File Away to point dynamically to virtually anything. In this case, the output will be dynamic based not on who is logged in, as with the File Away dynamic path codes, but dynamic based on the currently displayed entry in your Formidable custom display.
<br />
<br />
Unlike File Away\'s own dynamic path codewords (which forces translated output to lowercase), Formidable shortcodes will be case sensitive, either upper or lowercase, depending on user input. Use the debug feature in the <code>[fileaway]</code> shortcode for help figuring out where your paths are pointing. And once again, if no files are in the directory to which the shortcode is pointing, nothing will be displayed. This means you can add a shortcode that points dynamically to different directories, and worry about adding files to those directories at your own pace. The shortcode will not output anything until there is something in the (dynamically determined) directory to display.
</dd>';
echo '<dt><label>Timezone Settings</label></dt>
<dd style="display:none;">
For your Date Modified data on lists and tables, the shortcode automatically grabs the timezone settings from your WordPress installation. If, however, you use the UTC timezone format in your WordPress settings, the time reflected in your Date Modified column will be UTC with no local offset. If you want the times to accurately reflect your local time, you need to go to Settings > <a href="options-general.php" target="_blank">General</a> and make sure your timezone format is set to the Country/City format. So if you lived in Chicago, you\'d set it to <code>America/Chicago</code>, rather than <code>UTC+6</code>.
</dl></p>';
?>