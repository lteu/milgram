<?php
session_start(); 

/******** added 29/07/2014 *********/

$targetid = $_SESSION['target_id'];
$uid = $_SESSION['userid'];
$uidCoded = $_SESSION['useridcoded'];

if ($targetid == '300') {
	$targ_description = "മോസ്തഫ സലേഹി  2012 നവംബറിൽ, ഇറാനിലെ ഷെരീഫ് ടെക്നോളജി സർവ്വകലാശാലയിൽ നിന്നും കമ്പ്യൂട്ടർ എൻജിനീയറിങ്ങിൽ പി.എച്ച്.ഡിയും ബിരുദം നേടി . ഫെബ്രുവരി 2013 ന് അദ്ദേഹം അസിസ്റ്റന്റ് പ്രൊഫസർ ആയി ടെഹരാൻ യൂണിവേഴ്സിറ്റി ചേർന്നു. ഫെബ്രുവരി 2014 മുതൽ സെപ്റ്റംബർ 2014 വരെ അദ്ദേഹം ഇറ്റലിയിലെ ബൊലോനേ സർവകലാശാലയിൽ പി.എച്ച്.ഡി അനന്തര ഗവേഷകൻ ആയിരുന്നു. ";
	$targ_title = "മോസ്തഫ സലേഹി";
}else if ($targetid == '311') {
	$targ_description = "പായം സഹാരി 2011 ൽ, ഇറാനിലെ ടെഹറാനിലുള്ള ഷാഹിദ് ബെഹെസ്തി സർവ്വകലാശാലയിൽ നിന്ന് കമ്പ്യൂട്ടർ സയൻസിൽ തന്റെ ബി.എസ്സി ബിരുദവും, 2013 ൽ ഇറാനിലെ ടെഹറാനിലുള്ള  ഷെരീഫ് ടെക്നോളജി സർവ്വകലാശാലയിൽ നിന്ന് കമ്പ്യൂട്ടർ എഞ്ചിനിയറിംഗിൽ തന്റെ എം.എസ്സി ബിരുദവും നേടി. അദ്ദേഹം ഇപ്പോൾ അറ്റ്ലാന്റയിലെ ജോർജിയ ഇൻസ്റ്റിറ്റ്യൂട്ട് ഓഫ് ടെക്നോളജിയിൽ കമ്പ്യൂട്ടർ സയൻസിൽ പിഎച്ച്ഡി ബിരുദത്തിനു പഠിക്കുന്നു. ";
	$targ_title = "പായം സഹാരി";
}else if ($targetid == '322') {
	$targ_description = "അലസ്സാന്ദ്രോ റിയോളി 2012 ജനുവരിയിൽ ക്വാണ്ടം കമ്പ്യൂട്ടിങിൽ തന്റെ പിഎച്ച്ഡി ആരംഭിച്ചു. ഇപ്പോൾ തന്റെ പി.എച്ച്.ഡി തീസിസ് പ്രതിരോധിക്കാൻ അദ്ദേഹം കാത്തിരിക്കുകയാണ്. ഭൗതികശാസ്ത്രജ്ഞനായ അദ്ദേഹം നിലവിൽ ഹൈസ്കൂളിൽ കണക്കും ഫിസിക്സും പഠിപ്പിക്കുകയാണ്. അദ്ദേഹം ഇറ്റലിയിലെ ബൊലോനേയിൽ നിന്ന് ആണ്.";
	$targ_title = "അലസ്സാന്ദ്രോ റിയോളി";
}else if ($targetid == '333') {
	$targ_description = "ആന്റണി കരാറ്സാസ് 8 വർഷമായി  നോർവിച്, യുകെയിൽ  താമസിക്കുകയായിരുന്നു. ആദ്യം പഠനത്തിനായും, കഴിഞ്ഞ 2 വർഷമായി ഈസ്റ്റ് ആംഗ്ലിയ യൂണിവേഴ്സിറ്റിയിലെ മത്സരനയകേന്ദ്രത്തിൽ  ഒരു റിസർച്ച് അസോസിയേറ്റ് ജോലിക്കായും . ഒക്ടോബർ മുതൽ അദ്ദേഹം വാർവിക്ക് സർവകലാശാലയിലെ വാർവിക് നിർമാണ ഗ്രൂപ്പിൽ പോസ്റ്റ്-ഡോക് ചെയ്തു കൊണ്ട്  ലീമിംഗ്റ്റൻ സ്പയിൽ ജീവിക്കുന്നു. അദ്ദേഹം യഥാർത്ഥത്തിൽ ഗ്രീസ് നിന്ന് ആണ്. പ്രായം ഏതാണ്ട് 32 വർഷം. അദ്ദേഹത്തിനു കളികളോട്,പ്രത്യേകിച്ച് ഫുട്ബോളിനോട് കമ്പം ആണ്. അദ്ദേഹം ഒരു കടുത്ത ലിവർപൂൾ എഫ്.സി ഫാൻ  ആണ്. യുകെയിലെ മിക്ക ആളുകളും അദ്ദേഹത്തിനെ 'ടോണി' എന്ന പേരിൽ അറിയുന്നു.";
	$targ_title = "Aആന്റണി കരാറ്സാസ്";
}else if ($targetid == '344') {
	$targ_description = "അമൃത് ഓഗസ്റ്റ് 2008 മുതൽ സിംഗപൂരിൽ, ആദ്യം എൻ.ടി.യു.വിലെ ഒരു പിഎച്ച്ഡി വിദ്യാർത്ഥിയായും, പിന്നെ ഡാറ്റ ശാസ്ത്രജ്ഞരെ നിയമിക്കുന്നതിനു സഹായിക്കുന്നതിന് വേണ്ടിയുള്ള ഒരു ഓൺലൈൻ പോർട്ടൽ ഉണ്ടാക്കുന്ന സംരംഭകനായും, താമസിച്ചു വരുന്നു. അദ്ദേഹം  30 വയസ്സ് പ്രായമുള്ള, കേരളത്തിൽ നിന്നുള്ള ഭാരതീയനാണ്.";
	$targ_title = "അമൃത്";
}else if ($targetid == '355') {
	$targ_description = "ദീപക് സുബ്രഹ്മണ്യൻ ഫ്രാൻസിലെ സെന്റ്രാലെ സുപ്ലെകിലെ ഒരു പിഎച്ച്ഡി വിദ്യാർത്ഥിയാണ്. സിംഗപ്പൂരിൽ ജീവിച്ചിരുന്ന അദ്ദേഹം ഇന്ത്യയിലെ ചെന്നൈയിൽ നിന്നാണ്.";
	$targ_title = "ദീപക് സുബ്രഹ്മണ്യൻ";
}
else if ($targetid == '366') {
	$targ_description = "പ്രിതീ  മഗാ മലേഷ്യയിലുള്ള  യൂണിവേഴ്സിറ്റി ടെക്നോളജി മലേഷ്യയിലെ അഡ്വാൻസ്ട്‌ ഇൻഫോമാറ്റിക്സ് സ്കൂളിലെ  മുതിർന്ന ലെക്ചറർ ആണ്. അവൾ മെൽബൺ, ഓസ്ട്രേലിയയിലെ ആർ.എം.ഐ.ടി. യൂണിവേഴ്സിറ്റിയിൽ നിന്നും പിഎച്ച്.ഡി. ചെയ്തു. അവൾ ജോഹോറിലെ സ്കുദായിൽ നിന്നുള്ള ഒരു മലേഷ്യൻ ആണ്. അവൾ മലകയറ്റം, ടൂറിംഗ്, ക്യാമ്പിംഗ് എന്നിവയെ സ്നേഹിക്കുന്നു. അവളുടെ ഹോബികൾ ബാഡ്മിന്റണ്‍ കളിക്കുകയും സൈക്ലിങും ആണ്.";
	$targ_title = "പ്രിതീ ";
}
else if ($targetid == '377') {
	$targ_description = "സന്ദീപ് രഞ്ജൻ ജലന്ധർ, ഇന്ത്യ നിന്നും ആണ്. അദ്ദേഹം പഞ്ചാബ് ടെക്നിക്കൽ യൂണിവേഴ്സിറ്റിയിൽ പി.എച്ച്.ഡി ഗവേഷകൻ ആണ്. ഡി.എ.വി. ഇൻസ്റ്റിറ്റിയൂട്ട് എഞ്ചിനീയറിംഗ് ആന്റ് ടെക്നോളജിയിൽ നിന്ന് ബിരുദം നേടി. അദ്ദേഹം 7 വർഷമായി ലൗലി പ്രൊഫഷണൽ സർവകലാശാലയിൽ ജോലി ചെയ്യുന്നു. അദ്ദേഹം കഴിഞ്ഞ 2 വർഷം മുതൽ ജലന്ധറിലെ ലിയാൽപൂർ ഖൽസ എൻജിനീയറിങ് കോളേജിലെ  കമ്പ്യൂട്ടർ സയൻസ് വകുപ്പിൽ  ഒരു അസിസ്റ്റന്റ് പ്രൊഫസറാണ്.";
	$targ_title = "സന്ദീപ് രഞ്ജൻ";
}
else if ($targetid == '388') {
	$targ_description = "ജിയാങ് ഷാൻ ചൈനയിലെ ചെംഗ്ഡൂ യൂണിവേഴ്സിറ്റി ഓഫ് ടെക്നോളജിയിലെ അവസാന വർഷ വിദ്യാർത്ഥിയാണ്. കമ്പ്യൂട്ടർ സയൻസ് പഠന വിഭാകത്തിലെ വിദ്യാർത്ഥി അസോസിയേഷൻ മേധാവി ആയിരുന്നു. അദ്ദേഹം 2014 ലിൽ കമ്പ്യൂട്ടർ ലാബിനറെ ചുമതലക്കാരൻ ആയിരുന്നു. അദ്ദേഹം അടിസ്ഥാനപരമായി ചൈനയിലെ ഹെബെയിലുള്ള ഖിൻഹുവങ്ങ്ടോയിൽ നിന്നാണ്. അദ്ദേഹം വളരെ സാമൂഹ്യ സൗഹാർദം സൂക്ഷിക്കുന്ന, തുറന്ന മനസ്സുള്ള, പൊക്കമുള്ള ഒരു ആണ്‍ കുട്ടിയാണ്. ";
	$targ_title = "ജിയാങ് ഷാൻ";
}
else if ($targetid == '399') {
	$targ_description = "ജെസീക്ക ലീബിഗ് മെൽബൺ, ഓസ്ട്രേലിയയിലെ ആർ.എം.ഐ.ടി. സർവകലാശാലയിലെ പി.എച്.ഡി. വിദ്യാർഥിയാണ്. ജർമ്മനിയിലെ ബ്രെമെനിൽ ജനിച്ച അവൾ 2007 ഇൽ ഓസ്ട്രേലിയ എത്തി. 2009 ൽ തൻറെ ബാച്ചിലർ ഡിഗ്രി ആരംഭിച്ച് മുമ്പ് അവൾ ഓസ്ട്രേലിയയ്ക്ക് ചുറ്റും യാത്ര ചെയ്തു. സാധാരണയായി ആളുകൾ അവളെ ജെസ്സി അല്ലെങ്കിൽ ജെസ്സ് എന്ന് വിളിക്കും. ഒഴിവു സമയങ്ങളിൽ അവൾ വായിക്കാനും, വരയ്ക്കാനും ഓടാനും ഇഷ്ടപ്പെടുന്നു. ";
	$targ_title = "ജെസീക്ക ലീബിഗ് ";
}



