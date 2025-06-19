<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'gu',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'ખરાબ વિનંતી. તમે જે લિંકને અનુસરી છે તે ખોટી અથવા જૂની છે.',
'No view'							=>	'તમારી પાસે આ ફોરમ જોવાની પરવાનગી નથી.',
'No permission'						=>	'તમારી પાસે આ પૃષ્ઠને ઍક્સેસ કરવાની પરવાનગી નથી.',
'Bad referrer'						=>	'ખરાબ csrf_hash. તમને આ પૃષ્ઠ પર અનધિકૃત સ્ત્રોતમાંથી સંદર્ભિત કરવામાં આવ્યા હતા.',
'Bad csrf hash'						=>	'ખરાબ CSRF હેશ. તમને આ પૃષ્ઠ પર અનધિકૃત સ્ત્રોતમાંથી સંદર્ભિત કરવામાં આવ્યા હતા.',
'No cookie'							=>	'તમે સફળતાપૂર્વક લોગ ઇન થયા હોય તેવું લાગે છે, જોકે કૂકી સેટ કરવામાં આવી નથી. કૃપા કરીને તમારી સેટિંગ્સ તપાસો અને જો લાગુ હોય, તો આ વેબસાઇટ માટે કૂકીઝ સક્ષમ કરો.',
'Pun include extension'  			=>	'Unable to process user include %s from template %s. "%s" files are not allowed',
'Pun include directory'				=>	'Unable to process user include %s from template %s. Directory traversal is not allowed',
'Pun include error'					=>	'Unable to process user include %s from template %s. There is no such file in neither the template directory nor in the user include directory',

'Hidden text' => 'છુપાયેલ લખાણ',
'Show' => 'બતાવો',
'Hide' => 'છુપાવો',

// Miscellaneous
'Announcement'						=>	'જાહેરાત',
'Options'							=>	'વિકલ્પો',
'Submit'							=>	'સબમિટ કરો', // "Name" of submit buttons
'Ban message'						=>	'તમને આ ફોરમમાંથી પ્રતિબંધિત કરવામાં આવ્યા છે.',
'Ban message ip'                    =>  'તમારું IP સરનામું આ ફોરમ પર પ્રતિબંધિત છે.',
'Ban message 2'						=>	'પ્રતિબંધ આના અંતે સમાપ્ત થાય છે',
'Ban message 3'						=>	'તમને પ્રતિબંધિત કરનાર સંચાલક અથવા મધ્યસ્થીએ નીચેનો સંદેશ છોડ્યો છે:',
'Ban message 4'						=>	'કૃપા કરીને કોઈપણ પૂછપરછ ફોરમ સંચાલકને આના પર મોકલો',
'Never'								=>	'ક્યારેય નહીં',
'Today'								=>	'આજે',
'Yesterday'							=>	'ગઈકાલે',
'Info'								=>	'માહિતી', // A common table header
'Go back'							=>	'પાછા જાઓ',
'Maintenance'						=>	'જાળવણી',
'Redirecting'						=>	'રીડાયરેક્ટ કરી રહ્યું છે',
'Click redirect'					=>	'જો તમે વધુ રાહ જોવા માંગતા ન હોવ (અથવા જો તમારું બ્રાઉઝર આપમેળે તમને ફોરવર્ડ ન કરે તો) અહીં ક્લિક કરો',
'on'								=>	'ચાલુ', // As in "BBCode is on"
'off'								=>	'બંધ',
'Invalid email'						=>	'તમે દાખલ કરેલ ઇમેઇલ સરનામું અમાન્ય છે.',
'Required'							=>	'(આવશ્યક)',
'required field'					=>	'આ ફોર્મમાં આવશ્યક ક્ષેત્ર છે.', // For javascript form validation
'Last post'							=>	'છેલ્લી પોસ્ટ',
'by'								=>	'દ્વારા', // As in last post by some user
'New posts'							=>	'નવી પોસ્ટ્સ', // The link that leads to the first new post
'New posts info'					=>	'આ વિષયમાં પ્રથમ નવી પોસ્ટ પર જાઓ.', // The popup text for new posts links
'Username'							=>	'વપરાશકર્તાનામ',
'Password'							=>	'પાસવર્ડ',
'Email'								=>	'ઇમેઇલ',
'Send email'						=>	'ઇમેઇલ મોકલો',
'Moderated by'						=>	'દ્વારા મધ્યસ્થી',
'Registered'						=>	'નોંધાયેલ',
'Subject'							=>	'વિષય',
'Message'							=>	'સંદેશ',
'Topic'								=>	'વિષય',
'Forum'								=>	'ફોરમ',
'Posts'								=>	'પોસ્ટ્સ',
'Replies'							=>	'જવાબો',
'Pages'								=>	'પૃષ્ઠો:',
'Page'								=>	'પૃષ્ઠ %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'[url] ટેગ:',
'img tag'							=>	'[img] ટેગ:',
'Smilies'							=>	'સ્માઇલીઝ:',
'and'								=>	'અને',
'Image link'						=>	'છબી', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'લખ્યું:', // For [quote]'s
'Mailer'							=>	'%s', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'મહત્વપૂર્ણ માહિતી',
'Write message legend'				=>	'તમારો સંદેશ લખો અને સબમિટ કરો',
'Previous'							=>	'પહેલાંનું',
'Next'								=>	'આગળ',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'શીર્ષક',
'Member'							=>	'સભ્ય', // Default title
'Moderator'							=>	'મધ્યસ્થી',
'Administrator'						=>	'સંચાલક',
'Banned'							=>	'પ્રતિબંધિત',
'Guest'								=>	'મહેમાન',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] મેળ ખાતા [%1$s] વિના મળ્યું',
'BBCode error invalid nesting'		=>	'[%1$s] [%2$s] ની અંદર ખોલવામાં આવ્યું હતું, આની મંજૂરી નથી',
'BBCode error invalid self-nesting'	=>	'[%s] પોતાની અંદર ખોલવામાં આવ્યું હતું, આની મંજૂરી નથી',
'BBCode error no closing tag'		=>	'[/%1$s] વિના મેળ ખાતું [%1$s] મળ્યું',
'BBCode error empty attribute'		=>	'[%s] ટેગમાં ખાલી વિશેષતા વિભાગ હતો',
'BBCode error tag not allowed'		=>	'તમને [%s] ટેગ્સનો ઉપયોગ કરવાની મંજૂરી નથી',
'BBCode error tag url not allowed'	=>	'તમને લિંક્સ પોસ્ટ કરવાની મંજૂરી નથી',
'BBCode list size error'			=>	'તમારી સૂચિ પાર્સ કરવા માટે ખૂબ લાંબી હતી, કૃપા કરીને તેને નાની બનાવો!',

// Stuff for the navigator (top of every page)
'Index'								=>	'અનુક્રમણિકા',
'User list'							=>	'વપરાશકર્તા સૂચિ',
'Rules'								=>	'નિયમો',
'Search'							=>	'શોધો',
'Register'							=>	'નોંધણી કરો',
'Login'								=>	'લોગિન કરો',
'Not logged in'						=>	'તમે લોગ ઇન થયા નથી.',
'Profile'							=>	'પ્રોફાઇલ',
'Logout'							=>	'લોગઆઉટ કરો',
'Logged in as'						=>	'આ રીતે લોગ ઇન થયા છો',
'Admin'								=>	'વહીવટ',
'Last visit'						=>	'છેલ્લી મુલાકાત: %s',
'Topic searches'					=>	'વિષયો:',
'New posts header'					=>	'નવું',
'Active topics'						=>	'સક્રિય',
'Unanswered topics'					=>	'અણઉત્તરિત',
'Posted topics'						=>	'પોસ્ટ કરેલ',
'Show new posts'					=>	'તમારી છેલ્લી મુલાકાત પછી નવી પોસ્ટ્સ સાથેના વિષયો શોધો.',
'Show active topics'				=>	'તાજેતરની પોસ્ટ્સ સાથેના વિષયો શોધો.',
'Show unanswered topics'			=>	'કોઈ જવાબ વિનાના વિષયો શોધો.',
'Show posted topics'				=>	'તમે પોસ્ટ કરેલા વિષયો શોધો.',
'Mark all as read'					=>	'બધા વિષયો વાંચેલા તરીકે ચિહ્નિત કરો',
'Mark forum read'					=>	'આ ફોરમ વાંચેલું તરીકે ચિહ્નિત કરો',
'Title separator'					=>	' / ',
'PM' => 'PM',
'PMsend' => 'ખાનગી સંદેશ મોકલો',
'PMnew' => 'નવો ખાનગી સંદેશ',
'PMmess' => 'તમારી પાસે નવા ખાનગી સંદેશા છે (%s સંદેશા).',

'Warn' => 'ચેતવણી',
'WarnMess' => 'તમારી પાસે નવી ચેતવણી છે!',

// Stuff for the page footer
'Board footer'						=>	'બોર્ડ ફૂટર',
'Jump to'							=>	'આના પર જાઓ',
'Go'								=>	' જાઓ ', // Submit button in forum jump
'Moderate topic'					=>	'વિષય મધ્યસ્થી કરો',
'All'								=>	'બધા',
'Move topic'						=>	'વિષય ખસેડો',
'Open topic'						=>	'વિષય ખોલો',
'Close topic'						=>	'વિષય બંધ કરો',
'Unstick topic'						=>	'વિષય અનસ્ટિક કરો',
'Stick topic'						=>	'વિષય સ્ટિક કરો',
'Moderate forum'					=>	'ફોરમ મધ્યસ્થી કરો',
'Powered by' => '%s દ્વારા સંચાલિત<br />&#x56;&#x69;&#x73;&#x6D;&#x61;&#x6E; દ્વારા સંશોધિત',

// Debug information
'Debug table'						=>	'ડિબગ માહિતી',
'Querytime'							=>	'%1$s સેકન્ડમાં જનરેટ થયું, %2$s ક્વેરીઝ એક્ઝિક્યુટ થઈ',
'Memory usage'						=>	'મેમરી વપરાશ: %1$s',
'Peak usage'						=>	'(પીક: %1$s)',
'Query times'						=>	'સમય (s)',
'Query'								=>	'ક્વેરી',
'Total query time'					=>	'કુલ ક્વેરી સમય: %s',

// For extern.php RSS feed
'RSS description'					=>	'%s પર સૌથી તાજેતરના વિષયો.',
'RSS description topic'				=>	'%s માં સૌથી તાજેતરની પોસ્ટ્સ.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS સક્રિય વિષયો ફીડ',
'Atom active topics feed'			=>	'Atom સક્રિય વિષયો ફીડ',
'RSS forum feed'					=>	'RSS ફોરમ ફીડ',
'Atom forum feed'					=>	'Atom ફોરમ ફીડ',
'RSS topic feed'					=>	'RSS વિષય ફીડ',
'Atom topic feed'					=>	'Atom વિષય ફીડ',

'After time'	=>   'પછી ઉમેર્યું',
'After time s'	=>   ' સે',
'After time i'	=>   ' મિનિટ',
'After time H'	=>   ' ક',
'After time d'	=>   ' દિ',

// Admin related stuff in the header
'New reports'						=>	'નવા અહેવાલો છે',
'Maintenance mode enabled'			=>	'જાળવણી મોડ સક્ષમ છે!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
translate_not_found
lang/Gujarati/delete.php
<?php

// Language definitions used in delete.php
$lang_delete = array(

'Delete post'			=>	'પોસ્ટ કાઢી નાખો',
'Warning'				=>	'તમે આ પોસ્ટને કાયમ માટે કાઢી નાખવા જઈ રહ્યા છો.',
'Topic warning'			=>	'ચેતવણી! આ વિષયની પ્રથમ પોસ્ટ છે, આખો વિષય કાયમ માટે કાઢી નાખવામાં આવશે.',
'Delete info'			=>	'તમે કાઢી નાખવા માટે પસંદ કરેલી પોસ્ટ નીચે મુજબ છે જેથી તમે આગળ વધતા પહેલા તેની સમીક્ષા કરી શકો.',
'Reply by'				=>	'%s દ્વારા જવાબ - %s',
'Topic by'				=>	'%s દ્વારા શરૂ કરાયેલ વિષય - %s',
'Delete'				=>	'કાઢી નાખો', // The submit button
'Post del redirect'		=>	'પોસ્ટ કાઢી નાખવામાં આવી. રીડાયરેક્ટ કરી રહ્યું છે …',
'Topic del redirect'	=>	'વિષય કાઢી નાખવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …'

);
translate_not_found
lang/Gujarati/fancybox.php
<?php

$lang_fb = array(

'Red installation'	=> 'મોડ ઇન્સ્ટોલ થઈ ગયું છે. રીડાયરેક્ટ કરી રહ્યું છે &hellip;',
'Red delete'				=> 'મોડ અનઇન્સ્ટોલ થઈ ગયું છે. રીડાયરેક્ટ કરી રહ્યું છે &hellip;',
'Reg update'				=> 'આ મોડના વિકલ્પો અપડેટ થયા છે. રીડાયરેક્ટ કરી રહ્યું છે &hellip;',

'installation'			=> 'ઇન્સ્ટોલ કરો',
'installation_info'	=> 'પ્લગઇન આ ફોરમના આધાર અને ફાઇલોમાં જરૂરી ફેરફારો કરશે અને કેશ અપડેટ કરશે.',
'delete'						=> 'અનઇન્સ્ટોલ કરો',
'delete_info'				=> 'પ્લગઇન આ ફોરમના આધાર અને ફાઇલોમાંથી ફેરફારો દૂર કરશે અને કેશ અપડેટ કરશે.',

'plugin_desc'				=> 'આ પ્લગઇન FluxBB માટે Fancybox વિસ્તરણનું સંચાલન કરે છે.<br />FluxBB માટે Fancybox ફ્લોટિંગ વિંડોમાં પૂર્વાવલોકનોની સંપૂર્ણ છબીઓ બતાવે છે. Youtube વિડિઓઝ સાથે કામ કરે છે.',
'configuration'			=> 'ગોઠવણી',
'update'						=> 'અપડેટ કરો',
'legend'						=> 'તમારા વિકલ્પો પસંદ કરો',
'guest info'				=> 'મહેમાનો માટે Fancybox સક્ષમ કરો.',
'legend2'						=> 'Fancybox લાગુ કરવા માટે ફાઇલો પસંદ કરો',


'Error open file'		=>  ' - ફાઇલ ખોલી શકાતી નથી.',
'Error save file'		=>  ' - ફાઇલ લખી શકાતી નથી.',
'Error search'			=>  ' - બદલવા માટેનો બ્લોક મળ્યો નથી.',
'Error delete'			=>  ' - દૂર કરવા માટેનો બ્લોક મળ્યો નથી.',

);
translate_not_found
lang/Gujarati/forum.php
<?php

// Language definitions used in viewforum.php
$lang_forum = array(

'Post topic'	=>	'નવો વિષય પોસ્ટ કરો',
'Views'			=>	'દૃશ્યો',
'Moved'			=>	'ખસેડવામાં આવ્યું:',
'Sticky'		=>	'&#8657;&#160;', // 'Sticky:'
'Closed'		=>	'બંધ:',
'Poll' => 'મતદાન',
'Empty forum'	=>	'ફોરમ ખાલી છે.',
'Mod controls'	=>	'મધ્યસ્થી નિયંત્રણો',
'Is subscribed'	=>	'તમે હાલમાં આ ફોરમના સબ્સ્ક્રાઇબર છો',
'Unsubscribe'	=>	'અનસબ્સ્ક્રાઇબ કરો',
'Subscribe'		=>	'આ ફોરમને સબ્સ્ક્રાઇબ કરો'

);
translate_not_found
lang/Gujarati/genders_integration.php
<?php
// Language definitions used by Genders Integration
$lang_genders_integration = array(
'Gender'		=>	'લિંગ',
'Male'			=>	'પુરુષ',
'Female'		=>	'સ્ત્રી',
'Unknown'		=>	'અજ્ઞાત',
);
?>
translate_not_found
lang/Gujarati/help.php
<?php

