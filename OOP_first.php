

  <?php

  class student
  {
    public $id;
    public $name;
    public $email;
    public $phone_number;

    function __construct($id, $name, $email, $phone_number)
    {
      $this->id = $id;
      $this->name = $name;
      $this->email = $email;
      $this->phone_number = $phone_number;
    }
    // function get_name(): string
    // {
    //   return $this->name;
    // }
    // function get_number(): int
    // {
    //   return $this->phone_number;
    // }
    function __destruct()
    {
      echo "{$this->name}'s id is {$this->id} and her phone number is : {$this->phone_number}.";
    }
  }

  $sara = new student(123443, "sara", "sara@orange.com", "0777777777");

  class teacher extends student
  {
    public $salary;
    public $subjects;

    public function __construct($id, $name, $email, $phone_number, $salary, $subjects)
    {
      $this->id = $id;
      $this->name = $name;
      $this->email = $email;
      $this->phone_number = $phone_number;
      $this->salary = $salary;
      $this->subjects = $subjects;
    }

    public function get_salary()
    {
      return $this->salary;
    }
    public function get_subjects()
    {
      return $this->subjects;
    }
    // function __destruct()
    // {
    //   echo "{$this->name}'s salary is {$this->salary} and his subjects are : ";
    //   foreach (${$this->name}->get_subjects() as $value) {
    //     echo "$value <br>";
    //   }
    // }
  }

  //$sadi_subjects = array(English, Arabic, Math, science)

  $sadi = new teacher(96432, "sadi", "sadi@gmail.com", "0777788888", 800, ["English", "Arabic", "Math", "science"]);

  //echo $sadi->get_subjects();

  foreach ($sadi->get_subjects() as $value) {
    echo "$value <br>";
  }

  //echo "+962" . (int)$sadi->phone_number;
  //echo $sara -> get_number();
  //echo "<br>";
  //echo $sara -> get_name();
