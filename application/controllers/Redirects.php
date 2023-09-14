<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redirects extends CI_Controller {

    public function greytHR() {
        redirect('https://www.greythr.com/?utm_source=Organic+traffic&utm_medium=Web&utm_campaign=Arrowbusinesssolutions-partner&utm_term=digital-solution-partner&utm_content=gt-logo', 'location');
    }
}
