<?phpfunction listProject(){    $projects = ScanDossier::dirOnly('../', false);    if(empty($projects))        return false;    $return = '';    Program::getProgram('projects', 'switcher.php');    foreach($projects as $project){        $return .= '		<nav class="bTmodeCase">			<a class="btFold" href="'.switcher($project).'"></a>			<a href="explore-see-'.$project.'-0-0" class="see">				<img src="library/img/views.png" alt="mvc" title="explorer mvc">			</a>			<a href="#" class="propage">				<img src="library/img/servers.png" alt="ftp" title="ftp">			</a>			<form href="project-delete" class="delete" title="supprimer">				<input type="image" src="library/img/croix.png" name="delete" value="'.$project.'">			</form>			<span>cfg</span>			<span>sql</span>			<span>stat</span>			<input name="rename" value="'.$project.'">		</nav>';    }    return $return;} ?>