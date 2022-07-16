<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/content/css/install.css?version=0.32">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>LETON - インストール</title>
</head>
<body>
    <div class="top">
        <p><b>LETON ZONE</b></p>
    </div>
    <form action="/install/install-changes.php" method="post">
        <input class="input" type="text" name="local" placeholder="localhost 127.0.0.1" required="required" value="localhost"><br><br>
        <input class="input" type="text" name="user" placeholder="データベースログイン名" required="required" value=""><br><br>
        <input class="input" type="text" name="pass" placeholder="データベースログインパスワード" required="required" value=""><br><br>
        <input class="input" type="text" name="dbna" placeholder="データベーステーブル名" required="required" value=""><br><br>
        <hr style='border: 0;border-bottom: 1px solid #f0f0f0;'><br>
        <input maxlength="12" class="input" type="text" name="us-nam" placeholder="ウェブマスター名" required="required" value=""><br><br>
        <input maxlength="12" class="input" type="text" name="us-pas" placeholder="ウェブマスターパスワード" required="required" value=""><br><br>
        <select class="input" name="us-zon" required="required">
        <option value="Asia/Tokyo">Asia/Tokyo</option>
        <option value="Asia/Shanghai">Asia/Shanghai</option>
        <optgroup label="Etc/GMT+11">Etc/GMT+11</optgroup>
        <option value="Pacific/Apia">Pacific/Apia</option>
        <option value="Pacific/Midway">Pacific/Midway</option>
        <option value="Pacific/Niue">Pacific/Niue</option>
        <option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option>
        <option value="Pacific/Samoa">Pacific/Samoa</option>
        <option value="US/Samoa">US/Samoa</option>
        <option value="America/Adak">America/Adak</option>
        <option value="America/Atka">America/Atka</option>
        <optgroup label="Etc/GMT+10">Etc/GMT+10</optgroup>
        <option value="Pacific/Fakaofo">Pacific/Fakaofo</option>
        <option value="Pacific/Honolulu">Pacific/Honolulu</option>
        <option value="Pacific/Johnston">Pacific/Johnston</option>
        <option value="Pacific/Rarotonga">Pacific/Rarotonga</option>
        <option value="Pacific/Tahiti">Pacific/Tahiti</option>
        <option value="SystemV/HST10">SystemV/HST10</option>
        <option value="US/Aleutian">US/Aleutian</option>
        <option value="US/Hawaii">US/Hawaii</option>
        <option value="Pacific/Marquesas">Pacific/Marquesas</option>
        <option value="America/Anchorage">America/Anchorage</option>
        <option value="America/Juneau">America/Juneau</option>
        <option value="America/Nome">America/Nome</option>
        <option value="America/Yakutat">America/Yakutat</option>
        <optgroup label="Etc/GMT+9">Etc/GMT+9</optgroup>
        <option value="Pacific/Gambier">Pacific/Gambier</option>
        <option value="SystemV/YST9">SystemV/YST9</option>
        <option value="SystemV/YST9YDT">SystemV/YST9YDT</option>
        <option value="US/Alaska">US/Alaska</option>
        <option value="America/Dawson">America/Dawson</option>
        <option value="America/Ensenada">America/Ensenada</option>
        <option value="America/Los_Angeles">America/Los_Angeles</option>
        <option value="America/Tijuana">America/Tijuana</option>
        <option value="America/Vancouver">America/Vancouver</option>
        <option value="America/Whitehorse">America/Whitehorse</option>
        <option value="Canada/Pacific">Canada/Pacific</option>
        <option value="Canada/Yukon">Canada/Yukon</option>
        <optgroup label="Etc/GMT+8">Etc/GMT+8</optgroup>
        <option value="Mexico/BajaNorte">Mexico/BajaNorte</option>
        <option value="Pacific/Pitcairn">Pacific/Pitcairn</option>
        <option value="SystemV/PST8">SystemV/PST8</option>
        <option value="SystemV/PST8PDT">SystemV/PST8PDT</option>
        <option value="US/Pacific">US/Pacific</option>
        <option value="US/Pacific-New">US/Pacific-New</option>
        <option value="America/Boise">America/Boise</option>
        <option value="America/Cambridge_Bay">America/Cambridge_Bay</option>
        <option value="America/Chihuahua">America/Chihuahua</option>
        <option value="America/Dawson_Creek">America/Dawson_Creek</option>
        <option value="America/Denver">America/Denver</option>
        <option value="America/Edmonton">America/Edmonton</option>
        <option value="America/Hermosillo">America/Hermosillo</option>
        <option value="America/Inuvik">America/Inuvik</option>
        <option value="America/Mazatlan">America/Mazatlan</option>
        <option value="America/Phoenix">America/Phoenix</option>
        <option value="America/Shiprock">America/Shiprock</option>
        <option value="America/Yellowknife">America/Yellowknife</option>
        <option value="Canada/Mountain">Canada/Mountain</option>
        <optgroup label="Etc/GMT+7">Etc/GMT+7</optgroup>
        <option value="Mexico/BajaSur">Mexico/BajaSur</option>
        <option value="SystemV/MST7">SystemV/MST7</option>
        <option value="SystemV/MST7MDT">SystemV/MST7MDT</option>
        <option value="US/Arizona">US/Arizona</option>
        <option value="US/Mountain">US/Mountain</option>
        <option value="America/Belize">America/Belize</option>
        <option value="America/Cancun">America/Cancun</option>
        <option value="America/Chicago">America/Chicago</option>
        <option value="America/Costa_Rica">America/Costa_Rica</option>
        <option value="America/El_Salvador">America/El_Salvador</option>
        <option value="America/Guatemala">America/Guatemala</option>
        <option value="America/Indiana/Knox">America/Indiana/Knox</option>
        <option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option>
        <option value="America/Knox_IN">America/Knox_IN</option>
        <option value="America/Managua">America/Managua</option>
        <option value="America/Menominee">America/Menominee</option>
        <option value="America/Merida">America/Merida</option>
        <option value="America/Mexico_City">America/Mexico_City</option>
        <option value="America/Monterrey">America/Monterrey</option>
        <option value="America/North_Dakota/Center">America/North_Dakota/Center</option>
        <option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
        <option value="America/Rainy_River">America/Rainy_River</option>
        <option value="America/Rankin_Inlet">America/Rankin_Inlet</option>
        <option value="America/Regina">America/Regina</option>
        <option value="America/Swift_Current">America/Swift_Current</option>
        <option value="America/Tegucigalpa">America/Tegucigalpa</option>
        <option value="America/Winnipeg">America/Winnipeg</option>
        <option value="Canada/Central">Canada/Central</option>
        <option value="Canada/East-Saskatchewan">Canada/East-Saskatchewan</option>
        <option value="Canada/Saskatchewan">Canada/Saskatchewan</option>
        <option value="Chile/EasterIsland">Chile/EasterIsland</option>
        <optgroup label="Etc/GMT+">Etc/GMT+6</optgroup>
        <option value="Mexico/General">Mexico/General</option>
        <option value="Pacific/Easter">Pacific/Easter</option>
        <option value="Pacific/Galapagos">Pacific/Galapagos</option>
        <option value="SystemV/CST6">SystemV/CST6</option>
        <option value="SystemV/CST6CDT">SystemV/CST6CDT</option>
        <option value="US/Central">US/Central</option>
        <option value="US/Indiana-Starke">US/Indiana-Starke</option>
        <option value="America/Atikokan">America/Atikokan</option>
        <option value="America/Bogota">America/Bogota</option>
        <option value="America/Cayman">America/Cayman</option>
        <option value="America/Coral_Harbour">America/Coral_Harbour</option>
        <option value="America/Detroit">America/Detroit</option>
        <option value="America/Eirunepe">America/Eirunepe</option>
        <option value="America/Fort_Wayne">America/Fort_Wayne</option>
        <option value="America/Grand_Turk">America/Grand_Turk</option>
        <option value="America/Guayaquil">America/Guayaquil</option>
        <option value="America/Havana">America/Havana</option>
        <option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
        <option value="America/Indiana/Marengo">America/Indiana/Marengo</option>
        <option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option>
        <option value="America/Indiana/Vevay">America/Indiana/Vevay</option>
        <option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option>
        <option value="America/Indiana/Winamac">America/Indiana/Winamac</option>
        <option value="America/Indianapolis">America/Indianapolis</option>
        <option value="America/Iqaluit">America/Iqaluit</option>
        <option value="America/Jamaica">America/Jamaica</option>
        <option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
        <option value="America/Kentucky/Monticello">America/Kentucky/Monticello</option>
        <option value="America/Lima">America/Lima</option>
        <option value="America/Louisville">America/Louisville</option>
        <option value="America/Montreal">America/Montreal</option>
        <option value="America/Nassau">America/Nassau</option>
        <option value="America/New_York">America/New_York</option>
        <option value="America/Nipigon">America/Nipigon</option>
        <option value="America/Panama">America/Panama</option>
        <option value="America/Pangnirtung">America/Pangnirtung</option>
        <option value="America/Port-au-Prince">America/Port-au-Prince</option>
        <option value="America/Porto_Acre">America/Porto_Acre</option>
        <option value="America/Resolute">America/Resolute</option>
        <option value="America/Rio_Branco">America/Rio_Branco</option>
        <option value="America/Thunder_Bay">America/Thunder_Bay</option>
        <option value="America/Toronto">America/Toronto</option>
        <option value="Brazil/Acre">Brazil/Acre</option>
        <option value="Canada/Eastern">Canada/Eastern</option>
        <optgroup label="Etc/GMT+5">Etc/GMT+5</optgroup>
        <option value="SystemV/EST5">SystemV/EST5</option>
        <option value="SystemV/EST5EDT">SystemV/EST5EDT</option>
        <option value="US/East-Indiana">US/East-Indiana</option>
        <option value="US/Eastern">US/Eastern</option>
        <option value="US/Michigan">US/Michigan</option>
        <option value="America/Caracas">America/Caracas</option>
        <option value="America/Anguilla">America/Anguilla</option>
        <option value="America/Antigua">America/Antigua</option>
        <option value="America/Aruba">America/Aruba</option>
        <option value="America/Asuncion">America/Asuncion</option>
        <option value="America/Barbados">America/Barbados</option>
        <option value="America/Blanc-Sablon">America/Blanc-Sablon</option>
        <option value="America/Boa_Vista">America/Boa_Vista</option>
        <option value="America/Campo_Grande">America/Campo_Grande</option>
        <option value="America/Cuiaba">America/Cuiaba</option>
        <option value="America/Curacao">America/Curacao</option>
        <option value="America/Dominica">America/Dominica</option>
        <option value="America/Glace_Bay">America/Glace_Bay</option>
        <option value="America/Goose_Bay">America/Goose_Bay</option>
        <option value="America/Grenada">America/Grenada</option>
        <option value="America/Guadeloupe">America/Guadeloupe</option>
        <option value="America/Guyana">America/Guyana</option>
        <option value="America/Halifax">America/Halifax</option>
        <option value="America/La_Paz">America/La_Paz</option>
        <option value="America/Manaus">America/Manaus</option>
        <option value="America/Marigot">America/Marigot</option>
        <option value="America/Martinique">America/Martinique</option>
        <option value="America/Moncton">America/Moncton</option>
        <option value="America/Montserrat">America/Montserrat</option>
        <option value="America/Port_of_Spain">America/Port_of_Spain</option>
        <option value="America/Porto_Velho">America/Porto_Velho</option>
        <option value="America/Puerto_Rico">America/Puerto_Rico</option>
        <option value="America/Santiago">America/Santiago</option>
        <option value="America/Santo_Domingo">America/Santo_Domingo</option>
        <option value="America/St_Barthelemy">America/St_Barthelemy</option>
        <option value="America/St_Kitts">America/St_Kitts</option>
        <option value="America/St_Lucia">America/St_Lucia</option>
        <option value="America/St_Thomas">America/St_Thomas</option>
        <option value="America/St_Vincent">America/St_Vincent</option>
        <option value="America/Thule">America/Thule</option>
        <option value="America/Tortola">America/Tortola</option>
        <option value="America/Virgin">America/Virgin</option>
        <option value="Antarctica/Palmer">Antarctica/Palmer</option>
        <option value="Atlantic/Bermuda">Atlantic/Bermuda</option>
        <option value="Atlantic/Stanley">Atlantic/Stanley</option>
        <option value="Brazil/West">Brazil/West</option>
        <option value="Canada/Atlantic">Canada/Atlantic</option>
        <option value="Chile/Continental">Chile/Continental</option>
        <optgroup label="Etc/GMT+4">Etc/GMT+4</optgroup>
        <option value="SystemV/AST4">SystemV/AST4</option>
        <option value="SystemV/AST4ADT">SystemV/AST4ADT</option>
        <option value="America/St_Johns">America/St_Johns</option>
        <option value="Canada/Newfoundland">Canada/Newfoundland</option>
        <option value="America/Araguaina">America/Araguaina</option>
        <option value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option>
        <option value="America/Argentina/Catamarca">America/Argentina/Catamarca</option>
        <option value="America/Argentina/ComodRivadavia">America/Argentina/ComodRivadavia</option>
        <option value="America/Argentina/Cordoba">America/Argentina/Cordoba</option>
        <option value="America/Argentina/Jujuy">America/Argentina/Jujuy</option>
        <option value="America/Argentina/La_Rioja">America/Argentina/La_Rioja</option>
        <option value="America/Argentina/Mendoza">America/Argentina/Mendoza</option>
        <option value="America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option>
        <option value="America/Argentina/San_Juan">America/Argentina/San_Juan</option>
        <option value="America/Argentina/San_Luis">America/Argentina/San_Luis</option>
        <option value="America/Argentina/Tucuman">America/Argentina/Tucuman</option>
        <option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option>
        <option value="America/Bahia">America/Bahia</option>
        <option value="America/Belem">America/Belem</option>
        <option value="America/Buenos_Aires">America/Buenos_Aires</option>
        <option value="America/Catamarca">America/Catamarca</option>
        <option value="America/Cayenne">America/Cayenne</option>
        <option value="America/Cordoba">America/Cordoba</option>
        <option value="America/Fortaleza">America/Fortaleza</option>
        <option value="America/Godthab">America/Godthab</option>
        <option value="America/Jujuy">America/Jujuy</option>
        <option value="America/Maceio">America/Maceio</option>
        <option value="America/Mendoza">America/Mendoza</option>
        <option value="America/Miquelon">America/Miquelon</option>
        <option value="America/Montevideo">America/Montevideo</option>
        <option value="America/Paramaribo">America/Paramaribo</option>
        <option value="America/Recife">America/Recife</option>
        <option value="America/Rosario">America/Rosario</option>
        <option value="America/Sao_Paulo">America/Sao_Paulo</option>
        <option value="Antarctica/Rothera">Antarctica/Rothera</option>
        <option value="Brazil/East">Brazil/East</option>
        <optgroup label="Etc/GMT+3">Etc/GMT+3</optgroup>
        <option value="America/Noronha">America/Noronha</option>
        <option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option>
        <option value="Brazil/DeNoronha">Brazil/DeNoronha</option>
        <optgroup label="Etc/GMT+2">Etc/GMT+2</optgroup>
        <option value="America/Scoresbysund">America/Scoresbysund</option>
        <option value="Atlantic/Azores">Atlantic/Azores</option>
        <option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
        <optgroup label="Etc/GMT+1">Etc/GMT+1</optgroup>
        <option value="Africa/Abidjan">Africa/Abidjan</option>
        <option value="Africa/Accra">Africa/Accra</option>
        <option value="Africa/Bamako">Africa/Bamako</option>
        <option value="Africa/Banjul">Africa/Banjul</option>
        <option value="Africa/Bissau">Africa/Bissau</option>
        <option value="Africa/Casablanca">Africa/Casablanca</option>
        <option value="Africa/Conakry">Africa/Conakry</option>
        <option value="Africa/Dakar">Africa/Dakar</option>
        <option value="Africa/El_Aaiun">Africa/El_Aaiun</option>
        <option value="Africa/Freetown">Africa/Freetown</option>
        <option value="Africa/Lome">Africa/Lome</option>
        <option value="Africa/Monrovia">Africa/Monrovia</option>
        <option value="Africa/Nouakchott">Africa/Nouakchott</option>
        <option value="Africa/Ouagadougou">Africa/Ouagadougou</option>
        <option value="Africa/Sao_Tome">Africa/Sao_Tome</option>
        <option value="Africa/Timbuktu">Africa/Timbuktu</option>
        <option value="America/Danmarkshavn">America/Danmarkshavn</option>
        <option value="Atlantic/Canary">Atlantic/Canary</option>
        <option value="Atlantic/Faeroe">Atlantic/Faeroe</option>
        <option value="Atlantic/Faroe">Atlantic/Faroe</option>
        <option value="Atlantic/Madeira">Atlantic/Madeira</option>
        <option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option>
        <option value="Atlantic/St_Helena">Atlantic/St_Helena</option>
        <optgroup label="Etc/GMT0">Etc/GMT0</optgroup>
        <option value="Etc/Greenwich">Etc/Greenwich</option>
        <option value="Etc/UCT">Etc/UCT</option>
        <option value="Etc/UTC">Etc/UTC</option>
        <option value="Etc/Universal">Etc/Universal</option>
        <option value="Etc/Zulu">Etc/Zulu</option>
        <option value="Europe/Belfast">Europe/Belfast</option>
        <option value="Europe/Dublin">Europe/Dublin</option>
        <option value="Europe/Guernsey">Europe/Guernsey</option>
        <option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option>
        <option value="Europe/Jersey">Europe/Jersey</option>
        <option value="Europe/Lisbon">Europe/Lisbon</option>
        <option value="Europe/London">Europe/London</option>
        <option value="Africa/Algiers">Africa/Algiers</option>
        <option value="Africa/Bangui">Africa/Bangui</option>
        <option value="Africa/Brazzaville">Africa/Brazzaville</option>
        <option value="Africa/Ceuta">Africa/Ceuta</option>
        <option value="Africa/Douala">Africa/Douala</option>
        <option value="Africa/Kinshasa">Africa/Kinshasa</option>
        <option value="Africa/Lagos">Africa/Lagos</option>
        <option value="Africa/Libreville">Africa/Libreville</option>
        <option value="Africa/Luanda">Africa/Luanda</option>
        <option value="Africa/Malabo">Africa/Malabo</option>
        <option value="Africa/Ndjamena">Africa/Ndjamena</option>
        <option value="Africa/Niamey">Africa/Niamey</option>
        <option value="Africa/Porto-Novo">Africa/Porto-Novo</option>
        <option value="Africa/Tunis">Africa/Tunis</option>
        <option value="Africa/Windhoek">Africa/Windhoek</option>
        <option value="Arctic/Longyearbyen">Arctic/Longyearbyen</option>
        <option value="Atlantic/Jan_Mayen">Atlantic/Jan_Mayen</option>
        <optgroup label="Etc/GMT-1">Etc/GMT-1</optgroup>
        <option value="Europe/Amsterdam">Europe/Amsterdam</option>
        <option value="Europe/Andorra">Europe/Andorra</option>
        <option value="Europe/Belgrade">Europe/Belgrade</option>
        <option value="Europe/Berlin">Europe/Berlin</option>
        <option value="Europe/Bratislava">Europe/Bratislava</option>
        <option value="Europe/Brussels">Europe/Brussels</option>
        <option value="Europe/Budapest">Europe/Budapest</option>
        <option value="Europe/Copenhagen">Europe/Copenhagen</option>
        <option value="Europe/Gibraltar">Europe/Gibraltar</option>
        <option value="Europe/Ljubljana">Europe/Ljubljana</option>
        <option value="Europe/Luxembourg">Europe/Luxembourg</option>
        <option value="Europe/Madrid">Europe/Madrid</option>
        <option value="Europe/Malta">Europe/Malta</option>
        <option value="Europe/Monaco">Europe/Monaco</option>
        <option value="Europe/Oslo">Europe/Oslo</option>
        <option value="Europe/Paris">Europe/Paris</option>
        <option value="Europe/Podgorica">Europe/Podgorica</option>
        <option value="Europe/Prague">Europe/Prague</option>
        <option value="Europe/Rome">Europe/Rome</option>
        <option value="Europe/San_Marino">Europe/San_Marino</option>
        <option value="Europe/Sarajevo">Europe/Sarajevo</option>
        <option value="Europe/Skopje">Europe/Skopje</option>
        <option value="Europe/Stockholm">Europe/Stockholm</option>
        <option value="Europe/Tirane">Europe/Tirane</option>
        <option value="Europe/Vaduz">Europe/Vaduz</option>
        <option value="Europe/Vatican">Europe/Vatican</option>
        <option value="Europe/Vienna">Europe/Vienna</option>
        <option value="Europe/Warsaw">Europe/Warsaw</option>
        <option value="Europe/Zagreb">Europe/Zagreb</option>
        <option value="Europe/Zurich">Europe/Zurich</option>
        <option value="Africa/Blantyre">Africa/Blantyre</option>
        <option value="Africa/Bujumbura">Africa/Bujumbura</option>
        <option value="Africa/Cairo">Africa/Cairo</option>
        <option value="Africa/Gaborone">Africa/Gaborone</option>
        <option value="Africa/Harare">Africa/Harare</option>
        <option value="Africa/Johannesburg">Africa/Johannesburg</option>
        <option value="Africa/Kigali">Africa/Kigali</option>
        <option value="Africa/Lubumbashi">Africa/Lubumbashi</option>
        <option value="Africa/Lusaka">Africa/Lusaka</option>
        <option value="Africa/Maputo">Africa/Maputo</option>
        <option value="Africa/Maseru">Africa/Maseru</option>
        <option value="Africa/Mbabane">Africa/Mbabane</option>
        <option value="Africa/Tripoli">Africa/Tripoli</option>
        <option value="Asia/Amman">Asia/Amman</option>
        <option value="Asia/Beirut">Asia/Beirut</option>
        <option value="Asia/Damascus">Asia/Damascus</option>
        <option value="Asia/Gaza">Asia/Gaza</option>
        <option value="Asia/Istanbul">Asia/Istanbul</option>
        <option value="Asia/Jerusalem">Asia/Jerusalem</option>
        <option value="Asia/Nicosia">Asia/Nicosia</option>
        <option value="Asia/Tel_Aviv">Asia/Tel_Aviv</option>
        <optgroup label="Etc/GMT-">Etc/GMT-2</optgroup>
        <option value="Europe/Athens">Europe/Athens</option>
        <option value="Europe/Bucharest">Europe/Bucharest</option>
        <option value="Europe/Chisinau">Europe/Chisinau</option>
        <option value="Europe/Helsinki">Europe/Helsinki</option>
        <option value="Europe/Istanbul">Europe/Istanbul</option>
        <option value="Europe/Kaliningrad">Europe/Kaliningrad</option>
        <option value="Europe/Kiev">Europe/Kiev</option>
        <option value="Europe/Mariehamn">Europe/Mariehamn</option>
        <option value="Europe/Minsk">Europe/Minsk</option>
        <option value="Europe/Nicosia">Europe/Nicosia</option>
        <option value="Europe/Riga">Europe/Riga</option>
        <option value="Europe/Simferopol">Europe/Simferopol</option>
        <option value="Europe/Sofia">Europe/Sofia</option>
        <option value="Europe/Tallinn">Europe/Tallinn</option>
        <option value="Europe/Tiraspol">Europe/Tiraspol</option>
        <option value="Europe/Uzhgorod">Europe/Uzhgorod</option>
        <option value="Europe/Vilnius">Europe/Vilnius</option>
        <option value="Europe/Zaporozhye">Europe/Zaporozhye</option>
        <option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option>
        <option value="Africa/Asmara">Africa/Asmara</option>
        <option value="Africa/Asmera">Africa/Asmera</option>
        <option value="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option>
        <option value="Africa/Djibouti">Africa/Djibouti</option>
        <option value="Africa/Kampala">Africa/Kampala</option>
        <option value="Africa/Khartoum">Africa/Khartoum</option>
        <option value="Africa/Mogadishu">Africa/Mogadishu</option>
        <option value="Africa/Nairobi">Africa/Nairobi</option>
        <option value="Antarctica/Syowa">Antarctica/Syowa</option>
        <option value="Asia/Aden">Asia/Aden</option>
        <option value="Asia/Baghdad">Asia/Baghdad</option>
        <option value="Asia/Bahrain">Asia/Bahrain</option>
        <option value="Asia/Kuwait">Asia/Kuwait</option>
        <option value="Asia/Qatar">Asia/Qatar</option>
        <option value="Asia/Riyadh">Asia/Riyadh</option>
        <optgroup label="Etc/GMT-3">Etc/GMT-3</optgroup>
        <option value="Europe/Moscow">Europe/Moscow</option>
        <option value="Europe/Volgograd">Europe/Volgograd</option>
        <option value="Indian/Antananarivo">Indian/Antananarivo</option>
        <option value="Indian/Comoro">Indian/Comoro</option>
        <option value="Indian/Mayotte">Indian/Mayotte</option>
        <option value="Asia/Riyadh87">Asia/Riyadh87</option>
        <option value="Asia/Riyadh88">Asia/Riyadh88</option>
        <option value="Asia/Riyadh89">Asia/Riyadh89</option>
        <option value="Mideast/Riyadh87">Mideast/Riyadh87</option>
        <option value="Mideast/Riyadh88">Mideast/Riyadh88</option>
        <option value="Mideast/Riyadh89">Mideast/Riyadh89</option>
        <option value="Asia/Tehran">Asia/Tehran</option>
        <option value="Asia/Baku">Asia/Baku</option>
        <option value="Asia/Dubai">Asia/Dubai</option>
        <option value="Asia/Muscat">Asia/Muscat</option>
        <option value="Asia/Tbilisi">Asia/Tbilisi</option>
        <option value="Asia/Yerevan">Asia/Yerevan</option>
        <optgroup label="Etc/GMT-4">Etc/GMT-4</optgroup>
        <option value="Europe/Samara">Europe/Samara</option>
        <option value="Indian/Mahe">Indian/Mahe</option>
        <option value="Indian/Mauritius">Indian/Mauritius</option>
        <option value="Indian/Reunion">Indian/Reunion</option>
        <option value="Asia/Kabul">Asia/Kabul</option>
        <option value="Asia/Aqtau">Asia/Aqtau</option>
        <option value="Asia/Aqtobe">Asia/Aqtobe</option>
        <option value="Asia/Ashgabat">Asia/Ashgabat</option>
        <option value="Asia/Ashkhabad">Asia/Ashkhabad</option>
        <option value="Asia/Dushanbe">Asia/Dushanbe</option>
        <option value="Asia/Karachi">Asia/Karachi</option>
        <option value="Asia/Oral">Asia/Oral</option>
        <option value="Asia/Samarkand">Asia/Samarkand</option>
        <option value="Asia/Tashkent">Asia/Tashkent</option>
        <option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
        <optgroup label="Etc/GMT-5">Etc/GMT-5</optgroup>
        <option value="Indian/Kerguelen">Indian/Kerguelen</option>
        <option value="Indian/Maldives">Indian/Maldives</option>
        <option value="Asia/Calcutta">Asia/Calcutta</option>
        <option value="Asia/Colombo">Asia/Colombo</option>
        <option value="Asia/Kolkata">Asia/Kolkata</option>
        <option value="Asia/Katmandu">Asia/Katmandu</option>
        <option value="Antarctica/Mawson">Antarctica/Mawson</option>
        <option value="Antarctica/Vostok">Antarctica/Vostok</option>
        <option value="Asia/Almaty">Asia/Almaty</option>
        <option value="Asia/Bishkek">Asia/Bishkek</option>
        <option value="Asia/Dacca">Asia/Dacca</option>
        <option value="Asia/Dhaka">Asia/Dhaka</option>
        <option value="Asia/Novosibirsk">Asia/Novosibirsk</option>
        <option value="Asia/Omsk">Asia/Omsk</option>
        <option value="Asia/Qyzylorda">Asia/Qyzylorda</option>
        <option value="Asia/Thimbu">Asia/Thimbu</option>
        <option value="Asia/Thimphu">Asia/Thimphu</option>
        <optgroup label="Etc/GMT-6">Etc/GMT-6</optgroup>
        <option value="Indian/Chagos">Indian/Chagos</option>
        <option value="Asia/Rangoon">Asia/Rangoon</option>
        <option value="Indian/Cocos">Indian/Cocos</option>
        <option value="Antarctica/Davis">Antarctica/Davis</option>
        <option value="Asia/Bangkok">Asia/Bangkok</option>
        <option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
        <option value="Asia/Hovd">Asia/Hovd</option>
        <option value="Asia/Jakarta">Asia/Jakarta</option>
        <option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
        <option value="Asia/Phnom_Penh">Asia/Phnom_Penh</option>
        <option value="Asia/Pontianak">Asia/Pontianak</option>
        <option value="Asia/Saigon">Asia/Saigon</option>
        <option value="Asia/Vientiane">Asia/Vientiane</option>
        <optgroup label="Etc/GMT-7">Etc/GMT-7</optgroup>
        <option value="Indian/Christmas">Indian/Christmas</option>
        <option value="Antarctica/Casey">Antarctica/Casey</option>
        <option value="Asia/Brunei">Asia/Brunei</option>
        <option value="Asia/Choibalsan">Asia/Choibalsan</option>
        <option value="Asia/Chongqing">Asia/Chongqing</option>
        <option value="Asia/Chungking">Asia/Chungking</option>
        <option value="Asia/Harbin">Asia/Harbin</option>
        <option value="Asia/Hong_Kong">Asia/Hong_Kong</option>
        <option value="Asia/Irkutsk">Asia/Irkutsk</option>
        <option value="Asia/Kashgar">Asia/Kashgar</option>
        <option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
        <option value="Asia/Kuching">Asia/Kuching</option>
        <option value="Asia/Macao">Asia/Macao</option>
        <option value="Asia/Macau">Asia/Macau</option>
        <option value="Asia/Makassar">Asia/Makassar</option>
        <option value="Asia/Manila">Asia/Manila</option>
        <option value="Asia/Singapore">Asia/Singapore</option>
        <option value="Asia/Taipei">Asia/Taipei</option>
        <option value="Asia/Ujung_Pandang">Asia/Ujung_Pandang</option>
        <option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
        <option value="Asia/Ulan_Bator">Asia/Ulan_Bator</option>
        <option value="Asia/Urumqi">Asia/Urumqi</option>
        <option value="Australia/Perth">Australia/Perth</option>
        <option value="Australia/West">Australia/West</option>
        <optgroup label="Etc/GMT-8">Etc/GMT-8</optgroup>
        <option value="Australia/Eucla">Australia/Eucla</option>
        <option value="Asia/Dili">Asia/Dili</option>
        <option value="Asia/Jayapura">Asia/Jayapura</option>
        <option value="Asia/Pyongyang">Asia/Pyongyang</option>
        <option value="Asia/Seoul">Asia/Seoul</option>
        <option value="Asia/Yakutsk">Asia/Yakutsk</option>
        <optgroup label="Etc/GMT-9">Etc/GMT-9</optgroup>
        <option value="Pacific/Palau">Pacific/Palau</option>
        <option value="Australia/Adelaide">Australia/Adelaide</option>
        <option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
        <option value="Australia/Darwin">Australia/Darwin</option>
        <option value="Australia/North">Australia/North</option>
        <option value="Australia/South">Australia/South</option>
        <option value="Australia/Yancowinna">Australia/Yancowinna</option>
        <option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
        <option value="Asia/Sakhalin">Asia/Sakhalin</option>
        <option value="Asia/Vladivostok">Asia/Vladivostok</option>
        <option value="Australia/ACT">Australia/ACT</option>
        <option value="Australia/Brisbane">Australia/Brisbane</option>
        <option value="Australia/Canberra">Australia/Canberra</option>
        <option value="Australia/Currie">Australia/Currie</option>
        <option value="Australia/Hobart">Australia/Hobart</option>
        <option value="Australia/Lindeman">Australia/Lindeman</option>
        <option value="Australia/Melbourne">Australia/Melbourne</option>
        <option value="Australia/NSW">Australia/NSW</option>
        <option value="Australia/Queensland">Australia/Queensland</option>
        <option value="Australia/Sydney">Australia/Sydney</option>
        <option value="Australia/Tasmania">Australia/Tasmania</option>
        <option value="Australia/Victoria">Australia/Victoria</option>
        <optgroup label="Etc/GMT-10">Etc/GMT-10</optgroup>
        <option value="Pacific/Guam">Pacific/Guam</option>
        <option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option>
        <option value="Pacific/Saipan">Pacific/Saipan</option>
        <option value="Pacific/Truk">Pacific/Truk</option>
        <option value="Pacific/Yap">Pacific/Yap</option>
        <option value="Australia/LHI">Australia/LHI</option>
        <option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
        <option value="Asia/Magadan">Asia/Magadan</option>
        <optgroup label="Etc/GMT-11">Etc/GMT-11</optgroup>
        <option value="Pacific/Efate">Pacific/Efate</option>
        <option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option>
        <option value="Pacific/Kosrae">Pacific/Kosrae</option>
        <option value="Pacific/Noumea">Pacific/Noumea</option>
        <option value="Pacific/Ponape">Pacific/Ponape</option>
        <option value="Pacific/Norfolk">Pacific/Norfolk</option>
        <option value="Antarctica/McMurdo">Antarctica/McMurdo</option>
        <option value="Antarctica/South_Pole">Antarctica/South_Pole</option>
        <option value="Asia/Anadyr">Asia/Anadyr</option>
        <option value="Asia/Kamchatka">Asia/Kamchatka</option>
        <optgroup label="Etc/GMT-12">Etc/GMT-12</optgroup>
        <option value="Pacific/Auckland">Pacific/Auckland</option>
        <option value="Pacific/Fiji">Pacific/Fiji</option>
        <option value="Pacific/Funafuti">Pacific/Funafuti</option>
        <option value="Pacific/Kwajalein">Pacific/Kwajalein</option>
        <option value="Pacific/Majuro">Pacific/Majuro</option>
        <option value="Pacific/Nauru">Pacific/Nauru</option>
        <option value="Pacific/Tarawa">Pacific/Tarawa</option>
        <option value="Pacific/Wake">Pacific/Wake</option>
        <option value="Pacific/Wallis">Pacific/Wallis</option>
        <option value="Pacific/Chatham">Pacific/Chatham</option>
        <optgroup label="Etc/GMT-13">Etc/GMT-13</optgroup>
        <option value="Pacific/Enderbury">Pacific/Enderbury</option>
        <option value="Pacific/Tongatapu">Pacific/Tongatapu</option>
        <optgroup label="Etc/GMT-14">Etc/GMT-14</optgroup>
        <option value="Pacific/Kiritimati">Pacific/Kiritimati</option>
    </select><br><br>
        <select class="input" name="us-lan">
            <option value="ja">日本語</option>
            <option value="en">English</option>
            <option value="zh_CN">中文</option>
            <option value="ko">한글</option>
        </select>
        <br><br>