/******** end 29/07/2014 *********/



/***************  COMMON ******************/

$lan = 'en';

$HEAD_TITLE_RIGHT_INTRO = "സ്വാഗതം";
$HEAD_TITLE_RIGHT_REPLY = "ഫോം പൂരിപ്പിക്കുക";
$HEAD_TITLE_RIGHT_END = "ലിങ്ക് കൈമാറുക";
$FOOT_COPYRIGHT = "Copyright© 2014 －2015 CSE UNIBO";

/***************  PAGE ONE ******************/

$P_TITLE= "സ്വാഗതം";
$P_BUTTON_ACCEPT = "അടുത്തത്";


$P_BODYPARAONE=" താങ്കളുടെ  സഹായത്തോടെ ഞങ്ങൾ &quot;<span id='targ' data-toggle='modal' data-target='#dialog'>$targ_title</span>&quot;  എന്ന  ലക്ഷ്യത്തിൽ എത്താൻ ശ്രമിക്കുകയാണ്.  In case you know him personally please forward the message to $targ_title, otherwise, please forward the message to someone you know personally who might know $targ_title (directly or indirectly).";
$P_BODYPARATWO ="<label>ഈ പഠനത്തിൽ പങ്കെടുക്കുന്നതിലൂടെ  താങ്കൾക്ക്  ഒരു ഐപാഡ് എയർ സ്വന്തമാക്കാനുള്ള അവസരം ലഭിക്കും.</label>";
$P_BODY_LOW = "ഏതെങ്കിലും ചോദ്യത്തിന് ഞങ്ങളെ ബന്ധപ്പെടുക മടിക്കേണ്ടതില്ല :   <strong>connect@cs.unibo.it</strong> ";