// Language definitions used in help.php
$lang_help = array(

'Help'					=>	'મદદ',
'produces'				=>	'ઉત્પન્ન કરે છે',

'BBCode'				=>	'BBCode',
'BBCode info 1'			=>	'BBCode એ ફોર્મેટિંગ ટેગ્સનો સંગ્રહ છે જેનો ઉપયોગ આ ફોરમમાં ટેક્સ્ટનો દેખાવ બદલવા માટે થાય છે. BBCode એ HTML જેવા જ સિદ્ધાંત પર આધારિત છે અને તેના જેવું જ છે. નીચે બધા ઉપલબ્ધ BBCode અને તેનો ઉપયોગ કેવી રીતે કરવો તેની સૂચનાઓની સૂચિ છે.',
'BBCode info 2'			=>	'સંચાલકો BBCode ને સક્ષમ અથવા અક્ષમ કરવાની ક્ષમતા ધરાવે છે. જ્યારે પણ તમે સંદેશ પોસ્ટ કરો અથવા તમારી સહી સંપાદિત કરો ત્યારે BBCode સક્ષમ છે કે અક્ષમ તે તમે કહી શકો છો.',

'Text style'			=>	'ટેક્સ્ટ શૈલી',
'Text style info'		=>	'નીચેના ટેગ્સ ટેક્સ્ટનો દેખાવ બદલે છે:',
'Bold text'				=>	'ઘાટા અક્ષરો',
'Underlined text'		=>	'રેખાંકિત લખાણ',
'Italic text'			=>	'ત્રાંસા અક્ષરો',
'Strike-through text'	=>	'સ્ટ્રાઇક-થ્રુ ટેક્સ્ટ',
'Red text'				=>	'લાલ લખાણ',
'Blue text'				=>	'વાદળી લખાણ',
'Heading text'			=>	'શીર્ષક લખાણ',
'Deleted text'			=>	'કાઢી નાખેલ લખાણ',
'Inserted text'			=>	'દાખલ કરેલ લખાણ',
'Emphasised text'		=>	'ભારયુક્ત લખાણ',

'Links and images'		=>	'લિંક્સ અને છબીઓ',
'Links info'			=>	'તમે નીચેના ટેગ્સનો ઉપયોગ કરીને અન્ય દસ્તાવેજો અથવા ઇમેઇલ સરનામાં પર લિંક્સ બનાવી શકો છો:',
'This help page'		=>	'આ મદદ પૃષ્ઠ',
'My email address'		=>	'મારું ઇમેઇલ સરનામું',
'Images info'			=>	'જો તમે છબી પ્રદર્શિત કરવા માંગતા હોવ તો તમે img ટેગનો ઉપયોગ કરી શકો છો. ઓપનિંગ ટેગમાં "=" ચિહ્ન પછી દેખાતું લખાણ alt વિશેષતા માટે વપરાય છે અને જ્યારે પણ શક્ય હોય ત્યારે શામેલ કરવું જોઈએ.',
'FluxBB bbcode test'	=>	'FluxBB bbcode પરીક્ષણ',

'Test topic'			=>	'પરીક્ષણ વિષય',
'Test post'				=>	'પરીક્ષણ પોસ્ટ',
'Test forum'			=>	'પરીક્ષણ ફોરમ',
'Test user'				=>	'પરીક્ષણ વપરાશકર્તા',

'Quotes'				=>	'અવતરણ',
'Quotes info'			=>	'જો તમે કોઈને ટાંકવા માંગતા હો, તો તમારે quote ટેગનો ઉપયોગ કરવો જોઈએ.',
'Quotes info 2'			=>	'જો તમે કોઈ ચોક્કસ વ્યક્તિને ટાંકવા માંગતા ન હોવ, તો તમે નામનો ઉલ્લેખ કર્યા વિના quote ટેગનો ઉપયોગ કરી શકો છો.',
'Quote text'			=>	'આ તે લખાણ છે જેને હું ટાંકવા માંગુ છું.',
'produces quote box'	=>	'આના જેવું અવતરણ બોક્સ ઉત્પન્ન કરે છે:',
'quote note'			=>	'નોંધ: જો વપરાશકર્તાનામમાં [ અથવા ] અક્ષરો હોય તો તમે તેને અવતરણ ચિહ્નોમાં બંધ કરી શકો છો.',

'Code'					=>	'કોડ',
'Code info'				=>	'સ્રોત કોડ પ્રદર્શિત કરતી વખતે તમારે ખાતરી કરવી જોઈએ કે તમે code ટેગનો ઉપયોગ કરો છો. code ટેગ સાથે પ્રદર્શિત થયેલ લખાણ મોનોસ્પેસ્ડ ફોન્ટનો ઉપયોગ કરશે અને અન્ય ટેગ્સથી પ્રભાવિત થશે નહીં.',
'Code text'				=>	'આ થોડો કોડ છે.',
'produces code box'		=>	'આના જેવું કોડ બોક્સ ઉત્પન્ન કરે છે:',

'Nested tags'			=>	'નેસ્ટેડ ટેગ્સ',
'Nested tags info'		=>	'વધુ અદ્યતન ફોર્મેટિંગ બનાવવા માટે BBCode ને નેસ્ટ કરી શકાય છે. ઉદાહરણ તરીકે:',
'Bold, underlined text'	=>	'ઘાટા, રેખાંકિત લખાણ',

'Lists'					=>	'સૂચિઓ',
'List info'				=>	'સૂચિ બનાવવા માટે તમે list ટેગનો ઉપયોગ કરી શકો છો. તમે list ટેગનો ઉપયોગ કરીને 3 પ્રકારની સૂચિઓ બનાવી શકો છો.',
'List text 1'			=>	'ઉદાહરણ સૂચિ આઇટમ 1.',
'List text 2'			=>	'ઉદાહરણ સૂચિ આઇટમ 2.',
'List text 3'			=>	'ઉદાહરણ સૂચિ આઇટમ 3.',
'produces list'			=>	'બુલેટેડ સૂચિ ઉત્પન્ન કરે છે.',
'produces decimal list'	=>	'સંખ્યાવાળી સૂચિ ઉત્પન્ન કરે છે.',
'produces alpha list'	=>	'મૂળાક્ષરોથી લેબલ થયેલ સૂચિ ઉત્પન્ન કરે છે.',

'Smilies'				=>	'સ્માઇલીઝ',
'Smilies info'			=>	'જો તમને ગમે (અને જો તે સક્ષમ હોય), તો ફોરમ સ્માઇલીઝની શ્રેણીને તે સ્માઇલીના છબી પ્રતિનિધિત્વમાં રૂપાંતરિત કરી શકે છે. આ ફોરમ નીચેની સ્માઇલીઝને ઓળખે છે અને તેમને છબીઓ સાથે બદલે છે:'

);
translate_not_found
lang/Gujarati/install.php
<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Choose install language'		=>	'ઇન્સ્ટોલ સ્ક્રિપ્ટ ભાષા પસંદ કરો',
'Choose install language info'	=>	'આ ઇન્સ્ટોલ સ્ક્રિપ્ટ માટે વપરાતી ભાષા. બોર્ડ માટે જ વપરાતી ડિફૉલ્ટ ભાષા નીચે સેટ કરી શકાય છે.',
'Install language'				=>	'ભાષા ઇન્સ્ટોલ કરો',
'Change language'				=>	'ભાષા બદલો',
'Already installed'				=>	'એવું લાગે છે કે FluxBB પહેલેથી જ ઇન્સ્ટોલ કરેલું છે. તમારે તેના બદલે <a href="index.php">અહીં</a> જવું જોઈએ.',
'You are running error'			=>	'તમે %1$s સંસ્કરણ %2$s ચલાવી રહ્યા છો. FluxBB %3$s ને યોગ્ય રીતે ચલાવવા માટે ઓછામાં ઓછું %1$s %4$s જરૂરી છે. તમે ચાલુ રાખી શકો તે પહેલાં તમારે તમારી %1$s ઇન્સ્ટોલેશન અપગ્રેડ કરવી આવશ્યક છે.',
'My FluxBB Forum'				=>	'મારું FluxBB ફોરમ',
'Description'					=>	'કમનસીબે કોઈને કહી શકાતું નથી કે FluxBB શું છે - તમારે તે જાતે જ જોવું પડશે.',
'Username 1'					=>	'વપરાશકર્તાનામો ઓછામાં ઓછા 2 અક્ષરો લાંબા હોવા જોઈએ.',
'Username 2'					=>	'વપરાશકર્તાનામો 25 અક્ષરોથી વધુ લાંબા ન હોવા જોઈએ.',
'Username 3'					=>	'વપરાશકર્તાનામ અતિથિ આરક્ષિત છે.',
'Username 4'					=>	'વપરાશકર્તાનામો IP સરનામાંના રૂપમાં ન હોઈ શકે.',
'Username 5'					=>	'વપરાશકર્તાનામોમાં એક જ સમયે બધા અક્ષરો \', " અને [ અથવા ] ન હોઈ શકે.',
'Username 6'					=>	'વપરાશકર્તાનામોમાં ફોરમ દ્વારા ઉપયોગમાં લેવાતા કોઈપણ ટેક્સ્ટ ફોર્મેટિંગ ટેગ્સ (BBCode) ન હોઈ શકે.',
'Short password'				=>	'પાસવર્ડ ઓછામાં ઓછા 9 અક્ષરો લાંબા હોવા જોઈએ.',
'Passwords not match'			=>	'પાસવર્ડ મેળ ખાતા નથી.',
'Wrong email'					=>	'તમે દાખલ કરેલ સંચાલક ઇમેઇલ સરનામું અમાન્ય છે.',
'No board title'				=>	'તમારે બોર્ડનું શીર્ષક દાખલ કરવું આવશ્યક છે.',
'Error default language'		=>	'પસંદ કરેલી ડિફૉલ્ટ ભાષા અસ્તિત્વમાં હોય તેવું લાગતું નથી.',
'Error default style'			=>	'પસંદ કરેલી ડિફૉલ્ટ શૈલી અસ્તિત્વમાં હોય તેવું લાગતું નથી.',
'No DB extensions'				=>	'આ PHP પર્યાવરણમાં FluxBB દ્વારા સમર્થિત કોઈપણ ડેટાબેઝ માટે સમર્થન નથી. FluxBB ઇન્સ્ટોલ કરવા માટે PHP ને MySQL, PostgreSQL અથવા SQLite માટે સમર્થન હોવું જરૂરી છે.',
'Administrator username'		=>	'સંચાલકનું વપરાશકર્તાનામ',
'Administrator email'			=>	'સંચાલકનું ઇમેઇલ',
'Board title'					=>	'બોર્ડ શીર્ષક',
'Base URL'						=>	'તમારા FluxBB ફોરમનું URL (ટ્રેલિંગ સ્લેશ વિના). આ સાચું હોવું આવશ્યક છે.',
'Required field'				=>	'આ ફોર્મમાં આવશ્યક ક્ષેત્ર છે.',
'FluxBB Installation'			=>	'FluxBB ઇન્સ્ટોલેશન',
'Welcome'						=>	'તમે FluxBB ઇન્સ્ટોલ કરવા જઈ રહ્યા છો. FluxBB ઇન્સ્ટોલ કરવા માટે, તમારે નીચે આપેલ ફોર્મ પૂર્ણ કરવું આવશ્યક છે. જો તમને ઇન્સ્ટોલેશનમાં કોઈ મુશ્કેલીઓ આવે, તો કૃપા કરીને દસ્તાવેજીકરણનો સંદર્ભ લો.',
'Install'						=>	'FluxBB %s ઇન્સ્ટોલ કરો',
'Errors'						=>	'નીચેની ભૂલો સુધારવાની જરૂર છે:',
'Database setup'				=>	'ડેટાબેઝ સેટઅપ',
'Info 1'						=>	'તમારા ડેટાબેઝ સાથે જોડાણ બનાવવા માટે અમને જરૂરી બધી માહિતી.',
'Select database'				=>	'તમારો ડેટાબેઝ પ્રકાર પસંદ કરો',
'Info 2'						=>	'ડેટાબેઝ પસંદ કરો. અમે SQLite, MySQL અને PostgreSQL ને સમર્થન આપીએ છીએ.',
'Database type'					=>	'ડેટાબેઝ પ્રકાર',
'Required'						=>	'(આવશ્યક)',
'Database hostname'				=>	'તમારો ડેટાબેઝ સર્વર હોસ્ટનામ દાખલ કરો',
'Info 3'						=>	'જો <code>localhost</code> કામ ન કરે તો તમે આ માહિતી તમારા વેબ હોસ્ટ પાસેથી મેળવી શકશો.',
'Database server hostname'		=>	'ડેટાબેઝ સર્વર હોસ્ટનામ',
'Database enter name'			=>	'તમારા ડેટાબેઝનું નામ દાખલ કરો',
'Info 4'						=>	'તમે જેના પર FluxBB ઇન્સ્ટોલ કરવા માંગો છો તે ડેટાબેઝનું નામ.',
'Database name'					=>	'ડેટાબેઝ નામ',
'Database enter informations'	=>	'તમારો ડેટાબેઝ વપરાશકર્તાનામ અને પાસવર્ડ દાખલ કરો',
'Database username'				=>	'ડેટાબેઝ વપરાશકર્તાનામ',
'Info 5'						=>	'તમારો MySQL વપરાશકર્તાનામ અને પાસવર્ડ (SQLite ને અવગણો).',
'Database password'				=>	'ડેટાબેઝ પાસવર્ડ',
'Database enter prefix'			=>	'ડેટાબેઝ કોષ્ટક ઉપસર્ગ દાખલ કરો',
'Info 6'						=>	'જો તમે એક જ ડેટાબેઝમાં બહુવિધ FluxBB ઇન્સ્ટોલેશન ચલાવવા માંગતા હો, તો આ બદલો. <b style="color:red;">MySQL 8+ માટે, કોષ્ટક ઉપસર્ગ નિષ્ફળ થયા વિના ઉલ્લેખિત કરવો આવશ્યક છે.</b>',
'Table prefix'					=>	'કોષ્ટક ઉપસર્ગ',
'Administration setup'			=>	'વહીવટ સેટઅપ',
'Info 7'						=>	'તમારા બોર્ડ પર પ્રથમ એકાઉન્ટ બનાવો.',
'Info 8'						=>	'તમારું વપરાશકર્તાનામ 2 થી 25 અક્ષરો લાંબુ હોવું જોઈએ. તમારો પાસવર્ડ ઓછામાં ઓછો 9 અક્ષરો લાંબો હોવો જોઈએ. યાદ રાખો કે પાસવર્ડ કેસ-સંવેદનશીલ છે.',
'Password'						=>	'પાસવર્ડ',
'Confirm password'				=>	'પાસવર્ડ પુષ્ટિ કરો',
'Board setup'					=>	'બોર્ડ સેટઅપ',
'Info 11'						=>	'તમારા બોર્ડ માટે સેટિંગ્સ. તમે આ પછીથી બદલી શકો છો.',
'General information'			=>	'તમારા બોર્ડનું શીર્ષક અને વર્ણન દાખલ કરો.',
'Board description'				=>	'બોર્ડ વર્ણન (HTML ને સમર્થન આપે છે)',
'Appearance'					=>	'દેખાવ',
'Info 15'						=>	'તમારું ફોરમ તમારું બનાવો. તમારા બોર્ડ માટે ભાષા અને શૈલી પસંદ કરો.',
'Default language'				=>	'ડિફૉલ્ટ ભાષા',
'Default style'					=>	'ડિફૉલ્ટ શૈલી',
'Start install'					=>	'ઇન્સ્ટોલ શરૂ કરો',
'DB type not valid'				=>	'\'%s\' માન્ય ડેટાબેઝ પ્રકાર નથી',
'Table prefix error'			=>	'કોષ્ટક ઉપસર્ગ \'%s\' માં ગેરકાયદેસર અક્ષરો છે અથવા તે ખૂબ લાંબો છે. ઉપસર્ગમાં a થી z અક્ષરો, કોઈપણ સંખ્યાઓ અને અન્ડરસ્કોર અક્ષર હોઈ શકે છે. જોકે, તે સંખ્યાથી શરૂ થવો જોઈએ નહીં. મહત્તમ લંબાઈ 40 અક્ષરો છે. કૃપા કરીને અલગ ઉપસર્ગ પસંદ કરો',
'Prefix reserved'				=>	'કોષ્ટક ઉપસર્ગ \'sqlite_\' SQLite એન્જિન દ્વારા ઉપયોગ માટે આરક્ષિત છે. કૃપા કરીને અલગ ઉપસર્ગ પસંદ કરો',
'Existing table error'			=>	'ડેટાબેઝ \'%2$s\' માં \'%1$susers\' નામનું કોષ્ટક પહેલેથી હાજર છે. આનો અર્થ એ થઈ શકે કે FluxBB પહેલેથી જ ઇન્સ્ટોલ કરેલું છે અથવા અન્ય સોફ્ટવેર ઇન્સ્ટોલ કરેલું છે અને FluxBB ને જરૂરી એક અથવા વધુ કોષ્ટક નામો પર કબજો કરી રહ્યું છે. જો તમે સમાન ડેટાબેઝમાં FluxBB ની બહુવિધ નકલો ઇન્સ્ટોલ કરવા માંગતા હો, તો તમારે અલગ કોષ્ટક ઉપસર્ગ પસંદ કરવો આવશ્યક છે',
'InnoDB off'					=>	'InnoDB સક્ષમ હોય તેવું લાગતું નથી. કૃપા કરીને ડેટાબેઝ સ્તર પસંદ કરો જેમાં InnoDB સમર્થન ન હોય, અથવા તમારા MySQL સર્વર પર InnoDB સક્ષમ કરો',
'Administrators'				=>	'સંચાલકો',
'Administrator'					=>	'સંચાલક',
'Moderators'					=>	'મધ્યસ્થીઓ',
'Moderator'						=>	'મધ્યસ્થી',
'Guests'						=>	'મહેમાનો',
'Guest'							=>	'મહેમાન',
'Members'						=>	'સભ્યો',
'Announcement'					=>	'તમારી જાહેરાત અહીં દાખલ કરો.',
'Rules'							=>	'તમારા નિયમો અહીં દાખલ કરો',
'Maintenance message'			=>	'ફોરમ જાળવણી માટે અસ્થાયી રૂપે બંધ છે. કૃપા કરીને થોડીવારમાં ફરી પ્રયાસ કરો.',
'Test post'						=>	'પરીક્ષણ વિષય',
'Message'						=>	'જો તમે આ જોઈ રહ્યા છો (જે મને લાગે છે કે તમે છો), તો FluxBB નું ઇન્સ્ટોલ કામ કરતું હોય તેવું લાગે છે! હવે લોગ ઇન કરો અને તમારા ફોરમને ગોઠવવા માટે વહીવટ નિયંત્રણ પેનલ પર જાઓ.',
'Test category'					=>	'પરીક્ષણ શ્રેણી',
'Test forum'					=>	'પરીક્ષણ ફોરમ',
'This is just a test forum'		=>	'આ ફક્ત એક પરીક્ષણ ફોરમ છે',
'Alert cache'					=>	'<strong>કેશ ડિરેક્ટરી હાલમાં લખી શકાય તેવી નથી!</strong> FluxBB યોગ્ય રીતે કાર્ય કરવા માટે, ડિરેક્ટરી <em>%s</em> PHP દ્વારા લખી શકાય તેવી હોવી આવશ્યક છે. યોગ્ય ડિરેક્ટરી પરવાનગીઓ સેટ કરવા માટે chmod નો ઉપયોગ કરો. જો શંકા હોય, તો 0777 પર chmod કરો.',
'Alert avatar'					=>	'<strong>અવતાર ડિરેક્ટરી હાલમાં લખી શકાય તેવી નથી!</strong> જો તમે વપરાશકર્તાઓને તેમની પોતાની અવતાર છબીઓ અપલોડ કરવા દેવા માંગતા હો, તો તમારે ખાતરી કરવી આવશ્યક છે કે ડિરેક્ટરી <em>%s</em> PHP દ્વારા લખી શકાય તેવી છે. તમે પછીથી અવતાર છબીઓને અલગ ડિરેક્ટરીમાં સાચવવાનું પસંદ કરી શકો છો (એડમિન/વિકલ્પો જુઓ). યોગ્ય ડિરેક્ટરી પરવાનગીઓ સેટ કરવા માટે chmod નો ઉપયોગ કરો. જો શંકા હોય, તો 0777 પર chmod કરો.',
'Alert upload'					=>	'<strong>આ સર્વર પર ફાઇલ અપલોડ્સ અસ્વીકૃત હોય તેવું લાગે છે!</strong> જો તમે વપરાશકર્તાઓને તેમની પોતાની અવતાર છબીઓ અપલોડ કરવા દેવા માંગતા હો, તો તમારે PHP માં file_uploads ગોઠવણી સેટિંગ સક્ષમ કરવી આવશ્યક છે. ફાઇલ અપલોડ્સ સક્ષમ થયા પછી, વહીવટ/વિકલ્પો/સુવિધાઓમાં અવતાર અપલોડ્સ સક્ષમ કરી શકાય છે.',
'FluxBB has been installed'		=>	'FluxBB ઇન્સ્ટોલ થઈ ગયું છે. ઇન્સ્ટોલેશનને અંતિમ સ્વરૂપ આપવા માટે કૃપા કરીને નીચેની સૂચનાઓનું પાલન કરો.',
'Final instructions'			=>	'અંતિમ સૂચનાઓ',
'Info 17'						=>	'ઇન્સ્ટોલેશનને અંતિમ સ્વરૂપ આપવા માટે, તમારે config.php નામની ફાઇલ ડાઉનલોડ કરવા માટે નીચેના બટન પર ક્લિક કરવાની જરૂર છે. પછી તમારે આ ફાઇલને તમારી FluxBB ઇન્સ્ટોલેશનની /include ડિરેક્ટરીમાં અપલોડ કરવાની જરૂર છે.',
'Info 18'						=>	'તમે config.php અપલોડ કરી લો તે પછી, FluxBB સંપૂર્ણપણે ઇન્સ્ટોલ થઈ જશે! તે સમયે, તમે <a href="index.php">ફોરમ અનુક્રમણિકા પર જઈ શકો છો</a>.',
'Download config.php file'		=>	'config.php ફાઇલ ડાઉનલોડ કરો',
'FluxBB fully installed'		=>	'FluxBB સંપૂર્ણપણે ઇન્સ્ટોલ થઈ ગયું છે! તમે હવે <a href="index.php">ફોરમ અનુક્રમણિકા પર જઈ શકો છો</a>.',

);
translate_not_found
lang/Gujarati/login.php
<?php