<textarea cols="40" rows="65" readonly>
番組紹介

パーソナルスペースhttps://www.leton.top/spon.html著者は，ログとメッセージのウェブサイトソースコードを書いた。機能は簡単で高速です。あなただけの残りの操作を保存するためにバックグラウンドにジャンプせずにドキュメントを送信するにログオンする必要があります。シンプルなWebプログラムを作成し、ボックスの便利な高速。サポート作者https://www.leton.top/spon.htmlレプトンパーソナルスペースは、HTML CSSのJavaScript PHPのMySQLを使用して、ログと日記の主な機能としてWebサイトのプログラムを開発する。機能は高速です、インターフェイスはシンプルで使いやすいです。ログイン後、あなたのグラフィックログを公開することができます。

バージョンのサポート
|        機能      |  無料  |  専門  |
 |------------------|--------|--------| 
|個人用            |  はい  |   はい |
|機能アドバイス    |  はい  |  はい  |
|質問フィードバック|  はい  |  はい  |
|完全使用          |   No   |  はい  |
|更新サポート      |   No   |  はい  |
|多図対応          |   No   |  はい  |
|問題指導          |   No   |  はい  |
|フッターの削除    |   No   |  はい  |

*完全使用:使用範囲を制限せず、商用化可能。
*複数の画像をサポート:複数の画像をサポートします。
*質問指導:何か分からないことがあったらメールしてください。


使用範囲

無料版の使用は個人に限られ、ソースコードの再編成後のいかなる形式での転売と伝播を禁止し、商業用途(ソースコードを不法に販売して利益を得、個人のグループではない)に使用してはならない。著者が商用化後にページフッター情報を削除することをサポートします(https://www.leton.top/spon.html) 。


法律声明

本プログラムのソースコードの改編販売とその他の不法な利益を禁止する。

連絡して

|チャンネル     |   メールボックス    |
|---------------|---------------------|
|購入相談       |2115271093@qq.com    |
|購入後         |rockstali@outlook.com|
|フィードバック |admin@leton.top      |



公式サイト：https://www.leton.top/spon.html
私に連絡:2115271093@qq.com

-fanyi.Baidu 翻訳-
</textarea>
        <br><br>
        <input type="submit" value="インストールの開始" class="biu" id="start"><br>
    </form>
    <div><br><br>
        <p class="powered">POWERED BY <a href="https://www.leton.top/spon.html" style="color:skyblue">LETON</a> © 2020-<?php echo date('Y'); ?></p><br><br><br><br>
    </div>