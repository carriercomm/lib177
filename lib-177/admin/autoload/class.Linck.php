<?phpclass Linck{	public static function openMvcFiles($mvc, $project, $query){        $result = '';		foreach($mvc as $name =>  $fichier)        {            switch($query){                case 'lcl':                    $rapel = '<a href="openMVC-lcl-';                break;                case 'dst':                    $rapel = '<a href="openMVC-dst-';                break;                default:                    Error::brut('Query unknown.');            }			$result .= '			<nav class="explorerMVC">'				.$rapel.$project.'-'.$name.'-all">'.$name.'</a>';				foreach($fichier as $dispo)					$result .= ' - | - '.$rapel.$project.'-'.$name.'-'.$dispo.'">'.$dispo.'</a>';			$result .= '			</nav><br>';		}        return $result;	}	public static function openFiles($projets, $query, $src){        $result = '';		foreach($projets as $projet)        {			$result .= '			<form action="opener-'.$query.'" method="post" class="explorerSimple">				<input type="hidden" name="src" value="'.$src.$projet.'">				<input type="submit" value="'.$projet.'">			</form>';		}        return $result;	}}