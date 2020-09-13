 <?php
    

    class Controller
    {
        private $r;
        function __construct()
        {
            $this->r = $_REQUEST;
            //var_dump($_REQUEST);
            switch (true) {

                case (isset($this->r['home'])):
                    View::setLayout("home");
                    break;
                case (isset($this->r['farmacia'])):
                    View::setLayout("farmacia");
                    break;
                case (isset($this->r['equipe'])):
                    View::setLayout("equipe");
                    break;
                case (isset($this->r['estetica'])):
                    View::setLayout("estetica");
                    break;
                case (isset($this->r['exames'])):
                    View::setLayout("exames");
                    break;
                case (isset($this->r['fotos'])):
                    View::setLayout("fotos");
                    break;
                case (isset($this->r['index'])):
                    View::setLayout("home");
                    break;
                case (isset($this->r['about'])):
                    View::setLayout("about");
                    break;
                case (isset($this->r['videos'])):
                    View::setLayout("videos");
                    break;
                default:
                    View::setLayout("home");
            }
            View::toDisplay();
        }
    }