$P_BODYPARATHREE = " ഈ പഠനത്തിൽ പങ്കെടുക്കുന്നത് പൂർണമായി നിങ്ങൾക്ക് തീരുമാനിക്കാം. താങ്കൾക്ക് ഈ പഠനത്തിൽ പങ്കെടുക്കാൻ വിസമ്മതിക്കുന്ന അവകാശമുണ്ട്. നിങ്ങൾ പങ്കെടുക്കുവാൻ തീരുമാനിക്കുകയാണെങ്കിൽ, നിങ്ങൾ ഒരു കാരണം നൽകാതെ ഒപ്പം നെഗറ്റിവ് ആഘാതം കൂടാതെ ഏതു സമയത്തും പഠനത്തിൽ നിന്നു  പിന്മാറാം എന്നു തിരഞ്ഞെടുക്കാം. നിങ്ങൾ സർവേ പങ്കെടുക്കാൻ തിരഞ്ഞെടുക്കുകയാണെങ്കിൽ, സർവേ ചോദ്യങ്ങൾക്കുള്ള നിങ്ങളുടെ പ്രതികരണങ്ങൾ ബൊലോനേ സർവ്വകലാശാലയുടെ സെർവറുകളിൽ  ആയിരിക്കും സൂക്ഷിക്കപ്പെടുക. എല്ലാ വിവരങ്ങളും കോൺഫിഡൻഷ്യൽ ആയിരിക്കും. അതായത്  അത് അന്വേഷണ സംഘത്തിനു  മാത്രം ഉപയോഗിച്ച് ആക്സസ് ഉണ്ടാവുകയുള്ളൂ (പാസ്വേഡ് ഉപയോഗിച്ച് സംരക്ഷിച്ചിരിക്കുന്നു). ഇത് പൊതുവായി പ്രസിദ്ധീകരിക്കില്ല. നിങ്ങളുടെ പേര് പരസ്യപ്പെടുത്തുന്നതല്ല. നിങ്ങളുടെ പേര് ഏതെങ്കിലും റിപ്പോർട്ടുകൾ അല്ലെങ്കിൽ പ്രസിദ്ധീകരണങ്ങൾ വഴിയും പരസ്യപ്പെടുത്തുന്നതല്ല.