// Language definitions used in login.php
$lang_login = array(

// Miscellaneous
'Login errors'				=>	'લોગિન ભૂલો',
'Login errors info'		=>	'તમે લોગિન કરી શકો તે પહેલાં નીચેની ભૂલ સુધારવાની જરૂર છે:',
'Wrong user/pass'			=>	'ખોટું વપરાશકર્તાનામ અને/અથવા પાસવર્ડ.',
'Forgotten pass'			=>	'તમારો પાસવર્ડ ભૂલી ગયા છો?',
'Login redirect'			=>	'સફળતાપૂર્વક લોગ ઇન થયું. રીડાયરેક્ટ કરી રહ્યું છે …',
'Logout redirect'			=>	'લોગ આઉટ થયું. રીડાયરેક્ટ કરી રહ્યું છે …',
'No email match'			=>	'આ ઇમેઇલ સરનામાં સાથે કોઈ વપરાશકર્તા નોંધાયેલ નથી',
'Request pass'				=>	'પાસવર્ડની વિનંતી કરો',
'Request pass legend'		=>	'તમે જે ઇમેઇલ સરનામાં સાથે નોંધણી કરાવી છે તે દાખલ કરો',
'Request pass info'			=>	'નવો પાસવર્ડ અને નવા પાસવર્ડને સક્રિય કરવા માટેની લિંક તે સરનામાં પર મોકલવામાં આવશે.',
'Not registered'			=>	'હજુ સુધી નોંધણી કરાવી નથી?',
'Login legend'				=>	'નીચે તમારું વપરાશકર્તાનામ અને પાસવર્ડ દાખલ કરો',
'Remember me'				=>	'જ્યારે પણ હું મુલાકાત લઉં ત્યારે મને આપમેળે લોગ ઇન કરો.',
'Login info'				=>	'જો તમે નોંધણી કરાવી નથી અથવા તમારો પાસવર્ડ ભૂલી ગયા છો, તો નીચેની યોગ્ય લિંક પર ક્લિક કરો.',
'New password errors'		=>	'પાસવર્ડ વિનંતી ભૂલ',
'New passworderrors info'	=>	'નવો પાસવર્ડ મોકલી શકાય તે પહેલાં નીચેની ભૂલ સુધારવાની જરૂર છે:',

// Forget password mail stuff
'Forget mail'				=>	'તમારો પાસવર્ડ કેવી રીતે બદલવો તેની સૂચનાઓ સાથે ઉલ્લેખિત સરનામાં પર એક ઇમેઇલ મોકલવામાં આવ્યો છે. જો તે ન આવે તો તમે ફોરમ સંચાલકનો આના પર સંપર્ક કરી શકો છો',
'Email flood'				=>	'આ એકાઉન્ટે છેલ્લા કલાકમાં પહેલેથી જ પાસવર્ડ રીસેટની વિનંતી કરી છે. કૃપા કરીને નવો પાસવર્ડ ફરીથી વિનંતી કરતા પહેલા %s મિનિટ રાહ જુઓ.'

);
translate_not_found
lang/Gujarati/misc.php
<?php

// Language definitions used in various scripts
$lang_misc = array(

'Mark read redirect'			=>	'બધા વિષયો અને ફોરમ વાંચેલા તરીકે ચિહ્નિત કરવામાં આવ્યા છે. રીડાયરેક્ટ કરી રહ્યું છે …',
'Mark forum read redirect'		=>	'ઉલ્લેખિત ફોરમમાંના બધા વિષયો વાંચેલા તરીકે ચિહ્નિત કરવામાં આવ્યા છે. રીડાયરેક્ટ કરી રહ્યું છે …',

// Send email
'Form email disabled'			=>	'તમે જે વપરાશકર્તાને ઇમેઇલ મોકલવાનો પ્રયાસ કરી રહ્યાં છો તેણે ફોર્મ ઇમેઇલ અક્ષમ કર્યું છે.',
'No email subject'				=>	'તમારે વિષય દાખલ કરવો આવશ્યક છે.',
'No email message'				=>	'તમારે સંદેશ દાખલ કરવો આવશ્યક છે.',
'Too long email message'		=>	'સંદેશાઓ 65535 અક્ષરો (64 KB) થી વધુ લાંબા ન હોઈ શકે.',
'Email flood'					=>	'મોકલેલા ઇમેઇલ્સ વચ્ચે ઓછામાં ઓછી %s સેકંડ પસાર થવી જોઈએ. કૃપા કરીને %s સેકંડ રાહ જુઓ અને ફરીથી મોકલવાનો પ્રયાસ કરો.',
'Email sent redirect'			=>	'ઇમેઇલ મોકલવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …',
'Send email to'					=>	'આના પર ઇમેઇલ મોકલો',
'Email subject'					=>	'વિષય',
'Email message'					=>	'સંદેશ',
'Email disclosure note'			=>	'કૃપા કરીને નોંધો કે આ ફોર્મનો ઉપયોગ કરીને, તમારું ઇમેઇલ સરનામું પ્રાપ્તકર્તાને જાહેર કરવામાં આવશે.',
'Write email'					=>	'તમારો ઇમેઇલ સંદેશ લખો અને સબમિટ કરો',

// Report
'No reason'						=>	'તમારે કારણ દાખલ કરવું આવશ્યક છે.',
'Reason too long'				=>	'તમારો સંદેશ 65535 બાઇટ્સ (~64kb) થી ઓછો હોવો જોઈએ.',
'Report flood'					=>	'અહેવાલો વચ્ચે ઓછામાં ઓછી %s સેકંડ પસાર થવી જોઈએ. કૃપા કરીને %s સેકંડ રાહ જુઓ અને ફરીથી મોકલવાનો પ્રયાસ કરો.',
'Report redirect'				=>	'પોસ્ટની જાણ કરવામાં આવી. રીડાયરેક્ટ કરી રહ્યું છે …',
'Report post'					=>	'પોસ્ટની જાણ કરો',
'Reason'						=>	'કારણ',
'Reason desc'					=>	'કૃપા કરીને તમે આ પોસ્ટની જાણ શા માટે કરી રહ્યાં છો તેનું ટૂંકું કારણ દાખલ કરો',

// Subscriptions
'Already subscribed topic'		=>	'તમે આ વિષયના પહેલેથી જ સબ્સ્ક્રાઇબર છો.',
'Already subscribed forum'		=>	'તમે આ ફોરમના પહેલેથી જ સબ્સ્ક્રાઇબર છો.',
'Subscribe redirect'			=>	'તમારું સબ્સ્ક્રિપ્શન ઉમેરવામાં આવ્યું છે. રીડાયરેક્ટ કરી રહ્યું છે …',
'Not subscribed topic'			=>	'તમે આ વિષયના સબ્સ્ક્રાઇબર નથી.',
'Not subscribed forum'			=>	'તમે આ ફોરમના સબ્સ્ક્રાઇબર નથી.',
'Unsubscribe redirect'			=>	'તમારું સબ્સ્ક્રિપ્શન દૂર કરવામાં આવ્યું છે. રીડાયરેક્ટ કરી રહ્યું છે …',

// General forum and topic moderation
'Moderate'						=>	'મધ્યસ્થી કરો',
'Select'						=>	'પસંદ કરો', // the header of a column of checkboxes
'Move'							=>	'ખસેડો',
'Split'							=>	'વિભાજીત કરો',
'Delete'						=>	'કાઢી નાખો',
'Merge'							=>	'મર્જ કરો',

'Lang changed' => 'ભાષા બદલાઈ ગઈ છે. રીડાયરેક્ટ કરી રહ્યું છે &hellip;',

// Moderate forum
'Open'							=>	'ખોલો',
'Close'							=>	'બંધ કરો',
'Move topic'					=>	'વિષય ખસેડો',
'Move topics'					=>	'વિષયો ખસેડો',
'Move legend'					=>	'ખસેડવાનું ગંતવ્ય પસંદ કરો',
'Move to'						=>	'આના પર ખસેડો',
'Nowhere to move'				=>	'એવા કોઈ ફોરમ નથી કે જેમાં તમે વિષયો ખસેડી શકો.',
'Leave redirect'				=>	'રીડાયરેક્ટ વિષય(ઓ) છોડી દો',
'Move topic redirect'			=>	'વિષય ખસેડવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …',
'Move topics redirect'			=>	'વિષયો ખસેડવામાં આવ્યા. રીડાયરેક્ટ કરી રહ્યું છે …',
'Confirm delete legend'			=>	'કૃપા કરીને કાઢી નાખવાની પુષ્ટિ કરો',
'Delete topics'					=>	'વિષયો કાઢી નાખો',
'Delete topics comply'			=>	'શું તમે ખરેખર પસંદ કરેલા વિષયો કાઢી નાખવા માંગો છો?',
'Delete topics redirect'		=>	'વિષયો કાઢી નાખવામાં આવ્યા. રીડાયરેક્ટ કરી રહ્યું છે …',
'Open topic redirect'			=>	'વિષય ખોલવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …',
'Open topics redirect'			=>	'વિષયો ખોલવામાં આવ્યા. રીડાયરેક્ટ કરી રહ્યું છે …',
'Close topic redirect'			=>	'વિષય બંધ કરવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …',
'Close topics redirect'			=>	'વિષયો બંધ કરવામાં આવ્યા. રીડાયરેક્ટ કરી રહ્યું છે …',
'No topics selected'			=>	'ખસેડવા/કાઢી નાખવા/ખોલવા/બંધ કરવા માટે તમારે ઓછામાં ઓછો એક વિષય પસંદ કરવો આવશ્યક છે.',
'Not enough topics selected'	=>	'મર્જ કરવા માટે તમારે ઓછામાં ઓછા બે વિષયો પસંદ કરવા આવશ્યક છે.',
'Stick topic redirect'			=>	'વિષય સ્ટિક કરવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …',
'Unstick topic redirect'		=>	'વિષય અનસ્ટિક કરવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …',
'Merge topics'					=>	'વિષયો મર્જ કરો',
'Merge topics redirect'			=>	'વિષયો મર્જ કરવામાં આવ્યા. રીડાયરેક્ટ કરી રહ્યું છે …',
'Confirm merge legend'			=>	'કૃપા કરીને મર્જની પુષ્ટિ કરો',
'New subject'					=>	'નવો વિષય',

// Split multiple posts in topic
'Confirm split legend'			=>	'કૃપા કરીને પસંદ કરેલી પોસ્ટ્સના વિભાજનની પુષ્ટિ કરો અને ખસેડવાનું ગંતવ્ય પસંદ કરો.',
'Split posts'					=>	'પોસ્ટ્સ વિભાજીત કરો',
'Split posts comply'			=>	'શું તમે ખરેખર પસંદ કરેલી પોસ્ટ્સ વિભાજીત કરવા માંગો છો?',
'Split posts redirect'			=>	'પોસ્ટ્સ વિભાજીત કરવામાં આવી છે. રીડાયરેક્ટ કરી રહ્યું છે …',

// Delete multiple posts in topic
'Delete posts'					=>	'પોસ્ટ્સ કાઢી નાખો',
'Cannot select first'			=>	'વિભાજન/કાઢી નાખવા માટે પ્રથમ પોસ્ટ પસંદ કરી શકાતી નથી.',
'Delete posts comply'			=>	'શું તમે ખરેખર પસંદ કરેલી પોસ્ટ્સ કાઢી નાખવા માંગો છો?',
'Delete posts redirect'			=>	'પોસ્ટ્સ કાઢી નાખવામાં આવી. રીડાયરેક્ટ કરી રહ્યું છે …',
'No posts selected'				=>	'વિભાજન/કાઢી નાખવા માટે તમારે ઓછામાં ઓછી એક પોસ્ટ પસંદ કરવી આવશ્યક છે.',

// Get host
'Host info 1'					=>	'IP સરનામું છે: %s',
'Host info 2'					=>	'હોસ્ટ નામ છે: %s',
'Show more users'				=>	'આ IP માટે વધુ વપરાશકર્તાઓ બતાવો',

'Move posts' => 'પોસ્ટ્સ ખસેડો',
'Move posts redirect' => 'પોસ્ટ્સ ખસેડવામાં આવી. રીડાયરેક્ટ કરી રહ્યું છે …',
'Post from topic' => 'આ પોસ્ટ વિષયમાંથી ખસેડવામાં આવી છે',

'Poll cannot be attached' => 'મતદાન સાથેનો વિષય અન્ય વિષય સાથે જોડી શકાતો નથી.',
);
translate_not_found
lang/Gujarati/pms_new.php
<?php

