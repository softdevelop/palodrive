<?php
App::uses('Component', 'Controller');
App::import('Utility', 'Xml');
class XmlFunctionsComponent extends Component
{
	public $path;

	/** FILE CLASS **/
	private function getFile()
	{
		$signUpFileName = CakeSession::read('sign_up_file_name');
		if( isset($signUpFileName))
		{
			$fileName = $signUpFileName . '.xml';
			$this->path =  APP . 'Data/' . $fileName;
			$file = new File($this->path, false, 0777);
			return $file;
		}

	}

	public function createXmlFile()
	{
		$file = $this->getFile();
		if(!$file->exists())
		{
			$file->create();
			$xmlEmpty = '<?xml version="1.0" encoding="utf-8"?><root></root>';
			$file->write($xmlEmpty);
		}
		else
		{
			throw new Exception("File was exists");
		}

	}

	/**
	 * check file was exist
	 * @return boolean
	 */
	public function isExist()
	{
		$file = $this->getFile();
		
		return $file->exists();
	}


	/** XML Class Cakephp **/
	public function getXmlFile()
	{
		$this->path = APP . "Data\\" . CakeSession::read('sign_up_file_name') . '.xml';
		$xmlBuilded = simplexml_load_file($this->path);
		return $xmlBuilded;
	}

	public function addNodes($data = '', $removeNode = false)
	{
		$xml = $this->getXmlFile();

		$domXpath = new domXpath($xml);

		var_dump($domXpath);die('123');

		if($removeNode)
		{
			// Find to user node and remove
		}
		foreach ($xml as $value) {
			$value->master->addChild('abc', '1111');
		}

		$file = $this->getFile();
		$xml->asXML(APP . "Data\\" . CakeSession::read('sign_up_file_name') . '.xml');
		//echo $file->write($xml->asXML());
		//print_r($xml);
		die('123');
		
	}

	public function removeNode($name = '')
	{

	}

}