<br/>
സർവേ പൂർത്തിയാക്കുന്നത് വഴി നിങ്ങൾ ഗവേഷണ ആവശ്യങ്ങള്ക്ക് ഡാറ്റ ഉപയോഗിക്കാൻ നിങ്ങളുടെ സമ്മതം നൽകുന്നു.
<br/>
 നിങ്ങൾ മുകളിൽ അവതരിപ്പിച്ച വിവരങ്ങൾ മനസ്സിലാക്കിയെന്നും, ഈ പഠനത്തിൽ പങ്കെടുക്കാൻ സമ്മതിക്കുകയാണ് ദയവായി സൂചിപ്പിക്കുക.";

$P_CONSUS = "ഞാൻ മനസ്സിലാക്കി .ഈ പഠനത്തിൽ പങ്കെടുക്കാൻ സമ്മതിക്കുകയാണ്.";

/***************  PAGE TWO ******************/

$PP_QONE = "താങ്കള്ക്ക്  ഈ സന്ദേശം എങ്ങിനെ ലഭിച്ചു എങ്ങനെ ദയവായി ഞങ്ങളോട് പറയുക.";
$PP_QTWO = "നിങ്ങളുടെ ഇമെയിൽ അല്ലെങ്കിൽ മൊബൈൽ ഫോൺ നമ്പർ നൽകുക.";
$PP_QTHREE = ".ഈ വിവരം ഞങ്ങൾ താങ്കളുടെ നറുക്കെടുപ്പ് ഫലം അറിയിക്കാൻ ഉപയോഗിക്കും";
$PP_QFOUR = "താങ്കൾക്ക് സന്ദേശം ലഭിച്ച നിന്ന് നെറ്റ്വർക്ക് (കൾ ) തിരഞ്ഞെടുക്കുക.";
$PP_QSIX = "ഏത് നെറ്റ്വർക്കുകൾ നിങ്ങൾ അതിന്റെ ലക്ഷ്യസ്ഥാനം നേരെ സന്ദേശം നീക്കാൻ ഉപയോഗിക്കാൻ പോകുന്നത്?";
$PP_OP1 = "Email";
$PP_OP2 = "Face2Face";
$PP_OP3 = "others(optional)";
$PP_BUTT1= "തിരിച്ച്";
$PP_BUTT2= "അടുത്തത്";

