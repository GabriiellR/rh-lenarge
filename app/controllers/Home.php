<?php
class Home extends Controller {

    // Index of the home page (localhost/home(/index))
    public function index($param1= '', $param2= '', $param3= '') {
        
        // Initialize Test model
        $test = $this->model('Usuario');

        // Call function from the model
        // $testData = $test->getTestFunction();
        // $testData = [];

        $this->view('home/index', ['test' => [], 'parameters' => [$param1, $param2, $param3]]);
    }

    public function teste($param1= '', $param2= '', $param3= ''){
        $this->view('login/index', []);

    }
}

?>