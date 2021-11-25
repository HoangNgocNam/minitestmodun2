<?php
include_once "People.php";

class PeopleManage
{
    public $peopleManage;
    public $path;

    public function __construct()
    {
        $this->peopleManage = $this->loadData();
        $this->path = "data.json";
    }

    function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->path, $dataJson);
    }

    function loadData()
    {
        $dataJson = file_get_contents("data.json");
        if (!empty($dataJson)) {
            $data = json_decode($dataJson, true);
            return $this->convertToObj($data);
        } else {
            return [];
        }
    }

    function display()
    {
        return $this->peopleManage;
    }

    function addData($request)
    {
        $peoples = $this->loadData();
        $people = new People($request['name'], $request['age']);
        array_push($peoples, $people);
        $this->saveData($peoples);
    }

    function searchName($request)
    {
        $name = $request['name'];
        foreach ($this->peopleManage as $people) {
            if ($people->getName() == $name) {
                echo 'Tên: ' . $people->getName() . " - " . 'Tuổi: ' . $people->getAge();
                return true;
            }
        }
        echo "Không tìm thấy đối tượng";
    }

    function convertToObj($arr)
    {
        $peoples = [];
        foreach ($arr as $key => $value) {
            $people = new People($value['name'], $value['age']);
            array_push($peoples, $people);
        }
        return $peoples;
    }
}