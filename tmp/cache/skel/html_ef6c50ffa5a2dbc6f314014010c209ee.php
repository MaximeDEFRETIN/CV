<?php

/*
 * Squelette : ../plugins/auto/simplog/v1.4.4/prive/squelettes/contenu/simplog.html
 * Date :      Fri, 20 Dec 2019 11:26:28 GMT
 * Compile :   Sun, 08 Mar 2020 10:15:36 GMT
 * Boucles :   _lecture_log, _controle_log, _parametre_log
 */ 

function BOUCLE_lecture_loghtml_ef6c50ffa5a2dbc6f314014010c209ee(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = ((isset($Pile[$SP]['gravite'])?$Pile[$SP]['gravite']:(@$Pile[0]['gravite']))))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$command['sourcemode'] = 'table';

	$command['source'] = array(simplog_phraser_log(table_valeur($Pile["vars"], (string)'fichier_log', null)));

	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_lecture_log']))?$Pile[0]['sens'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('sens'.'_lecture_log'))?session_get('sens'.'_lecture_log'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debut_lecture_log']) ? $Pile[0]['debut_lecture_log'] : null), 100);
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_lecture_log';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array(".valeur",
		"".tri_champ_select($tri)."",
		"date",
		"ip",
		"pid",
		"hit",
		"gravite",
		"texte");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array((!(is_array((isset($Pile[$SP]['gravite'])?$Pile[$SP]['gravite']:(@$Pile[0]['gravite'])))?count((isset($Pile[$SP]['gravite'])?$Pile[$SP]['gravite']:(@$Pile[0]['gravite']))):strlen((isset($Pile[$SP]['gravite'])?$Pile[$SP]['gravite']:(@$Pile[0]['gravite'])))) ? '' : ((is_array((isset($Pile[$SP]['gravite'])?$Pile[$SP]['gravite']:(@$Pile[0]['gravite'])))) ? sql_in('gravite',sql_quote($in)) : 
			array('=', 'gravite', sql_quote((isset($Pile[$SP]['gravite'])?$Pile[$SP]['gravite']:(@$Pile[0]['gravite'])), '','')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins/auto/simplog/v1.4.4/prive/squelettes/contenu/simplog.html','html_ef6c50ffa5a2dbc6f314014010c209ee','_lecture_log',21,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_lecture_log']['compteur_boucle'] = 0;
	$Numrows['_lecture_log']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_lecture_log']) ? $Pile[0]['debut_lecture_log'] : _request('debut_lecture_log');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_lecture_log'] = quete_debut_pagination('',$Pile[0]['@'] = substr($debut_boucle,1),100,$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_lecture_log']['total']-1)/(100))*(100)));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_lecture_log']['total'] : $debut_boucle + 99), $Numrows['_lecture_log']['total'] - 1);
	$Numrows['_lecture_log']['grand_total'] = $Numrows['_lecture_log']['total'];
	$Numrows['_lecture_log']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_lecture_log']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_lecture_log']['compteur_boucle'] = $debut_boucle;
	
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_lecture_log']['compteur_boucle']++;
		if ($Numrows['_lecture_log']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_lecture_log']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
						<tr class="' .
alterner($Numrows['_lecture_log']['compteur_boucle'],'row_odd','row_even') .
'">
							<td class="date secondaire">' .
interdire_scripts(normaliser_date((isset($Pile[$SP]['date'])?$Pile[$SP]['date']:((isset($Pile[$SP-1]['date'])?$Pile[$SP-1]['date']:(@$Pile[0]['date'])))))) .
'</td>
							<td class="ip">' .
interdire_scripts(safehtml((isset($Pile[$SP]['ip'])?$Pile[$SP]['ip']:((isset($Pile[$SP-1]['ip'])?$Pile[$SP-1]['ip']:(@$Pile[0]['ip'])))))) .
'</td>
							<td class="pid">' .
interdire_scripts(safehtml((isset($Pile[$SP]['pid'])?$Pile[$SP]['pid']:((isset($Pile[$SP-1]['pid'])?$Pile[$SP-1]['pid']:(@$Pile[0]['pid'])))))) .
'</td>
							<td class="hit">' .
interdire_scripts(safehtml((isset($Pile[$SP]['hit'])?$Pile[$SP]['hit']:((isset($Pile[$SP-1]['hit'])?$Pile[$SP-1]['hit']:(@$Pile[0]['hit'])))))) .
'</td>
							<td class="gravite">' .
interdire_scripts(safehtml((isset($Pile[$SP]['gravite'])?$Pile[$SP]['gravite']:((isset($Pile[$SP-1]['gravite'])?$Pile[$SP-1]['gravite']:(@$Pile[0]['gravite'])))))) .
'</td>
							<td class="texte principale">' .
interdire_scripts(propre((isset($Pile[$SP]['texte'])?$Pile[$SP]['texte']:((isset($Pile[$SP-1]['texte'])?$Pile[$SP-1]['texte']:(@$Pile[0]['texte'])))), $connect, $Pile[0])) .
'</td>
						</tr>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_lecture_log @ ../plugins/auto/simplog/v1.4.4/prive/squelettes/contenu/simplog.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_controle_loghtml_ef6c50ffa5a2dbc6f314014010c209ee(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'glob';

	$command['source'] = array(interdire_scripts(concat(eval('return '.'_DIR_LOG'.';'),'*.log*')));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_controle_log';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		"gravite",
		"date",
		"ip",
		"pid",
		"hit",
		"texte");
		$command['orderby'] = array('valeur');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'valeur', sql_quote(interdire_scripts(concat(eval('return '.'_DIR_LOG'.';'),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'log', null),true)))), '', 'STRING')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins/auto/simplog/v1.4.4/prive/squelettes/contenu/simplog.html','html_ef6c50ffa5a2dbc6f314014010c209ee','_controle_log',17,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		
		' .