$PP_WARNING2 = "Please select at least one network on which you received the message.";
$PP_WARNINGTOP = "ഒന്നോ അതിലധികമോ വയലുകൾ ആകുന്നു. അടുത്ത പേജിൽ പോകാൻ എല്ലാ ഫീൽഡുകളും പൂരിപ്പിക്കുക";
$PP_WHICHYEAR = "താങ്കൾ ഏത് വര്ഷമാണ് ജനിച്ചത്?";
$PP_WHICHNET = "ഏത് നെറ്റ്വർക്കുകൾ ആണ് നിങ്ങൾ സന്ദേശത്തെ അതിന്റെ ലക്ഷ്യസ്ഥാനത്തു എത്തുവാൻ വേണ്ടി ഫോർവേഡ് ചെയ്യാൻ ഉപയോഗിക്കാൻ പോകുന്നത്?";
$PP_SEX1 = "ലിംഗഭേദം";
$PP_SEX2 = "ആൺ";
$PP_SEX3 = "പെൺ ";
$PP_SEX4 = "വെളിപ്പെടുത്താൻ താത്പര്യപ്പെടുന്നില്ല";

/***************  PAGE THREE ******************/

$PPP_FIRST = "താങ്കൾ അവസാന ഘട്ടത്തിൽ എത്തിക്കഴിഞ്ഞു!";

$PPP_MAIN = "താഴത്തെ സന്ദേശം കോപി ചെയ്തു തിരഞ്ഞെടുത്ത നെറ്റ്വർക്ക്‌ (കൾ ) വഴി നിങ്ങളുടെ പരിചയക്കാര്ക്ക് അയയ്ക്കുക. സന്ദേശം തിരുത്തിയെഴുതുന്നത് മടിക്കേണ്ട (പക്ഷേ ലിങ്ക് നീക്കം ചെയ്യരുത്!)";

$PPP_MAIN1 = "നിങ്ങളുടെ സുഹൃത്തുക്കളെ മനസ്സിലാക്കാൻ കഴിയുന്ന ഭാഷയിൽ താഴെ സന്ദേശം കൺവേർട്ട് ദയവായി.";


$PPP_LETTER = "ഉന്നത , 
ഞാൻ ബൊലോനേ യൂണിവേഴ്സിറ്റിയിൽ നിന്നും ഒരു പരീക്ഷണം പങ്കെടുക്കുന്നുണ്ട് ഞാന്. നീ എന്നെ സഹായിക്കാൻ കഴിയും നാം  $targ_title, എത്താൻ ശ്രമിക്കുന്ന?
http://milgram.cs.unibo.it/?t=$targetid&&my=$uidCoded";

$PPP_LAST = "താങ്കളുടെ സഹായത്തിന് നന്ദി! ലക്ഷ്യത്തിൽ എത്തുന്ന ഒരു വിജയകരമായ ചങ്ങലയുടെ  ഭാഗമാണ് താങ്കൾ , നിങ്ങൾക്ക് നറുക്കെടുപ്പിലൂടെയുളള  സമ്മാനങ്ങൾക്ക് പരിഗണന ലഭിക്കും. അതുകൊണ്ട് കഴിയുന്നത്ര ആളുകളെ മുകളിലുള്ള ലിങ്ക് ഫോർവേഡ് ചെയ്യുക ";



// NEW ADDED 27/07/2014


/***************  PAGE SORRY ******************/

$PPPP_SORRYCONTENT = "We would appreciate if you can try to do it. Otherwise also, thanks anyways !";



/***************  SEO HTML TITLES ******************/
$PAGE1TITLE = "Welcome | Milgram Experiment Project | Disi Unibo";
$PAGE2TITLE = "Message | Milgram Experiment Project | Disi Unibo";
$PAGE3TITLE = "Thank you | Milgram Experiment Project | Disi Unibo";
$PAGESTITLE = "We hope ... | Milgram Experiment Project | Disi Unibo";
$PAGEDRAWTITLE = "Lucky Draw | Milgram Experiment Project | Disi Unibo";


/***************  JS ******************/

$ERR_SENDER = "sender ID is NOT CORRECT please check it again from the message you received.";
$ERR_FORMAT = "please insert a correct email address or cellphone number";


/******** new added, 10 - 09 - 2015 ***************/
$PPP_CLICKEICON = "വിവിധ നെറ്റ്വർക്കുകളിൽ പങ്കിടാൻ ഐക്കണുകൾ ക്ലിക്ക് ചെയ്യാം";
$PALL_EXPINFO = "പരീക്ഷണം വിവരങ്ങൾ";
$PALL_STATEMENT = "സ്വകാര്യത പ്രസ്താവന";

?>