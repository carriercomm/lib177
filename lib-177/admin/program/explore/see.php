<?phpnamespace Explore;function see($src = '../', $project = false, $stock = false){	if(!file_exists($src))		return false;	$path = explode(',', $stock);	$type = array_pop($path);	\Program::getProgram('Explore', 'editBar.php');	$head = \Explore\editBar($src, $project, $stock, $type);    if('mvc' === $stock){        \Program::getProgram('Explore', 'seeMVC.php');        $fichiers = \Explore\seeMVC($src, $project, $stock);    }	else{		\Program::getProgram('Explore', 'seePages.php');		$fichiers = \Explore\seePages($src, $project, $stock);	}    \Program::getProgram('Explore', 'listDirectory.php');    $dossier = \Explore\listDirectory($src, $project, $stock);    return $head.$dossier.$fichiers;}?>