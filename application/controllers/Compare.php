<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 goto bFjy2; bX7zZ: f8iLo: goto vgjTG; JIrUm: exit("\x4e\157\40\144\x69\162\x65\143\x74\x20\163\143\x72\x69\x70\x74\40\x61\x63\143\x65\x73\163\40\141\x6c\x6c\157\x77\x65\x64"); goto bX7zZ; bFjy2: if (defined("\x42\x41\123\x45\120\101\124\x48")) { goto f8iLo; } goto JIrUm; vgjTG: class Compare extends CI_Controller { function __construct() { goto yEgyu; VLJ7U: $this->CHARACTER_SET = "\165\164\146\70\40\103\x4f\x4c\x4c\101\x54\x45\40\165\164\146\70\x5f\x67\145\156\145\162\x61\x6c\137\143\151"; goto BwnGq; qoiqK: $this->DB2 = $this->load->database("\154\151\166\x65", TRUE); goto X1n8B; yEgyu: parent::__construct(); goto VLJ7U; BwnGq: $this->DB1 = $this->load->database("\155\141\x69\156\x5f\x67\141\x72\165\144\141", TRUE); goto qoiqK; X1n8B: } function index() { goto ZTsV4; l0zlH: $sql_commands_to_run = is_array($tables_to_create) && !empty($tables_to_create) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_create, "\x63\162\x65\x61\164\145")) : array(); goto WDTgS; O5I4P: $tables_to_create = array_diff($development_tables, $live_tables); goto KLQIF; z2Fzy: echo "\74\150\62\76\124\x68\145\40\144\x61\x74\141\142\141\x73\145\x20\141\x70\160\x65\141\162\x73\40\164\157\40\x62\x65\40\165\x70\40\x74\x6f\40\x64\x61\164\x65\74\57\x68\62\x3e\12"; goto dRgzv; dRgzv: goto Gk_8t; goto jr2By; WDTgS: $sql_commands_to_run = is_array($tables_to_drop) && !empty($tables_to_drop) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_drop, "\144\162\157\x70")) : array(); goto VU3IM; jr2By: XkxXV: goto PNIO6; An5YT: echo "\x3c\160\76\x54\150\145\40\x66\x6f\154\x6c\157\167\x69\x6e\147\x20\123\x51\x4c\x20\143\157\155\155\x61\156\x64\x73\x20\x6e\145\145\144\40\x74\x6f\x20\x62\145\40\x65\x78\145\143\165\x74\x65\x64\40\164\x6f\40\x62\x72\151\x6e\x67\x20\164\150\145\x20\x4c\x69\166\145\x20\144\x61\164\x61\142\x61\x73\x65\x20\164\x61\142\x6c\x65\x73\x20\x75\x70\x20\x74\x6f\x20\144\141\x74\145\x3a\40\x3c\57\160\76\12"; goto LGlZS; ZTsV4: $sql_commands_to_run = array(); goto CWD7G; FBqNn: echo "\74\160\x72\x65\76\xa"; goto QMoya; VU3IM: $tables_to_update = $this->compare_table_structures($development_tables, $live_tables); goto NDTar; m2Z6L: $sql_commands_to_run = is_array($tables_to_update) && !empty($tables_to_update) ? array_merge($sql_commands_to_run, $this->update_existing_tables($tables_to_update)) : ''; goto RQ5CD; QMoya: Gk_8t: goto J7cvf; iLJbE: foreach ($sql_commands_to_run as $sql_command) { echo "{$sql_command}\12"; WlKuu: } goto fan05; tqKqM: $live_tables = $this->DB2->list_tables(); goto O5I4P; KLQIF: $tables_to_drop = array_diff($live_tables, $development_tables); goto l0zlH; RQ5CD: if (is_array($sql_commands_to_run) && !empty($sql_commands_to_run)) { goto XkxXV; } goto z2Fzy; PNIO6: echo "\74\x68\62\76\124\150\x65\x20\x64\x61\164\141\142\141\x73\145\x20\151\x73\x20\157\x75\x74\x20\157\146\x20\123\171\x6e\x63\41\74\x2f\x68\62\x3e\xa"; goto An5YT; fan05: AMiur: goto FBqNn; NDTar: $tables_to_update = array_diff($tables_to_update, $tables_to_create); goto m2Z6L; LGlZS: echo "\x3c\160\162\x65\40\163\x74\171\x6c\145\x3d\47\x70\141\x64\x64\x69\156\147\72\x20\x32\60\160\170\73\40\142\x61\143\153\147\x72\x6f\x75\156\x64\55\x63\157\154\157\x72\x3a\x20\x23\106\106\x46\x41\x46\60\x3b\x27\x3e\xa"; goto iLJbE; CWD7G: $development_tables = $this->DB1->list_tables(); goto tqKqM; J7cvf: } function manage_tables($tables, $action) { goto nYtAO; SGAYL: if (!($action == "\x64\162\157\x70")) { goto Ow1YJ; } goto WDi7p; dx5tF: vt0z7: goto SGAYL; t1Msa: foreach ($tables as $table) { goto DEv2C; DEv2C: $query = $this->DB1->query("\x53\x48\x4f\x57\40\103\x52\105\101\124\x45\x20\124\101\102\x4c\105\x20\140{$table}\x60\40\x2d\55\40\143\162\x65\141\164\145\x20\x74\x61\x62\154\145\163"); goto AtD0m; AtD0m: $table_structure = $query->row_array(); goto xykHu; RZWfs: Zutwn: goto EA9mb; xykHu: $sql_commands_to_run[] = $table_structure["\x43\x72\145\141\x74\145\40\x54\x61\x62\x6c\x65"] . "\x3b"; goto RZWfs; EA9mb: } goto zS99w; WDi7p: foreach ($tables as $table) { $sql_commands_to_run[] = "\104\122\x4f\x50\40\124\x41\102\x4c\x45\40{$table}\73"; lZaPA: } goto iRWrX; ty4IX: return $sql_commands_to_run; goto ZczQT; iRWrX: S9O9t: goto DdXOu; zS99w: arxax: goto dx5tF; DdXOu: Ow1YJ: goto ty4IX; nYtAO: $sql_commands_to_run = array(); goto XYGCq; XYGCq: if (!($action == "\x63\162\x65\141\164\x65")) { goto vt0z7; } goto t1Msa; ZczQT: } function compare_table_structures($development_tables, $live_tables) { goto MCpuJ; fOjBx: return $tables_need_updating; goto jT8wX; LioiR: XYV9g: goto XASiu; r3Kdx: $live_table_structures = $development_table_structures = array(); goto dY3_W; kpoYQ: foreach ($development_tables as $table) { goto nOSOv; zD0nP: AgkQH: goto k1Kqb; OG7cC: $tables_need_updating[] = $table; goto J5JwQ; qrC2x: if (!($this->count_differences($development_table, $live_table) > 0)) { goto Chqes; } goto OG7cC; nOSOv: $development_table = $development_table_structures[$table]; goto SLo0E; J5JwQ: Chqes: goto zD0nP; SLo0E: $live_table = isset($live_table_structures[$table]) ? $live_table_structures[$table] : ''; goto qrC2x; k1Kqb: } goto sIabg; XASiu: foreach ($live_tables as $table) { goto f2CXC; njPwD: Jkwaw: goto IFC03; oNpRq: $live_table_structures[$table] = $table_structure["\103\x72\x65\x61\x74\145\x20\124\141\142\154\x65"]; goto njPwD; f2CXC: $query = $this->DB2->query("\x53\x48\117\127\x20\x43\122\x45\101\x54\x45\40\124\101\102\114\105\x20\140{$table}\140\40\x2d\x2d\x20\x6c\151\x76\145"); goto hEJIs; hEJIs: $table_structure = $query->row_array(); goto oNpRq; IFC03: } goto kX2BQ; dY3_W: foreach ($development_tables as $table) { goto N2u7H; N2u7H: $query = $this->DB1->query("\x53\x48\x4f\x57\x20\103\x52\x45\x41\124\105\40\x54\x41\x42\114\105\x20\x60{$table}\140\40\x2d\55\40\144\145\x76"); goto rs8J9; rs8J9: $table_structure = $query->row_array(); goto OtTgd; S_jWW: LfPz0: goto NMDAu; OtTgd: $development_table_structures[$table] = $table_structure["\103\162\x65\x61\164\x65\40\124\141\x62\x6c\x65"]; goto S_jWW; NMDAu: } goto LioiR; kX2BQ: eOrUo: goto kpoYQ; MCpuJ: $tables_need_updating = array(); goto r3Kdx; sIabg: Vn5I6: goto fOjBx; jT8wX: } function count_differences($old, $new) { goto xFoga; ClwCf: R2CNi: goto bCBsD; bCBsD: $old = explode("\40", $old ?? ''); goto YwkxK; Hu_3v: goto GSnNF; goto Qz5_X; giY41: if (!($old == $new)) { goto R2CNi; } goto UNFy0; VCjKG: GSnNF: goto f3cgJ; Qz5_X: eby_L: goto GdtIl; ro9W0: Jezfr: goto sHo2v; YwkxK: $new = explode("\x20", $new ?? ''); goto gyxSg; sHo2v: slEFz: goto dobxx; Zv2Me: $i = 0; goto VCjKG; UNFy0: return $differences; goto ClwCf; xFoga: $differences = 0; goto z02Lr; mDKPH: if (!($old[$i] != $new[$i])) { goto Jezfr; } goto zC6Dh; f3cgJ: if (!($i < $length)) { goto eby_L; } goto mDKPH; zC6Dh: $differences++; goto ro9W0; GdtIl: return $differences; goto NC_qW; Dya28: $new = trim(preg_replace("\57\x5c\163\53\57", '', $new) ?? ''); goto giY41; z02Lr: $old = trim(preg_replace("\x2f\134\x73\x2b\57", '', $old) ?? ''); goto Dya28; gyxSg: $length = max(count($old), count($new)); goto Zv2Me; dobxx: $i++; goto Hu_3v; NC_qW: } function update_existing_tables($tables) { goto dFhrl; pMqDj: foreach ($tables as $table) { goto VItMP; PtSuM: $table_structure_live[$table] = $this->table_field_data((array) $this->DB2, $table); goto PnE5n; PnE5n: lbjEy: goto IqPHW; VItMP: $table_structure_development[$table] = $this->table_field_data((array) $this->DB1, $table); goto PtSuM; IqPHW: } goto P7gF0; oU0xn: $table_structure_live = array(); goto a_02w; a_02w: if (!(is_array($tables) && !empty($tables))) { goto tTqFP; } goto pMqDj; PqHBX: return $sql_commands_to_run; goto mEfrE; zPAIS: tTqFP: goto JuqmL; P7gF0: N0clS: goto zPAIS; QlPxL: $table_structure_development = array(); goto oU0xn; dFhrl: $sql_commands_to_run = array(); goto QlPxL; JuqmL: $sql_commands_to_run = array_merge($sql_commands_to_run, $this->determine_field_changes($table_structure_development, $table_structure_live)); goto PqHBX; mEfrE: } function table_field_data($database, $table) { goto xQblE; xQblE: $conn = mysqli_connect($database["\x68\157\163\x74\156\141\x6d\x65"], $database["\x75\x73\x65\162\x6e\141\x6d\145"], $database["\160\x61\163\x73\x77\157\x72\144"]); goto XXIFX; XXIFX: mysql_select_db($database["\144\141\x74\x61\x62\141\x73\145"]); goto O0Qt4; zOiJM: yOxNJ: goto RJahk; H8eGy: if (!($row = mysql_fetch_assoc($result))) { goto yOxNJ; } goto AYO38; qApp9: vQrE9: goto H8eGy; mRSDF: goto vQrE9; goto zOiJM; RJahk: return $fields; goto w9LTM; AYO38: $fields[] = $row; goto mRSDF; O0Qt4: $result = mysql_query("\x53\110\117\x57\x20\103\117\114\125\115\116\x53\40\106\x52\x4f\x4d\40\x60{$table}\140"); goto qApp9; w9LTM: } function determine_field_changes($source_field_structures, $destination_field_structures) { goto sQTd8; doqVg: return $sql_commands_to_run; goto JdeBC; sQTd8: $sql_commands_to_run = array(); goto oUpZS; YDvp9: UIO3D: goto doqVg; oUpZS: foreach ($source_field_structures as $table => $fields) { goto tIiOO; rigur: YBE6Y: goto kEOKO; tIiOO: foreach ($fields as $field) { goto pdDvP; IHYmH: $add_field .= isset($field["\105\x78\164\x72\x61"]) && $field["\105\170\x74\x72\x61"] != '' ? "\x20" . $field["\x45\170\164\162\141"] : ''; goto JYuUr; b0vXg: h2dF0: goto Lfbnj; Kx_nL: $sql_commands_to_run[] = $add_field; goto qk2Rp; jHeHD: if (!(isset($fields[$n]) && isset($destination_field_structures[$table][$n]) && $fields[$n]["\106\151\145\154\x64"] == $destination_field_structures[$table][$n]["\x46\151\x65\x6c\144"])) { goto CH1rY; } goto Ps9Pv; pdDvP: if ($this->in_array_recursive($field["\106\151\x65\154\x64"], $destination_field_structures[$table])) { goto I5Yyb; } goto rjKFH; JYuUr: $add_field .= "\x3b"; goto Kx_nL; d546R: $n++; goto aySw1; K9vrS: $sql_commands_to_run[] = $modify_field; goto x4xEk; P822h: qNyNT: goto QuEbQ; x4xEk: Z4Lc1: goto HwQI0; rUx57: CH1rY: goto drjX7; Lfbnj: a0DDa: goto P822h; ItKXO: $n = 0; goto Aqka9; NpSAO: $previous_field = $fields[$n]["\106\x69\x65\x6c\x64"]; goto rUx57; HwQI0: C4owZ: goto d546R; QUw0Q: $add_field .= isset($field["\116\165\x6c\154"]) && $field["\x4e\x75\x6c\x6c"] == "\131\105\123" ? "\40\x4e\165\x6c\x6c" : ''; goto dKp1L; Aqka9: hFIFy: goto hH1ys; eTdwW: if (!(is_array($differences) && !empty($differences))) { goto JbThe; } goto htJnr; aySw1: goto hFIFy; goto b0vXg; drjX7: if (!($modify_field != '' && !in_array($modify_field, $sql_commands_to_run))) { goto Z4Lc1; } goto K9vrS; Ps9Pv: $differences = array_diff($fields[$n], $destination_field_structures[$table][$n]); goto eTdwW; qk2Rp: goto a0DDa; goto dhDtX; kKHN4: $modify_field = ''; goto ItKXO; ler2x: $modify_field .= isset($previous_field) && $previous_field != '' ? "\x20\x41\106\124\x45\x52\40" . $previous_field : ''; goto dsXb5; dsXb5: $modify_field .= "\x3b"; goto qHUfr; oRGbO: $modify_field .= isset($fields[$n]["\116\x75\154\154"]) && $fields[$n]["\x4e\x75\x6c\x6c"] == "\131\x45\x53" ? "\40\x4e\125\114\x4c" : "\40\116\117\x54\x20\116\125\114\x4c"; goto HcHlg; hH1ys: if (!($n < count($fields))) { goto h2dF0; } goto jHeHD; dKp1L: $add_field .= "\40\104\x45\106\101\x55\114\124\40" . $field["\104\x65\146\141\x75\x6c\164"]; goto IHYmH; HcHlg: $modify_field .= isset($fields[$n]["\105\x78\164\162\x61"]) && $fields[$n]["\105\x78\x74\162\141"] != '' ? "\40" . $fields[$n]["\105\x78\164\162\141"] : ''; goto ler2x; htJnr: $modify_field = "\x41\114\x54\x45\122\40\x54\101\102\x4c\x45\x20{$table}\x20\x4d\117\x44\x49\x46\131\x20\103\x4f\x4c\125\x4d\x4e\40\140" . $fields[$n]["\106\x69\x65\154\144"] . "\140\x20" . $fields[$n]["\x54\171\160\145"] . "\40\x43\x48\x41\x52\101\103\x54\105\x52\40\123\x45\x54\40" . $this->CHARACTER_SET; goto v2Vj0; dhDtX: I5Yyb: goto kKHN4; v2Vj0: $modify_field .= isset($fields[$n]["\x44\145\x66\x61\x75\x6c\x74"]) && $fields[$n]["\104\145\146\141\165\154\164"] != '' ? "\x20\104\x45\x46\101\125\114\124\40\47" . $fields[$n]["\104\x65\146\141\x75\154\x74"] . "\x27" : ''; goto oRGbO; rjKFH: $add_field = "\101\114\x54\105\x52\x20\x54\101\x42\x4c\105\x20{$table}\x20\x41\104\104\x20\x43\117\x4c\x55\115\116\40\140" . $field["\x46\151\x65\154\144"] . "\140\x20" . $field["\124\x79\160\145"] . "\40\103\x48\101\122\x41\x43\124\105\x52\40\x53\105\x54\40" . $this->CHARACTER_SET; goto QUw0Q; qHUfr: JbThe: goto NpSAO; QuEbQ: } goto rPmIy; rPmIy: X2uzz: goto rigur; kEOKO: } goto YDvp9; JdeBC: } function in_array_recursive($needle, $haystack, $strict = false) { goto uETPH; UFPOJ: return false; goto xBtwV; xFPso: o9fa4: goto UFPOJ; uETPH: foreach ($haystack as $array => $item) { goto VthnW; n3J7E: return true; goto UMO2B; ZKeBn: xciFH: goto CISVF; JhJr3: if (!(($strict ? $item === $needle : $item == $needle) || is_array($item) && in_array_recursive($needle, $item, $strict))) { goto mp3WK; } goto n3J7E; VthnW: $item = $item["\106\x69\x65\154\x64"]; goto JhJr3; UMO2B: mp3WK: goto ZKeBn; CISVF: } goto xFPso; xBtwV: } }
