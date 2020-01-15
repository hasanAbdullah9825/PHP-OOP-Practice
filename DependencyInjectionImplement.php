<?Php
// $filename='C:\\Users\\Hasan\\Desktop\\a\\f2.txt';
// file_put_contents($filename,"hasan");

interface BaseStorage{
    function setFileName($fn);
    function writeData($data);

}

class Storage implements BaseStorage{
private $fn;
private $mode;
function __construct($fn,$mode=null){
$this->fn=$fn;
$this->mode=$mode;
}
function setFileName($fn){
$this->fn=$fn;
}
function writeData($data){
    file_put_contents($this->fn,$data);
}
function setMode($mode){
    $this->mode = $mode;
}


}

// class DataManager{
//     function saveData($filename,$data){
//         $storage=new Storage($filename);//hard dependency
//         $storage->writeData($data);
//     }
// }

//
class DataManager{
    function saveData(BaseStorage $storage,$data){
       
        $storage->writeData($data);
    }
}
$file=new Storage('C:\\Users\\Hasan\\Desktop\\a\\f2.txt');
$file->setMode(FILE_APPEND);
$file->setMode(null);
$dm=new Datamanager();
$dm->saveData($file,"My new data using dependency injection");//dependency injection