$lang_pmsn = array(

'PM' => 'PM',
'list' => 'મારી વાતચીતો',
'listq' => 'સંવાદોની પ્રક્રિયા',
'new' => 'નવા સંદેશા',
'newq' => 'સંવાદોની પ્રક્રિયા',
'close' => 'PM બંધ',
'closeq' => 'બંધ કરવાની પુષ્ટિ કરો',
'save' => 'આર્કાઇવલ સંદેશા',
'saveq' => 'સંવાદો દૂર કરી રહ્યા છીએ',
'post' => 'નવી પોસ્ટ',
'blocking' => 'પ્રેષકને અવરોધિત કરી રહ્યાં છે',
'blocked' => 'અવરોધિત વપરાશકર્તાઓ',
'blockedq' => 'અવરોધ દૂર કરી રહ્યાં છે',
'topic' => 'સંવાદ',
'del' => 'દૂર કરવું',
'send' => 'સંવાદ મોકલી રહ્યાં છે',
'edit' => 'પોસ્ટ સંપાદિત કરો',

'mNew' => 'નવું',
'mList' => 'મારી વાતચીતો',
'mSave' => 'આર્કાઇવ',

'Off' => 'PM બંધ કરો',
'On' => 'PM ચાલુ કરો',
'Email on' => 'ઈ-મેલ દ્વારા સૂચિત કરો: ચાલુ',
'Email off' => 'ઈ-મેલ દ્વારા સૂચિત કરો: બંધ',
'Email on Red' => 'ઈ-મેલ દ્વારા સૂચના ચાલુ છે. રીડાયરેક્ટ કરી રહ્યું છે …',
'Email off Red' => 'ઈ-મેલ દ્વારા સૂચના બંધ છે. રીડાયરેક્ટ કરી રહ્યું છે …',

'Boxs' => 'ફોલ્ડર્સ',
'Storage' => 'સંગ્રહ',
'Options' => 'વિકલ્પો',

'tDialog' => 'સંવાદ વિષય',
'tStarter' => 'શરૂ કરનાર',
'tTo' => 'પ્રતિ',
'tReplies' => 'જવાબો',
'tLast' => 'છેલ્લું',

'Info zero' => 'આ ફોલ્ડરમાં કોઈ સંવાદો નથી.',
'Post new topic' => 'નવો સંવાદ બનાવો',
'New dialog' => 'નવો સંવાદ',
'Addressee' => 'પ્રતિ',
'Dialog head' => 'સંવાદ વિષય',
'Save_' => 'આર્કાઇવ',
'Save_Later' => 'આર્કાઇવ (પછીથી મોકલો)',
'Delete' => 'કાઢી નાખો',
'Add Reply' => 'જવાબ ઉમેરો',
'Block' => 'અવરોધિત કરો',
'Send d' => 'સંવાદ મોકલો',

'Deleted' => 'કાઢી નાખેલ:',
'Yes' => ' હા ',
'With' => ' સાથે ',

'No subject' => 'વિષયોમાં વિષય હોવો આવશ્યક છે.',
'Too long message' => 'પોસ્ટ્સ 65535 બાઇટ્સથી વધુ લાંબી ન હોઈ શકે.',
'No addressee' => 'તે વપરાશકર્તાનામ દ્વારા કોઈ વપરાશકર્તાઓ નથી.',
'No for itself' => 'પોતાને ખાનગી સંદેશા મોકલવાનું શક્ય નથી.',
'Off messages' => 'આ વપરાશકર્તાએ ખાનગી સંદેશા અક્ષમ કર્યા છે.',
'More maximum' => 'આ વપરાશકર્તાના ફોલ્ડર્સ ભરેલા છે.',
'More maximum user' => 'આર્કાઇવ ફોલ્ડર ભરેલું છે.',
'More maximum list' => 'મારી વાતચીતો ફોલ્ડર ભરેલું છે.',
'Empty' => 'ખાલી.',
'No dialogs' => 'તમે પ્રક્રિયા માટે કોઈપણ સંવાદ પસંદ કર્યો નથી.',
'Err1' => 'તમારા ન હોય તેવા સંવાદો પસંદ કરવામાં આવ્યા છે.',
'Err2' => 'તેટલા બધા સંવાદો હોવા શક્ય નથી.',
'No block itself' => 'પોતાને અવરોધિત કરવાનું શક્ય નથી.',
'No block admin' => 'સંચાલકને અવરોધિત કરવાનું શક્ય નથી.',
'Full folders' => 'તમારા ફોલ્ડર્સ ભરેલા છે.',
'No new post' => 'આ સંવાદમાં નવા સંદેશા ઉમેરવાનું શક્ય નથી.',
'You block addr' => 'સંદેશ મોકલવાનું શક્ય નથી. તમે વપરાશકર્તાને અવરોધિત કર્યો છે.',
'Addr block you' => 'સંદેશ મોકલવાનું શક્ય નથી. વપરાશકર્તાએ તમને અવરોધિત કર્યા છે.',
'No edit post' => 'આ સંદેશ વપરાશકર્તા દ્વારા પહેલેથી જ વાંચવામાં આવ્યો છે.',

'Info' => 'માહિતી',
'Info close' => 'તમે ખાનગી સંદેશા બંધ કર્યા છે.',
'InfoQ' => 'PM બંધ કરવાની પુષ્ટિ કરો',
'InfoQ close' => 'ચેતવણી! PM બંધ કરવાથી તમારી બધી વાતચીતો કાયમ માટે કાઢી નાખવામાં આવશે.',
'InfoQS' => 'PM બંધ કરો',
'Options redirect' => 'વિકલ્પો બદલાયા. રીડાયરેક્ટ કરી રહ્યું છે …',
'List redirect' => 'સંવાદોની પ્રક્રિયા ચલાવવામાં આવી. રીડાયરેક્ટ કરી રહ્યું છે …',
'InfoDeleteQ' => 'કાઢી નાખવાની પુષ્ટિ કરો',
'InfoSaveQ' => 'સાચવવાની પુષ્ટિ કરો',
'InfoDeleteQm' => 'શું તમે ખરેખર પસંદ કરેલા સંવાદો કાઢી નાખવા માંગો છો?',
'InfoSaveQm' => 'શું તમે ખરેખર પસંદ કરેલા સંવાદોને આર્કાઇવમાં ખસેડવા માંગો છો?',
'InfoBlocking' => 'વપરાશકર્તાને અવરોધિત કરો',
'InfoReBlocking' => 'વપરાશકર્તાને અવરોધિત કરવાનું દૂર કરો',
'InfoReBlockingS' => 'વપરાશકર્તાઓને અવરોધિત કરવાનું દૂર કરો',
'InfoReBlockingSQ' => 'શું તમે ખરેખર પસંદ કરેલા વપરાશકર્તાઓમાંથી અવરોધ દૂર કરવા માંગો છો?',
'InfoBlockingm' => 'શું તમે ખરેખર આ વપરાશકર્તાને તમને ખાનગી સંદેશા મોકલવાથી અવરોધિત કરવા માંગો છો?',
'InfoReBlockingm' => 'શું તમે ખરેખર આ વપરાશકર્તાને તમને ખાનગી સંદેશા મોકલવાની મંજૂરી આપવા માંગો છો?',
'Blocking redirect' => 'અવરોધ ઉમેરવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …',
'ReBlocking redirect' => 'અવરોધ દૂર કરવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …',
'Topic review' => 'વિષય સમીક્ષા (સૌથી નવું પ્રથમ)',
'InfoDeleteMes' => 'શું તમે ખરેખર આ સંદેશને સંવાદ &rdquo;%s&rdquo; માંથી કાઢી નાખવા માંગો છો?',
'InfoDeleteTop' => 'શું તમે ખરેખર આ સંવાદ &rdquo;%s&rdquo; કાઢી નાખવા માંગો છો?',
'DelTop redirect' => 'સંવાદ દૂર કરવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …',
'DelMes redirect' => 'સંદેશ દૂર કરવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …',
'InfoDeleteQMes' => 'આ સંદેશ દૂર કરવાની પુષ્ટિ કરો',
'InfoDeleteQTop' => 'આ સંવાદ દૂર કરવાની પુષ્ટિ કરો',
'InfoSend' => 'સંવાદ &rdquo;%s&rdquo; મોકલી રહ્યાં છે',
'InfoSendQ' => 'વપરાશકર્તા <strong>%s</strong> ને સંવાદ મોકલો?',
'Attention' => 'ધ્યાન!!!',
'Delete dialog' => 'તમારી અને આ વપરાશકર્તા વચ્ચેના સંવાદો દૂર કરો',

'Modul failed message' => 'મોડ્યુલ &rdquo;%s&rdquo; લોડ કરવામાં નિષ્ફળ.',
'No modul message' => '&rdquo;%s&rdquo; નામનું કોઈ મોડ્યુલ નથી.',
'Min post' => 'ખાનગી સંદેશા મોકલવા માટે તમારે ફોરમમાં ઓછામાં ઓછી %s પોસ્ટ્સ પોસ્ટ કરેલી હોવી આવશ્યક છે.',
'Warn' => '<b>ધ્યાન!!!</b><br />આ વપરાશકર્તા ફોરમમાં ઓછામાં ઓછી %s પોસ્ટ્સ પોસ્ટ ન કરે ત્યાં સુધી તમને જવાબ મળશે નહીં.',

);
translate_not_found
lang/Gujarati/poll.php
<?php

$lang_poll = array(

'Form legend'	=>	'મતદાન',
'Form enable'	=>	'આ વિષયમાં મતદાન શામેલ કરો',
'Form question'	=>	'પ્રશ્ન %d',
'Form choice'	=>	'જવાબ %d',
'Form type'	=> 'મતદારોને 1 થી વધુ જવાબ (બહુ-પસંદગી) પસંદ કરવાની મંજૂરી આપવા માટે આ મૂલ્ય બદલો:',
'Form result'	=> '%d મત ન પડે ત્યાં સુધી મતદાનનું પરિણામ છુપાવો',

'No question'	=>	'કોઈ પ્રશ્ન પૂરો પાડવામાં આવ્યો નથી',
'Question too long'	=>	'પ્રશ્ન %d ખૂબ લાંબો છે',
'Choice too long'	=>	'પ્રશ્ન %d: જવાબ %d ખૂબ લાંબો છે',
'Not enough choices'	=>	'પ્રશ્ન %d: પૂરતા જવાબો (પસંદગીઓ) પૂરા પાડવામાં આવ્યા નથી',
'Max variant'	=>	'પ્રશ્ન %d: બહુ-પસંદગી મૂલ્ય જવાબ પસંદગીઓની સંખ્યા કરતાં ઓછું હોવું આવશ્યક છે.',
'Possible choose'	=> 'આ એક બહુ-પસંદગી પ્રશ્ન છે. %d જવાબો પસંદ કરવાનું શક્ય છે',

'M0' => 'તમે મત આપ્યો છે',
'M1' => 'મતદાન બંધ છે',
'M2' => '%d મત ન પડે ત્યાં સુધી મતદાનના પરિણામો છુપાયેલા છે',
'M3' => 'મહેમાનો મત આપી શકતા નથી',
'M4' => 'મહેમાનો પાસેથી મતદાનના પરિણામો છુપાયેલા છે',

'Vote total'	=>	'કુલ મત: %d',
'Vote button'	=>	'મત આપો!',
'Votes'	=>	'મતો ',
'View'	=>	'પરિણામો બતાવો',

'Err poll'	=> 'મતદાન ભૂલ:<br />',
'Err1'			=> 'તમે પહેલેથી જ મત આપ્યો છે અથવા મતદાન માટે મતદાન બંધ છે.',
'Err2'			=> 'અમાન્ય મત - જવાબ(ઓ) પસંદ કરેલ નથી.',
'Err3'			=> 'પ્રશ્નની સંખ્યા મતદાન મર્યાદા કરતાં વધી ગઈ છે.',
'Err4'			=> 'પ્રશ્ન %s: જવાબનો એક પ્રકાર પસંદ કરવો જોઈએ.',
'Err5'			=> 'પ્રશ્ન %s: અમાન્ય મત - તમે આ મતદાન માટે મહત્તમ %s જવાબો જ પસંદ કરી શકો છો.',
'Err6'			=> 'અમાન્ય મત - તમારે દરેક પ્રશ્ન માટે જવાબ પસંદ કરવો આવશ્યક છે.',

);
translate_not_found
lang/Gujarati/post.php
<?php

// Language definitions used in post.php and edit.php
$lang_post = array(

// Post validation stuff (many are similiar to those in edit.php)
'No subject'		=>	'વિષયોમાં વિષય હોવો આવશ્યક છે.',
'No subject after censoring'	=>	'વિષયોમાં વિષય હોવો આવશ્યક છે. સેન્સરિંગ ફિલ્ટર્સ લાગુ કર્યા પછી, તમારો વિષય ખાલી હતો.',
'Too long subject'	=>	'વિષયો 70 અક્ષરોથી વધુ લાંબા ન હોઈ શકે.',
'No message'		=>	'તમારે સંદેશ દાખલ કરવો આવશ્યક છે.',
'No message after censoring'	=>	'તમારે સંદેશ દાખલ કરવો આવશ્યક છે. સેન્સરિંગ ફિલ્ટર્સ લાગુ કર્યા પછી, તમારો સંદેશ ખાલી હતો.',
'Too long message'	=>	'પોસ્ટ્સ %s અક્ષરોથી વધુ લાંબી ન હોઈ શકે.',
'All caps subject'	=>	'વિષયોમાં ફક્ત કેપિટલ અક્ષરો ન હોઈ શકે.',
'All caps message'	=>	'પોસ્ટ્સમાં ફક્ત કેપિટલ અક્ષરો ન હોઈ શકે.',
'Empty after strip'	=>	'એવું લાગે છે કે તમારી પોસ્ટ ફક્ત ખાલી BBCode થી બનેલી હતી. શક્ય છે કે આ એટલા માટે થયું હોય કારણ કે દા.ત. મહત્તમ અવતરણ ઊંડાઈ સ્તરને કારણે સૌથી અંદરનું અવતરણ કાઢી નાખવામાં આવ્યું હતું.',
'Too many censored words' => 'ઘણા શબ્દો સેન્સર કરવામાં આવ્યા છે.',

// Posting
'Post errors'		=>	'પોસ્ટ ભૂલો',
'Post errors info'	=>	'સંદેશ પોસ્ટ કરી શકાય તે પહેલાં નીચેની ભૂલો સુધારવાની જરૂર છે:',
'Post preview'		=>	'પોસ્ટ પૂર્વાવલોકન',
'Guest name'		=>	'નામ', // For guests (instead of Username)
'Post redirect'		=>	'પોસ્ટ દાખલ થઈ. રીડાયરેક્ટ કરી રહ્યું છે …',
'Post a reply'		=>	'જવાબ પોસ્ટ કરો',
'Post new topic'	=>	'નવો વિષય પોસ્ટ કરો',
'Hide smilies'		=>	'આ પોસ્ટ માટે સ્માઇલીઝને ચિહ્નો તરીકે ક્યારેય બતાવશો નહીં',
'Subscribe'			=>	'આ વિષય પર સબ્સ્ક્રાઇબ કરો',
'Stay subscribed'	=>	'આ વિષય પર સબ્સ્ક્રાઇબ રહો',
'Topic review'		=>	'વિષય સમીક્ષા (સૌથી નવું પ્રથમ)',
'Flood start'		=>	'પોસ્ટ્સ વચ્ચે ઓછામાં ઓછી %s સેકંડ પસાર થવી જોઈએ. કૃપા કરીને %s સેકંડ રાહ જુઓ અને ફરીથી પોસ્ટ કરવાનો પ્રયાસ કરો.',
'Preview'			=>	'પૂર્વાવલોકન', // submit button to preview message

'EditPost edit' => 'આપેલ સંદેશને પ્રતિબંધો વિના સંપાદિત કરવાની મંજૂરી આપવા માટે',
'Stick first post' => 'વિષયના બધા પૃષ્ઠો પર પ્રથમ પોસ્ટને સ્ટિક કરવા માટે',

// Edit post
'Edit post legend'	=>	'પોસ્ટ સંપાદિત કરો અને ફેરફારો સબમિટ કરો',
'Silent edit'		=>	'શાંત સંપાદન (વિષય દૃશ્યમાં "દ્વારા સંપાદિત ..." પ્રદર્શિત કરશો નહીં)',
'Edit post'			=>	'પોસ્ટ સંપાદિત કરો',
'Merge posts'			=>	'જો તમારી હોય તો પાછલી પોસ્ટ સાથે મર્જ કરો',
'Edit redirect'		=>	'પોસ્ટ અપડેટ થઈ. રીડાયરેક્ટ કરી રહ્યું છે …'

);
translate_not_found
lang/Gujarati/prof_reg.php
<?php

