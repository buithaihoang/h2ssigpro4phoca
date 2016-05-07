<?php
//add new 1
//update from other
//more
defined('_JEXEC') or die;
 
class PlgContentH2SSigPro4Phoca extends JPlugin
{  
 	public function onContentAfterSave($context, $article, $isNew)
	{  
		require_once JPATH_ADMINISTRATOR.'/components/com_sigpro/helper.php';
		$phocaholder = JRequest::getString('phocafolder',false); 
		
		if($context=='com_phocagallery.phocagalleryimg'&&$isNew){
			jimport('joomla.filesystem.folder');
			$path = SigProHelper::getPath('users');
			if(JFolder::exists($path.DIRECTORY_SEPARATOR.$phocaholder)){
				JFolder::move($path.DIRECTORY_SEPARATOR.$phocaholder, $path.DIRECTORY_SEPARATOR.'phocagallery-'.$article->id);
			}
		}
 	}
}
