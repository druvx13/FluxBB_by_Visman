<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'hi',

// Number formatting
'lang_decimal_point'				=>	'.',
'lang_thousands_sep'				=>	',',

// Notices
'Bad request'						=>	'अमान्य अनुरोध। आपके द्वारा अनुसरित लिंक गलत या पुराना है।',
'No view'							=>	'आपको इन फ़ोरम को देखने की अनुमति नहीं है।',
'No permission'						=>	'आपको इस पृष्ठ तक पहुँचने की अनुमति नहीं है।',
'Bad referrer'						=>	'अमान्य csrf_hash। आपको एक अनधिकृत स्रोत से इस पृष्ठ पर भेजा गया है।',
'Bad csrf hash'						=>	'अमान्य CSRF हैश। आपको एक अनधिकृत स्रोत से इस पृष्ठ पर भेजा गया है।',
'No cookie'							=>	'आपका लॉगिन सफल दिख रहा है, लेकिन कुकीज़ सेट नहीं हुई हैं। कृपया अपनी सेटिंग्स जाँचें और, यदि आवश्यक हो, तो इस वेबसाइट के लिए कुकीज़ सक्षम करें।',
'Pun include extension'  			=>	'%s टेम्पलेट %s से प्रोसेस नहीं किया जा सका। "%s" फ़ाइलें अस्वीकृत हैं।',
'Pun include directory'				=>	'%s टेम्पलेट %s से प्रोसेस नहीं किया जा सका। डायरेक्टरी ट्रैवर्सल अस्वीकृत है।',
'Pun include error'					=>	'%s टेम्पलेट %s से प्रोसेस नहीं किया जा सका। न तो टेम्पलेट डायरेक्टरी में और न ही उपयोगकर्ता इनक्लूड डायरेक्टरी में ऐसी फ़ाइल मौजूद है।',

'Hidden text' => 'छिपा हुआ पाठ',
'Show' => 'दिखाएँ',
'Hide' => 'छुपाएँ',

// Miscellaneous
'Announcement'						=>	'घोषणा',
'Options'							=>	'विकल्प',
'Submit'							=>	'प्रस्तुत करें', // "Name" of submit buttons
'Ban message'						=>	'आपको इस फ़ोरम से प्रतिबंधित कर दिया गया है।',
'Ban message ip'                    =>  'आपका IP पता इस फ़ोरम पर प्रतिबंधित है।',
'Ban message 2'						=>	'प्रतिबंध समाप्ति अंतिम तिथि',
'Ban message 3'						=>	'आपको प्रतिबंधित करने वाले प्रशासक/मॉडरेटर ने निम्न संदेश छोड़ा है:',
'Ban message 4'						=>	'कृपया किसी प्रश्न के लिए प्रशासक से संपर्क करें: ',
'Never'								=>	'कभी नहीं',
'Today'								=>	'आज',
'Yesterday'							=>	'कल',
'Info'								=>	'जानकारी', // A common table header
'Go back'							=>	'वापस जाएँ',
'Maintenance'						=>	'रखरखाव',
'Redirecting'						=>	'पुनर्निर्देशित किया जा रहा है...',
'Click redirect'					=>	'यदि आप इंतजार नहीं करना चाहते (या यदि आपका ब्राउज़र स्वतः अग्रसर नहीं कर रहा है), तो यहाँ क्लिक करें।',
'on'								=>	'सक्षम', // As in "BBCode is on"
'off'								=>	'अक्षम',
'Invalid email'						=>	'आपके द्वारा दर्ज किया गया ईमेल पता अमान्य है।',
'Required'							=>	'(आवश्यक)',
'required field'					=>	'यह फ़ील्ड इस फॉर्म में आवश्यक है।', // For javascript form validation
'Last post'							=>	'अंतिम पोस्ट',
'by'								=>	'द्वारा', // As in last post by some user
'New posts'							=>	'नई पोस्टें', // The link that leads to the first new post
'New posts info'					=>	'इस विषय में पहली नई पोस्ट पर जाएँ।', // The popup text for new posts links
'Username'							=>	'उपयोगकर्ता नाम',
'Password'							=>	'पासवर्ड',
'Email'								=>	'ईमेल',
'Send email'						=>	'ईमेल भेजें',
'Moderated by'						=>	'मॉडरेटर द्वारा',
'Registered'						=>	'पंजीकृत',
'Subject'							=>	'विषय',
'Message'							=>	'संदेश',
'Topic'								=>	'विषय',
'Forum'								=>	'फ़ोरम',
'Posts'								=>	'पोस्टें',
'Replies'							=>	'उत्तर',
'Pages'								=>	'पृष्ठ:',
'Page'								=>	'पृष्ठ %s',
'BBCode'							=>	'बीबीकोड:', // You probably shouldn't change this
'url tag'							=>	'[url] टैग:',
'img tag'							=>	'[img] टैग:',
'Smilies'							=>	'मुस्कानें:',
'and'								=>	'और',
'Image link'						=>	'छवि', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'ने लिखा:', // For [quote]'s
'Mailer'							=>	'%s', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'महत्वपूर्ण जानकारी',
'Write message legend'				=>	'अपना संदेश लिखें और प्रस्तुत करें',
'Previous'							=>	'पिछला',
'Next'								=>	'अगला',
'Spacer'							=>	'…', // Ellipsis for pagination