// Language definitions used in both profile.php and register.php
$lang_prof_reg = array(

'Email legend'				=>	'માન્ય ઇમેઇલ સરનામું દાખલ કરો',
'Email legend 2'			=>	'માન્ય ઇમેઇલ સરનામું દાખલ કરો અને પુષ્ટિ કરો',
'Localisation legend'		=>	'તમારા સ્થાનિકીકરણ વિકલ્પો સેટ કરો',
'Time zone'					=>	'સમય ઝોન',
'Time zone info'			=>	'ફોરમ સમય યોગ્ય રીતે પ્રદર્શિત કરવા માટે તમારે તમારો સ્થાનિક સમય ઝોન પસંદ કરવો આવશ્યક છે. જો ડેલાઇટ સેવિંગ્સ ટાઇમ અમલમાં હોય તો તમારે પૂરો પાડવામાં આવેલ વિકલ્પ પણ તપાસવો જોઈએ જે સમયને 1 કલાક આગળ વધારશે.',
'DST'						=>	'ડેલાઇટ સેવિંગ્સ ટાઇમ અમલમાં છે (સમય 1 કલાક આગળ વધારો).',
'Time format'				=>	'સમય ફોર્મેટ',
'Date format'				=>	'તારીખ ફોર્મેટ',
'Default'					=>	'ડિફૉલ્ટ',
'Language'					=>	'ભાષા',
'Email setting info'		=>	'તમારું ઇમેઇલ સરનામું અન્ય વપરાશકર્તાઓ માટે જોવા યોગ્ય રાખવું કે નહીં અને અન્ય વપરાશકર્તાઓને ફોરમ (ફોર્મ ઇમેઇલ) દ્વારા તમને ઇમેઇલ મોકલવાની મંજૂરી આપવી કે નહીં તે પસંદ કરો.',
'Email setting 1'			=>	'તમારું ઇમેઇલ સરનામું અન્ય વપરાશકર્તાઓને પ્રદર્શિત કરો.',
'Email setting 2'			=>	'તમારું ઇમેઇલ સરનામું છુપાવો પરંતુ ફોર્મ ઇમેઇલને મંજૂરી આપો.',
'Email setting 3'			=>	'તમારું ઇમેઇલ સરનામું છુપાવો અને ફોર્મ ઇમેઇલને નામંજૂર કરો.',
'Privacy options legend'	=>	'તમારા ગોપનીયતા વિકલ્પો સેટ કરો',
'Confirm pass'				=>	'પાસવર્ડ પુષ્ટિ કરો',
'Save user/pass'			=>	'મુલાકાતો વચ્ચે વપરાશકર્તાનામ અને પાસવર્ડ સાચવો.',
'Save user/pass info'		=>	'આ વિકલ્પ સેટ કરે છે કે ફોરમ તમને મુલાકાતો વચ્ચે "યાદ" રાખવું જોઈએ કે નહીં. જો સક્ષમ હોય, તો તમારે દર વખતે ફોરમની મુલાકાત લેતી વખતે લોગિન કરવાની જરૂર રહેશે નહીં. તમે આપમેળે લોગ ઇન થઈ જશો. ભલામણ કરેલ.',

'Username Error' => 'વપરાશકર્તાનામ અક્ષરથી શરૂ થવું જોઈએ અને તેમાં અક્ષરો, આંકડા, જગ્યા અને _ હોઈ શકે છે.',
'Username too short'		=>	'વપરાશકર્તાનામો ઓછામાં ઓછા 2 અક્ષરો લાંબા હોવા જોઈએ. કૃપા કરીને અન્ય (લાંબુ) વપરાશકર્તાનામ પસંદ કરો.',
'Username too long'			=>	'વપરાશકર્તાનામો 25 અક્ષરોથી વધુ લાંબા ન હોવા જોઈએ. કૃપા કરીને અન્ય (ટૂંકું) વપરાશકર્તાનામ પસંદ કરો.',
'Username guest'			=>	'વપરાશકર્તાનામ અતિથિ આરક્ષિત છે. કૃપા કરીને અન્ય વપરાશકર્તાનામ પસંદ કરો.',
'Username IP'				=>	'વપરાશકર્તાનામો IP સરનામાંના રૂપમાં ન હોઈ શકે. કૃપા કરીને અન્ય વપરાશકર્તાનામ પસંદ કરો.',
'Username reserved chars'	=>	'વપરાશકર્તાનામોમાં એક જ સમયે બધા અક્ષરો \', " અને [ અથવા ] ન હોઈ શકે. કૃપા કરીને અન્ય વપરાશકર્તાનામ પસંદ કરો.',
'Username BBCode'			=>	'વપરાશકર્તાનામોમાં ફોરમ દ્વારા ઉપયોગમાં લેવાતા કોઈપણ ટેક્સ્ટ ફોર્મેટિંગ ટેગ્સ (BBCode) ન હોઈ શકે. કૃપા કરીને અન્ય વપરાશકર્તાનામ પસંદ કરો.',
'Banned username'			=>	'તમે દાખલ કરેલ વપરાશકર્તાનામ આ ફોરમમાં પ્રતિબંધિત છે. કૃપા કરીને અન્ય વપરાશકર્તાનામ પસંદ કરો.',
'Pass too short'			=>	'પાસવર્ડ ઓછામાં ઓછા 9 અક્ષરો લાંબા હોવા જોઈએ. કૃપા કરીને અન્ય (લાંબો) પાસવર્ડ પસંદ કરો.',
'Pass not match'			=>	'પાસવર્ડ મેળ ખાતા નથી.',
'Banned email'				=>	'તમે દાખલ કરેલ ઇમેઇલ સરનામું આ ફોરમમાં પ્રતિબંધિત છે. કૃપા કરીને અન્ય ઇમેઇલ સરનામું પસંદ કરો.',
'Dupe email'				=>	'કોઈ અન્ય વ્યક્તિ તે ઇમેઇલ સરનામાં સાથે પહેલેથી જ નોંધાયેલ છે. કૃપા કરીને અન્ય ઇમેઇલ સરનામું પસંદ કરો.',
'Sig too long'			=>	'સહીઓ %1$s અક્ષરોથી વધુ લાંબી ન હોઈ શકે. કૃપા કરીને તમારી સહી %2$s અક્ષરો દ્વારા ઘટાડો.',
'Sig too many lines'	=>	'સહીઓમાં %s થી વધુ રેખાઓ ન હોઈ શકે.',
'Bad ICQ'					=>	'તમે અમાન્ય ICQ UIN દાખલ કર્યું છે. કૃપા કરીને પાછા જાઓ અને સુધારો.',

'UTC-12:00'					=>	'(UTC-12:00) આંતરરાષ્ટ્રીય તારીખ રેખા પશ્ચિમ',
'UTC-11:00'					=>	'(UTC-11:00) નિયુ, સમોઆ',
'UTC-10:00'					=>	'(UTC-10:00) હવાઈ-એલ્યુટિયન, કુક આઇલેન્ડ',
'UTC-09:30'					=>	'(UTC-09:30) માર્ક્વેસાસ ટાપુઓ',
'UTC-09:00'					=>	'(UTC-09:00) અલાસ્કા, ગેમ્બિયર ટાપુ',
'UTC-08:30'					=>	'(UTC-08:30) પિટકેર્ન ટાપુઓ',
'UTC-08:00'					=>	'(UTC-08:00) પેસિફિક',
'UTC-07:00'					=>	'(UTC-07:00) માઉન્ટેન',
'UTC-06:00'					=>	'(UTC-06:00) સેન્ટ્રલ',
'UTC-05:00'					=>	'(UTC-05:00) પૂર્વીય',
'UTC-04:00'					=>	'(UTC-04:00) એટલાન્ટિક',
'UTC-03:30'					=>	'(UTC-03:30) ન્યુફાઉન્ડલેન્ડ',
'UTC-03:00'					=>	'(UTC-03:00) એમેઝોન, મધ્ય ગ્રીનલેન્ડ',
'UTC-02:00'					=>	'(UTC-02:00) મધ્ય-એટલાન્ટિક',
'UTC-01:00'					=>	'(UTC-01:00) એઝોર્સ, કેપ વર્ડે, પૂર્વીય ગ્રીનલેન્ડ',
'UTC'						=>	'(UTC) પશ્ચિમી યુરોપિયન, ગ્રીનવિચ',
'UTC+01:00'					=>	'(UTC+01:00) મધ્ય યુરોપિયન, પશ્ચિમ આફ્રિકન',
'UTC+02:00'					=>	'(UTC+02:00) પૂર્વીય યુરોપિયન, મધ્ય આફ્રિકન',
'UTC+03:00'					=>	'(UTC+03:00) મોસ્કો, સેન્ટ પીટર્સબર્ગ, પૂર્વીય આફ્રિકન',
'UTC+03:30'					=>	'(UTC+03:30) ઈરાન',
'UTC+04:00'					=>	'(UTC+04:00) ગલ્ફ, ઇઝેવસ્ક, સમરા',
'UTC+04:30'					=>	'(UTC+04:30) અફઘાનિસ્તાન',
'UTC+05:00'					=>	'(UTC+05:00) પાકિસ્તાન, યેકાટેરિનબર્ગ',
'UTC+05:30'					=>	'(UTC+05:30) ભારત, શ્રીલંકા',
'UTC+05:45'					=>	'(UTC+05:45) નેપાળ',
'UTC+06:00'					=>	'(UTC+06:00) બાંગ્લાદેશ, ભૂતાન, નોવોસિબિર્સ્ક',
'UTC+06:30'					=>	'(UTC+06:30) કોકોસ ટાપુઓ, મ્યાનમાર',
'UTC+07:00'					=>	'(UTC+07:00) ઇન્ડોચાઇના, ક્રાસ્નોયાર્સ્ક',
'UTC+08:00'					=>	'(UTC+08:00) ગ્રેટર ચાઇના, ઓસ્ટ્રેલિયન વેસ્ટર્ન, ઇર્કુત્સ્ક',
'UTC+08:45'					=>	'(UTC+08:45) દક્ષિણપૂર્વીય પશ્ચિમ ઓસ્ટ્રેલિયા',
'UTC+09:00'					=>	'(UTC+09:00) જાપાન, કોરિયા, યાકુત્સ્ક',
'UTC+09:30'					=>	'(UTC+09:30) ઓસ્ટ્રેલિયન સેન્ટ્રલ',
'UTC+10:00'					=>	'(UTC+10:00) ઓસ્ટ્રેલિયન પૂર્વીય, વ્લાદિવોસ્તોક, મગાદાન',
'UTC+10:30'					=>	'(UTC+10:30) લોર્ડ હોવ',
'UTC+11:00'					=>	'(UTC+11:00) સોલોમન ટાપુ, ચોકુર્દાખ',
'UTC+11:30'					=>	'(UTC+11:30) નોર્ફોક ટાપુ',
'UTC+12:00'					=>	'(UTC+12:00) ન્યુઝીલેન્ડ, ફીજી, પેટ્રોપાવલોવસ્ક-કામચત્સ્કી',
'UTC+12:45'					=>	'(UTC+12:45) ચેટમ ટાપુઓ',
'UTC+13:00'					=>	'(UTC+13:00) ટોંગા, ફોનિક્સ ટાપુઓ',
'UTC+14:00'					=>	'(UTC+14:00) લાઇન ટાપુઓ'

);
translate_not_found
lang/Gujarati/profile.php
<?php

