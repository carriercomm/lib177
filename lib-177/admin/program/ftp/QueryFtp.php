<?phpfunction QueryFtp($action = 'see', $stock = '', $name = 0){	if(empty($stock))		$stock = 0;	if(isset($_POST['mode'])){		if(isset($_SESSION['mode']))			unset($_SESSION['mode']);		else			$_SESSION['mode'] = 1;	}	if(isset($_POST['server'], $_POST['pseudo'], $_POST['mdp'])){		$server = $_POST['server'];		$pseudo = $_POST['pseudo'];		$mdp = $_POST['mdp'];	}	elseif(isset($_SESSION['server'], $_SESSION['pseudo'], $_SESSION['mdp'])){		$server = $_SESSION['server'];		$pseudo = $_SESSION['pseudo'];		$mdp = $_SESSION['mdp'];	}	else		return 'En attente de connexion.';	$ftp = New Ftp($server);	if(!$ftp->login($pseudo, $mdp))		return 'Identifiers rejected.';    if(!empty($stock))            $src = '/'.str_replace(',', '/', $stock).'/';	else		$src = '/';    switch($action)    {        case 'createDir':            Program::getProgram('ftp', 'createDir.php');            return createDir($ftp, $src, $stock, $name);        break;        case 'deleteDir':            Program::getProgram('ftp', 'deleteDir.php');            return deleteDir($ftp, $src, $stock, $name);        break;        case 'createMVCPages':            Program::getProgram('ftp', 'createMVCPages.php');            return createMVCPages($ftp, $src, $stock, $name);        break;        case 'createOnePage':            Program::getProgram('ftp', 'createOnePage.php');            return createOnePage($ftp, $src, $stock, $name);        break;        case 'delete':            Program::getProgram('ftp', 'delete.php');            return delete($ftp, $src, $stock, $name);        break;        case 'deleteMVC':            Program::getProgram('ftp', 'deleteMVC.php');            return deleteMVC($ftp, $src, $stock, $name);        break;        case 'listProject':            Program::getProgram('ftp', 'listProject.php');            return listProject();        break;        case 'logout':            Program::getProgram('ftp', 'logout.php');            return logout($ftp);        break;        case 'newStock':            Program::getProgram('ftp', 'newStock.php');            return newStock($src, $name);        break;        case 'see':            Program::getProgram('ftp', 'see.php');            return see($ftp, $src, $stock, $name);        break;        case 'open':            Program::getProgram('ftp', 'open.php');            return openFile($ftp, $src, $stock, $name);        break;        case 'openMVC';            Program::getProgram('ftp', 'openMVC.php');            return openMVC($ftp, $src, $stock, $name);        break;        case 'propage';            Program::getProgram('ftp', 'propage.php');            return propage($ftp, $src, $stock, $name);        break;        case 'slide':            Program::getProgram('ftp', 'slide.php');            return slide();        break;        default:			Program::getProgram('ftp', 'see.php');			return see($ftp, $src, $stock, $name);    }}?>