// Title
'Title'								=>	'शीर्षक',
'Member'							=>	'सदस्य', // Default title
'Moderator'							=>	'मॉडरेटर',
'Administrator'						=>	'प्रशासक',
'Banned'							=>	'प्रतिबंधित',
'Guest'								=>	'अतिथि',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] के साथ [%1$s] टैग नहीं मिला।',
'BBCode error invalid nesting'		=>	'[%1$s] को [%2$s] के अंदर खोला गया, जो अनुमति नहीं है।',
'BBCode error invalid self-nesting'	=>	'[%s] टैग को खुद के अंदर खोला गया, जो अनुमति नहीं है।',
'BBCode error no closing tag'		=>	'[%1$s] टैग के साथ [/%1$s] नहीं मिला।',
'BBCode error empty attribute'		=>	'[%s] टैग में गुण खाली है।',
'BBCode error tag not allowed'		=>	'आपको [%s] टैग उपयोग करने की अनुमति नहीं है।',
'BBCode error tag url not allowed'	=>	'आपको लिंक पोस्ट करने की अनुमति नहीं है।',
'BBCode list size error'			=>	'आपकी सूची पार्स करने के लिए बहुत लंबी है, कृपया छोटा करें!', // "Your list was too long to parse, please make it smaller!"

// Stuff for the navigator (top of every page)
'Index'								=>	'अनुक्रमणिका',
'User list'							=>	'उपयोगकर्ता सूची',
'Rules'								=>	'नियम',
'Search'							=>	'खोज',
'Register'							=>	'पंजीकरण',
'Login'								=>	'लॉगइन',
'Not logged in'						=>	'आप लॉगइन नहीं हैं।',
'Profile'							=>	'प्रोफ़ाइल',
'Logout'							=>	'लॉगआउट',
'Logged in as'						=>	'के रूप में लॉगइन',
'Admin'								=>	'प्रशासन',
'Last visit'						=>	'अंतिम आगमन: %s',
'Topic searches'					=>	'विषय:',
'New posts header'					=>	'नया',
'Active topics'						=>	'सक्रिय',
'Unanswered topics'					=>	'बिना उत्तर के विषय',
'Posted topics'						=>	'पोस्ट किए गए',
'Show new posts'					=>	'अपने अंतिम आगमन के बाद के नए विषय खोजें।',
'Show active topics'				=>	'हाल के पोस्ट वाले विषय खोजें।',
'Show unanswered topics'			=>	'बिना उत्तर वाले विषय खोजें।',
'Show posted topics'				=>	'विषय खोजें जिनमें आपने पोस्ट किया है।',
'Mark all as read'					=>	'सभी विषयों को पढ़ा हुआ चिह्नित करें',
'Mark forum read'					=>	'इस फ़ोरम को पढ़ा हुआ चिह्नित करें',
'Title separator'					=>	' / ',
'PM' => 'निजी संदेश',
'PMsend' => 'निजी संदेश भेजें',
'PMnew' => 'नया निजी संदेश',
'PMmess' => 'आपको नए निजी संदेश मिले (%s संदेश)।',

'Warn' => 'चेतावनी',
'WarnMess' => 'आपको एक नई चेतावनी मिली है!', // "You have a new warning!"

// Stuff for the page footer
'Board footer'						=>	'फ़ोरम तलपट्टिका',
'Jump to'							=>	'के लिए छलांग',
'Go'								=>	' जाएँ ', // Submit button in forum jump
'Moderate topic'					=>	'विषय का संचालन करें',
'All'								=>	'सभी',
'Move topic'						=>	'विषय स्थानांतरित करें',
'Open topic'						=>	'विषय खोलें',
'Close topic'						=>	'विषय बंद करें',
'Unstick topic'						=>	'विषय अस्थिर करें',
'Stick topic'						=>	'विषय स्थिर करें',
'Moderate forum'					=>	'फ़ोरम संचालन करें',
'Powered by' => 'द्वारा संचालित %s<br />द्वारा संशोधित &#x56;&#x69;&#x73;&#x6D;&#x61;&#x6E;',

// Debug information
'Debug table'						=>	'डीबग जानकारी',
'Querytime'							=>	'%1$s सेकंड में उत्पन्न, %2$s क्वेरी निष्पादित',
'Memory usage'						=>	'मेमोरी उपयोग: %1$s',
'Peak usage'						=>	'(अधिकतम: %1$s)',
'Query times'						=>	'क्वेरी समय (सेकंड)',
'Query'								=>	'क्वेरी',
'Total query time'					=>	'कुल क्वेरी समय: %s',

// For extern.php RSS feed
'RSS description'					=>	'%s पर नवीनतम विषय।',
'RSS description topic'				=>	'%s में नवीनतम पोस्टें।',
'RSS reply'							=>	'प्रतिक्रिया: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'				=>	'RSS सक्रिय विषय फ़ीड',
'Atom active topics feed'			=>	'एटॉम सक्रिय विषय फ़ीड',
'RSS forum feed'					=>	'RSS फ़ोरम फ़ीड',
'Atom forum feed'					=>	'एटॉम फ़ोरम फ़ीड',
'RSS topic feed'					=>	'RSS विषय फ़ीड',
'Atom topic feed'					=>	'एटॉम विषय फ़ीड',

'After time'	=>   'बाद में जोड़ा गया',
'After time s'	=>   ' सेकंड',
'After time i'	=>   ' मिनट',
'After time H'	=>   ' घंटा',
'After time d'	=>   ' दिन',

// Admin related stuff in the header
'New reports'						=>	'नई रिपोर्टें हैं',
'Maintenance mode enabled'			=>	'रखरखाव मोड सक्षम है!', // Maintenance mode is enabled!

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s किबी',
'Size unit MiB'						=>	'%s मेबी',
'Size unit GiB'						=>	'%s गिगाबाइट',
'Size unit TiB'						=>	'%s टेराबाइट',
'Size unit PiB'						=>	'%s पेटाबाइट',
'Size unit EiB'						=>	'%s एक्साबाइट',

);