// Language definitions used in profile.php
$lang_profile = array(

// Navigation and sections
'Profile menu'					=>	'પ્રોફાઇલ મેનુ',
'Section essentials'			=>	'આવશ્યકતાઓ',
'Section personal'				=>	'વ્યક્તિગત',
'Section messaging'				=>	'સંદેશા',
'Section personality'			=>	'વ્યક્તિત્વ',
'Section display'				=>	'ડિસ્પ્લે',
'Section privacy'				=>	'ગોપનીયતા',
'Section admin'					=>	'વહીવટ',

// Miscellaneous
'Username and pass legend'		=>	'તમારું વપરાશકર્તાનામ અને પાસવર્ડ દાખલ કરો',
'Personal details legend'		=>	'તમારી વ્યક્તિગત વિગતો દાખલ કરો',
'Contact details legend'		=>	'તમારી સંદેશા વિગતો દાખલ કરો',
'User activity'					=>	'વપરાશકર્તા પ્રવૃત્તિ',
'Paginate info'					=>	'તમે દરેક પૃષ્ઠ પર જોવા માંગો છો તે વિષયો અને પોસ્ટ્સની સંખ્યા દાખલ કરો.',

// Password stuff
'Pass key bad'					=>	'ઉલ્લેખિત પાસવર્ડ સક્રિયકરણ કી ખોટી હતી અથવા સમાપ્ત થઈ ગઈ છે. કૃપા કરીને નવો પાસવર્ડ ફરીથી વિનંતી કરો. જો તે નિષ્ફળ જાય, તો ફોરમ સંચાલકનો આના પર સંપર્ક કરો',
'Pass updated'					=>	'તમારો પાસવર્ડ અપડેટ કરવામાં આવ્યો છે. તમે હવે તમારા નવા પાસવર્ડથી લોગિન કરી શકો છો.',
'Pass updated redirect'			=>	'પાસવર્ડ અપડેટ થયો. રીડાયરેક્ટ કરી રહ્યું છે …',
'Wrong pass'					=>	'ખોટો જૂનો પાસવર્ડ.',
'Change pass'					=>	'પાસવર્ડ બદલો',
'Change pass legend'			=>	'તમારો નવો પાસવર્ડ દાખલ કરો અને પુષ્ટિ કરો',
'Old pass'						=>	'જૂનો પાસવર્ડ',
'New pass'						=>	'નવો પાસવર્ડ',
'Confirm new pass'				=>	'નવો પાસવર્ડ પુષ્ટિ કરો',
'Pass info'						=>	'પાસવર્ડ ઓછામાં ઓછા 9 અક્ષરો લાંબા હોવા જોઈએ. પાસવર્ડ કેસ સંવેદનશીલ છે.',

// Email stuff
'Email key bad'					=>	'ઉલ્લેખિત ઇમેઇલ સક્રિયકરણ કી ખોટી હતી અથવા સમાપ્ત થઈ ગઈ છે. કૃપા કરીને ઇમેઇલ સરનામું બદલવાની ફરીથી વિનંતી કરો. જો તે નિષ્ફળ જાય, તો ફોરમ સંચાલકનો આના પર સંપર્ક કરો',
'Email updated'					=>	'તમારું ઇમેઇલ સરનામું અપડેટ કરવામાં આવ્યું છે.',
'Activate email sent'			=>	'નવા ઇમેઇલ સરનામાંને કેવી રીતે સક્રિય કરવું તેની સૂચનાઓ સાથે ઉલ્લેખિત સરનામાં પર એક ઇમેઇલ મોકલવામાં આવ્યો છે. જો તે ન આવે તો તમે ફોરમ સંચાલકનો આના પર સંપર્ક કરી શકો છો',
'Email legend'					=>	'તમારું નવું ઇમેઇલ સરનામું દાખલ કરો',
'Email instructions'			=>	'તમારા નવા સરનામાં પર સક્રિયકરણ લિંક સાથેનો એક ઇમેઇલ મોકલવામાં આવશે. નવું સરનામું સક્રિય કરવા માટે તમારે પ્રાપ્ત થયેલ ઇમેઇલમાંની લિંક પર ક્લિક કરવું આવશ્યક છે.',
'Change email'					=>	'ઇમેઇલ સરનામું બદલો',
'New email'						=>	'નવું ઇમેઇલ',

// Avatar upload stuff
'Avatars disabled'				=>	'સંચાલકે અવતાર સમર્થન અક્ષમ કર્યું છે.',
'Too large ini'					=>	'પસંદ કરેલી ફાઇલ અપલોડ કરવા માટે ખૂબ મોટી હતી. સર્વરે અપલોડ કરવાની મંજૂરી આપી ન હતી.',
'Partial upload'				=>	'પસંદ કરેલી ફાઇલ ફક્ત આંશિક રીતે અપલોડ કરવામાં આવી હતી. કૃપા કરીને ફરી પ્રયાસ કરો.',
'No tmp directory'				=>	'PHP અપલોડ કરેલી ફાઇલને અસ્થાયી સ્થાન પર સાચવવામાં અસમર્થ હતું.',
'No file'						=>	'તમે અપલોડ કરવા માટે કોઈ ફાઇલ પસંદ કરી નથી.',
'Bad type'						=>	'તમે અપલોડ કરવાનો પ્રયાસ કર્યો તે ફાઇલ માન્ય પ્રકારની નથી. માન્ય પ્રકારો gif, jpeg અને png છે.',
'Too wide or high'				=>	'તમે અપલોડ કરવાનો પ્રયાસ કર્યો તે ફાઇલ મહત્તમ માન્ય કરતાં પહોળી અને/અથવા ઊંચી છે',
'Too large'						=>	'તમે અપલોડ કરવાનો પ્રયાસ કર્યો તે ફાઇલ મહત્તમ માન્ય કરતાં મોટી છે',
'pixels'						=>	'પિક્સેલ્સ',
'bytes'							=>	'બાઇટ્સ',
'Move failed'					=>	'સર્વર અપલોડ કરેલી ફાઇલ સાચવવામાં અસમર્થ હતું. કૃપા કરીને ફોરમ સંચાલકનો આના પર સંપર્ક કરો',
'Unknown failure'				=>	'એક અજ્ઞાત ભૂલ આવી. કૃપા કરીને ફરી પ્રયાસ કરો.',
'Avatar upload redirect'		=>	'અવતાર અપલોડ થયો. રીડાયરેક્ટ કરી રહ્યું છે …',
'Avatar deleted redirect'		=>	'અવતાર કાઢી નાખવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …',
'Avatar desc'					=>	'અવતાર એ એક નાની છબી છે જે તમારી પોસ્ટ્સમાં તમારા વપરાશકર્તાનામ હેઠળ પ્રદર્શિત થશે. તે આનાથી મોટું ન હોવું જોઈએ',
'Upload avatar'					=>	'અવતાર અપલોડ કરો',
'Upload avatar legend'			=>	'અપલોડ કરવા માટે અવતાર ફાઇલ દાખલ કરો',
'Delete avatar'					=>	'અવતાર કાઢી નાખો', // only for admins
'File'							=>	'ફાઇલ',
'Upload'						=>	'અપલોડ કરો', // submit button

// Form validation stuff
'Forbidden title'				=>	'તમે દાખલ કરેલ શીર્ષકમાં પ્રતિબંધિત શબ્દ છે. તમારે અલગ શીર્ષક પસંદ કરવું આવશ્યક છે.',
'Profile redirect'				=>	'પ્રોફાઇલ અપડેટ થઈ. રીડાયરેક્ટ કરી રહ્યું છે …',

// Profile display stuff
'Users profile'					=>	'%s ની પ્રોફાઇલ',
'Username info'					=>	'વપરાશકર્તાનામ: %s',
'Email info'					=>	'ઇમેઇલ: %s',
'Posts info'					=>	'પોસ્ટ્સ: %s',
'Registered info'				=>	'નોંધાયેલ: %s',
'Last post info'				=>	'છેલ્લી પોસ્ટ: %s',
'Last visit info'        =>  'છેલ્લી મુલાકાત: %s',
'Show posts'					=>	'બધી પોસ્ટ્સ બતાવો',
'Show topics'					=>	'બધા વિષયો બતાવો',
'Show subscriptions'			=>	'બધા સબ્સ્ક્રિપ્શન્સ બતાવો',
'Realname'						=>	'વાસ્તવિક નામ',
'Location'						=>	'સ્થાન',
'Website'						=>	'વેબસાઇટ',
'Invalid website URL'					=>	'તમે દાખલ કરેલ વેબસાઇટ URL અમાન્ય છે.',
'Website not allowed'			=>	'તમને હજી સુધી તમારી પ્રોફાઇલમાં વેબસાઇટ ઉમેરવાની મંજૂરી નથી.',
'Jabber'						=>	'જેબર',
'ICQ'							=>	'ICQ',
'Avatar'						=>	'અવતાર',
'Signature'						=>	'સહી',
'Sig max size'					=>	'મહત્તમ લંબાઈ: %s અક્ષરો / મહત્તમ રેખાઓ: %s',
'Avatar legend'					=>	'તમારા અવતાર ડિસ્પ્લે વિકલ્પો સેટ કરો',
'Avatar info'					=>	'અવતાર એ એક નાની છબી છે જે તમારી બધી પોસ્ટ્સ સાથે પ્રદર્શિત થશે. તમે નીચેની લિંક પર ક્લિક કરીને અવતાર અપલોડ કરી શકો છો.',
'Change avatar'					=>	'અવતાર બદલો',
'Signature legend'				=>	'તમારી સહી કંપોઝ કરો',
'Signature info'				=>	'સહી એ એક નાનો લખાણનો ટુકડો છે જે તમારી પોસ્ટ્સ સાથે જોડાયેલ છે. તેમાં, તમે લગભગ કંઈપણ દાખલ કરી શકો છો. કદાચ તમે તમારું મનપસંદ અવતરણ અથવા તમારી રાશિ દાખલ કરવા માંગો છો. તે તમારા પર છે! જો આ ચોક્કસ ફોરમમાં મંજૂરી હોય તો તમે તમારી સહીમાં BBCode નો ઉપયોગ કરી શકો છો. જ્યારે પણ તમે તમારી સહી સંપાદિત કરો ત્યારે નીચે સૂચિબદ્ધ મંજૂર/સક્ષમ સુવિધાઓ તમે જોઈ શકો છો.',
'Sig preview'					=>	'વર્તમાન સહી પૂર્વાવલોકન:',
'No sig'						=>	'પ્રોફાઇલમાં હાલમાં કોઈ સહી સંગ્રહિત નથી.',
'Signature quote/code/list/h'	=>	'અવતરણ, કોડ, hr, કદ, ઓડિયો, વિડિઓ, સૂચિ, સ્પોઇલર અને શીર્ષક BBCodes સહીઓમાં મંજૂરી નથી.',
'Topics per page'				=>	'વિષયો',
'Posts per page'				=>	'પોસ્ટ્સ',
'Leave blank'					=>	'ફોરમ ડિફૉલ્ટનો ઉપયોગ કરવા માટે ખાલી રાખો.',
'Subscription legend'			=>	'તમારા સબ્સ્ક્રિપ્શન વિકલ્પો સેટ કરો',
'Notify full'					=>	'સબ્સ્ક્રિપ્શન સૂચના ઇમેઇલ્સમાં નવી પોસ્ટ્સનું સાદું લખાણ સંસ્કરણ શામેલ કરો.',
'Auto notify full'				=>	'તમે પોસ્ટ કરો છો તે દરેક વિષય પર આપમેળે સબ્સ્ક્રાઇબ કરો.',
'Show smilies'					=>	'સ્માઇલીઝને ગ્રાફિક ચિહ્નો તરીકે બતાવો.',
'Show images'					=>	'પોસ્ટ્સમાં છબીઓ બતાવો.',
'Show images sigs'				=>	'વપરાશકર્તા સહીઓમાં છબીઓ બતાવો.',
'Show avatars'					=>	'પોસ્ટ્સમાં વપરાશકર્તા અવતાર બતાવો.',
'Show sigs'						=>	'વપરાશકર્તા સહીઓ બતાવો.',
'Style legend'					=>	'તમારી પસંદીદા શૈલી પસંદ કરો',
'Styles'						=>	'શૈલીઓ',
'Admin note'					=>	'એડમિન નોંધ',
'Pagination legend'				=>	'તમારા પૃષ્ઠક્રમાંકન વિકલ્પો દાખલ કરો',
'Post display legend'			=>	'પોસ્ટ્સ જોવા માટે તમારા વિકલ્પો સેટ કરો',
'Post display info'				=>	'જો તમે ધીમા કનેક્શન પર હોવ, તો આ વિકલ્પોને અક્ષમ કરવાથી, ખાસ કરીને પોસ્ટ્સ અને સહીઓમાં છબીઓ બતાવવાથી, પૃષ્ઠો ઝડપથી લોડ થશે.',
'Instructions'					=>	'જ્યારે તમે તમારી પ્રોફાઇલ અપડેટ કરશો, ત્યારે તમને આ પૃષ્ઠ પર પાછા રીડાયરેક્ટ કરવામાં આવશે.',

// Administration stuff
'Group membership legend'		=>	'વપરાશકર્તા જૂથ પસંદ કરો',
'Save'							=>	'સાચવો',
'Set mods legend'				=>	'મધ્યસ્થી ઍક્સેસ સેટ કરો',
'Moderator in info'				=>	'આ વપરાશકર્તાને કયા ફોરમનું મધ્યસ્થી કરવાની મંજૂરી આપવી જોઈએ તે પસંદ કરો. નોંધ: આ ફક્ત મધ્યસ્થીઓને લાગુ પડે છે. સંચાલકો પાસે હંમેશા બધા ફોરમમાં સંપૂર્ણ પરવાનગીઓ હોય છે.',
'Update forums'					=>	'ફોરમ અપડેટ કરો',
'Delete ban legend'				=>	'વપરાશકર્તા કાઢી નાખો (ફક્ત સંચાલકો) અથવા પ્રતિબંધિત કરો',
'Delete user'					=>	'વપરાશકર્તા કાઢી નાખો',
'Ban user'						=>	'વપરાશકર્તા પ્રતિબંધિત કરો',
'Confirm delete legend'			=>	'મહત્વપૂર્ણ: વપરાશકર્તા કાઢી નાખતા પહેલા વાંચો',
'Confirm delete user'			=>	'વપરાશકર્તા કાઢી નાખવાની પુષ્ટિ કરો',
'Confirmation info'				=>	'કૃપા કરીને પુષ્ટિ કરો કે તમે વપરાશકર્તા કાઢી નાખવા માંગો છો', // the username will be appended to this string
'Delete warning'				=>	'ચેતવણી! કાઢી નાખેલા વપરાશકર્તાઓ અને/અથવા પોસ્ટ્સ પુનઃસ્થાપિત કરી શકાતા નથી. જો તમે આ વપરાશકર્તા દ્વારા કરાયેલી પોસ્ટ્સ કાઢી ન નાખવાનું પસંદ કરો છો, તો પોસ્ટ્સ ફક્ત પછીથી જાતે જ કાઢી શકાય છે.',
'Delete posts'					=>	'આ વપરાશકર્તાએ બનાવેલી કોઈપણ પોસ્ટ્સ અને વિષયો કાઢી નાખો.',
'Delete'						=>	'કાઢી નાખો', // submit button (confirm user delete)
'User delete redirect'			=>	'વપરાશકર્તા કાઢી નાખવામાં આવ્યો. રીડાયરેક્ટ કરી રહ્યું છે …',
'User promote redirect'			=>	'વપરાશકર્તા પ્રમોટ થયો. રીડાયરેક્ટ કરી રહ્યું છે …',
'Group membership redirect'		=>	'જૂથ સભ્યપદ સાચવવામાં આવ્યું. રીડાયરેક્ટ કરી રહ્યું છે …',
'Update forums redirect'		=>	'ફોરમ મધ્યસ્થી અધિકારો અપડેટ થયા. રીડાયરેક્ટ કરી રહ્યું છે …',
'Ban redirect'					=>	'રીડાયરેક્ટ કરી રહ્યું છે …',
'No delete admin message'		=>	'સંચાલકોને કાઢી શકાતા નથી. આ વપરાશકર્તાને કાઢી નાખવા માટે, તમારે પહેલા તેને/તેણીને અન્ય વપરાશકર્તા જૂથમાં ખસેડવું આવશ્યક છે.',

);
translate_not_found
lang/Gujarati/re.php
<?php

// Language definitions used in various scripts
$lang_re = array(

'Redirect' => 'રીડાયરેક્ટ',
'Text1' => 'તમે ફોરમ છોડીને બાહ્ય સંદર્ભ હેઠળ પસાર થવા જઈ રહ્યા છો ',
'Text2' => 'જો તમે તમારો વિચાર બદલ્યો હોય, તો આ વિંડો <a href="#" onclick="fluxrdr();">બંધ કરો</a>.',

);
translate_not_found
lang/Gujarati/register.php
<?php

// Language definitions used in register.php
$lang_register = array(

// Miscellaneous
'No new regs'				=>	'આ ફોરમ નવી નોંધણીઓ સ્વીકારી રહ્યું નથી.',
'Reg cancel redirect'		=>	'નોંધણી રદ થઈ. રીડાયરેક્ટ કરી રહ્યું છે …',
'Forum rules'				=>	'ફોરમ નિયમો',
'Rules legend'				=>	'નોંધણી કરવા માટે તમારે નીચેના સાથે સંમત થવું આવશ્યક છે',
'Registration flood'		=>	'છેલ્લા કલાકમાં તમારા જેવા જ IP સરનામાં સાથે નવો વપરાશકર્તા નોંધાયો હતો. નોંધણી ફ્લડિંગને રોકવા માટે, સમાન IP માંથી નોંધણીઓ વચ્ચે ઓછામાં ઓછો એક કલાક પસાર થવો જોઈએ. અસુવિધા બદલ માફ કરશો.',
'Agree'						=>	'સંમત થાઓ',
'Cancel'					=>	'રદ કરો',
'Register'					=>	'નોંધણી કરો',

// Form validation stuff (some of these are also used in post.php)
'Registration errors'		=>	'નોંધણી ભૂલો',
'Registration errors info'	=>	'તમે નોંધણી કરી શકો તે પહેલાં નીચેની ભૂલો સુધારવાની જરૂર છે:',
'Username censor'			=>	'તમે દાખલ કરેલ વપરાશકર્તાનામમાં એક અથવા વધુ સેન્સર કરેલા શબ્દો છે. કૃપા કરીને અલગ વપરાશકર્તાનામ પસંદ કરો.',
'Username dupe 1'			=>	'કોઈ વ્યક્તિ તે વપરાશકર્તાનામ સાથે પહેલેથી જ નોંધાયેલ છે',
'Username dupe 2'			=>	'તમે દાખલ કરેલ વપરાશકર્તાનામ ખૂબ સમાન છે. વપરાશકર્તાનામ તેનાથી ઓછામાં ઓછા એક આલ્ફાન્યુમેરિકલ અક્ષર (a-z અથવા 0-9) દ્વારા ભિન્ન હોવું આવશ્યક છે. કૃપા કરીને અલગ વપરાશકર્તાનામ પસંદ કરો.',
'Email not match'			=>	'ઇમેઇલ સરનામાં મેળ ખાતા નથી.',

// Registration email stuff
'Reg email'					=>	'નોંધણી કરવા બદલ આભાર. તમારો પાસવર્ડ ઉલ્લેખિત સરનામાં પર મોકલવામાં આવ્યો છે. જો તે ન આવે તો તમે ફોરમ સંચાલકનો આના પર સંપર્ક કરી શકો છો',
'Reg complete'				=>	'નોંધણી પૂર્ણ થઈ. લોગ ઇન કરી રહ્યું છે અને રીડાયરેક્ટ કરી રહ્યું છે …',

// Register info
'Desc 1'					=>	'નોંધણી તમને અન્યથા અનુપલબ્ધ સંખ્યાબંધ સુવિધાઓ અને ક્ષમતાઓનો ઍક્સેસ આપશે. આ કાર્યોમાં પોસ્ટ્સ સંપાદિત કરવાની અને કાઢી નાખવાની ક્ષમતા, તમારી પોસ્ટ્સ સાથે આવતી તમારી પોતાની સહી ડિઝાઇન કરવાની અને ઘણું બધું શામેલ છે. જો તમને આ ફોરમ સંબંધિત કોઈ પ્રશ્નો હોય, તો તમારે સંચાલકને પૂછવું જોઈએ.',
'Desc 2'					=>	'નીચે એક ફોર્મ છે જે તમારે નોંધણી કરવા માટે ભરવું આવશ્યક છે. એકવાર તમે નોંધણી કરાવી લો, પછી તમારે તમારી પ્રોફાઇલની મુલાકાત લેવી જોઈએ અને તમે બદલી શકો તેવી વિવિધ સેટિંગ્સની સમીક્ષા કરવી જોઈએ. નીચેના ક્ષેત્રો તમે તમારી પ્રોફાઇલમાં બદલી શકો તેવી બધી સેટિંગ્સનો માત્ર એક નાનો ભાગ બનાવે છે.',
'Username legend'			=>	'કૃપા કરીને 2 થી 25 અક્ષરો લાંબુ વપરાશકર્તાનામ દાખલ કરો',
'Pass legend'				=>	'કૃપા કરીને તમારો પસંદ કરેલો પાસવર્ડ દાખલ કરો અને પુષ્ટિ કરો',
'Pass info'					=>	'પાસવર્ડ ઓછામાં ઓછા 9 અક્ષરો લાંબા હોવા જોઈએ. પાસવર્ડ કેસ સંવેદનશીલ છે.',
'Email info'				=>	'તમારે માન્ય ઇમેઇલ સરનામું દાખલ કરવું આવશ્યક છે કારણ કે તમારો રેન્ડમલી જનરેટ થયેલો પાસવર્ડ તે સરનામાં પર મોકલવામાં આવશે.',
'Confirm email'				=>	'ઇમેઇલ સરનામું પુષ્ટિ કરો',

);
translate_not_found
lang/Gujarati/search.php
<?php