vide($Pile['vars'][$_zzz=(string)'nom_fichier'] = interdire_scripts(substr(safehtml($Pile[$SP]['valeur']),interdire_scripts(strlen(eval('return '.'_DIR_LOG'.';')))))) .
vide($Pile['vars'][$_zzz=(string)'fichier_log'] = interdire_scripts(safehtml($Pile[$SP]['valeur']))) .
(($t1 = BOUCLE_lecture_loghtml_ef6c50ffa5a2dbc6f314014010c209ee($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			' .
		
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/inc-caption') . ', array(\'log\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'nom_fichier', null)) . ',
	\'fichier\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'fichier_log', null)) . ',
	\'gravite\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'gravite', null),true))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/simplog/v1.4.4/prive/squelettes/contenu/simplog.html\',\'html_ef6c50ffa5a2dbc6f314014010c209ee\',\'\',22,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .
		filtre_pagination_dist($Numrows["_lecture_log"]["grand_total"],
 		'_lecture_log',
		isset($Pile[0]['debut_lecture_log'])?$Pile[0]['debut_lecture_log']:intval(_request('debut_lecture_log')),
		100, false, '', '', array()) .
		'
			<div class="spip_code">
				<table class="spip liste">
					<thead>
						<tr class="first_row">
							<th class="navigation" colspan="5">
								' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_lecture_log"]["grand_total"],
 		'_lecture_log',
		isset($Pile[0]['debut_lecture_log'])?$Pile[0]['debut_lecture_log']:intval(_request('debut_lecture_log')),
		100, true, 'prive', '', array())))!=='' ?
				('<p class="pagination">' . $t3 . '</p>') :
				'') .
		'
							</th>
							<th class="sens" colspan="1">
								<div class="pagination tri">
									' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('>',array('>','<')))?'sens':'tri').'_lecture_log',$s?(strpos('< >','>')-1):'>'),'var_memotri',strncmp('_lecture_log','session',7)==0?(($s=in_array('>',array('>','<')))?'sens':'tri').'_lecture_log':''),_T('simplog:tri_croissant'),$s?(((intval($t=(isset($Pile[0]['sens'.'_lecture_log']))?$Pile[0]['sens'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('sens'.'_lecture_log'))?session_get('sens'.'_lecture_log'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','>')-1)):((($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')=='>')) .
		'
									' .
		(($t3 = strval(lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('<',array('>','<')))?'sens':'tri').'_lecture_log',$s?(strpos('< >','<')-1):'<'),'var_memotri',strncmp('_lecture_log','session',7)==0?(($s=in_array('<',array('>','<')))?'sens':'tri').'_lecture_log':''),_T('simplog:tri_decroissant'),$s?(((intval($t=(isset($Pile[0]['sens'.'_lecture_log']))?$Pile[0]['sens'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('sens'.'_lecture_log'))?session_get('sens'.'_lecture_log'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','<')-1)):((($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')=='<'))))!=='' ?
				(' | ' . $t3 . ' ') :
				'') .
		'
								</div>
							</th>
						</tr>
						<tr class="first_row">
							<th class="date secondaire" scope="col">' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('index',array('>','<')))?'sens':'tri').'_lecture_log',$s?(strpos('< >','index')-1):'index'),'var_memotri',strncmp('_lecture_log','session',7)==0?(($s=in_array('index',array('>','<')))?'sens':'tri').'_lecture_log':''),_T('simplog:colonne_date'),$s?(((intval($t=(isset($Pile[0]['sens'.'_lecture_log']))?$Pile[0]['sens'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('sens'.'_lecture_log'))?session_get('sens'.'_lecture_log'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','index')-1)):((($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')=='index'),'ajax') .
		'</th>
							<th class="ip" scope="col">' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('ip',array('>','<')))?'sens':'tri').'_lecture_log',$s?(strpos('< >','ip')-1):'ip'),'var_memotri',strncmp('_lecture_log','session',7)==0?(($s=in_array('ip',array('>','<')))?'sens':'tri').'_lecture_log':''),_T('simplog:colonne_ip'),$s?(((intval($t=(isset($Pile[0]['sens'.'_lecture_log']))?$Pile[0]['sens'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('sens'.'_lecture_log'))?session_get('sens'.'_lecture_log'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','ip')-1)):((($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')=='ip'),'ajax') .
		'</th>
							<th class="pid" scope="col">' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('pid',array('>','<')))?'sens':'tri').'_lecture_log',$s?(strpos('< >','pid')-1):'pid'),'var_memotri',strncmp('_lecture_log','session',7)==0?(($s=in_array('pid',array('>','<')))?'sens':'tri').'_lecture_log':''),_T('simplog:colonne_pid'),$s?(((intval($t=(isset($Pile[0]['sens'.'_lecture_log']))?$Pile[0]['sens'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('sens'.'_lecture_log'))?session_get('sens'.'_lecture_log'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','pid')-1)):((($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')=='pid'),'ajax') .
		'</th>
							<th class="hit" scope="col">' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('hit',array('>','<')))?'sens':'tri').'_lecture_log',$s?(strpos('< >','hit')-1):'hit'),'var_memotri',strncmp('_lecture_log','session',7)==0?(($s=in_array('hit',array('>','<')))?'sens':'tri').'_lecture_log':''),_T('simplog:colonne_hit'),$s?(((intval($t=(isset($Pile[0]['sens'.'_lecture_log']))?$Pile[0]['sens'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('sens'.'_lecture_log'))?session_get('sens'.'_lecture_log'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','hit')-1)):((($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')=='hit'),'ajax') .
		'</th>
							<th class="gravite" scope="col">' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('gravite',array('>','<')))?'sens':'tri').'_lecture_log',$s?(strpos('< >','gravite')-1):'gravite'),'var_memotri',strncmp('_lecture_log','session',7)==0?(($s=in_array('gravite',array('>','<')))?'sens':'tri').'_lecture_log':''),_T('simplog:colonne_gravite'),$s?(((intval($t=(isset($Pile[0]['sens'.'_lecture_log']))?$Pile[0]['sens'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('sens'.'_lecture_log'))?session_get('sens'.'_lecture_log'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','gravite')-1)):((($t=(isset($Pile[0]['tri'.'_lecture_log']))?$Pile[0]['tri'.'_lecture_log']:((strncmp('_lecture_log','session',7)==0 AND session_get('tri'.'_lecture_log'))?session_get('tri'.'_lecture_log'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'index'),true))))?tri_protege_champ($t):'')=='gravite'),'ajax') .
		'</th>
							<th class="texte principale" scope="col">' .
		_T('simplog:colonne_texte') .
		'</th>
						</tr>
					</thead>
					<tbody>
		') . $t1 . (	'
					</tbody>
					' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_lecture_log"]["grand_total"],
 		'_lecture_log',
		isset($Pile[0]['debut_lecture_log'])?$Pile[0]['debut_lecture_log']:intval(_request('debut_lecture_log')),
		100, true, 'prive', '', array())))!=='' ?
				('<tfoot>
						<tr>
							<td class="navigation" colspan="6">
								<p class="pagination">' . $t3 . '</p>
							</td>
						</tr>
					</tfoot>') :
				'') .
		'
				</table>
			</div>
		')) :
		((	'
			' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/inc-caption') . ', array(\'log\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'nom_fichier', null)) . ',
	\'fichier\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'fichier_log', null)) . ',
	\'gravite\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'gravite', null),true))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins/auto/simplog/v1.4.4/prive/squelettes/contenu/simplog.html\',\'html_ef6c50ffa5a2dbc6f314014010c209ee\',\'\',72,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .
	boite_ouvrir('', 'notice') .
	(($t2 = strval(interdire_scripts(((safehtml((isset($Pile[$SP]['gravite'])?$Pile[$SP]['gravite']:(@$Pile[0]['gravite'])))) ?'' :' '))))!=='' ?
			($t2 . _T('simplog:message_fichier_vide')) :
			'') .
	'
				' .
	(($t2 = strval(interdire_scripts(((safehtml((isset($Pile[$SP]['gravite'])?$Pile[$SP]['gravite']:(@$Pile[0]['gravite'])))) ?' ' :''))))!=='' ?
			($t2 . _T('simplog:message_fichier_filtre_vide', array('gravite' => interdire_scripts(safehtml((isset($Pile[$SP]['gravite'])?$Pile[$SP]['gravite']:(@$Pile[0]['gravite']))))))) :
			'') .
	'
			' .
	boite_fermer() .
	'
		'))) .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_controle_log @ ../plugins/auto/simplog/v1.4.4/prive/squelettes/contenu/simplog.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_parametre_loghtml_ef6c50ffa5a2dbc6f314014010c209ee(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($si_init)) { $command['si'] = array(); $si_init = true; }
	$command['si'][] = interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'log', null),true)) ?' ' :''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_parametre_log';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"CONDITION",
		$command,
		array('../plugins/auto/simplog/v1.4.4/prive/squelettes/contenu/simplog.html','html_ef6c50ffa5a2dbc6f314014010c209ee','_parametre_log',15,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	
	' .
(($t1 = BOUCLE_controle_loghtml_ef6c50ffa5a2dbc6f314014010c209ee($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
		' .
	boite_ouvrir('', 'error') .
	_T('simplog:message_fichier_non_log', array('fichier' => interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'log', null),true)))) .
	'
		' .
	boite_fermer() .
	'
	'))) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_parametre_log @ ../plugins/auto/simplog/v1.4.4/prive/squelettes/contenu/simplog.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/simplog/v1.4.4/prive/squelettes/contenu/simplog.html
// Temps de compilation total: 7.672 ms
//

function html_ef6c50ffa5a2dbc6f314014010c209ee($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('voir', 'simplog')?" ":""))) .
'

' .
vide($Pile['vars'][$_zzz=(string)'defaut_tri'] = array('index' => '-1', 'gravite' => '1', 'hit' => '1', 'ip' => '1', 'pid' => '1
')) .
'
' .
vide($Pile['vars'][$_zzz=(string)'fichier_log'] = '') .
'<h1 class="grostitre">' .
_T('simplog:logs') .
'</h1>


' .
(($t1 = BOUCLE_parametre_loghtml_ef6c50ffa5a2dbc6f314014010c209ee($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	boite_ouvrir('', 'notice') .
	_T('simplog:message_fichier_choisir') .
	'
	' .
	boite_fermer() .
	'
'))) .
'
');

	return analyse_resultat_skel('html_ef6c50ffa5a2dbc6f314014010c209ee', $Cache, $page, '../plugins/auto/simplog/v1.4.4/prive/squelettes/contenu/simplog.html');
}
?>