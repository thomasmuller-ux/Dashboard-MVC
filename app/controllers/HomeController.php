<?php
/**
 * home - Controller de exemplo
 * @author Cândido Farias
 * @package mvc
 * @since 0.1
 */
class HomeController extends MainController
{

	public function __construct(){
		parent::__construct();
		if(!isset($_SESSION['user'])){
			header("Location:".URL_BASE."users/login");
		}
	}

    public function index() {
		// Título
		$this->title = 'Home';

		$this->carregar();

			
		
    } // index

	public function carregar(){
		$model=$this->load_model("Home");
		$listMoviments=$model->list();
		$data=$listMoviments;

		$listInput=$model->listInput();
		$dataInput=$listInput;

		$listOutput=$model->listOutput();
		$dataOutput=$listOutput;

		$listSumInput=$model->listSumInput();
		$dataSumInput=$listSumInput;

		$listSumOutput=$model->listSumOutput();
		$dataSumOutput=$listSumOutput;

		$this->view->show('home\home', $data, $dataInput, $dataOutput, $dataSumInput, $dataSumOutput);
	}

	
} // class HomeController