// Language definitions used in search.php
$lang_search = array(

// The search form
'User search'						=>	'વપરાશકર્તા શોધો',
'No search permission'				=>	'તમારી પાસે શોધ સુવિધાનો ઉપયોગ કરવાની પરવાનગી નથી.',
'Search flood'						=>	'શોધ વચ્ચે ઓછામાં ઓછી %s સેકંડ પસાર થવી જોઈએ. કૃપા કરીને %s સેકંડ રાહ જુઓ અને ફરીથી શોધવાનો પ્રયાસ કરો.',
'Search'							=>	'શોધો',
'Search criteria legend'			=>	'તમારા શોધ માપદંડ દાખલ કરો',
'Search info'						=>	'કીવર્ડ દ્વારા શોધવા માટે, શોધવા માટે એક શબ્દ અથવા શબ્દો દાખલ કરો. શબ્દોને જગ્યાઓથી અલગ કરો. તમારી શોધને સુધારવા માટે AND, OR અને NOT નો ઉપયોગ કરો. લેખક દ્વારા શોધવા માટે તે લેખકનું વપરાશકર્તાનામ દાખલ કરો જેની પોસ્ટ્સ તમે શોધવા માંગો છો. આંશિક મેળ માટે વાઇલ્ડકાર્ડ અક્ષર * નો ઉપયોગ કરો.',
'Keyword search'					=>	'કીવર્ડ શોધો',
'Author search'						=>	'લેખક શોધો',
'Search in legend'					=>	'ક્યાં શોધવું તે પસંદ કરો',
'Search in info'					=>	'તમે કયા ફોરમમાં શોધવા માંગો છો તે પસંદ કરો અને જો તમે વિષયના વિષયો, સંદેશ લખાણ અથવા બંનેમાં શોધવા માંગતા હોવ.',
'Search multiple forums info'		=>	'જો કોઈ ફોરમ પસંદ ન હોય, તો બધા ફોરમ શોધવામાં આવશે.',
'Forum search'						=>	'ફોરમ',
'Search in'							=>	'આમાં શોધો',
'Message and subject'				=>	'સંદેશ લખાણ અને વિષય વિષય',
'Message only'						=>	'ફક્ત સંદેશ લખાણ',
'Topic only'						=>	'ફક્ત વિષય વિષય',
'Sort by'							=>	'આના દ્વારા સૉર્ટ કરો',
'Sort order'						=>	'સૉર્ટ ક્રમ',
'Search results legend'				=>	'શોધ પરિણામો કેવી રીતે જોવા તે પસંદ કરો',
'Search results info'				=>	'તમે તમારા પરિણામોને કેવી રીતે સૉર્ટ કરવા અને બતાવવા તે પસંદ કરી શકો છો.',
'Sort by post time'					=>	'પોસ્ટ સમય',
'Sort by author'					=>	'લેખક',
'Sort by subject'					=>	'વિષય',
'Sort by forum'						=>	'ફોરમ',
'Ascending'							=>	'ચડતો ક્રમ',
'Descending'						=>	'ઉતરતો ક્રમ',
'Show as'							=>	'પરિણામો આ રીતે બતાવો',
'Show as topics'					=>	'વિષયો',
'Show as posts'						=>	'પોસ્ટ્સ',

// Results
'Search'							=>	'શોધો',
'Search results'					=>	'શોધ પરિણામો',
'Quick search show_new'				=>	'નવું',
'Quick search show_recent'			=>	'સક્રિય',
'Quick search show_unanswered'		=>	'અણઉત્તરિત',
'Quick search show_replies'			=>	'પોસ્ટ કરેલ',
'Quick search show_user_topics'		=>	'%s દ્વારા વિષયો',
'Quick search show_user_posts'		=>	'%s દ્વારા પોસ્ટ્સ',
'Quick search show_subscriptions'	=>	'%s દ્વારા સબ્સ્ક્રાઇબ કરેલ',
'Quick search show_user_warn' => '%s માટે ચેતવણીઓ',
'By keywords show as topics'		=>	'\'%s\' ધરાવતી પોસ્ટ્સ સાથેના વિષયો',
'By keywords show as posts'			=>	'\'%s\' ધરાવતી પોસ્ટ્સ',
'By user show as topics'			=>	'%s દ્વારા પોસ્ટ્સ સાથેના વિષયો',
'By user show as posts'				=>	'%s દ્વારા પોસ્ટ્સ',
'By both show as topics'			=>	'\'%2$s\' દ્વારા \'%1$s\' ધરાવતી પોસ્ટ્સ સાથેના વિષયો',
'By both show as posts'				=>	'\'%2$s\' દ્વારા \'%1$s\' ધરાવતી પોસ્ટ્સ',
'No terms'							=>	'તમારે શોધવા માટે ઓછામાં ઓછો એક કીવર્ડ અને/અથવા લેખક દાખલ કરવો પડશે. શોધ શબ્દો ઓછામાં ઓછા ત્રણ અક્ષરો લાંબા હોવા જોઈએ.',
'No hits'							=>	'તમારી શોધમાં કોઈ પરિણામ મળ્યું નથી.',
'No user posts'						=>	'આ ફોરમમાં આ વપરાશકર્તા દ્વારા કોઈ પોસ્ટ્સ નથી.',
'No user topics'					=>	'આ ફોરમમાં આ વપરાશકર્તા દ્વારા કોઈ વિષયો નથી.',
'No subscriptions'					=>	'આ વપરાશકર્તા હાલમાં કોઈપણ વિષયો પર સબ્સ્ક્રાઇબ નથી.',
'No new posts'						=>	'તમારી છેલ્લી મુલાકાત પછી નવી પોસ્ટ્સ સાથે કોઈ વિષયો નથી.',
'No recent posts'					=>	'છેલ્લા 24 કલાકમાં કોઈ નવી પોસ્ટ્સ કરવામાં આવી નથી.',
'No unanswered'						=>	'આ ફોરમમાં કોઈ અણઉત્તરિત પોસ્ટ્સ નથી.',
'Go to post'						=>	'પોસ્ટ પર જાઓ',
'Go to topic'						=>	'વિષય પર જાઓ'

);
translate_not_found
lang/Gujarati/security.php
<?php

$lang_sec = array(

'Not robot' => 'હું રોબોટ નથી',
'Enable JS' => 'જાવાસ્ક્રિપ્ટ સક્ષમ કરો અને આ પૃષ્ઠ અપડેટ કરો.',

'Error 1' => 'ફોર્મમાંથી ડેટા આંશિક રીતે મેળવવામાં આવે છે.',
'Error 2' => 'તમારા બ્રાઉઝરે સેવા ડેટા ટ્રાન્સફર કર્યો નથી.',
'Error 3' => 'ફોર્મનો ઓળખકર્તા db માં ગેરહાજર છે.',
'Error 4' => 'ફોર્મ મેળવ્યા પછી તમારું IP સરનામું બદલાઈ ગયું છે.',
'Error 5' => 'ડેટા ખૂબ ઝડપથી મોકલવામાં આવે છે. તમે રોબોટ છો ;)',
'Error 6' => 'ફોર્મમાં ડેટા એન્ટ્રીનો સમય સમાપ્ત થઈ ગયો છે.',
'Error 7' => 'કેપ્ચા ભૂલ. જવાબ ખોટો છે.',
'Error 8' => 'જાવાસ્ક્રિપ્ટ સક્ષમ કરો અને આ પૃષ્ઠ અપડેટ કરો.',

'Captcha legend' => 'તમે માનવ છો?',
'Captcha text' => 'કૃપા કરીને સાબિત કરો કે તમે માનવ છો.',

'Idx=' => array('=', 'બરાબર', 'છે'),
'Idx-' => array('-', 'ઓછા', 'બાદબાકી'),
'Idx+' => array('+', 'વત્તા', 'ઉમેરો'),
'Idx*' => array('*', 'x', 'х', 'ગુણ્યા'),
'Idx/' => array('/', 'ભાગ્યા'),
'Idx0' => array('0', 'શૂન્ય'),
'Idx1' => array('1', 'એક'),
'Idx2' => array('2', 'બે'),
'Idx3' => array('3', 'ત્રણ'),
'Idx4' => array('4', 'ચાર'),
'Idx5' => array('5', 'પાંચ'),
'Idx6' => array('6', 'છ'),
'Idx7' => array('7', 'સાત'),
'Idx8' => array('8', 'આઠ'),
'Idx9' => array('9', 'નવ'),

);
translate_not_found
lang/Gujarati/stopwords.txt
વિશે
પછી
પહેલાં
બધા
લગભગ
સાથે
પણ
કોઈપણ
કોઈપણ
ક્યાંય
છે
નથી
આસપાસ
પૂછો
હતા
પહેલાં
હોવું
વચ્ચે
પરંતુ
આવ્યા
શકે
શકતા નથી
આવો
શક્યા
શક્યા નથી
કર્યું
કર્યું નથી
કરે છે
કરતું નથી
નથી
દરેક
ક્યાં તો
અન્યથા
પણ
દરેક
દરેક વ્યક્તિ
દરેક જણ
શોધો
માટે
માંથી
મેળવો
જઈ રહ્યું છે
ગયું
મળ્યું
હતું
છે
છે
નથી
હોવું
તેણીના
અહીં
તેણીનું
તેને
તેનું
કેવી રીતે
હું કરીશ
હું છું
માં
નથી
તે થશે
તેનું
તે છે
હું છું
ફક્ત
જાણો
ઓછું
જેમ
બનાવો
ઘણા
શકે
વધુ
સૌથી વધુ
ઘણું
જ જોઈએ
નજીક
ક્યારેય નહીં
કોઈ નહીં
કંઈ નહીં
હવે
બંધ
ઘણી વાર
એકવાર
એક
ફક્ત
અન્ય
આપણું
આપણા
આપણું
બહાર
ઉપર
કૃપા કરીને
તેના બદલે
ખરેખર
કહ્યું
જુઓ
તેણી
જોઈએ
નાનું
કેટલાક
કંઈક
ક્યારેક
ક્યાંક
લો
કરતાં
આભાર
આભાર
તે
તે છે
આ
તેમનું
તેમનું
તેમને
પછી
ત્યાં
આ
તેઓ
વસ્તુ
વિચારો
આ
તે
જોકે
દ્વારા
આમ
પણ
સાચું
બે
હેઠળ
જ્યાં સુધી
ઉપર
ઉપયોગ કરો
ખૂબ
માંગો છો
હતું
માર્ગ
સારું
હતા
શું
ક્યારે
ક્યાં
જે
કોણ
કોને
કોનું
શા માટે
કરશે
સાથે
અંદર
વિના
કરશે
હા
હજુ સુધી
તમે
તમારું
તમે છો
તમારું
http
https
ftp
www
com
net
org
translate_not_found
lang/Gujarati/subforums.php
<?php

$lang_subforums = array(

'Sub forum' => 'પેટા ફોરમ',
'Sub forums' => 'પેટા ફોરમ્સ',
'Parent forum' => 'પિતૃ ફોરમ',
'No parent forum' => 'કોઈ પિતૃ ફોરમ નથી',

);
translate_not_found
lang/Gujarati/topic.php
<?php

// Language definitions used in viewtopic.php
$lang_topic = array(

'Post reply'		=>	'જવાબ પોસ્ટ કરો',
'Topic closed'		=>	'વિષય બંધ',
'From'				=>	'માંથી:', // User location
'Promote user'		=>	'વપરાશકર્તાને પ્રમોટ કરો',
'IP address logged'	=>	'IP સરનામું લોગ થયું',
'Note'				=>	'નોંધ:', // Admin note
'Posts'				=>	'પોસ્ટ્સ:',
'Registered'		=>	'નોંધાયેલ:',
'Replies'			=>	'જવાબો:',
'Website'			=>	'વેબસાઇટ',
'Guest'				=>	'મહેમાન',
'Online'			=>	'ઓનલાઈન',
'Offline'			=>	'ઓફલાઈન',
'Last edit'			=>	'દ્વારા છેલ્લે સંપાદિત',
'Report'			=>	'અહેવાલ',
'Delete'			=>	'કાઢી નાખો',
'Edit'				=>	'સંપાદિત કરો',
'Quote'				=>	'અવતરણ',
'Is subscribed'		=>	'તમે હાલમાં આ વિષયના સબ્સ્ક્રાઇબર છો',
'Unsubscribe'		=>	'અનસબ્સ્ક્રાઇબ કરો',
'Subscribe'			=>	'આ વિષય પર સબ્સ્ક્રાઇબ કરો',
'Quick post'		=>	'ઝડપી જવાબ',
'Mod controls'		=>	'મધ્યસ્થી નિયંત્રણો',
'New icon'			=>	'નવી પોસ્ટ',
'Re'				=>	'Re:',
'Preview'			=>	'પૂર્વાવલોકન',

'Warnings' => 'ચેતવણીઓ:',
'Reply' => 'જવાબ',

'Users online'	=>	'આ વિષયમાં ઓનલાઈન નોંધાયેલા વપરાશકર્તાઓ: %s',
'Guests online'	=>	'મહેમાનો: %s',

);
translate_not_found
lang/Gujarati/update.php
<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'FluxBB અપડેટ કરો',
'Update message'				=>	'તમારો FluxBB ડેટાબેઝ જૂનો છે અને ચાલુ રાખવા માટે તેને અપગ્રેડ કરવો આવશ્યક છે. જો તમે બોર્ડ સંચાલક છો, તો કૃપા કરીને અપગ્રેડ પૂર્ણ કરવા માટે નીચેની સૂચનાઓનું પાલન કરો.',
'Note'							=>	'નોંધ:',
'Members message'				=>	'આ પ્રક્રિયા ફક્ત બોર્ડ સંચાલકો માટે છે. જો તમે સભ્ય છો તો ચિંતા કરવાની કોઈ વાત નથી - ફોરમ ટૂંક સમયમાં પાછા આવશે!',
'Administrator only'			=>	'આ પગલું ફક્ત બોર્ડ સંચાલક માટે છે!',
'Database password info'		=>	'ડેટાબેઝ અપડેટ કરવા માટે કૃપા કરીને ડેટાબેઝ પાસવર્ડ દાખલ કરો કે જેનાથી FluxBB ઇન્સ્ટોલ કરવામાં આવ્યું હતું. જો તમને યાદ ન હોય, તો આ તમારી \'config.php\' ફાઇલમાં સંગ્રહિત છે.',
'Database password note'		=>	'જો તમે SQLite ચલાવી રહ્યા છો (અને તેથી કોઈ ડેટાબેઝ પાસવર્ડ નથી) તો કૃપા કરીને તેના બદલે ડેટાબેઝ ફાઇલ નામનો ઉપયોગ કરો. આ તમારી ગોઠવણી ફાઇલમાં આપેલા ડેટાબેઝ ફાઇલ નામ સાથે બરાબર મેળ ખાતું હોવું જોઈએ.',
'Database password'				=>	'ડેટાબેઝ પાસવર્ડ',
'Maintenance'					=>	'જાળવણી',
'Maintenance message info'		=>	'અપડેટ પ્રક્રિયા દરમિયાન વપરાશકર્તાઓને પ્રદર્શિત કરવામાં આવશે તે સંદેશ. આ લખાણ નિયમિત પોસ્ટ્સની જેમ પાર્સ કરવામાં આવશે નહીં અને તેથી તેમાં HTML હોઈ શકે છે.',
'Maintenance message'		    =>	'જાળવણી સંદેશ',

'You are running error'			=>	'તમે %1$s સંસ્કરણ %2$s ચલાવી રહ્યા છો. FluxBB %3$s ને યોગ્ય રીતે ચલાવવા માટે ઓછામાં ઓછું %1$s %4$s જરૂરી છે. તમે ચાલુ રાખી શકો તે પહેલાં તમારે તમારી %1$s ઇન્સ્ટોલેશન અપગ્રેડ કરવી આવશ્યક છે.',
'Version mismatch error'		=>	'સંસ્કરણ મેળ ખાતું નથી. ડેટાબેઝ \'%s\' આ અપડેટ સ્ક્રિપ્ટ દ્વારા સમર્થિત FluxBB ડેટાબેઝ સ્કીમા ચલાવી રહ્યું હોય તેવું લાગતું નથી.',
'Invalid file error'			=>	'અમાન્ય ડેટાબેઝ ફાઇલ નામ. SQLite નો ઉપયોગ કરતી વખતે ડેટાબેઝ ફાઇલ નામ તમારી \'%s\' માં દેખાય તે પ્રમાણે બરાબર દાખલ કરવું આવશ્યક છે',
'Invalid password error'		=>	'અમાન્ય ડેટાબેઝ પાસવર્ડ. FluxBB અપગ્રેડ કરવા માટે તમારે તમારો ડેટાબેઝ પાસવર્ડ તમારી \'%s\' માં દેખાય તે પ્રમાણે બરાબર દાખલ કરવો આવશ્યક છે',
'No password error'				=>	'કોઈ ડેટાબેઝ પાસવર્ડ પૂરો પાડવામાં આવ્યો નથી',
'Script runs error'				=>	'એવું લાગે છે કે અપડેટ સ્ક્રિપ્ટ પહેલેથી જ કોઈ અન્ય દ્વારા ચલાવવામાં આવી રહી છે. જો આ કિસ્સો ન હોય, તો કૃપા કરીને ફાઇલ \'%s\' જાતે કાઢી નાખો અને ફરી પ્રયાસ કરો',
'No update error'				=>	'તમારું ફોરમ આ સ્ક્રિપ્ટ બનાવી શકે તેટલું પહેલેથી જ અપ-ટુ-ડેટ છે',

'Intro 1'						=>	'આ સ્ક્રિપ્ટ તમારા ફોરમ ડેટાબેઝને અપડેટ કરશે. અપડેટ પ્રક્રિયા સર્વરની ગતિ અને ફોરમ ડેટાબેઝના કદના આધારે એક સેકંડથી કલાકો સુધી કંઈપણ લઈ શકે છે. ચાલુ રાખતા પહેલા ડેટાબેઝનો બેકઅપ લેવાનું ભૂલશો નહીં.',
'Intro 2'						=>	'શું તમે દસ્તાવેજીકરણમાં અપડેટ સૂચનાઓ વાંચી છે? જો નહીં, તો ત્યાંથી શરૂ કરો.',
'No charset conversion'			=>	'<strong>મહત્વપૂર્ણ!</strong> FluxBB એ શોધી કાઢ્યું છે કે આ PHP પર્યાવરણમાં ISO-8859-1 સિવાયના અક્ષર સમૂહોમાંથી UTF-8 રૂપાંતરણ કરવા માટે જરૂરી એન્કોડિંગ મિકેનિઝમ્સ માટે સમર્થન નથી. આનો અર્થ એ છે કે જો વર્તમાન અક્ષર સમૂહ ISO-8859-1 નથી, તો FluxBB તમારા ફોરમ ડેટાબેઝને UTF-8 માં રૂપાંતરિત કરી શકશે નહીં અને તમારે તે જાતે કરવું પડશે. મેન્યુઅલ અક્ષર સમૂહ રૂપાંતરણ કરવા માટેની સૂચનાઓ અપડેટ સૂચનાઓમાં મળી શકે છે.',
'Enable conversion'				=>	'<strong>રૂપાંતરણ સક્ષમ કરો:</strong> જ્યારે સક્ષમ હોય ત્યારે આ અપડેટ સ્ક્રિપ્ટ, ડેટાબેઝમાં જરૂરી માળખાકીય ફેરફારો કર્યા પછી, ડેટાબેઝમાંના બધા લખાણને વર્તમાન અક્ષર સમૂહમાંથી UTF-8 માં રૂપાંતરિત કરશે. જો તમે સંસ્કરણ 1.2 માંથી અપગ્રેડ કરી રહ્યાં હોવ તો આ રૂપાંતરણ જરૂરી છે.',
'Current character set'			=>	'<strong>વર્તમાન અક્ષર સમૂહ:</strong> જો તમારા ફોરમમાં પ્રાથમિક ભાષા અંગ્રેજી હોય, તો તમે આને ડિફૉલ્ટ મૂલ્ય પર છોડી શકો છો. જોકે, જો તમારું ફોરમ બિન-અંગ્રેજી હોય, તો તમારે ફોરમમાં વપરાતા પ્રાથમિક ભાષા પેકનો અક્ષર સમૂહ દાખલ કરવો જોઈએ. <em>આ ખોટું કરવાથી તમારો ડેટાબેઝ બગડી શકે છે તેથી ફક્ત અનુમાન કરશો નહીં!</em> નોંધ: જૂનો ડેટાબેઝ UTF-8 હોય તો પણ આ જરૂરી છે.',
'Charset conversion'			=>	'અક્ષર સમૂહ રૂપાંતરણ',
'Enable conversion label'		=>	'<strong>રૂપાંતરણ સક્ષમ કરો</strong> (ડેટાબેઝ અક્ષર સમૂહ રૂપાંતરણ કરો).',
'Current character set label'	=>	'વર્તમાન અક્ષર સમૂહ',
'Current character set info'	=>	'અંગ્રેજી ફોરમ માટે ડિફૉલ્ટ સ્વીકારો અન્યથા પ્રાથમિક ભાષા પેકનો અક્ષર સમૂહ.',
'Start update'					=>	'અપડેટ શરૂ કરો',
'Error converting users'		=>	'વપરાશકર્તાઓને રૂપાંતરિત કરવામાં ભૂલ',
'Error info 1'					=>	'કેટલાક વપરાશકર્તાઓને રૂપાંતરિત કરવામાં ભૂલ આવી હતી. FluxBB v1.2 માંથી રૂપાંતરિત કરતી વખતે આ થઈ શકે છે જો બહુવિધ વપરાશકર્તાઓએ ખૂબ સમાન વપરાશકર્તાનામો સાથે નોંધણી કરાવી હોય, ઉદાહરણ તરીકે "bob" અને "böb".',
'Error info 2'					=>	'નીચે રૂપાંતરિત કરવામાં નિષ્ફળ ગયેલા વપરાશકર્તાઓની સૂચિ છે. કૃપા કરીને દરેક વપરાશકર્તા માટે નવું વપરાશકર્તાનામ પસંદ કરો. જે વપરાશકર્તાઓના નામ બદલવામાં આવશે તેમને ફેરફારની જાણ કરતો ઇમેઇલ આપમેળે મોકલવામાં આવશે.',
'New username'					=>	'નવું વપરાશકર્તાનામ',
'Required'						=>	'(આવશ્યક)',
'Correct errors'				=>	'નીચેની ભૂલો સુધારવાની જરૂર છે:',
'Rename users'					=>	'વપરાશકર્તાઓના નામ બદલો',
'Successfully updated'			=>	'તમારો ફોરમ ડેટાબેઝ સફળતાપૂર્વક અપડેટ થયો. તમે હવે %s કરી શકો છો.',
'go to index'					=>	'ફોરમ અનુક્રમણિકા પર જાઓ',

'Unable to lock error'			=>	'અપડેટ લોક લખવામાં અસમર્થ. કૃપા કરીને ખાતરી કરો કે PHP ને ડિરેક્ટરી \'%s\' માં લખવાની ઍક્સેસ છે અને અન્ય કોઈ હાલમાં અપડેટ સ્ક્રિપ્ટ ચલાવી રહ્યું નથી.',

'Converting'					=>	'%s રૂપાંતરિત કરી રહ્યું છે …',
'Converting item'				=>	'%1$s %2$s રૂપાંતરિત કરી રહ્યું છે …',
'Preparsing item'				=>	'%1$s %2$s પ્રીપાર્સ કરી રહ્યું છે …',
'Rebuilding index item'			=>	'%1$s %2$s માટે અનુક્રમણિકા ફરીથી બનાવી રહ્યું છે',
'Click here'					=>	'અહીં ક્લિક કરો',
'Automatic redirect failed'		=>	'આપોઆપ રીડાયરેક્ટ અસફળ. ચાલુ રાખવા માટે %s …',

'ban'							=>	'પ્રતિબંધ',
'categories'					=>	'શ્રેણીઓ',
'censor words'					=>	'શબ્દો સેન્સર કરો',
'configuration'					=>	'ગોઠવણી',
'forums'						=>	'ફોરમ',
'groups'						=>	'જૂથો',
'post'							=>	'પોસ્ટ',
'report'						=>	'અહેવાલ',
'topic'							=>	'વિષય',
'user'							=>	'વપરાશકર્તા',
'signature'						=>	'સહી',

'Username too short error'		=>	'વપરાશકર્તાનામો ઓછામાં ઓછા 2 અક્ષરો લાંબા હોવા જોઈએ. કૃપા કરીને અન્ય (લાંબુ) વપરાશકર્તાનામ પસંદ કરો.',
'Username too long error'		=>	'વપરાશકર્તાનામો 25 અક્ષરોથી વધુ લાંબા ન હોવા જોઈએ. કૃપા કરીને અન્ય (ટૂંકું) વપરાશકર્તાનામ પસંદ કરો.',
'Username Guest reserved error'	=>	'વપરાશકર્તાનામ અતિથિ આરક્ષિત છે. કૃપા કરીને અન્ય વપરાશકર્તાનામ પસંદ કરો.',
'Username IP format error'		=>	'વપરાશકર્તાનામો IP સરનામાંના રૂપમાં ન હોઈ શકે. કૃપા કરીને અન્ય વપરાશકર્તાનામ પસંદ કરો.',
'Username bad characters error'	=>	'વપરાશકર્તાનામોમાં એક જ સમયે બધા અક્ષરો \', " અને [ અથવા ] ન હોઈ શકે. કૃપા કરીને અન્ય વપરાશકર્તાનામ પસંદ કરો.',
'Username BBCode error'			=>	'વપરાશકર્તાનામોમાં ફોરમ દ્વારા ઉપયોગમાં લેવાતા કોઈપણ ટેક્સ્ટ ફોર્મેટિંગ ટેગ્સ (BBCode) ન હોઈ શકે. કૃપા કરીને અન્ય વપરાશકર્તાનામ પસંદ કરો.',
'Username duplicate error'		=>	'કોઈ વ્યક્તિ તે વપરાશકર્તાનામ %s સાથે પહેલેથી જ નોંધાયેલ છે. તમે દાખલ કરેલ વપરાશકર્તાનામ ખૂબ સમાન છે. વપરાશકર્તાનામ તેનાથી ઓછામાં ઓછા એક આલ્ફાન્યુમેરિકલ અક્ષર (a-z અથવા 0-9) દ્વારા ભિન્ન હોવું આવશ્યક છે. કૃપા કરીને અલગ વપરાશકર્તાનામ પસંદ કરો.',

);
translate_not_found
lang/Gujarati/upload.php
<?php

$lang_up = array(
'No upfiles'				=> 'કોઈ અપલોડ નથી.',
'Error'             => '<strong>ભૂલ</strong>: ',
'Error DB'					=> 'કોષ્ટક %s માં દાખલ કરવામાં અસમર્થ',
'Error DB ins-up'		=> 'DB દાખલ/અપડેટમાં ભૂલ',
'Error space'				=> 'તમે તમારી સંગ્રહ જગ્યા ઓળંગી ગયા છો. ફાઇલો કાઢી નાખો અને ફરી પ્રયાસ કરો.',
'Error delete'			=> 'ફાઇલ કાઢી નાખવા દરમિયાન ભૂલ.',
'Error img'					=> 'ચિત્રનું અમાન્ય ફોર્મેટ. અથવા સર્વર ચિત્રોની પ્રક્રિયાને સમર્થન આપતું નથી.',
'Error no mod img'	=> 'અપડેટ કરતી વખતે ચિત્ર ક્રેશ થયું છે.',
'Error open'				=> 'અપલોડ કરેલી ફાઇલ ખુલતી નથી.',
'Error inject'			=> 'અપલોડ કરેલી ફાઇલમાં પ્રતિબંધિત સ્ટ્રિંગ છે. આ ફાઇલને આર્કાઇવ કરો અને ફરી પ્રયાસ કરો, અથવા સંચાલક સાથે વાત કરો.',
'Error usage'			=> 'ફાઇલ %d પોસ્ટ(ઓ) માં વપરાય છે.',

'Redirect'					=> 'વિકલ્પો અપડેટ થયા. રીડાયરેક્ટ કરી રહ્યું છે …',
'Install info'			=> 'Uploadile ઓપરેટ કરવા માટે ડેટાબેઝ અને કેશ તૈયાર કરો.',
'Install'						=> 'ઇન્સ્ટોલ કરો',
'Update info'				=> 'કેશ અપડેટ કરો. (ડિફૉલ્ટ મૂલ્યો)',
'Update'						=> 'અપડેટ કરો',
'Uninstall info'		=> 'Uploadile અનઇન્સ્ટોલ કરવા માટે DB પુનઃસ્થાપિત કરો અને કેશમાં ફેરફાર કરો.',
'Uninstall'					=> 'અનઇન્સ્ટોલ કરો',

'configuration'			=> 'ગોઠવણી',
'plugin_desc'				=> 'આ પ્લગઇન ફાઇલો અપલોડ કરવાનું સંચાલન કરવાની તક આપે છે.',
'legend_2'					=> 'ચિત્રોનું સેટઅપ',
'laws'							=> 'માન્ય ફાઇલ પ્રકાર. અલ્પવિરામ (,) વડે અલગ કરો.',
'thumb'							=> 'થંબનેલ્સ સક્રિય કરો',
'thumb_size'				=> 'થંબ્સનું કદ: ',
'quality'						=> 'ગુણવત્તા: ',
'maxsize_member'		=> 'સભ્યો અપલોડ કરી શકે તે મહત્તમ કદ (MB).',
'limit_member'			=> 'સભ્યોને ફાળવેલ જગ્યા (MB).',
'allow_delete'			=> 'પોસ્ટ્સમાં વપરાયેલી ફાઇલો કાઢી નાખવાની મંજૂરી આપો.',
'px'								=> 'પિક્સેલ',
'kbytes'							=> 'KB',
'pictures'					=> 'ચિત્રો',
'for pictures'			=> 'આનાથી મોટી ફાઇલો માટે',
'Install quality'		=> 'ગુણવત્તા ઇન્સ્ટોલ કરો:',
'Size not more'			=> 'કદ આનાથી વધુ નહીં (WxH):',
'to jpeg'						=> 'jpeg માં રૂપાંતરિત કરો',

'Redirect delete'		=> 'ફાઇલ(ઓ) સફળતાપૂર્વક કાઢી નાખવામાં આવી. રીડાયરેક્ટ કરી રહ્યું છે …',
'Redirect upload'		=> 'ફાઇલ અપલોડ થઈ. રીડાયરેક્ટ કરી રહ્યું છે …',

'uploadile'					=> 'મારા અપલોડ્સ',
'titre_2'						=> 'ફાઇલ અપલોડ કરો',
'titre_4'						=> 'મારા અપલોડ્સ',
'popup_title'				=> 'ફાઇલ મેનેજર',

'info_2'						=> '%1$s (%2$s મહત્તમ ફાઇલ કદ)',
'info_4'						=> 'વપરાયેલ સંગ્રહ જગ્યા: %s માંથી <span>%s</span> મંજૂર.',
'legend'						=> 'ફાઇલ',
'fichier'						=> 'ફાઇલ પસંદ કરો',

'th0'								=> 'વપરાશકર્તાનામ',
'th1'								=> 'ફાઇલ નામ',
'th2'								=> 'પૂર્વાવલોકન',
'no_preview'				=> 'કોઈ નહીં',
'Member files'			=> 'સભ્ય ફાઇલો (ઉપર નવી)',

'legend_1'					=> 'રૂપાંતરિત કરો',
'convert'		  			=> 'રૂપાંતરિત કરો',
'mo'								=> 'MB માં મૂલ્ય',
'ko'								=> 'KB માં મૂલ્ય',
'o'									=> 'B માં મૂલ્ય',
'texte'							=> 'તમારું લખાણ અહીં',
'delete'						=> 'કાઢી નાખો',
'delete file'					=> 'શું તમે આ ફાઇલ કાઢી નાખવા માંગો છો?',
'insert'						=> 'દાખલ કરો',
'insert_thumb'			=> 'થંબનેલ દાખલ કરો',
'update_thumb'			=> 'થંબ્સ અપડેટ કરો',

'upfiles'						=> 'અપલોડ્સ',

'groups'						=> 'જૂથોનું ગોઠવણ',
'group'							=> 'જૂથ',

// Avatar upload stuff
'Bad type'					=>	'તમે અપલોડ કરવાનો પ્રયાસ કર્યો તે ફાઇલ માન્ય પ્રકારની નથી.',
'Too large'					=>	'તમે અપલોડ કરવાનો પ્રયાસ કર્યો તે ફાઇલ મહત્તમ માન્ય કરતાં મોટી છે',
'Move failed'				=>	'સર્વર અપલોડ કરેલી ફાઇલ સાચવવામાં અસમર્થ હતું.',
'Unknown failure'		=>	'એક અજ્ઞાત ભૂલ આવી.',
'Upload'						=>	'અપલોડ કરો',

'UPLOAD_ERR_INI_SIZE' => 'અપલોડ કરેલી ફાઇલ php.ini માં upload_max_filesize નિર્દેશને ઓળંગે છે.',
'UPLOAD_ERR_FORM_SIZE' => 'અપલોડ કરેલી ફાઇલ HTML ફોર્મમાં ઉલ્લેખિત MAX_FILE_SIZE નિર્દેશને ઓળંગે છે.',
'UPLOAD_ERR_PARTIAL' => 'અપલોડ કરેલી ફાઇલ ફક્ત આંશિક રીતે અપલોડ કરવામાં આવી હતી.',
'UPLOAD_ERR_NO_FILE' => 'કોઈ ફાઇલ અપલોડ કરવામાં આવી ન હતી.',
'UPLOAD_ERR_NO_TMP_DIR' => 'અસ્થાયી ફોલ્ડર ખૂટે છે.',
'UPLOAD_ERR_CANT_WRITE' => 'ડિસ્ક પર ફાઇલ લખવામાં નિષ્ફળ.',
'UPLOAD_ERR_EXTENSION' => 'PHP એક્સ્ટેન્શને ફાઇલ અપલોડ બંધ કરી દીધી.',
'UPLOAD_ERR_UNKNOWN' => 'અજ્ઞાત અપલોડ ભૂલ.',

'Deleting file' => 'ફાઇલ કાઢી નાખી રહી છે',
'%s file' => '<b>%s</b> ફાઇલ',
'Bad file extensions' => 'ખરાબ ફાઇલ એક્સ્ટેન્શન્સ: %s.<br />',

);
translate_not_found
lang/Gujarati/userlist.php
<?php

// Language definitions used in userlist.php
$lang_ul = array(

'User find legend'	=>	'વપરાશકર્તાઓ શોધો અને સૉર્ટ કરો',
'User search info'	=>	'શોધવા માટે વપરાશકર્તાનામ દાખલ કરો અને/અથવા ફિલ્ટર કરવા માટે વપરાશકર્તા જૂથ દાખલ કરો. વપરાશકર્તાનામ ક્ષેત્ર ખાલી છોડી શકાય છે. આંશિક મેળ માટે વાઇલ્ડકાર્ડ અક્ષર * નો ઉપયોગ કરો.',
'User sort info'	=>	'વપરાશકર્તાઓને નામ, નોંધણી તારીખ અથવા પોસ્ટ્સની સંખ્યા અને ચડતા/ઉતરતા ક્રમમાં સૉર્ટ કરો.',
'User group'		=>	'વપરાશકર્તા જૂથ',
'No of posts'		=>	'પોસ્ટ્સની સંખ્યા',
'All users'			=>	'બધા'

);
